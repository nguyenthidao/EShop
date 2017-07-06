<?php
require_once 'Validator.php';

class BrandController extends Controller
{
    private $brandDb;

    public function __construct(BrandDb $brandDb)
    {
        parent::__construct();
        $this->brandDb = $brandDb;
    }

    public function listAll()
    {
        $brandList = $this->brandDb->listAll();

        return $this->view->generate('brand.list', $brandList);
    }

    public function create()
    {
        return $this->view->generate('brand.create');
    }

    public function store()
    {
        if(isset($_POST['name'])){
            $name = $_POST['name'];
        }

        if(isset($_POST['code'])){
            $code = $_POST['code'];
        }

        if(isset($_POST['description'])){
            $description = $_POST['description'];
        }

        $errors = $this->validate($name, $code, $description);

        if(count($errors) > 0){
            $this->view->generate('brand.create', $errors);
        }else{
            $brand = new Brand(1, $name, $code, $description);
            $this->brandDb->create($brand);
        }
    }

    public function edit($id)
    {
        $id = implode(" ", $id);
        $brand = $this->brandDb->findById($id);

        return $this->view->generate('brand.edit', $brand);
    }

    public function update($id)
    {
        $id = implode(" ", $id);

        if(isset($_POST['name']) && !empty($_POST['name'])){
            $name = $_POST['name'];
        }

        if(isset($_POST['code']) && !empty($_POST['code'])){
            $code = $_POST['code'];
        }

        if(isset($_POST['description']) && !empty($_POST['description'])){
            $description = $_POST['description'];
        }

        $brand = new Brand($id, $name, $code, $description);

        $this->brandDb->update($brand);
    }

    public function delete($id)
    {
        $id = implode(',', $id);
        $this->brandDb->delete($id);
    }

    public function validate($name, $code, $description)
    {
        $validator = new Validator();
        $errors = [];
        $nameError = $validator->text($name);
        $codeError = $validator->text($code);
        $descriptionError = $validator->text($description);

        if(!empty($nameError)){
            $errors['name'] = $nameError;
        }

        if(!empty($codeError)){
            $errors['code'] = $codeError;
        }

        if(!empty($descriptionError)){
            $errors['description'] = $descriptionError;
        }

        return $errors;
    }
}