<?php require("../global.inc"); ?>
<?php require("../includes/php/header.php"); ?>

<body id="cad">
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
                        <?php echo $translator->translate("cad.intro", $LANGUAGE); ?>
                    </p>
                    <h3><?php echo $translator->translate("cad.autocad.headline", $LANGUAGE); ?></h3>
                    <ul>
                        <li><?php echo $translator->translate("cad.autocad.block1.1", $LANGUAGE); ?></li>
                        <li><?php echo $translator->translate("cad.autocad.block1.2", $LANGUAGE); ?></li>
                        <li><?php echo $translator->translate("cad.autocad.block1.3", $LANGUAGE); ?></li>
                        <li><?php echo $translator->translate("cad.autocad.block1.4", $LANGUAGE); ?></li>
                        <li><?php echo $translator->translate("cad.autocad.block1.5", $LANGUAGE); ?></li>
                        <li><?php echo $translator->translate("cad.autocad.block1.6", $LANGUAGE); ?></li>
                    </ul>
                    <h3><?php echo $translator->translate("cad.3ds.headline", $LANGUAGE); ?></h3>
                    <ul>
                        <li><?php echo $translator->translate("cad.3ds.block1.1", $LANGUAGE); ?></li>
                        <li><?php echo $translator->translate("cad.3ds.block1.2", $LANGUAGE); ?></li>
                        <li><?php echo $translator->translate("cad.3ds.block1.3", $LANGUAGE); ?></li>
                    </ul>
                </div>
            </div>
            <div class="architectureright">
                <p class="spacer">&nbsp;</p>
                <div>
                    <h3 class="first"><?php echo $translator->translate("cad.adt.headline", $LANGUAGE); ?></h3>
                    <ul>
                        <li><?php echo $translator->translate("cad.adt.block1.1", $LANGUAGE); ?></li>
                        <li><?php echo $translator->translate("cad.adt.block1.2", $LANGUAGE); ?></li>
                        <li><?php echo $translator->translate("cad.adt.block1.3", $LANGUAGE); ?></li>
                        <li><?php echo $translator->translate("cad.adt.block2.1", $LANGUAGE); ?></li>
                        <li><?php echo $translator->translate("cad.adt.block2.2", $LANGUAGE); ?></li>
                        <li><?php echo $translator->translate("cad.adt.block2.3", $LANGUAGE); ?></li>
                        <li><?php echo $translator->translate("cad.adt.block2.4", $LANGUAGE); ?></li>
                        <li><?php echo $translator->translate("cad.adt.block2.5", $LANGUAGE); ?></li>
                    </ul>
                    <h3><?php echo $translator->translate("cad.revit.headline", $LANGUAGE); ?></h3>
                    <ul>
                        <li><?php echo $translator->translate("cad.revit.block1.1", $LANGUAGE); ?></li>
                        <li><?php echo $translator->translate("cad.revit.block1.2", $LANGUAGE); ?></li>
                        <li><?php echo $translator->translate("cad.revit.block1.3", $LANGUAGE); ?></li>
                        <li><?php echo $translator->translate("cad.revit.block2.1", $LANGUAGE); ?></li>
                        <li><?php echo $translator->translate("cad.revit.block2.2", $LANGUAGE); ?></li>
                        <li><?php echo $translator->translate("cad.revit.block2.3", $LANGUAGE); ?></li>
                    </ul>
                </div>
            </div>
        </div>
        <?php require("../includes/php/footer_nopaging.php"); ?>
    </div>
</body>
</html>
