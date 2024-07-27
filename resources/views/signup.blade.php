<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        .form-container {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            margin-top: 50px;
            font-weight: bold;
        }
        .form-control{
            border: none;
            border-bottom: 2px solid gray;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="form-container">
                <h2 class="text-center mb-4">Sign Up</h2>
                <form action="/register" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="fullName">Full Name <span class="text-danger fw-bolder">*</span></label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" require>
                    </div>
                    <div class="form-group">
                        <label for="email">Email <span class="text-danger fw-bolder">*</span></label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" require>
                    </div>
                    <div class="form-group">
                        <label for="password">Password <span class="text-danger fw-bolder">*</span></label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" require>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
                </form>
                <p class="mt-3 text-center">Already have an account? <a href="/">Sign In</a></p>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
