<?php

class  Produit {
    private int $id;
    private string $designation;
    private float $prix_unitaire;
    public function __construct(
        int $id,
        string $designation,
        float $prix_unitaire
    ){
        $this->id=$id;
        $this->designation=$designation;
        $this->prix_unitaire=$prix_unitaire;
    }

    function getID() : int{
        return $this->id;
    }
    function getDesignation() : string{
        return $this->designation;
    }
    function getPrix_unitaire() :float {
        return $this->prix_unitaire;
    }

    function setID(int $id) {
         $this->id=$id;
    }
    function setDesignation(string $designation) {
         $this->designation = $designation;
    }
    function setPrix_unitaire(float $prix_unitaire)  {
         $this->prix_unitaire=$prix_unitaire;
    }
}


?>