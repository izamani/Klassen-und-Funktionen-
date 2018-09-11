<?php
/**
 * Created by PhpStorm.
 * User: amir.zamani
 * Date: 10.09.18
 * Time: 19:05
 */

include("class_lib.php");
include('class_datum.php');

$stefan = new person();
$jimmy = new person();
$stefan->set_name("Stefan Mischook");
$jimmy->set_name("Nick Waddles");

echo "Stefan's Full name: " . $stefan->get_name() . "<br>";
echo "Nick's Full name: " . $jimmy->get_name();


echo "<hr>";


$drzeit = new datum();

// $drzeit->setUts(58578793);

echo $drzeit->getDatum();
