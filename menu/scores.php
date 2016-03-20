<?php

// High score database connection. (db-scores.php)

session_start();

if($_SESSION['gameMode'] == 1)
{
	if(isset($_GET['lose']))
	{
		// Add score to dB.
		echo "You lose";
		$_SESSION['gameMode'] = 0;
	}
	else
	{
		echo "You won";
		$_SESSION['score']++;
	}
}

?>

<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../styles/styles.css">
	</head>
	
	<body>
		<div id="content">
		
		<!-- Show your scores, if gameMode = 1 -->
		<?php if ($_SESSION['gameMode'] == 1): ?>
		
			<h3>Your scores: <?php echo $_SESSION['score']; ?></h3>
			
		<!-- Show high scores, if gameMode = 0 -->
		<?php else: ?>
		
			<h3>High scores:</h3>
			
			<!-- Show score table TOP 5 -->
				
		<?php endif ?>
		
		<!-- Navigtion bar -->
		<ul>
			<!-- Show Back to menu (all conditions) -->
			<li><a href="../index.php">Back to menu</a></li>
			
			<!-- Show continue, if gameMode = 1 -->
			<?php if ($_SESSION['gameMode'] == 1): ?>
			
			<li><a href="<?php echo $_SERVER['HTTP_REFERER']; ?>">Continue</a></li>
					
			<?php endif ?>
		</ul>
		
		<!-- Reset gameMode, prevent easy cheating -->
		<?php $_SESSION['gameMode'] = 0; ?>
		
		</div>
	</body>
</html>