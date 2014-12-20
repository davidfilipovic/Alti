<?php

include('connect.inc');
db_connect();
                        
function NewUser() {
    
    $email = $_POST['emailreg'];
    $password = $_POST['passreg'];
    $query = "INSERT INTO users (email,password) VALUES ('$email','$password')";
    $data = mysql_query($query)or die(mysql_error());
    if ($data) {
        echo "YOUR REGISTRATION IS COMPLETED...";
    }
}

function SignUp() {
    if (!empty($_POST['emailreg'])) 
//checking the 'user' name which is from Sign-Up.html, is it empty or have some text 
{ 
        echo 'proslo!';
        $query = mysql_query("SELECT * FROM users WHERE email = '$_POST[emailreg]' "
                . "                     AND password = '$_POST[passreg]'") or die(mysql_error());
        
         
        
        
        if(!$row = mysql_fetch_array($query) or die(mysql_error())) {
            NewUser(); 
            
        } else { echo "SORRY...YOU ARE ALREADY REGISTERED USER..."; } } } 
        
        
        if(isset($_POST['submit'])) 
            { 
            
           
            SignUp(); 
            
            }


    
