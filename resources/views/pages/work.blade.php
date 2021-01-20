<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

</head>


<body>
    @yield('header')
    <div id="app">
        <div class="container-fluid">
            <div class="row">
                @yield('content')
                {{-- <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                    <h2>Рабочий стол</h2>
                    <div class="d-flex bd-highlight mb-3">
                        <div class="p-2 w-50 bd-highlight">
                            <input type="text" class="form-control" placeholder="Поиск по  серийному номеру устройства">
                            </th>
                        </div>
                        <div class="ml-auto p-2 bd-highlight">
                            <button type="button" class="btn btn-dark ">Убрать устройства по всем рубежам</button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <div id="work_table">
                            @csrf
                            <table class="table table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th> </th>
                                        <th>
                                            <input type="text" class="form-control" placeholder="Наименование рубежа" onkeyup="findSerialNumber()" id="search-serial-number">
                                        </th>
                                        <th>
                                            <select class="form-control">
                                                <option value="" disabled selected>Регион</option>
                                                <option>Первый</option>
                                                <option>Второй</option>
                                                <option>Третий</option>
                                                <option>Четвертый</option>
                                            </select>
                                        </th>
                                        <th>
                                            <select class="form-control">
                                                <option value="" disabled selected>Группы рубежей</option>
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
                                        <th>Наименование рубежа</th>
                                        <th>Регион</th>
                                        <th>Группы рубежей</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($w_cal_datas as $row)
                                    <tr>
                                        <td>{{ $row->id }}</td>
                                        <td>{{ $row->device_bound_neme }}</td>
                                        <td>{{ $row->region_name }}</td>
                                        <td>{{ $row->group_name }}</td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <button type="button" class="btn btn-secondary btn-circle"><i class="fa fa-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-center">
                            {!! $w_cal_datas->links() !!}
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
                </main> --}}
            </div>
        </div>
    </div>

    <script src="js/app.js"></script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace()
    </script>

    <script type="text/javascript">
        // function findSerialNumber() {
        //     const CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        //     const value = $("#search-serial-number").val();
        //     $.ajax({
        //         url: '/search',
        //         type: 'POST',
        //         data: {
        //             _token: CSRF_TOKEN,
        //             value: value,
        //         },
        //         success: function(data) {
        //             $('#work_table').html(data);
        //         }
        //     })
        // }
    </script>

</body>

</html>