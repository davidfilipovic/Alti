    <!DOCTYPE html>
    <html lang="en">
    <head>
     <title>Submit Form</title>
    </head>
    <body>
         <?php
        include('connect.inc');
        db_connect();
        ?>
        
        
        
                            <form method="post" action="profile.php">
                            <ul>
                                <li>
                                    <input id="ime" name="ime" type="text" placeholder="Ime i prezime" />
                                </li>
                                 <li>
                                    <input id="rodj" name="rodj" type="text" placeholder="Datum rodjenja" />
                                </li>
                                <li>
                                    <input id="proc" name="proc" type="text" placeholder="Koliko poznajes" />
                                </li>
                                <li>
                                    <input name="submit" type="submit" value="Unesi podatke" class="button" />
                                </li>
                            </ul>
                        </form>

   
        
    </body>
    </html>
