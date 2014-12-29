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
        <link rel="stylesheet" href="css/slide_text.css" type="text/css" media="screen"/>

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

            <?php include "gallery.php"; ?>

            <div class='wrapper'>

                <div>
                    <?php include "slide_text.html"; ?>
                </div>

                <div class='banner'>
                    <?php include "sliding-boxes-css3/index.html"; ?>
                </div>	

            </div>
            <?php include 'footer.php'; ?>
        </div>
    </body>
</html>

