<!doctype html>
<html>
    <head>

        <title>ALTI d.o.o</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>    
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>      
        <link rel="stylesheet" href="style.css" type="text/css" media="screen"/>
		 <link rel="stylesheet" href="search/search_style.css" type="text/css" media="screen"/>
        <link rel="stylesheet" href="sliding-boxes-css3/style.css" type="text/css" media="screen"/>
        <link rel="stylesheet" href="css/slide_text.css" type="text/css" media="screen"/>
		<link rel="stylesheet" href="HorizontalDropDownMenu/css/component.css" type="text/css" media="screen"/>
		<link rel="stylesheet" href="HorizontalDropDownMenu/css/default.css" type="text/css" media="screen"/>
		<link rel="stylesheet" href="unslider/site/style.css" type="text/css" media="screen"/>
		<script src="HorizontalDropDownMenu/js/modernizr.custom.js"></script>
		
		
		
	</head>
	<body>
		<div class='main'>  
		
		<div class="header_wrapper">
			<?php include "HorizontalDropDownMenu/index.html";?>
		</div>
		
		<?php include "unslider/site/index.html"; ?>
		
		 <div class='wrapper'>		

			    <!--About us text-->
			    <div>
				 <?php include "slide_text.html"; ?>
				</div>
				
				<!--baneri Alti brendovi-->
                <div class='bnr'>
                    <?php include "sliding-boxes-css3/index.html"; ?>
                </div>	

            </div>
		
		    <?php include 'footer.php'; ?>
			
		</div>  
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.1/jquery.min.js"></script>
		<script src="HorizontalDropDownMenu/js/cbpHorizontalMenu.min.js"></script>
		<script>
			$(function() {
				cbpHorizontalMenu.init();
			});
		</script>
	</body>
</html>
