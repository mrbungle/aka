<?php require("../global.inc"); ?>
<?php require("../includes/php/header.php"); ?>

<body id="inhaber">
    <div id="distance"></div>
    <div class="wrapper">
        <div id="head">
            <?php require("../includes/php/navigation.php"); ?>
        </div>
        <div id="content" class="owner">
            <ul class="first">
                <li class="adress">
                    <h1>Alexander Kraus</h1>
                    <p>
                    <ul class="clearfix">
                        <li class="year">1968</li>
                        <li>*<br /><?php echo $translator->translate("owner.1", $LANGUAGE) ?></li>
                    </ul>
                    <ul class="clearfix">
                        <li class="year">1989 - 1995</li>
                        <li><?php echo $translator->translate("owner.2", $LANGUAGE) ?><br /><?php echo $translator->translate("owner.3", $LANGUAGE) ?><br /><?php echo $translator->translate("owner.4", $LANGUAGE) ?></li>
                    </ul>
                    <ul class="clearfix">
                        <li class="year">1995 - 2001</li>
                        <li><?php echo $translator->translate("owner.5", $LANGUAGE) ?><br /><?php echo $translator->translate("owner.6", $LANGUAGE) ?><br /><?php echo $translator->translate("owner.7", $LANGUAGE) ?></li>
                    </ul>
                    <ul class="clearfix">
                        <li class="year">2001 - 2005</li>
                        <li><?php echo $translator->translate("owner.8", $LANGUAGE) ?></li>
                    </ul>
                    <ul class="clearfix">
                        <li class="year">1997 -</li>
                        <li><?php echo $translator->translate("owner.9", $LANGUAGE) ?></li>
                    </ul>
                    <ul class="clearfix">
                        <li class="year">2005 -</li>
                        <li><?php echo $translator->translate("owner.10", $LANGUAGE) ?></li>
                    </ul>
                    </p>
                </li>
                <li class="description">
                    <img src="/images/owner.jpg" width="597" height="398" title="Alexander Kraus" alt="Alexander Kraus" />
                </li>
            </ul>
        </div>
        <?php require("../includes/php/footer_nopaging.php"); ?>
    </div>
</body>
</html>