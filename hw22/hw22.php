<?php

$host="localhost";
$username="root";
$password="";
$dbName="test";
    
$dsn="mysql:host=$host;dbname=$dbName";
$pdo=new PDO($dsn,$username,$password);
$pdo->setAttribute(PDO::FETCH_ASSOC,PDO::ATTR_ERRMODE);
    
$data= [
    ["Milena","milena123","milena@gmail.com",  date("Y-m-d h:i:s",strtotime("now")) , date("Y-m-d h:i:s",strtotime("now"))],
    ["Miljana","miljana123","miljana@gmail.com", date("Y-m-d h:i:s",strtotime("now")), date("Y-m-d h:i:s",strtotime("now"))],
    ["Milica","milica123","milica@gmail.com", date("Y-m-d h:i:s",strtotime("now")), date("Y-m-d h:i:s",strtotime("now"))],
    ["Nikola","nikola123","nikola@gmail.com", date("Y-m-d h:i:s",strtotime("now")), date("Y-m-d h:i:s",strtotime("now"))],
    ["Sasa","sasa123","sasa@gmail.com", date("Y-m-d h:i:s",strtotime("now")), date("Y-m-d h:i:s",strtotime("now"))],
    ["Dragan","dragan123","dragan@gmail.com", date("Y-m-d h:i:s",strtotime("now")), date("Y-m-d h:i:s",strtotime("now"))],
    ["Zika","zika123","zika@gmail.com", date("Y-m-d h:i:s",strtotime("now")), date("Y-m-d h:i:s",strtotime("now"))],
    ["Selena","selena123","selena@gmail.com", date("Y-m-d h:i:s",strtotime("now")), date("Y-m-d h:i:s", strtotime("now"))],
    ["Magdalena","magdalena123","magdalena@gmail.com", date("Y-m-d h:i:s",strtotime("now")), date("Y-m-d h:i:s",strtotime("now"))]
];

$stmt=$pdo->prepare("INSERT INTO users (name,password,email,email_verified_at,created_at) VALUES(?,?,?,?,?)");
$pdo->beginTransaction();
foreach ($data as $row) {
    $stmt->execute($row);
}
$pdo->commit();

$stmt1=$pdo->query("SELECT * FROM users");
while ($red = $stmt1->fetch()) {
    echo $red["name"] . "<br>";
}

// Kada bi unos bio pogrešan
try{
    $pogrešankorisnik= [
        ["Jelena","jelena123","jelena@gmail.com",  date("Y-m-d h:i:s",strtotime("now"))]
    ];
    $query=$pdo->prepare("INSERT INTO users (name,password,email,email_verified_at,created_at) VALUES(?,?,?,?,?)");
    $pdo->beginTransaction();
    foreach ($pogrešankorisnik as $red) {
        $query->execute($red);
    }
    $pdo->commit();
} catch (Throwable $e) {
    echo $e->getMessage();
}

?>