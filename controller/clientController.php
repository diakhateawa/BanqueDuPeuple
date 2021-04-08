<?php
require_once '../model/clientdb.php';
require_once '../model/db.php';

extract($_POST);
$result = addClient($nomC, $telephone, $adresse);

/*if(isset($_POST['envoyer']))
{
    extract($_POST);
    $result = addClient($nomC,$telephone, $adresse);
}*/
if(isset( $_GET['delete']))
{
    $idC = $_GET['delete'];
    $result = deleteClient($idC);
}

if(isset( $_GET['edit']))
{
    $idC = $_GET['edit'];
    $conn = getConection();
    $sql = "SELECT * FROM client WHERE idC=$idC";
    $result = $conn->query($sql);
    //if(count($result)==1)
    //{
        $row = $result->fetchAll();
        $nomC = $row['nomC'];
        $telephone = $row['telephone'];
        $adresse = $row['adresse'];
    //}
}
header('location:clients');