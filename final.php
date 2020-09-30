<?php 

session_start();

?>

<html>
<head>
	<title>General Quiz</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>

	<header>
		<div class="container">
			<p>General Quiz</p>
		</div>
	</header>

	<main>
			<div class="container">
				<h2>Your Result</h2>
				<p>Congratulation You have completed this test succesfully.</p>
				<p>Your <strong>Score</strong> is <?php echo $_SESSION['score']; ?>  </p>
				<?php if($_SESSION['score']<=6){
					echo "You need to work hard";
				}
				elseif($_SESSION['score']==7){
					echo "You need to study more";
				}
				else{
					echo "You are fantastic.. keep working";
				}
				?>
				<?php unset($_SESSION['score']); ?>
				<a href="solution.html" class="button">Close</a>
			</div>

	</main>


	








</body>
</html>