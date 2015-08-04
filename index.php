<?php
	require_once('db_connect.php');
	require_once('header.php');
	if(!empty($_POST)) {
		check();
	}

	

	if(!isset($_SESSION['level']) && empty($_SESSION['level'])){
		$_SESSION['level'] = 0;
	}

	require_once('random_question.php');

	function check () {
		$chosen = substr($_POST['answer'], 3);

		if(sha1($chosen) == $_POST['cor']) {
			$_SESSION['level']++;
			header('Location: index.php');
			if($_SESSION['level']>=15){
				header('Location: getMoney.php');
			}
		} else {
			header('Location: getMoney.php');
		}
	}

	function f($num) {
		if($_SESSION['level']>=$num) {
			echo "answered";
		}
	}

?>

		<div class="row">
			<div class="col-xs-2 col-xs-offset-1">

				<!--Money-->
				<ol class="list-group" reversed="reversed" start="15">
					<li class="list-group-item <?php f(15); ?>" >15. 100000</li>
					<li class="list-group-item <?php f(14); ?>" >14. 50000</li>
					<li class="list-group-item <?php f(13); ?>" >13. 25000</li>
					<li class="list-group-item <?php f(12); ?>">12. 10000</li>
					<li class="list-group-item <?php f(11); ?>">11. 5000</li>
					<li class="list-group-item <?php f(10); ?>">10. 2500</li>
					<li class="list-group-item <?php f(9); ?>">9. 2000</li>
					<li class="list-group-item <?php f(8); ?>">8. 1500</li>
					<li class="list-group-item <?php f(7); ?>">7. 1000</li>
					<li class="list-group-item <?php f(6); ?>">6. 500</li>
					<li class="list-group-item <?php f(5); ?>">5. 250</li>
					<li class="list-group-item <?php f(4); ?>">4. 200</li>
					<li class="list-group-item <?php f(3); ?>" >3. 150</li>
					<li class="list-group-item <?php f(2); ?>" >2. 100</li>
					<li class="list-group-item <?php f(1); ?>">1. 50</li>
				</ol>

			</div>

			<div class="col-xs-8">

				<div class="row">
				  <div class="col-xs-8" >
				  	<img src="Millionaire.jpg" class="img-responsive img-circle center-block" />
				  </div>
				  
				  <div class="col-xs-4">
					<div class="btn btn-group-lg btn-group-vertical" role="group" >
						  <button type="button" id="aud" class="btn btn-primary" onclick="askAudience()">
						  	<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
						  	Ask the audience
						  </button>
						  <button type="button" id="fif" class="btn btn-primary" onclick="fiftyFifty()">50/50</button>
						  <button type="button" id="friend" class="btn btn-primary" onclick="callFriend('<?php echo "Смятам, че верният отговор е: $correct!"; ?>')">
						  	<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
						  	Call a friend
						  </button>
					</div>
					<a href='getMoney.php'>
					<button type="button" class="btn-lg btn-warning" id="takeMoney">Вземам си парите</button>
					</a>

				</div>

				<form action="index.php" method="POST">
					<input type="hidden" name="cor" value="<?php echo sha1($correct); ?>" />
				<div class="row" id="qtnField">
					<!--Questions-->
					<div class="col-xs-10 col-xs-offset-1" id="question">

						<div class="row">
							<div class="col-xs-12 thumbnail" >
								<p class="text-center"> <?php echo "$level . $question"; ?> </p>
							</div>
						</div>

						<div class="row">
							<div>
								<input type="submit" class="btn btn-lg btn-default.raised col-xs-6 thumbnail" id="A" name="answer" value="A. <?php echo "$answerA"; ?>"/>
									
							</div>

							<div>
								<input type="submit" class="btn btn-lg btn-default.raised col-xs-6 thumbnail" id="B" name="answer" value="B. <?php echo "$answerB"; ?>"/>
							</div>
						</div>

						<div class="row">
							<div>
								<input type="submit" class="btn btn-lg btn-default.raised col-xs-6 thumbnail" id="C" name="answer" value="C. <?php echo "$answerC"; ?>"/>
									
							</div>

							<div>
								<input type="submit" class="btn btn-lg btn-default.raised col-xs-6 thumbnail" id="D" name="answer" value="D. <?php echo "$answerD"; ?>"/>
									
							</div>
						</div>

					</div>
					
				</div>
			</form>


			</div>
		</div>
<?php
	require_once('footer.php');
?>