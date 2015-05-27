<?php

	
	require_once($_SERVER['DOCUMENT_ROOT'].'cloud/models/main/index.php');
	

	ini_set('display_errors',1);  error_reporting(E_ALL); 


	$resp = getPrices();


	echo(json_encode($resp));

<<<<<<< HEAD


	//prop

	function getPrices(){

			//echo($theDate);
			//echo("http://www.quandl.com/api/v1/datasets/BITCOIN/BITSTAMPUSD?auth_token=6sQU_EYPwHRMkJsReFG9");
			$info = file_get_contents("https://www.bitstamp.net/api/ticker/");
			$tInfo = json_decode($info, true);

			$price = $tInfo['last'];
			$ask = $tInfo['ask'];
			$bid = $tInfo['bid'];
			$volume = $tInfo['volume'];

			dbQuery("INSERT INTO bitstampPrices (price, bid, ask, volume) VALUES ($price, $bid, $ask, $volume)");
			
		echo("INSERT INTO bitstampPrices (price, bid, ask, volume) VALUES ($price, $bid, $ask, $volume)");

	

		//return true  
		

=======
	//prop
	
	function getPrices(){
			$info = file_get_contents("https://www.okcoin.com/api/v1/ticker.do?symbol=btc_usd");
			$tInfo = json_decode($info, true)['ticker'];

			$price = $tInfo['last'];
			$ask = $tInfo['sell'];
			$bid = $tInfo['buy'];
			$volume = $tInfo['vol'];

			dbQuery("INSERT INTO okcoinPrices (price, ask, bid, volume) VALUES ($price, $ask, $bid, $volume)");
			echo("INSERT INTO okcoinPrices (price, ask, bid, volume) VALUES ($price, $ask, $bid, $volume)");
		//return true  
>>>>>>> ac1a37c8d7b3fd0c21def9acbd3318c3767763aa
		return $tInfo;
	}


?>