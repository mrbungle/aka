<?php require_once("../global.inc"); ?>
<?php

header("Content-Type: text/plain; charset=UTF-8");
$id = $_REQUEST['id'];
$langId = $_REQUEST['lang'];
$fileName = $ABSOLUTE_PATH . "data/leistungen/standpunkte/" . $id . "/" . $langId . ".aka";
$fh = fopen($fileName, 'r');
$theData = fread($fh, filesize($fileName));
fclose($fh);

echo $theData;
?>
