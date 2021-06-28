@extends('web::layouts.home')
@section('page_content')
    <!-- main banner -->
    <section class="banner banner-inner parallax" data-stellar-background-ratio="0.5" id="gridview-sidebar">
        <div class="banner-text">
            <div class="center-text">
                <div class="container">
                    <h1>Tour Trong Nước</h1>
                    <strong class="subtitle">Danh sách các tour nổi bật</strong>
                    <!-- breadcrumb -->
                    <nav class="breadcrumbs">
                        <ul>
                            <li><a href="#">TRANG CHỦ</a></li>
                            <li><a href="#">DU LỊCH</a></li>
                            <li><span>TRONG NƯỚC</span></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- main container -->
    <main id="main">
        <!-- content with sidebar -->
        <div class="bg-gray content-with-sidebar grid-view-sidebar">
            <div class="container">
                <div id="two-columns" class="row">
                    <!-- sidebar -->
                    <aside id="sidebar" class="col-md-4 col-lg-3 sidebar sidebar-list">
                        <div class="sidebar-holder">
                            <header class="heading">
                                <h3>BỘ LỌC</h3>
                            </header>
                            <div class="accordion">
                                <div class="accordion-group">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" href="#collapse1" aria-expanded="true"
                                                aria-controls="collapse1">CÁC ĐỊA DANH</a>
                                        </h4>
                                    </div>
                                    <div id="collapse1" class="panel-collapse collapse in" role="tabpanel">
                                        <div class="panel-body">
                                            <ul class="side-list region-list hovered-list">
                                                <li>
                                                    <a href="#">
                                                        <span class="ico-holder">
                                                            <span class="icon-asia"></span>
                                                        </span>
                                                        <span class="text">Nha Trang</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="ico-holder">
                                                            <span class="icon-arctic"></span>
                                                        </span>
                                                        <span class="text">Đà Lạt</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="ico-holder">
                                                            <span class="icon-middle-east"></span>
                                                        </span>
                                                        <span class="text">Cần Thơ</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="ico-holder">
                                                            <span class="icon-africa"></span>
                                                        </span>
                                                        <span class="text">Hà Nội</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="ico-holder">
                                                            <span class="icon-europe"></span>
                                                        </span>
                                                        <span class="text">Huế </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="ico-holder">
                                                            <span class="icon-north-america"></span>
                                                        </span>
                                                        <span class="text">Đà Nẵng</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="accordion-group">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" href="#collapse2" aria-expanded="true"
                                                aria-controls="collapse2">Activity type</a>
                                        </h4>
                                    </div>
                                    <div id="collapse2" class="panel-collapse collapse in" role="tabpanel">
                                        <div class="panel-body">
                                            <ul class="side-list horizontal-list hovered-list">
                                                <li>
                                                    <a href="#">
                                                        <span class="icon-hiking-camping"></span>
                                                        <span class="popup"> Hiking </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="icon-wildlife"></span>
                                                        <span class="popup"> Wildlife </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="icon-boating"></span>
                                                        <span class="popup"> Boating </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="icon-food-wine"></span>
                                                        <span class="popup"> Food &amp; Wine </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="icon-mountain-biking"></span>
                                                        <span class="popup"> Mountain Biking </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="icon-scuba-diving"></span>
                                                        <span class="popup"> Scuba Diving </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="icon-peak"></span>
                                                        <span class="popup"> Peak </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="icon-bungee"></span>
                                                        <span class="popup"> Bungee </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="icon-family"></span>
                                                        <span class="popup"> Family </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="icon-budget"></span>
                                                        <span class="popup"> Budget </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="icon-culture"></span>
                                                        <span class="popup"> Culture </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="icon-diamond"></span>
                                                        <span class="popup"> Luxury </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> --}}
                                {{-- <div class="accordion-group">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" href="#collapse3" aria-expanded="true"
                                                aria-controls="collapse3">Landscape</a>
                                        </h4>
                                    </div>
                                    <div id="collapse3" class="panel-collapse collapse in" role="tabpanel">
                                        <div class="panel-body">
                                            <ul class="side-list horizontal-list hovered-list">
                                                <li>
                                                    <a href="#">
                                                        <span class="icon-beach"></span>
                                                        <span class="popup"> beach </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="icon-jungle"></span>
                                                        <span class="popup"> jungle </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="icon-desert"></span>
                                                        <span class="popup"> desert </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="icon-mountain"></span>
                                                        <span class="popup"> mountain </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="icon-rural"></span>
                                                        <span class="popup"> rural </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="icon-urban"></span>
                                                        <span class="popup"> urban </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="icon-snow-ice"></span>
                                                        <span class="popup"> snow ice </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="icon-water-sea"></span>
                                                        <span class="popup"> water </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> --}}
                                {{-- <div class="accordion-group">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" href="#collapse4" aria-expanded="true"
                                                aria-controls="collapse4">Activity level</a>
                                        </h4>
                                    </div>
                                    <div id="collapse4" class="panel-collapse collapse in" role="tabpanel">
                                        <div class="panel-body">
                                            <ul class="side-list horizontal-list hovered-list">
                                                <li>
                                                    <a href="#">
                                                        <span class="icon-level1"></span>
                                                        <span class="popup"> Level 1 </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="icon-level2"></span>
                                                        <span class="popup"> Level 2 </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="icon-level3"></span>
                                                        <span class="popup"> Level 3 </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="icon-level4"></span>
                                                        <span class="popup"> Level 4 </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="icon-level5"></span>
                                                        <span class="popup"> Level 5 </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="icon-level6"></span>
                                                        <span class="popup"> Level 6 </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="icon-level7"></span>
                                                        <span class="popup"> Level 7 </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="icon-level8"></span>
                                                        <span class="popup"> Level 8 </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> --}}
                                {{-- <div class="accordion-group">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" href="#collapse5" aria-expanded="true"
                                                aria-controls="collapse5">Price range</a>
                                        </h4>
                                    </div>
                                    <div id="collapse5" class="panel-collapse collapse in" role="tabpanel">
                                        <div class="panel-body">
                                            <div id="slider-range"></div>
                                            <input type="text" id="amount" readonly class="price-input" />
                                            <div id="ammount" class="price-input"></div>
                                        </div>
                                    </div>
                                </div> --}}
                                {{-- <div class="accordion-group">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" href="#collapse6" aria-expanded="true"
                                                aria-controls="collapse6">community poll</a>
                                        </h4>
                                    </div>
                                    <div id="collapse6" class="panel-collapse collapse in" role="tabpanel">
                                        <div class="panel-body">
                                            <strong class="title">What shoes do your prefer on hiking
                                                trips?</strong>
                                            <ul class="side-list check-list">
                                                <li>
                                                    <label for="check1" class="custom-checkbox">
                                                        <input id="check1" type="checkbox" />
                                                        <span class="check-input"></span>
                                                        <span class="check-label">Hiking Boots</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="check2" class="custom-checkbox">
                                                        <input id="check2" type="checkbox" />
                                                        <span class="check-input"></span>
                                                        <span class="check-label">Hiking Boots</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="check3" class="custom-checkbox">
                                                        <input id="check3" type="checkbox" />
                                                        <span class="check-input"></span>
                                                        <span class="check-label">Hiking Boots</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="check4" class="custom-checkbox">
                                                        <input id="check4" type="checkbox" />
                                                        <span class="check-input"></span>
                                                        <span class="check-label">Hiking Boots</span>
                                                    </label>
                                                </li>
                                            </ul>
                                            <strong class="sub-link"><a href="#">CAST YOUR VOTE</a></strong>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </aside>
                    <div id="content" class="col-md-8 col-lg-9">
                        <div class="filter-option filter-box">
                            {{-- <strong class="result-info">179 TRIPS MATCHES YOUR SEARCH</strong> --}}
                            <div class="layout-holder">
                                <div class="layout-action">
                                    <a href="#" class="link link-list"><span class="icon-list"></span></a>
                                    <a href="#" class="link link-grid active"><span class="icon-grid"></span></a>
                                </div>
                                <div class="select-holder">
                                    <div class="select-col">
                                        <select class="filter-select sort-select">
                                            <option value="sort">SẮP XẾP</option>
                                            <option value="sort">GIÁ</option>
                                            <option value="sort">GẦN ĐÂY</option>
                                            <option value="sort">PHỔ BIẾN</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-holder content-sub-holder">
                            <div class="row db-3-col">
                                <article class="col-md-6 col-lg-4 article has-hover-s1 thumb-full">
                                    <div class="thumbnail">
                                        <div class="img-wrap">
                                            <img src="{{asset('assets/web/img/listing/img-19.jpg')}}" height="228" width="350"
                                                alt="image description" />
                                        </div>
                                        <h3 class="small-space">
                                            <a href="{{ route('web.tourdetail') }}">Nha Trang - Phú Yên - Quy Nhơn</a>
                                        </h3>
                                        <span class="info"></span>
                                      
                                        <p>
                                            Biển Đại Lãnh: uốn cong hình lưỡi liềm được ví như thiên đường biển nhiệt đới với bãi cát mịn trải dài hòa cùng nước biển trong vắt nhìn rõ tận đáy. 
                                        </p>
                                        <a href="tour-detail.html" class="btn btn-default">xem thêm</a>
                                        <footer>
                                            <span class="price">Giá<span>2,990,000đ</span></span>
                                        </footer>
                                    </div>  
                                </article>
                                <article class="col-md-6 col-lg-4 article has-hover-s1 thumb-full">
                                    <div class="thumbnail">
                                        <div class="img-wrap">
                                            <img src="{{asset('assets/web/img/listing/img-20.jpg')}}" height="228" width="350"
                                                alt="image description" />
                                        </div>
                                        <h3 class="small-space">
                                            <a href="tour-detail.html">TP.HCM - Phan Thiết - Nha Trang - TP.HCM</a>
                                        </h3>
                                        <span class="info"></span>
                                        
                                        <p>
                                            háp Chàm Poklong Garai: đây là một công trình kiến trúc độc đáo xây dựng vào khoảng cuối thế kỷ 13 đầu thế kỷ 14...
                                        </p>
                                        <a href="tour-detail.html" class="btn btn-default">xem thêm</a>
                                        <footer>
                                           
                                            <span class="price">Giá <span>2,590,000đ</span></span>
                                        </footer>
                                    </div>
                                </article>
                                <article class="col-md-6 col-lg-4 article has-hover-s1 thumb-full">
                                    <div class="thumbnail">
                                        <div class="img-wrap">
                                            <img src="{{asset('assets/web/img/listing/img-21.jpg')}}" height="228" width="350"
                                                alt="image description" />
                                        </div>
                                        <h3 class="small-space">
                                            <a href="tour-detail.html">Nha Trang: Bùn khoáng Iresort</a>
                                        </h3>
                                        <span class="info"></span>
                                       
                                        <p>
                                           Tháp Bà Ponagar: công trình tiêu biểu cho nghệ thuật kiến trúc và điêu khắc tín ngưỡng tôn giáo bậc nhất của dân tộc Chăm tại Nha Trang.
                                        </p>
                                        <a href="tour-detail.html" class="btn btn-default">xem thêm</a>
                                        <footer>
                                           
                                            <span class="price">Giá <span>2,590,000đ</span></span>
                                        </footer>
                                    </div>
                                </article>
                                <article class="col-md-6 col-lg-4 article has-hover-s1 thumb-full">
                                    <div class="thumbnail">
                                        <div class="img-wrap">
                                            <img src="{{asset('assets/web/img/listing/img-22.jpg')}}" height="228" width="350"
                                                alt="image description" />
                                        </div>
                                        <h3 class="small-space">
                                            <a href="tour-detail.html">Nha Trang: Biển Nhũ Tiên</a>
                                        </h3>
                                        <span class="info"></span>
                                        
                                        <p>
                                           Làng Yến Mai Sinh: tham quan vách yến nhân tạo lớn nhất Việt Nam, tìm hiểu quy trình lấy yến ở độ cao cheo leo hiểm...
                                        </p>
                                        <a href="tour-detail.html" class="btn btn-default">xem thêm</a>
                                        <footer>
                                            
                                            <span class="price">Giá <span>2,590,000đ</span></span>
                                        </footer>
                                    </div>
                                </article>
                                <article class="col-md-6 col-lg-4 article has-hover-s1 thumb-full">
                                    <div class="thumbnail">
                                        <div class="img-wrap">
                                            <img src="{{asset('assets/web/img/listing/img-23.jpg')}}" height="228" width="350"
                                                alt="image description" />
                                        </div>
                                        <h3 class="small-space">
                                            <a href="tour-detail.html">Nha Trang - Thiên đường biển đảo</a>
                                        </h3>
                                        <span class="info"></span>
                                        
                                        <p>
                                            Đoàn làm thủ tục lên đảo. Tại đây Quý khách tự do đắm mình vào làn biển trong xanh với bãi cát trải dài. 
                                        </p>
                                        <a href="tour-detail.html" class="btn btn-default">xem thêm</a>
                                        <footer>
                                           
                                            <span class="price">Giá <span>2,590,000đ</span></span>
                                        </footer>
                                    </div>
                                </article>
                                <article class="col-md-6 col-lg-4 article has-hover-s1 thumb-full">
                                    <div class="thumbnail">
                                        <div class="img-wrap">
                                            <img src="{{asset('assets/web/img/listing/img-24.jpg')}}" height="228" width="350"
                                                alt="image description" />
                                        </div>
                                        <h3 class="small-space">
                                            <a href="tour-detail.html">Nha Trang: Con Sẻ Tre</a>
                                        </h3>
                                        <span class="info"></span>
                                        
                                        <p>
                                            Bãi Tranh: Tại Bãi Tranh, Quý khách tự do nghỉ ngơi, thư giãn, tắm biển hoặc tham gia các trò chơi thể thao dưới nước (chi phí tự túc) Hòn Mun
                                        </p>
                                        <a href="tour-detail.html" class="btn btn-default">xem thêm</a>
                                        <footer>
                                            
                                            <span class="price">Giá <span>2,590,000đ</span></span>
                                        </footer>
                                    </div>
                                </article>
                                <article class="col-md-6 col-lg-4 article has-hover-s1 thumb-full">
                                    <div class="thumbnail">
                                        <div class="img-wrap">
                                            <img src="{{asset('assets/web/img/listing/img-25.jpg')}}" height="228" width="350"
                                                alt="image description" />
                                        </div>
                                        <h3 class="small-space">
                                            <a href="tour-detail.html">Nha Trang - Trải Nghiệm Golf</a>
                                        </h3>
                                        <span class="info"></span>
                                       
                                        <p>
                                            Không giống với bất cứ nơi nào, An Lam Retreats Ninh Van Bay mang đến cho du khách những giây phút “sống chậm” hiếm hoi giữa nhịp đời tất bật,
                                        </p>
                                        <a href="tour-detail.html" class="btn btn-default">xem thêm</a>
                                        <footer>
                                           
                                            <span class="price">Giá <span>2,590,000đ</span></span>
                                        </footer>
                                    </div>
                                </article>
                                <article class="col-md-6 col-lg-4 article has-hover-s1 thumb-full">
                                    <div class="thumbnail">
                                        <div class="img-wrap">
                                            <img src="{{asset('assets/web/img/listing/img-26.jpg')}}" height="228" width="350"
                                                alt="image description" />
                                        </div>
                                        <h3 class="small-space">
                                            <a href="tour-detail.html">Nha Trang - Hòn Lao Đảo Khỉ</a>
                                        </h3>
                                        <span class="info"></span>
                                       
                                        <p>
                                            TNha Trang với khí hậu ôn hòa, biển xanh trong quanh năm cùng những điểm vui chơi bậc nhất và không ngừng đổi mới hằng ngày luôn thu 
                                        </p>
                                        <a href="tour-detail.html" class="btn btn-default">xem thêm</a>
                                        <footer>
                                           
                                            <span class="price">Giá <span>2,590,000đ</span></span>
                                        </footer>
                                    </div>
                                </article>
                                <article class="col-md-6 col-lg-4 article has-hover-s1 thumb-full">
                                    <div class="thumbnail">
                                        <div class="img-wrap">
                                            <img src="{{asset('assets/web/img/listing/img-27.jpg')}}" height="228" width="350"
                                                alt="image description" />
                                        </div>
                                        <h3 class="small-space">
                                            <a href="tour-detail.html">Nha Trang - Nghỉ dưỡng Vinpearl</a>
                                        </h3>
                                        <span class="info"></span>
                                        
                                        <p>
                                           VinWonders Nha Trang: Cánh cửa mở ra thiên đường vui chơi giải trí – nơi giấc mơ thơ ấu trở thành hiện thực.
                                        </p>
                                        <a href="tour-detail.html" class="btn btn-default">xem thêm</a>
                                        <footer>
                                            
                                            <span class="price">Giá <span>2,590,000đ</span></span>
                                        </footer>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <!-- pagination wrap -->
                        <nav class="pagination-wrap">
                            <div class="btn-prev">
                                <a href="#" aria-label="Previous">
                                    <span class="icon-angle-right"></span>
                                </a>
                            </div>
                            <ul class="pagination">
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="active"><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li>...</li>
                                <li><a href="#">7</a></li>
                            </ul>
                            <div class="btn-next">
                                <a href="#" aria-label="Previous">
                                    <span class="icon-angle-right"></span>
                                </a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- recent block -->
        <aside class="recent-block recent-list recent-wide-thumbnail">
            <div class="container">
                <h2 class="text-center text-uppercase">ĐÃ XEM GẦN ĐÂY</h2>
                <div class="row">
                    <article class="col-sm-6 col-md-3 article">
                        <div class="thumbnail">
                            <h3 class="no-space">
                                <a href="#">Nghỉ dưỡng Vinpearl</a>
                            </h3>
                            <strong class="info-title">Nha Trang</strong>
                            <div class="img-wrap">
                                <img src="{{asset('assets/web/img/listing/img-31.jpg')}}" height="210" width="250" alt="image description" />
                            </div>
                            <footer>
                                <div class="sub-info">
                                    <span>5 Ngày</span>
                                    {{-- <span>$299</span> --}}
                                </div>
                                <ul class="ico-list">
                                    <li class="pop-opener">
                                        <a href="#">
                                            <span class="icon-hiking"></span>
                                            <span class="popup"> Hiking </span>
                                        </a>
                                    </li>
                                    <li class="pop-opener">
                                        <a href="#">
                                            <span class="icon-mountain"></span>
                                            <span class="popup"> Mountain </span>
                                        </a>
                                    </li>
                                    <li class="pop-opener">
                                        <a href="#">
                                            <span class="icon-level5"></span>
                                            <span class="popup"> Level 5 </span>
                                        </a>
                                    </li>
                                </ul>
                            </footer>
                        </div>
                    </article>
                    <article class="col-sm-6 col-md-3 article">
                        <div class="thumbnail">
                            <h3 class="no-space">
                                <a href="#">Thiền Tâm Nơi Yên Tử</a>
                            </h3>
                            <strong class="info-title">Đà Nẵng</strong>
                            <div class="img-wrap">
                                <img src="{{asset('assets/web/img/listing/img-32.jpg')}}" height="210" width="250" alt="image description" />
                            </div>
                            <footer>
                                <div class="sub-info">
                                    <span>2 Ngày</span>
                                    
                                </div>
                                <ul class="ico-list">
                                    <li class="pop-opener">
                                        <a href="#">
                                            <span class="icon-hiking"></span>
                                            <span class="popup"> Hiking </span>
                                        </a>
                                    </li>
                                    <li class="pop-opener">
                                        <a href="#">
                                            <span class="icon-mountain"></span>
                                            <span class="popup"> Mountain </span>
                                        </a>
                                    </li>
                                    <li class="pop-opener">
                                        <a href="#">
                                            <span class="icon-level5"></span>
                                            <span class="popup"> Level 5 </span>
                                        </a>
                                    </li>
                                </ul>
                            </footer>
                        </div>
                    </article>
                    <article class="col-sm-6 col-md-3 article">
                        <div class="thumbnail">
                            <h3 class="no-space">
                                <a href="#">Nơi gặp gỡ đất trời</a>
                            </h3>
                            <strong class="info-title">Spa</strong>
                            <div class="img-wrap">
                                <img src="{{asset('assets/web/img/listing/img-33.jpg')}}" height="210" width="250" alt="image description" />
                            </div>
                            <footer>
                                <div class="sub-info">
                                    <span>4 ngày</span>
                                  
                                </div>
                                <ul class="ico-list">
                                    <li class="pop-opener">
                                        <a href="#">
                                            <span class="icon-hiking"></span>
                                            <span class="popup"> Hiking </span>
                                        </a>
                                    </li>
                                    <li class="pop-opener">
                                        <a href="#">
                                            <span class="icon-mountain"></span>
                                            <span class="popup"> Mountain </span>
                                        </a>
                                    </li>
                                    <li class="pop-opener">
                                        <a href="#">
                                            <span class="icon-level5"></span>
                                            <span class="popup"> Level 5 </span>
                                        </a>
                                    </li>
                                </ul>
                            </footer>
                        </div>
                    </article>
                    <article class="col-sm-6 col-md-3 article">
                        <div class="thumbnail">
                            <h3 class="no-space">
                                <a href="#">Eo Gió - Kỳ Co</a>
                            </h3>
                            <strong class="info-title">Quy Nhơn</strong>
                            <div class="img-wrap">
                                <img src="{{asset('assets/web/img/listing/img-34.jpg')}}" height="210" width="250" alt="image description" />
                            </div>
                            <footer>
                                <div class="sub-info">
                                    <span>3 Days</span>
                                    
                                </div>
                                <ul class="ico-list">
                                    <li class="pop-opener">
                                        <a href="#">
                                            <span class="icon-hiking"></span>
                                            <span class="popup"> Hiking </span>
                                        </a>
                                    </li>
                                    <li class="pop-opener">
                                        <a href="#">
                                            <span class="icon-mountain"></span>
                                            <span class="popup"> Mountain </span>
                                        </a>
                                    </li>
                                    <li class="pop-opener">
                                        <a href="#">
                                            <span class="icon-level5"></span>
                                            <span class="popup"> Level 5 </span>
                                        </a>
                                    </li>
                                </ul>
                            </footer>
                        </div>
                    </article>
                </div>
            </div>
        </aside>
    </main>
@endsection
