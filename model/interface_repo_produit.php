<?php
require_once "../model/produit.php";
interface IRepoProduit{
    function ajouterProduit(Produit $produit) : void;
    function modifierProduit(int $id,Produit $produit) : void;
    function supprimerProduit(int $id) : void;
    function rechercherProduit(int $id) : Produit;
    function getTousProduit() : array;
}


?>