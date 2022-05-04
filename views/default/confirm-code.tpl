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

            <button class="blue-btn blue-btn_serv">Подтвердить</button>
        </div>
    </div>
</body>
</html>