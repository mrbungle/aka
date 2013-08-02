<?php require("../global.inc"); ?>
<?php require("../includes/php/captcha_logic.php"); ?>
<?php require("../includes/php/header.php"); ?>

<body id="kontakt">
    <div id="distance"></div>
    <div class="wrapper">
        <div id="head">
            <?php require("../includes/php/navigation.php"); ?>
        </div>
        <div id="content" class="contact">
            <ul class="first">
                <li class="desc">
                    <h1>Alexander Kraus Architektur</h1>
                    <p>
                        Wenn Sie mehr &uuml;ber unser B&uuml;ro, unsere Arbeitsweise oder unsere Dienstleistungen erfahren wollen, 
                        nehmen Sie bitte Kontakt mit uns auf. 
                    </p>
                    <p>
                        Wir setzen uns umgehend mit Ihnen in Verbindung und &uuml;bersenden Ihnen ggf. weiterf&uuml;hrendes Informationsmaterial.
                    </p>
                </li>
                <li class="description">
                    <?php
                    $sendMail = true;
                    $errorMessage = "";
                    $validationMessage = "";

                    if (empty($_POST["senden"])) {
                        $sendMail = false;
                    } else if (!empty($_POST["senden"]) &&
                            (empty($_POST["name"]) || empty($_POST["lastname"]) || empty($_POST["eMail"]) || empty($_POST["message"]))) {
                        $sendMail = false;
                        $errorMessage = 'Bitte alle Pflichtfelder ausf&uuml;llen.';
                    } else if (!empty($_POST["senden"]) && !isEmail($_POST["eMail"])) {
                        $sendMail = false;
                        $errorMessage = 'Die E-Mail-Adresse ist nicht korrekt.';
                    } else if (!$captchaValidierungOk) {
                        $sendMail = false;
                        $errorMessage = 'Captcha.';
                    }
                    if ($sendMail) {
                        $eMail = 'Vorname: ' . $_POST['name'] . "\n" .
                                'Nachname: ' . $_POST['lastname'] . "\n" .
                                'E-Mail:' . $_POST['eMail'] . "\n" . "\n" .
                                'Firma:' . $_POST['firm'] . "\n" .
                                'Telefon:' . $_POST['telephone'] . "\n" .
                                'PLZ:' . $_POST['zip'] . "\n" .
                                'Stadt:' . $_POST['town'] . "\n" .
                                'Strasse:' . $_POST['street'] . "\n" .
                                'Ihre Nachricht:' . $_POST['message'] . '';

                        if (@mail($EMAIL_ADRESS, "Neue Nachricht vom Kontaktformular", $eMail)) {
                            $validationMessage = "Ihre Nachricht wurde versendet, vielen Dank.";
                        } else {
                            $errorMessage = "Der E-Mail-Verkehr funktioniert zur Zeit nicht.";
                        }
                    }
                    ?>
                    <form name="contactForm" method="post" action="<?= $_SERVER[PHP_SELF]; ?>">
                        <?php
                        if ($errorMessage != "") {
                            ?>
                            <p class="error"><?php echo $errorMessage ?></p>
                            <?php
                        } else if ($validationMessage != "") {
                            ?>
                            <p><?php echo $validationMessage ?></p>
                            <?php
                        }
                        ?>
                        <div class="group">
                            <div>
                                <label for="lastname">Name*</label>
                                <input id="lastname" name="lastname" type="text" value="<?= $_POST['lastname']; ?>" />			
                            </div>
                            <div>
                                <label for="name">Vorname*</label>
                                <input id="name" name="name" type="text" value="<?= $_POST['name']; ?>" />
                            </div>
                            <div>
                                <label for="firm">Firma</label>
                                <input id="firm" name="firm" type="text" value="<?= $_POST['firm']; ?>" />
                            </div>
                            <div>
                                <label for="telephone">Telefon</label>
                                <input id="telephone" name="telephone" type="text" value="<?= $_POST['telephone']; ?>" />
                            </div>
                        </div>
                        <div class="group right">
                            <div>
                                <label for="street">Stra&szlig;e</label>
                                <input id="street" name="street" type="text" value="<?= $_POST['street']; ?>" />
                            </div>
                            <div>
                                <label for="zip">PLZ</label>
                                <input id="zip" name="zip" type="text" value="<?= $_POST['zip']; ?>" />
                            </div>
                            <div>
                                <label for="town">Stadt</label>
                                <input id="town" name="town" type="text" value="<?= $_POST['town']; ?>" />
                            </div>
                            <div>
                                <label for="email">ePost*</label>
                                <input id="email" name="eMail" type="text" value="<?= $_POST['eMail']; ?>" />			
                            </div>
                        </div>
                        <div class="bottom">
                            <div>
                                <label for="message">Ihre Nachricht*</label>
                                <textarea id="message" name="message" cols="40" rows="6"><?= $_POST['message']; ?></textarea>
                            </div>
                            <div class="captcha">
                                <label for="captcha_code">Sicherheitscode</label><br/>
                                <input type="text" id="captcha_code" name="captcha_code" size="4" />
                                <?php require("../includes/php/captcha_graphic.php"); ?>
                            </div>
                            <div class="buttons">
                                <input name="clear" type="reset" value="Zur&uuml;cksetzen" />
                                <input name="senden" type="submit" value="Senden" />
                            </div>
                        </div>
                    </form>

                    <?php

                    function isEmail($email) {
                        $nonascii = "\x80-\xff";
                        $nqtext = "[^\\$nonascii\015\012\"]";
                        $qchar = "\\[^$nonascii]";
                        $protocol = "(?:mailto:)";
                        $normuser = "[a-zA-Z0-9][a-zA-Z0-9_.-]*";
                        $quotedstring = "\"(?:$nqtext|$qchar)+\"";
                        $user_part = "(?:$normuser|$quotedstring)";
                        $dom_mainpart = "[a-zA-Z0-9][a-zA-Z0-9._-]*\.";
                        $dom_subpart = "(?:[a-zA-Z0-9][a-zA-Z0-9._-]*\.)*";
                        $dom_tldpart = "[a-zA-Z]{2,5}";
                        $domain_part = "$dom_subpart$dom_mainpart$dom_tldpart";
                        $regex = "$protocol?$user_part\@$domain_part";
                        if (preg_match("/^$regex$/", $email)) {
                            return true;
                        }
                        return false;
                    }
                    ?>
                </li>
            </ul>
        </div>
        <?php require("../includes/php/footer_nopaging.php"); ?>
    </div>
</body>
</html>