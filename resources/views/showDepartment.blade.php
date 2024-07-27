<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @extends('layout')
    @section('condent')
    <div class="container">
        <a href="/adddepartment" class="m-2 fw-bold btn text-primary">Add Department</a>    
        @foreach($department as $data)
            <h4 class="ml-2">{{$data->name}}</h4>
            <p class="ml-5 fw-bold text-secondary">{{$data->description}}</p>
        @endforeach
    </div>
    @endsection
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
