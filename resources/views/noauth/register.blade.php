<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">

                <form class="mt-5 shadow-lg p-3 mb-5 bg-white rounded" method="POST" action="{{ url('blogger/store')}}">
                    
                    <h3>Register Blogger</h3>
                    
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" name="name" placeholder="Ingrese el nombre" required minlength="5">
                    </div>

                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" class="form-control" name="email" placeholder="Ingrese el email" required minlength="5">
                    </div>

                    <div class="form-group">
                        <label>Web site</label>
                        <input type="text" class="form-control" name="website" placeholder="Ingrese el web site" required minlength="5">
                    </div>

                    <div class="form-group">
                        <label>Picture URL</label>
                        <input type="text" class="form-control" name="picture_url" placeholder="Ingrese la ruta de la imagen" required minlength="5">
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg btn-block">Aceept</button>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                </form>

            </div>
        </div>
        
        <div class=col-12>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link active" href="{{url('logueo/view')}}">Login</a>
                </li>
            </ul>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>