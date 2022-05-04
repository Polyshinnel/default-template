<?php

function indexAction($smarty,$pdo,$getArr,$userData){
    $smarty->assign('pageTitle','Личный кабинет | Регистрация');
    loadTemplate($smarty,'register');
}