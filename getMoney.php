<?php
  require_once('header.php');
  require_once('db_connect.php');
  require_once('random_question.php');

  $lvl = $_SESSION['level'];

  $q1 = "SELECT * from difficultylevels WHERE difficulty=$lvl";
  $result1 = mysqli_query($conn, $q1);

  $money = 0;
  if(mysqli_num_rows($result1) > 0) {
    while($row1 = mysqli_fetch_assoc($result1)) {
      $money = $row1['money'];
    }

  }

  session_destroy();
?>

<div class="row">
    <div class ="col-xs-12">
      <img src="Millionaire.jpg" class="img-responsive img-circle center-block"/>
   </div> 
</div>

<div class="row">

  <div class ="col-xs-12">
    
    <br/>
    <h1 class="text-danger text-center"> <b> Край на играта </b> </h1>
    <h1 class="text-success text-center">Вие спечелихте <?php echo "$money "; ?> лева. </h1>
    <br/>
    
    <form>
      <div class="form-group">
        <div class="col-xs-2 col-xs-offset-4">
          <a href="index.php">
            <input type="button" class="btn btn-primary" value="Играй отново" />
          <a/>
        </div>
      </div>
      
      <div class="form-group">
        <div class="col-xs-2">
          <a href="https://www.google.bg">
            <input type="button" class="btn btn-warning" value="Излизам от играта"/>
          </a>
        </div>
      </div>
    </form>
   
   </div> 
   


</div>

</body>
</html>