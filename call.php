<?php
mysql_connect("YOURMYSQLHOST", "YOURMYSQLUSER");
mysql_select_db("twitboard");
if(@$_GET['func'] == "gettweets"){
	$query = mysql_query("SELECT * FROM `tweets` ORDER BY (time) DESC LIMIT 0,10");
	
	$tweet = array();
	while($row = mysql_fetch_assoc($query)){
		$tweet[] = array(
		"user" => $row['user'],
		"tweet" => $row['text'],
		"time" => $row['time']
		);
	}
	$arr = array(
		'tweets' => $tweet
	);
	echo json_encode($arr);	
}else{
	$mods = array(
			"twitboard_gettweets" => "v1.0",
			"twitboard_jquery" => "v1.0",
			"twitboard_stats" => "v1.0",
			"twitboard_json" => "v1.1"
			);
	$arr = array(
			"server" => "ready",
			"running" => "TwitBoard Alpha 1.0.1",
			"modules" => $mods
			);
	
		echo json_encode($arr);
}

?>