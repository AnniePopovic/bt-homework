<?php

require_once __DIR__ . "/models/products-model.php";

$products=getAllProducts();
$headerTitle="Pogledaj proizvod";


$id=$_GET["page"];
$singleProduct=getOneProductById($id);
$sledeća=getNextProduct($id);
$prethodna=getPrevProduct($id);

$iskategorisaniniz=getRelatedByCategory($id);
$kategorije="";
if ($iskategorisaniniz>=2) {
    shuffle($iskategorisaniniz);
   $kategorije=array_slice($iskategorisaniniz,0,3);
} else {
    $kategorije=getRelatedByCategory($id);
}
// HEADER
require __DIR__ . "/views/_layout/v-header.php";

// PAGE
require __DIR__ . "/views/v-single-page.php";

// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";

?>