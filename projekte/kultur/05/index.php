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
                        <h1><?php echo $translator->translate("references.projects.nowosibirsk.headline", $LANGUAGE) ?></h1>
                        <h2><?php echo $translator->translate("references.projects.nowosibirsk.festival", $LANGUAGE) ?></h2>
                        <h3 class="sub"><?php echo $translator->translate("projects.realisation.contest.emptyrow", $LANGUAGE) ?></h3>
                        <?php
                        if ($LANGUAGE == 'de') {
                            ?>
                            <h3 class="k4">Entwurf</h3>
                            <p class="k4">Der Entwurf repräsentiert eine Synthese aus Formen aktueller Architektur und den Konzepten des russischen Konstruktivismus der 20er Jahre. Die Arbeit verbindet so ästhetische Strömungen der Gegenwart mit deren Urknall in der klassischen Moderne. </p>
                            <p class="k4">Die Profile, Paneele und Glasscheiben der Konstruktion werden prefabriziert, nummeriert und dann auf der Baustelle montiert. </p>
                            <h3 class="k4">Funktionen</h3>
                            <p class="k4">Der asymmetrische Universalraum des Pavillons gliedert sich in 3 flexible Flächenzonen.</p>
                            <p class="k4">An den Kopfenden befinden sich die Dauerausstellung mit Plänen und Modellen, sowie eine Eingangszone mit Besprechungsecke, von der auch die Sitzplätze auf der Terrasse erreichbar sind. Das Kernstück des Pavillons jedoch bildet eine zentrale Multifunktionsfläche für Projektpräsentationen, Podiumsdiskussionen etc.</p>
                            <?php
                        }
                        ?>
                    </div>
                    <?php
                    $projectImageAltText = $translator->translate("references.projects.nowosibirsk.headline", $LANGUAGE);
                    ?>
                    <?php include("../../../includes/php/project_images.php"); ?>
            </ul>
        </div>
        <?php require("../../../includes/php/footer_new_design.php"); ?>
    </div>
</body>
</html>