<?php /* Smarty version Smarty-3.1.6, created on 2022-03-03 14:53:22
         compiled from "./views/default/demand-ecology.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162657093061f23850125206-59459463%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb2f30964b2a12894240b3b4052a739060278e79' => 
    array (
      0 => './views/default/demand-ecology.tpl',
      1 => 1646319184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162657093061f23850125206-59459463',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_61f23850137e3',
  'variables' => 
  array (
    'templateWebPath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61f23850137e3')) {function content_61f23850137e3($_smarty_tpl) {?><div class="workspace">
    <div class="workspace-inputs">
        <div class="workspace-input__unit">
            <label for="">Заявитель(заказчик)</label>
            <input type="text" id="customer-name" placeholder="Полное наименование заказчика">
        </div>

        <div class="workspace-input__unit">
            <label for="">Адрес</label>
            <input type="text" id="address-customer" placeholder="Адрес заказчика">
        </div>

        <div class="workspace-input__unit">
            <label for="">Телефон</label>
            <input type="text" id="phone-customer" placeholder="Телефон заказчика">
        </div>

        <div class="workspace-input__unit">
            <label for="">Кто производит отбор проб</label>
            <input type="text" id="employee-name" placeholder="ИЛКППЭ">
        </div>

        <div class="workspace-input__unit">
            <label for="">Адрес объекта проведения проб</label>
            <input type="text" id="address-object" placeholder="Адрес объекта проведения проб">
        </div>

        <div class="workspace-input__unit">
            <label for="">Образцы отобраны согласно:</label>
            <input type="text" id="normative-documents" placeholder="Гост или иная НД">
            <div class="workspace-input__unit-toggle">
                <ul>
                    <li>ГОСТ Р 56237-2014</li>
                    <li>ГОСТ 31942-2012</li>
                </ul>
            </div>
        </div>

        <div class="workspace-input__unit">
            <label for="">На соответствие требованиям</label>
            <input type="text" id="customer-requirements" placeholder="СанПин или другая НД">
            <div class="workspace-input__unit-toggle">
                <ul>
                    <li>СанПиН 2.1.3684-21</li>
                    <li>СанПиН 2.1.3685-21</li>
                </ul>
            </div>
        </div>

        <div class="workspace-input__unit">
            <label for="">В целях, основание</label>
            <input type="text" id="customer-aims" placeholder="Цель отбора проб">
            <div class="workspace-input__unit-toggle">
                <ul>
                    <li>Производственный контроль</li>
                    <li>Контроль качества</li>
                    <li>Количественный хим.анализ</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="checkbox-wrapper">
        <div class="checkbox-unit">
            <label for="checkbox" class="checkbox-custom">
                <input type="checkbox" name="" id="ecology-utilization">
            </label>
            <p>согласен на утилизацию остатков сданных для испытаний образцов после проведения анализа</p>
        </div>

        <div class="checkbox-unit">
            <label for="checkbox" class="checkbox-custom">
                <input type="checkbox" name="" id="ecology-return" >
            </label>
            <p>возврат заказчику остатка сданных образцов после проведения испытаний</p>
        </div>
    </div>

    <div class="checkbox-wrapper">
        <h4>Получение результатов испытаний:</h4>
        <div class="checkbox-unit">
            <label for="checkbox" class="checkbox-custom">
                <input type="checkbox" name="" id="ecology-cabinet" checked readonly>
            </label>
            <p>Загрузка в личный кабинет</p>
        </div>

        <div class="checkbox-unit">
            <label for="checkbox" class="checkbox-custom">
                <input type="checkbox" name="" id="ecology-paper">
            </label>
            <p>На руки</p>
        </div>

        <div class="checkbox-unit">
            <label for="checkbox" class="checkbox-custom">
                <input type="checkbox" name="" id="ecology-email">
            </label>
            <p>Эл. почтой</p>
        </div>
    </div>

    <div class="sample-wrapper">
        <h2>Список образцов для заказа</h2>
        <div class="sample-wrapper__block">
            <div class="sample-unit">
                <h4>Наименование №1</h4>
                <div class="sample-unit__wrapper">
                    <div class="sample-unit__input ecology-name">
                        <label for="">Наименование</label>
                        <input type="text" placeholder="Полное наименование образца">
                    </div>
    
                    <div class="sample-unit__input ecology-data">
                        <label for="">Дата/Время отбора пробы</label>
                        <input type="text" placeholder="Дата/Время отбора пробы">
                    </div>
    
                    <div class="sample-unit__input ecology-place">
                        <label for="">Место отбора пробы</label>
                        <input type="text" placeholder="Место отбора пробы">
                    </div>
    
                    <div class="sample-unit__input ecology-volume">
                        <label for="">Объем пробы, тара</label>
                        <input type="text" placeholder="Объем пробы, тара">
                    </div>
    
                    <div class="sample-unit__input ecology-programm">
                        <label for="">Программа испытания</label>
                        <input type="text" placeholder="Наименование показателей, методы">
                    </div>
                </div>
            </div>
        </div>

        <div class="add-sample__btn" id="addEcology">
            <div class="add-sample__btn-plus">
                <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/img/icons/plus.svg" alt="">
            </div>

            <p>Добавить еще одно наименование</p>
        </div>
    </div>
</div>

<div class="btns-create-wrapper">
    <div class="create-order__btn" id="create-ecology">
        <p>Создать заявку</p>
    </div>
</div><?php }} ?>