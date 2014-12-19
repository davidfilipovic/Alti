<?php

include('connect.inc');
db_connect();
                        
function NewUser() {
    
    $email = $_POST['loginEmail'];
    $password = $_POST['loginPass'];
    $query = "INSERT INTO users (email,password) VALUES ('$email','$password')";
    $data = mysql_query($query)or die(mysql_error());
    if ($data) {
        echo "YOUR REGISTRATION IS COMPLETED...";
    }
}

function SignUp() {
    if (!empty($_POST['loginEmail'])) 
//checking the 'user' name which is from Sign-Up.html, is it empty or have some text 
{ 
        $query = mysql_query("SELECT * FROM users WHERE email = '$_POST[loginEmail]' "
                . "                     AND password = '$_POST[loginPass]'") or die(mysql_error());
        if(!$row = mysql_fetch_array($query) or die(mysql_error())) {
            NewUser(); 
            
        } else { echo "SORRY...YOU ARE ALREADY REGISTERED USER..."; } } } 
        
        
        if(isset($_POST['submit'])) 
            { 
            SignUp(); 
            
            }


    