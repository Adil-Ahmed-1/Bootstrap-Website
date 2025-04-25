<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Neo Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet" />
</head>
<body style="background: url('image/coding_11zon.jpg') no-repeat center center/cover;">

<div class="container d-flex justify-content-center align-items-center min-vh-100">
  <div class="card shadow-lg rounded-4 animate__animated animate__fadeInDown" style="width: 30rem; backdrop-filter: blur(12px); background-color: rgba(255, 255, 255, 0.1); border: 1px solid rgba(255,255,255,0.2);">

    <div class="card-body text-white text-center">
      <h2 class="mb-4 fw-bold"><i class="bi bi-person-plus-fill me-2"></i>Register Now</h2>
      <form method="POST" action="login_Process.php">
      <input type="hidden" name="action" value="register">
        
        <div class="form-floating mb-3">
          <input type="text" class="form-control bg-transparent text-white border-light" id="floatingName" name="name" placeholder="Full Name">
          <label for="floatingName"><i class="bi bi-person-fill me-1"></i>Name</label>
        </div>
        
        <div class="form-floating mb-3">
          <input type="email" class="form-control bg-transparent text-white border-light" id="floatingEmail" name="email" placeholder="Email">
          <label for="floatingEmail"><i class="bi bi-envelope-fill me-1"></i>Email</label>
        </div>

        <div class="form-floating mb-3">
          <input type="password" class="form-control bg-transparent text-white border-light" id="floatingPassword" name="password" placeholder="Password">
          <label for="floatingPassword"><i class="bi bi-lock-fill me-1"></i>Password</label>
        </div>

        <div class="form-floating mb-3">
          <select class="form-select text-primary border-light rounded-pill bg-transparent" id="userRole" name="user_role_type">
            <option selected disabled>Select role</option>
            <option value="admin">Admin</option>
            <option value="author">User</option>
            <option value="reader">Editor</option>
          </select>
          <label for="userRole"><i class="bi bi-person-badge-fill me-1"></i>User Role Type</label>
        </div>

        <div class="form-floating mb-4">
          <select class="form-select text-primary border-light rounded-pill bg-transparent" id="gender" name="gender">
            <option selected disabled>Select gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
          </select>
          <label for="gender"><i class="bi bi-gender-ambiguous me-1"></i>Gender</label>
        </div>

        <div class="d-grid">
        <a href="login_form.php" class="btn btn-light btn-lg rounded-pill"><i class="bi bi-person-check-fill me-2"></i>Register</a>  
        <!-- <button class="btn btn-light btn-lg rounded-pill" type="submit"><i class="bi bi-person-check-fill me-2"></i>Register</button> -->
        </div>
        
        <p class="mt-4 small">Already have an account? <a href="login_form.php" class="text-info text-decoration-none">Login here</a></p>
      </form>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
