<?php /* Smarty version Smarty-3.1.6, created on 2022-05-06 23:46:11
         compiled from "./views/default\restore-pass.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13779248216272d377765aa9-84662442%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17c9e6957e5418d57c79b82bf96ca78204c416d3' => 
    array (
      0 => './views/default\\restore-pass.tpl',
      1 => 1651869485,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13779248216272d377765aa9-84662442',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_6272d377786af',
  'variables' => 
  array (
    'templateWebPath' => 0,
    'pageTitle' => 0,
    'pageText' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6272d377786af')) {function content_6272d377786af($_smarty_tpl) {?><!DOCTYPE html>
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
                <h1>Смена пароля</h1>
                <p>Введите новый пароль</p>
            </div>

            <div class="service-form__inputs">
                <div class="input-block">
                    <div class="input-block__title">
                        <label for="restore-pass">Новый пароль</label>
                    </div>
                    <input type="text" id="restore-pass" placeholder="Новый пароль">
                </div>

                <div class="input-block">
                    <div class="input-block__title">
                        <label for="restore-pass-confirm">Повторите пароль</label>
                    </div>
                    <input type="text" id="restore-pass-confirm" placeholder="Повторите пароль">
                </div>
                
            </div>

            <p class="service-form__text"><?php echo $_smarty_tpl->tpl_vars['pageText']->value;?>
</p>

            <button id="change-pass" class="blue-btn blue-btn_serv">Сменить пароль</button>
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