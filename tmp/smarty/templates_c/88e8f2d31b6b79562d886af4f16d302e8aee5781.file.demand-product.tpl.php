<?php /* Smarty version Smarty-3.1.6, created on 2022-02-18 08:47:14
         compiled from "./views/default/demand-product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:185688944761f253a4210af9-44851121%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88e8f2d31b6b79562d886af4f16d302e8aee5781' => 
    array (
      0 => './views/default/demand-product.tpl',
      1 => 1645174032,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185688944761f253a4210af9-44851121',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_61f253a422273',
  'variables' => 
  array (
    'templateWebPath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61f253a422273')) {function content_61f253a422273($_smarty_tpl) {?><div class="workspace">
    <div class="workspace-inputs">
        <div class="workspace-input__unit">
            <label for="">Заявитель(заказчик)</label>
            <input type="text" placeholder="Полное наименование заказчика" id="customer-name">
        </div>

        <div class="workspace-input__unit">
            <label for="">Адрес</label>
            <input type="text" placeholder="Адрес заказчика" id="customer-address">
        </div>

        <div class="workspace-input__unit">
            <label for="">Телефон</label>
            <input type="text" placeholder="Телефон заказчика" id="customer-phone">
        </div>

        <div class="workspace-input__unit">
            <label for="">Изготовитель</label>
            <input type="text" placeholder="Полное наименование изготовителя" id="manufacturer-name">
        </div>

        <div class="workspace-input__unit">
            <label for="">Адрес изготовителя</label>
            <input type="text" placeholder="Адрес изготовителя" id="manufacturer-address">
        </div>

        <div class="workspace-input__unit">
            <label for="">Отбор проб произведен</label>
            <input type="text" placeholder="Дата, номер акта" id="data-sample">
        </div>

        <div class="workspace-input__unit">
            <label for="">Место отбора образца</label>
            <input type="text" placeholder="Фактический адрес" id="sample-address">
        </div>

        <div class="workspace-input__unit">
            <label for="">Образцы отобраны согласно</label>
            <input type="text" placeholder="НД на отбор проб" id="documentation-sample">
        </div>

        <div class="workspace-input__unit">
            <label for="">Условия доставки образцов</label>
            <input type="text" placeholder="Автомобиль, тара, температура" id="conditions-sample">
        </div>

        <div class="workspace-input__unit">
            <label for="">На соответствие требованиям</label>
            <input type="text" placeholder="На соответствие требованиям" id="requemnts-customer">
            <div class="workspace-input__unit-toggle">
                <ul>
                    <li>ЕСГТ №299 от 28.05.2010</li>
                    <li>СанПин 2.3.2.1078-01</li>
                    <li>ТР ТС 015/2011</li>
                    <li>ТР ТС 021/2011</li>
                    <li>ТР ТС 023/2011</li>
                    <li>ТР ТС 024/2011</li>
                    <li>ТР ТС 033/2013</li>
                    <li>ТР ТС 034/2013</li>
                    <li>ТР ЕАЭС 040/2016</li>
                </ul>
            </div>
        </div>

        <div class="workspace-input__unit">
            <label for="">В целях</label>
            <input type="text" placeholder="В целях" id="aims-customer">
            <div class="workspace-input__unit-toggle">
                <ul>
                    <li>Контроля качества продукции</li>
                    <li>Декларирования соответствия</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="checkbox-wrapper">
        <div class="checkbox-unit">
            <label for="checkbox" class="checkbox-custom">
                <input type="checkbox" name="" id="utilizations-sample">
            </label>
            <p>согласен на утилизацию остатков сданных для испытаний образцов после проведения анализа</p>
        </div>

        <div class="checkbox-unit">
            <label for="checkbox" class="checkbox-custom">
                <input type="checkbox" name="" id="back-sample">
            </label>
            <p>возврат заказчику остатка сданных образцов после проведения испытаний</p>
        </div>
    </div>

    <div class="checkbox-wrapper">
        <h4>Получение результатов испытаний:</h4>
        <div class="checkbox-unit">
            <label for="checkbox" class="checkbox-custom">
                <input type="checkbox" name="" id="personal-cabiner" checked readonly>
            </label>
            <p>Загрузка в личный кабинет</p>
        </div>

        <div class="checkbox-unit">
            <label for="checkbox" class="checkbox-custom">
                <input type="checkbox" name="" id="documents-back">
            </label>
            <p>На руки</p>
        </div>

        <div class="checkbox-unit">
            <label for="checkbox" class="checkbox-custom">
                <input type="checkbox" name="" id="mail-back">
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
                    <div class="sample-unit__input product-name">
                        <label for="">Наименование</label>
                        <input type="text" placeholder="Полное наименование продукта">
                    </div>
    
                    <div class="sample-unit__input product-date">
                        <label for="">Дата/Время изготовления и упаковки</label>
                        <input type="text" placeholder="Дата/время изготовления и упаковки">
                    </div>
    
                    <div class="sample-unit__input time-suitability">
                        <label for="">Срок годности</label>
                        <input type="text" placeholder="Срок годности продукта">
                    </div>
    
                    <div class="sample-unit__input product-package">
                        <label for="">Тара, упаковка</label>
                        <input type="text" placeholder="Тара, упаковка">
                    </div>
    
                    <div class="sample-unit__input product-volume">
                        <label for="">Объем/масса пробы</label>
                        <input type="text" placeholder="Объем, масса пробы">
                    </div>
    
                    <div class="sample-unit__input product-programm">
                        <label for="">Программа испытания</label>
                        <input type="text" placeholder="Наименование показателей, методы">
                    </div>
                </div>
            </div>
        </div>
        
        <div class="add-sample__btn" id="addProduct">
            <div class="add-sample__btn-plus">
                <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/img/icons/plus.svg" alt="">
            </div>
            <p>Добавить еще одно наименование</p>
        </div>
    </div>
</div>

<div class="btns-create-wrapper">
    <div class="create-order__btn" id="create-product">
        <p>Создать заявку</p>
    </div>
</div><?php }} ?>