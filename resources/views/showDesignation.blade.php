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
        <a href="/adddesignation" class="m-2 fw-bold btn text-primary">Add Designation</a>
         @foreach($designation as $data)
            <h3 class="card-title">{{$data->name}}</h3>
            <p class="ml-5 fw-bold">DepartmentID : {{$data->department_id}}</p>
            <p class="ml-5 fw-bold"> {{$data->description}}</p> 
         @endforeach
    </div>
    @endsection 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>