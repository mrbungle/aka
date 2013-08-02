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
                        <h1><?php echo $translator->translate("references.bauten.solingen", $LANGUAGE) ?></h1>
                        <h3 class="sub"><?php echo $translator->translate("projects.realisation.contest.emptyrow", $LANGUAGE) ?></h3>
                        <?php
                        if ($LANGUAGE == 'de') {
                            ?>
                            <h3>Askese und Exzess</h3>
                            <p>Der Entwurf folgt einem dualen Ansatz, in dem sich rationale und expressive Elemente gegenüber stehen. </p>
                            <p>Zwei rationale Gebäude, das "Haus am Hang" und das Restaurant als Ersatzbau für die aufgelassene Diskothek übernehmen hierbei - inhaltlich und bildlich - die rationalen Funktionen, die sich aus der intensiven Parknutzung ergeben. </p>
                            <p>In gewollt hartem Kontrast hierzu steht das "Haus am Wasser" als auf Talachse und Brücke ausgerichteter kristalliner Keil. </p>
                            <h3>Konstruktion und Materialien</h3>
                            <p>Das "Haus am Hang" und das Restaurant erhalten eine klare Fassade aus Sichtbeton, Stahl und Glas. Beide Gebäude sind sowohl konstruktiv als auch visuell mit der Umgebung verzahnt. </p>
                            <p>Gleiches gilt für das "Haus am Wasser" mit seinen Glasfeldern in Klarglas, Rot und Orange, durch welche sich dem Besucher farblich akzentuierte Ausblicke auf die gleichfalls expressive Umgebung bieten - als bleibende Erinnerung an einen Ausflug an die Wupper.</p>
                            <?php
                        }
                        ?>
                    </div>
                    <?php
                    $projectImageAltText = $translator->translate("references.bauten.solingen", $LANGUAGE);
                    ?>
                    <?php include("../../../includes/php/project_images.php"); ?>
            </ul>
        </div>
        <?php require("../../../includes/php/footer_new_design.php"); ?>
    </div>
</body>
</html>
