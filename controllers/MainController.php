<?php

function indexAction($smarty,$pdo,$getArr,$userData){
    getUserName($smarty, $userData);
    $smarty->assign('pageTitle','Личный кабинет | Главная');
    $smarty->assign('pageName','Главная');
    loadTemplate($smarty,'header');
    loadTemplate($smarty,'main');
    loadTemplate($smarty,'footer');
}