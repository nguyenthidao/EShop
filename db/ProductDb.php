<?php
require_once 'Connection.php';
require_once 'models/Product.php';

class ProductDb extends Connection
{
    public function listAll(){
        $db = $this->connect();
        $query = "SELECT * FROM products ";
        $list = $db->query($query);
        $productList = [];
        foreach ($list as $product){
            $id = $product["id"];
            $name =$product["name"];
            $color = $product["color"];
            $price = $product["price"];
            $quality = $product["quality"];
            $ram = $product["ram"];
            $keyboard = $product["keyboard"];
            $display = $product["display"];
            $hard_drive = $product["hard_drive"];
            $wireless = $product["wireless"];
            $description = $product["description"];
            $brands_id = $product['brands_id'];
            $productList[] = new Product($id, $name, $color, $price, $quality, $ram, $keyboard,
                $display, $hard_drive, $wireless, $description, $brands_id);
        }

        return $productList;
    }
}
