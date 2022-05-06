<?php

include './models/userModel.php';

function indexAction($smarty,$pdo,$getArr,$userData){
    $mail = $_GET['mail'];
    $pageText = 'Код подтверждения был отправлен на вашу почту '.$mail;

    $smarty->assign('pageText',$pageText);
    $smarty->assign('pageTitle','Личный кабинет | Подтверждение почты');
    loadTemplate($smarty,'confirm-code');
}