<?php

include './models/userModel.php';

function indexAction($smarty,$pdo,$getArr,$userData){
    $token = $_GET['token'];
    $user = getUserByToken($pdo,$token);
    $pageText = 'Для вашего логина: '.$user['mail'].' будет задан новый пароль';
    $smarty->assign('pageText',$pageText);
    $smarty->assign('pageTitle','Личный кабинет | Введите новый пароль');
    loadTemplate($smarty,'restore-pass');
}
