<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Management Dashboard</title>
  
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset("Admin/plugins/fontawesome-free/css/all.min.css")}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset("Admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css")}}">
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
  
  </head>
  
  <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
  
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
        </ul>
  
  
        <ul class="navbar-nav ml-auto">
  
          <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
              <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
              <form class="form-inline">
                <div class="input-group input-group-sm">
                  <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                  <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                      <i class="fas fa-search"></i>
                    </button>
                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </li>
  
          <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
              <i class="fas fa-expand-arrows-alt"></i>
            </a>
          </li>
  
          
  
  
  
        </ul>
      </nav>
  
  
  
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
  
        <a href="/dashhoard" class="brand-link">
          <span class="brand-text font-weight-light">Admin</span>
        </a>
  
  
        <div class="sidebar">
  
          <br>
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-item">
                <a href="/dashboard" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
              </li>
              <li class="nav-item menu-open">
                <a href="" class="nav-link active">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>
                    Change Ticket Details
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                
              </li>
  
              <li class="nav-item">
                <a href="/manageuser" class="nav-link">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>
                  Manage Accounts
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                
              </li>
  
              <li class="nav-item">
                <a href="/manageprice" class="nav-link">
                  <i class="nav-icon fas  fa-edit"></i>
                  <p>
                      Change Price
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/tabledata" class="nav-link">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>
                    Sales Report
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
              </li>
  
              <li class="nav-item" style="color:white; padding-top: 20px; padding-bottom: 20px;">
                _______________________________
  
                </a>
              </li>
  
              <li class="nav-item">
                <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#profilepicModal">
                  <i class="nav-icon fas fa-sign-out-alt"></i>
                  <p>
                    Log Out
  
                  </p>
                </a>
  
  
              </li>
            </ul>
          </nav>
  
        </div>
  
      </aside>
  
  
      <div class="content-wrapper">
  
      <!--MODAL FOR LOGOUT-->
      <div class="modal fade" id="profilepicModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
              </div>
              <div class="modal-body">
                Are you sure you want to logout?
              </div>
              <div class="modal-footer">
                <a href="/logout"><button type="button" class="btn btn-primary">Yes</button></a>
              </div>
            </div>
  
          </div>
        </div>
        <!--End Modal For Log Out-->
  
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">Change Ticket Details</h1>
                <p>Change your printed ticket details in MobilePos in realtime.</p>
              </div>
            </div>
          </div>
        </div>

        @if(session('status'))
        <div class="alert alert-success" id="alertcontainer">
          {{ session('status') }}
      </div>
        @endif
  
  
  
        <section class="content">
            <form method="POST" action="{{route('update.ticket', $ticketdetails)}}">
              @csrf
                <div id="footer" class="shadow p-3 mb-5 bg-body rounded">
                    <div class="container mt-3">
                    <div class="table-responsive">
                        <table class="table table-borderless">
                                <thead>
                                    <tr>
                                    <th>Category</th>
                                    <th>Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                            <tr>
                            <td><i class=""></i> Parking Title</td>
                            <td>
                                <div class="input-group">
                                <input type="text" value="{{$ticketdetails->title}}" placeholder="Insert parking title" style="background-color: inherit; width: 250px; height: 30px; padding: 20px; border-style: solid;" name="title" >
                                <span class="input-group-text"><i class=""></i></span>
                                </div>
                                @error('title')
                                  <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </td>
                            
                            </tr>
                            
                            <tr>
                            <td><i class=""></i> Toilet Title</td>
                            <td>
                                <div class="input-group">
                                <input type="text" value="{{$ticketdetails->toilet_title}}" placeholder="Insert toilet title" style="background-color: inherit; width: 250px; height: 30px; padding: 20px; border-style: solid;" name="toilet_title" >
                                <span class="input-group-text"><i class=""></i></span>
                                </div>
                                @error('toilet_title')
                                  <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </td>
                           
                            </tr>
                            
                            <tr>
                            <td><i class=""></i>Company Name</td>
                            <td>
                                <div class="input-group">
                                <input type="text" placeholder="Insert Company Name" value="{{$ticketdetails->company_name}}" style="background-color: inherit; width: 250px; height: 30px; padding: 20px; border-style: solid;" name="company_name" >
                                <span class="input-group-text"><i class=""></i></span>
                                </div>
                                @error('company_name')
                                  <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </td>
                            </tr>
                            
                            <tr>
                            <td><i class=""></i>Company Address</td>
                            <td>
                                <div class="input-group">
                                <input type="text" value="{{$ticketdetails->company_address}}" placeholder="Insert Company Address" style="background-color: inherit; width: 250px; height: 30px; padding: 20px; border-style: solid;" name="company_address" >
                                <span class="input-group-text"><i class=""></i></span>
                                </div>
                                @error('company_address')
                                  <p class="text-danger">{{ $message }}</p>
                               @enderror
                            </td>
                            </tr>
                         
                            <tr>
                            <td><i class=""></i> Footer</td>
                            <td>
                            <div class="input-group">
                                <textarea rows="6" type="text"  value="{{$ticketdetails->footer}}" placeholder="{{$ticketdetails->footer}}" style="background-color: inherit; width: 250px; padding: 20px; border-style: solid;" name="footer" ></textarea>
                                <span class="input-group-text"><i class=""></i></span>
                                </div>
                                @error('footer')
                                  <p class="text-danger">{{ $message }}</p>
                               @enderror
                            </td>
                            </tr>
                            
                            <tr>
                              <td>
                              </td>
                                <td>
                                  <button style="float: right" type="submit" class="btn btn-primary">
                                    <i class="fas fa-save"></i>
                                </button>
                                </td>
                                </tr>
                                </tbody>
                        </table>
                    </div>
                    </div>
                    
                    
            </div>
            </form>
        </section>
  
      </div>
  
      <footer class="main-footer">
        All rights reserved
        <div class="float-right d-none d-sm-inline-block">
          <b>Version</b> 1.0
        </div>
      </footer>
  
  
      <aside class="control-sidebar control-sidebar-dark">
  
      </aside>
  
    </div>
  
    <!--Modal LogOut-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!--Modal LogOut-->
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
      integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"
      integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <!-- overlayScrollbars -->
    <script src="{{asset("Admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js")}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">

    <script>
      setTimeout(() => {
        document.querySelector('#alertcontainer').remove();
      }, 5000);
    </script>
  </body>
  
  </html>