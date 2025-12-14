<?php include 'auth.php'; ?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>RozeeStore Login</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<link rel="icon" href="images/logo.png" type="image/x-icon">

<style>
body {
    font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
    background: url("images/bgred.png");
    background-size: cover;
    background-position: center;
}

/* Floating box container */
.float-box {
  width: 100%;
  max-width: 1000px;
  border-radius: 20px;
  background: white;
  box-shadow:
    0 10px 25px rgba(0,0,0,0.08),
    0 20px 40px rgba(0,0,0,0.05);
}

/* custom school button: replace or tune the color to match your brand */
.btn-pixel {
  background: linear-gradient(90deg, #ff3d3d, #d60000);
  border: none;
  color: #fff;
}

.btn-pixel:hover {
  background: linear-gradient(90deg, #d60000, #a80000);
}
.btn-pixel:active {
  background: linear-gradient(90deg, #a80000, #7a0000);
}
.btn-pixel img { filter: none; }

.btn-signin {
    background: linear-gradient(90deg, #ff3d3d, #d60000);
    border: none;
    color: #fff;
    font-weight: 600;
}

.btn-signin:hover {
    background: linear-gradient(90deg, #d60000, #a80000);
}

/* Right image */
.bg-image {
  background: url("images/logologin.png") no-repeat center center/cover;
}

.madeby {
  font-size: 11px;
  font-weight: 300;
  color: #ffffffcc; /* soft white on your red bg */
  margin-top: 15px;
}

/* Mobile */
@media (max-width: 768px) {
  .float-box {
    margin: 20px;
  }
}
</style>

</head>

<body>

<div class="container d-flex align-items-center justify-content-center min-vh-100">

  <!-- FLOATING LOGIN CARD -->
  <div class="row shadow-lg rounded-4 overflow-hidden bg-white float-box">

    <!-- LEFT FORM SECTION -->
    <div class="col-lg-6 p-5">
      <div class="mb-4 text-start">
        <h5 class="text-muted mt-3 text-center">Welcome to RozeeStore Admin Portal</h5>
    </div>
      <h2 class="fw-bold mb-4 text-center">Login</h2>

      <!-- LOGIN FORM -->
      <form method="POST">

        <div class="mb-3">
          <input type="text" name="username" class="form-control py-2" placeholder="Username" required>
        </div>

        <div class="mb-3">
          <input type="password" name="password" class="form-control py-2" placeholder="Password" required>
        </div>

        <?php if (!empty($error)): ?>
          <div class="alert alert-danger py-2"><?= $error ?></div>
        <?php endif; ?>

        <!-- Remember me + forgot password -->
        <div class="d-flex justify-content-between align-items-center mb-3">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="rememberMe">
            <label class="form-check-label" for="rememberMe">Remember me</label>
          </div>
          <a href="#" class="text-primary small">Forgot password?</a>
        </div>

        <button class="btn btn-signin w-100 py-2 mt-2">SIGN IN</button>
      </form>

      <!-- Divider -->
      <div class="text-center my-4 text-muted">or sign in with</div>

      <!-- SOCIAL BUTTONS -->
      <div class="d-flex justify-content-center gap-3">

        <button class="btn btn-light border rounded-3 shadow-sm px-4 py-2">
          <i class="bi bi-google"></i>
        </button>

        <!-- school login button: use a colored button so the icon is visible on a colored background -->
        <button class="btn btn-primary rounded-3 shadow-sm px-4 py-2 d-flex align-items-center justify-content-center btn-pixel">
          <img src="images/logo.png" style="height: 22px; width: auto;" alt="custom logo">
        </button>

      </div>

      <div class="mt-4 text-center">
        <span class="text-muted">Don't have an account?</span>
        <a href="#" class="text-primary small">Sign Up</a>
      </div>

    </div> <!-- END LEFT COLUMN -->

    <!-- RIGHT IMAGE SECTION -->
    <div class="col-lg-6 d-none d-lg-block bg-image"></div>
    <h7 class="text-center text-muted small mt-5 madeby">
      Made by Dila Arifin © 2025
    </h7>
    </div><!-- END FLOAT BOX -->

</div><!-- END CONTAINER -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
