
<?php

    class  ProduitController{
        public IRepoProduit $produit_repo;
        public function __construct(RepoProduit $repoProduit)
        {
            $this->produit_repo=$repoProduit;
        }



        function index() : array{
                return [];
        }
    }






?>