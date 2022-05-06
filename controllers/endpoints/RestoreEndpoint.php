<?php

include '../../config/db.php';
include '../../config/config-site.php';
include '../../library/mainFunctions.php';
include '../../models/userModel.php';

$postData = file_get_contents('php://input');
$data = json_decode($postData, true);

$type = $data['type'];

$json = array();

if($type == 'getToken'){
    $mail = $data['mail'];
    $user = getUserByMail($pdo,$mail);
    if(!empty($user)){
        $token = gen_token();
        $userId = $user['id'];
        updateRestoreToken($pdo,$userId,$token);

        $urlRest = siteUrl.'?controller=RestorePass&token='.$token;

        $array = array(
            'type'    => 'restore',
            'mailAddr' => $userMail,
            'url' => $urlRest
        );	
        
        $url = siteUrl.'controllers/endpoints/mailSend.php';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($array, '', '&'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $html = curl_exec($ch);
        curl_close($ch);

        $json['message'] = 'restore send';
    }else{
        $json['message'] = 'Пользователя с такой почтой не существует!';
    }
}

if($type == 'restore'){
    $token = $data['token'];
    $user = getUserByToken($pdo,$token);
    if(!empty($user)){
        $user_id = $user['id'];
        $pass = $data['pass'];
        $passConfirm = $data['passConfirm'];

        if($pass == $passConfirm){
            $pass = md5($pass);
            updatePass($pdo,$user_id,$pass);
            $json['message'] = 'pass updated';
        }else{
            $json['message'] = 'Пароли не совпадают';
        }

        
    }else{
        $json['message'] = 'Токен истек!';
    }
}

$json = json_encode($json, JSON_UNESCAPED_UNICODE);
echo $json;