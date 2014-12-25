<?php

header('Content-Type: text/html; charset=utf-8');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "AltiDB";
$i = 1;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
mysql_query("SET NAMES UTF8");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    echo 'nesto';
    
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }
    
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["date"])) {
        $date = "Date is required";
    } else {
        $date = test_input($_POST["date"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^(((0[1-9]|[12][0-8])[\/](0[1-9]|1[012]))|((29|30|31)
            [\/](0[13578]|1[02]))|((29|30)[\/](0[4,6,9]|11)))[\/](19|[2-9][0-9])
            \d\d$)|(^29[\/]02[\/](19|[2-9][0-9])(00|04|08|12|16|20|24|28|32|36|
            40|44|48|52|56|60|64|68|72|76|80|84|88|92|96)$/", $name)) {
            $nameErr = "Pogresan format datuma";
        }
    }
    
    if (empty($_POST["gender"])) {
        $genderErr = "0";
    } elseif ($_POST["gender"] = 'female') {
        $gender = '1';
    } else {
        $gender = '2';
    }

    if (empty($_POST["jobcomment"])) {
        $jobcomment = "";
    } else {
        $jobcomments = test_input($_POST["jobcomment"]);
    }
    
    if (empty($_POST["employer"])) {
        $employer = "";
    } else {
        $employer = test_input($_POST["employer"]);
    }
    
    if (empty($_POST["position"])) {
        $position = "";
    } else {
        $position = test_input($_POST["position"]);
    }
//    $ = $_POST[''];
//    $ = $_POST[''];
//    $ = $_POST[''];
//    $ = $_POST[''];
    //$query = "INSERT INTO basicinfo (name,lastname, gender) VALUES ('$name','$lastname', '$gender')";

    $sql = "INSERT INTO basicinfo (name,lastname, gender) VALUES ('$name','$lastname', '$gender')";
    $result = $conn->query($sql);
    if ($result) {
        echo "YOUR REGISTRATION IS COMPLETED...";
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $conn->close();
}    