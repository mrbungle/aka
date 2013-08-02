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
                        <h1><?php echo $translator->translate("references.projects.u2021.short", $LANGUAGE) ?></h1>
                        <h2><?php echo $translator->translate("references.projects.u2021.subheadline", $LANGUAGE) ?></h2>
                        <h3 class="sub"><?php echo $translator->translate("projects.realisation.contest.emptyrow", $LANGUAGE) ?></h3>
                        <?php
                        if ($LANGUAGE == 'de') {
                            ?>
                            <div class="dynamic k1">
                                <h3>Wettbewerbsentwurf</h3>
                                <p class="k1">Der Entwurf versucht, durch die Ausbildung eines klar ablesbaren Eingangstors sowie durch haushohe vertikale Schlitze im Mauerwerk der Stadtfassade eine visuelle Brücke zur Stadt zu schlagen. Zumindest auf emblematischer Ebene sollen das Museum als öffentliches Gebäude und die Stadt als öffentlicher Ort so verbunden werden. </p>
                                <p class="k1">Die städtebaulichen Probleme der mangelnden Anbindung an die innerhalb des Wallrings gelegene Innenstadt werden so, wenn nicht gelöst, so doch gemildert. Mehr ist nicht drin. Es sei denn, der Anbau eines neuen Verwaltungsgebäudes an den U-Turm wird wieder abgerissen. </p>
                                <p class="k1">Die Arbeit versucht ferner, die monolithische Präsenz des Gebäudes als Backsteinblock zu unterstreichen und so seine symbolische Strahlkraft in den Dortmunder Stadtraum als Ganzes zu bewahren.</p>
                                <h3>Ausgangslage</h3>
                                <p class="k1">Dem Dortmunder U, einem aufgegebenen Produktionsgebäude der Dortmunder Union-Brauerei aus dem Jahre 1927, wurde in jüngster Vergangenheit der Anbau eines massiven Verwaltungsgebäudes vorgelagert.</p>
                                <p class="k1">Im Rahmen eines Bebauungsplans für das U-Quartier wird u. a. die Straßenführung vor dem stadtseitig gewünschten Haupteingang zum Kunstmuseum im U signifikant geändert. </p>
                                <p class="k1">Das U wird durch die Errichtung der vorgenannten Hindernisse von der ersten in die zweite Reihe zurückversetzt, es kommt zu einer optischen und verkehrstechnischen Ablösung des Turms von der Innenstadt. </p>
                                <h3>Wechselausstellung</h3>
                                <p class="k1">Die Flächen für Dauer- und Wechselausstellungen befinden sich in den vier Obergeschossen. Lichte Raumhöhen über 6 m erlauben hier die Präsentation sowohl von großformatigen Werken moderner Malerei, als auch von Großplastiken. </p>
                                <h3>Treppenhaus als Lichtkamin</h3>
                                <p class="k1">Die Besucherführung zu den Ausstellungsebenen erfolgt über ein als Lichtkamin ausgebildetes zentrales Treppenhaus. </p>
                                <p class="k1">So blickt das Publikum beim Übergang zwischen den Ebenen der Ausstellung 40 m hoch in den Himmel über dem Ruhrgebiet.</p>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <?php
                    $projectImageAltText = $translator->translate("references.projects.u2021.short", $LANGUAGE);
                    ?>
                    <?php include("../../../includes/php/project_images.php"); ?>
            </ul>
        </div>
        <?php require("../../../includes/php/footer_new_design.php"); ?>
    </div>
</body>
</html>