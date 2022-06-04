<?php
$host="localhost";
$dbName="test";
$username="root";
$password="";

$dsn="mysql:host=$host;dbname=$dbName";

try {
    $databaseConnection= new PDO ($dsn,$username,$password);
    $databaseConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch  (PDOException $error) {
        echo $error->getMessage();
    }


$sql1="SELECT * FROM colors WHERE status=1 ORDER BY updated_at ASC;";
$sql2="SELECT * FROM colors ORDER BY RAND() LIMIT 5;";
$sql3="INSERT INTO colors(name,hex_value) VALUES (black, &num;000000);";
$sql4="UPDATE colors SET status=1 WHERE status=0;";
$sql5="DELETE FROM colors WHERE id=5;";
$sql6="DELETE FROM colors ORDER BY updated_at LIMIT 1;";
$result= $databaseConnection->query($sql1);


while ($row = $result->fetch()) {
    echo $row["name"] . "<br>";
}

?>