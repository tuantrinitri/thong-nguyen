@extends('web::layouts.home')
@section('page_content')
    <section class="banner banner-inner parallax" data-stellar-background-ratio="0.5" id="blog-fullwidth">
        <div class="banner-text">
            <div class="center-text">
                <div class="container">
                    <h1>Cẩm Nang Du Lịch</h1>
                    <strong class="subtitle"></strong>
                    <!-- breadcrumb -->
                    <nav class="breadcrumbs">
                        <ul>
                            <li><a href="#">TRANG CHỦ</a></li>
                            <li><span>CẨM NANG DU LỊCH</span></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- main container -->
    <main id="main">
        <div class="common-spacing blog-full-width">
            <div class="container">
                <div id="two-columns">
                    <div id="content">
                        <div class="blog-holder">
                            <!-- blog list -->
                            <div class="blog-list">
                                <article class="article blog-article">
                                    <div class="img-wrap">
                                        <a href="#"><img src="{{ asset('assets/web/img/blog/img-01.jpg') }}" height="480"
                                                width="870" alt="image description"></a>
                                    </div>
                                    <div class="description">
                                        <header class="heading">
                                            <h3><a href="{{ route('web.post') }}">Có trải nghiệm thú vị nào nên thử trong
                                                    tháng 5?</a></h3>
                                            <time class="info-day" datetime="2011-01-12">12/05/2021</time>
                                        </header>
                                        <p>Ngắm ruộng bậc thang mùa nước đổ, đi bộ giữa biển và đi bộ dưới đáy biển khám phá
                                            đại dương xanh, check-in hồ Tà Pạ ngày</p>
                                        <footer class="meta">
                                            
                                            <div class="rate-info">
                                                Đăng bởi<a href="#"> Vy Trần</a>
                                            </div>

                                        </footer>
                                        <div class="link-view">
                                            <a href="{{ route('web.post') }}">Xem Thêm</a>
                                        </div>
                                    </div>
                                </article>
                                <article class="article blog-article">
                                    <div class="img-wrap">
                                        <a href="#"><img src="{{ asset('assets/web/img/blog/img-02.jpg') }}" height="480"
                                                width="870" alt="image description"></a>
                                    </div>
                                    <div class="description">
                                        <header class="heading">
                                            <h3><a href="{{ route('web.post') }}">Du lịch Kon Tum khám phá những điều thú vị về nhà Rông</a></h3>
                                            <time class="info-day" datetime="2011-01-12">07/05/2021</time>
                                        </header>
                                        <p>Được coi là biểu tượng văn hóa của cộng đồng các dân tộc ở Tây Nguyên, nhà Rông thể hiện giá trị vật chất và tinh thần trong đời sống đồng bào nơi đây. Tuổi trẻ hãy một lần đi du lịch Kon Tum để khám phá những điều thú vị về ngôi nhà độc đáo này…</p>
                                        <footer class="meta">
                                            
                                            <div class="rate-info">
                                                Đăng bởi<a href="#"> Khánh Lê</a>
                                            </div>

                                        </footer>
                                        <div class="link-view">
                                            <a href="{{ route('web.post') }}">Xem Thêm</a>
                                        </div>
                                    </div>
                                </article>
                                <article class="article blog-article">
                                    <div class="img-wrap">
                                        <a href="#"><img src="{{ asset('assets/web/img/blog/img-03.jpg') }}" height="480"
                                                width="870" alt="image description"></a>
                                    </div>
                                    <div class="description">
                                        <header class="heading">
                                            <h3><a href="{{ route('web.post') }}">4 điều tuyệt vời nên làm khi du lịch Mũi Né, Phan Thiết</a></h3>
                                            <time class="info-day" datetime="2011-01-12">06/05/2021</time>
                                        </header>
                                        <p>Du lịch Mũi Né sở hữu rất nhiều khung cảnh đẹp được thiên nhiên ban tặng, hòa cùng cảnh quan tuyệt vời đấy bạn đừng quên…</p>
                                        <footer class="meta">
                                            
                                            <div class="rate-info">
                                                Đăng bởi<a href="#"> Tuyết Minh</a>
                                            </div>

                                        </footer>
                                        <div class="link-view">
                                            <a href="{{ route('web.post') }}">Xem Thêm</a>
                                        </div>
                                    </div>
                                </article>
                                <article class="article blog-article">
                                    <div class="img-wrap">
                                        <a href="#"><img src="{{ asset('assets/web/img/blog/img-04.jpg') }}" height="480"
                                                width="870" alt="image description"></a>
                                    </div>
                                    <div class="description">
                                        <header class="heading">
                                            <h3><a href="{{ route('web.post') }}">Hè về miền Tây tận hưởng trái cây ngọt lành tại vườn</a></h3>
                                            <time class="info-day" datetime="2011-01-12">28/04/2021</time>
                                        </header>
                                        <p>Có thể nói, chưa nơi đâu trên mảnh đất hình chữ S lại được mẹ thiên nhiên ưu ái nhiều như sông nước miền Tây. Nhờ phù sa chảy nặng, nơi đây có rất nhiều vườn cây trái sum suê đủ loại. Du lịch hè lúc trái cây miền Tây vào mùa hội, bạn sẽ được tận…</p>
                                        <footer class="meta">
                                           
                                            <div class="rate-info">
                                                Đăng bởi<a href="#"> Tuấn Trần</a>
                                            </div>

                                        </footer>
                                        <div class="link-view">
                                            <a href="{{ route('web.post') }}">Xem Thêm</a>
                                        </div>
                                    </div>
                                </article>
                                <article class="article blog-article">
                                    <div class="img-wrap">
                                        <a href="#"><img src="{{ asset('assets/web/img/blog/img-05.jpg') }}" height="480"
                                                width="870" alt="image description"></a>
                                    </div>
                                    <div class="description">
                                        <header class="heading">
                                            <h3><a href="{{ route('web.post') }}">Du lịch Mũi Né, Phan Thiết khám phá những bãi biển đẹp</a></h3>
                                            <time class="info-day" datetime="2011-01-12">23/04/2021</time>
                                        </header>
                                        <p>Dọc chiều dài vùng đất Phan Thiết là những bãi biển xanh thơ mộng. Du lịch Mũi Né – Phan Thiết trên những con đường rợp…</p>
                                        <footer class="meta">
                                           
                                            <div class="rate-info">
                                                Đăng bởi<a href="#"> Công Phượng</a>
                                            </div>

                                        </footer>
                                        <div class="link-view">
                                            <a href="{{ route('web.post') }}">Xem Thêm</a>
                                        </div>
                                    </div>
                                </article>

                            </div>
                        </div>
                        <!-- pagination wrap -->
                        <nav class="pagination-wrap bg-gray">
                            <div class="btn-prev">
                                <a href="#" aria-label="Previous">
                                    <span class="icon-angle-right"></span>
                                </a>
                            </div>
                            <ul class="pagination">
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li ><a href="#">4</a></li>
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
    </main>
    </div>
    </main>
@endsection
