<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/jquery.idealforms.css">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Forme</title>
        <style>
            body {
                max-width: 980px;
                margin: 2em auto;
                font: normal 15px/1.5 Arial, sans-serif;
                color: #353535;
                overflow-y: scroll;
            }
            .content {
                margin: 0 30px;
            }
            .field.buttons button {
                margin-right: .5em;
            }
            #invalid {
                display: none;
                float: left;
                width: 290px;
                margin-left: 120px;
                margin-top: .5em;
                color: #CC2A18;
                font-size: 130%;
                font-weight: bold;
            }
            .idealforms.adaptive #invalid {
                margin-left: 0 !important;
            }
            .idealforms.adaptive .field.buttons label {
                height: 0;
            }
        </style>
        <link href="/css/jquerysctipttop.css" rel="stylesheet" type="text/css">


        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

        <script language="javascript" type="text/javascript">
            $(document).ready(function () {

                //let's create arrays
                var univ1 = [
                    {display: 'Arhitektonski fakultet', value: '1'},
                    {display: 'Biološki fakultet', value: '2'},
                    {display: 'Ekonomski fakultet', value: '3'},
                    {display: 'Elektrotehnički fakultet', value: '4'},
                    {display: 'Fakultet bezbednosti', value: '5'},
                    {display: 'Fakultet organizacionih nauka', value: '6'},
                    {display: 'Fakultet političkih nauka', value: '7'},
                    {display: 'Fakultet sporta i fizičkog vaspitanja', value: '8'},
                    {display: 'Fakultet veterinarske medicine', value: '9'},
                    {display: 'Fakultet za fizičku hemiju', value: '10'},
                    {display: 'Fakultet za specijalnu edukaciju i rehabilitaciju', value: '11'},
                    {display: 'Farmaceutski fakultet', value: '12'},
                    {display: 'Filološki fakultet', value: '13'},
                    {display: 'Filozofski fakultet', value: '14'},
                    {display: 'Fizički fakultet', value: '15'},
                    {display: 'Geografski fakultet', value: '16'},
                    {display: 'Građevinski fakultet', value: '17'},
                    {display: 'Hemijski fakultet', value: '18'},
                    {display: 'Mašinski fakultet', value: '19'},
                    {display: 'Matematički fakultet', value: '20'},
                    {display: 'Medicinski fakultet', value: '21'},
                    {display: 'Poljoprivredni fakultet', value: '22'},
                    {display: 'Pravni fakultet', value: '23'},
                    {display: 'Pravoslavni bogoslovski fakultet', value: '24'},
                    {display: 'Rudarsko-geološki fakultet', value: '25'},
                    {display: 'Saobraćajni fakultet', value: '26'},
                    {display: 'Stomatološki fakultet', value: '27'},
                    {display: 'Šumarski fakultet', value: '28'},
                    {display: 'Tehnički fakultet u Boru', value: '29'},
                    {display: 'Tehnološko-metalurški fakultet', value: '30'},
                    {display: 'Učiteljski fakultet', value: '31'},
                ];

                var univ2 = [
                    {display: 'Fakultet dramskih umetnosti', value: '32'},
                    {display: 'Fakultet likovnih umetnosti', value: '33'},
                    {display: 'Fakultet muzičke umetnosti', value: '34'},
                    {display: 'Fakultet primenjenih umetnosti', value: '35'},
                ];
                var univ3 = [
                    {display: 'Fakultet Scenskih i Primenjenih Umetnosti', value: '36'},
                ];
                var univ4 = [
                    {display: 'Akademija umetnosti', value: '37'},
                    {display: 'Ekonomski fakultet', value: '38'},
                    {display: 'Fakultet sporta i fizičkog vaspitanja', value: '39'},
                    {display: 'Fakultet tehničkih nauka', value: '40'},
                    {display: 'Filozofski fakultet', value: '41'},
                    {display: 'Građevinski fakultet', value: '42'},
                    {display: 'Medicinski fakultet', value: '43'},
                    {display: 'Pedagoški fakultet', value: '44'},
                    {display: 'Poljoprivredni fakultet', value: '45'},
                    {display: 'Pravni fakultet', value: '46'},
                    {display: 'Prirodno-matematički fakultet', value: '47'},
                    {display: 'Tehnički fakultet „Mihajlo Pupin“', value: '48'},
                    {display: 'Tehnološki fakultet', value: '49'},
                    {display: 'Pedagoški fakultet u Somboru', value: '50'},
                ];
                var univ5 = [
                    {display: 'Ekonomski fakultet', value: '51'},
                    {display: 'Elektronski fakultet', value: '52'},
                    {display: 'Fakultet sporta i fizičkog vaspitanja', value: '53'},
                    {display: 'Fakultet umetnosti', value: '54'},
                    {display: 'Fakultet zaštite na radu', value: '55'},
                    {display: 'Filozofski fakultet', value: '56'},
                    {display: 'Građevinsko-arhitektonski fakultet', value: '57'},
                    {display: 'Mašinski fakultet', value: '58'},
                    {display: 'Medicinski fakultet', value: '59'},
                    {display: 'Pravni fakultet', value: '60'},
                    {display: 'Prirodno-matematički fakultet', value: '61'},
                    {display: 'Tehnološki fakultet', value: '62'},
                    {display: 'Učiteljski fakultet', value: '63'},
                ];
                var univ6 = [
                    {display: 'Agronomski fakultet', value: '64'},
                    {display: 'Ekonomski fakultet', value: '65'},
                    {display: 'Filološko-umetnički fakultet', value: '66'},
                    {display: 'Mašinski fakultet u Kragujevcu', value: '67'},
                    {display: 'Mašinki fakultet u Kraljevu', value: '68'},
                    {display: 'Medicinski fakultet', value: '69'},
                    {display: 'Pedagoški fakultet', value: '70'},
                    {display: 'Pravni fakultet', value: '71'},
                    {display: 'Prirodno-matematički fakultet', value: '72'},
                    {display: 'Tehnički fakultet', value: '73'},
                    {display: 'Učiteljski fakultet', value: '74'},
                ];
                var univ7 = [
                    {display: 'Departman za biohemijske i medicinske nauke', value: '75'},
                    {display: 'Departman za filozofsko-filološke nauke', value: '76'},
                    {display: 'Departman za matematičke, fizičke i informatičke nauke', value: '77'},
                    {display: 'Departman za pravno-ekonomske nauke', value: '78'},
                    {display: 'Departman za tehničko-tehnološke nauke', value: '79'},
                    {display: 'Departman za umetnost', value: '80'},
                ];
                var univ8 = [
                    {display: 'Vojna akademija', value: '81'},
                    {display: 'Medicinski fakultet vojnomedicinske akademije', value: '82'},
                ];
                var univ9 = [
                    {display: 'Ekonomski fakultet', value: '83'},
                    {display: 'Fakultet tehničkih nauka', value: '84'},
                    {display: 'Fakultet umetnosti', value: '85'},
                    {display: 'Fakultet za sport i fizičko vaspitanje', value: '86'},
                    {display: 'Filozofski fakultet', value: '87'},
                    {display: 'Medicinski fakultet', value: '88'},
                    {display: 'Poljoprivredni fakultet', value: '89'},
                    {display: 'Pravni fakultet', value: '90'},
                    {display: 'Prirodno-matematički fakultet', value: '91'},
                    {display: 'Učiteljski fakultet', value: '92'},
                    {display: 'International Business College Mitrovica', value: '93'},
                ];
                var univ10 = [
                    {display: 'Akademija za estetiku i kozmetologiju', value: '94'},
                    {display: 'Beogradska Poslovna Škola – Visoka Škola Strukovnih Studija', value: '95'},
                    {display: 'Visoka Građevinsko – Geodetska Škola Strukovnih Studija', value: '96'},
                    {display: 'Visoka Hotelijerska Škola', value: '97'},
                    {display: 'Visoka Inženjerska Škola Strukovnih Studija Tehnikum Taurunum', value: '98'},
                    {display: 'Visoka Medicinska Škola Strukovnih Studija „Milutin Milanković“', value: '99'},
                    {display: 'Visoka sportska i zdravstvena škola- Beograd', value: '100'},
                    {display: 'Visoka Strukovna Škola za Preduzetništvo', value: '101'},
                    {display: 'Visoka Strukovna Škola za Propagandu i Odnose sa Javnošću', value: '102'},
                    {display: 'Visoka Škola Elektrotehnike i Računarstva Strukovnih Studija', value: '103'},
                    {display: 'Visoka Škola Likovnih i Primenjenih Umetnosti Strukovnih Studija', value: '104'},
                    {display: 'Visoka Škola Strukovnih Studija Beogradska Politehnika', value: '105'},
                    {display: 'Visoka Škola Strukovnih Studija za Informacione Tehnologije', value: '106'},
                    {display: 'Visoka Škola Strukovnih Studija za Menadžment u Saobracaju- Niš', value: '107'},
                    {display: 'Visoka Škola Vojnomedicinske Akademije', value: '108'},
                    {display: 'Visoka Škola za Informacione i Komunikacione Tehnologije Strukovnih Studija', value: '109'},
                    {display: 'Visoka škola za informacione tehnologije, računarski dizajn i savremeno poslovanje', value: '110'},
                    {display: 'Visoka Škola za Poslovnu Ekonomiju i Preduzetništvo', value: '111'},
                    {display: 'Visoka Škola za Projektni Menadžment', value: '112'},
                    {display: 'Visoka Škola za Računovodstveno i Berzansko Poslovanje', value: '113'},
                    {display: 'Visoka Tehnička Škola Strukovnih Studija', value: '114'},
                    {display: 'Visoka Tekstilna Strukovna Škola za Dizajn, Tehnologiju i Menadžment', value: '115'},
                    {display: 'Visoka Turistička Škola Strukovnih Studija', value: '116'},
                    {display: 'Visoka Zdravstvena Škola Strukovnih Studija', value: '117'},
                    {display: 'Visoka Zdravstvenosanitarna Škola Strukovnih Studija – Visan', value: '118'},
                    {display: 'Visoka Železnička Škola', value: '119'},
                    {display: 'Akademija Fudbala – Visoka Škola Strukovnih Studija', value: '120'},
                ];
                var univ11 = [
                    {display: 'Kriminalističko policijska akademija', value: '121'},
                ];
                var univ12 = [
                    {display: 'Fakultet informacionih tehnologija', value: '122'},
                    {display: 'Fakultet za trgovinu i bankarstvo', value: '123'},
                    {display: 'Fakultet za menadžment u sportu', value: '124'},
                    {display: 'Akademija umetnosti', value: '125'},
                    {display: 'Fakultet za ekonomiju i političke nauke', value: '126'},
                    {display: 'Fakultet za strane jezike', value: '127'},
                    {display: 'Fakultet za inženjerski menadžment', value: '128'},
                ];
                var univ13 = [
                    {display: 'Evropski Univerzitet Zlatibor', value: '129'},
                    {display: 'Fakultet za inženjerski internacionalni menadžment', value: '130'},
                    {display: 'Fakultet za evropski biznis i marketing', value: '131'},
                    {display: 'Farmaceutski fakultet', value: '132'},
                    {display: 'NOVA akademija umetnosti', value: '133'},
                ];
                var univ14 = [
                    {display: 'Filološke nauke', value: '134'},
                    {display: 'Prirodno-tehničke nauke', value: '135'},
                    {display: 'Pedagoško-psihološke nauke', value: '136'},
                    {display: 'Pravne nauke', value: '137'},
                    {display: 'Ekonomske nauke', value: '138'},
                    {display: 'Umetnost', value: '139'},
                ];
                var univ15 = [
                    {display: 'Fakultet za poslovne studije – Beograd', value: '140'},
                    {display: 'Fakultet za međunarodnu ekonomiju – Beograd', value: '141'},
                    {display: 'Fakultet za kulturu i medije – Beograd', value: '142'},
                    {display: 'Fakultet za državnu upravu i administraciju – Beograd', value: '143'},
                    {display: 'Fakultet za umetnost i dizajn – Beograd', value: '144'},
                    {display: 'Fakultet za kompjuterske nauke – Beograd', value: '145'},
                    {display: 'Fakultet za menadžment – Zaječar', value: '146'},
                    {display: 'Fakultet za poslovne studije – Požarevac', value: '147'},
                    {display: 'Fakultet za poslovnu ekonomiju – Valjevo', value: '148'},
                    {display: 'Fakultet za poslovne studije – Vršac', value: '149'},
                    {display: 'Fakultet za biofarming – Bačka Topola', value: '150'},
                    {display: 'Visoka poslovna škola „Megatrend“ – strukovne studije – Beograd', value: '151'},
                    {display: 'Visoka škola za košarku „Borislav Stanković“ – strukovne studije – Beograd', value: '152'},
                    {display: 'Visoka škola za menadžment i biznis – strukovne studije – Zaječar', value: '153'},
                    {display: 'Megatrend virtuelni univerzitet MTVU', value: '154'},
                ];
                var univ16 = [
                    {display: 'Saobraćajni fakultet', value: '155'},
                    {display: 'Fakultet filoloskih nauka', value: '156'},
                    {display: 'Fakultet poslovne ekonomije', value: '157'},
                    {display: 'Fakultet informacionih tehnologija', value: '158'},
                    {display: 'Fakultet zdravstvenih nauka', value: '159'},
                    {display: 'Fakultet pravnih nauka', value: '160'},
                    {display: 'Fakultet sportskih nauka', value: '161'},
                ];
                var univ17 = [
                    {display: 'Fakultet poslovne ekonomije', value: '162'},
                    {display: 'Fakultet zaštite životne sredine', value: '163'},
                    {display: 'Fakultet za primenjenu bezbednost', value: '164'},
                    {display: 'Fakultet za digitalnu produkciju', value: '165'},
                    {display: 'Akademija klasičnog slikarstva', value: '166'},
                    {display: 'Fakultet ekološke poljoprivrede', value: '167'},
                    {display: 'Fakultet za uslužni biznis', value: '168'},
                    {display: 'Fakultet za sport i turizam – TIMS', value: '169'},
                    {display: 'Fakultet za evropske pravno-političke studije', value: '170'},
                ];
                var univ18 = [
                    {display: 'Fakultet informacionih tehnologija (integrisan)', value: '171'},
                    {display: 'Fakultet digitalnih umetnosti (integrisan)', value: '172'},
                    {display: 'Fakultet za menadžment (integrisan)', value: '173'},
                ];
                var univ19 = [
                    {display: 'Pravni fakultet za privredu i pravosuđe', value: '174'},
                    {display: 'Fakultet za ekonomiju i inženjerski menadžment', value: '175'},
                    {display: 'Stomatološki fakultet', value: '176'},
                    {display: 'Fakultet za menadžment malih i srednjih preduzeća', value: '177'},
                ];
                var univ20 = [
                    {display: 'Poslovni fakultet', value: '178'},
                    {display: 'Fakultet za turistički i hotelijerski menadžment', value: '179'},
                    {display: 'Fakultet za informatiku i računarstvo', value: '180'},
                    {display: 'Tehnički fakultet', value: '181'},
                    {display: 'Poslovni fakultet u Valjevu', value: '182'},
                    {display: 'Fakultet za ekonomiju,finansije i administraciju (FEFA)', value: '183'},
                    {display: 'Fakultet za medije i komunikaciju (FMK)', value: '184'},
                    {display: 'Fakultet za primenjenu ekologiju (FUTURA)', value: '185'},
                    {display: 'Učenje na daljinu -DLS', value: '186'},
                    {display: 'Autrian-Serbian Tourism Bachelor Program (English)', value: '187'},
                ];
                var univ21 = [
                    {display: 'Akademija lepih umetnosti', value: '188'},
                    {display: 'Beogradska bankarska akademija – Fakultet za bankarstvo, osiguranje i finansije', value: '189'},
                    {display: 'Fakultet za poslovno industrijski menadžment, Mladenovac', value: '190'},
                    {display: 'Fakultet za pravne i poslovne studije „dr Lazar Vrkatić“', value: '191'},
                    {display: 'Pravni fakultet Univerziteta Union', value: '192'},
                    {display: 'Računarski fakultet', value: '193'},
                ];
                var univ22 = [
                    {display: 'Fakultet za graditeljski menadžment', value: '194'},
                    {display: 'Fakultet za menadžment nekretnina', value: '195'},
                    {display: 'Fakultet za poslovne studije i pravo', value: '196'},
                    {display: 'Fakultet za preduzetnički biznis', value: '197'},
                    {display: 'Fakultet za sport', value: '198'},
                    {display: 'Fakultet za strateški i operativni menadžment', value: '199'},
                    {display: 'Fakultet za primenjeni menadžment, ekonomiju i finansije- Uni. priv. akad.', value: '200'},
                    {display: 'Fakultet za ekologiju i zaštitu životne sredine', value: '201'},
                ];


                //If parent option is changed
                $("#parent_selection").change(function () {
                    var parent = $(this).val(); //get option value from parent 

                    switch (parent) { //using switch compare selected option and populate child
                        case 'univ1':
                            list(univ1);
                            break;
                        case 'univ2':
                            list(univ2);
                            break;
                        case 'univ3':
                            list(univ3);
                            break;
                        case 'univ4':
                            list(univ4);
                            break;
                        case 'univ5':
                            list(univ5);
                            break;
                        case 'univ6':
                            list(univ6);
                            break;
                        case 'univ7':
                            list(univ7);
                            break;
                        case 'univ8':
                            list(univ8);
                            break;
                        case 'univ9':
                            list(univ9);
                            break;
                        case 'univ10':
                            list(univ10);
                            break;
                        case 'univ11':
                            list(univ11);
                            break;
                        case 'univ12':
                            list(univ12);
                            break;
                        case 'univ13':
                            list(univ13);
                            break;
                        case 'univ14':
                            list(univ14);
                            break;
                        case 'univ15':
                            list(univ15);
                            break;
                        case 'univ16':
                            list(univ16);
                            break;
                        case 'univ17':
                            list(univ17);
                            break;
                        case 'univ18':
                            list(univ18);
                            break;
                        case 'univ19':
                            list(univ19);
                            break;
                        case 'univ20':
                            list(univ20);
                            break;
                        case 'univ21':
                            list(univ21);
                            break;
                        case 'univ22':
                            list(univ22);
                            break;



                    }
                });

                //function to populate child select box
                function list(array_list)
                {
                    $("#child_selection").html(""); //reset child options
                    $(array_list).each(function (i) { //populate child options 
                        $("#child_selection").append("<option value=\"" + array_list[i].value + "\">" + array_list[i].display + "</option>");
                    });
                }

            });
        </script>






    </head>
    <body>



        <div class="content">
            <div class="idealsteps-container">
                <nav class="idealsteps-nav"> </nav>
                <form method="post" action="/profile/profile.php" novalidate autocomplete="off" class="idealforms" accept-charset="utf-8" >
                    <div class="idealsteps-wrap"> 

                        <!-- Step 1 -->

                        <section class="idealsteps-step">
                            <h2>Osnovni podaci</h2> 

                            <div class="field">
                                <label class="main">Ime:</label>
                                <input name="name" type="text" >
                                <span class="error"></span> </div>
                            <div class="field">
                                <label class="main">Prezime:</label>
                                <input name="lastname" type="text" >
                                <span class="error"></span> </div>
                            <div class="field">
                                <label class="main">Pol:</label>
                                <p class="group">
                                    <label>
                                        <input name="sex" type="radio" value="male">
                                        Muški</label>
                                    <label>
                                        <input name="sex" type="radio" value="female">
                                        Ženski</label>
                                </p>
                                <span class="error"></span> </div>  
                            <div class="field">
                                <label class="main">Datum rodjenja:</label>
                                <input name="date" type="text" placeholder="mm/dd/yyyy" class="datepicker">
                                <span class="error"></span> </div>
                            <div class="field">
                                <label class="main">E-Mail:</label>
                                <input name="email" type="email">
                                <span class="error"></span> </div>
                            <div class="field">
                                <label class="main">Telefon:</label>
                                <input name="phone" type="text" placeholder="">
                                <span class="error"></span> </div>
                            <div class="field">
                                <label class="main">Slika:</label>
                                <input id="picture" name="picture" type="file" multiple>
                                <span class="error"></span> </div>
                            <div class="field buttons">
                                <label class="main">&nbsp;</label>
                                <button type="button" class="next">Dalje &raquo;</button>
                            </div>
                        </section>

                        <!-- Step 2 -->

                        <section  class="idealsteps-step">

                            <h2>Obrazovanje</h2> 

                            <div class="field">
                                <label class="main">Nivo obrazovanja:</label>
                                <select onchange="showEdu()" name="level" id="level">
                                    <option value="default">&ndash; Odaberite opciju &ndash;</option>

                                    <?php
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

                                    $sql = "SELECT name FROM edulevel";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<option value='" . $i++ . "'>" . $row["name"] . "</option>";
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                    $conn->close();
                                    ?>




                                </select>
                                <span class="error"></span> </div>

                            <div class="field">
                                <label class="main">Stručno zvanje:</label>
                                <select name="profession" id="profession">
                                    <option value="default">&ndash; Odaberite opciju &ndash;</option>



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
                                    mysql_set_charset('utf8', $conn);
// Check connection
                                    if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                    }

                                    $sql = "SELECT name FROM profession";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<option value='" . $i++ . "'>" . $row["name"] . "</option>";
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                    $conn->close();
                                    ?>

                                </select>
                                <span class="error"></span> </div>



 <script>
                          function showEdu(){
                              
                              document.getElementById("faculties").style.display = 'block';
                              
                              
                              
                          }                                                                
                              




                            </script>





                            <div id="faculties" style="display: none">
                                <div  class="field" >
                                    <label  class="main">Univerziteti:</label>
                                    <select name="parent_selection" id="parent_selection" onchange="showFac()" >
                                        <option value="default">&ndash; Odaberite opciju &ndash;</option>
                                        <option  value="univ1">Univerzitet u Beogradu</option>
                                        <option value="univ2">Univerzitet umetnosti u Beogradu</option>
                                        <option value="univ3">Akademija Lepih Umetnosti</option>
                                        <option value="univ4">Univerzitet u Novom Sadu</option>
                                        <option value="univ5">Univerzitet u Nišu</option>
                                        <option value="univ6">Univerzitet u Kragujevcu</option>
                                        <option value="univ7">Univerzitet u Novom Pazaru</option>
                                        <option value="univ8">Univerzitet odbrane</option>
                                        <option value="univ9">Univerzitet u Prištini sa trenutnim sedištem u Kosovskoj Mitrovici</option>
                                        <option value="univ10">Visoke škole strukovnih studija</option>
                                        <option value="univ11">Kriminalističko Policijska Akademija</option>
                                        <option value="univ12">Alfa Univerzitet</option>
                                        <option value="univ13">Evropski univerzitet</option>
                                        <option value="univ14">Internacionalni univerzitet u Novom Pazaru</option>
                                        <option value="univ15">Megatrend Univerzitet</option>
                                        <option value="univ16">Panevropski univerzitet Apeiron</option>
                                        <option value="univ17">Univerzitet Educons</option>
                                        <option value="univ18">Univerzitet Metropolitan</option>
                                        <option value="univ19">Univerzitet Privredna akademija</option>
                                        <option value="univ20">Univerzitet Singidunum</option>
                                        <option value="univ21">Univerzitet Union</option>
                                        <option value="univ22">Univerzitet UNION – Nikola Tesla</option>
                                    </select>
                                    <span class="error"></span> </div>    




                                <div  class="field">
                                    <label  class="main">Fakulteti odabranog univerziteta:</label>
                                    <select name="child_selection" id="child_selection">
                                        <option value="default">&ndash; Odaberite opciju &ndash;</option>

                                    </select>
                                    <span class="error"></span> </div>                                

                            </div>

                            <div class="field buttons">
                                <label class="main">&nbsp;</label>
                                <button type="button" class="prev">&laquo; Nazad</button>
                                <button type="button" class="next">Dalje &raquo;</button>
                            </div>

                           

                            <script > 
                            function showFac(){
                                
                                
                                document.getElementById("faculties").style.display = 'block';
                                
                                
                            }
                            
                            
                            
                            </script>





                        </section>

                        <!-- Step 3 -->







                        <section id="workexp" class="idealsteps-step">
                            <h2>Radno iskustvo</h2>






                            <div id="position1" style="display:none">
                                <div class="field add" >
                                    <label class="main">Poslodavac:</label>
                                    <input name="employer" type="text" placeholder="Alti d.o.o.">
                                    <span class="error"></span> </div>
                                <div class="field add">Period&nbsp zaposlenja:</div>
                                <div class="field" >    
                                    <label class="main add">Od:</label>
                                    <input name="from" type="text" placeholder="mm/dd/yyyy" class="datepicker">
                                    <span class="error"></span> </div>
                                <div class="field" >
                                    <label class="main">Do:</label>
                                    <input name="to" type="text" placeholder="mm/dd/yyyy" class="datepicker">
                                    <span class="error"></span> </div>
                                <div class="field" >
                                    <label class="main">Pozicija:</label>
                                    <input name="position" type="text" placeholder="">
                                    <span class="error"></span> </div>
                                <div class="field" >
                                    <label class="main">Opis posla:</label>
                                    <textarea name="jobcomment" cols="30" rows="10"></textarea>
                                    <span class="error"></span> </div>
                            </div>


                            <div id="position2" style="display:none">
                                <div class="field add" >
                                    <label class="main">Poslodavac:</label>
                                    <input name="employer" type="text" placeholder="Alti d.o.o.">
                                    <span class="error"></span> </div>
                                <div class="field add">Period&nbsp zaposlenja:</div>
                                <div class="field" >    
                                    <label class="main add">Od:</label>
                                    <input name="from" type="text" placeholder="mm/dd/yyyy" class="datepicker">
                                    <span class="error"></span> </div>
                                <div class="field" >
                                    <label class="main">Do:</label>
                                    <input name="to" type="text" placeholder="mm/dd/yyyy" class="datepicker">
                                    <span class="error"></span> </div>
                                <div class="field" >
                                    <label class="main">Pozicija:</label>
                                    <input name="position" type="text" placeholder="">
                                    <span class="error"></span> </div>
                                <div class="field" >
                                    <label class="main">Opis posla:</label>
                                    <textarea name="jobcomment" cols="30" rows="10"></textarea>
                                    <span class="error"></span> </div>
                            </div>

                            <div id="position3" style="display:none">
                                <div class="field add" >
                                    <label class="main">Poslodavac:</label>
                                    <input name="employer" type="text" placeholder="Alti d.o.o.">
                                    <span class="error"></span> </div>
                                <div class="field add">Period&nbsp zaposlenja:</div>
                                <div class="field" >    
                                    <label class="main add">Od:</label>
                                    <input name="from" type="text" placeholder="mm/dd/yyyy" class="datepicker">
                                    <span class="error"></span> </div>
                                <div class="field" >
                                    <label class="main">Do:</label>
                                    <input name="to" type="text" placeholder="mm/dd/yyyy" class="datepicker">
                                    <span class="error"></span> </div>
                                <div class="field" >
                                    <label class="main">Pozicija:</label>
                                    <input name="position" type="text" placeholder="">
                                    <span class="error"></span> </div>
                                <div class="field" >
                                    <label class="main">Opis posla:</label>
                                    <textarea name="jobcomment" cols="30" rows="10"></textarea>
                                    <span class="error"></span> </div>
                            </div>


                            <div id="position4" style="display:none">
                                <div class="field add" >
                                    <label class="main">Poslodavac:</label>
                                    <input name="employer" type="text" placeholder="Alti d.o.o.">
                                    <span class="error"></span> </div>
                                <div class="field add">Period&nbsp zaposlenja:</div>
                                <div class="field" >    
                                    <label class="main add">Od:</label>
                                    <input name="from" type="text" placeholder="mm/dd/yyyy" class="datepicker">
                                    <span class="error"></span> </div>
                                <div class="field" >
                                    <label class="main">Do:</label>
                                    <input name="to" type="text" placeholder="mm/dd/yyyy" class="datepicker">
                                    <span class="error"></span> </div>
                                <div class="field" >
                                    <label class="main">Pozicija:</label>
                                    <input name="position" type="text" placeholder="">
                                    <span class="error"></span> </div>
                                <div class="field" >
                                    <label class="main">Opis posla:</label>
                                    <textarea name="jobcomment" cols="30" rows="10"></textarea>
                                    <span class="error"></span> </div>
                            </div>


                            <div id="position5" style="display:none">
                                <div class="field add" >
                                    <label class="main">Poslodavac:</label>
                                    <input name="employer" type="text" placeholder="Alti d.o.o.">
                                    <span class="error"></span> </div>
                                <div class="field add">Period&nbsp zaposlenja:</div>
                                <div class="field" >    
                                    <label class="main add">Od:</label>
                                    <input name="from" type="text" placeholder="mm/dd/yyyy" class="datepicker">
                                    <span class="error"></span> </div>
                                <div class="field" >
                                    <label class="main">Do:</label>
                                    <input name="to" type="text" placeholder="mm/dd/yyyy" class="datepicker">
                                    <span class="error"></span> </div>
                                <div class="field" >
                                    <label class="main">Pozicija:</label>
                                    <input name="position" type="text" placeholder="">
                                    <span class="error"></span> </div>
                                <div class="field" >
                                    <label class="main">Opis posla:</label>
                                    <textarea name="jobcomment" cols="30" rows="10"></textarea>
                                    <span class="error"></span> </div>
                            </div>



                            <div class="field buttons">
                                <label class="main">&nbsp;</label>
                                <button onclick="addForm()" type="button" >Dodaj</button>

                            </div>

                            <div >
                                <label class="main">&nbsp;</label>
                                <button onclick="hideForm()" type="button" >Obriši</button>

                            </div>


                            <script>
                                var clicks = 1;

                                function addForm() {


                                    if (clicks === 1) {
                                        document.getElementById("position1").style.display = "block";
                                        clicks++;
                                    } else if (clicks === 2) {
                                        document.getElementById("position2").style.display = "block";
                                        clicks++;
                                    } else if (clicks === 3) {
                                        document.getElementById("position3").style.display = "block";
                                        clicks++;
                                    } else if (clicks === 4) {
                                        document.getElementById("position4").style.display = "block";
                                        clicks++;
                                    } else if (clicks === 5) {
                                        document.getElementById("position5").style.display = "block";
                                        clicks++;
                                    } else if (clicks === 6) {

                                    }


                                }


                                function hideForm() {
                                    if (clicks === 1) {

                                    } else if (clicks === 2) {
                                        document.getElementById("position1").style.display = "none";
                                        clicks--;
                                    } else if (clicks === 3) {
                                        document.getElementById("position2").style.display = "none";
                                        clicks--;
                                    } else if (clicks === 4) {
                                        document.getElementById("position3").style.display = "none";
                                        clicks--;
                                    } else if (clicks === 5) {
                                        document.getElementById("position4").style.display = "none";
                                        clicks--;
                                    } else if (clicks === 6) {
                                        document.getElementById("position5").style.display = "none";
                                        clicks--;
                                    }


                                }



                            </script>



                            <div class="field buttons">
                                <label class="main">&nbsp;</label>
                                <button type="button" class="prev">&laquo; Nazad</button>

                            </div>




                        </section>



                        <!-- Step 4 -->

                        <section class="idealsteps-step">
                            <h2>Dodatne informacije</h2>
                            <div class="field">
                                <label class="main">Drugo:</label>
                                <p class="group">
                                    <label>
                                        <input name="other" type="checkbox" value="filed">
                                        Rad na terenu</label>
                                    <label>
                                        <input name="other" type="checkbox" value="othercity">
                                        Rad u drugom gradu</label>
                                    <label>
                                        <input name="other" type="checkbox" value="invalidity">
                                        Invaliditet</label>
                                    <span class="error"></span> </div>
                            <div class="field">    
                                <label class="main">Moguć početak rada:</label>
                                <input name="jobfrom" type="text" placeholder="mm/dd/yyyy" class="datepicker">
                                <span class="error"></span> </div>
                            <div class="field">
                                <label class="main">Rad na računaru:</label>
                                <textarea class="textareasmall" name="compskills" cols="30" rows="10"></textarea>
                                <span class="error"></span> </div>
                            <div class="field buttons">
                                <div class="field buttons">
                                    <label class="main">&nbsp;</label>
                                    <button type="button" class="prev">&laquo; Nazad</button>
                                    <button type="submit" class="submit">Potvrdi</button>
                                </div>
                            </div>
                            <span id="invalid"></span>
                        </section>
                </form>
            </div>
        </div>
        <script src="js/jquery.min.js"></script> 
        <script src="js/jquery-ui.min.js"></script> 
        <script src="js/out/jquery.idealforms.js"></script>
        <script src="js/i18n/jquery.idealforms.i18n.sr.js"></script>
        <!--<script src="js/out/jquery.idealforms.js"></script> --> 
        <!--<script src="js/out/jquery.idealforms.min.js"></script>--> 
        <script>

                                $('form.idealforms').idealforms({
                                    silentLoad: false,
                                    rules: {
                                        'name': 'required',
                                        'lastname': 'required',
                                        'username': 'required username ajax',
                                        'email': 'required email',
                                        'password': 'required pass',
                                        'confirmpass': 'required equalto:password',
                                        'date': 'required date',
                                        'picture': 'extension:jpg:png',
                                        'website': 'url',
                                        'hobbies[]': 'minoption:2 maxoption:3',
                                        'phone': 'required phone',
                                        'zip': 'required zip',
                                        'options': 'select:default',
                                        'jobcomment': '',
                                        'level': 'required select:default',
                                        'profession': 'required select:default',
                                    },
                                    errors: {
                                        'username': {
                                            ajaxError: 'Username not available'
                                        }
                                    },
                                    onSubmit: function (invalid, e) {
                                        e.preventDefault();
                                        $('#invalid')
                                                .show()
                                                .toggleClass('valid', !invalid)
                                                .text(invalid ? (invalid + ' neispravno popunjenih polja') : 'Uspešan unos!');
                                    }
                                });



                                $('form.idealforms').find('input, select, textarea').on('change keyup', function () {
                                    $('#invalid').hide();
                                });

                                $('form.idealforms').idealforms('addRules', {
                                    'comments': 'required minmax:50:200'
                                });

                                $('form.idealforms').idealforms('addRules', {
                                    'phone': 'required minmax:8:12'
                                });

                                $('.prev').click(function () {
                                    $('.prev').show();
                                    $('form.idealforms').idealforms('prevStep');
                                });
                                $('.next').click(function () {
                                    $('.next').show();
                                    $('form.idealforms').idealforms('nextStep');
                                });

        </script>
    </body>
</html>
