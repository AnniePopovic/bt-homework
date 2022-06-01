<?php

require_once __DIR__ . "/models/products-model.php";

$products = getAllProducts();
$headerTitle="Proizvodi";
if(!empty($_GET["pretraga"])) {
    $products = searchProductsbyTerm();
}
// HEADER
require __DIR__ . "/views/_layout/v-header.php";

// PAGE
require __DIR__ . "/views/v-products.php";

// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";

?>