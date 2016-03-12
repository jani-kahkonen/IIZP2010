<?php require 'config.php'; ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		
		<link rel="stylesheet" type="text/css" href="styles/styles.css">
	</head>
	
	<body>
		<div id="content">
		
		<!-- After login -->
		<?php if ($accessToken): ?>
		
			<!-- Show mainmenu -->
			<ul>
				<!-- Show difficulties -->
				<li><a href="difficulty.php">Play game</a></li>
				
				<!-- Show infoUrl -->
				<li><a href="#info.php">Info</a></li>
				
				<!-- Show scoresUrl -->
				<li><a href="#scores.php">High scores</a></li>
				
				<!-- Show logoutUrl -->
				<li><a href="<?php echo $helper->getLogoutUrl($accessToken, $logoutUrl); ?>">Logout</a></li>
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