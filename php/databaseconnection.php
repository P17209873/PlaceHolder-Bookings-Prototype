<?php

$host = 'localhost';
$db = 'prototype';
$user = 'phpuser';
$pass = 'password';
$charset = 'utf8mb4';

$data_source_name = "mysql:host={$host};dbname={$db};charset={$charset}";

$settings = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try
{
    $pdo = new PDO($data_source_name, $user, $pass, $settings);
} 

catch(\PDOException $e) 
{
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}