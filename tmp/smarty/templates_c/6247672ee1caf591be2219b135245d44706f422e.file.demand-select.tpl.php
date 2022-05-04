<?php /* Smarty version Smarty-3.1.6, created on 2022-01-27 06:14:38
         compiled from "./views/default/demand-select.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26850099561f2384eb253e2-91639485%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6247672ee1caf591be2219b135245d44706f422e' => 
    array (
      0 => './views/default/demand-select.tpl',
      1 => 1643261110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26850099561f2384eb253e2-91639485',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'templateWebPath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_61f2384eb2a43',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61f2384eb2a43')) {function content_61f2384eb2a43($_smarty_tpl) {?>
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