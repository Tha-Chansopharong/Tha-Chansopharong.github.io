<?php
session_start();
include_once '../configs/db_connect.php';
class LoginAction
{
    private $conn;

    function __construct()
    {
        $pdo = new DBConnect();
        $this->conn = $pdo->connect();
    }
    public function doLogin()
    {
        if (isset($_POST['btnLogin'])) {
            $username = $_POST['txtUsername'];
            $password = ($_POST['txtPassword']);
            $sql = 'SELECT *FROM tbl_user WHERE email="' . $username . '" AND password="' . $password . '"';
            $result = $this->conn->query($sql);
            $user = $result->fetch(PDO::FETCH_ASSOC);
            if ($user) {
                $_SESSION['username'] = $user['email'];
                $_SESSION['login_name'] = $user['name'];
                header('Location:user_management.php');
                exit;
            } else {
                $message = 'Invalid Username and Password.';
                header('Location:index.php?message=' . $message);
                exit;
            }
        }
    }

    public function doLogout()
    {
        if (isset($_GET['action']) && $_GET['action'] == 'logout') {
            if (!empty($_SESSION['username'])) {
                session_destroy();
                header('Location:index.php?message=You are loging out.');
                exit;
            }
        }
    }
}

$loginObj = new LoginAction();
$loginObj->doLogin();
$loginObj->doLogout();
?>