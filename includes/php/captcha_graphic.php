<?
//if(!@include "http://www.formular-generator.de/captcha/formular.php?captcha_code=$code&v=1q") {
?>
<!--<p>Bitte geben Sie folgenden Sicherheitscode in das Textfeld ein: "<?= $code ?>"</p>
--><?
//}
?>

<?
if ($fp = fopen('http://www.formular-generator.de/captcha/formular.php?captcha_code=' . $code . '&v=1q', 'r')) {
    $content = '';
// keep reading until there's nothing left
    while ($line = fread($fp, 1024)) {
        $content .= $line;
    }
}

eval('?>' . $content . '<?php ');
