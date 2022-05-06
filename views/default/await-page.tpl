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
                <h1>Ожидание авторизации</h1>
                <p>Ожидайте пока вашу авторизацию одобрит отдел по работе с диллерами</p>
            </div>

            <img class="await-page" src="{$templateWebPath}/img/await.svg" alt="">

            <p class="service-form__text">{$awaitText}</p>

            <a href="/" class="service-form__link"><button id="loginBtn" class="blue-btn blue-btn_serv">Понятно</button></a>
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