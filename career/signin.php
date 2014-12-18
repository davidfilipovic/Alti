<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Login forma</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


        <link href="signin.css" rel="stylesheet" type="text/css">

        <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="//bootstrap.min.js"></script>
        <script type="text/javascript" src="signin.js" ></script>
    </head>
    <body>
        
        <div class="container">
            <div class="row">
                <div class="container" id="formContainer">

                    
                    <!-- sign in forma -->
                    <form class="form-signin" id="login" role="form">
                        <h3 class="form-signin-heading">Logovanje</h3>
                        <a href="#" id="flipToRecover" class="flipLink">
                            <div id="triangle-topright"></div>
                        </a>
                        <input type="email" class="form-control" name="loginEmail" id="loginEmail" placeholder="Email adresa" required autofocus>
                        <input type="password" class="form-control" name="loginPass" id="loginPass" placeholder="Šifra" required>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Uloguj se</button>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Registruj se</button>
                    </form>
                    
                    
                    
                    <!-- recover email -->
                    <form class="form-signin" id="recover" role="form">
                        <h3 class="form-signin-heading">Unesite email</h3>
                        <a href="#" id="flipToLogin" class="flipLink">
                            <div id="triangle-topleft"></div>
                        </a>
                        <input type="email" class="form-control" name="loginEmail" id="loginEmail" placeholder="Email adresa" required autofocus>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Potvrdi</button>
                    </form>

                </div> <!-- /container -->
            </div>
        </div>
        <script type="text/javascript" src="flip.js" ></script>
    </body>
</html>
