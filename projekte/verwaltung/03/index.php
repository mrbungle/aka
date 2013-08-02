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
                        <h1><?php echo $translator->translate("references.projects.wto.headline", $LANGUAGE) ?></h1>
                        <h2><?php echo $translator->translate("references.projects.wto.subheadline", $LANGUAGE) ?></h2>
                        <h3 class="sub"><?php echo $translator->translate("projects.realisation.contest", $LANGUAGE) ?></h3>
                        <h3 class="sub"><br /><?php echo $translator->translate("references.projects.wto.ahnsorge", $LANGUAGE) ?></h3>
                        <?php
                        if ($LANGUAGE == 'de') {
                            ?>
                            <div class="dynamic">
                                <h3>St&auml;dtebau</h3>
                                <p>
                                    Das bestehende historistische WTO-Gebäude gleicht einer Insel aus Stein in der Parklandschaft zwischen dem Ufer des Genfer Sees und der westlich gelegenen Rue de Lausanne.
                                </p>
                                <p>
                                    Der Entwurf greift diesen Ansatz auf und entwickelt ihn in südlicher Richtung weiter. So entsteht eine sich über die einzelnen Bauabschnitte entwickelnde S-förmige Metaform.
                                </p>
                                <p>
                                    Die Teile dieser Großform sind zwar klar ablesbar, bilden aber dennoch ein kohärentes Ensemble, das sich wie selbstverständlich in die Landschaft einbettet und an den Gebäudekanten mit der Parkfläche verzahnt.
                                </p>
                                <p>
                                    Die bestehende Abfolge aus zwei massiven Baukörpern wird durch ein drittes modernes Element fortgeführt, die bestehende Reihung von zwei Innenhöfen in der Längsrichtung des Gebäudes achsial um einen dritten Innenhof ergänzt.
                                </p>
                                <h3>Baukörper</h3>
                                <p>
                                    Die Bestandsgebäude differieren in Ihrer Höhenabwicklung zwischen Hochpunkten an den Gebäudeköpfen und um ein Geschoss flacheren Längsseiten.
                                </p>
                                <p>
                                    Dieser differenzierte Umgang mit den Gebäudehöhen wird im Neubau übernommen. Während die beiden Anschlüsse an das Bestandsgebäude 4 Geschosse aufweisen, bildet der südliche Hauptriegel mit 6 Geschossen als volumetrischer Akzent den Abschluss der Gebäudekette.
                                </p>
                                <h3>Fassaden</h3>
                                <p>
                                    Der Neubau erhält eine klar profilierte Natursteinfassade aus weißgrauem Schweizer Jura. Durch stehende Holzfenster wird die neoklassizistische Fassadensprache der Altbauten mit modernen Mitteln an die Gegenwart adaptiert.
                                </p>
                                <h3>Funktionen</h3>
                                <p>Das Gebäude gliedert sich vertikal in drei funktionale Hauptzonen.</p>
                                <p>Die drei Untergeschosse nehmen die Tiefgarage sowie die Technikflächen auf. Im Erdgeschoss und im ersten Obergeschoss befinden sich an zentraler Stelle die von allen Mitarbeitern genutzten allgemeinen Funktionsbereiche wie Restaurant, Bibliothek und Druckerei.</p>
                                <p>Die Büroflächen liegen komplett in den oberen Geschossen 02 bis 05, von wo aus sich die besten Aussichten auf Park und Genfer See ergeben.</p>
                                <h3>Eingangshalle</h3>
                                <p>Der Eingang zum Neubau befindet sich wie auch die Eingänge zu den Bestandsbauten am Ende des geplanten überdachten Verbindungsganges zwischen allen Bauteilen der WTO.</p>
                                <p>Vom Haupteingang gelangt man über eine ansteigende Rampe in die als Atrium ausgebildete Hall d’entrée, mit den sichtbar belassenen Innenfassaden von Alt- und Neubau. Von der Hall d’entrée gehen auch das Restaurant, sowie die zur vertikalen Erschließung des Gebäudes dienenden Fahrstühle ab.</p>
                                <p>Die Eingangshalle bildet somit die zentrale Kommunikationszone für die neuen 400 Mitarbeiter der WTO.</p>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <?php
                    $projectImageAltText = $translator->translate("references.projects.wto.headline", $LANGUAGE);
                    ?>
                    <?php include("../../../includes/php/project_images.php"); ?>
            </ul>
        </div>
        <?php require("../../../includes/php/footer_new_design.php"); ?>
    </div>
</body>
</html>