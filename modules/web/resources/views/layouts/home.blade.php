<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
   @include('web::layouts.head_css')
</head>

{{-- <body>
    @include('web::partials.header')
    <main>
        @yield('page_content')
    </main>
    @include('web::partials.footer')
    @include('web::partials.foot_script')
    @yield('custom_js')
</body> --}}

  
<!-- Mirrored from html.waituk.com/entrada/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 May 2021 07:08:12 GMT -->
<head>
    

  <body>
    <div class="preloader" id="pageLoad">
      <div class="holder">
        <div class="coffee_cup"></div>
      </div>
    </div>
    <!-- main wrapper -->
    <div id="wrapper">
      <div class="page-wrapper">
        <!-- main header -->
      @include('web::layouts.header')
        <!-- main index -->
   @yield('page_content')
      </div>
      <!-- main footer -->
     @include('web::layouts.footer')
    </div>
    <!-- scroll to top -->
    <div class="scroll-holder text-center">
      <a href="javascript:" id="scroll-to-top"
        ><i class="icon-arrow-down"></i
      ></a>
    </div>
   
    @include('web::layouts.footer_script')

  </body>

<!-- Mirrored from html.waituk.com/entrada/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 May 2021 07:08:12 GMT -->
</html>


</html>