<?php
	$ipAddress = $_GET['ip'];
	$pingResult = shell_exec('ping -n 4 ' . $ipAddress); // Change the number of pings as needed

	echo nl2br($pingResult); // Output the ping result with line breaks
?>
