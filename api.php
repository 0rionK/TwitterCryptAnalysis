<?
/*

//assign extra point for popular account(ie +1 for every 1000 followers)
//do separate analysis for crypto and its ticker(ie etherium and ETH), add them together, update the appropriate db entry
//have cron to cycle through all cryptos in a 30 min period.
//if abnormal activity, have php post a tweet for me to receive
//bonus words
//cycle#sentnum:pos:neg:neut#sentnum:pos:neg:neut
///vol change might be a worthy stat from cmc
///scrape news, look at % change, look for coins approaching takeovers of other coins' top spots
//record total tweets, record next currency
//add keywords back into lib
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/

include 'incl.php';

$time=time();


$file='sent.txt';
$current = file_get_contents($file);
$curr=explode("#",$current);

$lasttweet=$curr[1];
$cycle=$curr[0]+1;
if($cycle > $maxcoins){ $cycle=2; }


if($coinarray[$cycle]['repeat']==1){
	$searchq=$coinarray[$cycle]['name'];
	$double=1;
}
if($coinarray[$cycle]['repeat']==0){
	$searchq=$coinarray[$cycle]['name']."+OR+".$coinarray[$cycle]['ticker'];
}

echo $searchq;

//begin twitter search
require_once "twitteroauth-master/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;
 
define('CONSUMER_KEY', 'xxxxx');
define('CONSUMER_SECRET', 'xxxxxxxxxxx');
define('ACCESS_TOKEN', 'xxxxxxxx-xxxxxxxxxxx');
define('ACCESS_TOKEN_SECRET', 'xxxxxxxxxxxxxxxx');

///fetch tweets
$conn = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);
$query = array(
 "q" => $searchq,
 'lang'=>'en',
 "count" => 100,
 "result_type" => "recent"
);
$tweets = $conn->get('search/tweets', $query);

$i=0;
$strings=array();
$followers=array();

foreach ($tweets->statuses as $tweet) {
	echo '<p>'.$tweet->text.'<br>Posted on: <a href="https://twitter.com/'.$tweet->user->screen_name.'/status/'.$tweet->id.'">'.date('Y-m-d H:i', strtotime($tweet->created_at)).'</a></p>';
	$created=strtotime($tweet->created_at);
	$followers[$i]=$tweet->user->followers; ///get this to analytics
	$i=$i+1;
	array_push($strings, $tweet->text);
/*
if(($time-$created) < 1800){  //make sure tweet isnt old
}*/
}


//begin phpInsight
if (PHP_SAPI != 'cli') {
	echo "<pre>";
}

require_once __DIR__ . '/autoload.php';
$sentiment = new \PHPInsight\Sentiment();
$j=0;

$neg=0; $pos=0; $neu=0;


///cycle#coin1st:coin1stlatest:coin1stbefore.

foreach ($strings as $string) {
	$weight=0;
	if($followers[$j] > 999){
		$weight=round($followers[$j]/1000);	
}
	$scores = $sentiment->score($string);
	$neg=$neg+$scores['neg']+$weight;
	$pos=$pos+$scores['pos']+$weight;
	$neu=$neu+$scores['neu']+$weight;
	//echo "<br>";
}

$stoptweet=1;
//prevent duplicate tweets
if($curr[1]==$cycle){ 
	$stoptweet=1; }
else if((round($sent_total) > 40)or(round($sent_total) < -40)){
	$curr[1]=$cycle;
	$stoptweet=0;
}
//end duplicate tweets

$sent_total=$pos-$neg;
$curr[0]=$cycle;
$cs=$curr[$cycle];
$curr[$cycle]=$cs.":".$sent_total;
$newcurr=implode("#",$curr);
file_put_contents($file, $newcurr); //save sent.ext

if($stoptweet==0){
	if((round($sent_total) > 40)or(round($sent_total) < -40)){
		$tweet = "Watchdog: ".$coinarray[$cycle]['name']." ". $sent_total;
		$content = $conn->get("account/verify_credentials");
		$statues = $conn->post("statuses/update", ["status" => $tweet]);
	}
}
?>