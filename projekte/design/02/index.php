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
                        <h1><?php echo $translator->translate("projects.ACBHM.h1", $LANGUAGE) ?></h1>
                        <h3 class="sub"><?php echo $translator->translate("projects.realisation.contest", $LANGUAGE) ?></h3><br />
                        <?php
                        if ($LANGUAGE == 'de') {
                            ?>
                            <div class="dynamic">
                                <h3>Entwurf</h3>
                                <p>Zwei rechtwinklig zur Promenade angeordnete und ineinander verschobene konkave Trapezoide bilden als zusammengesetzte Skulptur das Mahnmal für die Opfer des Holocaust. </p>
                                <p>Wie bei einem Filter soll der vordere Part die Passanten dezent anziehen, während der hintere Keil einen gerichteten Blick auf den Himmel und den Atlantischen Ozean freigibt. </p>
                                <p>Den Kern des Mahnmals bilden, im Inneren der expressiven Hülle gelegen, mehrere Reihen abstrahierter Figuren in Form von Stahlsilhouetten. Die durch gespannte Stacheldrahtseile getrennten Figuren stehen hierbei für die anonymen Opfer der Shoa, diese Zone des Mahnmals ergo für die Tragödie des Völkermords. </p>
                                <p>Der sich anschließende Blick auf die potentielle Transzendenz von Himmel und Meer dagegen repräsentiert die in der Zukunft liegende Hoffnung. </p>
                                <h3>Material</h3>
                                <p>Als Solitär steht das Mahnmal auf einem sich nahtlos an die Strandpromenade anschließenden Sockel. </p>
                                <p>Wobei die Holzplanken der Promenade im Sockel nahtlos fortgeführt werden. Die dynamische Skulptur selbst wird von außen und innen mit Bahnen aus mattiertem Messing verkleidet. </p>
                                <p>Die Figuren werden aus sandgestrahltem Edelstahl gefertigt und stehen auf einer leicht ansteigenden Fläche aus graugrünem Schiefersplitt. </p>
                                <p>Zwischen den einzelnen Figurenreihen werden Seile aus stilisiertem Stacheldraht zwischen den aufgehenden Wänden des Mahnmals gespannt.</p>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </li>
                <?php
                $projectImageAltText = $translator->translate("projects.ACBHM.h1", $LANGUAGE);
                ?>
                <?php include("../../../includes/php/project_images.php"); ?>
            </ul>
        </div>
        <?php require("../../../includes/php/footer_new_design.php"); ?>
    </div>
</body>
</html>