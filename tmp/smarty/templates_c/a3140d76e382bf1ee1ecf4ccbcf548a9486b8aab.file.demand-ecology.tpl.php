<?php /* Smarty version Smarty-3.1.6, created on 2022-01-27 08:25:43
         compiled from "./views/default\demand-ecology.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5886600561f22cd739a4c8-84601837%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3140d76e382bf1ee1ecf4ccbcf548a9486b8aab' => 
    array (
      0 => './views/default\\demand-ecology.tpl',
      1 => 1643260932,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5886600561f22cd739a4c8-84601837',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'templateWebPath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_61f22cd73e93d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61f22cd73e93d')) {function content_61f22cd73e93d($_smarty_tpl) {?><div class="workspace">
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
            <label for="">Кто производит отбор проб</label>
            <input type="text" placeholder="ИЛКППЭ">
        </div>

        <div class="workspace-input__unit">
            <label for="">Адрес объекта проведения проб</label>
            <input type="text" placeholder="Адрес объекта проведения проб">
        </div>

        <div class="workspace-input__unit">
            <label for="">Образцы отобраны согласно:</label>
            <input type="text" placeholder="Гост или иная НД">
        </div>

        <div class="workspace-input__unit">
            <label for="">На соответствие требованиям</label>
            <input type="text" placeholder="СанПин или другая НД">
        </div>

        <div class="workspace-input__unit">
            <label for="">В целях, основание</label>
            <input type="text" placeholder="Цель отбора проб">
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

        <div class="sample-unit">
            <h4>Наименование №2</h4>
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