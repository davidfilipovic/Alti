<?php

$con=mysql_connect('localhost','root','');
mysql_select_db('altidb',$con);

$selt= 'select name from openpos';
$q=mysql_query($selt) or die(mysql_error());;
$rowcount = mysql_num_rows($q);
echo $rowcount;

?>