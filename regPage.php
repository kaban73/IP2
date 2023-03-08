<div class="wrapper">
    <?php
        $url = "styles/style_regPage.css";
        $title = "Регистрация";
        $class_reg_btn = "nav-el-dis";
        $class_auth_btn = "";
        include_once 'header.php';
    ?>

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="reg-form">
                    <form class="form" action="index.php">
                        <div class="form-el">
                            <p>Ваше имя:</p>
                            <input type="text">
                        </div>
                        <div class="form-el">
                            <p>Ваша фамилия:</p>
                            <input type="text">
                        </div>
                        <div class="form-el">
                            <p>Ваш псевдоним:</p>
                            <input type="text">
                        </div>
                        <div class="form-el">
                            <p>Ваш пароль:</p>
                            <input type="password">
                        </div>
                        <div class="form-el">
                            <p>Ваш пол:</p>
                            <input type="radio" id="gender1" name="gender" value="man">
                            <label for="gender1">Мужчина</label>
                            <input type="radio" id="gender2" name="gender" value="woman">
                            <label for="gender2">Женщина</label>
                            <input class="reg_btn" type="submit" value="Зарегистрироваться">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>