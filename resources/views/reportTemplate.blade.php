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
                    <h3>Шаблоны отчетов</h3>
    
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
                                    <input type="text" class="form-control" placeholder="Поиск">
                                </th>
                                <th>
                                    <button type="button" class="btn btn-light">Очистить</button>
                                </th>
                            </tr>
                        </thead>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Header</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1,001</td>
                                <td>Lorem</td>
                                <td>
                                    <button type="button" class="btn btn-dark btn-circle"><i class="fas fa-pen"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i>
                                    </button>
                                </td>

                            </tr>
                            <tr>
                                <td>1,002</td>
                                <td>amet</td>
                                <td>
                                    <button type="button" class="btn btn-dark btn-circle"><i class="fas fa-pen"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i>
                                    </button>
                                </td>

                            </tr>
                            <tr>
                                <td>1,003</td>
                                <td>Integer</td>
                                <td>
                                    <button type="button" class="btn btn-dark btn-circle"><i class="fas fa-pen"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i>
                                    </button>
                                </td>

                            </tr>
                            <tr>
                                <td>1,003</td>
                                <td>libero</td>
                                <td>
                                    <button type="button" class="btn btn-dark btn-circle"><i class="fas fa-pen"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>1,004</td>
                                <td>dapibus</td>
                                <td>
                                    <button type="button" class="btn btn-dark btn-circle"><i class="fas fa-pen"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>1,005</td>
                                <td>Nulla</td>
                                <td>
                                    <button type="button" class="btn btn-dark btn-circle"><i class="fas fa-pen"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>1,006</td>
                                <td>nibh</td>
                                <td>
                                    <button type="button" class="btn btn-dark btn-circle"><i class="fas fa-pen"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>1,007</td>
                                <td>sagittis</td>
                                <td>
                                    <button type="button" class="btn btn-dark btn-circle"><i class="fas fa-pen"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            <tr>
                                <td>1,008</td>
                                <td>Fusce</td>
                                <td>
                                    <button type="button" class="btn btn-dark btn-circle"><i class="fas fa-pen"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>1,009</td>
                                <td>augue</td>
                                <td>
                                    <button type="button" class="btn btn-dark btn-circle"><i class="fas fa-pen"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>1,010</td>
                                <td>massa</td>
                                <td>
                                    <button type="button" class="btn btn-dark btn-circle"><i class="fas fa-pen"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>1,011</td>
                                <td>eget</td>
                                <td>
                                    <button type="button" class="btn btn-dark btn-circle"><i class="fas fa-pen"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>1,012</td>
                                <td>taciti</td>
                                <td>
                                    <button type="button" class="btn btn-dark btn-circle"><i class="fas fa-pen"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>1,013</td>
                                <td>torquent</td>
                                <td>
                                    <button type="button" class="btn btn-dark btn-circle"><i class="fas fa-pen"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>1,014</td>
                                <td>per</td>
                                <td>
                                    <button type="button" class="btn btn-dark btn-circle"><i class="fas fa-pen"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>1,015</td>
                                <td>sodales</td>
                                <td>
                                    <button type="button" class="btn btn-dark btn-circle"><i class="fas fa-pen"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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