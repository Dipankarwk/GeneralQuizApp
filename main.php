<?php 
include 'db.php';
$query = "SELECT * FROM questions";
$total_questions = mysqli_num_rows(mysqli_query($connection,$query));


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
				<h2>Test Your General Knowledge</h2>
				<p>
					This is a multiple choice quiz to test your General Knowledge.
				</p>
				<ul>
					<li><strong>Number of Questions:</strong><?php echo $total_questions; ?> </li>
					<li><strong>Type:</strong> Multiple Choice</li>
					<li><strong>Estimated Time:</strong> <?php echo $total_questions*1.5; ?></li>

				</ul>

				<a href="question.php?n=1" class="start">Start Quiz</a>

			</div>

	</main>

