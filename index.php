<?php

session_start();


ini_set('display_errors', 'On'); // сообщения с ошибками будут показываться
error_reporting(E_ALL); // E_ALL - отображаем ВСЕ ошибки

include_once './config/config.php'; //Подключение настроек
include_once './config/db.php'; //Подключение базы данных
include_once './library/mainFunctions.php'; //Подключение основных функций

if(isset($_GET)){
    $getArr = $_GET;
}else{
    $getArr = NULL;
}



//Проверка на авторизацию пользователя
if(isset($_COOKIE['user'])){

    $userInfo = json_decode($_COOKIE['user'],true);

    
    //Загрузка для Админа
    if($userInfo['name'] == 'Метра Админ'){
        //Имя контроллера
        if(isset($_GET['controller'])){
            $controllerName = ucfirst($_GET['controller']);
        }else{
            $controllerName = 'Index';
        }

        //Имя функции
        if(isset($_GET['action'])){
            $actionName = $_GET['action'];
        }else{
            $actionName = 'index';
        }

        $userData = $userInfo;

        //Функция загрузки страниц
        loadAdminPage($smarty, $controllerName, $actionName, $pdo, $getArr, $userData);
    }else{
        //Имя контроллера
        if(isset($_GET['controller'])){
            $controllerName = ucfirst($_GET['controller']);
        }else{
            $controllerName = 'Main';
        }

        //Имя функции
        if(isset($_GET['action'])){
            $actionName = $_GET['action'];
        }else{
            $actionName = 'index';
        }

        $userData = $userInfo;

        //Функция загрузки страниц
        loadPage($smarty, $controllerName, $actionName, $pdo, $getArr, $userData);
    }
    

}else{
    if(isset($_GET['controller']) && ($_GET['controller'] == "Login" || $_GET['controller']=="Register" || $_GET['controller']=="ConfirmCode" || $_GET['controller']=="Restore" || $_GET['controller']=="RestorePass" || $_GET['controller']=="AwaitPage")){
        $controllerName = $_GET['controller'];
        $actionName = 'index';
        $userData = NULL;
        loadPage($smarty, $controllerName, $actionName, $pdo, $getArr, $userData);
    }
    else{
        $controllerName = 'Login';
        $actionName = 'index';
        $userData = NULL;
        loadPage($smarty, $controllerName, $actionName, $pdo, $getArr, $userData);
    }
}


