<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Watchdog</title>
<style>
body {
    background-color: black;
		color:#FFF;
}
</style>
</head>

<body>
<?


include 'incl.php';
$file='sent.txt';
$current = file_get_contents($file);
$curr=explode("#",$current);
$next=$curr[0]+1;
if($next > $maxcoins){ $next=2; }
	echo "Next to update: ".$coinarray[$next]['name']."<br>Each candlestick represents a time period of [30] minutes.<br><br>";
//count num of entries
$sub=explode(":",$curr[2]);
$entries=count($sub);
$days=$entries/48; //48 is 1440(min in a day) / 30 (refresh time)
$daysf=floor($days);
$remainder=$days-$daysf; //.25 days
$remainderbars=floor($remainder*48); //startat

//start with tether
$sub=explode(":",$curr[17]);
$numcandles=count($sub); //300
$maxcandles=10080/30; //only show 1 week of data //288 <---iteration 35
$startpos=$numcandles-$maxcandles; //50
$color="00ff00";
if(end($sub) < 0){ $color="ff0000"; }

echo "<b><font color=00ff00>".$coinarray[17]['name']."</font></b> <font color=\"$color\">".end($sub)." </font><br>";
$j=0;
$daybars=1;
$c=1;
foreach ($sub as $sent) {
	if($c>=$startpos){
		if($sent > 0){ $img="pos"; }else{ $img="neg"; }
		$sent=abs($sent*2);
	if($j==$remainderbars){ $img="neu"; }
	$rb=$j-$remainderbars;
	if($rb % 48){  }else{ $daybars++; if($daybars < 9){ $img="neu"; } }
	echo '<img src="'.$img.'.png" height="'.$sent.'" width="2">';
	}
$j++;
$c++;
}
echo "<br>";
//end tether

//#sentnum:pos:neg:neut
for ($x = 2; $x <= $maxcoins; $x++) {
	if($x!=17){ //skip tether
		$sub=explode(":",$curr[$x]);
		$numcandles=count($sub); //300
		$maxcandles=10080/30; //only show 1 week of data //288 <---iteration 35
		$startpos=$numcandles-$maxcandles; //50
		$color="00ff00";
		if(end($sub) < 0){ $color="ff0000"; }
	echo "<b>".$coinarray[$x]['name']."</b> <font color=\"$color\">".end($sub)." </font><br>";
	$j=0;
	$daybars=1;
	$c=1;
	foreach ($sub as $sent) {
		if($c>=$startpos){
			if($sent > 0){ $img="pos"; }else{ $img="neg"; }
			$sent=abs($sent*2);
			if($j==$remainderbars){ $img="neu"; }
			$rb=$j-$remainderbars;
			if($rb % 48){  }else{ $daybars++; if($daybars < 9){ $img="neu"; } }
			echo '<img src="'.$img.'.png" height="'.$sent.'" width="2">';
		}
		$j++;
		$c++;
	}
	echo "<br>";
	}
} 


?>
</body>
</html>