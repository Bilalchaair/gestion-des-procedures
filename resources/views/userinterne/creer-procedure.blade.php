<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <title>Création d'une procédure</title>
    @livewireStyles
</head>
<body>
    <div class="container">
        <div class="row" style="margin-top:50px">
              <div class="col-md-6 offset-md-3">
                  <h1>Création de la procédure</h1><hr>
                  @livewire('multi-step-form')
              </div>
        </div>
    </div>
     
     @livewireScripts
</body>
</html>