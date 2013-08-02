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
                        <h1><?php echo $translator->translate("references.projects.dezernat3.short", $LANGUAGE) ?></h1>
                        <h2>
                            <?php echo $translator->translate("administration.building", $LANGUAGE) ?><?php echo $translator->translate("university.do", $LANGUAGE) ?><br />
                            <?php echo $translator->translate("do", $LANGUAGE); ?>
                        </h2>
                        <h3><?php echo $translator->translate("building.data", $LANGUAGE) ?></h3>
                        <ul class="first">
                            <li><?php echo $translator->translate("building.size", $LANGUAGE); ?></li>
                            <li class="value">2100 <?php echo $translator->translate("sq", $LANGUAGE); ?></li>
                        </ul>
                        <ul>
                            <li><?php echo $translator->translate("building.costs", $LANGUAGE); ?></li>
                            <li class="value"><?php echo $translator->translate("dezernat.3.costs.value", $LANGUAGE); ?></li>
                        </ul>
                        <ul>
                            <li><?php echo $translator->translate("buildings.client", $LANGUAGE); ?></li>
                            <li class="value">BLB NRW</li>
                        </ul>
                        <hr style="clear: both" />
                        <?php
                        if ($LANGUAGE == 'de') {
                            ?>
                            <div class="dynamic">
                                <h3>Entwurf</h3>
                                <p>
                                    Das Gebäude ist ein Folgeprojekt des auf der gegenüberliegenden Straßenseite realisierten Wettbewerbserfolgs "Dezernat 5".
                                </p>
                                <p>
                                    Der Bau sollte ursprünglich in einer ähnlichen Formensprache mit differenzierten Fassaden aus Putz und Aluminium sowie einem leicht auskragenden Obergeschoss verwirklicht werden.
                                </p>
                                <p>
                                    Um eine bessere Ausnutzung der Grundstücksfläche zu erreichen und so zu einer höheren Zahl an Arbeitsplätzen im Gebäude zu gelangen, wurde die ursprüngliche Entwurfsvariante dann allerdings zu einer kubischen Grundform mit Atrium abgeändert.
                                </p>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </li>
                <?php
                $projectImageAltText = $translator->translate("references.projects.dezernat3.short", $LANGUAGE);
                ?>
                <?php include("../../../includes/php/project_images.php"); ?>
            </ul>
        </div>
        <?php require("../../../includes/php/footer_new_design.php"); ?>
    </div>
</body>
</html>