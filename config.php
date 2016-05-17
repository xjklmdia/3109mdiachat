<?
// ini_set("display_errors","on")

if(!isset($dbh)){
	session_start();
	date_default_timezone_set("UTC");
$musername = "root";
$password = "";
$hostname = "hostname";
$dbname = "chat";

$dbh=new PDO('mysql:chat='.$dbname.';host='.$hostname.";port=3000",$musername, $mpassword);
 /*Change The Credentials to connect to database.*/
 include("user_online.php");
}
?>