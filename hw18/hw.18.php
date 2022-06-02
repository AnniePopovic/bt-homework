<?php

// Zadatak 30.06.2022. //
abstract class Contact {
    public $phone;
    public $email;

    public function setPhone($phone) {
        $this->phone=$phone;
    }
    public function setEmail($email) {
        $this->email=$email;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getPhone() {
        return $this->phone;
    }
    public function contains($text="") {
        if (stripos($this->phone,$text) !==false || stripos($this->email,$text) !==false) {
            return true;
        } else return false;
    }

    public function displayMe() {
        echo "Broj telefona je: " . $this->phone . ", a email: " .  $this->email . "<br>";
    }
}

$contact1= new CustomerContact();
$contact1->setPhone("064123456");
$contact1->setEmail("bootcamp@gmail.com");

$contact2 = new BusinessContact ();
$contact2->setPhone("064987456");
$contact2->setEmail("it@gmail.com");

$contact3 = new CustomerContact ();
$contact3->setPhone("064555555");
$contact3->setEmail("php@gmail.com");
/*echo $contact1->__toString();*/
var_dump($contact3->contains("php")); echo"<br>";


class ContactList {
    protected $contacts=array();
    public $contact;

    public function setContact($contact) {
        $this->contact=$contact;
    }
    public function getContact() {
        return $this->contact;
    }
   
    public function setContacts($contacts) {
        $this->contacts[]=$contacts;
    }
    public function getContacts() {
        return $this->$contacts;
    }
    public function addContact($contact) {
        if ($this->contact instanceof Contact) {
        $this->contacts[]=$this->contact;
        }
    }

    public function ListAllContacts() {
        foreach($this->contacts as $this->contact)
        echo $this->contact->displayMe();
    }
}

$KontaktLista= new ContactList();
$KontaktLista->setContact($contact1);
$KontaktLista->addContact($contact1);
$KontaktLista->setContact($contact2);
$KontaktLista->addContact($contact2);
$KontaktLista->setContact($contact3);
$KontaktLista->addContact($contact3);
$KontaktLista->ListAllContacts();
echo "<br>";
// Ostatak zadatka 31.06.2022. //

class CustomerContact extends Contact {
    protected $firstName;
    protected $lastName;
    
    public function SetfirstName($firstName) {
        $this->firstName=$firstName;
    }

    public function GetfirstName() {
        return $this->firstName;
    }

    public function SetlastName($lastName) {
        $this->lastName=$lastName;
    }

    public function GetlastName() {
        return $this->lastName;
    }

    public function displayMe() {
         echo $this->firstName . " " . $this->lastName . ". Broj telefona je: " . $this->phone . ", a email: " .  $this->email . "<br>";
    }

}

$kupac1=new CustomerContact();
$kupac1->SetfirstName("Mika");
$kupac1->SetlastName("Petrović");
$kupac1->setPhone("018999777");
$kupac1->setEmail("mikapetrovic@gmail.com");

$kupac2=new CustomerContact();
$kupac2->SetfirstName("Žika");
$kupac2->SetlastName("Petrović");
$kupac2->setPhone("021999777");
$kupac2->setEmail("žikapetrovic@gmail.com");


class BusinessContact extends Contact {
    protected $address;
    protected $companyName;

    public function Setaddress($address) {
        $this->address=$address;
    }

    public function Getaddress() {
        return $this->address;
    }

    public function SetcompanyName($companyName) {
        $this->companyName=$companyName;
    }

    public function GetcompanyName() {
        return $this->companyName;
    }

    public function displayMe() {
        echo $this->companyName . " " . $this->address . ". Broj telefona je: " . $this->phone . ", a email: " .  $this->email . "<br>";
    }
}

$kompanija1=new BusinessContact();
$kompanija1->Setaddress("Voždova 1");
$kompanija1->SetcompanyName("IT Bootcamp");
$kompanija1->setPhone("011555666");
$kompanija1->setEmail("itbootcamp@gmail.com");

$kompanija2=new BusinessContact();
$kompanija2->Setaddress("Voždova 2");
$kompanija2->SetcompanyName("Neki Tamo Bootcamp");
$kompanija2->setPhone("022555666");
$kompanija2->setEmail("nekitamobootcamp@gmail.com");

$KontaktLista->setContact($kupac1);
$KontaktLista->addContact($kupac1);
$KontaktLista->setContact($kupac2);
$KontaktLista->addContact($kupac2);
$KontaktLista->setContact($kompanija1);
$KontaktLista->addContact($kompanija1);
$KontaktLista->setContact($kompanija2);
$KontaktLista->addContact($kompanija2);
$KontaktLista->ListAllContacts();
?>