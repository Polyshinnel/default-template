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
                <h1>Подтверждение</h1>
                <p>Подтвердите вашу почту</p>
            </div>

            <div class="service-form__inputs">
                <div class="input-block">
                    <div class="input-block__title">
                        <label for="confirm-code">Ведите код подтверждения</label>
                    </div>
                    <input type="text" id="confirm-code" placeholder="Код подтверждения">
                </div>
                
            </div>

            <p class="service-form__text">{$pageText}</p>
            <p class="service-form__text service-form__text_mod">Отправить повторно код через: <span id="timer-coutdown">59 c</span></p>

            <button id="confirmBtn" class="blue-btn blue-btn_serv">Подтвердить</button>
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
    <script src="{$templateWebPath}/vendor/inputmask/inputmask.min.js"></script>
    <script>
        let inputMask = new Inputmask("9-9-9-9");
        let elem = document.querySelector('#confirm-code');
        inputMask.mask(elem);
    </script>
    <script type="module" src="{$templateWebPath}/js/common.js"></script>
    <script type="module" src="{$templateWebPath}/js/login.js"></script>
</body>
</html>