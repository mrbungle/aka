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
                        <h1><?php echo $translator->translate("references.projects.friedhof", $LANGUAGE) ?></h1>
                        <h3 class="sub"><?php echo $translator->translate("projects.idea.contest.emptyrow", $LANGUAGE) ?></h3>
                        <?php
                        if ($LANGUAGE == 'de') {
                            ?>
                            <h3>Felder und Grabfelder</h3>
                            <p>Der neue Friedhof wird Teil eines übergeordneten Landschaftsparks. Sein räumlicher Maßstab definiert sich aus den angrenzenden Wiesen und Feldern. </p>
                            <p>Die Sprache der Baukörper ist jene der Reduktion. Regionaler Sandstein vermittelt zur Landschaft. Stereometrie wird so zum neutralen Hintergrund für Momente persönlicher Kontemplation. </p>
                            <p>Gleich solitären Landmarken stehen die Kuben in den Feldern, ihre pyramidalen Grabhöfe von asiatischen Zierkirschen bekrönt. </p>
                            <p>Zeichen der Jahreszeit an einem Ort frei von Zeit.</p>
                            <?php
                        }
                        ?>
                    </div>
                    <?php
                    $projectImageAltText = $translator->translate("references.projects.friedhof", $LANGUAGE);
                    ?>
                    <?php include("../../../includes/php/project_images.php"); ?>
            </ul>
        </div>
        <?php require("../../../includes/php/footer_new_design.php"); ?>
    </div>
</body>
</html>