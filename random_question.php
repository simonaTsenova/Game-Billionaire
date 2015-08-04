<?php
	require_once('db_connect.php');
	header('Content-Type: text/html; charset=utf-8'); 
	mysqli_query($conn, 'SET NAMES utf8');
	
	$level = $_SESSION['level']+1;

	
	$q = "SELECT * from questions WHERE difficulty=$level ORDER BY RAND() LIMIT 1";

	$result = mysqli_query($conn, $q);

	if(mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			$id = $row['id'];
			$question = $row['question'];
			$answerA = $row['answerA'];
			$answerB = $row['answerB'];
			$answerC = $row['answerC'];
			$answerD = $row['answerD'];
			$correct = $row['correctAnswer'];

		}

	}

?>

