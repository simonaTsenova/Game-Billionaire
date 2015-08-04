<?php
	require_once('db_connect.php');
	header('Content-Type: text/html; charset=utf-8'); 
	mysqli_query($conn, 'SET NAMES utf8');

	if(empty($_POST)) {

		$q = "SELECT * FROM questions WHERE id = $_GET[id]";
		$res = mysqli_query($conn, $q);

		$row = mysqli_fetch_assoc($res);

	} else {
		$q2 = "UPDATE questions SET
		question='$_POST[quest]',
		answerA='$_POST[answA]',
		answerB='$_POST[answB]',
		answerC='$_POST[answC]',
		answerD='$_POST[answD]',
		correctAnswer='$_POST[answCor]',
		difficulty='$_POST[diff]' 
		WHERE id = '$_POST[id1]'";

		$res2 = mysqli_query($conn, $q2);

		header('Location: admin-panel.php');

	}

?>

<html>
<head>
    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  <style type="text/css">
       body { background: #00004c; margin-top: 5%; font-weight: bolder; font-family: verdana; color:white;}
       #heading {padding-top: 3%; padding-bottom: 3%; }
  </style>
  <title> Add Question </title>
</head>
 
<body>
    <div class="container">
     
                <div class="span10 offset1">
                    <div class="row">
                        <div class ="col-xs-12">
                          <img src="Millionaire.jpg" class="img-responsive img-circle center-block"/>
                        </div>

                        <h2 class="text-center" id="heading"> <b>Update Question</b></h2>
                    </div>
             
                    <form class="form-horizontal" action="admin-update.php" method="POST">
                    <input name="id1" type="hidden" value="<?php echo $row['id']; ?>"/>
                      <div class="form-group">
                        <label for="quest">Въпрос</label>
                        <input type="text" class="form-control" name="quest" value="<?php echo $row['question']; ?>"/>
                      </div>

                      <div class="form-group">
                        <label for="answA">Отговор А</label>
                        <input type="text" class="form-control" name="answA" value="<?php echo $row['answerA']; ?>"/>
                      </div>

                      <div class="form-group">
                        <label for="answB">Отговор Б</label>
                        <input type="text" class="form-control" name="answB" value="<?php echo $row['answerB']; ?>"/>
                      </div>

                      <div class="form-group">
                        <label for="answC">Отговор В</label>
                        <input type="text" class="form-control" name="answC" value="<?php echo $row['answerC']; ?>"/>
                      </div>

                      <div class="form-group">
                        <label for="answD">Отговор Г</label>
                        <input type="text" class="form-control" name="answD" value="<?php echo $row['answerD']; ?>"/>
                      </div>

                      <div class="form-group">
                        <label for="answCor">Верен отговор</label>
                        <input type="text" class="form-control" name="answCor" value="<?php echo $row['correctAnswer']; ?>"/>
                      </div>

                      <div class="form-group">
                        <label for="diff">Ниво</label>
                        <input type="text" class="form-control" name="diff" value="<?php echo $row['difficulty']; ?>"/>
                      </div>

                      <div class="form-actions">
                          <button type="submit" class="btn btn-info">Update</button>
                          <a class="btn btn-danger" href="admin-panel.php">Back</a>
                        </div>
                    </form>
                </div>
    </div> <!-- /container -->
  </body>
</htm>