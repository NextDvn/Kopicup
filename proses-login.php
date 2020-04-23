<?php
session_start();
include 'koneksi.php';

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $pass = $_POST['pass'];

    $sql = "SELECT username, password FROM login
            WHERE username='$username' AND password='$pass'";
    $res = mysqli_query($koneksi, $sql);

    $count = mysqli_affected_rows($koneksi);

    if($count == 1)
    {
        $_SESSION['logged']=true;
        $data_login = mysqli_fetch_assoc($res);
        header("Location: http://localhost/Covid/main/main.php");
        exit();
    }
    else
    {
        $_SESSION['logged']=false;
        header("Location: http://localhost/Covid/login/login.php");
        exit();
    }
}
?>
