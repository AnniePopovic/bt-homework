<?php
function površina ($x,$y) {
    $p=$x*$y;
    return $p;
}
if (is_numeric($_GET["šz"]) && !empty($_GET["šz"]) &&
is_numeric($_GET["vz"]) && isset($_GET["vz"]) &&
is_numeric($_GET["šp"]) && isset($_GET["šp"]) &&
is_numeric($_GET["vp"]) && isset($_GET["vp"])) {
if ($_GET["šz"]==0 ||
$_GET["vz"]==0 ||
$_GET["šp"]==0 ||
$_GET["vp"]==0) {
    echo "Stranica ne može biti nula.";
} else {
    $širina_zida=$_GET["šz"];
$visina_zida=$_GET["vz"];
$širina_pločica=$_GET["šp"];
$visina_pločica=$_GET["vp"];

$površina_zida = površina($širina_zida,$visina_zida);
$površina_pločica= površina ($širina_pločica,$visina_pločica);
$brojp= $površina_zida / $površina_pločica;
echo $brojp;
} 
} else {
    echo "Neispravni unos.";
}
?>