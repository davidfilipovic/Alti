<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>SINGLE PAGE | Flat Design Mini Portfolio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Flat Design Mini Portfolio">
        <meta name="keywords" content="responsive, bootstrap, flat design, flat ui, portfolio">
        <meta name="author" content="Dzyngiri">
        <meta name="description" content="This is a responsive flat design mini portfolio for creative folks who want to showcase their work online.">
        <!-- styles -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap-responsive.css" rel="stylesheet">
        <link href="css/style-single-page.css" rel="stylesheet">
        <link href="font/css/fontello.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
        <!-- Add jQuery library -->
        <script type="text/javascript" src="js/jquery-1.10.1.min.js"></script>
        <!-- Add fancyBox main JS and CSS files -->
        <script type="text/javascript" src="js/jquery.fancybox.js?v=2.1.5"></script>
        <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css?v=2.1.5" media="screen" />
        <script>
            $(document).ready(function () {
                $(".fancybox-thumb").fancybox({
                    helpers: {
                        title: {
                            type: 'inside'
                        },
                        overlay: {
                            css: {
                                'background': 'rgba(1,1,1,0.65)'
                            }
                        }
                    }
                });
            });
        </script>
        
    </head>
    <body>

        <?php
        include('connect.inc');
        db_connect();
        ?>


        <?php

        function insert() {
            $ime = $_POST['ime'];
            $rodj = $_POST['rodj'];
            $proc = $_POST['proc'];
            $query = "INSERT INTO data (ime,rodj,html) VALUES ('$ime','$rodj','$proc')";
            $data = mysql_query($query)or die(mysql_error());
            
        }

        if (isset($_POST['submit'])) {


            insert();
        }
        ?>


        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <a class="brand" href="#profile"><img src="img/user.jpg"/></a>
                    <ul class="nav nav-collapse pull-right">
                        <li><a href="#profile"><i class="icon-user"></i> Profil</a></li>
                        <li><a href="#skills"><i class="icon-trophy"></i> Veštine</a></li>
                        <li><a href="#work"><i class="icon-picture"></i> Iskustvo</a></li>
                        <li><a href="#resume"><i class="icon-doc-text"></i> CV</a></li>
                        <li><a href="#resume"><i class="icon-doc-text"></i> Projekti</a></li>
                        <li><a href="#resume"><i class="icon-doc-text"></i> Projekti</a></li>
                    </ul>
                    <!-- Everything you want hidden at 940px or less, place within here -->
                    <div class="nav-collapse collapse">
                        <!-- .nav, .navbar-search, .navbar-form, etc -->
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix">
            <!--Profile container-->
            <div id="profile" class="container">
                <div class="span3"> <img src="img/mini.png"> </div>
                <div class="span5">
                    <h1> <?php
                    
                     
           
        $servername = "localhost";
$username = "root";
$password = "";
$dbname = "altidb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT ime FROM data WHERE html = '20'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo $row["ime"];
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
        ?>
                    </h1>
                    <h3>Web &amp; Graphics Designer</h3>
                    <p> 

                        Datum rođenja: <?php
        echo "$_POST[rodj]";
        ?>

                    </p>
                    <a href="#" class="hire-me"><i class="icon-paper-plane"></i> Hire Me </a>
                    <div class="row social">
                        <ul class="social-icons">
                            <li><a href="#" target="_blank"><img src="img/fb.png" alt="facebook"></a></li>
                            <li><a href="#" target="_blank"><img src="img/tw.png" alt="twitter"></a></li>
                            <li><a href="#" target="_blank"><img src="img/go.png" alt="google plus"></a></li>
                            <li><a href="#" target="_blank"><img src="img/pin.png" alt="pinterest"></a></li>
                            <li><a href="#" target="_blank"><img src="img/st.png" alt="stumbleupon"></a></li>
                            <li><a href="#" target="_blank"><img src="img/dr.png" alt="dribbble"></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Social Icons -->
                <!-- END: Social Icons -->
            </div>
            <!--END: Profile container-->
            <!--Skills container-->
            <div id="skills" class="container">
                <h2>Moje veštine</h2>
                <div class="row">
                    <div class="span3">
                        <div class="ps">
                            <h3>Ps</h3>
                        </div>
                    </div>
                    <div class="span5">
                        <h3>Photoshop <span>90%</span></h3>
                        <div class="expand-bg"> <span class="expand ps2"> &nbsp; </span> </div>
                    </div>
                </div>
                <div class="row">
                    <div class="span3">
                        <div class="ai">
                            <h3>Ai</h3>
                        </div>
                    </div>
                    <div class="span5">
                        <h3>Illustrator <span>10%</span></h3>
                        <div class="expand-bg"> <span id="ai2" class="expand ai2"> &nbsp; </span> </div>


                    </div>

                    <style>

                        .ai2 {
                            width:<?php
        echo "$_POST[proc]%";
        ?>;
                            background:#ee742b;
                            -moz-animation:css3 2s ease-out;
                            -webkit-animation:css3 2s ease-out;
                        }

                    </style>
                </div>
                <div class="row">
                    <div class="span3">
                        <div class="html">
                            <h3>HTML5</h3>
                        </div>
                    </div>
                    <div class="span5">
                        <h3>HTML5 <span>75%</span></h3>
                        <div class="expand-bg"> <span class="expand html2"> &nbsp; </span> </div>
                    </div>
                </div>
                <div class="row">
                    <div class="span3">
                        <div class="css">
                            <h3>CSS3</h3>
                        </div>
                    </div>
                    <div class="span5">
                        <h3>CSS3 <span>85%</span></h3>
                        <div class="expand-bg"> <span class="expand css2"> &nbsp; </span> </div>
                    </div>
                </div>
            </div>
            <!--END: Skills container-->
            <!-- Works container -->
            <div id="work" class="container">
                <h2>Iskustvo</h2>
                <ul class="work-images">
                    <li>
                        <div><a class="fancybox-thumb" rel="fancybox-thumb" href="img/1.jpg" title="Image 01"><img src="img/1-thumb.jpg" /></a></div>
                    </li>
                    <li>
                        <div><a class="fancybox-thumb" rel="fancybox-thumb" href="img/2.jpg"><img src="img/2-thumb.jpg" /></a></div>
                    </li>
                    <li>
                        <div><a class="fancybox-thumb" rel="fancybox-thumb" href="img/3.jpg"><img src="img/3-thumb.jpg" /></a></div>
                    </li>
                </ul>
                <ul class="work-images">
                    <li>
                        <div><a class="fancybox-thumb" rel="fancybox-thumb" href="img/4.jpg"><img src="img/4-thumb.jpg" /></a></div>
                    </li>
                    <li>
                        <div><a class="fancybox-thumb" rel="fancybox-thumb" href="img/5.jpg"><img src="img/5-thumb.jpg" /></a></div>
                    </li>
                    <li>
                        <div><a class="fancybox-thumb" rel="fancybox-thumb" href="img/6.jpg"><img src="img/6-thumb.jpg" /></a></div>
                    </li>
                </ul>
                <!--Dummy images by The Fox And King :: http://dribbble.com/snootyfox-->
            </div>
            <!--END: Work container-->
            <!-- Resume container -->
            <div id="resume" class="container">
                <h2>CV</h2>
                <h3>You can download my resume for your reference and I hope that we will meet very soon! :)</h3>
                <div class="btn-center"> <a href="#" class="hire-me"><i class="icon-download"></i> Preuzmi CV</a>
                    <h2>125kb</h2>
                </div>
            </div>
            <!--END: Resume container-->
            <!-- Social Icons -->


            <div id="resume" class="container">
                <h2>Projekti</h2>
                <h3>You can download my resume for your reference and I hope that we will meet very soon! :)</h3>
                <div class="btn-center"> <a href="#" class="hire-me"><i class="icon-download"></i> Preuzmi CV</a>
                    <h2>125kb</h2>
                </div>
            </div>









            <div class="row social">
                <ul class="social-icons">
                    <li><a href="#" target="_blank"><img src="img/fb.png" alt="facebook"></a></li>
                    <li><a href="#" target="_blank"><img src="img/tw.png" alt="twitter"></a></li>
                    <li><a href="#" target="_blank"><img src="img/go.png" alt="google plus"></a></li>
                    <li><a href="#" target="_blank"><img src="img/pin.png" alt="pinterest"></a></li>
                    <li><a href="#" target="_blank"><img src="img/st.png" alt="stumbleupon"></a></li>
                    <li><a href="#" target="_blank"><img src="img/dr.png" alt="dribbble"></a></li>
                </ul>
            </div>
            <!-- END: Social Icons -->
        </div>
        <!-- Footer -->
        <div class="footer">
            <div class="container">
                <p class="pull-left"><a href="http://dzyngiri.com">www.dzyngiri.com</a></p>
                <p class="pull-right"><a href="##myModal" role="button" data-toggle="modal"> <i class="icon-mail"></i> CONTACT</a></p>
            </div>
        </div>
        <!-- Contact form in Modal -->
        <!-- Modal -->
        <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">׼/button>
                    <h3 id="myModalLabel"><i class="icon-mail"></i> Contact Me</h3>
            </div>
            <div class="modal-body">
                <form>
                    <input type="text" placeholder="Yopur Name">
                    <input type="text" placeholder="Your Email">
                    <input type="text" placeholder="Website (Optional)">
                    <textarea rows="3" style="width:80%"></textarea>
                    <br/>
                    <button type="submit" class="btn btn-large"><i class="icon-paper-plane"></i> SUBMIT</button>
                </form>
            </div>
        </div>
        <!-- Scripts -->
        <script src="js/vertical-scroll.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
            $('#myModal').modal('hidden')
        </script>
    </body>
</html>
