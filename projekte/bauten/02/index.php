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
                        <h1><?php echo $translator->translate("references.projects.karlsruhe", $LANGUAGE); ?></h1>
                        <h3 class="sub">
                            <?php echo $translator->translate("projects.realisation.contest.emptyrow", $LANGUAGE); ?>
                        </h3>
                        <?php
                        if ($LANGUAGE == 'de') {
                            ?>
                            <div class="dynamic">
                                <h3>Städtebau</h3>
                                <p>Ausgehend von den planungsrechtlichen Vorgaben, dem kompakten Charakter der benachbarten Wohnblöcke und der Lage des Wettbewerbsgrundstücks an der Schnittstelle von Blockrandbebauung und Stadtpark basiert der Entwurf auf nachfolgenden Überlegungen: </p>
                                <p>Die städtebaulichen Kanten der Nachbarblöcke werden aufgenommen und fortgeführt. Hierdurch entstehen klar definierte urbane Straßenräume zu den westlich und südlich angrenzenden Blöcken 10 und 15. </p>
                                <p>Zum Platz am Wasserturm zeigt sich der Entwurf mit einer durchgehend 3-geschossigen Fassade, wodurch eine klare Platzkante definiert und der Platz gefasst wird. </p>
                                <p>Als Ergebnis aus der Orientierung der Baukörper an den Grundstücksgrenzen entsteht zwischen beiden Schulen ein mittiger Hof, dessen Weitung nach Norden Aus- und Durchblicke in Richtung Stadtpark erlaubt. Die Schulen werden so zum urbanen Gelenk zwischen Park und Wohnen.</p>
                                <h3>Architektur</h3>
                                <p>Zwei Schulen, zwei Baukörper, ablesbare Funktionen. Der östliche Baukörper nimmt die Grundschule auf, im westlichen Riegel befinden sich die Sporthalle und, im Zuge der Erweiterung, die Sekundarstufe 1.</p>
                                <p>Alle Eingänge sind klar akzentuiert und führen die Schüler jeweils in eine zentrale Kommunikationsfläche als Auftakt für den beginnenden Schultag.</p>
                                <p>Im Erdgeschoss beider Schulen befinden sich die Lehrer-, Verwaltungs- und Aufenthalts- bzw. Ganztagsbereiche. Die Räume für den Unterricht liegen in den beiden Obergeschossen. Während die Grundschule hier zusätzlich über eine Dachterrasse für Stunden unter freiem Himmel verfügt, befindet sich in der SEK1 - Schule ein Atrium als zentrale Erschließungs- und Kommunikationsfläche.</p>
                                <p>Die Sporthalle wird bis zur halben Höhe unter der Geländeoberfläche realisiert, um dann im zweiten BA im EG horizontal ergänzt und um zwei Geschosse aufgestockt zu werden.</p>
                                <h3>Außenanlagen</h3>
                                <p>Die beiden Schulen sind über Ihre Öffnung zum Park sowie über die Ihnen zugeordneten Pausenhöfe mit den Freiflächen in der Umgebung verzahnt.</p>
                                <p>Zu den Funktionsflächen des Erweiterungsbaus gehört eine zusätzliche Pausenfläche für die Schüler der SEK1 im nördlich an das Wettbewerbsgrundstück angrenzenden Park.</p>
                                <p>Der innere Pausenhof zwischen beiden Schulen und der Haupteingang zur SEK 1 werden hierbei durch visuell hervorgehobene Querungen mit dieser erweiterten Pausenfläche verbunden. So findet der in der gebauten Kubatur sichtbare Wille zum Ensemble seine Fortsetzung auch in den Außenanlagen.</p>
                                <p>Teil des parkseitigen Pausenhofs ist ferner ein Schulgarten, ergänzend denkbar wäre hier auch ein grünes Klassenzimmer.</p>
                                <h3>Fassaden</h3>
                                <p>Beide Schulen folgen der Formensprache der klassischen Moderne und bilden so ein Ensemble. Analog zur Situation in der näheren Umgebung entsteht ein gestalterisch homogener urbaner Block, d. h. letztlich ein gewollt einheitliches Stück Stadt.</p>
                                <p>Die weiß verputzten Fassaden nehmen liegende Fensterbänder mit dunklen Profilen auf, die ihrerseits durch farbige vertikale Glasstreifen belebt und rhythmisiert werden.</p>
                                <p>Die Windfänge zu den Gebäuden sind aus farblich klar abgesetztem rot lackiertem Stahl. Sie betonen so nicht nur die Eingangszonen, sondern auch die Aufteilung des Schulzentrums in die drei Funktionsbereiche Grundschule, SEK 1 und Sporthalle.</p>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <?php
                    $projectImageAltText = $translator->translate("references.projects.karlsruhe", $LANGUAGE);
                    ?>
                    <?php include("../../../includes/php/project_images.php"); ?>
            </ul>
        </div>
        <?php require("../../../includes/php/footer_new_design.php"); ?>
    </div>
</body>
</html>