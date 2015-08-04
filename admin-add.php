<?php
    require_once('db_connect.php');
    header('Content-Type: text/html; charset=utf-8'); 
    mysqli_query($conn, 'SET NAMES utf8');

    if(!empty($_POST)){
      // sql query
      $q3 = "INSERT INTO questions (`question`, `answerA`, `answerB`, `answerC`, `answerD`, `correctAnswer`, `difficulty`) 
      VALUES ('$_POST[quest]','$_POST[answA]','$_POST[answB]','$_POST[answC]','$_POST[answD]','$_POST[answCor]', '$_POST[diff]')";
      
      $res3 = mysqli_query($conn, $q3);

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

                      <h2 class="text-center" id="heading"> <b>Add a new Question to the database</b></h2>

                    </div>
             
                    <form class="form-horizontal" action="admin-add.php" method="post">
                      <div class="form-group">
                        <label for="quest">Въпрос</label>
                        <input type="text" class="form-control" id="quest" name="quest" placeholder="Въпрос">
                      </div>

                      <div class="form-group">
                        <label for="answA">Отговор А</label>
                        <input type="text" class="form-control" id="answA" name="answA" placeholder="Отговор А">
                      </div>

                      <div class="form-group">
                        <label for="answB">Отговор Б</label>
                        <input type="text" class="form-control" id="answB" name="answB" placeholder="Отговор Б">
                      </div>

                      <div class="form-group">
                        <label for="answC">Отговор В</label>
                        <input type="text" class="form-control" id="answC" name="answC" placeholder="Отговор В">
                      </div>

                      <div class="form-group">
                        <label for="answD">Отговор Г</label>
                        <input type="text" class="form-control" id="answD" name="answD" placeholder="Отговор Г">
                      </div>

                      <div class="form-group">
                        <label for="answCor">Верен отговор</label>
                        <input type="text" class="form-control" id="answCor" name="answCor" placeholder="Верен отговор">
                      </div>

                      <div class="form-group">
                        <label for="diff">Ниво</label>
                        <input type="text" class="form-control" id="diff" name="diff" placeholder="Ниво">
                      </div>

                      <div class="form-actions">
                          <input type="submit" class="btn btn-success" value="Add"/>
                          <a class="btn btn-danger" href="admin-panel.php">Back</a>
                        </div>
                    </form>
                </div>
    </div> <!-- /container -->
  </body>
</html>