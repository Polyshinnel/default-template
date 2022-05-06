<?php

include '../../config/db.php';
include '../../config/config-site.php';
include '../../library/mainFunctions.php';
include '../../models/userModel.php';

$postData = file_get_contents('php://input');
$data = json_decode($postData, true);

$type = $data['type'];
$mail = $data['mail'];
$mailArr = explode('%40',$mail);
$mail = "$mailArr[0]@$mailArr[1]";
$json = array();

if($type == 'resend'){
    $confirmCode = generateCode(4);

    updateCode($pdo,$mail,$confirmCode);

    $array = array(
        'type'    => 'confirm',
        'mailAddr' => $mail,
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

    $json['message'] = 'Код авторизации отправлен повторно!';
}

if($type == 'ack'){
    $code = $data['code'];
    $code = preg_replace("/[^0-9]/", '', $code);
    $user = getUserByMail($pdo,$mail);
    if($user['confirm_code'] == $code){
        updateStatus($pdo,$mail);
        $json['message'] = 'confirm ok';
    }else{
        $json['message'] = 'Не верно введен код подтверждения';
    }
}

$json = json_encode($json, JSON_UNESCAPED_UNICODE);
echo $json;