<?php

function indexAction($smarty,$pdo,$getArr,$userData){
    $smarty->assign('pageTitle','Личный кабинет | Авторизация');
    loadTemplate($smarty,'login');
}