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
                        <h1><?php echo $translator->translate("references.projects.wohnen.hausg.region.hannover.headline", $LANGUAGE) ?></h1>
                        <?php
                        if ($LANGUAGE == 'de') {
                            ?>
                            <div class="dynamic k1">
                                <h3 class="sub"><?php echo $translator->translate("references.projects.wohnen.hausg.region.hannover.subheadline", $LANGUAGE) ?></h3>
                                <p class="w2">
                                    Das Konzept für den Neubau basiert auf zwei versetzten Haush&auml;lften in Pultdachform auf
                                    einem trapezf&ouml;rmigen Grundst&uuml;ck am Ende einer Reihenhauszeile.
                                </p>
                                <p class="w2">
                                    Die Nutzungsbereiche werden hierbei durch einen mittig angelegten Flur gleichzeitig vertikal erschlossen und horizontal voneinander getrennt.
                                </p>
                                <p class="w2">
                                    Das Prinzip der versetzten Pulte wiederholt sich beim untergeordneten Bauk&ouml;rper aus Garage und Abstellraum an der Grundst&uuml;cksgrenze.
                                </p>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <?php
                    $projectImageAltText = $translator->translate("references.projects.wohnen.hausg.region.hannover.headline", $LANGUAGE);
                    ?>
                    <?php include("../../../includes/php/project_images.php"); ?>
            </ul>
        </div>
        <?php require("../../../includes/php/footer_new_design.php"); ?>
    </div>
</body>
</html>