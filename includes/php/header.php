<?php
$uri = $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="Content-Style-Type" content="text/css" />
        <title>Alexander Kraus Architektur - Ihr Architekt in Dortmund und Umgebung</title>
        <meta http-equiv="Content-Script-Type" content="text/javascript" />
        <meta http-equiv="imagetoolbar" content="no" />
        <meta name="keywords" content="architekt, architekten, architektensuche, architektenwettbewerb, architektur, architekturb&uuml;ro,  baukunst, baukultur,  b&uuml;roraumplanung, b&uuml;rofl&auml;chenplanung,  innenarchitekt, innenarchitekten, innenarchitektur, innenarchitekturb&uuml;ro,  store-design, corporate identity, corporate architecture,  wohnungsbau, gewerbebau, verwaltungsbau,  design, objektdesign,  entwerfen, entwerfer, entwurf, entwurfsplanung,  gestalten, gestalter, gestaltung,  planer, planung, planungsb&uuml;ro,  innenraumplanung, hochbau, hochbauplanung,  stadtplaner, stadtplanung, st&auml;dtebau,  bochum, dortmund, essen, duisburg, unna, hamm, arnsberg, ruhrgebiet, wettbewerb, wettbewerbe, wettbewerbsbeitrag, wettbewerbsteilnahme,  dortmunder u, u-turm, u2021" />
        <meta name="description" content="Architekturb&uuml;ro Alexander Kraus Architektur - Ihr Architekt in Dortmund und Umgebung. " />
        <link rel="shortcut icon" href="/favicon.ico" />
        <script type="text/javascript" src="/includes/js/jquery-1.2.1.min.js"></script>
        <script type="text/javascript" src="/includes/js/jquery.dimensions.js"></script>
        <script type="text/javascript" src="/includes/js/jquery.mousewheel.min.js"></script>
        <script type="text/javascript" src="/includes/js/jScrollPane.min.js"></script>
        <script type="text/javascript" src="/includes/js/global.js"></script>
        <script type="text/javascript" src="/includes/js/setLanguageAndRefreshs.js"></script>
        <?php
        if (substr_count($uri, "/standpunkte.php") > 0) {
            ?>
            <script type="text/javascript" src="/includes/js/standpunkt.js"></script>
            <?php
        } else if (substr_count($uri, "projekte/") > 0) {
            ?>
            <script type="text/javascript" src="/includes/js/project.js"></script>
            <?php
        }
        ?>
        <link rel="stylesheet" type="text/css" media="all" href="/includes/css/jScrollPane.css" />
        <link rel="stylesheet" href="/includes/css/screen.css" type="text/css" media="print, projection, screen" />
        <!--[if IE]>
        <link rel="stylesheet" href="/includes/css/ie.css" type="text/css" media="print, projection, screen" />
        <![endif]-->
        <!--[if IE 6]>
        <link rel="stylesheet" href="/includes/css/ie6.css" type="text/css" media="print, projection, screen" />
        <![endif]-->
    </head>