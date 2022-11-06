<?php
  $_RUTES = array();

  function addRute($url,$archiveName){
    global $_RUTES;

    if(!empty($_RUTES[$url])){//la entrada se duplico
      echo "Duplicate Path '".$url."'";
    }else{
      $_RUTES[$url]=$archiveName;//agrego el permiso
    }

  }
?>
