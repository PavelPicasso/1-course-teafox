<?php
session_start();

require_once("connection.php");

if (isset($_SESSION["session_username"])) {
    // вывод "Session is set"; // в целях проверки
//    echo "Авторизация прошла успешно.";
//    echo "<br/><a href='index.php'>Перейти</a>";
    echo " <script language=\"JavaScript\">window.location.href = document.location.origin + \"/index.php\"</script>";
} else {
    if (isset($_POST['btn']) and !empty($_POST['username']) and !empty($_POST['password']) and !empty($_POST['password_again'])) {
        if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['password_again'])) {
            $username = htmlspecialchars($_POST['username']);
            $password = htmlspecialchars($_POST['password']);
            $password_again = htmlspecialchars($_POST['password_again']);
            if ($password == $password_again) {
                $result = mysqli_query($con, "SELECT * FROM `users` WHERE `username` = '" . $username . "'");
                if (mysqli_fetch_row($result) > 0) {
                    echo "<script>alert(\"Пользователь существует!\");</script>";
                    echo " <script language=\"JavaScript\">window.location.href = document.location.origin + \"/reg.php\"</script>";
                } else {
                    mysqli_query($con, "INSERT INTO users (username, password) VALUES ('" . $username . "', '" . md5($password) . "')");
//                    echo "Пользователь зарегистрирован";
//                    echo "<br/><a href='login.php'>Войти</a>";
                    echo "<script>alert(\"Вы зарегистрированы!\");</script>";
                    echo " <script language=\"JavaScript\">window.location.href = document.location.origin + \"/login.php\"</script>";
                }
            } else {
                echo "<script>alert(\"Пароли не совпадают!\");</script>";
                echo " <script language=\"JavaScript\">window.location.href = document.location.origin + \"/reg.php\"</script>";
            }
        }
    } else {
        ?>
        <link href="css/custom.css" rel="stylesheet">
        <div class="container1 mlogin">
            <div id="login">
                <h1>Регистрация</h1>
                <form method="post" action="reg.php" role="form" id="form_register" name="loginform">
                    <p><label for="user_login"> Имя пользователя <br>
                            <input class="input" type="text" name="username" placeholder="Имя"/></label></p>
                    <p><label for="user_pass">Пароль<br>
                            <input class="input" type="password" name="password" placeholder="Введите пароль"/></label></p>
                    <p><label for="user_pass_again">Повторить Пароль<br>
                            <input class="input" type="password" name="password_again" placeholder="Повторите пароль"/></label></p>
                    <p>
                    <p class="submit"><input name="btn" class="button_center" type="submit" value="Завершить регистрацию"></p>
                </form>
            </div>
        </div>
        <?php
    }
}
?>