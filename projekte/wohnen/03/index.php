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
                        <h1><?php echo $translator->translate("references.projects.familienwohnen", $LANGUAGE); ?></h1>
                        <h3 class="sub"><?php echo $translator->translate("projects.familienwohnen.subehadline", $LANGUAGE); ?></h3>
                        <?php
                        if ($LANGUAGE == 'de') {
                            ?>
                            <h3>Städtebau</h3>
                            <p>Die Wohnsiedlung orientiert sich als parallel zur Hanglage ausgerichtete Reihung weißer Kuben an der vorhandenen Topographie. Trotz offener Bauweise generieren die Wohnhäuser so einen erfahrbaren Straßenraum, ohne mit dem kleinteiligen Maßstab der Umgebung zu brechen. </p>
                            <h3>Grundrisse</h3>
                            <p>Die Grundrisse folgen der funktionalen Schichtung im städtebaulichen Entwurf. Durch eine tragende Mittelwand ergibt sich über alle Geschosse eine Trennung zwischen vorderen Nebenräumen und rückseitigen Wohnräumen. Bis auf diese Mittelwand können alle Wände im Laufe der Gebäudenutzung flexibel versetzt werden. Der Entwurf kann ferner durch Reihung von zwei leicht verkürzten Einzelhäusern zum kompakten Doppelhaus gekoppelt werden. </p>
                            <h3>Fassaden</h3>
                            <p>Die Fassaden bestehen aus Weißputz und Holz. Ihre regionale Materialität integriert sich so dezent in den dörflichen Bestand. Die Dachdeckung wird aus Titanzink, schwarzen Ziegeln oder örtlichem Schiefer ausgeführt.</p>
                            <?php
                        }
                        ?>
                    </div>
                    <?php
                    $projectImageAltText = $translator->translate("references.projects.familienwohnen", $LANGUAGE);
                    ?>
                    <?php include("../../../includes/php/project_images.php"); ?>
            </ul>
        </div>
        <?php require("../../../includes/php/footer_new_design.php"); ?>
    </div>
</body>
</html>