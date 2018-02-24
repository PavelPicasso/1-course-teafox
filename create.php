<?php
session_start();
require_once("connection.php");

$username = $_SESSION['session_username'];
$query2 = "SELECT * FROM users WHERE username='" . $username . "'";
$result2 = mysqli_query($con, $query2) or die ("Error : " . mysqli_error());
$row2 = mysqli_fetch_assoc($result2);


if (isset($_SESSION['session_username'])) {
    $username = $_SESSION['session_username'];
    if (isset($_POST["button"])) {
        $role = $_POST["option"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $password_again = $_POST['password_again'];
        if ($password == $password_again) {
            $result = mysqli_query($con, "SELECT * FROM `users` WHERE `username` = '" . $username . "'");
            if (mysqli_fetch_row($result) > 0) {
                echo "<script>alert(\"Пользователь существует!\");</script>";
                echo " <script language=\"JavaScript\">window.location.href = document.location.origin + \"/index.php#contact\"</script>";
            } else {
                $query = "INSERT INTO users (username, password, role)" . "VALUES('{$username}', md5('{$password}'), '{$role}');";
                mysqli_query($con, $query) or die ("Error : " . mysqli_error());
                echo "<script>alert(\"Пользователь добавлен!\");</script>";
                echo " <script language=\"JavaScript\">window.location.href = document.location.origin + \"/index.php#contact\"</script>";
            }
        } else {
            echo "<script>alert(\"Пароли не совпадают!\");</script>";
            echo " <script language=\"JavaScript\">window.location.href = document.location.origin + \"/index.php#contact\"</script>";
        }
    } else {
        echo "<script>alert(\"Вы не авторезированны!\");</script>";
        echo " <script language=\"JavaScript\">window.location.href = document.location.origin + \"/reg.php\"</script>";
    }
}
?>