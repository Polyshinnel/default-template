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
                <h1>Регистрация</h1>
                <p>Введите ваши учетные данные</p>
            </div>

            <div class="service-form__inputs">
                <div class="input-block">
                    <div class="input-block__title">
                        <label for="user-name">Ваше имя</label>
                    </div>
                    <input type="text" id="user-name" placeholder="Ваше имя и фамилия">
                </div>

                <div class="input-block">
                    <div class="input-block__title">
                        <label for="user-email">Email</label>
                    </div>
                    <input type="text" id="user-email" placeholder="Email">
                </div>

                <div class="input-block">
                    <div class="input-block__title">
                        <label for="user-organization">Наименование организации</label>
                    </div>
                    <input type="text" id="user-organization" placeholder="Полное наименование организации">
                </div>

                <div class="input-block">
                    <div class="input-block__title">
                        <label for="user-address">Адрес организации</label>
                    </div>
                    <input type="text" id="user-address" placeholder="Адрес организации">
                </div>

                <div class="input-block">
                    <div class="input-block__title">
                        <label for="user-phone">Телефон</label>
                    </div>
                    <input type="text" id="user-phone" placeholder="Телефон">
                </div>

                <div class="input-block">
                    <div class="input-block__title">
                        <label for="user-password">Пароль</label>
                    </div>
                    <input type="password" id="user-password" placeholder="Пароль">
                </div>
            </div>

            <button id="registerBtn" class="blue-btn blue-btn_serv">Регистрация</button>
            <a href="/" class="service-form__link">Авторизоваться</a>
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
    <script src="{$templateWebPath}/vendor/inputmask/inputmask.min.js"></script>
    <script>
        let inputMask = new Inputmask("+7(999)-999-99-99");
        let elem = document.querySelector('#user-phone');
        inputMask.mask(elem);
    </script>
</body>



</html>