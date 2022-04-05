<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon"> <!-- Favicon-->
    <title>@yield('title') - {{ config('app.name') }}</title>
    <meta name="description" content="@yield('meta_description', config('app.name'))">
    <meta name="author" content="@yield('meta_author', config('app.name'))">
    @yield('meta')
    <!-- Font Awesome-->
    @includeIf('yonetici.layout.admin.partials.css')
</head>
<body>
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
      <div class="sk-three-bounce">
          <div class="sk-child sk-bounce1"></div>
          <div class="sk-child sk-bounce2"></div>
          <div class="sk-child sk-bounce3"></div>
      </div>
  </div>
  <!--*******************
      Preloader end
  ********************-->
    <!-- page-wrapper Start-->
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
      <!--**********************************
          Nav header start
      ***********************************-->
      <div class="nav-header">
        <a href="{{route('home')}}" class="brand-logo" title="Anasayfa">
          @if(!empty($logo))
              <img class="logo-abbr" src="{{ asset($logo) }}" alt="Anasayfa">
          @else
              <img class="logo-abbr" src="{{asset('yonetici/images/logo.png') }}" alt="Anasayfa">
          @endif
        </a>
          <div class="nav-control">
              <div class="hamburger">
                  <span class="line"></span><span class="line"></span><span class="line"></span>
              </div>
          </div>
      </div>
      <!-- Page Header Start-->
      @includeIf('yonetici.layout.admin.partials.header')
      <!-- Page Header Ends -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper sidebar-icon">
        <!-- Page Sidebar Start-->
        @includeIf('yonetici.layout.admin.partials.sidebar')
        <!-- Page Sidebar Ends-->
        <div class="content-body">
          <!-- Container-fluid starts-->
          @yield('content')
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <div class="footer">
          <div class="copyright">
            <p>Copyright © Software &amp; Developed by <a href="http://www.matgis.com.tr/" target="_blank">Matgis Software</a> <?=date("Y")?></p>
          </div>
        </div>
      </div>
    <!--*********************************************************************-->
    <!-- Required vendors -->
    <script src="{{asset('yonetici/vendor/global/global.min.js')}}"></script>
	<script src="{{asset('yonetici/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
	<script src="{{asset('yonetici/vendor/chart.js/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('yonetici/js/custom.min.js')}}"></script>
	<script src="{{asset('yonetici/js/deznav-init.js')}}"></script>
	<script src="{{asset('yonetici/vendor/owl-carousel/owl.carousel.js')}}"></script>
	<!-- Apex Chart -->
	<script src="{{asset('yonetici/vendor/apexchart/apexchart.js')}}"></script>
	<!-- Dashboard 1 -->
	<script src="{{asset('yonetici/js/dashboard/dashboard-1.js')}}"></script>

<!-- Scripts -->
@stack('after-scripts')
<script type="text/javascript">
    function deleteItem(parentElement, deleteUrl) {
        swal({
            title: "Silmek istediğinize emin misiniz?",
            text: "Silinen verileri geri getiremezsiniz!",
            type: "warning",
            showCancelButton: true,
            cancelButtonText: 'İptal',
            confirmButtonColor: "#dc3545",
            confirmButtonText: "Evet, sil!",
            closeOnConfirm: false
        }, () => {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: "DELETE",
                url: deleteUrl,
            })
                .done(() => {
                    parentElement.remove();
                    swal("Silindi!", "Silme işlemi başarı ile tamamlandı.", "success");
                })
                .fail(( jqXHR, textStatus ) => {
                    alert( "Request failed: " + textStatus );
                });
        });
    }

    $(document).ready(function(){
    var alertMessageExists = !!$('#alertMessages').length;
    if (alertMessageExists) {
        $('#alertMessages').scrollIntoView();
    }
    });
</script>

@if (trim($__env->yieldContent('page-script')))
    @yield('page-script')
@endif

</body>
</html>
