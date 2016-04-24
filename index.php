<?php require 'config.php'; ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Index</title>
		
		<link rel="stylesheet" type="text/css" href="styles/styles.css">
	</head>
	
	<body>
		<div id="content">
		
		<!-- After login -->
		<?php if ($accessToken): ?>
		
		<h1>Main menu</h1>
			<!-- Show mainmenu -->
			<ul>
				<!-- Show difficulties -->
				<li><a href="menu/difficulty.php">Play game</a></li>
				
				<!-- Show infoUrl -->
				<li><a href="#menu/info.php">Info</a></li>
				
				<!-- Show scoresUrl -->
				<li><a href="menu/scores.php">High scores</a></li>
				
				<!-- Show logoutUrl -->
				<li><a href="<?php echo $helper->getLogoutUrl($accessToken, $logoutUrl); ?>">Logout</a></li>
			</ul>
			
		<!-- Before login -->
		<?php else: ?>
		
		<h1>Login</h1>
				
			<!-- Show loginUrl -->
			<ul>
				<li><a href="<?php echo $helper->getLoginUrl($loginUrl, $permissions); ?>">Facebook login</a></li>
			</ul>
			
		<?php endif ?>
		
		</div>
	</body>
</html>