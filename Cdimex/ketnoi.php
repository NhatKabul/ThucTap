<?php
$cn=mysql_connect("localhost","root","")or die("Couldn't to open database");
mysql_select_db("cdimex")or die("Couldn't to open database");
mysql_query("SET NAMES 'utf8'");
?>