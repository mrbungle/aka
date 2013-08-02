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
                        <h1><?php echo $translator->translate("references.projects.pentagon", $LANGUAGE) ?><br /><!--<?php echo $translator->translate("references.projects.pentagon.subheadline", $LANGUAGE) ?>--></h1>
                        <h3 class="sub"><?php echo $translator->translate("projects.idea.contest.emptyrow", $LANGUAGE) ?></h3>
                        <?php
                        if ($LANGUAGE == 'de') {
                            ?>
                            <h3>Entwurf</h3>
                            <p>Im Rahmen eines Ideenwettbewerbs zur Errichtung eines Ortes der Erinnerung für die Opfer des Anschlags vom 11.09.2001 auf das Pentagon in Washington D. C. empfiehlt der Entwurf ein Memorial in Richtung der Flugbahn des angreifenden Flugzeugs. </p>
                            <p>Der Entwurf folgt hierbei den Prinzipien formaler Reduktion. Umgeben von einem Wasserbecken stehen ein kristalliner Würfel aus weißem Marmor und ein durch Mauern vor Einblicken geschützter Wandelgarten. </p>
                            <p>Gewollt selektive Öffnungen in Kubus und Mauer erlauben kontemplative Blicke in den Himmel über Virginia sowie auf die getroffene Fassade des Verteidigungsministeriums.</p>
                            <?php
                        }
                        ?>
                    </div>
                    <?php
                    $projectImageAltText = $translator->translate("references.projects.pentagon", $LANGUAGE);
                    ?>
                    <?php include("../../../includes/php/project_images.php"); ?>
            </ul>
        </div>
        <?php require("../../../includes/php/footer_new_design.php"); ?>
    </div>
</body>
</html>