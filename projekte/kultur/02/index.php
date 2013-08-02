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
                        <h1><?php echo $translator->translate("references.projects.schauspielhh.short", $LANGUAGE) ?></h1>
                        <h3 class="sub"><?php echo $translator->translate("projects.fascade.contest", $LANGUAGE) ?></h3>
                        <?php
                        if ($LANGUAGE == 'de') {
                            ?>
                            <div class="dynamic k1">
                                <h3>Entwurf</h3>
                                <p class="k1">Ein buntes Kleid für einen kubischen Turm. Erfrischend will die neue Glasfassade sein, eine expressive und offensive Großform, die sich ableitet vom Charakter des Deutschen Schauspielhauses als Kulturbauwerk. </p>
                                <p class="k1">Wenn nicht hier mit dem gestalterischen Mut zur kontrollierten Offensive, wo dann?</p>
                                <p class="k1">Ein frohes Zeichen in den Stadtraum soll sie setzen, die bunte Fassade. Und so als optische Mittlerin fungieren, zwischen dem kulturellen Innenleben des Theaters und dem Außenraum der Stadt. </p>
                                <p class="k1">Nicht nur für die Theaterbesucher, sondern auch für die vielen Fahrgäste und Passanten des angrenzenden Hamburger Hauptbahnhofs. </p>
                                <h3>Konstruktion</h3>
                                <p class="k1">Die Glasfassade wird am Stahlskelett des neuen Bühnenturms aufgehängt. Polychrome Glasflächen in quadratischem Format werden von einer Pfosten-Riegel-Konstruktion aus schwarzem Aluminium gehalten. </p>
                                <p class="k1">Die Gläser werden in Opakglas ausgeführt und mit leichtem Abstand vor der weiß verputzten Wärmedämmung des Turms montiert. Bei Dunkelheit wird die Fassade von diffusem Streulicht hinterleuchtet. Die Lichtquellen selbst bleiben hierbei unsichtbar, wodurch die Fassade einen leicht schwebenden Charakter erhält. </p>
                                <p class="k1">Sonderelemente, wie das Logo an der Frontfassade oder die Klarglaselemente zur seitlichen Bühnenbelichtung sind ebenfalls in das durchgehende Raster eingelassen. </p>
                                <p class="k1">Um ihre dienende Funktion zu unterstreichen und sie vom Bühnenturm abzuheben, erhalten die seitlich aufgehenden Treppenhäuser eine Elementfassade aus leicht strukturiertem lichtgrauem Faserzement.</p>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <?php
                    $projectImageAltText = $translator->translate("references.projects.schauspielhh.short", $LANGUAGE);
                    ?>
                    <?php include("../../../includes/php/project_images.php"); ?>
            </ul>
        </div>
        <?php require("../../../includes/php/footer_new_design.php"); ?>
    </div>
</body>
</html>