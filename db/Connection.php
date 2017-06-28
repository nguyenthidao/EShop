<?php
class Connection
{
    protected function connect()
    {
        $url = "mysql:host=localhost;dbname=eshop;charset=utf8";
        $userName = "root";
        $password = "password";

        try{
            $pdo = new PDO($url, $userName, $password);

            return $pdo;
        }catch (PDOException $e){
            return $e->getMessage();
        }
    }
}