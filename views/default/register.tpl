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
                    <input type="text" id="user-name" placeholder="Ваше имя">
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

            <button class="blue-btn blue-btn_serv">Регистрация</button>
        </div>
    </div>
</body>
</html>