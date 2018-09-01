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
</head>
<body>
<div id="headbar">
<?php
echo $_GET["q"];
?></div>
<div id="sidebar"></div>
<div id="main"></div>
<div id="modal"><?php
echo $_GET["q"];
?></div>
</body>
</html>