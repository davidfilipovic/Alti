<!DOCTYPE html>
<html>

    <head>

        <meta http-equiv="refresh" content="3;/Alti/proba/" />

        <meta charset="UTF-8">

        <title>Register submit</title>

        <link rel="stylesheet" href="css/sstyle.css" media="screen" type="text/css" />

    </head>

    <body>




        <div id="notification"  class="notification" >




            <?php
            include('connect.inc');
            db_connect();

            function NewUser() {

                $email = $_POST['emailreg'];
                $password = $_POST['passreg'];
                $query = "INSERT INTO users (email,password) VALUES ('$email','$password')";
                $data = mysql_query($query)or die(mysql_error());
                if ($data) {



                    echo "Uspešno ste se registrovavli!";
               ?>
                    
             <script type="text/javascript">

                (function () {
                    var timeLeft = 3,
                            cinterval;

                    var timeDec = function () {
                        timeLeft--;
                        document.getElementById('countdown').innerHTML = timeLeft;
                        if (timeLeft === 0) {
                            clearInterval(cinterval);
                        }
                    };

                    cinterval = setInterval(timeDec, 1000);
                })();

            </script>

            <br><br><br>

            <h3>Bićete premešteni na stranicu za prijavljivanje za <span id="countdown">3</span> sekunde...</h3>
       
            
            
                    
                <?php    
                }else
                 echo "Već ste registrovani!";   
            }

            function SignUp() {
                if (!empty($_POST['emailreg']) && !empty($_POST['passreg'])) {
//checking the 'user' name which is from Sign-Up.html, is it empty or have some text 

                    $query = mysql_query("SELECT * FROM users WHERE email = '$_POST[emailreg]' "
                            . "                     AND password = '$_POST[passreg]'") or die(mysql_error());




                    if (!$row = mysql_fetch_array($query) or die(mysql_error())) {


                        NewUser();
                    } else {
                        echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
                    }
                }else{
                    ?>
                    
            <script>
            window.alert("Morate popuniti i polje email i passw polja!");
            
            
            
            
            </script>
                    <?php
                    
                    
                }
                
                
                
                
            }

            if (isset($_POST['submit'])) {


                SignUp();
            }
            ?>

            </div>


















    </body>

</html>    





