<div id="footer">
    <?php
// check which part of projects we shown
    $thisRealPath = realpath("index.php");
// local
//$dataDir = str_replace("\index.php", "", $thisRealPath);
//$dataDir = str_replace("\\projekte\\", "\\data\\", $dataDir);
// live
    $dataDir = str_replace("/index.php", "", $thisRealPath);
    $dataDir = str_replace("/projekte/", "/data/", $dataDir);

//echo "<h1>XXX " . $dataDir . " XXX</h1>";
// read all directories in this directory
    $dir = dir($dataDir);
    $counter = 0;
    while ($datei = $dir->read()) {
        if (is_numeric($datei)) {
            $counter++;
        }
    }
    $dir->close();
    ?>
    <ul>
        <?php
// we need to iterate again because so we dont have the sort problem that 10 is before 2.
        for ($i = 1; $i <= $counter; $i++) {
            $selected = "";
            if ($i == 1) {
                $selected = " class=\"selected\"";
            }
            ?>
            <li id="projectsnav<?php echo $i ?>"<?php echo $selected ?>>&nbsp;&nbsp;</li>
            <?php
        }
        if ($counter > 1) {
            ?>
            <li class="paging">
                <img class="prev" src="../../../images/arrow_l.png" width="16" height="15" alt="<?php echo $translator->translate("footer.previous", $LANGUAGE) ?>" /><img class="next" src="../../../images/arrow_r.png" width="16" height="15" alt="<?php echo $translator->translate("footer.next", $LANGUAGE) ?>" />
            </li>
            <?php
        }
        ?>
    </ul>
    <script type="text/javascript">
        if (maxId != "undefined") {
            maxId = <?php echo $counter ?>;
        }
    </script>
    <span><img src="../../../images/footer_logo.jpg" width="42" height="14" alt="<?php echo $translator->translate("footer.icon", $LANGUAGE) ?>" /></span>
</div>
<?php require("google_analytics.php"); ?>