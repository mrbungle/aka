<?php require("../global.inc"); ?>
<?php require("../includes/php/header.php"); ?>

<body id="leistungen">
    <div id="distance"></div>
    <div class="wrapper">
        <div id="head">
            <?php require("../includes/php/navigation.php"); ?>
        </div>
        <div id="content">
            <div class="architecture">
                <p class="spacer">&nbsp;</p>
                <div id="architecture-scrollcontainer" class="architecture-panel">
                    <p class="first">
                        <?php echo $translator->translate("leistungen.1", $LANGUAGE); ?>
                    </p>
                    <p>
                        <?php echo $translator->translate("leistungen.2", $LANGUAGE); ?>
                    </p>
                    <p>
                        <?php echo $translator->translate("leistungen.3", $LANGUAGE); ?>
                    </p>
                    <p>
                        <?php echo $translator->translate("leistungen.4", $LANGUAGE); ?>
                    </p>
                </div>
            </div>
            <div class="architectureright">
                <p class="spacer">&nbsp;</p>
                <div>
                    <p class="first">
                        <?php echo $translator->translate("leistungen.5", $LANGUAGE); ?>
                    </p>
                    <?php
                    $content6 = $translator->translate("leistungen.6", $LANGUAGE);
                    if ($content6 != '') {
                        ?>
                        <p>
                            <?php echo $content6; ?>
                        </p>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <?php require("../includes/php/footer_nopaging.php"); ?>
    </div>
</body>
</html>