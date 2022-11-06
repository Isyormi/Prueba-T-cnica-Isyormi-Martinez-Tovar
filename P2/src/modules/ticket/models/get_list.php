<?php
  // SELECT `id`, `user`, `creationDate`, `dateUpdate`, `status` FROM `ticket` WHERE 1
  unset( $_Condicion );
  $page = ( !empty($_REQUEST["page"]) )? $_REQUEST["page"] * LIMIT_PAGINATION : 0 ;
  $data_ticket = $CRUD -> Written( "SELECT * FROM ticket LIMIT ".$page." , ".LIMIT_PAGINATION." ", null, true);
  echo "SELECT * FROM ticket LIMIT " .$page. " , " .LIMIT_PAGINATION. " ";
  $_Response["msg"] = "Done.";
  $_Response["page"] = $page;
  $_Response["total"] = count($data_ticket);
  $_Response["data"] = ( $_Response["total"]>0 )? $data_ticket : "No data.";
 ?>
