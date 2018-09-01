<html>
<head>
<title>Study Suggester</title>   
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<!--CSS-->
<link rel="stylesheet" href="./css/study-suggester.css">
<link rel="stylesheet" href="./css/jquery-ui.min.css">
<!--JS-->
<script src="js/study-suggester.js"></script>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script>
<?php
	if($_COOKIE["accessed"] == "accessed"){
		echo 'window.onload = function(){welcomeMessage();}';
	}
	else{
		echo 'window.onload = function(){welcomeMessage();}';
		setcookie("accessed","accessed",time() + 172800);
	}
	
?>
</script>
</head>
<body>
<div id="headbar">Study Suggester</div>
<div id="sidebar">
<!--メニューバーのcontentをPHPで取得-->
<?php
	readfile("./contents/sidebar/index.content");
?>
</div>
<div id="main">
<?php
if($_GET["page"]){
	$pagename = "./contents/main/" . $_GET["page"] . ".content";
}else{
	$pagename = "./contents/main/home.content";
}
//ファイル取得
if(is_readable($pagename)){
	echo readfile($pagename);
}else{
	echo "<h4>404 Not Found</h4>要求されたページ \"" + $_GET["page"] + "\"が見つかりませんでした。<br>直接URLを入力された場合は、URLを確認してください。";
}
?>
</div>
<div id="modal">
現在、このサイトは準備中です<br>今暫くお待ちください	
</div>
</body>
</html>
