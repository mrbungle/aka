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
                    <div id="project-sc" class="project-panel design">
                        <h1><?php echo $translator->translate("references.projects.ehrlicher", $LANGUAGE) ?></h1>
                        <h3 class="sub"><?php echo $translator->translate("projects.realisation.contest.emptyrow", $LANGUAGE) ?></h3>
                        <span><?php echo $translator->translate("projects.mitarbeiter.schmidt", $LANGUAGE) ?></span>
                        <?php
                        if ($LANGUAGE == 'de') {
                            ?>
                            <h2>Weißer Mann im Park</h2>
                            <p>
                                Ein wei&szlig;er Mann legt sich in den Park.<br />
                                Achtzig Meter ist er lang.<br />
                                Nach einem Jahr steht er auf.<br />
                                Und geht.<br />
                                Oder bleibt.<br /><br />
                                Beides denkbar.<br />
                                Und machbar.<br />
                                Gestalterisch.<br />
                                Und konstruktiv.<br />
                                Ohne gro&szlig;en Aufwand.
                            </p>
                            <?php
                        }
                        ?>
                    </div>
                </li>
                <?php
                $projectImageAltText = $translator->translate("references.projects.ehrlicher", $LANGUAGE);
                ?>
                <?php include("../../../includes/php/project_images.php"); ?>
            </ul>
        </div>
        <?php require("../../../includes/php/footer_new_design.php"); ?>
    </div>
</body>
</html>