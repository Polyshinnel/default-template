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
                <h1>Смена пароля</h1>
                <p>Введите новый пароль</p>
            </div>

            <div class="service-form__inputs">
                <div class="input-block">
                    <div class="input-block__title">
                        <label for="restore-pass">Новый пароль</label>
                    </div>
                    <input type="text" id="restore-pass" placeholder="Новый пароль">
                </div>

                <div class="input-block">
                    <div class="input-block__title">
                        <label for="restore-pass-confirm">Повторите пароль</label>
                    </div>
                    <input type="text" id="restore-pass-confirm" placeholder="Повторите пароль">
                </div>
                
            </div>

            <p class="service-form__text">{$pageText}</p>

            <button id="change-pass" class="blue-btn blue-btn_serv">Сменить пароль</button>
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