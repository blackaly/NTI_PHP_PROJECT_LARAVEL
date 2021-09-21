<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | jsGrid</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- jsGrid -->
  <link rel="stylesheet" href="{{url('/plugins/jsgrid/jsgrid.min.css')}}">
  <link rel="stylesheet" href="{{url('/plugins/jsgrid/jsgrid-theme.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  @include("../admin.adminLayout.navbar");
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include("../admin.adminLayout.aside");


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>jsGrid</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">jsGrid</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">jsGrid</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div id="jsGrid1">
            <div class="jsgrid-grid-header jsgrid-header-scrollbar">
              <table class="jsgrid-table">
                <tr class="jsgrid-header-row">
                  <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 150px;">ID</th>
                  <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 150px;">Title</th>
                  <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 150px;">Created At</th>
                  <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 150px;">Updated At</th>
                  <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 150px;">Action</th>
                </tr>
              </table>
            </div>
            <div class="jsgrid-grid-body" style="height: 917px;">
              <table class="jsgrid-table">
                <tbody>
                  <tr class="jsgrid-row">
                    <td class="jsgrid-cell" style="width: 150px;"></td>
                    <td class="jsgrid-cell" style="width: 150px;">Otto Clay</td>                    <td class="jsgrid-cell" style="width: 150px;">Otto Clay</td>
                    <td class="jsgrid-cell" style="width: 150px;">Otto Clay</td>
                    <td class="jsgrid-cell" style="width: 150px;">Otto Clay</td>
                    <td class="jsgrid-cell" style="width: 150px;">Otto Clay</td>
                  </tr>
                </tbody>
              </table>
            </div>

          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 @include("../admin.adminLayout.footer");

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include("../admin.adminLayout.script");

<!-- jQuery -->
<script src="{{url('/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{url('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- jsGrid -->
<script src="{{url('/plugins/jsgrid/demos/db.js')}}"></script>
<script src="{{url('/plugins/jsgrid/jsgrid.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('/plugins/jsgrid/jsgrid.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url('/dist/js/demo.js')}}"></script>
<!-- Page specific script -->

</body>
</html>
