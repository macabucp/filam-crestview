<?php
include("../res/x5engine.php");
$nameList = array("faj","ul7","txf","nfr","ajt","yzd","6jx","ztm","z3z","gs3");
$charList = array("R","3","U","C","Y","F","J","6","8","V");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
