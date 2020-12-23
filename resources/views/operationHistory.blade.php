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
            <table class="table table-striped table-bordered table-sm">
                <thead>
                    <th></th>
                    <th>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" id="inputPassword2" placeholder="Тут должен быть ваш тайм пикер">
                            </div>

                            <div class="col">
                                <input type="text" class="form-control" id="inputPassword2" placeholder="Тут должен быть ваш тайм пикер">
                            </div>
                        </div>
                    </th>
                    <th>
                    <select class="form-control">
                            <option selected>Статус</option>
                            <option>Бла</option>
                            <option>2</option>
                            <option>3</option>
                    </select>
                    </th>
                    <th><input type="text" class="form-control" id="inputPassword2" placeholder="Фильтр1"></th>
                    <th>
                        <select class="form-control">
                                <option selected>Статус</option>
                                <option>Бла</option>
                                <option>2</option>
                                <option>3</option>
                        </select>
                    </th>
                    <th class="text-center">
                        <button type="button" class="btn btn-light">Очистить</button>
                    </th>
                </thead>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Header</th>
                        <th>Header</th>
                        <th>Header</th>
                        <th>Header</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1,003</td>
                        <td>libero</td>
                        <td>Sed</td>
                        <td>cursus</td>
                        <td>ante</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-dark btn-circle"><i class="fa fa-eye"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>1,004</td>
                        <td>dapibus</td>
                        <td>diam</td>
                        <td>Sed</td>
                        <td>nisi</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-dark btn-circle"><i class="fa fa-eye"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>1,006</td>
                        <td>nibh</td>
                        <td>elementum</td>
                        <td>imperdiet</td>
                        <td>Duis</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-dark btn-circle"><i class="fa fa-eye"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>1,007</td>
                        <td>sagittis</td>
                        <td>ipsum</td>
                        <td>Praesent</td>
                        <td>mauris</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-dark btn-circle"><i class="fa fa-eye"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>1,008</td>
                        <td>Fusce</td>
                        <td>nec</td>
                        <td>tellus</td>
                        <td>sed</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-dark btn-circle"><i class="fa fa-eye"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>1,009</td>
                        <td>augue</td>
                        <td>semper</td>
                        <td>porta</td>
                        <td>Mauris</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-dark btn-circle"><i class="fa fa-eye"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>1,010</td>
                        <td>massa</td>
                        <td>Vestibulum</td>
                        <td>lacinia</td>
                        <td>arcu</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-dark btn-circle"><i class="fa fa-eye"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>1,011</td>
                        <td>eget</td>
                        <td>nulla</td>
                        <td>Class</td>
                        <td>aptent</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-dark btn-circle"><i class="fa fa-eye"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>1,012</td>
                        <td>taciti</td>
                        <td>sociosqu</td>
                        <td>ad</td>
                        <td>litora</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-dark btn-circle"><i class="fa fa-eye"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>1,013</td>
                        <td>torquent</td>
                        <td>per</td>
                        <td>conubia</td>
                        <td>nostra</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-dark btn-circle"><i class="fa fa-eye"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>1,014</td>
                        <td>per</td>
                        <td>inceptos</td>
                        <td>himenaeos</td>
                        <td>Curabitur</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-dark btn-circle"><i class="fa fa-eye"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>1,015</td>
                        <td>sodales</td>
                        <td>ligula</td>
                        <td>in</td>
                        <td>libero</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-dark btn-circle"><i class="fa fa-eye"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
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
          </main>
      </div>
    </div>
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script> 
</body>
</html>