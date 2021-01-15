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
    <link href="css/album.css" rel="stylesheet">
</head>

<body>
    @include('layouts.nav')
    <div class="container-fluid">
        <div class="row">
            @include('layouts.sidebar')
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
                    <h3>Оперативная сводка</h3>
                </div>
                <div class="mb-4">
                    <form class="form-inline">
                        <div class="form-group mb-2">
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>Выберите группу</option>
                                <option>Группа 1</option>
                                <option>Группа 2</option>
                                <option>Группа 3</option>
                                <option>Группа 4</option>
                            </select>
                        </div>
                        <div class="form-group mx-sm-3 mb-2">
                            <input type="Text" class="form-control" placeholder="Дата начала">
                        </div>
                        <div class="form-group mx-sm-3 mb-2">
                            <input type="Text" class="form-control" placeholder="Дата конца">
                        </div>
                        <button class="btn btn-dark mb-2">За период</button>
                        <button class="btn btn-dark mb-2 ml-2">За текущий день</button>
                        <button class="btn btn-dark mb-2 ml-2">За текущую неделю</button>
                        <button class="btn btn-dark mb-2 ml-2">За текущий месяц</button>
                        <button class="btn btn-dark mb-2 ml-2">Прошлый месяц</button>
                    </form>
                </div>

                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Работоспособность</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Нарушения/Проезды</a>
                    </li>
                </ul>

                <div class="d-flex bd-highlight mb-3">
                    <h5 class="p-2 bd-highlight">Работоспособность</h5>
                    <div class="p-2 bd-highlight">
                        <button type="button" class="btn btn-success"><i class="fa fa-download" aria-hidden="true"></i>
                            Экспорт</button>
                    </div>
                    <div class=" p-2 bd-highlight">
                        <button type="button" class="btn btn-light"><i class="fa fa-download" aria-hidden="true"></i>
                            Выгрузить отчет</button>
                    </div>
                </div>
                <div class="d-flex bd-highlight mb-3">
                    <div class="p-2 bd-highlight">
                        <button type="button" class="w-75 btn btn-light"></i> Таблица</button>
                        <button type="button" class="w-75 btn btn-light"></i> График</button>
                    </div>
                    <div class="my-4 w-100">
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>Дата</th>
                                    <!--TODO:Заголовки взять из бд-->
                                    @foreach ($perfomances->unique('device_name') as $col)
                                        <th>
                                            {{ $col->device_name }}

                                        </th>
                                    @endforeach
                                    <th>Среднее</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php

                                $av=0;
                                $count=0;


                                @endphp

                                @foreach ($perfomances->unique('date') as $rows)


                                    <tr>
                                        <td>
                                            {{ date('d.m.Y', strtotime($rows->date)) }}
                                        </td>
                                        @foreach ($perfomances as $row)
                                            @if ($row->date == $rows->date)
                                                <td>
                                                    {{ $row->performance }}
                                                    @php
                                                    $av+= $row->transition;
                                                    $count++;
                                                    @endphp

                                                </td>
                                            @endif


                                        @endforeach
                                        <td>
                                            {{ $av / $count }}
                                            @php
                                            $av=0;
                                            $count=0;
                                            @endphp
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        {{-- <div class="d-flex justify-content-center">
                            {!! $users->links() !!}
                        </div> --}}
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
