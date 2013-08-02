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
                        <h1><?php echo $translator->translate("projects.zwenkau", $LANGUAGE); ?></h1>
                        <h3 class="sub"><?php echo $translator->translate("projects.zwenkau.subheadline", $LANGUAGE); ?></h3>
                        <?php
                        if ($LANGUAGE == 'de') {
                            ?>
                            <h3>Entwurf</h3>
                            <p>Das Haus ist ein Kubus aus grünem Sandstein.</p>
                            <p>Genauer gesagt, ein Kubus, dessen Strenge durch die Addition und Subtraktion kleinerer Baukörper eine volumetrische Relativierung erfährt.</p>
                            <h3>Grundrisse</h3>
                            <p>Eingang, Kochen, Essen und Wohnen sind als halboffener Grundriss im Erdgeschoss angeordnet.</p>
                            <p>Die Kinderzimmer befinden sich im Obergeschoss, der Elternbereich mit Arbeitszimmer und angrenzender Dachterrasse mit Blick auf den Zwenkauer See im Dachgeschoss.</p>
                            <h3>Fassaden</h3>
                            <p>Die Außenwände von Haus und Garage werden aus gestrahltem Grünsandstein errrichtet und nehmen schwarze Stahlfenster und -türen auf. </p>
                            <p>Das Tor zur Garage wird mit einer Holzverschalung versehen, die Dachterrasse erhält eine Pergola aus verzinktem Stahl, Türen werden zum Teil farbig lackiert.</p>
                            <?php
                        }
                        ?>
                    </div>
                    <?php
                    $projectImageAltText = $translator->translate("projects.zwenkau", $LANGUAGE);
                    ?>
                    <?php include("../../../includes/php/project_images.php"); ?>
            </ul>
        </div>
        <?php require("../../../includes/php/footer_new_design.php"); ?>
    </div>
</body>
</html>