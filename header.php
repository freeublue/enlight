<?
require "bootstraptop.php";
$size = 'xl';
$bootcolor = 'light';
$bootcolor2 = 'light';
$navname = "<img src='logo.png' >";

$pagelinkarray = array( "contact.php" => "Contact", "about.php" => "About", "projects.php" => "Projects", "consultation.php" => "Consultation");

navbarfixedtop ($size, $bootcolor, $bootcolor2, $navname, $pagelinkarray, $dropdownname, $dropdownlinkarray, $ar); 


?>