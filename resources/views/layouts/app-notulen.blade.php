<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>COMMIT</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}"/>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="/"><img src="{{ asset('assets/images/logo.png') }}" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="/"><img src="{{ asset('assets/images/logo-mini.svg') }}" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="{{ asset('assets/images/faces/face1.jpg') }}" alt="image">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black"> {{ Auth::user()->name }}</p>
                </div>
              </a>
            </li>
           
        
            
            <li class="nav-item nav-logout d-none d-lg-block">
              <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="mdi mdi-power"></i> {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
            </li>
           
          </ul>
         
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="{{ asset('assets/images/faces/face1.jpg') }}" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">{{ Auth::user()->name }}</span>
                  <span class="text-secondary text-small">{{ Auth::user()->role }} rapat</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('notulen.dashboard') }}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="notulen_newnote">
                <span class="menu-title">Tambah Notulensi</span>
                <i class="mdi mdi-library-plus menu-icon"></i>
              </a>
            </li> -->
            
            
          </ul>
        </nav>
        <div class="main-panel">
          <div class="content-wrapper ">
       
            @yield('content')
       
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!--TINY MCE-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>  
    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea.tinymce-editor',
            height: 100,
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount'
            ],
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            content_css: '//www.tiny.cloud/css/codepen.min.css'
        });
    </script>
        <!--Rekaman-->

        <script>
        $(document).ready(function () {

        /* When click New Rec button */
        $('#add-rec').click(function () {
        $('#btn-save').val("create-rec");
        $('#rec').trigger("reset");
        $('#recCrudModal').html("Tambahkan Rekaman");
        $('#crud-modal').modal('show');
        });

        /* Edit konsumsi */
        $('body').on('click', '#edit-rec', function () {
        var rec_id = $(this).data('id');
        $.get('rec/'+rec_id+'/edit', function (data) {
        $('#recCrudModal').html("Edit Link Rekaman");
        $('#btn-update').val("Update");
        $('#btn-save').prop('disabled',false);
        $('#crud-modal').modal('show');
        $('#id').val(data.id);
        $('#rec').val(data.rec);
        })
        });
        });
      </script>
      <!--Multiple File Uploads-->
          
      <script type="text/javascript">


      $(document).ready(function() {

        $(".btn-dark").click(function(){ 
            var html = $(".clone").html();
            $(".increment").after(html);
        });

        $("body").on("click",".btn-youtube",function(){ 
            $(this).parents(".control-group").remove();
        });

      });

      </script>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('assets/vendors/chart.js/Chart.min.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets/js/misc.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('assets/js/todolist.js') }}"></script>
    <!-- End custom js for this page -->
  </body>
</html>