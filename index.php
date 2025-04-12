<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Publishing System - Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body class="bg-light">
    <div class="container">
        <div class="row min-vh-100 align-items-center justify-content-center">
            <div class="col-md-8 text-center mb-5">
                <h1 class="display-4 mb-4">Result Publishing System</h1>
                <p class="lead text-muted">Welcome to the Result Publishing System. Please select your login type.</p>
            </div>
            <div class="col-md-10">
                <div class="row justify-content-center">
                    <!-- Student Login Card -->
                    <div class="col-md-5 mb-4 mb-md-0">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body text-center p-5">
                                <i class="fas fa-user-graduate fa-4x mb-4 text-primary"></i>
                                <h3 class="card-title mb-4">Student Login</h3>
                                <p class="card-text mb-4">Access your academic information</p>
                                <a href="student/login.php" class="btn btn-primary btn-lg">Login as Student</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Faculty Login Card -->
                    <div class="col-md-5">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body text-center p-5">
                                <i class="fas fa-chalkboard-teacher fa-4x mb-4 text-success"></i>
                                <h3 class="card-title mb-4">Faculty Login</h3>
                                <p class="card-text mb-4">Manage and publish student results</p>
                                <a href="faculty/login.php" class="btn btn-success btn-lg">Login as Faculty</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 position-relative mt-4">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <p class="text-center text-muted">© 2025 Result Publishing System. All rights reserved.</p>
                    </div>
                </div>
                <div class="position-absolute top-0 end-0">
                    <a href="admin/login.php" class="btn btn-dark btn-sm">
                        <i class="fas fa-user-shield me-1"></i>Admin Login
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 