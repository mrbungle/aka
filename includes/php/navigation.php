<?php
$deep = substr_count($uri, "/");
$isBueroArea = substr_count($uri, "/buero.php") > 0 || substr_count($uri, "/leistungen/") > 0 || substr_count($uri, "/daten/") > 0;
$isBueroSelected = $isBueroArea ? " class=\"selected\"" : "";
$isProjectArea = substr_count($uri, "/projekte/") > 0;
$isProjectSelected = $isProjectArea ? " class=\"selected\"" : "";

if ($LANGUAGE == 'de') {
    ?>
    <div id="download">
        <p>
            <a href="/includes/pdf/aka_profile.pdf">B&uuml;roprofil als PDF</a>
        </p>
    </div>
    <?php
}
//	echo "XXX" . $uri . "XXX";
?>
<ul class="navigation">
    <li>
        <ul class="first">
            <li<?php echo $isBueroSelected ?>><a href="/buero.php?lang=<?php echo $LANGUAGE ?>"><?php echo $translator->translate("nav.studio", $LANGUAGE); ?></a></li>
            <li<?php echo $isProjectSelected ?>>|&nbsp;<a href="/projekte/verwaltung/01/index.php?lang=<?php echo $LANGUAGE ?>"><?php echo $translator->translate("nav.projects", $LANGUAGE); ?></a></li>
        </ul>
        <?php
        if ($isBueroArea) {
            $isLeistungen = substr_count($uri, "/leistungen/") > 0 ? " class=\"selected\"" : "";
            $isDaten = substr_count($uri, "/daten/") > 0 ? " class=\"selected\"" : "";
            ?>
            <ul class="second">
                <li<?php echo $isLeistungen ?>><a href="/leistungen/index.php?lang=<?php echo $LANGUAGE ?>"><?php echo $translator->translate("nav.porfolio", $LANGUAGE); ?></a></li>
                <li<?php echo $isDaten ?>>|&nbsp;<a href="/daten/index.php?lang=<?php echo $LANGUAGE ?>"><?php echo $translator->translate("nav.data", $LANGUAGE); ?></a></li>
            </ul>
            <?php
            if ($deep > 1) {
                ?>
                <ul class="third">
                    <?php
                    if ($isLeistungen) {
                        $isArchitektur = substr_count($uri, "/index.php") > 0 ? " class=\"selected\"" : "";
                        $isCad = substr_count($uri, "/cad.php") > 0 ? " class=\"selected\"" : "";
                        $isKonzepte = substr_count($uri, "/konzepte.php") > 0 ? " class=\"selected\"" : "";
                        $isEnergie = substr_count($uri, "/energie.php") > 0 ? " class=\"selected\"" : "";
                        $isReferenzen = substr_count($uri, "/referenzen.php") > 0 ? " class=\"selected\"" : "";
                        $isStandpunkte = substr_count($uri, "/standpunkte.php") > 0 ? " class=\"selected\"" : "";
                        $architecture = $translator->translate("nav.architecture", $LANGUAGE);
                        $concept = ""; //$translator->translate("nav.concepts", $LANGUAGE);
                        $cad = $translator->translate("nav.cad", $LANGUAGE);
                        $engergy = $translator->translate("nav.energy", $LANGUAGE);
                        $references = $translator->translate("nav.references", $LANGUAGE);
                        $standpoint = $translator->translate("nav.standpoint", $LANGUAGE);

                        if ($architecture != '' && strpos($architecture, "{") === false) {
                            ?>
                            <li<?php echo $isArchitektur ?>><a href="/leistungen/index.php?lang=<?php echo $LANGUAGE ?>"><?php echo $architecture ?></a></li>
                            <?php
                        }
                        if ($concept != '' && strpos($concept, "{") === false) {
                            ?>
                            <li<?php echo $isKonzepte ?>>|&nbsp;<a href="/leistungen/konzepte.php?lang=<?php echo $LANGUAGE ?>"><?php echo $concept; ?></a></li>
                            <?php
                        }
                        if ($cad != '' && strpos($cad, "{") === false) {
                            ?>
                            <li<?php echo $isCad ?>>|&nbsp;<a href="/leistungen/cad.php?lang=<?php echo $LANGUAGE ?>"><?php echo $cad; ?></a></li>
                            <?php
                        }
                        if ($engergy != '' && strpos($engergy, "{") === false) {
                            ?>
                            <li<?php echo $isEnergie ?>>|&nbsp;<a href="/leistungen/energie.php?lang=<?php echo $LANGUAGE ?>"><?php echo $engergy; ?></a></li>
                            <?php
                        }
                        if ($references != '' && strpos($references, "{") === false) {
                            ?>
                            <li<?php echo $isReferenzen ?>>|&nbsp;<a href="/leistungen/referenzen.php?lang=<?php echo $LANGUAGE ?>"><?php echo $references; ?></a></li>
                            <?php
                        }
                        if ($standpoint != '' && strpos($standpoint, "{") === false) {
                            ?>
                            <li<?php echo $isStandpunkte ?>>|&nbsp;<a href="/leistungen/standpunkte.php?lang=<?php echo $LANGUAGE ?>"><?php echo $standpoint; ?></a></li>
                            <?php
                        }
                    } else if ($isDaten) {
                        $isAnfahrt = substr_count($uri, "/index.php") > 0 ? " class=\"selected\"" : "";
                        $isKontakt = substr_count($uri, "/kontakt.php") > 0 ? " class=\"selected\"" : "";
                        $isImpressum = substr_count($uri, "/impressum.php") > 0 ? " class=\"selected\"" : "";
                        $isInhaber = substr_count($uri, "/inhaber.php") > 0 ? " class=\"selected\"" : "";

                        $anfahrt = $translator->translate("nav.route", $LANGUAGE);
                        $contact = $translator->translate("nav.contact", $LANGUAGE);
                        $impressum = $translator->translate("nav.impressum", $LANGUAGE);
                        $inhaber = $translator->translate("nav.owner", $LANGUAGE);
                        $hasItems = false;

                        if ($anfahrt != '' && strpos($anfahrt, "{") === false) {
                            $hasItems = true;
                            ?>
                            <li<?php echo $isAnfahrt ?>><a href="/daten/index.php?lang=<?php echo $LANGUAGE ?>"><?php echo $anfahrt; ?></a></li>
                            <?php
                        }
                        if ($contact != '' && $LANGUAGE == 'de') {
                            $hasItems = true;
                            ?>
                            <li<?php echo $isKontakt ?>><?php if ($anfahrt != '') { ?>|&nbsp;<?php } ?><a href="/daten/kontakt.php?lang=<?php echo $LANGUAGE ?>"><?php echo $contact; ?></a></li>
                            <?php
                        }
                        if ($impressum != '' && strpos($impressum, "{") === false) {
                            $hasItems = true;
                            ?>
                            <li<?php echo $isImpressum ?>>|&nbsp;<a href="/daten/impressum.php?lang=<?php echo $LANGUAGE ?>"><?php echo $impressum; ?></a></li>
                            <?php
                        }
                        if ($inhaber != '' && strpos($inhaber, "{") === false) {
                            $hasItems = true;
                            ?>
                            <li<?php echo $isInhaber ?>>|&nbsp;<a href="/daten/inhaber.php?lang=<?php echo $LANGUAGE ?>"><?php echo $inhaber; ?></a></li>
                            <?php
                        }
                        if (!$hasItems) {
                            ?>
                            <li>&nbsp;</li>
                            <?php
                        }
                    }
                    ?>
                </ul>

                <?php
            }
        } else if ($isProjectArea) {
            $isVerwaltung = substr_count($uri, "/verwaltung/") > 0 ? " class=\"selected\"" : "";
            $isWohnen = substr_count($uri, "/wohnen/") > 0 ? " class=\"selected\"" : "";
            $isKultur = substr_count($uri, "/kultur/") > 0 ? " class=\"selected\"" : "";
            $isBauten = substr_count($uri, "/bauten/") > 0 ? " class=\"selected\"" : "";
            $isInnenraum = substr_count($uri, "/innenraum/") > 0 ? " class=\"selected\"" : "";
            $isDesign = substr_count($uri, "/design/") > 0 ? " class=\"selected\"" : "";
            ?>
            <ul class="second">
                <li<?php echo $isVerwaltung ?>><a href="/projekte/verwaltung/01/index.php?lang=<?php echo $LANGUAGE ?>"><?php echo $translator->translate("nav.office", $LANGUAGE); ?></a></li>
                <li<?php echo $isWohnen ?>>|&nbsp;<a href="/projekte/wohnen/01/index.php?lang=<?php echo $LANGUAGE ?>"><?php echo $translator->translate("nav.residental", $LANGUAGE); ?></a></li>
                <li<?php echo $isKultur ?>>|&nbsp;<a href="/projekte/kultur/01/index.php?lang=<?php echo $LANGUAGE ?>"><?php echo $translator->translate("nav.cultural", $LANGUAGE); ?></a></li>
                <li<?php echo $isBauten ?>>|&nbsp;<a href="/projekte/bauten/01/index.php?lang=<?php echo $LANGUAGE ?>"><?php echo $translator->translate("nav.public", $LANGUAGE); ?></a></li>
                <li<?php echo $isInnenraum ?>>|&nbsp;<a href="/projekte/innenraum/01/index.php?lang=<?php echo $LANGUAGE ?>"><?php echo $translator->translate("nav.innenraum", $LANGUAGE); ?></a></li>
                <li<?php echo $isDesign ?>>|&nbsp;<a href="/projekte/design/01/index.php?lang=<?php echo $LANGUAGE ?>"><?php echo $translator->translate("nav.design", $LANGUAGE); ?></a></li>
            </ul>
            <?php
            $typeName = "verwaltung";
            if ($isWohnen) {
                $typeName = "wohnen";
            } else if ($isKultur) {
                $typeName = "kultur";
            } else if ($isBauten) {
                $typeName = "bauten";
            } else if ($isInnenraum) {
                $typeName = "innenraum";
            } else if ($isDesign) {
                $typeName = "design";
            }

            // read all directories in this directory
            $dir = dir($ABSOLUTE_PATH . "projekte/" . $typeName);
            $counter = 0;
            while ($datei = $dir->read()) {
                if (is_numeric($datei)) {
                    $counter++;
                }
            }
            $dir->close();
            if ($counter > 0) {
                ?>
                <ul class="third">
                    <?php
                    // we need to iterate again because so we dont have the sort problem that 10 is before 2.
                    for ($i = 1; $i <= $counter; $i++) {
                        $partName = $i > 9 ? $i : "0" . $i;
                        $pipe = $i == 1 ? "" : "|&nbsp;";

                        $selected = "";
                        if (substr_count($uri, "/" . $partName . "/") > 0) {
                            $selected = " class=\"selected\"";
                        }
                        ?>
                        <li<?php echo $selected ?>><?php echo $pipe ?><a href="/projekte/<?php echo $typeName ?>/<?php echo $partName ?>/index.php?lang=<?php echo $LANGUAGE ?>"><?php echo $partName ?></a></li>
                        <?php
                    }
                    ?>
                </ul>
                <?php
            }
        }
        ?>
    </li>
</ul>
<ul class="langselector">
    <li>
        <br />&nbsp;
        <ul>
            <li class="de<?php
            if ($LANGUAGE == 'de') {
                echo " selected";
            }
            ?>"><a href="#">DE</a></li>
            <li class="en<?php
            if ($LANGUAGE == 'en') {
                echo " selected";
            }
            ?>">|&nbsp;<a href="#">EN</a></li>
            <li class="fr<?php
                if ($LANGUAGE == 'fr') {
                    echo " selected";
                }
                ?>">|&nbsp;<a href="#">FR</a></li>
        </ul>
    </li>
</ul>