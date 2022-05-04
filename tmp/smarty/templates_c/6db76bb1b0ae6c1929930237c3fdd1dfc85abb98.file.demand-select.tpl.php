<?php /* Smarty version Smarty-3.1.6, created on 2022-01-27 08:25:14
         compiled from "./views/default\demand-select.tpl" */ ?>
<?php /*%%SmartyHeaderCode:138312232961f22a224cdac0-78328898%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6db76bb1b0ae6c1929930237c3fdd1dfc85abb98' => 
    array (
      0 => './views/default\\demand-select.tpl',
      1 => 1643261110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138312232961f22a224cdac0-78328898',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_61f22a22507bf',
  'variables' => 
  array (
    'templateWebPath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61f22a22507bf')) {function content_61f22a22507bf($_smarty_tpl) {?>
<div class="workspace">
    <h4 class="workspace__title">Выберите тип заявки</h4>

    <div class="type-demand__wrapper">
        <div class="type-demand__unit">
            <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/img/ecology.jpg" alt="">
            <h4>Заявка на химический анализ<br><span>Экология</span></h4>
            <a href="/?controller=DemandEcology">
                <div class="type-demand__unit-btn">
                    <p>Выбрать</p>
                </div>
            </a>
        </div>

        <div class="type-demand__unit">
            <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/img/products.jpg" alt="">
            <h4>Заявка на химический анализ<br><span>Продукты</span></h4>
            <a href="/?controller=DemandProduct">
                <div class="type-demand__unit-btn">
                    <p>Выбрать</p>
                </div>
            </a>
        </div>
    </div>
</div>
<?php }} ?>