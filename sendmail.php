<?php
$attend = $_REQUEST['attend'];
$attend = addslashes($attend);
$fname = $_REQUEST["fname"];
$lname = $_REQUEST["lname"];
$organization = $_REQUEST["organization"];
$title = $_REQUEST["title"];
$email = $_REQUEST["email"];
$busPhone = $_REQUEST["bus-phone"];
$cellPhone = $_REQUEST["cell-phone"];
$dateRegister = date("Y-m-d");

$con = mysql_connect("localhost","pivotco1_me","pass098word");
if (!$con)
 {
  die('Could not connect: ' . mysql_error());
  }
								  
mysql_select_db("pivotco1_tou", $con);

$sql = "INSERT INTO youth2 (fname, lname, organization, title, email, busPhone, cellPhone, attend, dateRegister) VALUES ('$fname', '$lname' , '$organization' , '$title', '$email', '$busPhone', '$cellPhone', '$attend', '$dateRegister')";


$punchit = mysql_query($sql);
if(!$punchit){
	die('Invalid query: ' . mysql_error());
}	



$message = "Attending: ".stripslashes($attend)."\nFirst Name: ".$fname." \r\n "."Last Name: ".$lname." \n "."Organization: ".$organization."\n Title: ".$title." \n Email".$email." \n Business Phone: ".$busPhone." \n Cell Phone: ".$cellPhone." \n Vegetarian: ".$veggie." \n Handicapped: ".$handi."\n Travel By:".$travel."\n Departure Airport: ".$departAirport." \n Bio: ".$bio;

mail('leslie.williams@publicstrategies.com,rich.batten@publicstrategies.com', 'Registration -  Forum on Relationship Education and Vulnerable Youth',$message);
   header("Location: register.php?sent=success");





               ?>