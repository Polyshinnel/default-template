<?php

function getProductOrder($pdo,$order_num){
    $query = "SELECT * FROM product_order WHERE order_num LIKE ?";
    $params = array("%$order_num%");
    $stmt = $pdo->prepare($query);
    $stmt->execute($params);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if(!empty($result)){
        return $result;
    }
}

function getEcologyOrder($pdo,$order_num){
    $query = "SELECT * FROM ecolody_order WHERE order_num LIKE ?";
    $params = array("%$order_num%");
    $stmt = $pdo->prepare($query);
    $stmt->execute($params);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if(!empty($result)){
        return $result;
    }
}