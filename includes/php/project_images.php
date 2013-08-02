<?php
// check which part of projects we shown
$fileNameWithServerPath = $_SERVER["PHP_SELF"];
$fileNameWithAbolutePath = $_SERVER["SCRIPT_FILENAME"];

/*
  $keys = array(
  "PATH_INFO",
  "PATH_TRANSLATED",
  "PHP_SELF",
  "REQUEST_URI",
  "SCRIPT_FILENAME",
  "SCRIPT_NAME",
  "QUERY_STRING"
  );

  $info_row = "<tr><td>$_SERVER[SERVER_SOFTWARE]</td><td></td><td></td>\n";
  print "Path Information for $_SERVER[SERVER_SOFTWARE]\n\n";

  foreach($keys as $key) {
  print '$_SERVER["'.$key.'"] = '.$_SERVER[$key]."\n";
  $info_row .= "<td>$_SERVER[$key]</td>\n";
  }

  print '__FILE__ = '. __FILE__;
  $info_row .= "<td>".__FILE__."</td>\n</tr>";

  print "\n\n\n" . $info_row;
 */
// local
//$dataDir = str_replace("\index.php", "", $thisRealPath);
//$dataDir = str_replace("\\projekte\\", "\\data\\", $dataDir);
//
// live
$dataDir = str_replace("/index.php", "", $fileNameWithAbolutePath);
$dataDir = str_replace("/projekte/", "/data/", $dataDir);

//echo "<h1>XXX Datadir: " . $dataDir . " XXX</h1>";

$imageDir = str_replace("/index.php", "", $fileNameWithServerPath);
//echo "<h1>XXX ImageDir: " . $imageDir . " XXX AbsolutePath: " . $ABSOLUTE_PATH . " XXX</h1>";
$imageDir = str_replace("/projekte/", "/images/projekte/", $imageDir);

//echo "<h1>XXX ImageDir: " . $imageDir . " XXX</h1>";

$thumbsAltTextPropertyPrefix = str_replace("/index.php", "", $fileNameWithServerPath);
$thumbsAltTextPropertyPrefix = str_replace("/", ".", $thumbsAltTextPropertyPrefix);

//echo "<h1>XXX " . $thumbsAltTextPropertyPrefix . " XXX</h1>";
// read all directories in this directory
$dir = dir($dataDir);
$counter = 0;
while ($datei = $dir->read()) {
    if (is_numeric($datei)) {
        $counter++;
    }
}
$dir->close();
// echo "<h1>" . $counter . "</h1>"
?>
<li class="thumbs">
    <div>
        <?php
// we need to iterate again because so we dont have the sort problem that 10 is before 2.
        for ($i = 1; $i <= $counter; $i++) {
            $selected = "";
            if ($i == 1) {
                $selected = " class=\"selected\"";
            }
            ?>
            <div id="projectsnav<?php echo $i ?>"><img src="<?php echo $imageDir ?>/<?php echo $i ?>_thumb.jpg" alt="" width="105" height="70"<?php echo $selected ?> /></div>
            <?php
        }
        ?>
    </div>
</li>
<li class="image">
    <img src="<?php echo $imageDir ?>/1.jpg" alt="<?php echo $projectImageAltText ?>" height="398" />
</li>
