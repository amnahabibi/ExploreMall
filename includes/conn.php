<?php
	$conn = new mysqli('localhost', 'root', '', 'exploredb');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>