<?php
  // SELECT `id`, `user`, `creationDate`, `dateUpdate`, `status` FROM `ticket` WHERE 1
  if ( !empty($_REQUEST["id"]) && !empty($_MYDATA["user"]) ) {

    unset($_Condicion);
    $_Condicion["id"] = $_REQUEST["id"];
    $data_ticket = $CRUD -> Select( 'ticket', $_Condicion )[0];

    if ( !empty($data_ticket["id"]) ) {

      unset( $_Condicion, $_Campos_Valores );
      $_Condicion["id"] = $_REQUEST["id"];
      $_Campos_Valores["user"] = $_MYDATA["user"];
      $_Campos_Valores["status"] = ( isset($_MYDATA["status"]) )? $_MYDATA["status"] : 1;
      $CRUD -> Update( 'ticket', $_Condicion, $_Campos_Valores);
      //Actualizo campo modificado
      $data_ticket["user"] = $_MYDATA["user"];
      if ( isset($_MYDATA["status"]) ) {
          $data_ticket["status"] = $_MYDATA["status"];
      }

      $_Response["msg"] = "Done.";
      $_Response["data"] = $data_ticket;

    }else{
      $_Response["msg"] = "Error : no data found for id : " .$_REQUEST["id"]. ".";
    }

  }else{
    $_Response["msg"] = "Error : *id* and *user* field expected.";
  }


 ?>
