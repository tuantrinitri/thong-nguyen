@extends('web::layouts.home')
@section('page_content')
    <!-- main banner -->
    <section class="banner banner-inner parallax" data-stellar-background-ratio="0.5" id="gridview-sidebar">
        <div class="banner-text">
            <div class="center-text">
                <div class="container">
                    <h1>Tour Trong Nước</h1>
                    <strong class="subtitle">Danh sách các tour du lịch của Cty Thông Nguyễn</strong>
                    <!-- breadcrumb -->

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
                                            <a role="button" data-toggle="collapse" href="#collapse1" aria-expanded="false"
                                                aria-controls="collapse1">CÁC ĐỊA DANH</a>
                                        </h4>
                                    </div>
                                    <div id="collapse1" class="panel-collapse collapse" aria-expanded="false"
                                        role="tabpanel">
                                        <div class="panel-body">
                                            <ul class="side-list region-list hovered-list">
                                                {{-- lay danh sach tu location --}}
                                                @foreach ($locations as $item)
                                                    <li>
                                                        <a href="#">
                                                            <span class="ico-holder">
                                                                <span class="icon-asia"></span>
                                                            </span>
                                                            <span class="text">{{ $item['title'] }}</span>
                                                        </a>
                                                    </li>
                                                @endforeach
                                                {{-- end --}}

                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </aside>
                    <div id="content" class="col-md-8 col-lg-9">

                        <div class="content-holder content-sub-holder">
                            <div class="row db-3-col">
                                @foreach ($tours as $tour)
                                    <article class="col-md-6 col-lg-4 article has-hover-s1 thumb-full">
                                        <div class="thumbnail">
                                            <div class="img-wrap">
                                                <img src="{{ asset($tour['image_tour']) }}" height="228" width="350"
                                                    alt="{{ $tour['title'] }}" />
                                            </div>
                                            <h3 class="small-space">
                                                <a
                                                    href="{{ route('web.tour.detail', $tour['id']) }}">{{ $tour['title'] }}</a>
                                            </h3>
                                            <span class="info"></span>

                                            <p>
                                                {!! Str::limit($tour['description'], 15) !!}
                                            </p>
                                            <a href="{{ route('web.tour.detail', $tour['id']) }}"
                                                class="btn btn-default">xem thêm</a>
                                            <footer>
                                                <span class="price">Giá<span>{{ $tour['price'] }}</span></span>
                                            </footer>
                                        </div>
                                    </article>
                                @endforeach


                            </div>
                        </div>
                        <!-- pagination wrap -->
                        @if ($tours->links('vendor.pagination.bootstrap-4'))
                            <nav class="pagination-wrap">

                                <div class="cms-paginate float-right mr-3">
                                    {{ $tours->links('vendor.pagination.bootstrap-4') }}
                                </div>

                            </nav>
                        @endif
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
                                <img src="{{ asset('assets/web/img/listing/img-31.jpg') }}" height="210" width="250"
                                    alt="image description" />
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
                                <img src="{{ asset('assets/web/img/listing/img-32.jpg') }}" height="210" width="250"
                                    alt="image description" />
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
                                <img src="{{ asset('assets/web/img/listing/img-33.jpg') }}" height="210" width="250"
                                    alt="image description" />
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
                                <img src="{{ asset('assets/web/img/listing/img-34.jpg') }}" height="210" width="250"
                                    alt="image description" />
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
