<?php

function indexAction($smarty,$pdo,$getArr,$userData){
    getUserName($smarty, $userData);
    $smarty->assign('pageTitle','Личный кабинет | Выбор типа заявки');
    $smarty->assign('pageName','Выбор типа заявки');
    loadTemplate($smarty,'header');
    loadTemplate($smarty,'demand-select');
    loadTemplate($smarty,'footer');
}