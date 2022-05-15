<?php

function izračunaj($ukupnoGorivo,$potrošnjaPoKamionu,$ostatakGorivaFlag=false) {
     $brojKamiona=$ukupnoGorivo/$potrošnjaPoKamionu;
     if ($ostatakGorivaFlag==true) {
        $ostatakGoriva=$ukupnoGorivo%$potrošnjaPoKamionu;
        return "Ostatak goriva je $ostatakGoriva. <br>";
     } else return "Broj kamiona je " . floor($brojKamiona). "<br>" ;
}

$ukupnoGorivo=200;
$potrošnjaPoKamionu= 26;
echo izračunaj($ukupnoGorivo,$potrošnjaPoKamionu);
$ukupnoGorivo=200;
$potrošnjaPoKamionu= 26;
$ostatakGorivaFlag=true;
echo izračunaj($ukupnoGorivo,$potrošnjaPoKamionu,$ostatakGorivaFlag);
?>