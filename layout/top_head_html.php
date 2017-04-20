<head>

    <?php
        $a_prefix = $_SERVER['CONTEXT_PREFIX'];
        if ($a_prefix == '')
            $a_prefix = "/";
        echo "<link href='" . $a_prefix  . "css/main.css' type='text/css' rel='stylesheet' />";
        echo "<script src='" . $a_prefix  . "scripts/jquery-3.2.1.min.js' ></script>";
    ?>

</head>

<?php
/**
 * Created by PhpStorm.
 * User: Rober
 * Date: 3/30/2017
 * Time: 12:50 PM
 */