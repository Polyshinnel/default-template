<?php

function createBill($pdo,$userId,$dateCreate,$filename,$orderNum,$billNum){
    $query = "INSERT INTO bill(id,user_id,date_create,bill_status,filename,order_num,bill_num) VALUES (NULL,?,?,'1',?,?,?)";
    $params = array($userId,$dateCreate,$filename,$orderNum,$billNum);
    $stmt = $pdo->prepare($query);
    $stmt->execute($params);
}

function getAllBill($pdo){
    $stmt = $pdo->query("SELECT * FROM bill");
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function getAllBillLimit($pdo,$startLimit,$endLimit){
    $query = "SELECT * FROM bill ORDER BY id DESC LIMIT ?,?";
    $params = array($startLimit,$endLimit);
    $stmt = $pdo->prepare($query);
    $stmt->execute($params);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function getBillStatus($pdo,$status){
    $query = "SELECT * FROM bill_status WHERE id = ?";
    $params = array($status);
    $stmt = $pdo->prepare($query);
    $stmt->execute($params);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result[0];
}

function deleteBill($pdo,$billId){
    $query = "DELETE FROM bill WHERE id = ?";
    $params = array($billId);
    $stmt = $pdo->prepare($query);
    $stmt->execute($params);
}

