<?php
    if ((empty($_GET["dan"])) && (empty($_GET["mesec"])) && (empty($_GET["godina"]))) {
        die("Niste uneli nijednu varijablu.");
    } else {
    if (empty($_GET["dan"])) {
        die ("Niste uneli dan! <br>");
    }
    if (empty($_GET["mesec"])) {
        die ("Niste uneli mesec! <br>");
    }
    if (empty($_GET["godina"])) {
        die ("Niste uneli godinu. <br>");
    }
    }

    if(is_numeric($_GET["dan"]) && $_GET["dan"]>0 && $_GET["dan"]<=31) {
        $dan=$_GET["dan"];
    } else die("Uneta varijabla \"Dan\" nije validna.");

    if (($_GET["mesec"] > 0 && $_GET["mesec"] <= 12) || 
        strtolower($_GET["mesec"]) == "januar" ||
        strtolower($_GET["mesec"]) == "februar" ||
        strtolower($_GET["mesec"]) == "mart" ||
        strtolower($_GET["mesec"]) == "april" ||
        strtolower($_GET["mesec"]) == "maj" ||
        strtolower($_GET["mesec"]) == "jun" ||
        strtolower($_GET["mesec"]) == "jul" ||
        strtolower($_GET["mesec"]) == "septembar" ||
        strtolower($_GET["mesec"]) == "oktobar" ||
        strtolower($_GET["mesec"]) == "novembar" ||
        strtolower($_GET["mesec"]) == "decembar") {
        $mesec=$_GET["mesec"];
    } else die("Uneta varijabla \"Mesec\" nije validna."); 

    if (($mesec == "februar" || $mesec == "2") && $dan>29) {
        die("Mesec februar ne može imati više od 29 dana.");
    } else if (($mesec == "april" || $mesec == "4") && $dan>30) {
        die ("Mesec april ne može imati više od 30 dana.");
    } else if (($mesec == "jun" || $mesec == "6") && $dan>30) {
        die ("Mesec jun ne može imati više od 30 dana.");
    } else if (($mesec == "septembar" || $mesec == "9") && $dan>30) {
        die ("Mesec septembar ne može imati više od 30 dana.");
    } else if (($mesec == "novembar" || $mesec == "11") && $dan>30) {
        die ("Mesec novembar ne može imati više od 30 dana.");
    }

    if (is_numeric($_GET["godina"]) && strlen($_GET["godina"])==4 && $_GET["godina"]>=1970) {
        $godina=$_GET["godina"];
    } else die("Uneti broj za varijablu \"Godina\" nije validan.");

    echo "Upisali ste validan datum: $dan. $mesec. $godina."
    
?>