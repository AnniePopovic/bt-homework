<?php
function DaLiPostojiKljuč($ključ,$niz) {
    foreach($niz as $indeks=>$element) {
         $postoji=false;
        if ($ključ===$indeks) {
            $postoji=true;
        } 
        if ($postoji==true) {
            return "Ključ postoji.";
        } else "Ključ ne postoji.";
    }  
}

$array= array("ime" => "Pera","drugo" => "Mika", "treće" => "Žika");
echo DaLiPostojiKljuč("drugo", $array);
?>