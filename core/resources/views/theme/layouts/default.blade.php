<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
        @include('core::theme.partials.head_link')
        @yield('custom_css')
</head>
 <!-- END HEAD -->

 <body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-sidebar-color logo-dark">
    <div class="page-wrapper">
        
        <!-- start header -->
          @include('core::theme.partials.header')
        <!-- end header -->

        <!-- start page container -->
        <div class="page-container">
 			<!-- start sidebar menu -->
 			
        @include('core::theme.partials.sidebar')
            <!-- end sidebar menu --> 
			<!-- start page content -->
 <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Add Room Details</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="">Rooms</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Add Room Details</li>
                            </ol>
                        </div>
                    </div>
                     <div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<div class="card-head">
									<header>Add Room Details</header>
									<button id = "panel-button" 
			                           class = "mdl-button mdl-js-button mdl-button--icon pull-right" 
			                           data-upgraded = ",MaterialButton">
			                           <i class = "material-icons">more_vert</i>
			                        </button>
			                        <ul class = "mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
			                           data-mdl-for = "panel-button">
			                           <li class = "mdl-menu__item"><i class="material-icons">assistant_photo</i>Action</li>
			                           <li class = "mdl-menu__item"><i class="material-icons">print</i>Another action</li>
			                           <li class = "mdl-menu__item"><i class="material-icons">favorite</i>Something else here</li>
			                        </ul>
								</div>
								                @yield('page_content')
							</div>
						</div>
					</div> 
                </div>
            </div>
            {{-- <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Dashboard</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                 
                        {{-- page content here --}}

                    </div>
            </div> --}}

            <!-- end page content -->
            
        </div>
        <!-- end page container -->
        <!-- start footer -->
                    @include('core::theme.partials.footer')
                        @yield('custom_js')
        <!-- end footer -->
    </div>
    <!-- start js include path -->

    <!-- end js include path -->
  </body>
</html>