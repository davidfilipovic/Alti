<!doctype html>
<html>
    <head>

        <title>ALTI group d.o.o</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>    
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
        <link rel='stylesheet' id='camera-css' href="camera.css" type='text/css' media='all'> 
        <link rel="stylesheet" href="menu/css/stylemenu.css" type="text/css" media="screen"/>
        <link rel="stylesheet" href="style.css" type="text/css" media="screen"/>

        <!-- gallery scripts 
        <script type='text/javascript' src='camera/scripts/jquery.min.js'></script>
        <script type='text/javascript' src='camera/scripts/jquery.easing.1.3.js'></script>--> 
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
        <script type="text/javascript" src="menu/jquery.easing.1.3.js"></script>
        <script type='text/javascript' src='camera/scripts/camera.min.js'></script> 
        <script type='text/javascript' src='camera/scripts/jquery.mobile.customized.min.js'></script>


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
        <div class='header_wrapper'>	
            <?php include "menuJs.php"; ?>
            <div class='social'>
                <a><img src='icon/facebook.png' width='33px' height='33px'></a>
                <a><img src='icon/twitter.png' width='33px' height='33px'></a><br>
                <a><img src='icon/google.png' width='33px' height='33px'></a>
                <a><img src='icon/linkedin.png' width='33px' height='33px'></a>
            </div>
        </div>

        <?php include "gallery.php"; ?>

        <div class='main'>
            <div class='wrapper'>
                <div class='home-content'>
                </div>
            </div>
        </div>

    </body>
</html>

