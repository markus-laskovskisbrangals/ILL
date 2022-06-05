<?php

$host = 'localhost';
$db = 'ttkd';
$user = 'root';
$pass = '';

$connection = 'mysql:host='.$host.';dbname='.$db.';charset=UTF8;';

try{
    //Jauna PDO objekta izveida
    $pdo = new PDO($connection, $user, $pass);

} catch(PDOException $e){
    echo 'Pieslēgums datubāzei neizdevās: '.$e;
}
?>