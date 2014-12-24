﻿<!DOCTYPE html>
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
    while($row = $result->fetch_assoc()) {
        echo "<option value='" .$i++. "'>" . $row["name"]. "</option>";
      
        
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
                                    <option value="1">Administrativni tehničar (birotehničar)</option>
                                    <option value="2">Agroekonomski tehničar</option>
                                    <option value="3">Alatničar</option>
                                    <option value="4">Automehaničar</option>
                                    <option value="5">Autosaobraćajni tehničar</option>
                                    <option value="6">Bravar</option>
                                    <option value="7">Daktilograf</option>
                                    <option value="8">Dipl. ing. arhitekture</option>
                                    <option value="9">Dipl. ing. za menadžment</option>
                                    <option value="10">Dipl. ing. melioracije</option>
                                    <option value="11">Dipl. ing. organizacije za informacione sisteme</option>
                                    <option value="12">Dipl. ing. poljoprivrede</option>
                                    <option value="13">Dipl. ing. prehrambene tehnologije</option>
                                    <option value="14">Dipl. ing. ratarstva i povrtarstva</option>
                                    <option value="15">Dipl. ing. stočarstva</option>
                                    <option value="16">Dipl. ing. tehnologije</option>
                                    <option value="17">Dipl. ing. za zaštitu na radu</option>
                                    <option value="18">Diplomirani agroekonomista</option>
                                    <option value="19">Diplomirani biolog</option>
                                    <option value="20">Diplomirani ekonomista</option>
                                    <option value="21">Diplomirani farmaceut</option>
                                    <option value="22">Diplomirani filolog</option>
                                    <option value="23">Diplomirani filozof</option>
                                    <option value="24">Diplomirani geograf</option>
                                    <option value="25">Diplomirani građevinski inženjer</option>
                                    <option value="26">Diplomirani hemičar</option>
                                    <option value="27">Diplomirani inženjer organizacionih nauka</option>
                                    <option value="28">Diplomirani mašinski inženjer</option>
                                    <option value="29">Diplomirani politikolog</option>
                                    <option value="30">Diplomirani pravnik</option>
                                    <option value="31">Diplomirani psiholog</option>
                                    <option value="32">Diplomirani saobraćajni inženjer</option>
                                    <option value="33">Diplomirani socijalni radnik</option>
                                    <option value="34">Diplomirani sociolog</option>
                                    <option value="35">Diplomirani stomatolog</option>
                                    <option value="36">Diplomirani turizmolog</option>
                                    <option value="37">Diplomirani veterinar</option>
                                    <option value="38">Dizajner</option>
                                    <option value="39">Doktor medicine</option>
                                    <option value="40">Ekonomski tehničar</option>
                                    <option value="41">Električar</option>
                                    <option value="42">Elektromehaničar</option>
                                    <option value="43">Elektromehaničar za termičke i rashladne uređaje</option>
                                    <option value="44">Elektrotehničar</option>
                                    <option value="45">Farmaceutski tehničar</option>
                                    <option value="46">Finansijski tehničar</option>
                                    <option value="47">Grafički dizajner</option>
                                    <option value="48">Građevinski tehničar</option>
                                    <option value="49">Hemijski laborant</option>
                                    <option value="50">Hemijski tehničar</option>
                                    <option value="51">Informatičar</option>
                                    <option value="52">Inženjer organizacionih nauka</option>
                                    <option value="53">Inženjer saobraćaja</option>
                                    <option value="54">Knjigovođa</option>
                                    <option value="55">Komercijalni tehničar</option>
                                    <option value="56">Komjuterski tehničar</option>
                                    <option value="57">Magacinski radnik</option>
                                    <option value="58">Magistar ekonomije</option>
                                    <option value="59">Magistar poljoprivrede</option>
                                    <option value="60">Mašinbravar</option>
                                    <option value="61">Mašinski inženjer</option>
                                    <option value="62">Mašinski tehničar</option>
                                    <option value="63">Mašinski tehničar za kompjutersko konstruisanje</option>
                                    <option value="64">Maturant gimnazije</option>
                                    <option value="65">Mehaničar</option>
                                    <option value="66">Mesar</option>
                                    <option value="67">Operater na računaru</option>
                                    <option value="68">Osnovna škola</option>
                                    <option value="69">Ostalo</option>
                                    <option value="70">Pogonski tehničar</option>
                                    <option value="71">Poljoprivredni tehničar</option>
                                    <option value="72">Poslovni sekretar</option>
                                    <option value="73">Pravni tehničar</option>
                                    <option value="74">Prehrambeni tehničar</option>
                                    <option value="75">Programer</option>
                                    <option value="76">Računovodstveni tehničar</option>
                                    <option value="77">Saobraćajni tehničar</option>
                                    <option value="78">Serviser rashladnih uređaja</option>
                                    <option value="79">Stomatološki tehničar</option>
                                    <option value="80">Trgovac</option>
                                    <option value="81">Turistički tehničar</option>
                                    <option value="82">Vozač</option>

                                </select>
                                <span class="error"></span> </div>


                            <div style="visibility: hidden" class="field">
                                <label  class="main">Univerziteti:</label>
                                <select name="universities1" id="universities1">
                                    <option value="default">&ndash; Odaberite opciju &ndash;</option>
                                    <option value="1"></option>
                                    <option value="2"></option>
                                    <option value="3"></option>
                                    <option value="4"></option>
                                    <option value="5"></option>
                                    <option value="6"></option>
                                    <option value="7"></option>
                                    <option value="8"></option>
                                </select>
                                <span class="error"></span> </div>    
                                
                            <div class="field buttons">
                                <label class="main">&nbsp;</label>
                                <button type="button" class="prev">&laquo; Nazad</button>
                                <button type="button" class="next">Dalje &raquo;</button>
                            </div>
                        </section>

                        <!-- Step 3 -->

                        <section id="workexp" class="idealsteps-step">
                            <h2>Radno iskustvo</h2>
                            <div class="field">
                                <label class="main">Poslodavac:</label>
                                <input name="employer" type="text" placeholder="Alti d.o.o.">
                                <span class="error"></span> </div>
                            <div class="field">Period&nbsp zaposlenja:</div>
                            <div class="field">    
                                <label class="main">Od:</label>
                                <input name="from" type="text" placeholder="mm/dd/yyyy" class="datepicker">
                                <span class="error"></span> </div>
                            <div class="field">
                                <label class="main">Do:</label>
                                <input name="to" type="text" placeholder="mm/dd/yyyy" class="datepicker">
                                <span class="error"></span> </div>
                            <div class="field">
                                <label class="main">Pozicija:</label>
                                <input name="position" type="text" placeholder="Softverski inženjer">
                                <span class="error"></span> </div>
                            <div class="field">
                                <label class="main">Opis posla:</label>
                                <textarea name="jobcomment" cols="30" rows="10"></textarea>
                                <span class="error"></span> </div>
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
