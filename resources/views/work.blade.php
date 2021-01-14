<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.79.0">
  <title>Test</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">



  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
  <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Favicons -->
  <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
  <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
  <meta name="theme-color" content="#7952b3">


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="css/album.css" rel="stylesheet">
</head>

<body>
  @include('layouts.nav')
  <div class="container-fluid">
  @include('layouts.sidebar')
    <div class="row">
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <h2>Рабочий стол</h2>
        <div class="d-flex bd-highlight mb-3">
          <div class="mr-auto p-2 bd-highlight">
            <input type="text" class="form-control" id="inputPassword2" placeholder="Поиск по  серийному номеру устройства"></th>
          </div>
          <div class="custom-control custom-switch p-2 bd-highlight">
            <button type="button" class="btn btn-dark">Убрать устройства по всем рубежам</button>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table table-striped table-bordered table-sm">
            <thead>
              <tr>
                <th></th>
                <th>
                  <input type="text" class="form-control" id="inputPassword2" placeholder="Наименование рубежа">
                </th>
                </th>
                <th>
                  <select class="form-control">
                    <option selected>Регион</option>
                    <option>Бла</option>
                    <option>2</option>
                    <option>3</option>
                  </select>
                </th>
                <th>
                  <select class="form-control">
                    <option selected>Группы рубежей</option>
                    <option>Бла</option>
                    <option>2</option>
                    <option>3</option>
                  </select>
                </th>
                <th><button type="button" class="btn btn-light">Очистить</button></th>
              </tr>
            </thead>
            <thead>
              <tr>
                <th>№</th>
                <th>Наименование рубежа</th>
                <th>Регион</th>
                <th>Группы рубежей</th>
                <th></th>

              </tr>
            </thead>
            <tbody>
              

            </tbody>

          </table>
          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
          </nav>
          <script>
            $('#timepicker1').timepicker({
              uiLibrary: 'bootstrap4'
            });
            $('#timepicker2').timepicker({
              uiLibrary: 'bootstrap4'
            });
          </script>
        </div>
      </main>
    </div>
  </div>

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
  </script>
  <script src="../../assets/js/vendor/popper.min.js"></script>
  <script src="../../dist/js/bootstrap.min.js"></script>

  <!-- Icons -->
  <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
  <script>
    feather.replace()
  </script>

  <!-- Graphs -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
  <script>
    var ctx = document.getElementById("myChart");
    var myChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
        datasets: [{
          data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
          lineTension: 0,
          backgroundColor: 'transparent',
          borderColor: '#007bff',
          borderWidth: 4,
          pointBackgroundColor: '#007bff'
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: false
            }
          }]
        },
        legend: {
          display: false,
        }
      }
    });
  </script>
</body>

</html>