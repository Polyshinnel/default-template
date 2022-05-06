<?php

function getAuth($pdo,$login,$pass){
    $query = "SELECT * FROM users WHERE mail = ? AND pass = ?";
    $params = array($login,$pass);
    $stmt = $pdo->prepare($query);
    $stmt->execute($params);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result[0];
}

function getRegister($pdo,$name,$mail,$orgName,$orgAddr,$phone,$pass,$confirmCode){
    $query = "INSERT INTO users(id,name,mail,org_name,org_addr,phone,pass,status,confirm_code,status_mail,restore_token) VALUES (NULL,?,?,?,?,?,?,0,?,0,NULL)";
    $params = array($name,$mail,$orgName,$orgAddr,$phone,$pass,$confirmCode);
    $stmt = $pdo->prepare($query);
    $stmt->execute($params);
}

function updateCode($pdo,$mail,$code){
    $query = "UPDATE users SET confirm_code = ? WHERE mail = ?";
    $params = array($code,$mail);
    $stmt = $pdo->prepare($query);
    $stmt->execute($params);
}

function updateStatus($pdo,$mail){
    $query = "UPDATE users SET status_mail = 1 WHERE mail =?";
    $params = array($mail);
    $stmt = $pdo->prepare($query);
    $stmt->execute($params);
}

function getUserByMail($pdo,$mail){
    $query = "SELECT * FROM users WHERE mail = ?";
    $params = array($mail);
    $stmt = $pdo->prepare($query);
    $stmt->execute($params);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if(!empty($result)){
        return $result[0];
    }
}

function getUserByToken($pdo,$token){
    $query = "SELECT * FROM users WHERE restore_token = ?";
    $params = array($token);
    $stmt = $pdo->prepare($query);
    $stmt->execute($params);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if(!empty($result)){
        return $result[0];
    }
}

function updateRestoreToken($pdo,$id,$token){
    $query = "UPDATE users SET restore_token = ? WHERE id =?";
    $params = array($token,$id);
    $stmt = $pdo->prepare($query);
    $stmt->execute($params);
}

function getUserByPhone($pdo,$phone){
    $query = "SELECT * FROM users WHERE phone = ?";
    $params = array($phone);
    $stmt = $pdo->prepare($query);
    $stmt->execute($params);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if(!empty($result)){
        return $result[0];
    }
}

function updateProfile($pdo,$user_id,$name,$phone,$mail,$companyName,$inn,$type){
    $query = "UPDATE users SET name = ? WHERE id =?";
    $params = array($name,$user_id);
    $stmt = $pdo->prepare($query);
    $stmt->execute($params);

    $query = "UPDATE users SET phone = ? WHERE id =?";
    $params = array($phone,$user_id);
    $stmt = $pdo->prepare($query);
    $stmt->execute($params);

    $query = "UPDATE users SET mail = ? WHERE id =?";
    $params = array($mail,$user_id);
    $stmt = $pdo->prepare($query);
    $stmt->execute($params);

    $query = "UPDATE users SET name_organization = ? WHERE id =?";
    $params = array($companyName,$user_id);
    $stmt = $pdo->prepare($query);
    $stmt->execute($params);

    $query = "UPDATE users SET inn = ? WHERE id =?";
    $params = array($inn,$user_id);
    $stmt = $pdo->prepare($query);
    $stmt->execute($params);

    $query = "UPDATE users SET type = ? WHERE id =?";
    $params = array($type,$user_id);
    $stmt = $pdo->prepare($query);
    $stmt->execute($params);
}

function updatePass($pdo,$user_id,$pass){
    $query = "UPDATE users SET pass = ? WHERE id =?";
    $params = array($pass,$user_id);
    $stmt = $pdo->prepare($query);
    $stmt->execute($params);
}

