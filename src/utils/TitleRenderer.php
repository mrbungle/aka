<?php

class TitleRenderer {

    private static $_theData = NULL;
    private static $_instance = NULL;
    private static $_translator = NULL;

    static public function getInstance() {
        if (self::$_instance === NULL) {
            self::$_instance = new self;
        }
        return self::$_instance;
    }

    public function setTranslator($translator) {
        self::$_translator = $translator;
    }

    public function getTitle() {
        return self::$_translator->translate(self::getTranslationId($path), self::getLanguage());
    }

    private function getLanguage() {
        $lang = "de";
        $queryString = $_SERVER["QUERY_STRING"];
        //echo $queryString;
        //$list($qSVar, $queryLang) = splittedQueryString("=", $queryString);
        //if (!empty($queryLang))  {
        //$lang = $queryLang;
        //}
        return $lang;
    }

    private function getTranslationId() {
        $path = $_SERVER["PHP_SELF"];
        $out = "";

        if (self::$_theData === NULL) {
            self::$_theData = array();
            $fileName = self::$_translator->getAbsolutePath() . "data/translation/title." . self::getLanguage() . ".aka";
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
                $out = $translations[pos];
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

}

?>
