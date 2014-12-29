<!doctype html>
<html>
    <head>

        <title>ALTI d.o.o</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>    
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
        <link rel='stylesheet' id='camera-css' href="camera.css" type='text/css' media='all'> 
        <link rel="stylesheet" href="menu/css/stylemenu.css" type="text/css" media="screen"/>
        <link rel="stylesheet" href="style.css" type="text/css" media="screen"/>
        <link rel="stylesheet" href="sliding-boxes-css3/style.css" type="text/css" media="screen"/>

		<link rel="stylesheet" href="search/search_style.css" type="text/css" media="screen"/>
		<!--<link rel="stylesheet" href="rotatingImageSlider/css/style.css" type="text/css" media="screen"/>
        <link rel="stylesheet" href="rotatingImageSlider/css/reset.css" type="text/css" media="screen"/>-->
		
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
        <script type="text/javascript" src="menu/jquery.easing.1.3.js"></script>
        <script type='text/javascript' src='camera/scripts/camera.min.js'></script> 
        <script type='text/javascript' src='camera/scripts/jquery.mobile.customized.min.js'></script>
		<script type='text/javascript' src='search/search.js'></script>
		

        <!-- header scroll -->
        <script>
            $(window).scroll(function () {
                if ($(window).scrollTop() > $('#header-2').offset().top && !($('#header-2').hasClass('posi'))) {
                    $('#header-2').addClass('header-scroll');
                } else if ($(window).scrollTop() === 0) {
                    $('#header-2').removeClass('header-scroll');
                }
            });
        </script>
        <!-- end of header scroll -->

        <script>
            jQuery(function () {

                jQuery('#camera_wrap_1').camera({
                    height: '400px',
                    thumbnails: true,
                    pauseOnClick: false,
                    minHeight: '200px',
                    fx: 'curtainSliceLeft, curtainSliceRight, blindCurtainTopLeft, blindCurtainTopRight,\n\
                         blindCurtainBottomLeft, blindCurtainBottomRight, scrollRight, scrollHorz, scrollBottom, scrollTop'
                });
            });
        </script> 
        <!-- end of gallery scripts-->

        <!-- menu internal style-->
        <style>
            body{
                background:url(bg.jpg) repeat top left;
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
                /*margin-top:90px;*/
            }
            h1.title{
                text-indent:-9000px;
                background:transparent url(title.png) no-repeat top left;
                width:633px;
                height:69px;
            }
            .menu li{background-color:#333;}
        </style>
        <!-- end of menu internal style-->

    </head>
    <body>

        <div class='main'>                                           
         
                <div class="header_wrapper">	
                    <?php include "menuJs.php"; ?>
                </div>
    

            <div class='wrapper'>
<<<<<<< HEAD
			                          
                    
				      
=======
			                       <br><br><br> <br> <br><br> <br> <br>
			     
                    
				      <br> <br> <br> <br><br><br><br>
>>>>>>> origin/master
            </div>
			
			<footer>
			
			<div class='wrapper'>
			
			     <div id='left' style='float:left'>
			         <img src='alti2.png' width='130px' height='60px'><br>
					 
					 <ul>
					    <li><a>Excvxcvzxcv</a></li>
						<li><a>Sxcvxzvx xdfx adg</a></li>
						<li><a>Csdgsdgf sdgsd sdg</a></li>
						<li><a>Zdsga sdg dgd</a></li>
						<li><a>Zdg  gds </a></li>											
					 </ul>
			     </div>
			
			    <div id='right' style='float:left'>
				 <ul>
					    <li><a>Excvxcvzxcv</a></li>
						<li><a>Sxcvxzvx xdfx adg</a></li>
						<li><a>Csdgsdgf sdgsd sdg</a></li>
						<li><a>Zdsga sdg dgd</a></li>
						<li><a>Zdg  gds </a></li>											
					 </ul>
			    </div>
			
			    <div id='center_left' style='float:left'>
				 <ul>
					    <li><a>Excvxcvzxcv</a></li>
						<li><a>Sxcvxzvx xdfx adg</a></li>
						<li><a>Csdgsdgf sdgsd sdg</a></li>
						<li><a>Zdsga sdg dgd</a></li>
						<li><a>Zdg  gds </a></li>											
					 </ul>
			    </div>
			
			    <div id='center_right' style='float:left'>
				     <ul>
					     <li><a><img src='icon/footer_facebook.png'></a></li>
						 <li><a><img src='icon/footer_twitter.png'></a></li>
						 <li><a><img src='icon/footer_linkedin.png'></a></li>				 
					 </ul>
			    </div>
			
			</div>
			</footer>
			<div id='copyright'>
			   Copyright 2014
			</div>
                                    
    </div>

    </body>
</html>

