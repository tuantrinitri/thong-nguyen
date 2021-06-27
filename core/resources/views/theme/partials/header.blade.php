 <div class="page-header navbar navbar-fixed-top">
     <div class="page-header-inner ">
         <!-- logo start -->
         <div class="page-logo">
             <a href="index.html">
                 <img alt="" src="assets/img/logo.png">
                 <span class="logo-default">Spice</span> </a>
         </div>
         <!-- logo end -->
         <ul class="nav navbar-nav navbar-left in">
             <li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
         </ul>
         <!-- start mobile menu -->
         <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
             data-target=".navbar-collapse">
             <span></span>
         </a>
         <!-- end mobile menu -->
         <!-- start header menu -->
         <div class="top-menu">
             @if (auth()->user()->hasRole('superadmin'))
                 <ul class="nav navbar-nav pull-right">
                     <li class="dropdown dropdown-user">
                         <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                             data-close-others="true">
                             <i class="fa fa-cogs" aria-hidden="true"></i>
                         </a>
                         <ul class="dropdown-menu dropdown-menu-default animated jello">
                             <li>
                                 <a href="{{ route('core.admin.setting') }}">
                                     <i class="fa fa-cogs"></i>CÀI ĐẶT<br>HỆ THỐNG </a>
                             </li>
                             <li>
                                 <a href="{{ route('core.admin.files') }}">
                                     <i class="fa fa-file-picture-o"></i>QUẢN LÝ<br>FILE
                                 </a>

                             </li>
                             <li>
                                 <a href="{{ route('core.admin.list_module') }}"
                                     class="d-block text-default text-center ripple-dark rounded p-3">
                                     <i class="fa fa-cubes" aria-hidden="true"></i> Quản lý module
                                     {{-- <i class="fa fa-cubes-o"> </i> --}}
                                 </a>
                             </li>
                             <li class="divider"> </li>
                             <li>
                                 <a href="{{ route('core.admin.system_cache') }}"
                                     class="d-block text-default text-center ripple-dark rounded p-3">
                                     <i class="fa fa-magic" aria-hidden="true"></i>
                                     Quản lý bộ nhớ đệm
                                 </a>
                             </li>
                         </ul>
                     </li>

                 </ul>
             @endif
         </div>
     </div>
 </div>
