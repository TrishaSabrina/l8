<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel VUE CRUD Application - LaravelTuts</title>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ mix('css/app.css')}}" type="text/css">
</head>
<body>
<div class="card-body">
                  <file-upload-component></file-upload-component>
                </div>
                 
    <div id="app">
    
    <router-view></router-view>
    </div>
    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
    @error('name')
   <span class="text-danger">{{$message}}</span>
@enderror
</body>
</html>