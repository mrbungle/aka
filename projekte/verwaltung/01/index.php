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
                        <h1><?php echo $translator->translate("references.projects.dezernat5.short", $LANGUAGE); ?></h1>
                        <h2>
                            <?php echo $translator->translate("administration.building", $LANGUAGE); ?><?php echo $translator->translate("university.do", $LANGUAGE); ?><br />
                            <?php echo $translator->translate("do", $LANGUAGE); ?>
                        </h2>
                        <h3><?php echo $translator->translate("building.data", $LANGUAGE); ?></h3>
                        <ul class="first">
                            <li><?php echo $translator->translate("building.size", $LANGUAGE); ?></li>
                            <li class="value">1000 <?php echo $translator->translate("sq", $LANGUAGE); ?></li>
                        </ul>
                        <ul>
                            <li><?php echo $translator->translate("building.costs", $LANGUAGE); ?></li>
                            <li class="value"><?php echo $translator->translate("dezernat.5.costs.value", $LANGUAGE); ?></li>
                        </ul>
                        <ul>
                            <li><?php echo $translator->translate("buildings.client", $LANGUAGE); ?></li>
                            <li class="value">BLB NRW</li>
                        </ul>
                        <hr style="clear: left" />
                        <?php
                        if ($LANGUAGE == 'de') {
                            ?>
                            <div class="dynamic">
                                <h3>Entwurf</h3>
                                <p>
                                    Der Entwurf eines Bürogebäudes für das Finanzdezernat der Dortmunder Universitätsverwaltung wurde bei einem von der Universität Dortmund ausgelobten Wettbewerbsverfahren mit dem 1. Preis ausgezeichnet.
                                </p>
                                <p>
                                    In der Folge wurde das Gebäude dann unter Federführung und Oberbauleitung des Bau- und Liegenschaftsbetriebs NRW (BLB NRW NL Dortmund) und eines vom BLB beauftragten Generalunternehmers aus Norddeutschland realisiert.
                                </p>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </li>
                <?php
                $projectImageAltText = $translator->translate("references.projects.dezernat5.short", $LANGUAGE);
                ?>
                <?php include("../../../includes/php/project_images.php"); ?>
            </ul>
        </div>
        <?php require("../../../includes/php/footer_new_design.php"); ?>
    </div>
</body>
</html>