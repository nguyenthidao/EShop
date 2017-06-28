<?php
class View
{
    function generate($name, $data = [])
    {
        $path = '../eshop/views/';
        $name = explode('.', $name);
        $size = count($name);
        for($i = 0; $i < $size-1; $i ++){
            $path = $path . '/'. $name[$i];

        }

        $nameFile = $name[$size-1] . '.php';
        $path = $path . '/' . $nameFile;

        if(file_exists($path)){
            include $path;
        }
    }
}
