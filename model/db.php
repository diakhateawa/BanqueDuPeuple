<?php
function getConection(){
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'banquedupeuple';

    $dsn = "mysql:host=$host;dbname=$dbname";
    try{
        $db = new PDO($dsn, $user, $password);
        //code
    }catch (PDOException $ex){
        die('Error : '.$ex->getMessage());

    }
    return $db;

}
?>