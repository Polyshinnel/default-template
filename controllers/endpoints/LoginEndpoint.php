<?php

include '../../config/db.php';
include '../../config/config-site.php';
include '../../models/userModel.php';

$postData = file_get_contents('php://input');
$data = json_decode($postData, true);

$login = $data['login'];
$password = $data['password'];

$json = array();

if(!empty($login) && !empty($password)){
    $password = md5($password);

    $user = getAuth($pdo,$login,$password);
    if(!empty($user)){

        if($user['status'] == 1){
            $userArr = [
                'id' => $user['id'],
                'name' => $user['name'],
                'mail' => $user['mail'],
                'phone' => $user['phone'],
            ];
    
            $userJson = json_encode($userArr, JSON_UNESCAPED_UNICODE);
    
            setcookie('user',$userJson,time()+(86400 * 300),'/');
    
            $json['message'] = 'auth ok';
        }else{
            $json['message'] = 'await-page';
        }
        
    }else{
        $json['message'] = 'Не верный логин и/или пароль!';
    }
}else{
    $json['message'] = 'Не верный логин и/или пароль!';
}

$json = json_encode($json, JSON_UNESCAPED_UNICODE);
echo $json;