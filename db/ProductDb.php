<?php
require_once 'Connection.php';
require_once 'models/Product.php';

class ProductDb extends Connection
{
    public function listAll(){
        $db = $this->connect();
        $query = "SELECT p.id, p.name, p.color, p.price, p.quality, p.ram, p.keyboard, p.display, p.hard_drive, p.wireless, p.description, p.brands_id, b.name as brands_name FROM products as p JOIN brands as b ON p.brands_id = b.id ";
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
            $brands_name = $product['brands_name'];
            $productList[] = new Product($id, $name, $color, $price, $quality, $ram, $keyboard,
                $display, $hard_drive, $wireless, $description, $brands_id, $brands_name);
        }

        return $productList;
    }

    public function create($product)
    {
        $id = $product->getId();
        $name = $product->getName();
        $color = $product->getColor();
        $price = $product->getPrice();
        $quality = $product->getQuality();
        $ram = $product->getRam();
        $keyboard = $product->getKeyboard();
        $display = $product->getDisplay();
        $hard_drive = $product->getHardDrive();
        $wireless = $product->getWireless();
        $description = $product->getDescription();
        $brands_id = $product->getBrandsId();
        $findResult = $this->findByName($name);

        $db = $this->connect();
        if($findResult == false){


            $query = "INSERT INTO products(name, color, price, quality, description, ram, keyboard, display, hard_drive, wireless, brands_id) VALUES ('$name', '$color', '$price', '$quality', '$description', '$ram', '$keyboard',
                                            '$display', '$hard_drive', '$wireless', '$brands_id')";
            $result = $db->exec($query);

        }else{
            $quality ++;
            $query = "UPDATE products SET quality = '$quality' WHERE id = '$id'";
            $result = $db->exec($query);
        }

        return $result > 0;
    }

    public function update($product)
    {
        $id = $product->getId();
        $name = $product->getName();
        $color = $product->getColor();
        $price = $product->getPrice();
        $quality = $product->getQuality();
        $ram = $product->getRam();
        $keyboard = $product->getKeyboard();
        $display = $product->getDisplay();
        $hard_drive = $product->getHardDrive();
        $wireless = $product->getWireless();
        $description = $product->getDescription();
        $brands_id = $product->getBrandsId();

        $db = $this->connect();
        $query = "UPDATE products SET name = '$name', color = '$color', price = '$price', quality = '$quality', ram = '$ram', keyboard = '$keyboard', display = '$display', hard_drive = '$hard_drive', wireless = '$wireless', description = '$description', brands_id = '$brands_id' WHERE id = '$id'";
        $result = $db->exec($query);

        return $result > 0;
    }

    public function delete($id)
    {
        $db = $this->connect();
        $query = "DELETE FROM products WHERE id IN ($id)";
        $result = $db->exec($query);

        return $result > 0;
    }

    public function findById($id)
    {
        $db = $this->connect();
        $query = "SELECT p.id, p.name, p.color, p.price, p.quality, p.ram, p.keyboard, p.display, p.hard_drive, p.wireless, p.description, p.brands_id, b.name as brands_name FROM products as p JOIN brands as b ON p.brands_id = b.id WHERE p.id = '$id'";
        $result = $db->query($query)->fetch();

        if(count($result) > 0){
            $id = $result["id"];
            $name =$result["name"];
            $color = $result["color"];
            $price = $result["price"];
            $quality = $result["quality"];
            $ram = $result["ram"];
            $keyboard = $result["keyboard"];
            $display = $result["display"];
            $hard_drive = $result["hard_drive"];
            $wireless = $result["wireless"];
            $description = $result["description"];
            $brands_id = $result['brands_id'];
            $brands_name = $result['brands_name'];
            $product = new Product($id, $name, $color, $price, $quality, $ram, $keyboard,
                $display, $hard_drive, $wireless, $description, $brands_id, $brands_name);

            return $product;
        }

        return null;
    }

    public function findByName($name)
    {
        $db = $this->connect();
        $query = "SELECT * FROM products WHERE name = '$name'";
        $result = $db->query($query);

        return $result->rowCount() > 0;
    }
}
