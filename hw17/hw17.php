<?php

//
//* This function returns a filtered array
//*@param array $users, mixed $searchContent
function search_users($users, $searchContent="") {
    $noviusers=array();
    foreach ($users as $ključ => $user) {
        foreach ($user as $key=>$element)
            if (stripos($element,$searchContent) == true || $element == $searchContent) {
                $noviusers[]=$user;
            } 
        } 
        if (!empty($noviusers)) {
        return $noviusers;
        } else return "Nije pronađen zahtev.";
}
// Provera
$podaci = array (
    array (
        "name" => "Pera",
        "last_name" => "Perić",
        "img" => "https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
    ),
    array (
        "name" => "Mitar",
        "last_name" => "Mirić",
        "img" => "https://images.pexels.com/photos/1043471/pexels-photo-1043471.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
    ),
    array (
        "name" => "Anđela",
        "last_name" => "Koprivica",
        "img" => "https://images.pexels.com/photos/2726111/pexels-photo-2726111.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
    )
    );
print_r(search_users($podaci, "Pera")); echo "<br>";
print_r(search_users($podaci, "ić")); echo "<br>";
print_r(search_users($podaci, "@"));
?>