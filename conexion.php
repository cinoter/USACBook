<?php 
// datos para la coneccion a mysql 
define('DB_SERVER','localhost'); 
define('DB_NAME','UsacBook'); 
define('DB_USER','cakephp'); 
define('DB_PASS','cakephp'); 

$con = mysql_connect(DB_SERVER,DB_USER,DB_PASS); 
mysql_select_db(DB_NAME,$con); 
?>