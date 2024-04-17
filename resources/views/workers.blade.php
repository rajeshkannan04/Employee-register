<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome Page</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <style>
    /* Add your custom styles here */
    body {
      background-color: #f8f9fa;
    }
    .footer {
      background-color: #343a40;
      color: #ffffff;
      text-align: center;
      padding: 20px 0;
    }
    .arrow {
      font-size: 2rem;
      color: #801fff; /* Blue color */
    }
    a{
        text-decoration: none;
        color: #008080;
    }
  </style>
</head>
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

<header class="container text-center mt-5">
  <h1>Welcome to Workers Website!</h1>
  <p>An employee, often referred to as a staff member, worker, or personnel, is an individual who is hired by an employer to perform specific duties and responsibilities within an organization or company. Employees are typically compensated for their work through wages or salaries, and they may receive additional benefits such as health insurance, retirement plans, and paid time off.</p>

<a href="/employee" class="arrow-link">
  <h3>Employee <span class="arrow">&rarr;</span></h3>
</a>
<p>An employee, often referred to as a worker or staff member, is an individual who is hired by an employer to perform specific duties and responsibilities within an organization or company. Workers are typically compensated for their work through wages or salaries, and they may receive additional benefits such as health insurance, retirement plans, and paid time off.</p>
    
<a href="/department" class="arrow-link">
  <h3>Department <span class="arrow">&rarr;</span></h3>
</a>
<p>A department is a functional area or division within an organization that is typically responsible for a specific aspect of the organization's operations. Departments may be organized based on functions such as sales, marketing, finance, human resources, or production. Each department may have its own team of employees and managers who work together to achieve departmental goals and contribute to the overall success of the organization.</p>

<a href="/designation" class="arrow-link">
  <h3>Designation <span class="arrow">&rarr;</span></h3>
</a>

<p>A designation is a job title or position within an organization that defines the responsibilities, authority, and level of seniority of an individual employee. Designations may vary depending on the industry, organization, and hierarchical structure. Common designations include manager, supervisor, director, executive, and specialist.</p>

</header>

<footer class="bg-dark text-white py-4">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h5>Employee</h5>
        <ul class="list-unstyled">
          <li><a href="#" class="text-white">Employee Directory</a></li>
          <li><a href="#" class="text-white">Employee Benefits</a></li>
          <li><a href="#" class="text-white">Join Our Team</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h5>Department</h5>
        <ul class="list-unstyled">
          <li><a href="#" class="text-white">Sales</a></li>
          <li><a href="#" class="text-white">Marketing</a></li>
          <li><a href="#" class="text-white">Finance</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h5>Designation</h5>
        <ul class="list-unstyled">
          <li><a href="#" class="text-white">Manager</a></li>
          <li><a href="#" class="text-white">Supervisor</a></li>
          <li><a href="#" class="text-white">Specialist</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>


<footer class="footer">
  <div class="container">
    <span>&copy; 2024 Workers. All rights reserved.</span>
  </div>
</footer>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
