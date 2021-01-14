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
    <link href="js/timePicker.js" rel="text/javascript">
</head>

<body>
    @include('layouts.nav')
    <div class="container-fluid">
        <div class="row">
            @include('layouts.sidebar')
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
                    <h3>История операций</h3>
                </div>
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th></th>
                            <th>
                                <input type="text" class="form-control" placeholder="Поиск"> <!--TODO:/ Поэксперементировать с датапикером-->
                            </th>
                            <th>
                                <select class="form-control">
                                    <option value="" disabled selected>Тип операции</option>
                                    <option>Изменение</option>
                                    <option>Удаление</option>
                                    <option>Добавление</option>
                                </select>     
                            </th>
                            <th>
                                <input type="text" class="form-control" placeholder="Объект">
                            </th>
                            <th>
                                <select class="form-control">
                                    <option value="" disabled selected>Пользователь</option>
                                    <option>Первый</option>
                                    <option>Второй</option> <!--TODO:/ подумать как подтянуть пользователя-->
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
                            <th>Дата операции</th>
                            <th>Тип операции</th>
                            <th>Объект</th>
                            <th>Пользователь</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($logs as $row)
                            <tr>
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->log_time }}</td>
                                <td>{{ $row->operation_type_name }}</td>
                                <td>{{ $row->serial_number }} (id:{{$row->device_id}})</td>
                                <td>{{ $row->user_name }}</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <button type="button" class="btn btn-secondary btn-circle"><i class="fa fa-eye"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach 
                    </tbody>
                </table>
                 <div class="d-flex justify-content-center">
                    {!! $logs->links() !!}
                </div> 
            </main>
        </div>
    </div>
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace()

    </script>
</body>

</html>
