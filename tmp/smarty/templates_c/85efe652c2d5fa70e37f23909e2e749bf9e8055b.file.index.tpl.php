<?php /* Smarty version Smarty-3.1.6, created on 2022-03-01 20:59:05
         compiled from "./views/default/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3049929466194a437a8fa33-62497170%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85efe652c2d5fa70e37f23909e2e749bf9e8055b' => 
    array (
      0 => './views/default/index.tpl',
      1 => 1646168322,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3049929466194a437a8fa33-62497170',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_6194a437a9bd0',
  'variables' => 
  array (
    'templateWebPath' => 0,
    'orders' => 0,
    'order' => 0,
    'type' => 0,
    'prevPage' => 0,
    'nextPage' => 0,
    'showRecords' => 0,
    'totalRecords' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6194a437a9bd0')) {function content_6194a437a9bd0($_smarty_tpl) {?>
<a href="/?controller=DemandSelect" class="new-demand__link">
    <div class="demand-btn">
        <p>Создать новую заявку</p>
    </div>
</a>
<div class="workspace">
    <div class="workspace-title__wrapper">
        <h4 class="workspace__title">Мои анализы</h4>

        <div class="workspace-title__wrapper-switch">
            <input type="text" value="Продукты" readonly>
            <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/img/angle.svg" alt="">
            <div class="workspace-title__wrapper-switch-toggle">
                <ul>
                    <li>Экология</li>
                    <li>Продукты</li>
                </ul>
            </div>
        </div>
    </div>
    

    <div class="workspace-results__title">
        <div class="workspace-results__title-details">
            <p>Детали заказа</p>
        </div>
        <div class="workspace-results__title-number">
            <p>Номер заказа</p>
        </div>
        <div class="workspace-results__title-data">
            <p>Дата</p>
        </div>
        <div class="workspace-results__title-status">
            <p>Статус</p>
        </div>
    </div>

    <?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value){
$_smarty_tpl->tpl_vars['order']->_loop = true;
?>
    <div class="workspace__unit">
        <div class="workspace__unit-details">
            <div class="workspace__unit-details-circle">
                <div class="workspace__unit-details-icon">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/img/icons/analyse-icon.svg" alt="">
                </div>
            </div>
            
            <div class="workspace__unit-details-text">
                <a href="/?controller=Demand&order-id=<?php echo $_smarty_tpl->tpl_vars['order']->value['order_id'];?>
&type=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['order']->value['name'];?>
</a>
                <p><?php echo $_smarty_tpl->tpl_vars['order']->value['paymentStatus'];?>
</p>
            </div>
        </div>
        <div class="workspace__unit-number">
            <h4>Номер заказа <?php echo $_smarty_tpl->tpl_vars['order']->value['orderNum'];?>
</h4>
            <p><?php echo $_smarty_tpl->tpl_vars['order']->value['requestStatus'];?>
</p>
        </div>
        <div class="workspace__unit-data">
            <h4><?php echo $_smarty_tpl->tpl_vars['order']->value['date'];?>
</h4>
            <p><?php echo $_smarty_tpl->tpl_vars['order']->value['time'];?>
</p>
        </div>
        <div class="workspace__unit-status">
            <div class="workspace__unit-status-block" id="<?php echo $_smarty_tpl->tpl_vars['order']->value['statusId'];?>
">
                <p><?php echo $_smarty_tpl->tpl_vars['order']->value['statusName'];?>
</p>
            </div>
        </div>
    </div>
    <?php } ?>

    <div class="pagination">
        <div class="pagination-arrows">
            <a href="/?controller=Index&type=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['prevPage']->value;?>
">
                <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/img/icons/prew-arrow.svg" alt="">
            </a>

            <a href="/?controller=Index&type=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['nextPage']->value;?>
">
                <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/img/icons/next-arrow.svg" alt="">
            </a>
        </div>

        <p class="pagination-results"><?php echo $_smarty_tpl->tpl_vars['showRecords']->value;?>
 из <?php echo $_smarty_tpl->tpl_vars['totalRecords']->value;?>
</p>
    </div>
</div>
<?php }} ?>