<?php /* Smarty version Smarty-3.1.6, created on 2022-02-20 01:22:43
         compiled from "./views/default/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32284013961f253589677a1-84392924%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2d40499da763837f3763eca7f259db727729eae' => 
    array (
      0 => './views/default/register.tpl',
      1 => 1645220298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32284013961f253589677a1-84392924',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_61f25358974db',
  'variables' => 
  array (
    'templateWebPath' => 0,
    'pageTitle' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61f25358974db')) {function content_61f25358974db($_smarty_tpl) {?><!DOCTYPE html>
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
                <div class="type-organization__wrapper">
                    <h4>Тип организации</h4>
                    <div class="type-organization">
                        <div class="checkbox-wrapper">
                            <div class="checkbox-unit">
                                <label for="" class="checkbox-custom">
                                    <input type="checkbox" name="" id="" value="1">
                                </label>
                                <p>ИП</p>
                            </div>
                        </div>
                        
                        <div class="checkbox-wrapper">
                            <div class="checkbox-unit">
                                <label for="" class="checkbox-custom">
                                    <input type="checkbox" name="" id="" value="2">
                                </label>
                                <p>Физ. лицо</p>
                            </div>
                        </div>
    
                        <div class="checkbox-wrapper">
                            <div class="checkbox-unit">
                                <label for="" class="checkbox-custom">
                                    <input type="checkbox" name="" id="" value="3">
                                </label>
                                <p>Юр. лицо</p>
                            </div>
                        </div>
    
                        <div class="checkbox-wrapper">
                            <div class="checkbox-unit">
                                <label for="" class="checkbox-custom">
                                    <input type="checkbox" name="" id="" value="4">
                                </label>
                                <p>Не резидент</p>
                            </div>
                        </div>
                    </div>
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

            <p class="message-registerBox"></p>

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