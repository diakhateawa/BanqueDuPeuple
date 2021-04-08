<?php
require_once '../model/comptedb.php';
require_once  '../model/clientdb.php';

extract($_POST);
    $result = addCompte($numero, $solde, $idC);
    if($result !=0)
    { 
        updateClient($idC, $nomC, $telephone, $adresse);
    }
    /*if(isset($_POST['envoyer']))
{
    extract($_POST);
    $result = addCompte($numerocompte, $solde, $idclient);
}*/
if(isset( $_GET['delete']))
{
    $idCo= $_GET['delete'];
    $result = deleteCompte($idCo);
}
header('location:comptes');