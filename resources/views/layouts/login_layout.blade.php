<!DOCTYPE html>
<html lang="en" dir="" class="h-100">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
    <title>@if(isset($title)) {{ $title }} @else {{ 'User Authentication / Authorization' }} @endif - PalmFlow </title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

  <!-- Font -->
<link href="https://fonts.googleapis.com/css2?family=Spartan:wght@300;400;500;600&amp;display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="{{ asset('css/vendor.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/bootstrap-icons/font/bootstrap-icons.css') }}">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="{{ asset('css/theme.minc619.css?v=1.0') }}">
  
  <style>

<style>
    @font-face {font-family: "GD Sherpa Regular";
  src: url("{{asset('font/0aee6008b82cde991ec28387169bb13e.eot') }}"); /* IE9*/
  src: url("{{asset('font/0aee6008b82cde991ec28387169bb13e.eot?#iefix') }}") format("embedded-opentype"), /* IE6-IE8 */
  url("{{asset('font/0aee6008b82cde991ec28387169bb13e.woff2') }}") format("woff2"), /* chrome、firefox */
  url("{{asset('font/0aee6008b82cde991ec28387169bb13e.woff') }}") format("woff"), /* chrome、firefox */
  url("{{asset('font/0aee6008b82cde991ec28387169bb13e.ttf') }}") format("truetype"), /* chrome、firefox、opera、Safari, Android, iOS 4.2+*/
  url("{{asset('font/0aee6008b82cde991ec28387169bb13e.svg#GD Sherpa Regular') }}") format("svg"); /* iOS 4.1- */
}


body{
font-family:'GD Sherpa Regular','Spartan','Brandon Grotesque' !important;	color:#000;font-weight:400;
}

.shrink_form_control{
	height:30px !important;
}


</style>
</head>
<body class="d-flex align-items-center min-h-100">
  <!-- ========== HEADER ========== -->
  <header id="header" class="navbar navbar-expand navbar-light navbar-absolute-top">
    <div class="container-fluid">
      <nav class="navbar-nav-wrap">
        <!-- White Logo -->
        <a class="navbar-brand d-none d-lg-flex" href="{{ route('index') }}" aria-label="PalmFlow">
         <!-- <img class="navbar-brand-logo" src="{{ asset('img/floxpool_white_logo.png') }}" alt="Logo">-->
        </a>
        <!-- End White Logo -->

        <!-- Default Logo -->
        <a class="navbar-brand d-flex d-lg-none" href="{{ route('index') }}" aria-label="PalmFlow">
         <!-- <img class="navbar-brand-logo" src="{{ asset('img/floxpool_white_logo.png') }}" alt="Logo">-->
        </a>
        <!-- End Default Logo -->

        <div class="ms-auto">
          <a class="link link-sm link-secondary" href="{{ route('index') }}">
            <i class="bi-chevron-left small ms-1"></i> Go to main
          </a>
        </div>
      </nav>
    </div>
  </header>
  <!-- ========== END HEADER ========== -->
	
	       @yield('content')

  <!-- JS Implementing Plugins -->
  <script src="{{ asset('js/vendor.min.js')}}"></script>

  <!-- JS Front -->
  <script src="{{ asset('js/theme.min.js') }}"></script>

  <!-- JS Plugins Init. -->
  <script>
    (function() {
      // INITIALIZATION OF BOOTSTRAP VALIDATION
      // =======================================================
      HSBsValidation.init('.js-validate', {
        onSubmit: data => {
          data.event.preventDefault()
          alert('Submited')
        }
      })


      // INITIALIZATION OF TOGGLE PASSWORD
      // =======================================================
      new HSTogglePassword('.js-toggle-password')
    })()
  </script>
</body>
</html>
