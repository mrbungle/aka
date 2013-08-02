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
                        <h1><?php echo $translator->translate("references.projects.ruethen", $LANGUAGE) ?></h1>
                        <h3 class="sub"><?php echo $translator->translate("projects.idea.contest", $LANGUAGE) ?></h3>
                        <?php
                        if ($LANGUAGE == 'de') {
                            ?>
                            <h3>Idee</h3>
                            <p class="sub"><i>&#8222;Rot und Schwarz - fünf Rauten und ein Kreuz.&#8220;</i></p>
                            <div class="dynamic">
                                <p>Der Entwurf basiert auf dem Wappen der Stadt Rüthen als Identifikationssymbol für die Bürger der Stadt.</p>
                                <h3>Ausführung</h3>
                                <p>Zentrales Element der Skulptur sind fünf 4 m hohe Stelen aus je vier rot lackierten Flachstahlprofilen, die abends durch mittig angeordnete Bodenstrahler ausgeleuchtet werden.</p>
                                <p>Im Ergebnis wird man hierdurch nachts schmale vertikale Lichtschlitze zwischen den einzelnen roten Stahlplatten sehen, d. h. die Rauten leuchten von innen.</p>
                                <p>Die Hauptinsel des Kreisverkehrs wird mit Rasen bepflanzt und durch ein Kreuz aus dunkelgrauem Bahnschotter in Viertelkreise unterteilt. Die Stahlstelen repräsentieren die Rauten im Stadtwappen, der graue Schotter steht für das schwarze Kreuz der Kölner Kurfürsten.</p>
                                <p>Auf den außen liegenden Rasenstreifen zwischen Fahrbahn und Radweg werden je zwei flache „Briketts“ aus immergrünem Buchsbaum gepflanzt, um das Skulptur-Wappen im Zentrum räumlich zu fassen.</p>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </li>
                <?php
                $projectImageAltText = $translator->translate("references.projects.ruethen", $LANGUAGE);
                ?>
                <?php include("../../../includes/php/project_images.php"); ?>
            </ul>
        </div>
        <?php require("../../../includes/php/footer_new_design.php"); ?>
    </div>
</body>
</html>