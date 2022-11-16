<?php
    require_once "../model/interface_repo_produit.php";
class  RepoProduit implements IRepoProduit{

   
    public function __construct()
    {
        
    }



    function ajouterProduit(Produit $produit) : void{

    }
    function modifierProduit(int $id,Produit $produit) : void{

    }
    function supprimerProduit(int $id) : void{
        
    }
    function rechercherProduit(int $id) : Produit{
        return new Produit(0,"",4.2);
    }
    function getTousProduit() : array{
        echo "<h1>test</h1>";
        return [];
    }
    
}
?>