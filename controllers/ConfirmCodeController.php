<?php

function indexAction($smarty,$pdo,$getArr,$userData){
    $pageText = 'Код подтверждения был отправлен на вашу почту polyshinnel!@gmail.com';
    $smarty->assign('pageText',$pageText);
    $smarty->assign('pageTitle','Личный кабинет | Подтверждение почты');
    loadTemplate($smarty,'confirm-code');
}