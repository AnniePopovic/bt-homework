<?php
/* Prvi zadatak */
$hwArray = ["Pera", "Milka", "Pera", "Sonja", "Danilo", "Marica", "Ivica", "Sonja", "Vanja", "Mira"];
/* a) */
if(in_array("Aleksandra",$hwArray, true)) {
    echo "Ime već postoji.";
} else {
    array_push($hwArray, "Aleksandra");
}
print_r($hwArray); echo "<br>";
/* b) */
if(in_array("Greta", $hwArray, true)) {
    echo "Ime već postoji.";
} else {
    array_splice($hwArray,2,0,"Greta");
}
print_r($hwArray); echo "<br>";
/* c) */
echo "Ima " . count($hwArray) . " učenika. <br>";
/* d) */
array_unshift($hwArray, "Milica");
print_r($hwArray); echo "<br>";
/* e) */
array_splice($hwArray,6,1);
print_r($hwArray); echo "<br>";
/* f) */
$hwArray= array_unique($hwArray, SORT_STRING);
print_r($hwArray); echo "<br>";

/* Drugi zadatak */
$data = array (
    array (
        "name" => "Pera",
        "last_name" => "Peric",
        "age" => "28",
        "gender" => "male",
        "avg_rating"=> "7.5",
        "married" => "false",
        "courses" => ["laravel", "react", "jQuery"]
    ),
    array (
        "name" => "Milica",
        "last_name" => "Panić",
        "age" => "25",
        "gender" => "female",
        "avg_rating"=> "6.5",
        "married" => "false",
        "courses" => ["laravel", "react", "html"]
    ),
    array (
        "name" => "Darko",
        "last_name" => "Petrović",
        "age" => "29",
        "gender" => "male",
        "avg_rating"=> "8.5",
        "married" => "false",
        "courses" => ["laravel", "css", "jQuery"]
    ),
    array (
        "name" => "Jana",
        "last_name" => "Koprivica",
        "age" => "20",
        "gender" => "female",
        "avg_rating"=> "7.5",
        "married" => "false",
        "courses" => ["laravel", "php", "jQuery"]
    ),
    array (
        "name" => "Danica",
        "last_name" => "Sekulic",
        "age" => "23",
        "gender" => "female",
        "avg_rating"=> "4.5",
        "married" => "false",
        "courses" => ["C++", "react", "jQuery"]
    )
    );
foreach($data as $ključ => $niz) {
        echo "$niz[name] $niz[last_name] ima $niz[age] godina i ";
        if ($niz["gender"]==="female") {
           if ($niz["married"]==="false") {
               echo "nije udata.";
           } else "udata je.";
        } else {
            if ($niz["married"]==="false") {
                echo "nije oženjen.";
            } else "oženjen je.";
        }
       echo " Ima prosečnu ocenu $niz[avg_rating], a kurseve koje trenutno sluša su: " . join(", ", $niz["courses"]) . ". <br>";
    }
    
?>