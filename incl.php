<?
$maxcoins=61;



$coinarray= array(
'0' => array('name' => "CYCLE", 'ticker' => "", 'repeat' => 2),
'1' => array('name' => "SUBCYCLE", 'ticker' => "", 'repeat' => 2), 
'2' => array('name' => "bitcoin", 'ticker' => "BTC", 'repeat' => 1),
'3' => array('name' => "ethereum", 'ticker' => "ETH", 'repeat' => 1),
'4' => array('name' => "\"Bitcoin Cash\"", 'ticker' => "BCH", 'repeat' => 1),
'5' => array('name' => "Cardano", 'ticker' => "ADA", 'repeat' => 1),
'6' => array('name' => "Litecoin", 'ticker' => "LTC", 'repeat' => 1),
'7' => array('name' => "NEO", 'ticker' => "NEO", 'repeat' => 1), //SAME
'8' => array('name' => "Stellar", 'ticker' => "XLM", 'repeat' => 0),
'9' => array('name' => "EOS", 'ticker' => "EOS", 'repeat' => 1),
'10' => array('name' => "IOTA", 'ticker' => "MIOTA", 'repeat' => 0),
'11' => array('name' => "NEM", 'ticker' => "XEM", 'repeat' => 0),
'12' => array('name' => "DASH", 'ticker' => "DASH", 'repeat' => 1), //DASH
'13' => array('name' => "Monero", 'ticker' => "XMR", 'repeat' => 0),
'14' => array('name' => "Lisk", 'ticker' => "LSK", 'repeat' => 1),
'15' => array('name' => "TRON", 'ticker' => "TRX", 'repeat' => 0),
'16' => array('name' => "\"Ethereum Classic\"", 'ticker' => "ETC", 'repeat' => 1), ///ETC
'17' => array('name' => "Tether", 'ticker' => "USDT", 'repeat' => 0),
'18' => array('name' => "Qtum", 'ticker' => "QTUM", 'repeat' => 1),
'19' => array('name' => "\"Bitcoin Gold\"", 'ticker' => "BTG", 'repeat' => 1),
'20' => array('name' => "VeChain", 'ticker' => "VEN", 'repeat' => 1),
'21' => array('name' => "ICX", 'ticker' => "ICON", 'repeat' => 1),//ICON
'22' => array('name' => "Nano", 'ticker' => "XRB", 'repeat' => 1),
'23' => array('name' => "Zcash", 'ticker' => "ZEC", 'repeat' => 0),
'24' => array('name' => "Populous", 'ticker' => "PPT", 'repeat' => 0),
'25' => array('name' => "OmiseGO", 'ticker' => "OMG", 'repeat' => 1),//OMG
'26' => array('name' => "Steem", 'ticker' => "STEEM", 'repeat' => 1),
'27' => array('name' => "\"Binance Coin\"", 'ticker' => "BNB", 'repeat' => 0),
'28' => array('name' => "Bytecoin", 'ticker' => "BCN", 'repeat' => 0),
'29' => array('name' => "XVG", 'ticker' => "Verge", 'repeat' => 0), //verge
'30' => array('name' => "SNT", 'ticker' => "STATUS", 'repeat' => 1), //status
'31' => array('name' => "Stratis", 'ticker' => "STRAT", 'repeat' => 0),
'32' => array('name' => "Siacoin", 'ticker' => "SC", 'repeat' => 1),///SC
'33' => array('name' => "Aeternity", 'ticker' => "BCN", 'repeat' => 0),
'34' => array('name' => "Revain", 'ticker' => "R", 'repeat' => 1),//
'35' => array('name' => "Dentacoin", 'ticker' => "DENT", 'repeat' => 1),//
'36' => array('name' => "ETHOS", 'ticker' => "DOGE", 'repeat' => 1),//

'37' => array('name' => "RChain", 'ticker' => "RHOC", 'repeat' => 1),//
'38' => array('name' => "DigixDAO", 'ticker' => "DGD", 'repeat' => 1),//
'39' => array('name' => "Bitshares", 'ticker' => "BTS", 'repeat' => 1),//
'40' => array('name' => "Waltonchain", 'ticker' => "WTC", 'repeat' => 1),//
'41' => array('name' => "Decred", 'ticker' => "DCR", 'repeat' => 1),//
'42' => array('name' => "Augur", 'ticker' => "REP", 'repeat' => 1),//
'43' => array('name' => "Electroneum", 'ticker' => "ETN", 'repeat' => 1),//
'44' => array('name' => "ZClassic", 'ticker' => "ZCL", 'repeat' => 1),//
'45' => array('name' => "Dogecoin", 'ticker' => "DOGE", 'repeat' => 1),//
'46' => array('name' => "Veritaseum", 'ticker' => "VERI", 'repeat' => 1),//
'47' => array('name' => "Hshare", 'ticker' => "ETHOS", 'repeat' => 1),//
'48' => array('name' => "Request Network", 'ticker' => "REQ", 'repeat' => 1),//
'49' => array('name' => "Komodo", 'ticker' => "KMD", 'repeat' => 1),//
'50' => array('name' => "Ardor", 'ticker' => "ARDR", 'repeat' => 1),//
'51' => array('name' => "\"Basic Attention Token\"", 'ticker' => "BAT", 'repeat' => 1),//
'52' => array('name' => "Zilliqa", 'ticker' => "ZIL", 'repeat' => 1),//
'53' => array('name' => "Cryptonex", 'ticker' => "CNX", 'repeat' => 1),//
'54' => array('name' => "DigiByte", 'ticker' => "DGB", 'repeat' => 1),//
'55' => array('name' => "Byton", 'ticker' => "BTM", 'repeat' => 1),//
'56' => array('name' => "Loopring", 'ticker' => "LRC", 'repeat' => 1),//
'57' => array('name' => "Dragonchain", 'ticker' => "DRGN", 'repeat' => 1),//
'58' => array('name' => "Aelf", 'ticker' => "ELF", 'repeat' => 1),//
'59' => array('name' => "Suburban Propane Partners", 'ticker' => "SPH", 'repeat' => 1),//
'60' => array('name' => "NGL Energy Partners", 'ticker' => "NGL", 'repeat' => 1),//
'61' => array('name' => "Ferrellgas Partners", 'ticker' => "FGP", 'repeat' => 1),//

);
?>