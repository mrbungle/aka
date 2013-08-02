<div id="footer">
    <ul>
        <?php
        // read all directories in this directory
        $dir = dir($ABSOLUTE_PATH . "data/leistungen/standpunkte");
        $counter = 0;
        while ($datei = $dir->read()) {
            //todo: how to check if is directory??? if (is_dir($datei)) {
            if (is_numeric($datei)) {
                $counter++;
            }
            //}
        }
        $dir->close();

        // we need to iterate again because so we dont have the sort problem that 10 is before 2.
        for ($i = 1; $i <= $counter; $i++) {
            $selected = "";
            if ($i == 1) {
                $selected = " class=\"selected\"";
            }
            ?>
            <li id="standortenav<?php echo $i ?>"<?php echo $selected ?>>&nbsp;&nbsp;</li>
            <?php
        }
        ?>
        <li class="paging">
            <img class="prev" src="../../images/arrow_l.png" width="16" height="15" alt="<?php echo $translator->translate("footer.previous", $LANGUAGE) ?>" /><img class="next" src="../../images/arrow_r.png" width="16" height="15" alt="<?php echo $translator->translate("footer.next", $LANGUAGE) ?>" />
        </li>
    </ul>
    <span><img src="../../images/footer_logo.jpg" width="42" height="14" alt="<?php echo $translator->translate("footer.icon", $LANGUAGE) ?>" /></span>
</div>
<script type="text/javascript">
    if (maxId != "undefined") {
        maxId = <?php echo $counter ?>;
    }
</script>
<?php require("google_analytics.php"); ?>