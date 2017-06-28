<?php
require_once 'db/ProductDb.php';

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

        $this->view->generate("product.list", $productList);
    }
    public function a()
    {
        $productList = $this->productDb->listAll();

        $this->view->generate("product.list", $productList);
    }
}