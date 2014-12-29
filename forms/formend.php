<?php

header('Content-Type: text/html; charset=utf-8');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "AltiDB";
$i = 1;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn, "UTF8");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    echo 'Proslo';

//    ----------------------------------------------------PROVERE FORMATA UNOSA
//    
//    -------------------------------------------------(Osnovni podaci) KORAK 1
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Dozvoljena su samo slova i razmaci";
        }
    }

    if (empty($_POST["lastname"])) {
        $nameErr = "Lastame is required";
    } else {
        $lastname = test_input($_POST["lastname"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Dozvoljena su samo slova i razmaci";
        }
    }

    if (empty($_POST["gender"])) {
        $genderErr = "0";
    } elseif ($_POST["gender"] = 'female') {
        $gender = '1';
    } else {
        $gender = '2';
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
            $dateErr = "Pogresan format datuma";
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

    if (empty($_POST["phone"])) {
        $nameErr = "Phone is required";
    } else {
        $name = test_input($_POST["phone"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[0-9 ]*$/", $name)) {
            $nameErr = "Dozvoljeni su samo brojevi";
        }
    }

    if (empty($_POST["address"])) {
        $jobcomment = "";
    } else {
        $jobcomments = test_input($_POST["address"]);
    }

//    ----------------------------------------------------(Obrazovanje) KORAK 2

    if (empty($_POST["employer"])) {
        $employer = "";
    } else {
        $employer = test_input($_POST["employer"]);
    }

    if (empty($_POST["from"])) {
        $from = "Date is required";
    } else {
        $from = test_input($_POST["from"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^(((0[1-9]|[12][0-8])[\/](0[1-9]|1[012]))|((29|30|31)
            [\/](0[13578]|1[02]))|((29|30)[\/](0[4,6,9]|11)))[\/](19|[2-9][0-9])
            \d\d$)|(^29[\/]02[\/](19|[2-9][0-9])(00|04|08|12|16|20|24|28|32|36|
            40|44|48|52|56|60|64|68|72|76|80|84|88|92|96)$/", $from)) {
            $fromErr = "Pogresan format datuma";
        }
    }

    if (empty($_POST["to"])) {
        $to = "Date is required";
    } else {
        $to = test_input($_POST["to"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^(((0[1-9]|[12][0-8])[\/](0[1-9]|1[012]))|((29|30|31)
            [\/](0[13578]|1[02]))|((29|30)[\/](0[4,6,9]|11)))[\/](19|[2-9][0-9])
            \d\d$)|(^29[\/]02[\/](19|[2-9][0-9])(00|04|08|12|16|20|24|28|32|36|
            40|44|48|52|56|60|64|68|72|76|80|84|88|92|96)$/", $to)) {
            $toErr = "Pogresan format datuma";
        }
    }

//  ---------------------------------------------------(Radno iskustvo) KORAK 3
    if (empty($_POST["jobcomment"])) {
        $jobcomment = "";
    } else {
        $jobcomments = test_input($_POST["jobcomment"]);
    }

    if (empty($_POST["position"])) {
        $position = "";
    } else {
        $position = test_input($_POST["position"]);
    }

    if (empty($_POST["jobfrom"])) {
        $jobfrom = "Date is required";
    } else {
        $jobfrom = test_input($_POST["jobfrom"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^(((0[1-9]|[12][0-8])[\/](0[1-9]|1[012]))|((29|30|31)
            [\/](0[13578]|1[02]))|((29|30)[\/](0[4,6,9]|11)))[\/](19|[2-9][0-9])
            \d\d$)|(^29[\/]02[\/](19|[2-9][0-9])(00|04|08|12|16|20|24|28|32|36|
            40|44|48|52|56|60|64|68|72|76|80|84|88|92|96)$/", $jobfrom)) {
            $jobfromErr = "Pogresan format datuma";
        }
    }

//    --------------------------------------------(Dodatne informacije) KORAK 4 

    if (empty($_POST["fieldwork"])) {
        $fieldwork = "false";
    } else {
        $fieldwork = "true";
    }
    echo $_POST["fieldwork"];
    if (empty($_POST["remotework"])) {
        $fieldwork = "false";
    } else {
        $fieldwork = "true";
    }
    echo $_POST["remotework"];
    if (empty($_POST["invalidity"])) {
        $fieldwork = "false";
    } else {
        $fieldwork = "true";
    }

//    $ = $_POST[''];
//  -----------------------------------------------------------  INSERTI U BAZU

    $sql = "INSERT INTO basicinfo (name,lastname, birthdate, phone, mail, gender, address) "
            . "VALUES ('$name','$lastname', '$date','$phone','$mail', '$gender','$address')";
    $result = $conn->query($sql);

    $sql = "INSERT INTO education (edulevel, profession, otheredu, computers, unis, faculties, "
            . "otherfac, lang1, lang1lvl, lang2, lang2lvl, lang3, lang3lvl, lang4, lanh4lvl) "
            . "VALUES ('$edulevel', '$profession', '$otheredu', '$computers', '$unis', '$faculties',"
            . " '$otherfac', '$lang1', '$lang1lvl', '$lang2', '$lang2lvl', '$lang3', '$lang3lvl', '$lang4', '$lanh4lvl')";
    $result = $conn->query($sql);
    if ($result) {
        echo "YOUR REGISTRATION IS COMPLETED...";
    }
    $sql = "INSERT INTO workexp1 (employer,od, do, position, about) "
            . "VALUES ('$employer','$od','$do','$position','$about')";
    $result = $conn->query($sql);

    $sql = "INSERT INTO workexp2 (employer,od, do, position, about) "
            . "VALUES ('$employer','$od','$do','$position','$about')";
    $result = $conn->query($sql);

    $sql = "INSERT INTO workexp3 (employer,od, do, position, about) "
            . "VALUES ('$employer','$od','$do','$position','$about')";
    $result = $conn->query($sql);

    $sql = "INSERT INTO workexp4 (employer,od, do, position, about) "
            . "VALUES ('$employer','$od','$do','$position','$about')";
    $result = $conn->query($sql);

    if ($result) {
        echo "YOUR REGISTRATION IS COMPLETED...";
    }

//  ------------------------------------------------------------- UPLOAD SLIKE

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["picture"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

    //  Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["picture"]["tmp_name"]);
    if ($check !== false) {
        echo "Fajl je slika - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "Fajl nije slika.";
        $uploadOk = 0;
    }

    // Provera da li fajl vec postoji u bazi
    if (file_exists($target_file)) {
        echo "Sorry, fajl vec postoji u bazi.";
        $uploadOk = 0;
    }

    // Provera velicine 
    if ($_FILES["slika"]["size"] > 5000000) {
        echo "Sorry, fajl je preveliki.";
        $uploadOk = 0;
    }

    // dozvoljavaju se samo neki formati
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, samo JPG, JPEG, PNG & GIF fajlovi su dopusteni.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["slika"]["tmp_name"], $target_file)) {
            echo "The file " . basename($_FILES["slika"]["name"]) . " has been uploaded.";
            $sql = "INSERT INTO uploads ('/uploads/" . basename($_FILES["cv"]["name"]) . "') "
                    . "VALUES ('$cv')";
            $result = $conn->query($sql);
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

//  --------------------------------------------------------------- UPLOAD CV-a

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["cv"]["name"]);
    $uploadOk = 1;
    $FileType = pathinfo($target_file, PATHINFO_EXTENSION);

    // Provera da li fajl vec postoji u bazi
    if (file_exists($target_file)) {
        echo "Sorry, fajl vec postoji u bazi.";
        $uploadOk = 0;
    }

    // Provera velicine 
    if ($_FILES["cv"]["size"] > 5000000) {
        echo "Sorry, fajl je preveliki.";
        $uploadOk = 0;
    }

    // dozvoljavaju se samo neki formati
    if ($FileType != "pdf" && $FileType != "doc" && $FileType != "docx") {
        echo "Sorry, samo PDF, DOC, DOCX fajlovi su dopusteni.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["cv"]["tmp_name"], $target_file)) {
            echo "The file " . basename($_FILES["cv"]["name"]) . " has been uploaded.";
            $sql = "INSERT INTO uploads ('/uploads/" . basename($_FILES["cv"]["name"]) . "') "
                    . "VALUES ('$cv')";
            $result = $conn->query($sql);
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

//    -----------------FUNKCIJA KOJA TRIMUJE UNOSE I SKIDA SPECIJALNE KARAKTERE

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $conn->close();
}    