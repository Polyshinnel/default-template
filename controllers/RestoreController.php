<?php

function indexAction($smarty,$pdo,$getArr,$userData){
    $smarty->assign('pageTitle','Личный кабинет | Восстановление пароля');
    $pageText = 'На вашу почту будет отправлена ссылка на сброс пароля';
    $smarty->assign('pageText',$pageText);
    loadTemplate($smarty,'restore');
}