<!DOCTYPE html>
<html>

    <head>

        <meta charset="UTF-8">

        <title>Register/Login</title>

        <link rel="stylesheet" href="css/sstyle.css" media="screen" type="text/css" />

    </head>

    <body>
        <?php
        include('connect.inc');
        db_connect();
        ?>


    <html lang="en">
        <head>
            <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
            <!-- Basic Page Needs
          ================================================== -->
            <meta charset="utf-8">
            <title>Flat Login</title>
            <meta name="description" content="">
            <meta name="author" content="">

            <!-- Mobile Specific Metas
          ================================================== -->
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

            <!-- CSS
          ================================================== -->

            <!--[if lt IE 9]>
                        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
                <![endif]-->
        </head>
        <body>

            <div class="container">
                <div class="flat-form">
                    <ul class="tabs">
                        <li>
                            <a href="#login" class="active">Login</a>
                        </li>
                        <li>
                            <a href="#register">Register</a>
                        </li>
                        <li>
                            <a href="#reset">Reset Password</a>
                        </li>
                    </ul>
                    <div id="login" class="form-action show">
                        <h1>Prijavite se</h1>
                        <p>
                            Da bi bili u mogućnosti da se prijavite, prvo se morate registrovati. 
                        </p>
                        <form method="post" action="login.php">
                            <ul>
                                <li>
                                    <input id="emaillog" name="emaillog" type="text" placeholder="Email" />
                                </li>
                                <li>
                                    <input id="passlog" name="passlog" type="password" placeholder="Šifra" />
                                </li>
                                <li>
                                    <input name="submit" type="submit" value="Uloguj se" class="button" />
                                </li>
                            </ul>
                        </form>
                    </div>
                    <!--/#login.form-action-->
                    <div id="register" class="form-action hide">
                        <h1>Registruj se</h1>
                        <p>
                            Registracija traje samo nekoliko sekundi ali vam zauzvrat daje mnogo više mogućnosti.
                        </p>
                        <form method="post" action="register.php">
                            <ul>
                                <li>
                                    <input id="emailreg" name="emailreg" type="text" placeholder="Email" />
                                </li>
                                <li>
                                    <input id="passreg" name="passreg" type="password" placeholder="Šifra" />
                                </li>
                                <li>
                                    <input name="submit" type="submit" value="Registruj se" class="button" />
                                </li>
                            </ul>
                        </form>
                    </div>
                    <!--/#register.form-action-->
                    <div id="reset" class="form-action hide">
                        <h1>Zaboravljena šifra</h1>
                        <p>
                            Da bi ste resetovali šifru unesite Vaš email i poslaćemo vam link za resetovanje šifre.

                        </p>
                        <form method="post" action="forgot.php">
                            <ul>
                                <li>
                                    <input id="emailforgot" name="emailforgot" type="text" placeholder="Email" />
                                </li>
                                <li>
                                    <input name="submit" type="submit" value="Send" class="button" />
                                </li>
                            </ul>
                        </form>
                    </div>
                    <!--/#register.form-action-->
                </div>
            </div>
            <script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
        </body>
    </html>

    <script src="js/index.js"></script>

</body>

</html>