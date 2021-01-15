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
    @include('layouts.nav')
    <div class="container-fluid">
        <div class="row">
            @include('layouts.sidebar')
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link " href="/calendar/movable">Предвижные</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/calendar/static">Стационарные</a>
                    </li>
                </ul>

                <form class="form-inline mt-3 md-3">
                    <div class="form-group mx-sm-3 mb-2">
                        <input type="text" class="form-control" id="inputPassword2" placeholder="Фильтр по устройству">
                    </div>

                    <div class="form-group mx-sm-3 mb-2">
                        <select id="inputState" class="form-control">
                            <option selected>Фильтр по рубежу</option>
                            <option>Бла</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                        <input type="date" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success mb-2">Экспорт в эксель</button>
                </form>


                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>№</th>
                                <th>Рубеж</th>
                                <th>Устройства</th>
                                <th>Дата установки устройства</th>
                                <th>Дата снятия устройства</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($calendar_static_data as $row)
                                <tr>
                                    <td>{{ $row->id }}</td>
                                    <td>{{ $row->bound_neme }}</td>
                                    <td>{{ $row->serial_number }}</td>
                                    <td>{{ $row->installation_date }}</td>
                                    <td>{{ $row->date_of_deletion }}</td>
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
                    {{-- <div class="d-flex justify-content-center">
                        {!! $users->links() !!}
                    </div> --}}
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
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace()

    </script>
</body>

</html>
