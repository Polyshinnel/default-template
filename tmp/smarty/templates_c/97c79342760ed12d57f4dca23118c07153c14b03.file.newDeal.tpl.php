<?php /* Smarty version Smarty-3.1.6, created on 2021-11-24 12:12:07
         compiled from "./views/default/newDeal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16485062186194a4dd12f128-76400602%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97c79342760ed12d57f4dca23118c07153c14b03' => 
    array (
      0 => './views/default/newDeal.tpl',
      1 => 1637744973,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16485062186194a4dd12f128-76400602',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_6194a4dd1a9e1',
  'variables' => 
  array (
    'templateWebPath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6194a4dd1a9e1')) {function content_6194a4dd1a9e1($_smarty_tpl) {?><div class="content-container-wrapper">
    <div class="main-deal-info-title-save">
        <h2 class="deal-title">Информация о заказчике</h2>
        <div class="main-deal-info-save"><p>Сохранить</p></div>
    </div>
    
    <div class="main-deal-info">
        <div class="main-deal-info-column">
            <div class="main-deal-info-column-unit">
                <label for="dead-name">ФИО Умершего</label>
                <input type="text" name="dead-name" id="dead-name" placeholder="ФИО Умершего">
                <img class="check-right" src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/img/check-pole.svg" alt="">
            </div>
            <div class="main-deal-info-column-unit">
                <label for="customer-name">ФИО Заказчика</label>
                <input type="text" name="customer-name" id="customer-name" placeholder="ФИО Заказчика">
                <img class="check-right" src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/img/check-pole.svg" alt="">
            </div>
            <div class="main-deal-info-column-unit">
                <label for="customer-phone">Телефон Заказчика</label>
                <input type="text" name="customer-phone" id="customer-phone" placeholder="Телефон Заказчика">
                <img class="check-right" src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/img/check-pole.svg" alt="">
            </div>
            <div class="main-deal-info-column-unit">
                <label for="funeral-date">Дата похорон</label>
                <input type="text" name="funeral-date" id="funeral-date" placeholder="Дата похорон">
                <img class="check-right" src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/img/check-pole.svg" alt="">
            </div>
            <div class="main-deal-info-column-unit">
                <label for="funeral-time">Время похорон</label>
                <input type="text" name="funeral-time" id="funeral-time" placeholder="Время похорон">
                <img class="check-right" src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/img/check-pole.svg" alt="">
            </div>
        </div>

        <div class="main-deal-info-column">
            <div class="main-deal-info-column-unit">
                <label for="morgue-place">Морг</label>
                <input type="text" name="morgue-place" id="morgue-place" placeholder="Морг">
                <img class="check-right" src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/img/check-pole.svg" alt="">
            </div>
            <div class="main-deal-info-column-unit">
                <label for="ceremony-place">Место траурной церемонии</label>
                <input type="text" name="ceremony-place" id="ceremony-place" value="Траурный зал" readonly>
                <img class="check-right" src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/img/check-pole.svg" alt="">
                <ul class="main-deal-info-column-unit__toggle">
                    <li><p>Храм</p></li>
                    <li><p>Кладбище</p></li>
                    <li><p>Траурный зал</p></li>
                    <li><p>Иное место</p></li>
                </ul>
            </div>
            <div class="main-deal-info-column-unit">
                <label for="bural-type">Кладбище/Крематорий</label>
                <input type="text" name="bural-type" id="bural-type" placeholder="Кладбище/Крематорий">
                <img class="check-right" src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/img/check-pole.svg" alt="">
            </div>
            <div class="main-deal-info-column-unit">
                <label for="funeral-route">Маршрут движения</label>
                <input type="text" name="funeral-route" id="funeral-route" placeholder="Маршрут движения">
                <img class="check-right" src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/img/check-pole.svg" alt="">
            </div>
            <div class="main-deal-info-column-unit">
                <label for="nubmer-sklad">Номер заказа в Мой Склад</label>
                <input type="text" name="nubmer-sklad" id="nubmer-sklad" placeholder="Номер заказа в Мой Склад">
                <img class="check-right check-right-deal" src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/img/refresh.svg" alt="">
            </div>
        </div>

        <div class="main-deal-info-column">
            <div class="main-deal-info-column-unit">
                <label for="last-rites">Обряд</label>
                <input type="text" name="last-rites" id="last-rites" value="Православный" readonly>
                <ul class="main-deal-info-column-unit__toggle">
                    <li><p>Православный</p></li>
                    <li><p>Мусульманский</p></li>
                    <li><p>Иудейский</p></li>
                    <li><p>Католический</p></li>
                    <li><p>Без отпевания</p></li>
                </ul>
                <img class="check-right" src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/img/check-pole.svg" alt="">
            </div>
            <div class="main-deal-info-column-unit">
                <label for="payment-status">Статус оплаты</label>
                <input type="text" name="payment-status" id="payment-status" value="Предоплата" readonly>
                <img class="check-right" src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/img/check-pole.svg" alt="">
                <ul class="main-deal-info-column-unit__toggle">
                    <li><p>Предоплата</p></li>
                    <li><p>Полная оплата</p></li>
                </ul>
            </div>
            <div class="main-deal-info-column-unit">
                <label for="comment">Комментарий</label>
                <textarea name="comment" id="comment" placeholder="Комментарий"></textarea>
            </div>
            <input type="hidden" name="sklad_link" id="sklad_link">
        </div>
    </div>

    <h2 class="deal-title deal-title_new">Дополнительный сервис</h2>
    <div class="main-deal-tasks-block">
        <!--Первая колонка-->
        <div class="main-deal-tasks-column">
            <div class="main-deal-tasks-unit">
                <label class="deal-task__unit-checkbox">
                    <input type="checkbox" value="1">
                    <div></div>
                </label>
                <p>Катафалк</p>
            </div>

            <div class="main-deal-tasks-unit">
                <label class="deal-task__unit-checkbox">
                    <input type="checkbox" value="2">
                    <div></div>
                </label>
                <p>Доп. Транспорт</p>
            </div>

            <div class="main-deal-tasks-unit">
                <label class="deal-task__unit-checkbox">
                    <input type="checkbox" value="3">
                    <div></div>
                </label>
                <p>Грузчики</p>
            </div>

            <div class="main-deal-tasks-unit">
                <label class="deal-task__unit-checkbox">
                    <input type="checkbox" value="4">
                    <div></div>
                </label>
                <p>Могила</p>
            </div>
        </div>

        <!--Вторая колонка-->
        <div class="main-deal-tasks-column">
            <div class="main-deal-tasks-unit">
                <label class="deal-task__unit-checkbox">
                    <input type="checkbox" value="5">
                    <div></div>
                </label>
                <p>Оформление документов</p>
            </div>
            
            <div class="main-deal-tasks-unit">
                <label class="deal-task__unit-checkbox">
                    <input type="checkbox" value="6">
                    <div></div>
                </label>
                <p>Предпохоронная подготовка</p>
            </div>

            <div class="main-deal-tasks-unit">
                <label class="deal-task__unit-checkbox">
                    <input type="checkbox" value="7">
                    <div></div>
                </label>
                <p>Комплектация похорон</p>
            </div>

            <div class="main-deal-tasks-unit">
                <label class="deal-task__unit-checkbox">
                    <input type="checkbox" value="8">
                    <div></div>
                </label>
                <p>Фотопортрет</p>
            </div>
        </div>

        <!--Третья колонка-->
        <div class="main-deal-tasks-column">
            <div class="main-deal-tasks-unit">
                <label class="deal-task__unit-checkbox">
                    <input type="checkbox" value="9">
                    <div></div>
                </label>
                <p>Слайдшоу</p>
            </div>

            <div class="main-deal-tasks-unit">
                <label class="deal-task__unit-checkbox">
                    <input type="checkbox" value="10">
                    <div></div>
                </label>
                <p>Прямая трансляция</p>
            </div>

            <div class="main-deal-tasks-unit">
                <label class="deal-task__unit-checkbox">
                    <input type="checkbox" value="11">
                    <div></div>
                </label>
                <p>Церемониймейстер</p>
            </div>
        </div>
    </div>
</div><?php }} ?>