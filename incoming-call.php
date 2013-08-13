<?php
    // make an associative array of callers we know, indexed by phone number
    $people= array(
		"+15202508037"=>"Britney",
		);
	
	// if the caller is known, then greet them by name
	// otherwise, consider them just another monkey
	if(!$name = $people[$_REQUEST['From']])
		$name = "Advocate";
		
	// now greet the caller
	header("content-type: text/xml");
	echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>

<Response>
	<Say>Hello <?php echo $name ?>.</Say>
	<Gather numDigits="1" action="handle-key.php" method="POST">
		<Play>memo.mp3</Play>
	</Gather>
</Response>    	