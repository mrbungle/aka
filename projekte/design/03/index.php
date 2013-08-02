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
                        <h1><?php echo $translator->translate("references.projects.einheitsdenkmal", $LANGUAGE) ?></h1>
                        <h3 class="sub"><?php echo $translator->translate("projects.realisation.gestaltungswettbewerb", $LANGUAGE) ?></h3><br />
                        <?php
                        if ($LANGUAGE == 'de') {
                            ?>
                            <h3 class="sub"><i>&#8222;Wer alles repr&#228;sentieren will, repr&#228;sentiert nichts.&#8220;</i></h3>
                            <div class="dynamic">
                                <h3>Geschichte</h3>
                                <p>Um die Darstellung der historischen Abfolge der Freiheits- und Einheitsbewegungen des 19. und 20. Jahrhunderts nicht durch gewollt konstruierte Kausalitäten und Parallelen zwischen den Einzelbewegungen zu verwässern, konzentriert sich der Entwurf auf EIN Ereignis:<br />
                                    <br /> Die &#8222;Friedliche Revolution&#8220; vom Herbst 1989.
                                </p>
                                <h3>St&#228;dtebau</h3>
                                <p>Das Denkmal orientiert sich am status quo der Axialität von barocker Schlosskuppel und neobarock- wilhelminischem Sockel und erweitert diese über die Spree mit Blick auf die Schinkelsche Bauakademie. Beidseitig flankiert wird es hierbei von 8-12 Meter hohen, gestaffelten Scheiben aus Cor-Ten-Stahl.</p>
                                <p>Um nicht ästhetisch und räumlich mit dem Denkmal zu konkurrieren, wird der &#8222;Ort der Information&#8220; als transparenter Flachbau mit leichtem Abstand zum Sockel auf der Schlossfreiheit platziert.</p>
                                <h3>Entwurf</h3>
                                <p>Das Denkmal zeigt die Szene einer Leipziger Montagsdemonstration von 1989 in Straßenbreite als Symbol des Willens der Bürger nach Freiheit und deutscher Einheit.</p>
                                <p>Die Stahlscheiben simulieren die Situation einer Straßenflucht in Leipzig. Gleichzeitig lenken Sie den Blick des Betrachters auf die Demonstranten, jedoch ohne das Denkmal komplett vom umgebenden Stadtraum abzuschotten.</p>
                                <p>Die leichte Neigung der Scheiben steht stellvertretend für die sich mit dem Herbst 1989 verbindende historische Dynamik. Auf der ersten Scheibe befindet sich an exponierter Stelle der Hinweis der Demonstranten an den Apparat: &#8222;Wir sind das Volk!&#8220;.</p>
                                <p>Der Denkmalmalsockel ist durch die Besucher frei begehbar, d. h. sie empfinden die Szenerie auf Augenhöhe mit den Demonstranten.</p>
                                <h3>Material</h3>
                                <p>Der Sockel des Denkmals wird auf ein einheitliches Höhenniveau gebracht und flächig mit grauen Natursteinplatten belegt. </p>
                                <p>In die monolithischen Scheiben aus vorkorrodiertem Cor-Ten-Stahl sind abstrakte Silhouetten der wichtigsten Schauplätze der Friedlichen Revolution eingelassen: Leipzig mit Universität und Nikolaikirche, Berlin mit Fernsehturm und Alexanderplatz etc.</p>
                                <p>Die Demonstranten-Figuren werden als leicht abstrahierte Plastiken aus dunkelbrauner Bronze gegossen.</p>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </li>
                <?php
                $projectImageAltText = $translator->translate("references.projects.einheitsdenkmal", $LANGUAGE);
                ?>
                <?php include("../../../includes/php/project_images.php"); ?>
            </ul>
        </div>
        <?php require("../../../includes/php/footer_new_design.php"); ?>
    </div>
</body>
</html>