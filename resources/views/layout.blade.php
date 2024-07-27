<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    a{
        text-decoration: none;
        color: #008080;
    }
  </style>
<body>
    
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Workers Page</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" href="/">home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/employee">Employee</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/department">Department</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/designation">Designation</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <div>
      @yield('condent')    
    </div>

  <footer class="bg-dark text-white py-4">
    <div class="container text-center">
      <div class="row">
        <div class="col-md-4">
          <h5>Employee</h5>
          <ul class="list-unstyled">
            <li>Employee Directory</li>
            <li>Employee Benefits</li>
            <li>Join Our Team</li>
          </ul>
        </div>
        <div class="col-md-4">
          <h5>Department</h5>
          <ul class="list-unstyled">
            <li>Sales</li>
            <li>Marketing</li>
            <li>Finance</li>
          </ul>
        </div>
        <div class="col-md-4">
          <h5>Designation</h5>
          <ul class="list-unstyled">
            <li>Manager</li>
            <li>Supervisor</li>
            <li>Specialist</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container text-center">
      <span>&copy; 2024 Workers. All rights reserved.</span>
    </div>
  </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>