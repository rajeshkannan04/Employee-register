<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th><div><a href="/adddesignation"><button class="btn btn-success">Add Designation</button></a></div>
                </tr>
                </th>
                </tr>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Department</th>
                    <th scope="col">Description</th>
                </tr>
                </thed>
                <tbody>    
                @foreach($designation as $data)
                <tr>
                    <td>{{$data->name}}</td>
                    <td>{{$data->department_id}}</td>
                    <td>{{$data->description}}</td> 
                </tr>
                @endforeach
                <tr>
                    <th><a href="/department"><button class="btn btn-success">Department</button></a></th>
                    <th><a href="/employee"><button class="btn btn-success">Employee</button></a></th>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>