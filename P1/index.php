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
      <center>
        <canvas id="myChart" style="width:100%;max-height"></canvas>
      </center>
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col">

              <input type="text" class="form-control" id="inputSearch" name="inputSearch" -onkeyup="mySearch()">

            </div>
            <div class="col-auto">

              <button class="btn btn-primary" type="button" onclick="mySearch()">
                <i class="fas fa-search"></i>
                Search
              </button>

            </div>
          </div>
        </div>
        <ul class="list-group list-group-flush" id="listSearch">

        </ul>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script>

      let myChart = new Chart("myChart", {
        type: "bar",
        data: {
          labels: ["...", "...", "...", "...", "...", "...", "...", "...", "...", "..."],
          datasets: [{
            backgroundColor: ["red", "green","blue","orange","brown", "red", "green","blue","orange","brown"],
            data: [0, 0, 0, 0, 0,0, 0, 0, 0, 0]
          }]
        },
        options: {
          legend: {display: false},
          title: {
            display: true,
            text: "Followers"
          }
        }
      });

    </script>
    <script type="text/javascript" src="./js/index.js"></script>

  </body>
</html>
