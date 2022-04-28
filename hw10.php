<html>
    <?php 
    // Zadatak 1 //
    $a=200;
    $b=80;
    $c=$a+$b;
    $d=$a-$b;
    $e=$a*$b;
    $f=$a/$b;
    echo $c; echo "<br>";
    echo $d; echo "<br>";
    echo $e; echo "<br>";
    echo $f; echo "<br>";
    // Zadatak 1 na drugi način //
    $num1=200.0;
    $num2=80.0;
    $sabirak=bcadd($num1,$num2);
    $razlika=bcsub($num1,$num2);
    $proizvod=bcmul($num1,$num2);
    $količnik=bcdiv($num1,$num2,1);
    echo $sabirak; echo "<br>";
    echo $razlika; echo "<br>";
    echo $proizvod; echo "<br>";
    echo $količnik; echo "<br>";


    // Zadatak 2 //
    $random_dan=array("Ponedeljak","Utorak","Sreda","Četvrtak","Petak","Subota","Nedelja");
    $izabrani=$random_dan[array_rand($random_dan,1)];
    $izabrani=mb_strtolower($izabrani, 'UTF-8');
    echo "Danas je $izabrani!";
    echo "<br>";
    // Zadatak 2 na drugi način //
    $dan=mt_rand(0,6);
    if ($dan==0) {
        echo "Danas je ponedeljak!";
    } else if ($dan==1) {
        echo "Danas je utorak!";
    } else if ($dan==2) {
        echo "Danas je sreda!";
    } else if ($dan==3) {
        echo "Danas je četvrtak!";
    } else if ($dan==4) {
        echo "Danas je petak!";
    } else if ($dan==5) {
        echo "Danas je subota!";
    } else if ($dan==6) {
        echo "Danas je nedelja!";
    }
    echo "<br>";

    // Zadatak 3 //
    $a=1;
    $b=3;
    $c=10;
    $d=$a+$b+$c;
    echo "Zbir brojeva $a, $b i $c je $d.";
    echo "<br>";
    //Zadatak 3 na drugi način //
    $num1=1;
    $num2=3;
    $num3=10;
    $niz_brojeva=array($num1,$num2,$num3);
    $rezultat=array_sum($niz_brojeva);
    echo "Zbir brojeva $num1, $num2 i $num3 je $rezultat.";
    ?>
</html>