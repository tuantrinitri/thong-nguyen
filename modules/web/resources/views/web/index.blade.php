@extends('web::layouts.home')
@section('custom_css')
@endsection
@section('page_content')
    <div class="banner banner-home">
        <!-- revolution slider starts -->
        @widgetGroup('SLIDE_HOME')
    </div>
    <div class="feature-block">
        {{-- <div class="holder">
            <ul>
                <li>
                    <a href="#">
                        <span class="ico">
                            <span class="icon-wildlife"></span>
                        </span>
                        <span class="info">TOUR XUYÊN VIỆT</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="ico">
                            <span class="icon-peak-climbing"></span>
                        </span>
                        <span class="info">TOUR TRONG NƯỚC</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="ico">
                            <span class="icon-mountain-biking"></span>
                        </span>
                        <span class="info">TOUR NƯỚC NGOÀI</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('web.search') }}">
                        <span class="ico">
                            <span class="icon-scuba-diving"></span>
                        </span>
                        <span class="info">TÌM KIẾM</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="ico">
                            <span class="icon-hunting"></span>
                        </span>
                        <span class="info">DỊCH VỤ</span>
                    </a>
                </li>

            </ul>
        </div> --}}
    </div>
    </div>
    <!-- main container -->
    <main id="main">
        <section class="content-block bg-white">
            <div class="container">
                <header class="content-heading">
                    <h2 class="main-heading">DU LỊCH TRONG NƯỚC</h2>
                    <span class="main-subtitle">Các địa điểm nổi bật để bạn sẵn sàng du lịch trong nước</span>
                    <div class="seperator"></div>
                </header>
                <div class="adventure-holder gallery-home-holder">
                    <div class="row">
                        <div class="col-md-6 img-block">
                            <!-- gallery list -->
                            <ul class="gallery-list gallery-with-icon">
                                <li>
                                    <a href="#" class="thumbnail">
                                        <img src="{{ asset('assets/web/img/gallery/img-01.jpg') }}" height="165"
                                            width="170" alt="image description" />
                                        <span class="hover icon-bird"></span>
                                        <span class="info">Nha Trang</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="thumbnail">
                                        <img src="{{ asset('assets/web/img/gallery/img-02.jpg') }}" height="165"
                                            width="170" alt="image description" />
                                        <span class="hover icon-peak"></span>
                                        <span class="info">Đà Lạt </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="thumbnail">
                                        <img src="{{ asset('assets/web/img/gallery/img-03.jpg') }}" height="165"
                                            width="170" alt="image description" />
                                        <span class="hover icon-water"></span>
                                        <span class="info">Cần Thơ</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="thumbnail">
                                        <img src="{{ asset('assets/web/img/gallery/img-04.jpg') }}" height="165"
                                            width="170" alt="image description" />
                                        <span class="hover icon-asia"></span>
                                        <span class="info">Hà Nội</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="thumbnail">
                                        <img src="{{ asset('assets/web/img/gallery/img-05.jpg') }}" height="165"
                                            width="170" alt="image description" />
                                        <span class="hover icon-arctic"></span>
                                        <span class="info">Phú Quốc</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="thumbnail">
                                        <img src="{{ asset('assets/web/img/gallery/img-06.jpg') }}" height="165"
                                            width="170" alt="image description" />
                                        <span class="hover icon-africa"></span>
                                        <span class="info">Huế</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="thumbnail">
                                        <img src="{{ asset('assets/web/img/gallery/img-07.jpg') }}" height="165"
                                            width="170" alt="image description" />
                                        <span class="hover icon-plant"></span>
                                        <span class="info">Đà Nẵng</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="thumbnail">
                                        <img src="{{ asset('assets/web/img/gallery/img-08.jpg') }}" height="165"
                                            width="170" alt="image description" />
                                        <span class="hover icon-wildlife"></span>
                                        <span class="info">Hạ Long</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="thumbnail">
                                        <img src="{{ asset('assets/web/img/gallery/img-09.jpg') }}" height="165"
                                            width="170" alt="image description" />
                                        <span class="hover icon-diamond"></span>
                                        <span class="info">Phan Thiết</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 text-block">
                            <div class="centered">
                                <h2 class="intro-heading">Du Lịch Trong Nước</h2>
                                <p class="intro">
                                    Du lịch trong nước luôn là lựa chọn tuyệt vời. Đường bờ biển dài hơn 3260km, những khu
                                    bảo tồn thiên nhiên tuyệt vời, những thành phố nhộn nhịp, những di tích lịch sử hào
                                    hùng, nền văn hóa độc đáo và hấp dẫn, cùng một danh sách dài những món ăn ngon nhất thế
                                    giới, Việt Nam có tất cả những điều đó. Với lịch trình dày, khởi hành đúng thời gian cam
                                    kết, Vietravel là công ty lữ hành uy tín nhất hiện nay tại Việt Nam, luôn sẵn sàng phục
                                    vụ du khách mọi lúc, mọi nơi, đảm bảo tính chuyên nghiệp và chất lượng dịch vụ tốt nhất
                                    thị trường

                                </p>
                                {{-- danh sach cac tour --}}
                                <a href="{{ route('web.tour.list') }}"
                                    class="btn btn-info-sub btn-md btn-shadow radius">Xem Thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- special block -->

        <!-- article list holder -->
        <div class="content-block content-spacing">
            <div class="container">
                <header class="content-heading">
                    <h2 class="main-heading">Nha Trang có gì?</h2>
                    <span class="main-subtitle">Khám phá trải nghiệm du lịch nha trang</span>
                    <div class="seperator"></div>
                </header>
                <div class="content-holder">
                    <div class="row db-3-col">
                        <article class="col-sm-6 col-md-4 article has-hover-s3">
                            <div class="img-wrap">
                                <a href="#">
                                    <img src="{{ asset('assets/web/img/listing/img-01.jpg') }}" height="215" width="370"
                                        alt="image description" />
                                </a>
                                <div class="hover-article">

                                    <div class="icons">
                                        <a href="#"><span class="icon-heart"></span></a>
                                        <a href="#"><span class="icon-reply"></span></a>
                                    </div>
                                    <div class="info-footer">
                                        {{-- <span class="price">from <span>$2749</span></span> --}}
                                        <a href="#" class="link-more">Xem Thêm</a>
                                    </div>
                                </div>
                            </div>
                            <h3><a href="{{ route('web.tourdetail') }}">Nha Trang - Phú Yên - Quy Nhơn </a>
                            </h3>
                            <p>
                                Biển Đại Lãnh: uốn cong hình lưỡi liềm được ví như thiên đường biển nhiệt đới với bãi cát
                                mịn trải dài hòa cùng nước biển trong vắt nhìn rõ tận đáy. Du khách thỏa thích tắm biển và
                                chiêm ngưỡng cảnh núi non hùng vĩ xung quanh.
                            </p>
                        </article>
                        <article class="col-sm-6 col-md-4 article has-hover-s3">
                            <div class="img-wrap">
                                <a href="#">
                                    <img src="{{ asset('assets/web/img/listing/img-02.jpg') }}" height="215" width="370"
                                        alt="image description" />
                                </a>
                                <div class="hover-article">

                                    <div class="icons">
                                        <a href="#"><span class="icon-heart"></span></a>
                                        <a href="#"><span class="icon-reply"></span></a>
                                    </div>
                                    <div class="info-footer">
                                        {{-- <span class="price">from <span>$2749</span></span> --}}
                                        <a href="#" class="link-more">Xem Thêm</a>
                                    </div>
                                </div>
                            </div>
                            <h3><a href="{{ route('web.tourdetail') }}">TP.HCM - Phan Thiết - Nha Trang</a>
                            </h3>
                            <p>
                                Tháp Chàm Poklong Garai: đây là một công trình kiến trúc độc đáo xây dựng vào khoảng cuối
                                thế kỷ 13 đầu thế kỷ 14, được công nhận là di tích kiến trúc nghệ thuật và điêu khắc
                                Chăm.Vườn Nho Ba Mọi: là loại nho đặc sản vùng đất nắng gió Ninh Thuận.
                                Tiếp tục hành trình về với thành phố biển Nha Trang xinh đẹp, đoàn ăn tối và nghỉ đêm tại
                                Nha Trang.
                            </p>
                        </article>

                        <article class="col-sm-6 col-md-4 article has-hover-s3">
                            <div class="img-wrap">
                                <a href="#">
                                    <img src="{{ asset('assets/web/img/listing/img-03.jpg') }}" height="215" width="370"
                                        alt="image description" />
                                </a>

                                <div class="hover-article">

                                    <div class="icons">
                                        <a href="#"><span class="icon-heart"></span></a>
                                        <a href="#"><span class="icon-reply"></span></a>
                                    </div>
                                    <div class="info-footer">
                                        {{-- <span class="price">from <span>$2749</span></span> --}}
                                        <a href="#" class="link-more">Xem Thêm</a>
                                    </div>
                                </div>
                            </div>
                            <h3><a href="#">Nha Trang: Bùn khoáng Iresort- Hành trình khám phá Vịnh Nha Trang trên Du Thuyền
                                    Emperor Sang Trọng

                                </a></h3>
                            <p>
                                Tháp Bà Ponagar: công trình tiêu biểu cho nghệ thuật kiến trúc và điêu khắc tín ngưỡng tôn
                                giáo bậc nhất của dân tộc Chăm tại Nha Trang.

                            </p>
                        </article>
                        <article class="col-sm-6 col-md-4 article has-hover-s3">
                            <div class="img-wrap">
                                <a href="#">
                                    <img src="{{ asset('assets/web/img/listing/img-04.jpg') }}" height="215" width="370"
                                        alt="image description" />
                                </a>

                                <div class="hover-article">

                                    <div class="icons">
                                        <a href="#"><span class="icon-heart"></span></a>
                                        <a href="#"><span class="icon-reply"></span></a>
                                    </div>
                                    <div class="info-footer">
                                        {{-- <span class="price">from <span>$2749</span></span> --}}
                                        <a href="#" class="link-more">Xem Thêm</a>
                                    </div>
                                </div>
                            </div>
                            <h3><a href="#">Nha Trang: Biển Nhũ Tiên - VinWonders - Bùn khoáng Iresort</a></h3>
                            <p>
                                Làng Yến Mai Sinh: tham quan vách yến nhân tạo lớn nhất Việt Nam, tìm hiểu quy trình lấy yến
                                ở độ cao cheo leo hiểm trở và cách thức sơ chế để tạo ra sản phẩm dinh dưỡng cho sức khỏe.
                                Ăn tối tại nhà hàng địa phương. Đoàn nhận phòng, tự do tham quan thành phố về đêm: Thưởng
                                thức hải sản tại Phố Tháp Bà hay những nhà hàng dọc đường Trần Phú và thư giãn với massage
                                chân xua tan mệt mỏi,..

                            </p>
                        </article>
                        <article class="col-sm-6 col-md-4 article has-hover-s3">
                            <div class="img-wrap">
                                <a href="#">
                                    <img src="{{ asset('assets/web/img/listing/img-05.jpg') }}" height="215" width="370"
                                        alt="image description" />
                                </a>

                                <div class="hover-article">

                                    <div class="icons">
                                        <a href="#"><span class="icon-heart"></span></a>
                                        <a href="#"><span class="icon-reply"></span></a>
                                    </div>
                                    <div class="info-footer">
                                        {{-- <span class="price">from <span>$2749</span></span> --}}
                                        <a href="#" class="link-more">Xem Thêm</a>
                                    </div>
                                </div>
                            </div>
                            <h3><a href="#">Nha Trang - Thiên đường biển đảo/a></h3>
                            <p>
                                Đoàn làm thủ tục lên đảo. Tại đây
                                Quý khách tự do đắm mình vào làn biển trong xanh với bãi cát trải dài.
                                Thả mình thư giãn trên những chiếc ghế tắm nắng, chòi lá đặt tại bãi biển.
                                Trải nghiệm các môn thể thao nước như chèo thuyền thúng, thuyền kayak và khám phá các trò
                                chơi vận động Floating Park, Nerf Gun…
                            </p>
                        </article>
                        <article class="col-sm-6 col-md-4 article has-hover-s3">
                            <div class="img-wrap">
                                <a href="#">
                                    <img src="{{ asset('assets/web/img/listing/img-06.jpg') }}" height="215" width="370"
                                        alt="image description" />
                                </a>

                                <div class="hover-article">

                                    <div class="icons">
                                        <a href="#"><span class="icon-heart"></span></a>
                                        <a href="#"><span class="icon-reply"></span></a>
                                    </div>
                                    <div class="info-footer">
                                        {{-- <span class="price">from <span>$2749</span></span> --}}
                                        <a href="#" class="link-more">Xem Thêm</a>
                                    </div>
                                </div>
                            </div>
                            <h3><a href="#">Nha Trang: Con Sẻ Tre - VinWonders - Bùn khoáng Iresort

                                </a></h3>
                            <p>
                                Bãi Tranh: Tại Bãi Tranh, Quý khách tự do nghỉ ngơi, thư giãn, tắm biển hoặc tham gia các
                                trò chơi thể thao dưới nước (chi phí tự túc)
                                Hòn Mun: Quý khách tự do tắm biển, lặn ngắm san hô, khám phá cuộc sống sinh động của đại
                                dương với nhiều màu sắc rực rỡ bằng kính lặn, ống thở. Quý khách tham gia các dịch vụ tại
                                đây như: lặn biển, tàu đáy kính… (chi phí trải nghiệm tự túc).
                                Làng chài: Tham quan bè nổi nuôi hải sản


                            </p>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <!-- couter block -->

        <!-- featured adventure content -->
        <div class="featured-content adventure-holder">
            <div class="container-fluid">
                <div class="row same-height">
                    <div class="col-md-6 image height">
                        <div class="bg-stretch">
                            <img src="{{ asset('assets/web/img/img-01.jpg') }}" height="627" width="960"
                                alt="image description" />
                        </div>
                    </div>
                    <div class="col-md-6 text-block height">
                        <div class="centered">
                            <h2 class="intro-heading">
                                VinWonders Phú Quốc
                            </h2>
                            <p class="intro">
                                Khám phá Vinwonder Phú Quốc, công viên giải trí hiện đại, lớn nhất Việt Nam với hơn 100 trò
                                chơi hấp dẫn và các màn trình diễn đặc sắc
                                Thiên đường công viên nước hàng đầu với 2 đường trượt nước và bể tạo sóng khổng lồ mang đến
                                những trải nghiệm khác biệt
                                Lạc vào thế giới thủy cung huyền ảo với hàng nghìn sinh vật biển phong phú thuộc top 5 thủy
                                cung lớn trên thế giới
                            </p>
                            <a href="#" class="btn btn-primary btn-lg">Xem Thêm</a>
                        </div>
                    </div>
                </div>
                <div class="row same-height">
                    <div class="col-md-6 image height">
                        <div class="bg-stretch">
                            <img src="{{ asset('assets/web/img/img-02.jpg') }}" height="627" width="960"
                                alt="image description" />
                        </div>
                    </div>
                    <div class="col-md-6 text-block height">
                        <div class="centered">
                            <h2 class="intro-heading">
                                LangBiang Đà Lạt
                            </h2>
                            <p class="intro">
                                Chiêm ngưỡng toàn cảnh hùng vĩ từ đỉnh cao nhất thành phố từ đỉnh Radar
                                Vượt qua rừng thông tự nhiên để lên tới đỉnh LangBiang Đà Lạt
                                Nhâm nhi một tách cà phê hay thức uống ngon lành và ngắm cảnh mây trời hũng vĩ
                            </p>
                            <a href="#" class="btn btn-primary btn-lg">Xem Thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- browse block -->

        <!-- article list with boxed style -->
        <section class="content-block article-boxed">
            <div class="container">
                <header class="content-heading">
                    <h2 class="main-heading">TOUR NỔI BẬT </h2>
                    <span class="main-subtitle">Danh sách các tour du lịch nổi bật trong năm 2021</span>
                    <div class="seperator"></div>
                </header>
                <div class="content-holder content-boxed">
                    <div class="row db-3-col">
                        <article class="col-sm-6 col-md-4 article has-hover-s1">
                            <div class="thumbnail">
                                <div class="img-wrap">
                                    <img src="{{ asset('assets/web/img/listing/img-07.jpg') }}" height="228" width="350"
                                        alt="image description" />
                                </div>
                                <h3 class="small-space">
                                    <a href="tour-detail.html">Hạ Long - Thiền Tâm Nơi Yên Tử</a>
                                </h3>
                                <span class="info"></span>
                                {{-- <aside class="meta">
                                    <span class="country">
                                        <span class="icon-world"> </span>12 Countries
                                    </span>
                                    <span class="activity">
                                        <span class="icon-acitivities"> </span>79 Activities
                                    </span>
                                </aside> --}}
                                <p>
                                    Guồng quay công việc và cuộc sống khiến cho Quý khách mất đi sự cân bằng sức khỏe và
                                    tinh thần. Thấu hiểu điều đó, Vietravel mang đến cho Quý khách cùng những người thân yêu
                                    bộ sản phẩm du lịch nghỉ dưỡng kết hợp chăm sóc sức khỏe, tái tạo năng lượng và phục hồi
                                    sự cân bằng thuần khiết.
                                </p>
                                <a href="tour-detail.html" class="btn btn-default">Xem thêm</a>
                                <footer>

                                    <span class="price">Giá <span>11,990,000đ</span></span>
                                </footer>
                            </div>
                        </article>
                        <article class="col-sm-6 col-md-4 article has-hover-s1">
                            <div class="thumbnail">
                                <div class="img-wrap">
                                    <img src="{{ asset('assets/web/img/listing/img-08.jpg') }}" height="228" width="350"
                                        alt="image description" />
                                </div>
                                <h3 class="small-space">
                                    <a href="tour-detail.html">Sapa - Nơi gặp gỡ đất trời</a>
                                </h3>
                                <span class="info"></span>
                                {{-- <aside class="meta">
                                    <span class="country">
                                        <span class="icon-world"> </span>12 Countries
                                    </span>
                                    <span class="activity">
                                        <span class="icon-acitivities"> </span>79 Activities
                                    </span>
                                </aside> --}}
                                <p>
                                    Tham quan Núi Hàm Rồng, Vườn Lan 1,2, Sân ngắm Phansipan,Cổng Trời 1,2, Sân Mây. Qúy
                                    khách có dịp ngắm đỉnh Phansipan cao 3.143m hùng vỹ trên dãy Hoàng Liên và ngắm toàn
                                    cảnh Thị Trấn Sapa từ trên cao.
                                </p>
                                <a href="tour-detail.html" class="btn btn-default">Xem Thêm</a>
                                <footer>

                                    <span class="price">Giá <span>2,490,000đ</span></span>
                                </footer>
                            </div>
                        </article>
                        <article class="col-sm-6 col-md-4 article has-hover-s1">
                            <div class="thumbnail">
                                <div class="img-wrap">
                                    <img src="{{ asset('assets/web/img/listing/img-09.jpg') }}" height="228" width="350"
                                        alt="image description" />
                                </div>
                                <h3 class="small-space">
                                    <a href="#">Quy Nhơn - Hội An - Đà Nẵng - Huế</a>
                                </h3>
                                <span class="info"></span>

                                <p>
                                    Chùa Thiên Ấn, Mộ Huỳnh Thúc Kháng, Sông Trà Khúc tại Quảng Ngãi: một ngôi chùa cổ tọa
                                    lạc trên đỉnh núi Thiên Ấn nhìn xuống sông Trà Khúc hiền hòa. Quý khách tham quan khu
                                    viên mộ, lăng mộ hình tháp, giếng Phật, chuông Thần và ngôi mộ của nhà yêu nước Huỳnh
                                    Thúc Kháng.
                                </p>
                                <a href="tour-detail.html" class="btn btn-default">Xem thêm</a>
                                <footer>
                                    <span class="price">Giá <span>5,990,000đ</span></span>
                                </footer>
                            </div>
                        </article>

                    </div>
                </div>
            </div>
        </section>
        <!-- content block with guide info -->
        <section class="content-block guide-sub guide-add bg-white">
            <div class="container">
                <header class="content-heading">
                    <h2 class="main-heading">Khám phá nhiều hơn nữa</h2>
                    <span class="main-subtitle">Tìm hiểu cách nhận giảm giá cho đơn hàng tiếp theo bằng cách hoàn thành dịch
                        vụ và để lại đánh giá</span>
                    <div class="seperator"></div>
                </header>
                <div class="content-holder">
                    <div class="row">
                        <div class="col-sm-6 col-md-4 img-article">
                            <div class="holder">
                                <div class="img-wrap">
                                    <img src="{{ asset('assets/web/img/listing/img-13.jpg') }}" height="436" width="370"
                                        alt="image description" />
                                    <ul class="social-networks">
                                        <li>
                                            <a href="#"><span class="icon-facebook"></span></a>
                                        </li>
                                        <li>
                                            <a href="#"><span class="icon-twitter"></span></a>
                                        </li>
                                        <li>
                                            <a href="#"><span class="icon-google-plus"></span></a>
                                        </li>
                                        <li>
                                            <a href="#"><span class="icon-linkedin"></span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="caption">
                                    <h3 class="small-space">DU LỊCH AN TOÀN</h3>
                                    <span class="designation">Tiêu Chí DU Lịch AN Toàn</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 img-article">
                            <div class="holder">
                                <div class="img-wrap">
                                    <img src="{{ asset('assets/web/img/listing/img-14.jpg') }}" height="436" width="370"
                                        alt="image description" />
                                    <ul class="social-networks">
                                        <li>
                                            <a href="#"><span class="icon-facebook"></span></a>
                                        </li>
                                        <li>
                                            <a href="#"><span class="icon-twitter"></span></a>
                                        </li>
                                        <li>
                                            <a href="#"><span class="icon-google-plus"></span></a>
                                        </li>
                                        <li>
                                            <a href="#"><span class="icon-linkedin"></span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="caption">
                                    <h3 class="small-space">Nhận credits </h3>
                                    <span class="designation">Sau Khi mời bạn bè</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 img-article">
                            <div class="holder">
                                <div class="img-wrap">
                                    <img src="{{ asset('assets/web/img/listing/img-15.jpg') }}" height="436" width="370"
                                        alt="image description" />
                                    <ul class="social-networks">
                                        <li>
                                            <a href="#"><span class="icon-facebook"></span></a>
                                        </li>
                                        <li>
                                            <a href="#"><span class="icon-twitter"></span></a>
                                        </li>
                                        <li>
                                            <a href="#"><span class="icon-google-plus"></span></a>
                                        </li>
                                        <li>
                                            <a href="#"><span class="icon-linkedin"></span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="caption">
                                    <h3 class="small-space">Xem blog </h3>
                                    <span class="designation">Theo dõi các ý tưởng về xu hướng du lịch</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial block -->
        <div class="testimonial-holder parallax" data-stellar-background-ratio="0.25" id="testimonial-home-page">
            <div class="container">
                <div id="testimonial-home-slide">
                    <div class="slide">
                        <blockquote class="testimonial-quote">
                            <div class="img">
                                <img src="{{ asset('assets/web/img/thumbs/img-03.jpg') }}" height="112" width="112"
                                    alt="image description" />
                            </div>
                            <div class="text">
                                <cite>Viet Trinh</cite>
                                <q>Đến Lang Biang cách đây 4 năm nhưng chỉ đi bộ được 1 phần đường lên đỉnh rồi về lần này
                                    quay lại quyết tâm trải nghiệm lên đỉnh 1 lần, cảnh tương đối ổn, hôm mình đi trời âm u
                                    nên không được đẹp lắm bản thân mình thấy 50k (vé vào cổng), 100k (đi xe lên đỉnh) hơi
                                    mắc, may mà có mua trên entrada cũng vớt vát lại được đôi chút nếu lần đầu đến ĐL thì
                                    nên thử khu này</q>
                            </div>
                        </blockquote>
                    </div>
                    <div class="slide">
                        <blockquote class="testimonial-quote">
                            <div class="img">
                                <img src="{{ asset('assets/web/img/thumbs/img-02.jpg') }}" height="112" width="112"
                                    alt="image description" />
                            </div>
                            <div class="text">
                                <cite>DARREN SPRATT - AUSTRALIA</cite>
                                <q>This is Photoshop's version of Lorem Ipsum. Proin
                                    gravida nibh vel velit auctor aliquet. Aenean
                                    sollicitudin, lorem quis bibendum auctor, nisi elit
                                    consequat ipsum, nec sagittis sem nibh id elit. Duis sed
                                    odio sit amet nibh vulputate cursus a sit amet
                                    mauris.”</q>
                            </div>
                        </blockquote>
                    </div>
                    <div class="slide">
                        <blockquote class="testimonial-quote">
                            <div class="img">
                                <img src="{{ asset('assets/web/img/thumbs/img-03.jpg') }}" height="112" width="112"
                                    alt="image description" />
                            </div>
                            <div class="text">
                                <cite>RIYA YAHIDA - SPAIN</cite>
                                <q>This is Photoshop's version of Lorem Ipsum. Proin
                                    gravida nibh vel velit auctor aliquet. Aenean
                                    sollicitudin, lorem quis bibendum auctor, nisi elit
                                    consequat ipsum, nec sagittis sem nibh id elit. Duis sed
                                    odio sit amet nibh vulputate cursus a sit amet
                                    mauris.”</q>
                            </div>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
