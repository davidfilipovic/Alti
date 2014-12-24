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
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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
                    {display: "Arhitektura", value: ""},
                ];

                var univ2 = [
                    {display: "Arhitektura", value: ""},
                ];
                 var univ3 = [
                    {display: "Arhitektura", value: ""},
                ];
                 var univ4 = [
                    {display: "Arhitektura", value: ""},
                ];
                 var univ5 = [
                    {display: "Arhitektura", value: ""},
                ];
                 var univ6 = [
                    {display: "Arhitektura", value: ""},
                ];
                 var univ7 = [
                    {display: "Arhitektura", value: ""},
                ];
                 var univ8 = [
                    {display: "Arhitektura", value: ""},
                ];
                 var univ9 = [
                    {display: "Arhitektura", value: ""},
                ];
                 var univ10 = [
                    {display: "Arhitektura", value: ""},
                ];
                 var univ11 = [
                    {display: "Arhitektura", value: ""},
                ];
                 var univ12 = [
                    {display: "Arhitektura", value: ""},
                ]; 
                var univ13 = [
                    {display: "Arhitektura", value: ""},
                ];
                var univ14 = [
                    {display: "Arhitektura", value: ""},
                ];
                var univ15 = [
                    {display: "Arhitektura", value: ""},
                ];
                var univ16 = [
                    {display: "Arhitektura", value: ""},
                ];
                var univ17 = [
                    {display: "Arhitektura", value: ""},
                ];
                var univ18 = [
                    {display: "Arhitektura", value: ""},
                ];
                var univ19 = [
                    {display: "Arhitektura", value: ""},
                ];
                var univ20 = [
                    {display: "Arhitektura", value: ""},
                ];
                var univ21 = [
                    {display: "Arhitektura", value: ""},
                ];
                var univ22 = [
                    {display: "Arhitektura", value: ""},
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
                <form method="post" action="/profile/profile.php" novalidate autocomplete="off" class="idealforms" >
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
                                <select name="level" id="level">
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










                            <div  class="field">
                                <label  class="main">Univerziteti:</label>
                                <select name="universities1" id="universities1">
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

$sql = "SELECT name FROM unis ORDER BY name";
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







                            <div  class="field">
                                <label  class="main">Fakulteti odabranog univerziteta:</label>
                                <select name="faculties" id="faculties">
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

$sql = "SELECT name FROM faculties";
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



                            <div class="field buttons">
                                <label class="main">&nbsp;</label>
                                <button type="button" class="prev">&laquo; Nazad</button>
                                <button type="button" class="next">Dalje &raquo;</button>
                            </div>


                            <div class="field">
                                Category : <select name="parent_selection" id="parent_selection">
                                    <option value="">-- Please Select --</option>
                                    <option value="univ1">Univerzitet u Beogradu</option>
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
                                <select name="child_selection" id="child_selection">
                                </select>
                            </div>




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
