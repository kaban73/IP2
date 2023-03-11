<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $url ?>">
    <script src="scripts/jquery-3.6.4.min.js"></script>
    <script src="scripts/scripts.js"></script>
    <title><?= $title ?></title>
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="header-line">
                <a href="index.php" class="logo">
                    <img src="images/free-icon-blog-9398467.png" alt="">
                </a>
                <div class="menu-burger">
                    <span></span>
                </div>
                <nav class="nav-menu">
                    <ul class="header-list">
                        <li>
                            <a class="nav-el <?= $class_reg_btn ?> <?= $class_lk_btn_none ?>" href="regPage.php">Зарегистрироваться</a>
                        </li>
                        <li>
                            <a class= "nav-el <?= $class_auth_btn ?> <?= $class_lk_btn_none ?>" href="authPage.php">Войти</a>
                        </li>
                        <li>
                            <a class= "nav-el-lk <?= $class_lk_btn ?>" href="index.php">Выйти</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
