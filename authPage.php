<div class="wrapper">
    <?php
        $url = "styles/style_authPage.css";
        $title = "Авторизация";
        $class_auth_btn = "nav-el-dis";
        $class_reg_btn = "";
        $class_lk_btn = "nav-el-none";
        $class_lk_btn_none = "";
        $class_nav_el_panel = "nav-el-none";
        include_once 'header.php';
    ?>

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="auth-form">
                    <form class="form" action="lkPage.php">
                        <div class="form-el">
                            <p>Ваш псевдоним:</p>
                            <input type="text">
                        </div>
                        <div class="form-el">
                            <p>Ваш пароль:</p>
                            <input type="password">
                        </div>
                        <input class="auth_btn" type="submit" value="Войти">
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>