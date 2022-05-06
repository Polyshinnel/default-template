<?php

include '../../config/db.php';
include '../../config/config-site.php';
include '../../library/mainFunctions.php';
include '../../models/userModel.php';

$postData = file_get_contents('php://input');
$data = json_decode($postData, true);



$userName = $data['username'];
$userNameArr = explode(' ',$userName);

$userMail = $data['usermail'];
$userMailArr = explode('@',$userMail);
$orgName = $data['orgName'];
$orgAddr = $data['orgAddr'];

$userPhone = $data['phone'];
$userPhone = formatPhone($userPhone);

$userPass = $data['pass'];

$flag = 0;

if((mb_strlen($userName)<7) || (count($userNameArr)<2)){
    $json['message'] = 'Введите имя и фамилию';
    $flag++;
}

if((mb_strlen($userMail)<7) || (count($userMailArr)<2)){
    $json['message'] = 'Введите корректное имя почты';
    $flag++;
}

if(!empty(getUserByMail($pdo,$userMail))){
    $json['message'] = 'Пользователь с такой почтой уже существует';
    $flag++;
}

if(mb_strlen($orgName)<4){
    $json['message'] = 'Введите корректное название организации';
    $flag++;
}

if(mb_strlen($orgAddr)<4){
    $json['message'] = 'Введите корректный адрес оргранизации';
    $flag++;
}

if(mb_strlen($userPhone)<12){
    $json['message'] = 'Введите корректный телефон';
    $flag++;
}

if(!empty(getUserByPhone($pdo,$userPhone))){
    $json['message'] = 'Пользователь с таким телефоном уже существует';
    $flag++;
}


if(mb_strlen($userPass)<5){
    $json['message'] = 'Пароль не может быть короче 5 символов';
    $flag++;
}

if($flag == 0){
    $userPass = md5($userPass);
    $confirmCode = generateCode(4);

    $array = array(
        'type'    => 'confirm',
        'mailAddr' => $userMail,
        'confirmCode' => $confirmCode
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

    getRegister($pdo,$userName,$userMail,$orgName,$orgAddr,$userPhone,$userPass,$confirmCode);
    $json['usermail'] = $userMail;
    $json['message'] = 'register ok';
}

$json = json_encode($json, JSON_UNESCAPED_UNICODE);
echo $json;