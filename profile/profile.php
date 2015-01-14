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


session_start();




$query1 = "SELECT id FROM altidb.users WHERE email = '$_SESSION[email]'";
$result1 = mysql_query($query1) or die("Greska1:" . mysql_error());

while ($row = mysql_fetch_row($result1)) {
    $i = 0;

    $id = $row[$i];

}
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
                <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <a class="brand" href="#profile">
                        <img src="img/user.jpg"/></a>
                    <ul class="nav nav-collapse pull-right">
                        <li><a href="#profile"><i class="icon-user"></i> Profil</a></li>
                        <li><a href="#education"><i class="icon-trophy"></i> Obrazovanje</a></li>
                        <li><a href="#skills"><i class="icon-trophy"></i> Veštine</a></li>
                        <li><a href="#work"><i class="icon-picture"></i> Iskustvo</a></li>
                        <li><a href="#resume"><i class="icon-doc-text"></i> CV</a></li>
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
                <?php

                $ind = 0;
                $filename = '../forms/images/'.$_SESSION["email"].'.jpg';

                if (file_exists($filename)) {
                    echo    "<div class='span3'> <img src='../forms/images/$_SESSION[email].jpg' > </div>";
                    $ind = 1;

                }

                $filename = '../forms/images/'.$_SESSION["email"].'.png';

                if (file_exists($filename)) {
                    echo   "<div class='span3'> <img src='../forms/images/$_SESSION[email].png' > </div>";
                    $ind = 1;

                }

                $filename = '../forms/images/'.$_SESSION["email"].'.gif';

                if (file_exists($filename)) {
                    echo   "<div class='span3'> <img src='../forms/images/$_SESSION[email].gif' > </div>";
                    $ind = 1;

                }

                if($ind == 0){

                    echo   "<div class='span3'> <img src='img/mini.png' > </div>";

                }









                ?>
                <div class="span5">
                    <h1> <?php
                    
                     
           
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "altidb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
                        mysqli_set_charset($conn, 'utf8');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Upit koji kupi ime
$sql1 = "SELECT name FROM basicinfo WHERE id_fk =  ".$id;
$result1 = mysqli_query($conn, $sql1);

if (mysqli_num_rows($result1) > 0) {
    // output data of each row
    while($row1 = mysqli_fetch_assoc($result1)) {
        echo $row1["name"];
    }
} else {
    echo "0 results";
}

                        // Upit koji kupi prezime
                        $sql = "SELECT lastname FROM basicinfo WHERE id_fk =  ".$id;
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {
                                echo " ".$row["lastname"];
                            }
                        } else {
                            echo "0 results";
                        }





        ?>
                    </h1>
                    <h3>Web &amp; Graphics Designer</h3>
                    <p> 

                        <h4> Datum rođenja: </h4> <?php



                        // Upit koji kupi datum rodjenja
                        $sql = "SELECT birthdate FROM basicinfo WHERE id_fk =  ".$id;
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {
                                echo " ".$row["birthdate"];
                            }
                        } else {
                            echo "0 results";
                        }



        ?>
                        <br/> <h4> Email: </h4> <?php



                        // Upit koji kupi email
                        $sql = "SELECT mail FROM basicinfo WHERE id_fk =  ".$id;
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {
                                echo " ".$row["mail"];
                            }
                        } else {
                            echo "0 results";
                        }



                        ?>


                        <br/> <h4> Kontakt telefon:</h4> <?php



                        // Upit koji kupi email
                        $sql = "SELECT phone FROM basicinfo WHERE id_fk =  ".$id;
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {
                                echo " ".$row["phone"];
                            }
                        } else {
                            echo "0 results";
                        }



                        ?>



                        <br/><h4>Adresa: </h4><?php



                        // Upit koji kupi email
                        $sql = "SELECT address FROM basicinfo WHERE id_fk =  ".$id;
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {
                                echo " ".$row["address"];
                            }
                        } else {
                            echo "0 results";
                        }



                        ?>






                    </p>
                    <a href="#" class="hire-me"><i class="icon-paper-plane"></i> Hire Me </a>

                </div>


                <!--Education container-->
                <div id="education" class="container">
                    <h2>Obrazovanje</h2>

                    <h4>Nivo obrazovanja:</h4>

                    <?php
                    header('Content-Type: text/html; charset=utf-8');
                    $ind_exp = 0;


                    // Upit koji kupi obrazovanje
                    $sql = "SELECT name FROM edulevel e1 INNER JOIN education e2 ON e1.id = e2.edulvl
                              WHERE id_fk =  ".$id;
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        $ind_exp = 1;
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "".$row["name"];
                        }
                    }




                    echo "<h4>Zvanje:</h4>";
                    // Upit koji kupi profesiju
                    $sql = "SELECT name FROM profession p1 INNER JOIN education e2 ON p1.id = e2.profession
                              WHERE id_fk =  ".$id;
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        $ind_exp = 1;
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "".$row["name"];
                        }
                    }



                    echo "<h4>Srednja škola:</h4>";
                    // Upit koji kupi profesiju
                    $sql = "SELECT hsname FROM education WHERE id_fk =  ".$id;
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        $ind_exp = 1;
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "".$row["hsname"];
                        }
                    }
                    ?>




                </div>
                <!--END: Education container-->


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

                        h4 {
                            font-weight: bold;
                            color:#ee742b;

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

                <?php
                $ind_exp = 0;


                // Upit koji kupi radno iskustvo1
                $sql = "SELECT employer, od, do, position, about FROM workexp1 WHERE id_fk =  ".$id;
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    $ind_exp = 1;
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<br/><h4>Od: </h4>".$row["od"]."<h4>Do: </h4> ".$row["do"]." <h4>Poslodavac: </h4> ".$row["employer"]." <h4>Pozicija: </h4> ".$row["position"]." <h4>Opis: </h4> ".$row["about"];
                    }
                }



                // Upit koji kupi radno iskustvo2
                $sql = "SELECT employer, od, do, position, about FROM workexp2 WHERE id_fk =  ".$id;
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    $ind_exp = 1;
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<br/><br/><h4>Od: </h4>".$row["od"]."<h4>Do: </h4> ".$row["do"]." <h4>Poslodavac: </h4> ".$row["employer"]." <h4>Pozicija: </h4> ".$row["position"]." <h4>Opis: </h4> ".$row["about"];
                    }
                }


                // Upit koji kupi radno iskustvo3
                $sql = "SELECT employer, od, do, position, about FROM workexp3 WHERE id_fk =  ".$id;
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    $ind_exp = 1;
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<br/><br/><h4>Od: </h4>".$row["od"]."<h4>Do: </h4> ".$row["do"]." <h4>Poslodavac: </h4> ".$row["employer"]." <h4>Pozicija: </h4> ".$row["position"]." <h4>Opis: </h4> ".$row["about"];
                    }
                }

                // Upit koji kupi radno iskustvo4
                $sql = "SELECT employer, od, do, position, about FROM workexp4 WHERE id_fk =  ".$id;
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    $ind_exp = 1;
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<br/><br/><h4>Od: </h4>".$row["od"]."<h4>Do: </h4> ".$row["do"]." <h4>Poslodavac: </h4> ".$row["employer"]." <h4>Pozicija: </h4> ".$row["position"]." <h4>Opis: </h4> ".$row["about"];
                    }
                }



                // Upit koji kupi radno iskustvo5
                $sql = "SELECT employer, od, do, position, about FROM workexp5 WHERE id_fk =  ".$id;
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    $ind_exp = 1;
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<br/><br/><h4>Od: </h4>".$row["od"]."<h4>Do: </h4> ".$row["do"]." <h4>Poslodavac: </h4> ".$row["employer"]." <h4>Pozicija: </h4> ".$row["position"]." <h4>Opis: </h4> ".$row["about"];
                    }
                }

                if($ind_exp == 0)
                echo "Bez radnog iskustva";

                ?>


            </div>
            <!--END: Work container-->
            <!-- Resume container -->
            <div id="resume" class="container">
                <h2>CV</h2>
                <h3>You can download my resume for your reference and I hope that we will meet very soon! :)</h3>


                    <?php

                    $ind1 = 0;
                    $filename1 = '../forms/cvs/'.$_SESSION["email"].'.pdf';

                    if (file_exists($filename1)) {
                        echo    " <div class='btn-center'> <a href='../forms/cvs/$_SESSION[email].pdf' class='hire-me'><i class='icon-download'></i> Preuzmi CV</a>";
                        $ind1 = 1;

                    }

                    $filename1 = '../forms/images/'.$_SESSION["email"].'.docx';

                    if (file_exists($filename1)) {
                        echo    " <div class='btn-center'> <a href='../forms/cvs/$_SESSION[email].docx' class='hire-me'><i class='icon-download'></i> Preuzmi CV</a>";
                        $ind1 = 1;

                    }

                    $filename1 = '../forms/images/'.$_SESSION["email"].'.doc';

                    if (file_exists($filename1)) {
                        echo    " <div class='btn-center'> <a href='../forms/cvs/$_SESSION[email].doc' class='hire-me'><i class='icon-download'></i> Preuzmi CV</a>";
                        $ind1 = 1;

                    }


                    if($ind1 == 0){

                        echo    " <div class='btn-center'> <a href='#' class='hire-me'><i class='icon-download'></i> Preuzmi CV</a>";

                    }








                    ?>










                    <h2>
                        <?php
                            echo filesize("../forms/cvs/$_SESSION[email].pdf")/1000;

                        ?>
                        kB</h2>
                </div>
            </div>
            <!--END: Resume container-->
            <!-- Social Icons -->












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
