<?php
if($_GET['user_type']=='ngo')
$user=0;
if($_GET['user_type']=='customer')
$user=1;

if($_GET['location']=='lahore')
$loc=1;
else if($_GET['location']=='karachi')
$loc=2;
else if($_GET['location']=='islamabad')
$loc=3;
else if($_GET['location']=='rawalpindi')
$loc=4;
else if($_GET['location']=='quetta')
$loc=5;
else if($_GET['location']=='peshawar')
$loc=6;
else if($_GET['location']=='other')
$loc=7;

if($_GET['category']=='medical')
$cat=1;
else if($_GET['category']=='education')
$cat=2;
else if($_GET['category']=='animals')
$cat=3;
else if($_GET['category']=='creative')
$cat=4;
else if($_GET['category']=='event')
$cat=5;
else if($_GET['category']=='religion')
$cat=6;
else if($_GET['category']=='sports')
$cat=7;
else if($_GET['category']=='travel')
$cat=8;
else if($_GET['category']=='volunteer')
$cat=9;
else if($_GET['category']=='personal')
$cat=10;
else if($_GET['category']=='other')
$cat=11;

if($_GET['product']=='yes')
$prod=1;
else if($_GET['product']=='no')
$prod=2;

$dec=$_GET['desc'];
$amt=$_GET['amt'];

$result = shell_exec('C:\Users\tayyab\AppData\Local\Programs\Python\Python37\python "A:\xampp\htdocs\linear_regression\load.py"'. " " .$user." " . $loc." " . $cat." " . $dec." " . $prod. " " .$amt." " . "2>&1");
echo ($result);
?>