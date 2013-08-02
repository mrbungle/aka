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
                        <h1><?php echo $translator->translate("references.projects.follydock.short", $LANGUAGE) ?></h1>
                        <h2><?php echo $translator->translate("references.projects.follydock.subheadline", $LANGUAGE) ?></h2>
                        <h3 class="sub"><?php echo $translator->translate("projects.idea.contest.emptyrow", $LANGUAGE) ?></h3>
                        <?php
                        if ($LANGUAGE == 'de') {
                            ?>
                            <p class="k3">Entwurf für einen temporären Ausstellungspavillon im Rahmen von follyDock, einer Initiative zur urbanen Vitalisierung brachliegender Kaiflächen in Rotterdam. </p>
                            <p class="k3">Die folly sollte aus prefabrizierten Stahlprofilen und farbigen Gläsern vor Ort montiert werden und folgt dem Konzept einer begehbaren Skulptur. </p>
                            <p class="k3">Im Innern sollte sich ein kaleidoskopischer Rausch aus Farben und Formen entfalten, eine transparente, im Licht oszillierende polychrome Folie mit Aus- und Durchblicken auf den Hafen von Rotterdam.</p>
                            <?php
                        }
                        ?>
                    </div>
                    <?php
                    $projectImageAltText = $translator->translate("references.projects.follydock.short", $LANGUAGE);
                    ?>
                    <?php include("../../../includes/php/project_images.php"); ?>
            </ul>
        </div>
        <?php require("../../../includes/php/footer_new_design.php"); ?>
    </div>
</body>
</html>