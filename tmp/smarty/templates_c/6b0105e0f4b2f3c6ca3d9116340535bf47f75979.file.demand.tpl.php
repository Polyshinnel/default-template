<?php /* Smarty version Smarty-3.1.6, created on 2022-03-01 07:41:45
         compiled from "./views/default/demand.tpl" */ ?>
<?php /*%%SmartyHeaderCode:169033296461f24379017731-03564678%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b0105e0f4b2f3c6ca3d9116340535bf47f75979' => 
    array (
      0 => './views/default/demand.tpl',
      1 => 1646120493,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169033296461f24379017731-03564678',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_61f24379029e1',
  'variables' => 
  array (
    'orderNum' => 0,
    'orderName' => 0,
    'order' => 0,
    'key' => 0,
    'value' => 0,
    'statusInfo' => 0,
    'requestStatus' => 0,
    'templateWebPath' => 0,
    'paymentStatus' => 0,
    'product' => 0,
    'protocolUrl' => 0,
    'demandUrl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61f24379029e1')) {function content_61f24379029e1($_smarty_tpl) {?><div class="workspace">
    <div class="results__wrapper">
        <div class="analyse-details-status">
            <div class="analyse-details">
                <div class="analyse-details__header">
                    <h1>Номер заказа: <?php echo $_smarty_tpl->tpl_vars['orderNum']->value;?>
</h1>
                    <p><?php echo $_smarty_tpl->tpl_vars['orderName']->value;?>
</p>
                </div>
                
                <div class="analyse-details__list">
                    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                        <p><b><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
:</b> <?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</p>
                    <?php } ?>
                </div>
            </div>
            <div class="analyse-status">
                <div class="analyse-status-block">
                    <p class="analyse-status-block-title">Статус:</p>
                    <div class="analyse-status-block__unit" id="<?php echo $_smarty_tpl->tpl_vars['statusInfo']->value['status_id'];?>
">
                        <p><?php echo $_smarty_tpl->tpl_vars['statusInfo']->value['status_name'];?>
</p>
                    </div>
                </div>

                <div class="analyse-status__payment-demand">
                    <?php if ($_smarty_tpl->tpl_vars['requestStatus']->value==0){?>
                        <div class="analyse-status__demand analyse-status__unit">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/img/icons/cross.svg" alt="">
                            <p>Заявка не прикреплена</p>
                        </div>
                    <?php }else{ ?>
                        <div class="analyse-status__demand analyse-status__unit">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/img/icons/checked.svg" alt="">
                            <p>Заявка прикреплена</p>
                        </div>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['paymentStatus']->value==0){?>
                        <div class="analyse-status__payment analyse-status__unit">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/img/icons/cross.svg" alt="">
                            <p>Не оплачено</p>
                        </div>
                    <?php }else{ ?>
                        <div class="analyse-status__payment analyse-status__unit">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/img/icons/checked.svg" alt="">
                            <p>Оплачено</p>
                        </div>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['requestStatus']->value==0){?>
                        <div class="upload-demand-order">
                            <p>Загрузить заявку</p>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>

        <div class="analyse__demiter">

        </div>

        <div class="analyse__results">
            <div class="analyse__results-header">
                <h4>Сведения о продукте:</h4>

                <div class="analyse__results-wrapper">
                    <div class="analyse__results-column">
                        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                            <p><b><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
:</b> <?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="analyse-btns-wrapper">
    <?php if ($_smarty_tpl->tpl_vars['protocolUrl']->value!='none'){?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['protocolUrl']->value;?>
" target="blank">
            <div class="analyse-btn-download-protocol">
                <p>Скачать протокол</p>
            </div>
        </a>
    <?php }?>

    <a href="<?php echo $_smarty_tpl->tpl_vars['demandUrl']->value;?>
">
        <div class="analyse-btn-download-demand">
            <p>Скачать бланк заявки</p>
        </div>
    </a>
</div><?php }} ?>