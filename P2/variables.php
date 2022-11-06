<?php

   session_start();
   error_reporting(E_ALL ^ E_NOTICE);
   date_default_timezone_set("America/New_York");

   //
   header('Content-Type: application/json; charset=utf-8');
   header("Access-Control-Allow-Origin: *");
   header("Access-Control-Allow-Headers: *");

   // Var URl
   define( "URL", ( !empty($_GET["URL"]) ) ? $_GET["URL"] : "index" );//Ruta por defecto index

   define( "LIMIT_PAGINATION", 2 );//Ruta por defecto index

   //DB Credentials
   define("DB_HOST","localhost");
   define("DB_USER","root");
   define("DB_PASS","");
   define("DB_NAME","p2");
?>
