<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<?php
if (isset($_SESSION['status'])) {
  if ($_SESSION['status'] == "error") {
    echo '<div class="alert alert-danger">
      <strong>Login Failed!</strong> Wrong username or password </a>.
    </div>';
  } else if ($_SESSION['status'] == "pending") {
    echo '<div class="alert alert-primary">
      <strong>You are currently pending!</strong> Please wait for your enrollement approval </a>.
    </div>';
  }
  unset($_SESSION['status']);
}
?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EBS - Portal</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>

<style>
    body {
     
      background-size: cover;
      background-position: center;
    }
    .card {
      background-color: rgba(255, 255, 255, 0.6); /* Adjust the alpha (fourth) value for card transparency */     
    }
    .card-body {
      background-color: rgba(255, 255, 255, 0.3); /* Adjust the alpha (fourth) value for card-body transparency */
    }
  </style>


<body class="hold-transition login-page">
  
<header id="header" class="fixed-top header-scrolled">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">EBS</a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="../index.php">Home</a></li>
          <li><a class="nav-link scrollto active" href="login.php">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>



  <div class="login-box" style="width: 450px" >
    
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
      <div class="login-logo">
      <a href="../index.php"><b>EBS Portal</a>
    </div>
        <p class="login-box-msg">Your Journey Starts Here!</p>

        <form action="config/loginportal.php" method="post" autocomplete="off">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Username" name="username">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="pass">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Remember Me
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block" name="submit">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <p class="mb-1">
          <a href="forgot-password.html">I forgot my password</a>
        </p>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->





  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.min.js"></script>
</body>

</html>