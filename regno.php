<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
$name = $_GET["name"];
$email = $_GET["email"];
$phone = $_GET["phnnum"];
$prgrm = $_GET["prgrm"];
$state = $_GET["state"];
$city = $_GET["city"];


$namepattern = "/^[A-Z]/";
$mailpattern = "/^[a-zA-Z]+\.(20)[a-z]{3}[\d]{4}+@vitap.ac.in$/";
$phonepattern = "/[0-9]{10}/";
$citypattern = "/^[A-Z]/";
$flag = 0;

if(preg_match($namepattern,$name) == false){
   $flag = 1;
}
if(preg_match($mailpattern,$email) == false){
    $flag = 1;
}
if(preg_match($phonepattern,$phone) == false){
    $flag = 1;
}
if(preg_match($citypattern, $city) == false){
   $flag = 1;
}
$result = "";
if($flag == 0){
    $pointer = fopen("regno.csv", "a");
    fwrite($pointer, "$name");
    fwrite($pointer, "$email");
    fwrite($pointer, "$phone");
    fwrite($pointer, "$prgrm");
    fwrite($pointer, "$state");
    fwrite($pointer, "$city");
    $result = "success";
}
$result = "failure";
}
?>
