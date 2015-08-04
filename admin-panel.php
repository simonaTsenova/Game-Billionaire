<?php
  require_once ('db_connect.php');
	header('Content-Type: text/html; charset=utf-8'); 
	mysqli_query($conn, 'SET NAMES utf8');
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

  <title> Admin Panel </title>

  <style type="text/css">
       body { background: #00004c; margin-top: 5%; font-weight: bolder; font-family: verdana; color:white;}
       #heading {padding-top: 3%; padding-bottom: 3%; }
  </style>
</head>
<body>

	<div class="container">
            <div class="row">
                
                <div class ="col-xs-12">
                  <img src="Millionaire.jpg" class="img-responsive img-circle center-block"/>
                </div>

                <h2 class="text-center" id="heading"> <b>Admin Panel</b></h2>
                <p class="text-center">
                    <a href="admin-add.php" class="btn btn-success">Add New Question</a>
                </p>
            </div>
            <div class="row">
                <table class="table table-condensed table-bordered">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Въпрос</th>
                      <th>Отговор А</th>
                      <th>Отговор Б</th>
                      <th>Отговор В</th>
                      <th>Отговор Д</th>
                      <th>Верен отговор</th>
                      <th>Ниво</th>
                      <th>Обнови</th>
                      <th>Изтрий</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  
                    $q = "SELECT * from questions";
          					$result = mysqli_query($conn, $q);

          					if(mysqli_num_rows($result) > 0) {
          						while($row = mysqli_fetch_assoc($result)) {
          							echo "<tr>";
          							echo "<td>$row[id] </td>";
          							echo "<td>$row[question] </td>";
          							echo "<td>$row[answerA] </td>";
          							echo "<td>$row[answerB] </td>";
          							echo "<td>$row[answerC] </td>";
          							echo "<td>$row[answerD] </td>";
          							echo "<td>$row[correctAnswer] </td>";
          							echo "<td>$row[difficulty] </td>";
          							echo '<td><a class="btn btn-info" href="admin-update.php?id='.$row['id'].'">Update question</a></td>';
          							echo '<td><a class="btn btn-danger" href="admin-delete.php?id='.$row['id'].'">Delete question</a></td>';
          							echo "</tr>";
          						}
          					}

                  ?>
                  </tbody>
            </table>
        </div>

</body>
</html>