
<?php 
define("DB_SERVER","localhost");
define("DB_USER","root");
define("DB_PASS","root");
define("DB_NAME", "newCompany");

$dbname = "newCompany";
$connection = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

if(mysqli_connect_errno()){
	die("database failed"." ".mysqli_connect_error()." ".mysqli_connect_errno());
}
;
 
 ?>