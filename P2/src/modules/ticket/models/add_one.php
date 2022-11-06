<?php
  // SELECT `id`, `user`, `creationDate`, `dateUpdate`, `status` FROM `ticket` WHERE 1
  if ( !empty($_MYDATA["user"]) ) {

    unset($_Campos_Valores);
    $_Campos_Valores["user"] = $_MYDATA["user"];
    $_Campos_Valores["creationDate"] = date("Y-m-d H:i:s");
    $_Campos_Valores["status"] = ( isset($_MYDATA["status"]) )? $_MYDATA["status"] : 1;
    $new_id = $CRUD -> Insert( 'ticket', $_Campos_Valores );

    if ( $new_id>0 ) {

      unset($_Condicion);
      $_Condicion["id"] = $new_id;
      $data_ticket = $CRUD -> Select( 'ticket', $_Condicion )[0];

      $_Response["msg"] = "Done.";
      $_Response["data"] = $data_ticket;

    }else{
      $_Response["msg"] = "Error : Failed to insert.";
    }

  }else{
    $_Response["msg"] = "Error : *user* field expected.";
  }

 ?>
