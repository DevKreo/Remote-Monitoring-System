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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

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
    <link href="{{ asset('css/album.css') }}"  rel="stylesheet">
</head>

<body>
    @include('partials.nav')
    <div class="container-fluid">
        <div class="row">
            @include('partials.sidebar')
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
                    <h3>Справочники</h3>
                </div>
                <ul class="nav nav-tabs mb-2">
                    <li class="nav-item">
                      <a class="nav-link " href="/referenceBooks/regions">Регионы</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="/referenceBooks/type_devices">Тип устройства</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="/referenceBooks/type_violation">Тип нарушений</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/referenceBooks/device_developer">Производитель устройств</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/referenceBooks/adress">Адреса</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/referenceBooks/error_device">Ошибка устройств</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/referenceBooks/branches">Ветки SNMP</a>
                    </li>
                  </ul>
                <div class="d-flex bd-highlight mb-3">
                    <div class="mr-auto p-2 bd-highlight">
                        <button type="button" class="btn btn-dark">Добавить адрес</button>
                    </div>
                    <div class="custom-control custom-switch p-2 bd-highlight">
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
                                    <input type="text" class="form-control" placeholder="Поиск">
                                </th>
                                <th>
                                   <input type="text" class="form-control" placeholder="Поиск">
                                </th>
                                <th> 
                                    <select class="form-control">
                                        <option value="" disabled selected>Тип ошибки</option>
                                        <option>Первый</option>
                                        <option>Второй</option>
                                        <option>Третий</option>
                                        <option>Четвертый</option>
                                    </select></th>
                                <th></th>
                                <th>
                                    <button type="button" class="btn btn-light">Очистить</button>
                                </th>
                            </tr>
                        </thead>
                        <thead>
                            <tr>
                                <th>№</th>
                                <th>Отображение пользователю</th>
                                <th>Системное представление</th>
                                <th>Тип ошибки</th>
                                <th>Активность</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($errors as $row)
                                <tr>
                                    <td>{{ $row->id }}</td>
                                    <td>{{ $row->message_for_user }}</td>
                                    <td>{{ $row->message_error }}</td>
                                    <td>{{ $row->error_type_name }}</td>
                                    <td>{{ $row->active }}</td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <button type="button" class="btn btn-dark btn-circle"><i
                                                    class="fa fa-pen"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger btn-circle ml-1"><i
                                                class="fa fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody> 
                    </table>
                     <div class="d-flex justify-content-center">
                        {!! $errors->links() !!}
                    </div> 
                </div>
        </div>

        </main>
    </div>
    </div>
    <script src="js/search.js"></script>
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace()

    </script>
</body>

</html>
