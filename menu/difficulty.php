<?php require '../config.php'; ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Difficulties</title>
		
		<link rel="stylesheet" type="text/css" href="../styles/styles.css">
	</head>
	
	<body>
		<div id="content">
		
		<!-- After login -->
		<?php if ($accessToken): ?>
		
			<!-- Show difficulty menu -->
			<ul>
				<!-- Play difficulty 1 -->
				<li><a href="../game/boards/board-1.php">Play difficulty 1</a></li>
				
				<!-- Play difficulty 2 -->
				<li><a href="#">Play difficulty 2</a></li>
				
				<!-- Play difficulty 3 -->
				<li><a href="#">Play difficulty 3</a></li>
				
				<!-- Back -->
				<li><a href="../index.php">Back</a></li>
			</ul>
			
		<!-- Before login -->
		<?php else: ?>
		
			<!-- Show loginUrl -->
			<ul>
				<li><a href="<?php echo $helper->getLoginUrl($loginUrl, $permissions); ?>">Facebook login</a></li>
			</ul>
			
		<?php endif ?>
		
		</div>
	</body>
</html>