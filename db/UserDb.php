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
            $status = $user['status'];

            $userList[] = new User($id, $name, $password, $role, $email, $status);
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
        $result = $db->exec($query);

        return $result >= 0;
    }

    public function findUser($email, $password)
    {
        $db = $this->connect();
        $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result = $db->query($query);

        return $result->rowCount() > 0;
    }
}