<?php

function indexAction($smarty,$pdo,$getArr,$userData){
    $pageText = 'Для вашего логина: polyshinnel1@gmail.com будет задан новый пароль';
    $smarty->assign('pageText',$pageText);
    $smarty->assign('pageTitle','Личный кабинет | Введите новый пароль');
    loadTemplate($smarty,'restore-pass');
}