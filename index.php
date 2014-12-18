<!doctype html>
<html>
<head>
 
   <title>ALTI group d.o.o</title>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Slide Down Box Menu with jQuery and CSS3" />
        <meta name="keywords" content="jquery, css3, sliding, box, menu, cube, navigation, portfolio, thumbnails"/>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" href="menu/css/stylemenu.css" type="text/css" media="screen"/>
		<link rel="stylesheet" href="style.css" type="text/css" media="screen"/>
        <style>
			body{
				background:#333 url(bg.jpg) repeat top left;
				font-family:Arial;
			}
			span.reference{
				position:fixed;
				left:10px;
				bottom:10px;
				font-size:12px;
			}
			span.reference a{
				color:#aaa;
				text-transform:uppercase;
				text-decoration:none;
				text-shadow:1px 1px 1px #000;
				margin-right:30px;
			}
			span.reference a:hover{
				color:#ddd;
			}
			ul.sdt_menu{
				margin-top:90px;
			}
			h1.title{
				text-indent:-9000px;
				background:transparent url(title.png) no-repeat top left;
				width:633px;
				height:69px;
			}
		</style>
</head>
<body>
<div class='main'>
	<div class='wrapper'>
		
		<?php include "menuJs.php";?>
		
		<div class='home-content'>
		</div>
	</div>
</div>
</body>
<html>
