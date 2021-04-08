<?php
require_once 'db.php';
function addCompte($numero, $solde, $idC)
{
    $sql = "INSERT INTO compte VALUES (NULL, '$numero', $solde, $idC)";

    $conn = getConection();

    return $conn->exec($sql);
}
function deleteCompte($idCo)
{
    $sql = "DELETE FROM compte WHERE idCo = $idCo";

    $conn = getConection();

    return $conn->exec($sql);
}
function listeCompte()
{
    $sql = "SELECT * FROM compte";

    $conn = getConection();

    return $conn->query($sql);
}