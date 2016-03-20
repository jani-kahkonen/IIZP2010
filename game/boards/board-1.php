<?php

session_start();

$_SESSION['gameMode'] = 1;

require '../scripts/database.php';

// Add items to array (difficulty level 1 questions).
$shufled = array($resultsInfo[0][0], $resultsInfo[0][1], $resultsInfo[1][0], $resultsInfo[1][1]);

// Shuffle array.
shuffle($shufled);

?>

<!DOCTYPE HTML>
<html>
	<head>		
		<link rel="stylesheet" type="text/css" href="../styles/style.css">
		
		<script>
		
			// Pass PHP variable to JavaScript variable (Correct order).
			var align = <?php echo json_encode($resultsInfo); ?>;

			// Check if tiles are correct order.
			function isAlign(elements)
			{
				if ((align[0].indexOf(elements[0].innerHTML.trim()) > -1 && align[0].indexOf(elements[1].innerHTML.trim()) > -1) || (align[1].indexOf(elements[0].innerHTML.trim()) > -1 && align[1].indexOf(elements[1].innerHTML.trim()) > -1))
				{		
					setTimeout(function()
					{
						// Redirect to scores.
						window.location.assign("../../menu/scores.php")
					}, 1000);
					
					return true;
				}
				else
				{
					return false;
				}
			}
			
		</script>
		
		<script src="../scripts/script.js"></script>
	</head>
	
	<body>
		<div id="element-top"> Your scores: <?php echo $_SESSION['score']; ?> </div>
		
		<div id="element-container">
			<div id="element-0" class="rectangle"><?php echo $shufled[0]; ?></div>		
			<div id="element-1" class="rectangle"><?php echo $shufled[1]; ?></div>		
			<div id="element-2" class="rectangle"><?php echo $shufled[2]; ?></div>
			<div id="element-3" class="rectangle"><?php echo $shufled[3]; ?></div>
		</div>
		
		<div id="element-bottom"> Time remaining: </div>
		
		<script type="text/javascript">
		
			// Selects all rectangles.
			var elements = document.querySelectorAll('div.rectangle');
			
			// Eventlistener.
			[].forEach.call(elements, function (element)
			{
				element.addEventListener('mousedown', this.swapElements, false);
			});
		
		</script>
	</body>
</html>