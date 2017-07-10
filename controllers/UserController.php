<?php
class UserController extends Controller
{
    private $userDb;

    public function __construct(UserDb $userDb)
    {
        parent::__construct();
        $this->userDb = $userDb;
    }

    public function listAll()
    {
        $userList = $this->userDb->listAll();

        $this->view->generate("user.list", $userList);
    }

    public function register()
    {
        $this->view->generate('user.register');
    }

    public function store()
    {
        define('ROLE_CUSTOMER', 2);

        $name = $_POST['name'];
        $password = $_POST['password'];
        $rePassword = $_POST['re_password'];
        $email = $_POST['email'];

        $role = ROLE_CUSTOMER;
        if($password == $rePassword){
            $user = new User(1, $name, $password, $role, $email,0);
            $this->userDb->create($user);
        }
    }

    public function signin()
    {
        $this->view->generate('user.signin');
    }

    public function login()
    {
        session_start();

        $email = $_POST['email'];
        $password = $_POST['password'];

        $foundUser = $this->userDb->findUser($email, $password);

        if($foundUser){
            $_SESSION['email'] = $email;

            return $this->view->generate('layout.main_view', $email);
        }
    }
}