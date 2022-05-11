<?php
$broj_dana=""; //n
$visina_drveta=100; //100
$rast_drva_za_dan=1; // x
$rast_puta_puža_za_dan=3; // y

// n*y=100*x+n*x -> n=(100*x+n*x)/y -> n=((100*x)/y)+((n*x)/y) -> n - ((n*x)/y)=((100*x)/y)
// proširimo n da ima isti delilac dole y -> n=(n*y)/y
// ((n*y)/y) - ((n*x)/y) = ((100*x)/y) kratimo ove y dole jer je svima isti delilac
// n*(y-x)=100*x -> n = (100*x)/(y-x) i to je konačna formula za broj dana koji je potreban da se puž popne na drvo

$broj_dana=($visina_drveta*$rast_drva_za_dan)/($rast_puta_puža_za_dan-$rast_drva_za_dan);
echo "Pužu je potrebno $broj_dana dana da se popne na drvo. <br>";

$visina_drveta_na_kraju=$visina_drveta+$broj_dana;
$a=$rast_puta_puža_za_dan;
$b=$visina_drveta+$rast_drva_za_dan;

$i=1;
for ($i=1, $a, $b; $i<=50, $a<$visina_drveta_na_kraju,$b<=$visina_drveta_na_kraju; $i++,$a+=3,$b++) {
echo "Dan $i: Puž je prešao $a cm, visina drveta je $b cm. <br>";
}

?>