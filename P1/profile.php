<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/main.css">
  </head>
  <body>


    <div class="container-sm">
      <div class="card">
        <center>
          <div id="imageUser"></div>
        </center>
        <div class="card-body">
          <h5 class="card-title placeholder-glow text-center" id="nameUser">
            <span class="placeholder col-6"></span>
          </h5>
          <p class="card-text placeholder-glow text-center" id="bioUser">
            <span class="placeholder col-7"></span>
          </p>
        </div>
      </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./js/profile.js"></script>
    <script type="text/javascript">
    window.onload = () => {<?php
          echo ( !empty( $_REQUEST["q"] ) )
                ?'getProfile("'.$_REQUEST["q"].'");'
                :'';
        ?>}
    </script>
  </body>
</html>
