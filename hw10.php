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

    // Zadatak 2 //
    $random_dan=array("Ponedeljak","Utorak","Sreda","Četvrtak","Petak","Subota","Nedelja");
    $izabrani=$random_dan[array_rand($random_dan,1)];
    $izabrani=mb_strtolower($izabrani, 'UTF-8');
    echo "Danas je $izabrani!";
    echo "<br>";

    // Zadatak 3 //
    $a=1;
    $b=3;
    $c=10;
    $d=$a+$b+$c;
    echo "Zbir brojeva $a, $b i $c je $d.";
    echo "<br>";
    $random_dan=mt_rand(0,6);
    if ($random_dan==0) {
        echo "Danas je ponedeljak!";
    } elseif ($random_dan==1) {
        echo "Danas je utorak!";
    } elseif ($random_dan==2) {
        echo "Danas je sreda!";
    } elseif ($random_dan==3) {
        echo "Danas je četvrtak!";
    }
    elseif ($random_dan==4) {
        echo "Danas je petak!";
    }
    elseif ($random_dan==5) {
        echo "Danas je subota!";
    } elseif ($random_dan==6) {
        echo "Danas je nedelja!";
    }
    ?>
</html>