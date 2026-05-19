<?php
<<<<<<< HEAD
=======
require_once(ROOT."bd/database.php");
>>>>>>> 1f39b69bca60efad717bd45c3a7d1c8bec248e3f
function getAllProduits(){
    $sql="SELECT * FROM produit";
   return executeSelect($sql);
}