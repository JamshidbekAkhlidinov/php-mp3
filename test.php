<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use jamshidbekakhlidinov\PHPMP3;

include "./vendor/autoload.php";

$path = 'music.mp3';
$mp3 = new PHPMP3($path);
$path2 = $mp3->extract(40,30);

$path2->save('data/name.mp3');

?>
