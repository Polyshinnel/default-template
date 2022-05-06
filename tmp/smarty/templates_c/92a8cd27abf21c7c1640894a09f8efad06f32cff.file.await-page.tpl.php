<?php /* Smarty version Smarty-3.1.6, created on 2022-05-07 00:18:59
         compiled from "./views/default\await-page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:798572992627590c39018f6-60074716%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92a8cd27abf21c7c1640894a09f8efad06f32cff' => 
    array (
      0 => './views/default\\await-page.tpl',
      1 => 1651871892,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '798572992627590c39018f6-60074716',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'templateWebPath' => 0,
    'pageTitle' => 0,
    'awaitText' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_627590c3a838c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627590c3a838c')) {function content_627590c3a838c($_smarty_tpl) {?><!DOCTYPE html>
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
                <h1>Ожидание авторизации</h1>
                <p>Ожидайте пока вашу авторизацию одобрит отдел по работе с диллерами</p>
            </div>

            <img class="await-page" src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/img/await.svg" alt="">

            <p class="service-form__text"><?php echo $_smarty_tpl->tpl_vars['awaitText']->value;?>
</p>

            <a href="/" class="service-form__link"><button id="loginBtn" class="blue-btn blue-btn_serv">Понятно</button></a>
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