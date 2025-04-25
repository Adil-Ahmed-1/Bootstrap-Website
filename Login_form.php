<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Neo Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet" />
</head>
<body style="background: url('image/coding_11zon.jpg') no-repeat center center/cover;">

<div class="container d-flex justify-content-center align-items-center min-vh-100">
  <div class="card shadow-lg rounded-4 animate__animated animate__fadeInDown" style="width: 28rem; backdrop-filter: blur(12px); background-color: rgba(255, 255, 255, 0.1); border: 1px solid rgba(255,255,255,0.2);">

    <div class="card-body text-white text-center">
      <h2 class="mb-4 fw-bold"><i class="bi bi-unlock-fill me-2"></i>Login Portal</h2>
      <form method="POST" action="login_Process.php">
      <input type="hidden" name="action" value="login">

        <div class="form-floating mb-3">
          <input type="email" class="form-control bg-transparent text-white border-light" id="floatingEmail" name="email" placeholder="Email">
          <label for="floatingEmail"><i class="bi bi-envelope-fill me-1"></i>Email address</label>
        </div>
        <div class="form-floating mb-3">
          <input type="password" class="form-control bg-transparent text-white border-light" id="floatingPassword" name="password" placeholder="Password">
          <label for="floatingPassword"><i class="bi bi-lock-fill me-1"></i>Password</label>
        </div>
        <div class="form-check mb-3 text-start">
          <input class="form-check-input" type="checkbox" id="remember" name="rememberMe">
          <label class="form-check-label" for="remember">Remember me</label>
        </div>
        <div class="d-grid">
          <button class="btn btn-light btn-lg rounded-pill" type="submit"><i class="bi bi-box-arrow-in-right me-2"></i>Login</button>
        </div>
        <p class="mt-4 small">Don’t have an account? <a href="register.php" class="text-info text-decoration-none">Register Now</a></p>
      </form>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
