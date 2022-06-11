<?php
class Product {
    protected $barcode;
    protected $title;
    protected $price;

    public function __construct($title,$price,$barcode) {
        $this->title=$title;
        $this->price=$price;
        $this->barcode=$barcode;
    }
    public function getTitle() {
        return $this->title;
    }
    public function getPrice() {
        return $this->price;
    }
    public function getBarcode() {
        return $this->barcode;
    }
}

$product1= new Product("Farmerice",1000,123456789);
$product2= new Product("Jakna",3000,589632147);
$product3= new Product("Suknja",1500,987654321);
$product4= new Product("Kravata",700,458976321);
$product5= new Product("Pantalone",2000,253698741);
$product6= new Product("Cipele",3500,547896321);
$product7= new Product("Dzemper",1200,321654987);
$product8= new Product("Kaput",7000,54239871);
$product9= new Product("Kosulja",1400,698745231);
$product10= new Product("Majica",500,789654123);

class ShoppingCartItem {
    protected $product;
    protected $quantity;

    public function __construct($product,$quantity) {
        $this->product=$product;
        $this->quantity=$quantity;
    }

    public function getProduct() {
        return $this->product;
    }

    public function setQuantity($quantity) {
        $this->quantity=$quantity;
    }

    public function getQuantity() {
        return $this->quantity;
    }
}

$item1=new ShoppingCartItem($product1,1);
$item2=new ShoppingCartItem($product2,3);
$item3=new ShoppingCartItem($product7,2);
$item4=new ShoppingCartItem($product8,1);

class ShoppingCart {
    protected $cartitems=[];
    protected $shopitem;

    public function setCart($cartitems) {
        $this->cartitems[]=$cartitems;
    }
    public function getCart() {
        return $this->cartitems;
    }

    public function addToCart ($shopitem) {
        $this->shopitem=$shopitem;
        $this->cartitems[]=$shopitem;
    }
    public function ListItems() {
        echo "Narudžbina: <br>";
        foreach($this->cartitems as $item) {
            echo "Proizvod: " . $item->getProduct()->getTitle() . ". Količina: " . $item->getQuantity() . ". Pojedinačna cena: " . $item->getProduct()->getPrice() . ". Ukupna cena: " . $item->getProduct()->getPrice()*$item->getQuantity() . " din. <br>";
        }
    }

    public function RemoveItem($shopitem) {
        $this->shopitem=$shopitem;
        if (!empty($this->cartitems)) {
        if($this->shopitem->getQuantity()>1) {
          $this->shopitem->setQuantity($this->shopitem->getQuantity()-1);
        } else {
            $key=array_search($this->shopitem,$this->cartitems);
            unset($this->cartitems[$key]);
        }
        } 

    }
}

$cart= new ShoppingCart();
$cart->addToCart($item1);
$cart->addToCart($item2);
$cart->addToCart($item3);
$cart->addToCart($item4);

$cart->ListItems();
echo "<hr> NAKON BRISANJA PROIZVODA <br> ";
$cart->RemoveItem($item4);
$cart->RemoveItem($item2);
$cart->ListItems();
?>