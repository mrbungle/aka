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
                    <div id="project-sc" class="project-panel bauten">
                        <h1><?php echo $translator->translate("references.projects.strabaMa", $LANGUAGE) ?></h1>
                        <h3 class="sub"><?php echo $translator->translate("projects.realisation.contest.emptyrow", $LANGUAGE) ?></h3>
                        <?php
                        if ($LANGUAGE == 'de') {
                            ?>
                            <h3>Idee</h3>
                            <p>Ziel des Entwurfs ist die Genese von Aufenthalts- und Gestaltqualität im Rahmen einer baukonstruktiv 
                                sauberen Lösung, von der ein identitätsstiftender Impuls für den öffentlichen Raum ausgehen soll.</p>

                            <h3>Konstruktion</h3>
                            <p>Die Träger bestehen aus je zwei vertikalen Flachstahlprofilen, in denen Stahlschwerter zur Aufnahme der Einbauten 
                                verschraubt werden können. Alle Stahlbauteile werden dunkelgrau lackiert, Verbindungsmittel und Beschläge sind aus Edelstahl.</p>

                            <h3>Modulares Prinzip</h3>
                            <p>Durch die Rasterung der Rückwand lässt sich die Haltestelle im Rahmen des Grundrasters flexibel an unterschiedliche 
                                Fahrgastaufkommen oder an abweichende räumliche Rahmenbedingungen anpassen.</p>

                            <h3>Beleuchtung</h3>
                            <p>Die Beleuchtung ist konstruktiv in das durchlaufende Rundrohr der rückwärtigen Horizontalaussteifung integriert und führt 
                                so zu einer gleichmäßigen Ausleuchtung der Haltestelle.</p>
                            <?php
                        }
                        ?>
                    </div>
                    <?php
                    $projectImageAltText = $translator->translate("references.projects.strabaMa", $LANGUAGE);
                    ?>
                    <?php include("../../../includes/php/project_images.php"); ?>
            </ul>
        </div>
        <?php require("../../../includes/php/footer_new_design.php"); ?>
    </div>
</body>
</html>