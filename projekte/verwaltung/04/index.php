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
                        <h1><?php echo $translator->translate("references.projects.milchwirtschaft.headline", $LANGUAGE) ?></h1>
                        <h2><?php echo $translator->translate("references.projects.milchwirtschaft.subheadline", $LANGUAGE) ?></h2>
                        <h3 class="sub"><?php echo $translator->translate("projects.idea.contest", $LANGUAGE) ?></h3>
                        <?php
                        if ($LANGUAGE == 'de') {
                            ?>
                            <p class="vw3">
                                <i>"Ein Haus ist ein Haus, ein Symbol ist ein Symbol."</i>
                            </p>
                            <p class="vw3">Weshalb wir Gebäude und Symbol getrennt entworfen haben, um sie dann als Pole eines Ensembles wieder zusammen zu führen. </p>
                            <p class="vw3">Die "häuslichen" Funktionen des Gebäudes werden hierbei innerhalb eines weißen Flachbaus erfüllt. Und die symbolische Verknüpfung zum Oberthema Milch erfolgt durch 5 je 10 m hohe, in einem Wasserbecken fußende Stelen in schwarz-weißer Kuhfell-Optik. </p>
                            <p class="vw3">Diese "Milchstelen" sind doppelt kodiert - sie markieren den Zugang zum Gebäude und fungieren gleichzeitig als Zeichen in der norddeutschen Ebene, indem sie den Ort thematisch für die Milchwirtschaft besetzen. </p>
                            <p class="vw3">Die Stelen generieren so Identifikation und Orientierung. Sowohl für den täglichen Nutzer als auch für den eher flüchtigen Passanten.</p>
                            <?php
                        }
                        ?>
                    </div>
                    <?php
                    $projectImageAltText = $translator->translate("references.projects.milchwirtschaft.headline", $LANGUAGE);
                    ?>
                    <?php include("../../../includes/php/project_images.php"); ?>
            </ul>
        </div>
        <?php require("../../../includes/php/footer_new_design.php"); ?>
    </div>
</body>
</html>