<?php

session_start();
include './connect.inc';


$query1 = "SELECT id FROM altidb.users WHERE email = '$_SESSION[email]'";


$result1 = mysql_query($query1) or die("Greska1:" . mysql_error());


while ($row = mysql_fetch_row($result1)) {
    $i = 0;

    $id = $row[$i];
}







$name = $_POST['name'];
$lastname = $_POST['lastname'];
$birthdate = mysql_real_escape_string($_POST['date']);
$phone = $_POST['phone'];
$mail = $_POST['email'];
//$gender = $_POST['sex'];
$address = $_POST['address'];
$birthdate = date('Y-m-d', strtotime(str_replace('-', '/', $birthdate)));
$employer1 = $_POST['employer1'];
$od1 = $_POST['from1'];
$do1 = $_POST['to1'];
$position1 = $_POST['position1'];
$about1 = $_POST['jobcomment1'];



$employer2 = $_POST['employer2'];
$od2 = $_POST['from2'];
$do2 = $_POST['to2'];
$position2 = $_POST['position2'];
$about2 = $_POST['jobcomment2'];

$employer3 = $_POST['employer3'];
$od3 = $_POST['from3'];
$do3 = $_POST['to3'];
$position3 = $_POST['position3'];
$about3 = $_POST['jobcomment3'];


$employer4 = $_POST['employer4'];
$od4 = $_POST['from4'];
$do4 = $_POST['to4'];
$position4 = $_POST['position4'];
$about4 = $_POST['jobcomment4'];


$employer5 = $_POST['employer5'];
$od5 = $_POST['from5'];
$do5 = $_POST['to5'];
$position5 = $_POST['position5'];
$about5 = $_POST['jobcomment5'];


$startdate = $_POST['startdate'];


if (isset($_POST['fieldwork'])){
    $fildwork = true;
}else {
    $fildwork = false;
}
if (isset($_POST['remotework'])){
    $remotework = true;
}else {
    $remotework = false;
}
if (isset($_POST['invalidity'])){
    $invalidity = true;
}else {
    $invalidity = false;
}

/*
  $query = "INSERT INTO Altidb.basicinfo (id_fk, name, lastname, birthdate, phone, mail, gender, address) "
  . "VALUES ($id, '$name', '$lastname', '$birthdate', '$phone', '$mail', '$gender', '$address')";
  $data = mysql_query($query)or die("Greska:".mysql_error());


  $query1 = "INSERT INTO Altidb.workexp1 (id_fk, employer,od, do, position, about) "
  . "VALUES ($id,'$employer1','$od1','$do1','$position1','$about1')";
  $data1 = mysql_query($query1)or die("Greska:" . mysql_error());

  $query2 = "INSERT INTO Altidb.workexp2 (id_fk, employer,od, do, position, about) "
  . "VALUES ($id,'$employer2','$od2','$do2','$position2','$about2')";
  $data2 = mysql_query($query2)or die("Greska:" . mysql_error());

  $query3 = "INSERT INTO Altidb.workexp3 (id_fk, employer,od, do, position, about) "
  . "VALUES ($id,'$employer3','$od3','$do3','$position3','$about3')";
  $data3 = mysql_query($query3)or die("Greska:" . mysql_error());


  $query4 = "INSERT INTO Altidb.workexp4 (id_fk, employer,od, do, position, about) "
  . "VALUES ($id,'$employer4','$od4','$do4','$position4','$about4')";
  $data4 = mysql_query($query4)or die("Greska:" . mysql_error());


  $query5 = "INSERT INTO Altidb.workexp5 (id_fk, employer,od, do, position, about) "
  . "VALUES ($id,'$employer5','$od5','$do5','$position5','$about5')";
  $data5 = mysql_query($query5)or die("Greska:" . mysql_error()); */


$query5 = "INSERT INTO Altidb.extras (id_fk, startdate, fildwork, remotework, invalidity) "
        . "VALUES ($id,'$startdate','$fildwork','$remotework','$invalidity')";
$data5 = mysql_query($query5)or die("Greska:" . mysql_error());





if (/* $data && */ $data5) {

    echo "Uspešno ste popunili formu!";
}
    
/*
    $sql = "INSERT INTO education (edulevel, profession, otheredu, computers, unis, faculties, "
            . "otherfac, lang1, lang1lvl, lang2, lang2lvl, lang3, lang3lvl, lang4, lanh4lvl) "
            . "VALUES ('$edulevel', '$profession', '$otheredu', '$computers', '$unis', '$faculties',"
            . " '$otherfac', '$lang1', '$lang1lvl', '$lang2', '$lang2lvl', '$lang3', '$lang3lvl', '$lang4', '$lanh4lvl')";
    $result = $conn->query($sql);
    if ($result) {
        echo "YOUR REGISTRATION IS COMPLETED...";
    }
  */

     