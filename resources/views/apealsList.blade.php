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
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
          <button type="button" class="btn btn-dark">Добавить обращение</button>

          <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="customSwitch1">
            <label class="custom-control-label" for="customSwitch1">с удаленными</label>
          </div>

        </div>
        <div class="my-4 w-100">
          <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th></th>
                    <th> 
                      <select class="form-control">
                        <option value="" disabled selected>Статус</option>
                        <option>Первый</option>
                        <option>Второй</option>
                        <option>Третий</option>
                        <option>Четвертый</option>
                      </select>
                    </th>
                    <th>
                        <input type="text" class="form-control" placeholder="Поиск">
                    </th>
                    <th>
                        <input type="text" class="form-control" placeholder="Поиск">
                    </th>
                    <th>
                      <input type="text" class="form-control" placeholder="С - По">
                    </th>
                    <th>
                        <input type="text" class="form-control" placeholder="С - По">
                    </th>
                    <th>
                      <select class="form-control">
                        <option value="" disabled selected>Рубеж</option>
                        <option>Первый</option>
                        <option>Второй</option>
                        <option>Третий</option>
                        <option>Четвертый</option>
                      </select>
                    </th>
                    <th>
                      <select class="form-control">
                        <option value="" disabled selected>Ответственный</option>
                        <option>Первый</option>
                        <option>Второй</option>
                        <option>Третий</option>
                        <option>Четвертый</option>
                      </select>
                    </th>
                    <th>
                        <button type="button" class="btn btn-light">Очистить</button>
                    </th>
                </tr>
            </thead>
            <thead>
                <tr>
                    <th>№</th>
                    <th>Статус</th>
                    <th>Оператор</th>
                    <th>Устройство</th>
                    <th>Дата создания</th>
                    <th>Дата исполнения</th>
                    <th>Рубеж</th>
                    <th>Ответственный</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
             @foreach($requests as $row)
               <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->status_name}}</td>
                    <td>{{$row->operator_name}}</td>
                    <td>{{$row->serial_number}}</td>
                    <td>{{$row->opend}}</td>
                    <td>{{$row->closed}}</td>
                    <td>{{$row->device_bound_neme}}</td>
                    <td>{{$row->responsible_user_name}}</td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <button type="button" class="btn btn-dark btn-circle"><i class="fa fa-eye"></i>
                            </button>
                        </div>
                    </td>
                </tr>
               @endforeach 
            </tbody>
        </table>
           <div class="d-flex justify-content-center">
            {!! $requests->links() !!}
          </div> 
            <script>
              $('#timepicker1').timepicker({
                uiLibrary: 'bootstrap4'
              });
              $('#timepicker2').timepicker({
                uiLibrary: 'bootstrap4'
              });
            </script>
          </div>
        </div>
      </main>
    </div>
  </div>


  <!-- Icons -->
  <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
  <script>
    feather.replace()
  </script>
</body>

</html>