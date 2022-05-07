<?php
$težina=$_GET["težina"];
$faktor_aktivnosti=$_GET["fa"];
$faktor_starosti=$_GET["starost"];
if ($faktor_aktivnosti==="programer" || $faktor_aktivnosti==="administrativni radnik" || $faktor_aktivnosti==="menadzer") {
    $faktor_aktivnosti=100; 
} else if ($faktor_aktivnosti==="policajac" || $faktor_aktivnosti=="vojnik") {
    $faktor_aktivnosti=200;
} else if ($faktor_aktivnosti==="sportista") {
    $faktor_aktivnosti=300;
} else { $faktor_aktivnosti=150;
}
if ($faktor_starosti > 0 && $faktor_starosti <= 3) {
    $faktor_starosti=1.9;
} else if ($faktor_starosti >= 4 && $faktor_starosti <= 10) {
    $faktor_starosti=1.5;
} else if ($faktor_starosti >= 11 && $faktor_starosti <= 18) {
    $faktor_starosti=1.2;
} else if ($faktor_starosti >= 19 && $faktor_starosti <= 26) {
    $faktor_starosti=1;
} else if ($faktor_starosti >= 27 && $faktor_starosti <= 30 || $faktor_starosti >= 50 && $faktor_starosti <= 60) {
    $faktor_starosti=0.8;
} else if ($faktor_starosti >= 31 && $faktor_starosti <= 35 || $faktor_starosti >= 45 && $faktor_starosti <= 49) {
    $faktor_starosti=0.7;
} else if ($faktor_starosti >= 36 && $faktor_starosti <= 44 || $faktor_starosti > 60) {
    $faktor_starosti=0.6;
}
$maxkal=$težina*$faktor_aktivnosti*$faktor_starosti;
echo $maxkal;
?>