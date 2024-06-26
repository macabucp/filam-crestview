<?php
include("../res/x5engine.php");
$nameList = array("43h","zue","kea","7ap","ju5","p6u","g3t","tel","rt2","sml");
$charList = array("Y","6","6","W","X","Z","W","H","V","C");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
