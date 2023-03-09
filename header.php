<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $url ?>">
    <title><?= $title ?></title>
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="header-line">
                <div class="logo">
                    <a href="index.php"><img class="logo-img" src="images/free-icon-blog-9398467.png" alt=""></a>
                </div>
                <div class="nav">
                    <a class="nav-el <?= $class_reg_btn ?> <?= $class_lk_btn_none ?>" href="regPage.php">Зарегистрироваться</a>
                    <a class= "nav-el <?= $class_auth_btn ?> <?= $class_lk_btn_none ?>" href="authPage.php">Войти</a>
                    <a class= "nav-el-lk <?= $class_lk_btn ?>" href="index.php">Выйти</a>
                </div>
            </div>
        </div>
    </div>
