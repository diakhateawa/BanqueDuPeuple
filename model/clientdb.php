<?php
require_once 'db.php';
function addClient($nomC, $telephone, $adresse)
{
    $sql = "INSERT INTO client VALUES (NULL, '$nomC', '$telephone', '$adresse')";

    $conn =  getConection();

    return $conn->exec($sql);
}
function deleteClient($idC)
{
    $sql = "DELETE FROM client WHERE idC = $idC";

    $conn =  getConection();

    return $conn->exec($sql);
}
function updateClient($idC, $nomC, $telephone, $adresse)
{
    $sql = "UPDATE client SET nomC = '$nomC' , telephone = '$telephone', adresse = '$adresse' WHERE idC = $idC";

    $conn =  getConection();

    return $conn->exec($sql);
}
function listeClient()
{
    $sql = "SELECT * FROM client";

    $conn =  getConection();

    return $conn->query($sql);
}
?>