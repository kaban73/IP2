<div class="wrapper">
    <?php
        $url = "styles/style_lkPage.css";
        $title = "Личный кабинет";
        $class_reg_btn = "";
        $class_auth_btn = "";
        $class_lk_btn = "";
        $class_lk_btn_none = "nav-el-none";
        include_once 'header.php';
    ?>

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="nav-panel">
                    <table class="nav-table">
                        <tr><td onclick="window.location.href='/lkPage.php'; return false">Личный кабинет</td></tr>
                        <tr><td onclick="window.location.href='/myFriendsPage.php'; return false">Мои друзья</td></tr>
                        <tr><td onclick="window.location.href='/lkPage.php'; return false">Истории из жизни</td></tr>
                        <tr><td onclick="window.location.href='/lkPage.php'; return false">Мой путь</td></tr>
                        <tr><td onclick="window.location.href='/lkPage.php'; return false">Любимые фото</td></tr>
                    </table>
                </div>
                <div class="content-panel">
                    <div class="title">
                        Приветствуем Вас в вашем личном кабинете!
                    </div>
                    <div class="row content-content">
                        <div class="avatar">
                            <img src="images/avatar.jpg" width="256px" alt="">
                            <a href="#">Изменить фото</a>
                        </div>
                        <div class="data">
                            <div class="data-el">
                                <div class="el-title">
                                    Ваше имя:
                                </div>
                                <div class="el-text">
                                    Иван
                                </div>
                            </div>
                            <div class="data-el">
                                <div class="el-title">
                                    Ваша фамилия:
                                 </div>
                                <div class="el-text">
                                    Борков
                                </div>
                            </div>
                            <div class="data-el">
                                <div class="el-title">
                                    Ваш псевдоним:
                                </div>
                                <div class="el-text">
                                    kaban73
                                </div>
                            </div>
                            <div class="data-el">
                                <div class="el-title">
                                    Ваш пол:
                                </div>
                                <div class="el-text">
                                    мужской
                                </div>
                            </div>
                            <div class="data-el">
                                <a href="#">Изменить данные</a>
                            </div>
                        </div>
                        <div class="information">
                            <div class="el-title">
                                Кратко о себе:
                            </div>
                            <div class="el-info">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia libero possimus expedita nemo, velit dicta autem illum animi perferendis neque ab quasi quae laboriosam in et consequuntur deserunt quibusdam eos?
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>