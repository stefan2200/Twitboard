<html>
<head>
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script>
var tweetarray;
var currenttweet = 0;
function refreshtweets(){
	$.get( "call.php?func=gettweets", function( data ) {
		var tweet = "";
		twitjson = jQuery.parseJSON(data);
		tweetarray = twitjson['tweets'];
	});
}
function nexttweet(){
			var tweet;
			tweet = tweetarray[currenttweet]['user'] + "<br />";
			tweet = tweet + tweetarray[currenttweet]['time'] + "<br />";
			tweet = tweet + tweetarray[currenttweet]['tweet'] + "<br /><br />";
		  $( "label.txt" ).html(tweet);
		  $('label.txt').fadeIn('slow');
		  currenttweet++;
		  var max;
		  if(tweetarray.lenght == 10){
		  max = 10;
		  }else{
		  max = tweetarray.length;
		  }
		  if(currenttweet == max){
		        refreshtweets();
				currenttweet = 0;
		  }
		  
}
function countdown(){
	var sec = 10;
	var timer = setInterval(function() { 
	   $('span.countdown').html(sec--);
	   if (sec == 0){
		$('label.txt').fadeOut('slow');
	   }
	   if (sec == -1) {
		 nexttweet();
		 sec = 10;
	   } 
	}, 1000);
}
refreshtweets();
countdown();
</script>
</head>
<body bgcolor="#ADD8E6">
<div class='board' style="font-size: 30px; height: 80%; background-color: #ADD8E6; text-align: center;">
<label class="txt">
Welcome to Impacts Twitboard, Your tweets will start loading in 10 secs
</label>
</div>
<div style="height: 20%; text-align: center; background-color:#00FFFF;">
<span class='countdown' style="font-size: 30px">

</span>
</div>
</body>
</html>