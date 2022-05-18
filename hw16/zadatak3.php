<?php
function DaLiPostojiKljuč($ključ,$niz) {
    foreach($niz as $indeks=>$element) {
        if ($ključ===$indeks) {
            return true;
        } else return false;
    }
}

$array= array("ime" => "Pera","drugo ime" => "Mika", "treće ime" => "Žika");
var_dump(DaLiPostojiKljuč("ime", $array));
?>