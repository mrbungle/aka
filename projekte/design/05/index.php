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
                        <h1><?php echo $translator->translate("projects.design.ploetzen", $LANGUAGE) ?></h1>
                        <h3 class="sub"><?php echo $translator->translate("projects.design.ploetzen.subheadline", $LANGUAGE) ?></h3><br />
                        <?php
                        if ($LANGUAGE == 'de') {
                            ?>
                            <div class="dynamic">
                                <h3>Grundidee</h3>
                                <p>Der Entwurf sieht zwei Orte des Gedenkens vor.</p>
                                <p>Das Aufstellen einer skulpturalen Baracke im Viehofner See zur Erinnerung an die beiden Zwangsarbeiterlager. Sowie die Errichtung von 11 Grabsteinen auf der Fläche des Massengrabs auf dem Friedhof.</p>
                                <h3>Seebaracke</h3>
                                <p>Die Skulptur zum Gedenken an die beiden Lager stellt eine stilisierte Zwangsarbeiterbaracke in Originalgröße mit ausgestanzten Arbeitersilhouetten dar.</p>
                                <p>Die Baracke lag ursprünglich an der Stelle der geplanten Kinderbadebucht und wird für das Mahnmal in Richtung des gegenüberliegenden Seeufers verschoben.</p>
                                <p>Um sich von der eher dunklen Umgebung aus Wasser und Wald abzusetzen, werden die beiden Frontgiebel der Barackenskulptur aus hellem Metall mit matter Oberfläche hergestellt.</p>
                                <h3>Massengrab</h3>
                                <p>Den rund 210 Toten aus den letzten Kriegsmonaten wird in Form von 11 Grabsteinen auf einer einfachen Rasenfläche gedacht.</p>
                                <p>Der erste Grabstein enthält einen informativen Text des Gedenkens. Auf die restlichen 10 Grabsteine werden die Namen der Verstorbenen graviert. Grabsteine aus weißem Naturstein, Inschriften als schwarze Gravur.</p>
                                <p>Ein ästhetischer Bruch mit der Umgebung des Friedhofs ist an dieser Stelle nicht gewollt. Als Ruhestätte von Toten unter Toten soll sich das Massengrab stattdessen harmonisch in seine Umgebung einfügen.</p>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </li>
                <?php
                $projectImageAltText = $translator->translate("projects.design.ploetzen", $LANGUAGE);
                ?>
                <?php include("../../../includes/php/project_images.php"); ?>
            </ul>
        </div>
        <?php require("../../../includes/php/footer_new_design.php"); ?>
    </div>
</body>
</html>