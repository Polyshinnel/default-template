<?php /* Smarty version Smarty-3.1.6, created on 2021-11-30 23:21:30
         compiled from "./views/default\deals.tpl" */ ?>
<?php /*%%SmartyHeaderCode:136422747561943d91390561-69526629%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '197df4f6c1989ffa24a9f5d70b76379bfca7f66c' => 
    array (
      0 => './views/default\\deals.tpl',
      1 => 1638303686,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136422747561943d91390561-69526629',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_61943d913e1f6',
  'variables' => 
  array (
    'deals' => 0,
    'deal' => 0,
    'templateWebPath' => 0,
    'totalsInfoPage' => 0,
    'previosPage' => 0,
    'nextPage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61943d913e1f6')) {function content_61943d913e1f6($_smarty_tpl) {?><div class="content-container-wrapper">
    <h2 class="deal-title">Список похорон</h2>

    <a href="/?controller=NewDeal&action=index" class="create-link"><div class="create-btn"><p>Новая заявка</p></div></a>

    <div class="deal-list__block">
        <div class="deal-list__title">
            <p class="deal-list__title-details">Детали похорон</p>
            <p class="deal-list__title-customer">Имя заказчика</p>
            <p class="deal-list__title-date">Дата</p>
            <p class="deal-list__title-state">Статус</p>
        </div>

        <div class="deal-list__wrapper">
            <?php  $_smarty_tpl->tpl_vars['deal'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['deal']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['deals']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['deal']->key => $_smarty_tpl->tpl_vars['deal']->value){
$_smarty_tpl->tpl_vars['deal']->_loop = true;
?>
                <div class="deal-list__unit">

                    <div class="deal-list__unit-icon">
                        <div class="deal-list__unit-icon-round">
                            <a href="/?controller=DealMore&action=index&order_num=<?php echo $_smarty_tpl->tpl_vars['deal']->value['order_num'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/img/deal-cross.svg" alt=""></a>
                        </div>
                    </div>

                    <div class="deal-list__unit-deceased-dispatch">
                        <a href="/?controller=DealMore&action=index&order_num=<?php echo $_smarty_tpl->tpl_vars['deal']->value['order_num'];?>
"><h4><?php echo $_smarty_tpl->tpl_vars['deal']->value['dead_name'];?>
</h4></a>
                        <p>Менеджер: <?php echo $_smarty_tpl->tpl_vars['deal']->value['manager_name'];?>
</p>
                    </div>

                    <div class="deal-list__unit-customer-order-num">
                        <h4><?php echo $_smarty_tpl->tpl_vars['deal']->value['customer_name'];?>
</h4>
                        <p>Номер Закза: <?php echo $_smarty_tpl->tpl_vars['deal']->value['order_num'];?>
</p>
                    </div>

                    <div class="deal-list__unit-date-time">
                        <h4><?php echo $_smarty_tpl->tpl_vars['deal']->value['data_deal'];?>
</h4>
                        <p><?php echo $_smarty_tpl->tpl_vars['deal']->value['time_deal'];?>
</p>
                    </div>

                    <div class="deal-list__unit-status" id="<?php echo $_smarty_tpl->tpl_vars['deal']->value['status_selector'];?>
">
                        <p><?php echo $_smarty_tpl->tpl_vars['deal']->value['status_name'];?>
</p>
                    </div>
                </div>
            <?php } ?>
            

        </div>
    </div>

    <div class="pagination-block">
        <p><?php echo $_smarty_tpl->tpl_vars['totalsInfoPage']->value;?>
</p>
        <div class="pagination-block__btns">
            <a href="/?controller=Deals&actions=index&page=<?php echo $_smarty_tpl->tpl_vars['previosPage']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/img/prew.svg" alt="" class="pagination-block-prev"></a>
            <a href="/?controller=Deals&actions=index&page=<?php echo $_smarty_tpl->tpl_vars['nextPage']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/img/next.svg" alt="" class="pagination-block-next"></a>
        </div>
    </div>
</div>
<?php }} ?>