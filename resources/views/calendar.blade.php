<!DOCTYPE html>
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
      <div class="row">
          @include('layouts.sidebar')
          <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Предвижные</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Стационарные</a>
                  </li>
                </ul>
                </div>
                 
                <form class="form-inline">
                  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3"><h3>Расположение передвижных комплексов</h3></div>

                  <div class="form-group mx-sm-3 mb-2">
                    <input type="text" class="form-control" id="inputPassword2" placeholder="Фильтр1">
                  </div>

                  <div class="form-group mx-sm-3 mb-2">
                    <select id="inputState" class="form-control">
                      <option selected>Фильтр по группе</option>
                      <option>Бла</option>
                      <option>2</option>
                      <option>3</option>
                    </select>
                  </div>
                  <div class="form-group mx-sm-3 mb-2">
                    <input type="date" class="form-control">
                  </div>
                  <button type="submit" class="btn btn-primary mb-2">Экспорт в эксель</button>
                </form>

                @include('layouts.table')
          </main>
      </div>
    </div>
    <script>
        $('#timepicker').timepicker({
            uiLibrary: 'bootstrap4'
        });
        $('#timepicker1').timepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>
</body>
</html>