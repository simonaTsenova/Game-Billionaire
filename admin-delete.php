<?php
    require_once('db_connect.php');
    header('Content-Type: text/html; charset=utf-8'); 
    mysqli_query($conn, 'SET NAMES utf8');

    if(empty($_POST)) {

    $q = "SELECT * FROM questions WHERE id = $_GET[id]";
    $res = mysqli_query($conn, $q);

    $row = mysqli_fetch_assoc($res);

    } else {
      $q2 = "DELETE FROM questions       
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
  <title> Delete Question </title>
</head>
 
<body>
    <div class="container">
     
                <div class="span10 offset1">
                    <div class="row">
                        <div>
                            <img src="Millionaire.jpg" class="img-responsive img-circle center-block"/>
                        </div>

                        <h2 class="text-center" id="heading"> <b>Delete Question</b></h2>
                    </div>

                  <div class="row">
                      <div class="col-xs-4 col-xs-offset-4">   
                        <form class="form-horizontal" action="admin-delete.php" method="post">
                          <input name="id1" type="hidden" value="<?php echo $row['id']; ?>"/>
                          <p class="alert alert-error">Are you sure you want to delete this question?</p>

                          <div class="form-actions">
                              <input type="submit" class="btn btn-danger col-xs-offset-1" value="Yes"/>
                              <a class="btn btn-success col-xs-offset-1" href="admin-panel.php">No</a>
                            </div>
                        </form>
                      </div>
                  </div>  
                </div>
                 
    </div> <!-- /container -->
  </body>
</html>