<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 28/01/2019
 * Time: 15:39
 */

require "classes/StrUtilsCorrection.php";

$utils = new StrUtilsCorrection("Salut à tous");

Echo "Bold : ".$utils->bold();

Echo "<br><br>";

Echo "Italic : ".$utils->italic();

Echo "<br><br>";

Echo "Underline : ".$utils->underline();

Echo "<br><br>";

Echo "Capitalize : ".$utils->capitalize();

Echo "<br><br>";

Echo "Bold, Italic, Underline, Capitalize : ".$utils->uglify();