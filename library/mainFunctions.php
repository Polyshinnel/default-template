<?php

//Функция загрузки нужного контроллера
function loadPage($smarty, $controllerName, $actionName = 'index', $pdo, $getArr, $userData){
    include_once PathPrefix.$controllerName.PathPostfix;

    $action = $actionName.'Action';
    $action($smarty,$pdo,$getArr,$userData);
}

//Функция загрузки страниц админки
function loadAdminPage($smarty, $controllerName, $actionName = 'index', $pdo, $getArr, $userData){
    include_once './controllers/admin/'.$controllerName.'Controller.php';

    $action = $actionName.'Action';
    $action($smarty,$pdo,$getArr,$userData);
}

//Функция загрузки нужного шаблона
function loadTemplate($smarty, $templateName){
    $smarty->display($templateName. TemplateWebPostfix);
}

//Добавление имени пользователя в шапку
function getUserName($smarty, $userData){
    $userNameArr = $userData['name'];
    $userNameArr = explode(' ',$userNameArr);
    $firstName = $userNameArr[0];
    $lastName = $userNameArr[1];
    $username = $firstName;
    $username = mb_substr($username,0,1);
    $username = $lastName.' '.$username.'.';
    $smarty->assign('headerUserName',$username);
}

//Функция дебага
function d($value=null, $die=1){
    echo "debug: <br/><pre>" ;
    print_r($value);
    echo "</pre>";

    if($die){
        die;
    }
}

//Пагинация страниц
function pagination($totalRecords,$limit,$currPage){

    $totalPages = ceil($totalRecords/$limit);

    $pageNum = $currPage;
    if(empty($pageNum)){
        $pageNum = 1;
    }

    if($pageNum > $totalPages){
        $pageNum = $totalPages;
    }

    if($pageNum < 1){
        $pageNum = 1;
    }

    $nextPage = $pageNum + 1;
    if($nextPage > $totalPages){
        $nextPage = $totalPages;
    }

    $previousPage = $pageNum - 1;
    if($previousPage<1){
        $previousPage = 1;
    }

    $startPosition = $limit*($pageNum - 1);
    $endPosition = $limit*($pageNum);

    if($endPosition > $totalRecords){
        $endPosition = $totalRecords;
    }

    

    $paginationArr = array(
        'totalRecors' => $totalRecords,
        'totalPages' => $totalPages,
        'previousPage' => $previousPage,
        'nextPage' => $nextPage,
        'startPosition' => $startPosition,
        'endPosition' => $endPosition
    );

    return $paginationArr;
}

//Форматирование даты
function dateFormater($date,$format='eu'){
    if($format == 'eu'){
        $dateArr = explode('-',$date);
        $dateNew = "$dateArr[2].$dateArr[1].$dateArr[0]";
    }
    if($format == 'us'){
        $dateArr = explode('.',$date);
        $dateNew = "$dateArr[2]-$dateArr[1]-$dateArr[0]";
    }
    return $dateNew;
}