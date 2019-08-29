<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title><?php echo $title ?></title>
        <link rel="stylesheet" href="static/css/absences.css">
		<link rel="icon" href="static/logo_MW.png">
	</head>
	
    <body>
		<header>
			<img id="logo" src="static/logo_MW.png" alt="MobilWood"/>
		</header>
		
		<div>
		
            <?php echo($content); ?>
			
            <script src="static/js/jquery-3.2.1.js"></script>
            <script src="static/js/absences.js"></script>
        </div>
		
    </body>
</html>