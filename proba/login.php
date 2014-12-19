<?php

include('connect.inc');
db_connect();
                        
function NewUser() {
    
    $email = $_POST['emaillog'];
    $password = $_POST['passlog'];
    $query = "INSERT INTO users (email,password) VALUES ('$email','$password')";
    $data = mysql_query($query)or die(mysql_error());
    if ($data) {
        echo "Uspešno ste prijavljeni";
    }
}

function LogIn() {
    if (!empty($_POST['emaillog']) && !empty($_POST['passlog'])) 

{ 
       
        $query = "SELECT * FROM users WHERE email = '$_POST[emaillog]' AND password = '$_POST[passlog]'";
       
        
        $result = mysql_query($query) or die(mysql_error());
         $num = mysql_num_rows($result);
								   
        
        
        if($num != 1) {
            
            echo 'Pogrešno korisničko ime ili šifra';
            
        } else { 
            
            
            session_start();
            echo 'pocela sesija!';
            
            ; } } } 
        
        
        if(isset($_POST['submit'])) 
            { 
            
           
            LogIn(); 
            
            }


    
