<?php /* Smarty version Smarty-3.1.6, created on 2022-03-01 20:40:32
         compiled from "./views/default/profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1944262479621e7cc1d8c544-90083176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b21769ebc05a70019598ab20ef34923c4272b22' => 
    array (
      0 => './views/default/profile.tpl',
      1 => 1646167227,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1944262479621e7cc1d8c544-90083176',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_621e7cc1d905b',
  'variables' => 
  array (
    'userName' => 0,
    'userPhone' => 0,
    'userMail' => 0,
    'userOrgName' => 0,
    'userInn' => 0,
    'orgTypeName' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_621e7cc1d905b')) {function content_621e7cc1d905b($_smarty_tpl) {?><div class="workspace">
    <div class="profiler-wrapper">
        <div class="register-data profiler-block">
            <h4>Регистрационные данные</h4>

            <div class="workspace-inputs">
                <div class="workspace-input__unit">
                    <label for="">Ваше имя</label>
                    <input type="text" id="profile-name" value="<?php echo $_smarty_tpl->tpl_vars['userName']->value;?>
">
                </div>
    
                <div class="workspace-input__unit">
                    <label for="">Телефон</label>
                    <input type="text" id="profile-phone" value="<?php echo $_smarty_tpl->tpl_vars['userPhone']->value;?>
">
                </div>
    
                <div class="workspace-input__unit">
                    <label for="">email</label>
                    <input type="text" id="profile-mail" value="<?php echo $_smarty_tpl->tpl_vars['userMail']->value;?>
">
                </div>
    
                <div class="workspace-input__unit">
                    <label for="">Название организации</label>
                    <input type="text" id="profile-org-name" value="<?php echo $_smarty_tpl->tpl_vars['userOrgName']->value;?>
">
                </div>
    
                <div class="workspace-input__unit">
                    <label for="">инн организации</label>
                    <input type="text" id="profile-inn" value="<?php echo $_smarty_tpl->tpl_vars['userInn']->value;?>
">
                </div>
    
                <div class="workspace-input__unit">
                    <label for="">Тип организации</label>
                    <input type="text" id="profile-org-type" value="<?php echo $_smarty_tpl->tpl_vars['orgTypeName']->value;?>
">
    
                    <div class="workspace-input__unit-toggle">
                        <ul>
                            <li>ИП</li>
                            <li>Физ.лицо</li>
                            <li>Юр.лицо</li>
                            <li>Не резидент</li>
                        </ul>
                    </div>
                </div>    
            </div>
            
            <div class="save-profile__btn profile-btn">
                <p>Обновить профиль</p>
            </div>
        </div>

        <div class="password-data profiler-block">
            <h4>Сменить пароль</h4>

            <div class="workspace-inputs">
                <div class="workspace-input__unit">
                    <label for="">Новый пароль</label>
                    <input type="text" id="profile-pass" placeholder="Новый пароль">
                </div>
    
                <div class="workspace-input__unit">
                    <label for="">Повторите пароль</label>
                    <input type="text" id="profile-pass-accept" placeholder="Повторите пароль">
                </div>
            </div>
            

            <div class="refresh-pass__btn profile-btn">
                <p>Сменить пароль</p>
            </div>
        </div>
    </div>
</div>
<?php }} ?>