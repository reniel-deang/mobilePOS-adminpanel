<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Management Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('Admin/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('Admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
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
            <a href="/dashboard" class="brand-link">
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
                        <li class="nav-item">
                            <a href="/managecontent" class="nav-link ">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Change Ticket Details
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="" class="nav-link active">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Manage Accounts
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/manageprice" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
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
            <!-- MODAL FOR LOGOUT -->
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
            <!-- End Modal For Log Out -->

            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Add Users</h1>
                            <p>Add new users to your MobilePos account.</p>
                        </div>
                    </div>
                </div>
            </div>

            @if (session('updatepassword'))
                <div class="alert alert-success" id="alertcontainer">
                    {{ session('updatepassword') }}
                </div>
            @endif

            @if (session('createuser'))
                <div class="alert alert-success" id="alertcontainer">
                    {{ session('createuser') }}
                </div>
            @endif

            @if (session('deletestatus'))
                <div class="alert alert-danger" id="alertcontainer">
                    {{ session('deletestatus') }}
                </div>
            @endif

            <section class="content">
                <form method="POST" action="/createuser">
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
                                            <td>Username</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" value="" placeholder="Enter username" class="form-control" name="username">
                                                    <span class="input-group-text"></span>
                                                </div>
                                                @error('username')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Password</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="password" value="" placeholder="Enter password" class="form-control" name="password">
                                                    <span class="input-group-text"></span>
                                                </div>
                                                @error('password')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Account type</td>
                                            <td>
                                                <div class="input-group">
                                                    <select class="form-select" aria-label="Default select example" name = "user_type" required>
                                                        <option selected></option>
                                                        <option value="accounting">Accounting</option>
                                                        <option value="attendant">Attendant</option>
                                                      </select>
                                                    <span class="input-group-text"></span>
                                                </div>
                                                @error('user_type')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                            </td>
                                        </tr>

                                        <tr>
                                            <td></td>
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

            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Manage Registered Users</h1>
                            <p>Change password for MobilePos Users.</p>
                        </div>
                    </div>
                </div>
            </div>

            <section class="content">
                <div class="shadow p-3 mb-5 bg-body rounded">
                    <div class="container mt-3">
                        <h2>MobilePos Registered Users</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->username }}</td>
                                            <td>
                                                <form id="updatepasswordform{{ $user->id }}" method="POST" action="{{ route('update.password', $user) }}">
                                                    @csrf
                                                    <input type="password" class="form-control @error('newpassword') is-invalid @enderror" name="newpassword">
                                                    @error('newpassword')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </form>
                                            </td>
                                            <td>
                                                <button type="submit" class="btn btn-primary" form="updatepasswordform{{ $user->id }}" onclick="return confirm('Are you sure you want to change {{ $user->username }} password?')">Submit</button>
                                                <!-- Delete Button -->
                                                <form method="POST" action="{{ route('delete.user', $user) }}" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>

            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Manage Registered Users</h1>
                            <p>Change password for Accounting Account Users.</p>
                        </div>
                    </div>
                </div>
            </div>

            <section class="content">
                <div class="shadow p-3 mb-5 bg-body rounded">
                    <div class="container mt-3">
                        <h2>Accounting Registered Users</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users1 as $user)
                                        <tr>
                                            <td>{{ $user->username }}</td>
                                            <td>
                                                <form id="updatepasswordform{{ $user->id }}" method="POST" action="{{ route('update.password', $user) }}">
                                                    @csrf
                                                    <input type="password" class="form-control @error('newpassword') is-invalid @enderror" name="newpassword">
                                                    @error('newpassword')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </form>
                                            </td>
                                            <td>
                                                <button type="submit" class="btn btn-primary" form="updatepasswordform{{ $user->id }}" onclick="return confirm('Are you sure you want to change {{ $user->username }} password?')">Submit</button>
                                                <form action="{{ route('delete.user', $user) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>

            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Administrator Account Settings</h1>
                            <p>Change password for Administration Accounts.</p>
                        </div>
                    </div>
                </div>
            </div>

            <section class="content">
                <div class="shadow p-3 mb-5 bg-body rounded">
                    <div class="container mt-3">
                        <h2>Change Administrator Password</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users2 as $user)
                                        <tr>
                                            <td>{{ $user->username }}</td>
                                            <td>
                                                <form id="updatepasswordform{{ $user->id }}" method="POST" action="{{ route('update.password', $user) }}">
                                                    @csrf
                                                    <input type="password" class="form-control @error('newpassword') is-invalid @enderror" name="newpassword">
                                                    @error('newpassword')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </form>
                                            </td>
                                            <td>
                                                <button type="submit" class="btn btn-success" form="updatepasswordform{{ $user->id }}" onclick="return confirm('Are you sure you want to change administrator password?')">Change</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
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

    <!-- Modal LogOut -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 4 -->
    <!-- overlayScrollbars -->
    <script src="{{ asset('Admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
    <script>
        setTimeout(() => {
          document.querySelector('#alertcontainer').remove();
        }, 5000);
      </script>
</body>
</html>
