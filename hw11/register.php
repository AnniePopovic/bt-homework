<?php
if(isset($_GET['submit'])) {
    if (empty($_GET['ime'])) {
        echo "Ime nije definisano. <br>";
    } else { $ime=$_GET['ime'];
    } 
    if (empty($_GET['prezime'])) {
        echo "Prezime nije definisano. <br>";
    } else { $prezime=$_GET['prezime'];
    }
    if (!isset($_GET['pol'])) {
        echo "Pol nije obeležen. <br>";
    } else { $pol=$_GET['pol'];
    }
    if (empty($_GET['email'])) {
        echo "E-mail nije upisan. <br>";
    } else { $email=$_GET['email'];
    }
    if (empty($_GET['lozinka'])) {
        echo "Lozinka nije upisana. <br>";
    } else { $lozinka=$_GET['lozinka'];
    }
    if (empty($_GET['broj'])) {
        echo "Broj nije upisan. <br>";
    } else { $broj=$_GET['broj'];
    }
    if (!isset($_GET['kursevi'])) {
        echo "Niste obeležili nijedan kurs.";
    } else {
        $kursevi=implode(",", $_GET['kursevi']);  
        }
    if ( (!empty($_GET['ime'])) && (!empty($_GET['prezime'])) && (isset($_GET['pol'])) && (!empty($_GET['email'])) && (!empty($_GET['lozinka'])) && (!empty($_GET['broj'])) && (isset($_GET['kursevi'])) )
    {
    echo "$pol $ime $prezime, <br>
    Uspešno ste se registrovali na naš sajt. <br>
    Vaša lozinka je: $lozinka <br>
    Vaš username je: $email <br>
    Vaši odabrani kursevi su: $kursevi. <br>
    Vaš broj telefona je: $broj.";
    }
    
}
?>