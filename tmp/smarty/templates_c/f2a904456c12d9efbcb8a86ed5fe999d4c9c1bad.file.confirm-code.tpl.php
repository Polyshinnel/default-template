<?php /* Smarty version Smarty-3.1.6, created on 2022-05-06 23:06:36
         compiled from "./views/default\confirm-code.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19621425216272d20400e1a3-83294664%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2a904456c12d9efbcb8a86ed5fe999d4c9c1bad' => 
    array (
      0 => './views/default\\confirm-code.tpl',
      1 => 1651768704,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19621425216272d20400e1a3-83294664',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_6272d20402edb',
  'variables' => 
  array (
    'templateWebPath' => 0,
    'pageTitle' => 0,
    'pageText' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6272d20402edb')) {function content_6272d20402edb($_smarty_tpl) {?><!DOCTYPE html>
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

            <p class="service-form__text"><?php echo $_smarty_tpl->tpl_vars['pageText']->value;?>
</p>
            <p class="service-form__text service-form__text_mod">Отправить повторно код через: <span id="timer-coutdown">59 c</span></p>

            <button id="confirmBtn" class="blue-btn blue-btn_serv">Подтвердить</button>
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
    <script src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/vendor/inputmask/inputmask.min.js"></script>
    <script>
        let inputMask = new Inputmask("9-9-9-9");
        let elem = document.querySelector('#confirm-code');
        inputMask.mask(elem);
    </script>
    <script type="module" src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/js/common.js"></script>
    <script type="module" src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/js/login.js"></script>
</body>
</html><?php }} ?>