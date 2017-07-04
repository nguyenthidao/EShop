<?php
require_once 'db/ProductDb.php';
require_once 'db/BrandDb.php';

class ProductController extends Controller
{

    private $productDb;

    public function __construct(ProductDb $productDb)
    {
        parent::__construct();
        $this->productDb = $productDb;
    }

    public function listAll()
    {
        $productList = $this->productDb->listAll();

        $this->view->generate('product.list', $productList);
    }

    public function create()
    {
        $brandDb = new BrandDb();
        $brands = $brandDb->listAll();

        $this->view->generate('product.create', $brands);
    }

    public function store()
    {

        if(isset($_POST['name']) && !empty($_POST['name'])){
            $name = $_POST['name'];
        }

        if(isset($_POST['color']) && !empty($_POST['color'])){
            $color = $_POST['color'];
        }

        if(isset($_POST['price']) && !empty($_POST['price'])){
            $price = $_POST['price'];
        }

        if(isset($_POST['quality']) && !empty($_POST['quality'])){
            $quality = $_POST['quality'];
        }

        if(isset($_POST['ram']) && !empty($_POST['ram'])){
            $ram = $_POST['ram'];
        }

        if(isset($_POST['keyboard']) && !empty($_POST['keyboard'])){
            $keyboard = $_POST['keyboard'];
        }

        if(isset($_POST['display']) && !empty($_POST['display'])){
            $display = $_POST['display'];
        }

        if(isset($_POST['hard_drive']) && !empty($_POST['hard_drive'])){
            $hard_drive = $_POST['hard_drive'];
        }

        if(isset($_POST['wireless']) && !empty($_POST['wireless'])){
            $wireless = $_POST['wireless'];
        }

        if(isset($_POST['description']) && !empty($_POST['description'])){
            $description = $_POST['description'];
        }

        if(isset($_POST['brand']) && !empty($_POST['brand'])){
            $brands_id = $_POST['brand'];
        }

        $product = new Product(1, $name, $color, $price, $quality, $ram, $keyboard, $display, $hard_drive, $wireless, $description, $brands_id);

        $this->productDb->create($product);
    }

    public function edit($id)
    {
        $id = implode(" ", $id);

        $brandDb = new BrandDb();
        $brands = $brandDb->listAll();
        $product = $this->productDb->findById($id);


        $data = [
            'product' => $product,
            'brands'  =>  $brands
        ];

        $this->view->generate('product.edit', $data);
    }

    public function update($id)
    {
        $id = implode(" ", $id);

        if(isset($_POST['name']) && !empty($_POST['name'])){
            $name = $_POST['name'];
        }

        if(isset($_POST['color']) && !empty($_POST['color'])){
            $color = $_POST['color'];
        }

        if(isset($_POST['price']) && !empty($_POST['price'])){
            $price = $_POST['price'];
        }

        if(isset($_POST['quality']) && !empty($_POST['quality'])){
            $quality = $_POST['quality'];
        }

        if(isset($_POST['ram']) && !empty($_POST['ram'])){
            $ram = $_POST['ram'];
        }

        if(isset($_POST['keyboard']) && !empty($_POST['keyboard'])){
            $keyboard = $_POST['keyboard'];
        }

        if(isset($_POST['display']) && !empty($_POST['display'])){
            $display = $_POST['display'];
        }

        if(isset($_POST['hard_drive']) && !empty($_POST['hard_drive'])){
            $hard_drive = $_POST['hard_drive'];
        }

        if(isset($_POST['wireless']) && !empty($_POST['wireless'])){
            $wireless = $_POST['wireless'];
        }

        if(isset($_POST['description']) && !empty($_POST['description'])){
            $description = $_POST['description'];
        }

        if(isset($_POST['brand']) && !empty($_POST['brand'])){
            $brands_id = $_POST['brand'];
        }

        $product = new Product($id, $name, $color, $price, $quality, $ram, $keyboard, $display, $hard_drive, $wireless, $description, $brands_id);

        $this->productDb->update($product);
    }

    public function delete($id)
    {
        $id = implode(',', $id);
        $this->productDb->delete($id);
    }
}