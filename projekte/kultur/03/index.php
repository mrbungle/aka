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
                        <h1><?php echo $translator->translate("project.galeria.present", $LANGUAGE) ?></h1>
                        <h2><?php echo $translator->translate("references.projects.saarlandmuseum", $LANGUAGE) ?></h2>
                        <h3 class="sub"><?php echo $translator->translate("projects.realisation.contest.emptyrow", $LANGUAGE) ?></h3>
                        <?php
                        if ($LANGUAGE == 'de') {
                            ?>
                            <div class="dynamic k2">
                                <h3>Städtebau</h3>
                                <p class="k2">Der Neubau der Galerie der Gegenwart füllt als monolithischer Kubus die Freifläche vor den bestehenden Museumsbauten, komplettiert so das vorhandene Ensemble und bringt das Museum zurück an die Bismarckstrasse. </p>
                                <p class="k2">Als neuer Baustein fügt sich der Kubus harmonisch in die für Saarbrücken stadtbildprägende Silhouette der Kulturmeile aus Staatstheater, Musikhochschule und Saarlandmuseum.</p>
                                <p class="k2">Durch seine Höhe wird er zur kulturellen Landmarke. Die Kunst zeigt so Präsenz und wirkt mit dezentem Selbstbewusstsein in den Stadtraum.</p>
                                <h3>Fassaden</h3>
                                <p class="k2">Die Fassaden des Kubus nehmen den Ceppo di Gré der Bestandsbauten auf, einen auch als Naturbeton bezeichneten grauen Marmor aus Norditalien. </p>
                                <p class="k2">Zur besseren Differenzierung zwischen Alt und Neu werden die Marmorplatten beim Kubus allerdings nicht vertikal, sondern horizontal ausgerichtet. Die Funktionen und die Lage der Geschosse innerhalb des Museums sind an der Teilung der Fassaden klar ablesbar.</p>
                                <h3>Funktionen</h3>
                                <p class="k2">Der zentrale Empfang mit Foyer, dienenden Räumen und Gastronomie befindet sich im Erdgeschoss und öffnet sich mit seinen großen Glasflächen zur angrenzenden Umgebung. </p>
                                <p class="k2">Die Ausstellungsflächen in den beiden Obergeschossen sind als hallengleiche Kunsträume mit einer lichten Höhe von 6 m konzipiert. Frei von Stützen erlauben sie den Kuratoren freie Hand bei der Bespielung. </p>
                                <p class="k2">Großformatige Fensteröffnungen in den Raumecken gewähren Ausblicke in die Umgebung. Gleich enigmatischen Kunstaugen blicken sie so auf Stadt und Saar.</p>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <?php
                    $projectImageAltText = $translator->translate("project.galeria.present", $LANGUAGE);
                    ?>
                    <?php include("../../../includes/php/project_images.php"); ?>
            </ul>
        </div>
        <?php require("../../../includes/php/footer_new_design.php"); ?>
    </div>
</body>
</html>