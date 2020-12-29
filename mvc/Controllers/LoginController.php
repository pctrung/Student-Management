<?php
class LoginController extends Controller
{
    private $user;

    function __construct()
    {
        $this->user = $this->Model("User");
    }
    function index()
    {
        $this->View("login/index", []);
    }
    function login()
    {
        if (isset($_POST['btn_login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $username = strip_tags($username);
            $username = addslashes($username);
            $password = strip_tags($password);
            $password = addslashes($password);

            $results = $this->user->login($username, $password);

            echo "<script type='text/javascript'>alert('" . $results['messages'] . "');</script>";

            if ($results['isSuccess'] == false) {
                $this->View("login/index", []);
            } else if ($results['isSuccess'] == true) {
                $_SESSION['username'] = $username;
                header("Location: /Home");
            }
        }
        $this->View("login/index", []);
    }
}
