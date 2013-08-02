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
                        <h1><?php echo $translator->translate("references.projects.wohnen.hausk.kleve.headline", $LANGUAGE) ?></h1>
                        <div class="dynamic bauten">
                            <span class="imgdescbottom"><?php echo $translator->translate("projects.wohnen.kleve.footnote", $LANGUAGE) ?></span>
                        </div>
                    </div>
                    <?php
                    $projectImageAltText = $translator->translate("references.projects.wohnen.hausk.kleve.headline", $LANGUAGE);
                    ?>
                    <?php include("../../../includes/php/project_images.php"); ?>
            </ul>
        </div>
        <?php require("../../../includes/php/footer_new_design.php"); ?>
    </div>
</body>
</html>