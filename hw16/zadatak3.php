<?php
function DaLiPostojiKljuč($ključ,$niz) {
    $postoji=false;
    foreach($niz as $indeks=>$element) {
        if ($ključ===$indeks) { 
            $postoji=true;
        }
    }
    return $postoji;
}

$array= array("ime" => "Pera","drugo" => "Mika", "treće" => "Žika");
var_dump(DaLiPostojiKljuč("drugo" , $array)); echo "<br>";
var_dump(DaLiPostojiKljuč("četvrto", $array));
        
?>