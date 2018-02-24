<?php
session_start();
?>

<?php require_once("connection.php"); ?>
<?php

if (isset($_SESSION["session_username"])) {
    // вывод "Session is set"; // в целях проверки
    echo " <script language=\"JavaScript\">window.location.href = document.location.origin + \"/index.php\"</script>";
}
if (isset($_POST['btn'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    if ($query = mysqli_query($con, "SELECT * FROM users WHERE username='" . $username . "' AND password = '" . md5($password) . "'")) {
        while ($row = mysqli_fetch_assoc($query)) {
            $dbusername = $row['username'];
            $dbpassword = $row['password'];
        }
        if ($username == $dbusername && md5($password) == $dbpassword) {
            // старое место расположения
            //  session_start();
            $_SESSION['session_username'] = $username;
            echo " <script language=\"JavaScript\">window.location.href = document.location.origin + \"/index.php\"</script>";
        } else {
            //  $message = "Invalid username or password!";
            echo "<script>alert(\"Неверный логин или пароль!\");</script>";
            echo " <script language=\"JavaScript\">window.location.href = document.location.origin + \"/login.php\"</script>";
        }
    }
} else {
    ?>
    <script src="js/validator.js"></script>
    <script src="js/validator.min.js"></script>
    <script>
        $(function(){
            $('#loginform').validator({
                feedback: {
                    success: 'glyphicon-thumbs-up',
                    error: 'glyphicon-thumbs-down'
                }
            });
        });
    </script>


    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <link href="css/custom.css" rel="stylesheet">
    <div class="container1 mlogin">
        <div id="login">
            <h1>Вход</h1>
            <form action="login.php" id="loginform" method="post" name="loginform">
                <p><label for="user_login"> Имя пользователя <br>
                        <div class="form-group">
                            <input class="input" id="username" name="username" size="20" type="text" placeholder="" pattern="[a-zA-Zа-яА-Я0-9ёЁ ]+" required>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>
                    </label></p>
                <p><label for="user_pass">Пароль<br>
                        <div class="form-group">
                            <input class="input" id="password" name="password" size="20" type="password" required>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>
                        </label>
                </p>
                <p class="submit"><input name="btn" class="button" type="submit" value="Войти"></p>
                <p><a href="reg.php" class="reg">Регистрация</a></p>
            </form>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<?php } ?>

