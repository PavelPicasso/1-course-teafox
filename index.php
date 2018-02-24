<!---->
<?php
//session_start();
//require_once("connection.php");
//$query2 = "SELECT * FROM users";
//$result2 = mysqli_query($con, $query2) or die ("Error : " . mysqli_error());
//if (isset($_SESSION["session_username"])) {
//    $query3 = "SELECT * FROM users WHERE username = '" . $_SESSION["session_username"]."'";
//    $result3 = mysqli_query($con, $query3) or die ("Error : " . mysqli_error());
//    $row3 = mysqli_fetch_assoc($result3);
//    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Верстка сайта</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css?hash=<?= time(60 * 60 * 24) ?>" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">

        <!-- Для Internet Explorer-->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
    <header>
        <div class="container">
            <div class="icon-menu">
                <img src="img/menu-ham-icon.png">
            </div>
            <div class="row">
                <img class="logo" src="img/logo2.png" width="130" height="60" alt="JPG">
                <ul>
                    <li><a href="game.php">Игра</a></li>
                    <li><a href="">Музыка</a></li>
                    <li><a href="info.html">Инфо</a></li>
<!--                    <li><a href="">--><?php
//                            if (isset($row3)) {
//                                if ($row3["role"] == "2") {
//                                    echo $row3["username"];
//                                }
//                                if ($row3["role"] == "1") echo $row3["username"];
//                                if ($row3["role"] == "0") echo $row3["username"];
//                                echo "</a></li>";
//                                echo "<li><a href=\"logout.php\">Выйти</a></li>";
//                            }
//                            ?>

                </ul>
            </div>
        </div>
    </header>


    <div class="menu">
        <img class="icon-close" src="img/left-arrow.png">
        <div class="top-section">
            <img class="profile-image" src="img/profile3.jpg" alt="Profile">
            <h3 class="profile-title">Pavel Picasso</h3>
            <p class="profile-description">Группа: ИВТАП Бд-11<br>Верстка сайта</p>
        </div>
        <!-- top-разделе -->
        <ul class="navigation">
            <li><a href="#Top"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Добро пожаловать</a>
            </li>
            <li><a href="#about"><span class="glyphicon glyphicon-user glyphicon " aria-hidden="true"></span>Обо Мне</a>
            </li>
            <li><a href="#projects"><span class="glyphicon glyphicon-picture " aria-hidden="true"></span>Моя Галерея</a>
            </li>
            <li><a href="#contact"><span class="glyphicon glyphicon-envelope " aria-hidden="true"></span>Контакты</a>
            </li>
            <img class="arrow" src="img/up-arrow.png" alt="Arrow">
        </ul>
    </div>
    <div class="services">
        <div class="container">
            <div class="row section" id="Top">
                <div class="col-xs-12 col-md-12 text new">
                    <h1>Просто Дизайн | Личное Портфолио<br>
                        ЭТО ТО, ЧТО Я ДЕЛАЮ
                    </h1>
                    <h2>Никто не зажигает светильник, чтобы спрятать его за дверью: цель свет, чтобы создать больше
                        света, чтобы открыть людям глаза, чтобы раскрыть чудеса вокруг.</h2>
                </div>
            </div>

            <div class="row section" id="about">
                <div class="col-xs-12 col-md-12">
                    <img class="about-image" src="img/9.jpg" alt="about me">
                </div>
                <div class="col-xs-12 col-md-12 text">
                    <h4 class="widget-title">УЗНАТЬ ОБО МНЕ</h4>
                    <p>Меня зовут Павел Кондратьев. Я студент УлГТУ факультета ФИСТ (объединение людей, которым
                        интересно программирование и всё, что с этим связано. Каждый день мы погружаемся в свежие
                        новости IT-мира, пишем много pseudocode, работаем сообща, делаем
                        интересное из того что попадется подруку).</p>
                    <p> Создал сайт, чтобы продемонстрировать некоторые мои работы и рассказать вам немного о себе и с
                        чем мне приходится работать. Я уже почти пять лет окружен IT областью. Стараюсь не
                        быдлокодить:).
                    </p>
                </div>
                <marquee class="line" direction="right"> what time is it? pseudocode time!</marquee>
            </div>

            <div class="row section" id="projects">
                <div class="col-xs-12 col-md-12 text">
                    <h4 class="widget-title">МОЁ ВООБРАЖЕНИЕ</h4>
                    <p>Ваша роль на сайте: < --><?php
                        if ($row3["role"] == "0")
                            echo "User";
                        if ($row3["role"] == "1")
                            echo "Moderator";
                        if ($row3["role"] == "2")
                            echo "Admin";
                        ?><!-- >-->
                        <a href="Gallery.php">Click</a>

                    </p>
                </div>

<!--                <div class="col-xs-12 col-md-12">-->
<!--                    <center>-->
<!--                    <span class="prev">← prev</span>-->
<!--                    <span class="next">next →</span>-->
<!--                    </center>-->
<!--                <div class="gallery">-->
<!--                   <div class="photo">-->
<!--                        <img id="0" src="">-->
<!--                    </div>-->
<!--                    <div class="photo">-->
<!--                        <img id="1" src="">-->
<!--                    </div>-->
<!--                    <div class="photo" >-->
<!--                        <img id="2" src="">-->
<!--                    </div>-->
<!--                    <div class="photo">-->
<!--                        <img id="3" src="">-->
<!--                    </div>-->
<!---->
<!---->
<!--                    <div class="lightbox">-->
<!--                        <div class="overlay"></div>-->
<!--                        <figure>-->
<!--                            <button title="Previous (Left arrow key)" type="button"-->
<!--                                    class="mfp-arrow mfp-arrow-left"></button>-->
<!--                            <button title="Next (Right arrow key)" type="button"-->
<!--                                    class="mfp-arrow mfp-arrow-right"></button>-->
<!--                            <img src="" onclick="slide()">-->
<!--                        </figure>-->
<!--                    </div><!-- //lightbox -->-->
<!--                </div><!-- //img-gallery -->-->
<!--                </div>-->
            </div>
<!--            --><?php
//    if ($row3['role'] == "1" OR $row3['role'] == "2") {
//        ?>
<!--            <div class="row section" id="contact">-->
<!--                <div class="col-xs-12 col-md-12 text">-->
<!--                    <table class="table table-bordered datatable">-->
<!--                        <thead>-->
<!--                        <tr>-->
<!--                            <th>Логин</th>-->
<!--                            <th>Роль</th>-->
<!--                            <th>Действия</th>-->
<!--                        </tr>-->
<!--                        </thead>-->
<!---->
<!--                        <tbody>-->
<!---->
<!--                        --><?php
//                        while ($row2 = mysqli_fetch_array($result2)) {
//                            ?>
<!--                            <tr>-->
<!--                                <td>--><?//= $row2["username"] ?><!--</td>-->
<!---->
<!--                                <td>--><?php
//                                    if ($row2["role"] == "0")
//                                        echo "Пользователь";
//                                    if ($row2["role"] == "1")
//                                        echo "Модератор";
//                                    if ($row2["role"] == "2")
//                                        echo "Админ";
//                                    ?>
<!--                                </td>-->
<!--                                <td>-->
<!--                                    --><?php
//                                    echo "<a href=\"#modal-1" . $row2["id"] . "\" class=\"btn btn-default btn-sm btn-icon icon-left\"><i class=\"entypo-pencil\"></i>Изенить </a>";
//                                    echo "
//                        <div id=\"modal-1" . $row2["id"] . "\" class=\"modalDialog\" >
//                            <div class=\"modal-dialog\">
//                                <div class=\"modal-content\">
//                                      <div class=\"modal-header\">
//                                            <a href=\"#close\" title=\"Закрыть\" class=\"close\">&times;</a>
//                                            <h4 class=\"modal-title\">Изменить пользователя</h4>
//                                      </div>
//                                     <div class=\"modal-body\">
//                                        <form action=\"edit.php\" method=\"post\">
//                                            <input type=\"hidden\" value=\"" . $row2["id"] . "\" name=\"id\">
//                                            <label>Имя</label> <br>
//                                            <input type=\"text\" value=\"" . $row2["username"] . "\" name=\"username\" class=\"form-control input-lg\"><br>
//                                            <label>Пароль</label><br>
//                                            <input type=\"password\" placeholder='Пароль' name=\"password\" class=\"form-control input-lg\"><br>
//                                            <label>Повторить Пароль</label><br>
//                                            <input type=\"password_agin\" placeholder='Повторить Пароль' name=\"password_again\" class=\"form-control input-lg\"><br>
//                                            <select name=\"option\" class=\"form-control\" style='z-index: 9999'>
//                                                <option value=\"0\" ";
//                                    if ($row2["role"] == "0") {
//                                        echo "selected";
//                                    }
//                                    echo ">User</option>
//                                                                        <option value=\"1\" ";
//                                    if ($row2["role"] == "1") {
//                                        echo "selected";
//                                    }
//                                    echo ">Moderator</option>
//                                            </select>
//                                            <br>
//                                           <div class=\"modal-footer\">
//                                                 <a href=\"#close\" title=\"Закрыть\" type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Закрыть</a>
//                                                <input type=\"submit\" class=\"btn btn-info\" name=\"button\">
//				                           </div>
//                                        </form>
//                                    </div>
//                                </div>
//                            </div>
//                        </div>";
//                                    if ($row2["role"] !== "2") {
//                                        echo "<a href=\"#openModal" . $row2["id"] . "\" class=\"btn btn-danger btn-sm btn-icon icon-left\"><i class=\"entypo-pencil\"></i>Удалить</a>";
//                                    }
//                                    echo "
//                        <div id=\"openModal" . $row2["id"] . "\" class=\"modalDialog\" >
//                            <div class=\"modal-dialog\">
//                                <div class=\"modal-content\">
//                                        <div class=\"modal-header\">
//                                            <a href=\"#close\" title=\"Закрыть\" class=\"close\">&times;</a>
//                                            <h4 class=\"modal-title\">Удаление пользователя</h4>
//                                        </div>
//                                        <div class=\"modal-body\">
//                                            <h3>Вы точно хотите удалить этого пользователя?</h3>
//                                            <div class=\"modal-footer\">
//                                                 <a href=\"delete.php?id=" . $row2["id"] . "\" title=\"Закрыть\" type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">ДА</button>
//                                                <a href=\"#close\" title=\"Закрыть\" type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Нет</a>
//                                            </div>
//                                        </div >
//                                </div>
//                            </div>
//                        </div >";
//                                    ?>
<!--                                    <a href="#" class="btn btn-info btn-sm btn-icon icon-left">-->
<!--                                        <i class="entypo-info"></i>-->
<!--                                        Профиль-->
<!--                                    </a>-->
<!--                                </td>-->
<!--                            </tr>-->
<!--                            --><?php
//                        }
//                        ?>
<!--                        </tbody>-->
<!--                    </table>-->
<!---->
<!--                    <br/>-->
<!---->
<!---->
<!--                    <a href="#modal-add" class="btn btn-primary">-->
<!--                        <i class="entypo-plus"></i>-->
<!--                        Добавить пользователя-->
<!--                    </a>-->
<!---->
<!--                    <div id="modal-add" class="modalDialog">-->
<!--                        <div class="modal-dialog">-->
<!--                            <div class="modal-content">-->
<!--                                <div class="modal-header">-->
<!--                                    <a href="#close" title="Закрыть" class="close">&times;</a>-->
<!--                                    <h4 class="modal-title">Новый пользователь</h4>-->
<!--                                </div>-->
<!--                                <div class="modal-body">-->
<!--                                    <form action="create.php" method="post">-->
<!--                                        <input type="hidden" name="id">-->
<!--                                        <label>Имя</label> <br>-->
<!--                                        <input type="text" name="username" class="form-control input-lg"><br>-->
<!--                                        <label>Пароль</label><br>-->
<!--                                        <input type="password" name="password" class="form-control input-lg"><br>-->
<!--                                        <br>-->
<!--                                        <label>Повторить Пароль</label><br>-->
<!--                                        <input type="password" name="password_again" class="form-control input-lg">-->
<!--                                        <br>-->
<!--                                        <select name="option" class="form-control" style='z-index: 9999'>-->
<!--                                            <option value="0"> User</option>-->
<!--                                            <option value="1">Moderator</option>-->
<!--                                        </select>-->
<!--                                        <br>-->
<!--                                        <div class="modal-footer">-->
<!--                                            <a href="#close" title="Закрыть" type="button" class="btn btn-default"-->
<!--                                               data-dismiss="modal">Закрыть</a>-->
<!--                                            <input type="submit" class="btn btn-info" name="button">-->
<!--                                        </div>-->
<!--                                    </form>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--                            --><?php //} ?>
        <marquee class="line" direction="right"> To be continued...</marquee>
    </div>
    </div>

    <script type="text/javascript" src="js/jquery-latest.min.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>
    <script type="text/javascript" src="js/menu.js"></script>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    </body>
    </html>
<!---->
<!--    --><?php
//} else {
//    echo "<script>alert(\"Вам сюда нельзя!\");</script>";
//    echo " <script language=\"JavaScript\">window.location.href = document.location.origin + \"/login.php\"</script>";
//}