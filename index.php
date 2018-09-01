<html>
<head>
<title>Study Suggester</title>   
<meta charset="utf-8">
<!--CSS-->
<link rel="stylesheet" href="./css/study-suggester.css">
<link rel="stylesheet" href="./css/jquery-ui.min.css">
<!--JS-->
<script src="js/study-suggester.js"></script>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script>
<?php
	if($_COOKIE["accessed"] == "accessed"){}
	else{
		echo 'window.onload = function(){welcomeMessage();}';
		setcookie("accessed","accessed",time() + 172800);
	}
	
?>
</script>
</head>
<body>
<div id="headbar">Study Suggester</div>
<div id="sidebar"></div>
<div id="main"></div>
<div id="modal">
Study Suggesterへようこそ。<br>さっそく始めましょう！	
</div>
</body>
</html>