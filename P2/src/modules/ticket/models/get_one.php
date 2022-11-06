<?php
  // SELECT `id`, `user`, `creationDate`, `dateUpdate`, `status` FROM `ticket` WHERE 1
  if ( !empty($_REQUEST["id"]) ) {

    unset($_Condicion);
    $_Condicion["id"] = $_REQUEST["id"];
    $data_ticket = $CRUD -> Select( 'ticket', $_Condicion )[0];

    if ( !empty($data_ticket["id"]) ) {

      $_Response["msg"] = "Done.";
      $_Response["data"] = $data_ticket;

    }else{
      $_Response["msg"] = "Error : no data found for id : " .$_REQUEST["id"]. ".";
    }

  }else{
    $_Response["msg"] = "Error : *id* field expected.";
  }



 ?>
