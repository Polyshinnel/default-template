<?php /* Smarty version Smarty-3.1.6, created on 2022-05-05 19:38:38
         compiled from "./views/default\register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198902799361f218f3504260-19355104%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0a30dec59bb2018b58c09ca10a5676d67e599e2' => 
    array (
      0 => './views/default\\register.tpl',
      1 => 1651768704,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198902799361f218f3504260-19355104',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_61f218f353bd2',
  'variables' => 
  array (
    'templateWebPath' => 0,
    'pageTitle' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61f218f353bd2')) {function content_61f218f353bd2($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/css/style.css">
    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/img/favicon.ico" type="image/x-icon">
    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
</head>
<body>
    <div class="service-form__wrapper">
        <div class="service-form">
            <div class="service-form__title">
                <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/img/logo-blue.png" alt="">
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
                <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/img/sucess.svg" alt="">
                <p>Регистрация прошла успешно</p>
            </div>
        </div>
    </div>

    <script type="module" src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/js/common.js"></script>
    <script type="module" src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/js/login.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/vendor/inputmask/inputmask.min.js"></script>
    <script>
        let inputMask = new Inputmask("+7(999)-999-99-99");
        let elem = document.querySelector('#user-phone');
        inputMask.mask(elem);
    </script>
</body>



</html><?php }} ?>