<?php
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
        if(isset($_POST['name']) && !empty($_POST['name'])){
            $name = $_POST['name'];
        }

        if(isset($_POST['code']) && !empty($_POST['code'])){
            $code = $_POST['code'];
        }

        if(isset($_POST['description']) && !empty($_POST['description'])){
            $description = $_POST['description'];
        }

        $brand = new Brand(1, $name, $code, $description);

        $this->brandDb->create($brand);
    }

    public function edit()
    {
        return $this->view->generate('brand.edit');
    }

    public function update($id)
    {
        var_dump($id);
    }

}