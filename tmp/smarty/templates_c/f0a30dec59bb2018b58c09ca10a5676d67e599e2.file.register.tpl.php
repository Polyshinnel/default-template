<?php /* Smarty version Smarty-3.1.6, created on 2022-01-27 07:55:04
         compiled from "./views/default\register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198902799361f218f3504260-19355104%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0a30dec59bb2018b58c09ca10a5676d67e599e2' => 
    array (
      0 => './views/default\\register.tpl',
      1 => 1643259299,
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
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/css/style.css">
    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
</head>
<body>
    <div class="form-container">
        <div class="service-form">
            <div class="service-form__logo">
                <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/img/form-logo.png" alt="">
            </div>
            <div class="service-form__title">
                <h1>Регистрация</h1>
                <p>Введите ваши учетные данные</p>
            </div>

            <div class="service-form__input-block">
                <div class="service-form__input-unit">
                    <label for="username">Ваше имя</label>
                    <input type="text" id="username" placeholder="Ваше имя">
                </div>
                <div class="service-form__input-unit">
                    <label for="mail">Email</label>
                    <input type="text" id="mail" placeholder="Email">
                </div>
                <div class="service-form__input-unit">
                    <label for="inn">ИНН организации</label>
                    <input type="text" id="inn" placeholder="ИНН организации">
                </div>
                <div class="service-form__input-unit">
                    <label for="organization">Название организации</label>
                    <input type="text" id="organization" placeholder="Название организации">
                </div>
                <div class="service-form__input-unit">
                    <label for="phone">Телефон</label>
                    <input type="text" id="phone" placeholder="Телефон пользователя">
                </div>
                <div class="service-form__input-unit">
                    <label for="pass">Пароль</label>
                    <input type="password" id="pass" placeholder="Пароль">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/img/icons/show-pass.svg" alt="" class="show-pass">
                </div>
            </div>

            <div class="service-form__btn service-form__btn-register">
                <p>Регистрация</p>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/js/main.js"></script>
</body>
</html><?php }} ?>