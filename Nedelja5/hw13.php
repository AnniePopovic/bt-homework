<?php
/* Pravougaonik bazen */
$a=10;
$b=5;
function površina_pravougaonika($x,$y) {
    return $z=$x*$y;
}
echo "Površina pravougaonika je " . površina_pravougaonika($a,$b) . " centimetara kvadratnih. <br>";
/*Krug bazen*/

$poluprečnik_kruga=10;
function površina_kruga($x) {
    $površina=($x**2)*pi();
    $površina=floatval(number_format($površina,2));
    return $površina;
}
echo "Površina kruga je " . površina_kruga($poluprečnik_kruga) . " centimetara kvadratnih. <br>";

/* Treći bazen */
$c=10;
$d=6;
function površina_bazena($x,$y) {
    $poluprečnik=$y/2;
    $str_prav=$x-$poluprečnik;
    $pravougaonik=površina_pravougaonika($str_prav,$y);
    $p_celog_kruga=površina_kruga($poluprečnik);
    $p_polukruga=$p_celog_kruga/2;
    $p_bazena=$pravougaonik+$p_polukruga;
    $p_bazena=floatval(number_format($p_bazena,2));
    return $p_bazena;
}

echo "Površina bazena je " . površina_bazena($c,$d) . " centimetara kvadratnih. <br>";
?>