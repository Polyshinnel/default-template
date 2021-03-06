<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{$templateWebPath}/css/style.css">
    <link rel="shortcut icon" href="{$templateWebPath}/img/favicon.ico" type="image/x-icon">
    <title>{$pageTitle}</title>
</head>
<body>
    <div class="service-form__wrapper">
        <div class="service-form">
            <div class="service-form__title">
                <img src="{$templateWebPath}/img/logo-blue.png" alt="">
                <h1>Авторизация</h1>
                <p>Введите ваш логин и пароль</p>
            </div>

            <div class="service-form__inputs">
                <div class="input-block">
                    <div class="input-block__title">
                        <label for="login">Логин</label>
                    </div>
                    <input type="text" id="login" placeholder="Логин">
                </div>
                <div class="input-block">
                    <div class="input-block__title">
                        <label for="password">Пароль</label>
                        <a href="/?controller=Restore">Забыли пароль?</a>
                    </div>
                    <input type="password" id="password" placeholder="Пароль">
                    <img id="show-pass" src="{$templateWebPath}/img/show.svg" alt="">
                </div>
            </div>

            <button id="loginBtn" class="blue-btn blue-btn_serv">Авторизоваться</button>
            <a href="/?controller=Register" class="service-form__link">Регистрация</a>
        </div>
    </div>

    <div class="fancy-box">
        <div class="fancy-box__wrapper">
            <div class="fanncy-message">
                <img src="{$templateWebPath}/img/sucess.svg" alt="">
                <p>Регистрация прошла успешно</p>
            </div>
        </div>
    </div>

    <script type="module" src="{$templateWebPath}/js/common.js"></script>
    <script type="module" src="{$templateWebPath}/js/login.js"></script>
</body>
</html>