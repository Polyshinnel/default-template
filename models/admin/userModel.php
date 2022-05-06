<?php

function getUserByInn($pdo,$inn){
    $query = "SELECT * FROM users WHERE inn LIKE ?";
    $params = array("%$inn%");
    $stmt = $pdo->prepare($query);
    $stmt->execute($params);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function getUserByName($pdo,$organization){
    $query = "SELECT * FROM users WHERE name_organization LIKE ?";
    $params = array("%$organization%");
    $stmt = $pdo->prepare($query);
    $stmt->execute($params);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function getUserById($pdo,$id){
    $query = "SELECT * FROM users WHERE id = ?";
    $params = array($id);
    $stmt = $pdo->prepare($query);
    $stmt->execute($params);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result[0];
}