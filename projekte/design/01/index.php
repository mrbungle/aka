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
                        <h1><?php echo $translator->translate("projects.duhamel.h1", $LANGUAGE) ?></h1>
                        <h3 class="sub"><?php echo $translator->translate("projects.idea.contest", $LANGUAGE) ?></h3>
                        <?php
                        if ($LANGUAGE == 'de') {
                            ?>
                            <div class="dynamic">
                                <h3>Idee</h3>
                                <p>Der Entwurf basiert auf den Bergbausymbolen Eisen und Schlägel, Förderturm sowie Kumpel bei der Ausfahrt. In Summe ergeben diese drei Assoziationen eine Landmarke als Sinnbild für die sich neigende Epoche des saarländischen Bergbaus.</p>
                                <h3>Turm</h3>
                                <p>Die an einen kubischen Förderturm erinnernde Turmskulptur erhält ein Gestell aus robusten Stahlprofilen, wobei das Material Corten-Stahl der in der Montanindustrie vorherrschenden Industriebauweise entlehnt ist. Gleichzeitig erinnert das Stahlgestell mit stilisiertem Gitter an die Öffnung eines Förderkorbs, mit welchem die Bergleute in die Minen einfuhren.</p>
                                <p>Auf dem Gestell liegt ein nach innen offener Kubus mit den Abmessungen 12 x 12 x 24 m. Die Stahlprofile, welche diesen Kubus in freier Geometrie gliedern, werden schwarz lackiert. Die Gefache werden beidseitig mit opakem, weißem und nachts hinterleuchtetem Glas gefüllt. </p>
                                <p>Auch bei den Profilen verankert der Werkstoff Stahl das Gebäude in der Montantradition, während die expressionistische Anordnung der Wirkungslinien den Bezug zur gestalterischen Gegenwart herstellt.</p>
                                <p>Vor zwei der vier „Tore“ des Stahlsockels steht eine Gruppe aus je drei Bergleuten mit einer Höhe von rund 4 m. Als Skulpturenkumpel aus mattem Edelstahl verstetigen die Figuren die Ausfahrt der „letzten Schicht“. Gleichzeitig stehen sie aber auch für die wichtige Tatsache, dass der Bergbau immer auf der harten körperlichen Arbeit von Bergleuten, d. h. von Menschen beruhte.</p>
                                <h3>Fläche</h3>
                                <p>Die Turmskulptur befindet sich in der Mitte einer Veranstaltungsfläche von der Größe eines Fußballfeldes, deren Ecken von kleinen Baumgruppen räumlich gefasst werden.</p>
                                <p>Der Zugang zu dieser Podestfläche erfolgt allseitig über 4 Stufen, die Fläche bildet somit ein zweites Plateau über dem Plateau der Kohlenhalde selbst.</p>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </li>
                <?php
                $projectImageAltText = $translator->translate("projects.duhamel.h1", $LANGUAGE);
                ?>
                <?php include("../../../includes/php/project_images.php"); ?>
            </ul>
        </div>
        <?php require("../../../includes/php/footer_new_design.php"); ?>
    </div>
</body>
</html>