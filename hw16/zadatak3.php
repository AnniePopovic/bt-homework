<?php
function DaLiPostojiKljuč($ključ,$niz) {
    foreach($niz as $indeks=>$element) {
<<<<<<< HEAD
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
=======
        if ($ključ===$indeks) {
            return true;
        } else return false;
    }
}

$array= array("ime" => "Pera","drugo ime" => "Mika", "treće ime" => "Žika");
var_dump(DaLiPostojiKljuč("ime", $array));
>>>>>>> 2c3a61e1d48e33aa040a218a57030ca5e68d560b
?>