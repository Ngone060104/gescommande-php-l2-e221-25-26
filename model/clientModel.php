<?php
require_once(ROOT."bd/database.php");
function getAllclients(){
    $sql="SELECT * FROM client";
   return executeSelect($sql);
<<<<<<< HEAD
}
function getClientById($id){
    $sql="SELECT * FROM client where id_client=:id";
   return executeSelect($sql,["id"=>$id],true);
}



   return excuteSelect($sql);
=======
>>>>>>> 1f39b69bca60efad717bd45c3a7d1c8bec248e3f
}

function getClientById($id){
    $sql="SELECT * FROM client where id_client=:id";
   return executeSelect($sql,["id"=>$id],true);
}



