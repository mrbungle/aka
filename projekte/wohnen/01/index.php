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
                        <h1><?php echo $translator->translate("projects.phoenixsee", $LANGUAGE); ?></h1>
                        <h3 class="sub"><?php echo $translator->translate("projects.phoenixsee.subheadline", $LANGUAGE); ?></h3>
                        <?php
                        if ($LANGUAGE == 'de') {
                            ?>
                            <h3>Entwurf</h3>
                            <p>Der Entwurf basiert auf der Idee eines weißen Kubus, der sich sich in den Hang schiebt.</p>
                            <p>Ferner soll der ablesbare Hauseingang einen klaren Auftakt zum Grundstück formulieren, von dem aus sich seitliche Durchblicke und Durchgänge zum Phoenixsee ergeben.</p>
                            <h3>Grundrisse</h3>
                            <p>Im Erdgeschoss schließen sich an Windfang und WC die Küche und der auf einer Galerie gelegene Essbereich an. Im Untergeschoss befinden sich drei Kellerräume und der sich zur Gartenterrasse öffnende 2-geschossige Wohnraum. Das Obergeschoss nimmt vier Wohnräume gleicher Größe sowie ein Bad auf, wobei sich die beiden Kinderzimmer zur südlich vorgelagerten Dachterrasse mit Ausblicken über den Phoenixsee öffnen. </p>
                            <h3>Fassaden</h3>
                            <p>Die Außenwände werden weiß verputzt mit Holzfenstern und rot lackierter Eingangstür. Der rückwärtige Wohnraum erhält eine Glasfassade mit Stahlprofilen und integrierten Holztüren. Die Konstruktionen und Beläge in den Außenanlagen werden in Naturstein und Sichtbeton ausgeführt.</p>
                            <?php
                        }
                        ?>
                    </div>
                    <?php
                    $projectImageAltText = $translator->translate("references.projects.sporthalle.bruehl", $LANGUAGE);
                    ?>
                    <?php include("../../../includes/php/project_images.php"); ?>
            </ul>
        </div>
        <?php require("../../../includes/php/footer_new_design.php"); ?>
    </div>
</body>
</html>