  <?php
    include("./config/instances.php");


    $DESTINY_=explode("_",$DESTINY);

    require_once("./src/modules/".$DESTINY_[0]."/".$DESTINY_[1].".php");

   ?>
