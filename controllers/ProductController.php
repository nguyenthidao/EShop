<?php
require_once 'db/ProductDb.php';
require_once 'db/BrandDb.php';
require_once 'Validator.php';

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

        $data = [
            'brands' => $brands
        ];

        $this->view->generate('product.create', $data);
    }

    public function store()
    {

        if(isset($_POST['name'])){
            $name = $_POST['name'];
        }

        if(isset($_POST['color'])){
            $color = $_POST['color'];
        }

        if(isset($_POST['price'])){
            $price = $_POST['price'];
        }

        if(isset($_POST['quality'])){
            $quality = $_POST['quality'];
        }

        if(isset($_POST['ram'])){
            $ram = $_POST['ram'];
        }

        if(isset($_POST['keyboard'])){
            $keyboard = $_POST['keyboard'];
        }

        if(isset($_POST['display'])){
            $display = $_POST['display'];
        }

        if(isset($_POST['hard_drive'])){
            $hard_drive = $_POST['hard_drive'];
        }

        if(isset($_POST['wireless'])){
            $wireless = $_POST['wireless'];
        }

        if(isset($_POST['description'])){
            $description = $_POST['description'];
        }

        $brands_id = $_POST['brand'];

        $errors = $this->validate($name, $color, $price, $quality, $ram, $keyboard, $display, $hard_drive, $wireless, $description);
        $product = [
            'name' => $name,
            'color' => $color,
            'price' => $price,
            'quality' => $quality,
            'ram' => $ram,
            'keyboard' => $keyboard,
            'display' => $display,
            'hard_drive' => $hard_drive,
            'wireless' => $wireless,
            'description' => $description
        ];
        $brandDb = new BrandDb();
        $brands = $brandDb->listAll();

        $data = [
            'brands' => $brands,
            'errors' => $errors,
            'product' => $product
        ];

        if(count($errors) > 0){
            $this->view->generate('product.create', $data);
        }else{
            $product = new Product(1, $name, $color, $price, $quality, $ram, $keyboard, $display, $hard_drive, $wireless, $description, $brands_id);
            $this->productDb->create($product);
        }
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

    public function validate($name, $color, $price, $quality, $ram, $keyboard, $display, $hard_drive, $wireless, $description)
    {
        $validator = new Validator();
        $errors = [];
        $nameError = $validator->text($name);
        $colorError = $validator->text($color);
        $priceError = $validator->number($price);
        $qualityError = $validator->number($quality);
        $ramError = $validator->text($ram);
        $keyboardError = $validator->text($keyboard);
        $displayError = $validator->text($display);
        $hardDriveError = $validator->text($hard_drive);
        $wirelessError = $validator->text($wireless);
        $descriptionError = $validator->text($description);

        if(!empty($nameError)){
            $errors['name'] = $nameError;
        }

        if(!empty($colorError)){
            $errors['color'] = $colorError;
        }

        if(!empty($priceError)){
            $errors['price'] = $priceError;
        }

        if(!empty($qualityError)){
            $errors['quality'] = $qualityError;
        }

        if(!empty($ramError)){
            $errors['ram'] = $ramError;
        }

        if(!empty($keyboardError)){
            $errors['keyboard'] = $keyboardError;
        }

        if(!empty($displayError)){
            $errors['display'] = $displayError;
        }

        if(!empty($hardDriveError)){
            $errors['hard_drive'] = $hardDriveError;
        }

        if(!empty($wirelessError)){
            $errors['wireless'] = $wirelessError;
        }

        if(!empty($descriptionError)){
            $errors['description'] = $descriptionError;
        }

        return $errors;
    }
}