<?php
  //Obtener la información enviada por el usuario en JSON
  $_Response = [];
  //Obtener la informacion enviada por el usuario en JSON
  $json = file_get_contents( 'php://input' );
  $_MYDATA = json_decode( $json, true );

  //----------------------
  switch ( $_SERVER['REQUEST_METHOD'] ){
    //MOSTRAR
    case 'GET':

        if ( !empty($_REQUEST["id"]) ){
          //GET LIST => http://URL/ticket?id=1
          require( __DIR__ . "/models/get_one.php" );
        }else{
          //GET LIST => http://URL/ticket?page=0
          require( __DIR__ . "/models/get_list.php" );
        }

      break;
    //INSERTAR
    case 'POST':
        //ADD -> http://URL/ticket
        //JSON {"user": "JORGE"} OR {"user": "JORGE", "status" : 0}

        require( __DIR__ . "/models/add_one.php" );
      break;
    //EDITAR
    case 'PUT':
        //UPDATE -> http://URL/ticket?id=3
        //JSON {"user": "JORGE"} OR {"user": "JORGE", "status" : 0}
        require( __DIR__ . "/models/update_one.php" );
      break;
    //ELIMINAR
    case 'DELETE':
        //DELETE -> http://URL/ticket?id=3
        require( __DIR__ . "/models/delete_one.php" );
      break;

  }
  //--------------
echo json_encode($_Response);
?>
