<?php

$dbHost = 'viaduct.proxy.rlwy.net';
$dbUsername = 'root';
$dbPassword = '53H6F5aebdFaeaA4Dh62Aac5d65c4aae';
$dbName = 'railway';


$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($conn->connect_errno) {
    echo "Erro";
} else {
    //echo "Conexão efetuada com sucesso!";
}
