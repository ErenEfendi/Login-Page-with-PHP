<?php

$dsn ="mysql:host=localhost;dbname=myfirstdatabase";
$dbusername = "root";
$dbpassword = "";

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword); // pdo ve mysqli database i bağlamak için(pdo daha çok kullanılıyor)
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //hata ayıklama
} catch (PDOException $e) { // hatayı adlandırma
    die("Connection failed: ". $e->getMessage()); // hata oluşursa hatanın sebebini göstermek için
}