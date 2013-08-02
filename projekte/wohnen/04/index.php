<?php require("../../../global.inc"); ?>
<?php require("../../../includes/php/header.php"); ?>
<body id="project">
    <div id="distance"></div>
    <div class="wrapper">
        <div id="head">
            <?php require("../../../includes/php/navigation.php"); ?>
        </div>
        <div id="content" class="project">
            <ul class="first">
                <li class="desc">
                    <div id="project-sc" class="project-panel">
                        <h1><?php echo $translator->translate("references.projects.mehrfamilienhaus.hh.headline", $LANGUAGE) ?></h1>
                        <h3 class="sub"><?php echo $translator->translate("references.projects.mehrfamilienhaus.hh.subheadline", $LANGUAGE) ?></h3>
                        <?php
                        if ($LANGUAGE == 'de') {
                            ?>
                            <h3 class="w2">Entwurf</h3>
                            <p class="w2">Ein an einem Hamburger Kanal gelegenes Bürgerhaus mit Zeltdach aus den 1930er Jahren sollte saniert und in Eigentumswohnunngen transformiert werden. </p>
                            <p class="w2">Der Entwurf sah vor, das Zeltfdach abzutragen und durch ein zusätzliches Wohn- und Vollgeschoss zu ersetzen. Im Ergebnis führt die Sanierung so zu großzügig geschnittenen Wohnungen innerhalb eines kubischen Baukörpers aus ortsüblichem roten Backstein.</p>
                            <?php
                        }
                        ?>
                    </div>
                    <?php
                    $projectImageAltText = $translator->translate("references.projects.mehrfamilienhaus.hh.headline", $LANGUAGE);
                    ?>
                    <?php include("../../../includes/php/project_images.php"); ?>
            </ul>
        </div>
        <?php require("../../../includes/php/footer_new_design.php"); ?>
    </div>
</body>
</html>