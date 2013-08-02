<?

session_start();
$captchaValidierungOk = false;

if (ereg('^[a-z]{4}$', $_POST['captcha_code']) && // eingabe syntaktisch korrekt
        !empty($_SESSION['captcha_code']) && // code in der session
        ($_SESSION['captcha_code'] == $_POST['captcha_code'])) { // session-code = eingabe-code
    $captchaValidierungOk = true;
}

$code = '';
for ($i = 0; $i < 4; $i++) {
    $code .= chr(rand(97, 122));
}
$_SESSION['captcha_code'] = $code;
?>