<?php

include './config/config-site.php';

function indexAction($smarty,$pdo,$getArr,$userData){
    $smarty->assign('pageTitle','Личный кабинет | Ожидание авторизации');
    $awaitText = 'Обычно авторизация происходит в течении суток. При необходимости позвоните по телефону: '.commonPhone;
    $smarty->assign('awaitText',$awaitText);
    loadTemplate($smarty,'await-page');
}