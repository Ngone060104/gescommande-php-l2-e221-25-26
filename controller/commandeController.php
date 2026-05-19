<?php
require_once ROOT."/model/commandeModel.php";
$liste=function(){
$commandes = getAllcommandes();
<<<<<<< HEAD

require_once(ROOT."view/commandes/liste.php");
};

$ajout=function(){
echo "je ajoute un commande";
};

$detail=function(){
echo "je detail un commande";
=======
$total_commandes=countTable("commande");
loadView("commandes/liste",["commandes"=>$commandes,"total_commandes"=>$total_commandes]);

};

$ajout=function(){
loadView("commandes/ajout",[], "side");
};

$detail=function(){
loadView("commandes/detail");
>>>>>>> 1f39b69bca60efad717bd45c3a7d1c8bec248e3f
};

$modifier=function(){
echo "je modifie un commande";
};

$supprimer=function(){
echo "je supprime un commande";
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
         echo "page introuvable c commande";
         exit();
}
         
