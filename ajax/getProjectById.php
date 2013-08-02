<?php require_once("../global.inc"); ?>
<?php

header("Content-Type: text/plain; charset=UTF-8");
$id = $_REQUEST['id'];
$langId = $_REQUEST['lang'];
$type = $_REQUEST['type'];
$part = $_REQUEST['part'];
$fileName = $ABSOLUTE_PATH . "data/" . $type . "/" . $part . "/" . $id . "/" . $langId . ".aka";
$fileSize = filesize($fileName);
$theData = "";
if ($fileSize > 0) {
    $fh = fopen($fileName, 'r');
    $theData = fread($fh, $fileSize);
    fclose($fh);
}

echo $theData;
?>