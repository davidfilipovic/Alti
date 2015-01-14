<!DOCTYPE html>
<html>

<head>

    <meta http-equiv="refresh" content="3;/Alti/profile/profile.php" />

    <meta charset="UTF-8">

    <title>Register submit</title>

    <link rel="stylesheet" href="css/sstyle.css" media="screen" type="text/css" />

</head>

<body>




<?php

session_start();
include './connect.inc';


$query1 = "SELECT id FROM altidb.users WHERE email = '$_SESSION[email]'";
$result1 = mysql_query($query1) or die("Greska1:" . mysql_error());

while ($row = mysql_fetch_row($result1)) {
    $i = 0;

    $id = $row[$i];
   
}






$birthdate = new DateTime($_POST['birthdate']);
$birthdate = $birthdate->format('Y-m-d');


$name = $_POST['name'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$mail = $_POST['email'];

if ($_POST['sex']=="male"){
    $gender = 1;
}else {
    $gender = 2;
}
$address = $_POST['address'];


$employer1 = $_POST['employer1'];

$od1 = new DateTime($_POST['from1']);
$od1 = $od1->format('Y-m-d');
$do1 = new DateTime($_POST['to1']);
$do1 = $do1->format('Y-m-d');

$position1 = $_POST['position1'];
$about1 = $_POST['jobcomment1'];



$employer2 = $_POST['employer2'];
$od2 = new DateTime($_POST['from2']);
$od2 = $od2->format('Y-m-d');
$do2 = new DateTime($_POST['to2']);
$do2 = $do2->format('Y-m-d');
$position2 = $_POST['position2'];
$about2 = $_POST['jobcomment2'];

$employer3 = $_POST['employer3'];
$od3 = new DateTime($_POST['from3']);
$od3 = $od3->format('Y-m-d');
$do3 = new DateTime($_POST['to3']);
$do3 = $do3->format('Y-m-d');
$position3 = $_POST['position3'];
$about3 = $_POST['jobcomment3'];


$employer4 = $_POST['employer4'];
$od4 = new DateTime($_POST['from4']);
$od4 = $od4->format('Y-m-d');
$do4 = new DateTime($_POST['to4']);
$do4 = $do4->format('Y-m-d');
$position4 = $_POST['position4'];
$about4 = $_POST['jobcomment4'];


$employer5 = $_POST['employer5'];
$od5 = new DateTime($_POST['from5']);
$od5 = $od5->format('Y-m-d');
$do5 = new DateTime($_POST['to5']);
$do5 = $do5->format('Y-m-d');
$position5 = $_POST['position5'];
$about5 = $_POST['jobcomment5'];



$startdate = new DateTime($_POST['startdate']);
$startdate = $startdate->format('Y-m-d');

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

 

$edulvl = $_POST['level'];
$profession = $_POST['profession'];
$hstype = $_POST['hstype'];
$hsname = $_POST['hsname'];
$univname = $_POST['parent_selection'];
$univfax = $_POST['child_selection'];
$faxname = $_POST['facname'];
$faxod1 = new DateTime($_POST['faxod1']);
$faxod1 = $faxod1->format('Y-m-d');
$faxdo1 = new DateTime($_POST['faxdo1']);
$faxdo1 = $faxdo1->format('Y-m-d');


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
  $data5 = mysql_query($query5)or die("Greska:" . mysql_error()); 


$query6 = "INSERT INTO Altidb.extras (id_fk, startdate, fildwork, remotework, invalidity) "
        . "VALUES ($id,'$startdate','$fildwork','$remotework','$invalidity')";
$data6 = mysql_query($query6)or die("Greska:" . mysql_error());


$query7 = "INSERT INTO Altidb.education (id_fk, edulvl, profession, hstype, hsname, univname, univfax, faxname, faxfrom,faxto) "
        . "VALUES ($id,$edulvl,$profession,$hstype,'$hsname', '$univname', '$univfax', '$faxname','$faxod1','$faxdo1')";
$data7 = mysql_query($query7)or die("Greska1:" . mysql_error());




if ( $data7) {

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

//Upload Picture
$target_dir = "images/";
$target_file = $target_dir .$_SESSION[email].substr(basename($_FILES["picture"]["name"]), -4);
echo $target_file;
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);



// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["picture"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["picture"]["size"] > 11500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["picture"]["name"]). " has been uploaded.";


            $tmpname  = $_FILES["picture"]["tmp_name"];
            @img_resize( $tmpname , 75 , "images/" , "pic.jpg");










    } else {
        echo "Sorry, there was an error uploading your file. ";
        echo $target_file;
    }
}




//Upload CV
$target_dir1 = "cvs/";

if(substr(basename($_FILES["cv"]["name"]), -1) != "x") {
    $target_file1 = $target_dir1 . $_SESSION[email] . substr(basename($_FILES["cv"]["name"]), -4);
}else {
    $target_file1 = $target_dir1 . $_SESSION[email] . substr(basename($_FILES["cv"]["name"]), -5);
}
echo $target_file1;
$uploadOk1 = 1;
$imageFileType1 = pathinfo($target_file1,PATHINFO_EXTENSION);




// Check if file already exists
if (file_exists($target_file1)) {
    echo "Sorry, file already exists.";
    $uploadOk1 = 0;
}
// Check file size
if ($_FILES["cv"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk1 = 0;
}
// Allow certain file formats
if($imageFileType1 != "doc" && $imageFileType1 != "docx" && $imageFileType1 != "pdf" ) {
    echo "Sorry, only DOC, DOCX & PDF files are allowed.";
    $uploadOk1 = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk1 == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["cv"]["tmp_name"], $target_file1)) {
        echo "The file ". basename( $_FILES["cv"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file. ";
        echo $target_file1;
    }
}






?>


// Resize image
<?php
/**
 * Make thumbs from JPEG, PNG, GIF source file
 *
 * $tmpname = $_FILES['source']['tmp_name'];
 * $size - max width size
 * $save_dir - destination folder
 * $save_name - tnumb new name
 * $maxisheight - is max for width (if not is for height)
 *
 * Author:  David Taubmann http://www.quidware.com (edited from LEDok - http://www.citadelavto.ru/)
 */

/*/    // And now how using this function fast:
if ($_POST[pic])
    {
    $tmpname  = $_FILES['pic']['tmp_name'];
    @img_resize( $tmpname , 600 , "../album" , "album_".$id.".jpg");
    @img_resize( $tmpname , 120 , "../album" , "album_".$id."_small.jpg");
    @img_resize( $tmpname , 60 , "../album" , "album_".$id."_maxheight.jpg", 1);
    }
    else
    echo "No Images uploaded via POST";
/**/

function img_resize( $tmpname, $size, $save_dir, $save_name, $maxisheight = 0 )
{
    $save_dir     .= ( substr($save_dir,-1) != "/") ? "/" : "";
    $gis        = getimagesize($tmpname);
    $type        = $gis[2];
    switch($type)
    {
        case "1": $imorig = imagecreatefromgif($tmpname); break;
        case "2": $imorig = imagecreatefromjpeg($tmpname);break;
        case "3": $imorig = imagecreatefrompng($tmpname); break;
        default:  $imorig = imagecreatefromjpeg($tmpname);
    }

    $x = imagesx($imorig);
    $y = imagesy($imorig);

    $woh = (!$maxisheight)? $gis[0] : $gis[1] ;

    if($woh <= $size)
    {
        $aw = $x;
        $ah = $y;
    }
    else
    {
        if(!$maxisheight){
            $aw = $size;
            $ah = $size * $y / $x;
        } else {
            $aw = $size * $x / $y;
            $ah = $size;
        }
    }
    $im = imagecreatetruecolor($aw,$ah);
    if (imagecopyresampled($im,$imorig , 0,0,0,0,$aw,$ah,$x,$y))
        if (imagejpeg($im, $save_dir.$save_name))
            return true;
        else
            return false;
}



?>


</body>

</html>