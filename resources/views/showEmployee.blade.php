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
            background-color: #c0c0c0;
        }

        #image{
            padding: 10px;
            max-width:100%;
        }

        .card-item{
            width:auto;
            display:grid;
            color:#000;
            z-index: 4;
            grid-template-columns:1fr 1fr;
            box-shadow: 5px 5px 10px black;
            background-color: white;
            margin-bottom:50px;
        }

        .btn{
            font-weight: bold;
            background-color: #c0c0c0;
            border:none;
            color:#000;
            margin-left: 10px;
        }

        #nav{
            display: flex;
            border:2px solid #C0c0c0;
            padding: 1% 5% 0% 5%;
            background-color: #000f;
            height: 60px;
        }

        .add{   
            display: flex;
        }

        #icon{
            width: 40px;
            height: 40px;
            border-radius:20px;
        }

        .button{
            margin-left: 50%;
        }

        .container{
            margin:5%;
            display:grid;
            grid-template-columns:repeat(2 ,1fr);
            grid-gap: 2%;
            font-weight: bold;
        }

    </style>
</head>
<body>
    <nav id="nav">
        <div class="add">
            <div>
                <img id="icon" src="https://lh3.googleusercontent.com/proxy/p0j7GEke2nQF6mvDl6hrNj-94iv0lo2O-d9LX783XbCn_QyB_1erbcYOBGxUJUgF5CSx-WyG8yiCfLAKzgUnjK1cuxOGZCz2V9nicw7-yexgVDs6atUr2zam4ChE2bvm66mdhw" alt="image">
            </div>
            <div>
                <p><a href="/addemployee"><button class="btn">ADD EMPLOYEE</button></a></p>
            </div>
        </div>
        <div class ="add button">
            <p><a href="/department"><button  class="btn">DEPARTMENT</button></a></p>
            <p><a href="/designation"><button class="btn">DESIGNATION</button></a></p>
        </div>
    </nav>
    <div class="container">
    @foreach($employee as $data) 
    <div class="card-item">
        <div>
            <img id="image" src="storage/uploads/{{$data->image}}" alt="{{$data->image}}" height="400px" width="100%">
        </div>
        <div class="data">
            <p class="col">Name : {{$data->name}}</p>
            <p class="col">Gender : {{$data->gender}}</p>
            <p class="col">D.O.B : {{$data->DOB}}</p>
            <p class="col">Address : {{$data->address}}</p>
            <p class="col">Email : {{$data->email}}</p>
            <p class="col">Phone : {{$data->mobile}}</p>
            <p class="col">Department : {{$data->department_id}}</p>
            <p class="col">Designation : {{$data->designation_id}}</p>
            <p class="col">D.O.J : {{$data->DOJ}}</p>
            <p>
                <a href="/deletemployee/{{$data->id}}"><button class="btn">Delete</button></a>
                <a href="/updatemployee/{{$data->id}}"><button class="btn">Update</button></a>
            </p>
        </div>
    </div>
    @endforeach
    </div>
    <!-- <div class="container">
        <table class="table">
            <thead>
                <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Grnder</th>
                        <th scope="col">D.O.B</th>
                        <th scope="col">Address</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Email</th>
                        <th scope="col">Department</th>
                        <th scope="col">Designation</th>
                        <th scope="col">D.O.J</th>
                        <th scope="col">Image</th>
                </tr>
                </thed>
                <tbody>    
                @foreach($employee as $data)
                <tr>
                    <td>{{$data->name}}</td>
                    <td>{{$data->gender}}</td>
                    <td>{{$data->DOB}}</td>
                    <td>{{$data->address}}</td>
                    <td>{{$data->mobile}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->department_id}}</td>
                    <td>{{$data->designation_id}}</td>
                    <td>{{$data->DOJ}}</td>
                    <td><img src="/storage/{{$data->image}}" alt="{{$data->image}}"></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div> -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>