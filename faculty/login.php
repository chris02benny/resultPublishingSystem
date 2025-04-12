<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Login - Result Publishing System</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background: linear-gradient(135deg, #0f5132 0%, #20c997 100%);
            height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-container {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            width: 900px;
            max-width: 90%;
        }
        .illustration-side {
            background: #198754;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
        }
        .form-side {
            padding: 40px;
        }
        .form-control {
            border-radius: 10px;
            padding: 12px 15px;
            border: 1px solid #e1e1e1;
            margin-bottom: 15px;
        }
        .form-control:focus {
            box-shadow: none;
            border-color: #198754;
        }
        .btn-login {
            border-radius: 10px;
            padding: 12px;
            width: 100%;
            background: #198754;
            border: none;
            font-weight: 600;
            margin-top: 15px;
        }
        .password-strength {
            height: 4px;
            background: #e1e1e1;
            margin-top: -10px;
            margin-bottom: 15px;
            border-radius: 2px;
        }
        .back-btn {
            position: absolute;
            top: 20px;
            left: 20px;
            color: #6c757d;
            text-decoration: none;
        }
        .back-btn:hover {
            color: white;
        }
        .logo-size{
            font-size: 150px;
        }
    </style>
</head>
<body>
    <a href="../index.php" class="back-btn">
        <i class="fas fa-arrow-left me-2"></i>Back to Home
    </a>
    
    <div class="login-container">
        <div class="row g-0">
            <!-- Illustration Side -->
            <div class="col-md-6 illustration-side">
            <i class="fa-solid fa-user-lock logo-size"></i>
                <h2 class="text-center mb-3 mt-3">Welcome Back, Faculty!</h2>
                <p class="text-center text-light mb-0">Manage and publish student results</p>
            </div>
            
            <!-- Form Side -->
            <div class="col-md-6 form-side">
                <div class="p-4">
                    <h2 class="mb-4">Faculty Login</h2>
                    <form action="process_login.php" method="POST">
                        <div class="mb-3">
                            <label for="faculty_id" class="form-label">Faculty ID</label>
                            <input type="text" class="form-control" id="faculty_id" name="faculty_id" placeholder="Enter your faculty ID" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                        </div>
                        
                
                        
                        <button type="submit" class="btn btn-login btn-success">Sign In</button>
                        
                      
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 