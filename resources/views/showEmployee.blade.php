<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            margin:0;
            padding: 0;
            box-sizing:border-box;
            background-color: #939fb5;
        }
        #image{
            padding: 10px;
            max-width: auto;
            max-height: 300px;
            border-radius: 50%;
        }
        .card-item{
            width:auto;
            display:grid;
            color:#000;
            z-index: 4;
            grid-template-columns:1fr 1fr;
            margin-bottom:2px;
        }
        #card{
            margin:5%;
            display: grid;
            grid-template-columns:1fr 1fr;
            grid-gap: 2%;
            font-weight: bold;
        }

        @media screen and (min-width:700px) and (max-width:800px) {
            body{
                margin:0;
                padding: 0;
                box-sizing:border-box;
                background-color: #c0c0c0;
            }
            #image{
                padding: 10px;
                max-width:200px;
                max-height:200px
            }
            .card-item{
                width:auto;
                display:grid;
                color:#000;
                z-index: 4;
                grid-template-columns:1fr 1fr;
                margin-bottom:2px;
            }
            #card{
                margin:2%;
                display: grid;
                grid-template-columns:1fr 1fr;
                grid-gap: 1%;
                font-weight: bold;
            }   
        }
        @media screen and (max-width:700px) and (min-width:200px) {
            body{
                margin:0;
                padding: 0;
                box-sizing:border-box;
                background-color: #c0c0c0;
            }
            #image{
                padding: 10px;
                max-width:auto;
                max-height:300px
            }
            .card-item{
                width:auto;
                display:grid;
                color:#000;
                z-index: 4;
                grid-template-columns:1fr 1fr;
                margin-bottom:2px;
            }
            #card{
                margin:2%;
                display: block;
            }   
        }
 
    </style>
</head>
<body>
    @extends('layout')
    @section('condent')
    <div class="mt-3 text-center">
        <p>
            <a href="/addemployee" class="text-center fw-bold">ADD EMPLOYEE</a>
        </p>
    </div>

    <div id="card">
        @foreach($employee as $data) 
        <div class="card">
            <H5 class="text-center text-uppercase fw-bold">{{$data->name}}</H5  >
            <div class="card-item">
                <div>
                    <img id="image" src="storage/uploads/{{$data->image}}" alt="{{$data->image}}" height="400px" width="100%">
                </div>
                <div class="data">
                    <p class="col">Gender : {{$data->gender}}</p>
                    <p class="col">D.O.B : {{$data->DOB}}</p>
                    <p class="col">Email : {{$data->email}}</p>
                    <p class="col">Phone : {{$data->mobile}}</p>
                    <p class="col">Department : {{$data->department_id}}</p>
                    <p class="col">Designation : {{$data->designation_id}}</p>
                    <p class="col">D.O.J : {{$data->DOJ}}</p>
                </div>
            </div>
            <p class="col">Address : {{$data->address}}</p>
            <p class="text-center">
                <a href="/deletemployee/{{$data->id}}" class="btn">Delete</a>
                <a href="/updatemployee/{{$data->id}}"class="btn">Update</a>
            </p>
        </div>
        @endforeach
    </div>
    @endsection

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>