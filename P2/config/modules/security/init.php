<?php

  switch ( $_SESSION["ROLL"] ) {

    default:
        require( __DIR__ . "/permissions/other.php" );
    break;

  }


  if ( !empty( $_RUTES[URL] ) ) {

    $DESTINY = $_RUTES[URL];

  } else {

    $_SERVER['REQUEST_METHOD']="GET";
    $DESTINY = $_RUTES["index"];

  }
?>
