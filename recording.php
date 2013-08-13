<?php

	// tell the caller that they should listen to their message
	// and play the recording back, using the URL that Twilio posted
	header("content-type: text/xml");
	echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
	include_once('bitly.php');
	$results = bitly_v3_shorten($_REQUEST['RecordingUrl'].'.mp3', 'j.mp');
?>
<Response>
	<Say>Thanks for providing your voice to this cause... take a listen to what you said.</Say>
	<Play><?php echo $_REQUEST['RecordingUrl']; ?></Play>
	<Say>Goodbye.</Say>
	<Sms>Thanks for providing your voice to this cause. Share with others: <?php echo $results['url']; ?></Sms>
</Response>
