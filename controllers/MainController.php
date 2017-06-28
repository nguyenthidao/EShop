<?php

class MainController extends Controller
{
    function index()
    {
        $this->view->generate('layout.main_view');
    }
}
