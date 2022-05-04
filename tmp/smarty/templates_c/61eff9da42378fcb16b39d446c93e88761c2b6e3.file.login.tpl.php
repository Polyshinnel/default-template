<?php /* Smarty version Smarty-3.1.6, created on 2022-03-04 14:22:02
         compiled from "./views/default/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:85383041861f2383a3729f1-66258445%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61eff9da42378fcb16b39d446c93e88761c2b6e3' => 
    array (
      0 => './views/default/login.tpl',
      1 => 1646403597,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85383041861f2383a3729f1-66258445',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_61f2383a3bf69',
  'variables' => 
  array (
    'templateWebPath' => 0,
    'pageTitle' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61f2383a3bf69')) {function content_61f2383a3bf69($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/css/style.css">
    <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/img/sidebar-logo.png" type="image/png">
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
                <h1>Авторизация</h1>
                <p>Введите ваш логин и пароль</p>
            </div>

            <div class="service-form__input-block">
                <div class="service-form__input-unit">
                    <label for="login">Логин</label>
                    <input type="text" id="login" placeholder="Логин">
                </div>
                <div class="service-form__input-unit">
                    <div class="service-form__input-unit-label">
                        <label for="pass">Пароль</label>
                        <a href="#">Забыли пароль?</a>
                    </div>
                    <input type="password" id="pass" placeholder="Пароль">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/img/icons/show-pass.svg" alt="" class="show-pass">
                </div>
            </div>

            <div class="service-form__btn service-form__btn-auth">
                <p>Авторизоваться</p>
            </div>

            <p class="err-auth-message">Не верный логин или пароль</p>

            <a href="/?controller=Register" class="register-link">Регистрация</a>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/js/main.js"></script>
</body>
</html><?php }} ?>