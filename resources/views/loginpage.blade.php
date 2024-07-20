<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WebPos - Portal</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset("Admin/assets/img/favicon.png")}}" rel="icon">
  <link href="{{asset("Admin/assets/img/apple-touch-icon.png")}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Template Main CSS File -->
  <link href="{{asset("Admin/assets/css/style.css")}}" rel="stylesheet">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{asset("Admin/dist/css/adminlte.min.css")}}">
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

      <h1 class="logo me-auto"><a href="index.php">WebPos</a></h1>

    </div>
  </header>



  <div class="login-box" style="width: 450px" >
    
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
      <div class="login-logo">
      <a href="/"><b>WebPoS Portal</a>
    </div>

        <form action="/login" method="post" autocomplete="off">
          @csrf
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Username" name="username">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          @error('username')
          <p class="text-danger">{{ $message }}</p>
         @enderror
          
          <div class="row">
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block" name="submit">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->





  <!-- jQuery -->
  <script src="{{asset("Admin/plugins/jquery/jquery.min.js")}}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{asset("Admin/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset("Admin/dist/js/adminlte.min.js")}}"></script>
</body>

</html>