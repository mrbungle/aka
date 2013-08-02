<?php require("../global.inc"); ?>
<?php require("../includes/php/header.php"); ?>
<body id="route">
    <div id="distance"></div>
    <div class="wrapper">
        <div id="head">
            <?php require("../includes/php/navigation.php"); ?>
        </div>
        <div id="content" class="route">
            <ul class="first">
                <li class="adress">
                    <h1><?php echo $translator->translate("daten.1", $LANGUAGE); ?></h1>
                    <p>
                        <?php echo $translator->translate("daten.2", $LANGUAGE); ?><br />
                        D - 44147 Dortmund<br />
                        <?php echo $translator->translate("daten.3", $LANGUAGE); ?> +49 (0)231 87806-50<br />
                        <?php echo $translator->translate("daten.4", $LANGUAGE); ?> +49 (0)231 87806-61<br />
                        <?php
                        if ($LANGUAGE == "de") {
                            ?>
                            Mobilfunk +49 (0)151 50819045<br />
                            <?php
                        }
                        ?>
                        buero(at)ak-architekten.com<br />
                        www.ak-architekten.com
                    </p>
                </li>
                <li class="description">
                    <img src="/images/map.gif" title="Anfahrt" alt="Anfahrt" />
                </li>
            </ul>
            <ul>
                <li class="adress">&nbsp;</li>
                <li class="description">
                    <?php
                    if ($LANGUAGE == "de") {
                        ?>
                        <h2>Mit dem Auto:</h2>
                        <p>
                            A45 bis zur Ausfahrt "Dortmund - Hafen". Auf der Schnellstra&szlig;e (OW IIIa) weiter in Richtung "Hafen". Der Autobahnzubringer geht in
                            die Mallinckrodtstra&szlig;e &uuml;ber. An der ersten Ampel rechts in die Sp&szlig;estra&szlig;e abbiegen und sofort links auf den Innenhof des e-port-dortmund.
                        </p>
                        <?php
                    } else {
                        ?>
                        <h2>&nbsp;</h2>
                        <p>
                            &nbsp;<br />&nbsp;
                        </p>
                        <?php
                    }
                    ?>
                </li>
            </ul>
            <ul>
                <li class="adress">
                    <ul>
                        <li class="adressbottom">
                            <p>
                                <?php
                                if ($LANGUAGE == "fr") {
                                    ?>
                                    <br />
                                    <?php
                                }
                                ?>
                                Alexander Kraus<br />
                                <?php echo $translator->translate("daten.5", $LANGUAGE); ?><br />
                                <?php echo $translator->translate("daten.6", $LANGUAGE); ?>
                            </p>
                        </li>
                        <li class="icon">
                            <img src="/images/icon.jpg" width="46" height="46" title="Logo" alt="Logo" />
                        </li>
                    </ul>
                </li>
                <li class="description descbottom">
                    <?php
                    if ($LANGUAGE == "de") {
                        ?>
                        <h2 class="kvb">Mit &ouml;ffentlichen Verkehrsmitteln:</h2>
                        <p>
                            Vom Dortmunder Hauptbahnhof 3 Stationen mit U-Bahn-Linie U41 oder U47 bis zum Haltepunkt "Hafen". Direkt gegen&uuml;ber der Haltestelle liegt
                            der e-port-dortmund. Der Eingang befindet sich auf der R&uuml;ckseite des Geb&auml;udes.
                        </p>
                        <?php
                    } else {
                        ?>
                        <p>&nbsp;</p>
                        <?php
                    }
                    ?>
                </li>
            </ul>
        </div>
        <?php require("../includes/php/footer_nopaging.php"); ?>
    </div>
</body>
</html>