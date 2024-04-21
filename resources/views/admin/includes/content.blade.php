 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>@yield('content_header')</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">@yield('header_link1')</a></li>
              <li class="breadcrumb-item"><a href="#">@yield('header_link2')</a></li>
              <li class="breadcrumb-item active">@yield('header_link3')</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
       @yield('content')
      </div>
    </section>
    <!-- /.content -->
  </div>
