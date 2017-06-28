<?php
require_once "Connection.php";
require_once "models/User.php";

class UserDb extends Connection
{
    public function listAll()
    {
        $db = $this->connect();
        $query = "SELECT * FROM users";
        $list = $db->query($query);

        $userList = [];

        foreach ($list as $user){
            $id = $user['id'];
            $name = $user['name'];
            $password = $user['password'];
            $role = $user['role'];
            $email = $user['email'];
            $address = $user['address'];
            $city = $user['city'];
            $birthday = $user['birthday'];
            $phone = $user['phone'];
            $status = $user['status'];

            $userList[] = new User($id, $name, $password, $role, $email, $address, $city, $birthday, $phone, $status);
        }

        return $userList;
    }

    public function create($user)
    {
        $db = $this->connect();
        $name = $user->getName();
        $password = $user->getPassword();
        $role = $user->getRole();
        $email = $user->getEmail();
        $query = "INSERT INTO users(name, password, role, email) VALUES('$name', '$password', $role, '$email')";
        var_dump($query);
        $result = $db->exec($query);

        return $result >= 0;
    }
}