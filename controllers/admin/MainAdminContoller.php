<?php

function indexAction($smarty,$pdo,$getArr,$userData){
    getUserName($smarty, $userData);

    $smarty->assign('pageTitle','Личный кабинет | Создание нового счета');
    $smarty->assign('pageName','Создание нового счета');
    loadTemplate($smarty,'admin/header');
    loadTemplate($smarty,'admin/create-bill');
    loadTemplate($smarty,'admin/footer');
}