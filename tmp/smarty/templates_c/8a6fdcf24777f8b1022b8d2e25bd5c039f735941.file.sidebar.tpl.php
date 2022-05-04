<?php /* Smarty version Smarty-3.1.6, created on 2021-11-08 12:21:30
         compiled from "./views/default\sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:73640973961884361a86be8-77564877%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a6fdcf24777f8b1022b8d2e25bd5c039f735941' => 
    array (
      0 => './views/default\\sidebar.tpl',
      1 => 1636363284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73640973961884361a86be8-77564877',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_61884361a8926',
  'variables' => 
  array (
    'rsCategories' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61884361a8926')) {function content_61884361a8926($_smarty_tpl) {?><div class="sidebar">
    <div class="sidebar__menu">
        <h4>Меню</h4>
        <ul>
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <li><a href="#"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></li>
            <?php } ?>
        </ul>
    </div>
</div><?php }} ?>