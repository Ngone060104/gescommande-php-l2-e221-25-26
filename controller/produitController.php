<?php
require_once ROOT."/model/produitModel.php";
$liste=function(){
$produits = getAllproduits();
<<<<<<< HEAD

require_once(ROOT."view/produits/liste.php");
};

$ajout=function(){
echo "je ajoute un produit";
=======
$total_produits=countTable("produit");
    loadView("produits/liste",["produits"=>$produits,"total_produits"=>$total_produits]);


};

$ajout=function(){
 loadView("produits/ajout",[],"side");

>>>>>>> 1f39b69bca60efad717bd45c3a7d1c8bec248e3f
};

$detail=function(){
echo "je detail un produit";
};

$modifier=function(){
echo "je modifie un produit";
};

$supprimer=function(){
echo "je supprime un produit";
};


$actions=[
    "liste"=>$liste,
    "ajout"=>$ajout,
    "detail"=>$detail,
    "modifier"=>$modifier,
    "supprimer"=>$supprimer
    
];
 $action=$_REQUEST["action"]??"liste";
 
 if (array_key_exists($action, $actions)) {
         $actions[$action]();
     }
     else{
         echo "page introuvable c produit";
         exit();
}
         
