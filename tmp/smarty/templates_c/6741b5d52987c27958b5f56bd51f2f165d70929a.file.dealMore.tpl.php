<?php /* Smarty version Smarty-3.1.6, created on 2021-11-24 12:12:13
         compiled from "./views/default/dealMore.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11313884686194a5602dcce5-90117685%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6741b5d52987c27958b5f56bd51f2f165d70929a' => 
    array (
      0 => './views/default/dealMore.tpl',
      1 => 1637744973,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11313884686194a5602dcce5-90117685',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_6194a560330e8',
  'variables' => 
  array (
    'managerName' => 0,
    'link' => 0,
    'status' => 0,
    'stagesAll' => 0,
    'stagesUnit' => 0,
    'dataDeal' => 0,
    'timeDeal' => 0,
    'orderNum' => 0,
    'deadName' => 0,
    'customerName' => 0,
    'customerPhone' => 0,
    'buralPlace' => 0,
    'ceremonyPlace' => 0,
    'morgue' => 0,
    'funeralRoute' => 0,
    'lastRites' => 0,
    'paymentStatus' => 0,
    'comment' => 0,
    'tasks' => 0,
    'task' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6194a560330e8')) {function content_6194a560330e8($_smarty_tpl) {?><div class="content-container-wrapper">
    <div class="deal-header">
        <div class="deal-header-name-dispatch">
            <h2 class="deal-title">Сводка</h2>
            <p class="dispatch-name">Менеджер: <?php echo $_smarty_tpl->tpl_vars['managerName']->value;?>
</p>
        </div>
        <div class="deal-header-link-status">
            <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" target="blank">Ссылка на сделку в Мой Склад</a>
            <div class="deal-header__status-block">
                <p>Статус:</p>
                <div class="deal-header__status">
                    <div class="deal-header__status-curr" id="<?php echo $_smarty_tpl->tpl_vars['status']->value['stage_selector'];?>
">
                        <p><?php echo $_smarty_tpl->tpl_vars['status']->value['name'];?>
</p>
                    </div>
                    <ul class="deal-header__status-other">
                        <?php  $_smarty_tpl->tpl_vars['stagesUnit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stagesUnit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stagesAll']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stagesUnit']->key => $_smarty_tpl->tpl_vars['stagesUnit']->value){
$_smarty_tpl->tpl_vars['stagesUnit']->_loop = true;
?>
                            <li id="<?php echo $_smarty_tpl->tpl_vars['stagesUnit']->value['stage_selector'];?>
" data-stage="<?php echo $_smarty_tpl->tpl_vars['stagesUnit']->value['stage_num'];?>
"><?php echo $_smarty_tpl->tpl_vars['stagesUnit']->value['name'];?>
</li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <p class="date-deal-funeral" id="data-text-deal"><b>Дата похорон: </b><span><?php echo $_smarty_tpl->tpl_vars['dataDeal']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['timeDeal']->value;?>
</span></p>
    <p class="date-deal-funeral"><b>Номер заказа: </b><?php echo $_smarty_tpl->tpl_vars['orderNum']->value;?>
</p>

    <div class="deal-more">
        <div class="deal-more-column">
            <p id="deal-dead__name"><b>ФИО Умершего: </b><?php echo $_smarty_tpl->tpl_vars['deadName']->value;?>
</p>
            <p><b>ФИО Заказчика: </b><?php echo $_smarty_tpl->tpl_vars['customerName']->value;?>
</p>
            <p><b>Телефон Заказчика: </b><?php echo $_smarty_tpl->tpl_vars['customerPhone']->value;?>
</p>
            <p><b>Дата похорон: </b><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['dataDeal']->value;?>
" id="funeral-date"></p>
            <p><b>Время похорон: </b><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['timeDeal']->value;?>
" id="funeral-deal-time"></p>
            <p><b>Кладбище/крематорий: </b><input type="text" id='funeral-place' value="<?php echo $_smarty_tpl->tpl_vars['buralPlace']->value;?>
"></p>
            <p><b>Место траурной церемонии: </b><?php echo $_smarty_tpl->tpl_vars['ceremonyPlace']->value;?>
</p>
        </div>

        <div class="deal-more-column">
            <p id="deal-dead__morgue"><b>Морг: </b><?php echo $_smarty_tpl->tpl_vars['morgue']->value;?>
</p>
            <p id="deal-dead__route"><b>Маршрут: </b><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['funeralRoute']->value;?>
" id="funeral-route"></p>
            <p><b>Обряд: </b><?php echo $_smarty_tpl->tpl_vars['lastRites']->value;?>
</p>
            <p><b>Оплата: </b><?php echo $_smarty_tpl->tpl_vars['paymentStatus']->value;?>
</p>
            <p><b>Комментарий: </b><?php echo $_smarty_tpl->tpl_vars['comment']->value;?>
</p>
            <p><b>Сообщение в для мессенджеров: </b><span>Скопировать</span></p>
        </div>
    </div>

    <div class="deal-tasks">
        <h2 class="deal-title">Задачи</h2>
        <div class="deal-tasks__wrapper">
            <?php  $_smarty_tpl->tpl_vars['task'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['task']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tasks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['task']->key => $_smarty_tpl->tpl_vars['task']->value){
$_smarty_tpl->tpl_vars['task']->_loop = true;
?>
            <div class="deal-task__unit">
                <label class="deal-task__unit-checkbox">
                    <input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['task']->value['id_task'];?>
"
                    <?php if ($_smarty_tpl->tpl_vars['task']->value['state']=='1'){?>
                        checked
                    <?php }?>
                    >
                    <div></div>
                    
                </label>
                <p><?php echo $_smarty_tpl->tpl_vars['task']->value['name'];?>
</p>
            </div>
            <?php } ?>
        </div>
        
    </div>

    <div class="deal-buttons">
        <div class="deal-button deal-button-save">
            <p>Сохранить</p>
        </div>
        <div class="deal-button deal-button-download">
            <p>Скачать заявку</p>
        </div>
    </div>
</div><?php }} ?>