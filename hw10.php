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
    ?>
</html>