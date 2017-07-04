<?php
require_once "Connection.php";
require_once "models/Brand.php";

class BrandDb extends Connection
{
    public function listAll()
    {
        $db = $this->connect();
        $query = "SELECT * FROM brands";
        $list = $db->query($query);

        $brandList = [];
        foreach ($list as $brand){
            $id = $brand["id"];
            $code = $brand["code"];
            $name = $brand["name"];
            $description = $brand["description"];

            $brandList[] = new Brand($id, $name, $code, $description);
        }

        return $brandList;
    }

    public function create($brand)
    {
        $name = $brand->getName();
        $code = $brand->getCode();
        $description = $brand->getDescription();
        $findResult = $this->find($name);
        $result = 0;

        if($findResult == false){
            $db = $this->connect();
            $query = "INSERT INTO brands(name, code, description) VALUES ('$name', '$code', '$description')";
            $result = $db->exec($query);
        }else{
            echo "đã tồn tại brand này";
        }

        return $result > 0;
    }

    public function update($brand)
    {
        $id = $brand->getId();
        $name = $brand->getName();
        $code = $brand->getCode();
        $description = $brand->getDescription();

        $db = $this->connect();
        $query = "UPDATE brands SET name = '$name', code = '$code', description = '$description' WHERE id = '$id'";
        $result = $db->exec($query);

        return $result > 0;
    }

    public function delete($id)
    {
        $db = $this->connect();
        $query = "UPDATE products SET brands_id = 1 WHERE brands_id IN ($id)";

        $db->exec($query);
        $query = "UPDATE sale_details SET brands_id = 1 WHERE brands_id IN ($id)";
        $db->exec($query);
        $query = "DELETE FROM brands WHERE id IN ($id)";
        $result = $db->exec($query);

        return $result > 0;
    }

    public function find($name)
    {
        $db = $this->connect();
        $query = "SELECT * FROM brands WHERE name = '$name'";
        $result = $db->query($query);

        return $result->rowCount() > 0;
    }

    public function findById($id)
    {
        $db = $this->connect();
        $query = "SELECT * FROM brands WHERE id = '$id'";
        $result = $db->query($query)->fetch();

        if(count($result) > 0){
            $code = $result['code'];
            $name = $result['name'];
            $description = $result['description'];

            $brand = new Brand($id, $name, $code, $description);

            return $brand;
        }

        return null;
    }
}

