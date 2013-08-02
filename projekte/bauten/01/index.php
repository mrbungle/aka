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
                        <h1><?php echo $translator->translate("references.projects.sporthalle.bruehl", $LANGUAGE) ?></h1>
                        <h3 class="sub"><?php echo $translator->translate("projects.realisation.contest.emptyrow", $LANGUAGE) ?></h3>
                        <?php
                        if ($LANGUAGE == 'de') {
                            ?>
                            <div class="dynamic bauten">
                                <h3>Städtebau</h3>
                                <h3 class="sub">Foto: Andreas Buck</h3>
                                <p>Zusammen mit dem Neubau eines Supermarkts auf dem Nachbargrundstück bildet die Sporthalle ein Ensemble aus zwei an die rückwärtige Bahnlinie angelehnten Solitären, sowie zwei größeren langrechteckigen und zwei kleineren quer liegenden Parkflächen. </p>
                                <p>Diese Räume werden durch locker verteilte Bäume durchgrünt und führen so zu einer Synthese aus gewolltem Vorplatz und notwendigem Parkplatz, d.h. es entsteht ein sozialer Ort in unmittelbarer Nähe zum Zentrum der Stadt Bühl. </p>
                                <p>Die über die Hallendecke hinausragenden 3-Gurtbinder der Halle schaffen Ablesbarkeit, minimieren die Traufhöhe der Halle und vermitteln so zwischen ihrer reduzierten Kubatur und den Satteldächern der umliegenden kleinteiligen 2-geschossigen Wohnbebauung. </p>
                                <h3>Tragwerk</h3>
                                <h3 class="sub">Beratung: Engels Ingenieure Dortmund</h3>
                                <p>Das Tragwerk wird nach innen und außen gezeigt. </p>
                                <p>Die Hauptbinder bestehen aus gleichseitigen 3-Gurt-Bindern mit 35 m Spannweite und liegen auf je 2 Betonstützen auf.  Die Nebenträger sind als einfache Fachwerkträger ausgebildet und nehmen Trapezbleche auf, welche in Kombination mit den Stützen der Stirnseiten die Halle in Querrichtung aussteifen. Die Längsaussteifung erfolgt durch Verbände unter der Hallendecke. </p>
                                <h3>Energie</h3>
                                <p>Die verglasten Dreigurtbinder erfüllen parallel mehrere energetische Funktionen. In ihre Südverglasung sind großflächig Photovoltaikelemente zur ganzjährigen Stromerzeugung integriert, die gleichzeitig als Blend- und Sonnenschutz nach Süden fungieren. Nach Norden sind die Hauptbinder neutral verglast und gewährleisten so die blendfreie Belichtung der Halle. Öffnungsflügel in der Nordverglasung garantieren die Luftzirkulation. In den Sommermonaten können sie zusätzlich zur Nachtauskühlung genutzt werden.</p>
                                <h3>Funktionen</h3>
                                <p>Die Halle wird bedient, der vorgelagerte Sozialriegel dient. Getrennt werden beide Bereiche durch eine als Fuge ausgebildete und seitlich verglaste Verkehrsfläche. </p>
                                <p>Als multifunktionales Gebäude muss die Halle für eine große Bandbreite von Veranstaltungen funktionieren - vom täglichen Schulsport, über den abendlichen Breitensport und den Leistungssport auf Wettkampfebene bis zu allgemeinen gesellschaftlichen Veranstaltungen.</p>
                                <p>Schul- und Breitensport spielen sich hierbei nur im Erdgeschoss ab. Die Besucher betreten das Gebäude durch einen der beiden klar ablesbaren Eingänge, begeben sich in die direkt angrenzenden Umkleiden, gelangen von hier ebenerdig in die Sporthalle(n) und verlassen die Halle auf gleichem Wege.</p>
                                <p>Bei größeren Veranstaltungen werden die Besucher zunächst in das Obergeschoss geführt und verteilen sich von hier auf das Foyer und die beiden Tribünen.</p>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <?php
                    $projectImageAltText = $translator->translate("references.projects.sporthalle.bruehl", $LANGUAGE);
                    ?>
                    <?php include("../../../includes/php/project_images.php"); ?>
            </ul>
        </div>
        <?php require("../../../includes/php/footer_new_design.php"); ?>
    </div>
</body>
</html>