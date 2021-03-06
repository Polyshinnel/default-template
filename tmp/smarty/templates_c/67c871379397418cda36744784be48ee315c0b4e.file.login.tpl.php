<?php /* Smarty version Smarty-3.1.6, created on 2022-05-07 00:24:15
         compiled from "./views/default\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:46396347261f216e62f0cf4-52635628%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67c871379397418cda36744784be48ee315c0b4e' => 
    array (
      0 => './views/default\\login.tpl',
      1 => 1651872157,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '46396347261f216e62f0cf4-52635628',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_61f216e632959',
  'variables' => 
  array (
    'templateWebPath' => 0,
    'pageTitle' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61f216e632959')) {function content_61f216e632959($_smarty_tpl) {?><!DOCTYPE html>
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
                    <img id="show-pass" src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/img/show.svg" alt="">
                </div>
            </div>

            <button id="loginBtn" class="blue-btn blue-btn_serv">Авторизоваться</button>
            <a href="/?controller=Register" class="service-form__link">Регистрация</a>
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
</body>
</html><?php }} ?>