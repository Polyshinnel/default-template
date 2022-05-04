<?php /* Smarty version Smarty-3.1.6, created on 2022-01-27 08:25:46
         compiled from "./views/default\demand-product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:175311464861f22cda91cd46-17077621%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd798e9e53c71bcc6ac3e169613995bf76270aa3' => 
    array (
      0 => './views/default\\demand-product.tpl',
      1 => 1643260959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175311464861f22cda91cd46-17077621',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'templateWebPath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_61f22cda95fbc',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61f22cda95fbc')) {function content_61f22cda95fbc($_smarty_tpl) {?><div class="workspace">
    <div class="workspace-inputs">
        <div class="workspace-input__unit">
            <label for="">Заявитель(заказчик)</label>
            <input type="text" placeholder="Полное наименование заказчика">
        </div>

        <div class="workspace-input__unit">
            <label for="">Адрес</label>
            <input type="text" placeholder="Адрес заказчика">
        </div>

        <div class="workspace-input__unit">
            <label for="">Телефон</label>
            <input type="text" placeholder="Телефон заказчика">
        </div>

        <div class="workspace-input__unit">
            <label for="">Изготовитель</label>
            <input type="text" placeholder="Полное наименование изготовителя">
        </div>

        <div class="workspace-input__unit">
            <label for="">Адрес изготовителя</label>
            <input type="text" placeholder="Адрес изготовителя">
        </div>

        <div class="workspace-input__unit">
            <label for="">Отбор проб произведен</label>
            <input type="text" placeholder="Дата, номер акта">
        </div>

        <div class="workspace-input__unit">
            <label for="">Место отбора образца</label>
            <input type="text" placeholder="Фактический адрес">
        </div>

        <div class="workspace-input__unit">
            <label for="">Образцы отобраны согласно</label>
            <input type="text" placeholder="НД на отбор проб">
        </div>

        <div class="workspace-input__unit">
            <label for="">Образцы отобраны согласно</label>
            <input type="text" placeholder="НД на отбор проб">
        </div>

        <div class="workspace-input__unit">
            <label for="">Условия доставки образцов</label>
            <input type="text" placeholder="Автомобиль, тара, температура">
        </div>

        <div class="workspace-input__unit">
            <label for="">На соответствие требованиям</label>
            <input type="text" placeholder="На соответствие требованиям">
        </div>

        <div class="workspace-input__unit">
            <label for="">В целях</label>
            <input type="text" placeholder="В целях">
        </div>
    </div>

    <div class="checkbox-wrapper">
        <div class="checkbox-unit">
            <label for="checkbox" class="checkbox-custom">
                <input type="checkbox" name="" id="checkbox">
            </label>
            <p>согласен на утилизацию остатков сданных для испытаний образцов после проведения анализа</p>
        </div>

        <div class="checkbox-unit">
            <label for="checkbox" class="checkbox-custom">
                <input type="checkbox" name="" id="checkbox">
            </label>
            <p>возврат заказчику остатка сданных образцов после проведения испытаний</p>
        </div>
    </div>

    <div class="checkbox-wrapper">
        <h4>Получение результатов испытаний:</h4>
        <div class="checkbox-unit">
            <label for="checkbox" class="checkbox-custom">
                <input type="checkbox" name="" id="checkbox" checked>
            </label>
            <p>Загрузка в личный кабинет</p>
        </div>

        <div class="checkbox-unit">
            <label for="checkbox" class="checkbox-custom">
                <input type="checkbox" name="" id="checkbox">
            </label>
            <p>На руки</p>
        </div>

        <div class="checkbox-unit">
            <label for="checkbox" class="checkbox-custom">
                <input type="checkbox" name="" id="checkbox">
            </label>
            <p>Эл. почтой</p>
        </div>
    </div>

    <div class="sample-wrapper">
        <h2>Список образцов для заказа</h2>
        <div class="sample-unit">
            <h4>Наименование №1</h4>
            <div class="sample-unit__wrapper">
                <div class="sample-unit__input">
                    <label for="">Наименование</label>
                    <input type="text" placeholder="Полное наименование продукта">
                </div>

                <div class="sample-unit__input">
                    <label for="">Дата/Время изготовления и упаковки</label>
                    <input type="text" placeholder="Дата/время изготовления и упаковки">
                </div>

                <div class="sample-unit__input">
                    <label for="">Срок годности</label>
                    <input type="text" placeholder="Срок годности продукта">
                </div>

                <div class="sample-unit__input">
                    <label for="">Тара, упаковка</label>
                    <input type="text" placeholder="Тара, упаковка">
                </div>

                <div class="sample-unit__input">
                    <label for="">Объем/масса пробы</label>
                    <input type="text" placeholder="Объем, масса пробы">
                </div>

                <div class="sample-unit__input">
                    <label for="">Программа испытания</label>
                    <input type="text" placeholder="Наименование показателей, методы">
                </div>
            </div>
        </div>


        <div class="add-sample__btn">
            <div class="add-sample__btn-plus">
                <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/img/icons/plus.svg" alt="">
            </div>
            <p>Добавить еще одно наименование</p>
        </div>
    </div>
</div>

<div class="btns-create-wrapper">
    <div class="create-order__btn">
        <p>Создать заявку</p>
    </div>
</div><?php }} ?>