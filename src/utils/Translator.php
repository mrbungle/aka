<?php

class Translator {

    public static $LANG_DE = "de";
    public static $LANG_FR = "fr";
    public static $LANG_EN = "en";
    public static $ABSOLUTE_PATH = "";
    private static $_theData = NULL;
    private static $_instance = NULL;

    static public function getInstance() {
        if (self::$_instance === NULL) {
            self::$_instance = new self;
        }
        return self::$_instance;
    }

    public function translate($key, $language) {
        $out = "";

        if (self::$_theData === NULL) {
            self::$_theData = array();
            $fileName = self::$ABSOLUTE_PATH . "data/translation." . $language . ".aka";
            if (file_exists($fileName) && is_readable($fileName)) {
                $fh = fopen($fileName, 'r');
                while (!feof($fh)) {
                    self::$_theData[] = fgets($fh, 512);
                }
                fclose($fh);
            }
        }

        foreach (self::$_theData as $row => $value) {
            $pos = strpos($value, $key . "=");
            if ($pos > -1 && $pos < 1) {
                $translations = explode("=", $value);
                $out = $translations[1];
                break;
            }
        }

        // if no translation found return key in brackets
        if (empty($out)) {
            $out = "{" . $key . "}";
        }
        $out = utf8_encode($out);
        return $out;
    }

    public function setAbsolutePath($path) {
        self::$ABSOLUTE_PATH = $path;
    }

}

?>
