<?php /* Smarty version Smarty-3.1.6, created on 2022-01-02 00:10:38
         compiled from "./views/default\calendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:92924924461cb8f1b3a6d70-40012143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9da2efc3aaf17dff511a26bf6b301b14fec44420' => 
    array (
      0 => './views/default\\calendar.tpl',
      1 => 1641071435,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92924924461cb8f1b3a6d70-40012143',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_61cb8f1b53772',
  'variables' => 
  array (
    'calendar' => 0,
    'calendarDate' => 0,
    'calendarTitle' => 0,
    'calendarUnit' => 0,
    'calendarUnitTime' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61cb8f1b53772')) {function content_61cb8f1b53772($_smarty_tpl) {?><div class="content-container-wrapper">
    <div class="calendar-wrapper">
        <div class="hour-sidebar">
            <div class="hour-sidebar__box">
                <p>07:00</p>
            </div>
            <div class="hour-sidebar__box">
                <p>07:30</p>
            </div>
            <div class="hour-sidebar__box">
                <p>08:00</p>
            </div>
            <div class="hour-sidebar__box">
                <p>08:30</p>
            </div>
            <div class="hour-sidebar__box">
                <p>09:00</p>
            </div>
            <div class="hour-sidebar__box">
                <p>09:30</p>
            </div>
            <div class="hour-sidebar__box">
                <p>10:00</p>
            </div>
            <div class="hour-sidebar__box">
                <p>10:30</p>
            </div>
            <div class="hour-sidebar__box">
                <p>11:00</p>
            </div>
            <div class="hour-sidebar__box">
                <p>11:30</p>
            </div>
            <div class="hour-sidebar__box">
                <p>12:00</p>
            </div>
            <div class="hour-sidebar__box">
                <p>12:30</p>
            </div>
            <div class="hour-sidebar__box">
                <p>13:00</p>
            </div>
            <div class="hour-sidebar__box">
                <p>13:30</p>
            </div>
            <div class="hour-sidebar__box">
                <p>14:00</p>
            </div>
            <div class="hour-sidebar__box">
                <p>14:30</p>
            </div>
            <div class="hour-sidebar__box">
                <p>15:00</p>
            </div>
            <div class="hour-sidebar__box">
                <p>15:30</p>
            </div>
            <div class="hour-sidebar__box">
                <p>16:00</p>
            </div>
            <div class="hour-sidebar__box">
                <p>16:30</p>
            </div>
            <div class="hour-sidebar__box">
                <p>17:00</p>
            </div>
            <div class="hour-sidebar__box">
                <p>17:30</p>
            </div>
            <div class="hour-sidebar__box">
                <p>18:00</p>
            </div>
        </div>
        <div class="calendar-block">
            <?php  $_smarty_tpl->tpl_vars['calendarUnit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['calendarUnit']->_loop = false;
 $_smarty_tpl->tpl_vars['calendarDate'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['calendar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['calendarUnit']->key => $_smarty_tpl->tpl_vars['calendarUnit']->value){
$_smarty_tpl->tpl_vars['calendarUnit']->_loop = true;
 $_smarty_tpl->tpl_vars['calendarDate']->value = $_smarty_tpl->tpl_vars['calendarUnit']->key;
?>
            <div class="calendar-block__unit">
                <div class="calendar-block__unit-header">
                    <p><?php echo $_smarty_tpl->tpl_vars['calendarTitle']->value[$_smarty_tpl->tpl_vars['calendarDate']->value]['weekDayName'];?>
</p>
                    <h4><?php echo $_smarty_tpl->tpl_vars['calendarTitle']->value[$_smarty_tpl->tpl_vars['calendarDate']->value]['dayTitle'];?>
</h4>
                </div>
                <div class="calendar-block__unit-body">
                    <?php  $_smarty_tpl->tpl_vars['calendarUnitTime'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['calendarUnitTime']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['calendarUnit']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['calendarUnitTime']->key => $_smarty_tpl->tpl_vars['calendarUnitTime']->value){
$_smarty_tpl->tpl_vars['calendarUnitTime']->_loop = true;
?>
                    <div class="calendar-block__unit-box">
                        <?php if ($_smarty_tpl->tpl_vars['calendarUnitTime']->value!='Empty'){?>
                            <div class="calendar-block__unit-deal">
                                <p><?php echo $_smarty_tpl->tpl_vars['calendarUnitTime']->value['timeTitle'];?>
</p>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['calendarUnitTime']->value['orderLink'];?>
">
                                    <h4><?php echo $_smarty_tpl->tpl_vars['calendarUnitTime']->value['deadName'];?>
</h4>
                                </a>
                            </div>
                        <?php }?>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div><?php }} ?>