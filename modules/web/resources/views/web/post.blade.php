@extends('web::layouts.home')
@section('page_content')
    <!-- main banner -->
    <section class="banner banner-inner parallax" data-stellar-background-ratio="0.5" id="blog-single">
        <div class="banner-text">
            <div class="center-text">
                <div class="container">
                    <h2 style="color: white">Có trải nghiệm thú vị nào nên thử trong tháng 5?</h2>
                    <strong class="subtitle">Ngắm ruộng bậc thang mùa nước đổ, đi bộ giữa biển và đi bộ dưới đáy biển khám
                        phá đại dương xanh, check-in hồ Tà Pạ ngày hè là 4 trải nghiệm thú vị bạn nên thử khi tháng 5
                        về.</strong>
                    <!-- breadcrumb -->
                    <nav class="breadcrumbs">
                        <ul>
                            <li><a href="#">TRANG CHỦ</a></li>
                            <li><a href="#">CẨM NANG DU LỊCH</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- main container -->
    <main id="main">
        <div class="content-with-sidebar common-spacing content-left">
            <div class="container">

                <div id="content">
                    <div class="blog-holder no-pagination">
                        <!-- blog single -->
                        <article class="blog-single">

                            <div class="description">
                                <h3 style="font-weight: bold" class="content-main-heading">
                                    Ngắm ruộng Mâm Xôi mùa nước đổ
                                </h3>
                                <div class="img-wrap">
                                    <img src="{{ asset('assets/web/img/blog/img-01.jpg') }}" height="480" width="870"
                                        alt="image description" />
                                </div>
                                <p>
                                    Được đánh giá là thửa ruộng bậc thang đẹp nhất vùng Tây Bắc, đồi Mâm Xôi là một trong
                                    những địa điểm du lịch hấp dẫn nhất của Mù Cang Chải (Yên Bái). Cái tên “Mâm Xôi” được
                                    gọi theo hình dạng độc đáo của những thửa ruộng bậc thang nơi đây. Nhìn từ trên cao, bạn
                                    sẽ thấy một hình tròn đều, nhô cao như mâm xôi đầy.

                                </p>
                                <p>
                                    Ruộng bậc thang quyến rũ nhất vào 2 mùa là mùa nước đổ (từ tháng 5 đến tháng 6), lúc này
                                    những ô ruộng đã đầy ăm ắp nước, long lánh tựa “chiếc gương trời” khổng lồ và từ tháng 9
                                    đến tháng 10 nơi đây lại nhuộm một màu áo mới, vàng óng một góc trời vẽ nên một bức
                                    tranh sơn cước yêu kiều. Thời điểm lý tưởng để ngắm trọn vẹn vẻ đẹp của ruộng “Mâm Xôi”
                                    là vào lúc sáng sớm và buổi chiều tà.
                                </p>

                                <h3 style="font-weight: bold" class="content-main-heading">
                                    Chiêm ngưỡng vẻ đẹp Tà Pạ ngày hè
                                </h3>
                                <div class="img-wrap">
                                    <img src="{{ asset('assets/web/img/blog/img-08.jpg') }}" height="480" width="870"
                                        alt="image description" />
                                </div>
                                <p>
                                    Tà Pạ là một ngọn đồi nhỏ ở An Giang. Đây là một trong những ngọn đồi tạo nên địa danh
                                    mang tên Thất Sơn. Con đường chinh phục Tà Pạ còn khá hoang sơ nhưng dễ đi. Khi lên đến
                                    đỉnh, bạn sẽ được chiêm ngưỡng một hồ nước xanh màu ngọt bích, phảng lặng tựa tấm gương
                                    khổng lồ phản chiếu rõ nét mọi vật xung quanh. Bao bọc hồ là những vách đá thẳng đứng –
                                    địa điểm check-in “sống ảo” rất được giới trẻ yêu thích. Khi ánh bình minh soi rọi, cảnh
                                    sắc Tà Pạ đẹp đến ngỡ ngàng.
                                </p>
                                <p>

                                </p>

                                <h3 style="font-weight: bold" class="content-main-heading">
                                    “Đổi gió” đi bộ dưới đáy biển
                                </h3>
                                <div class="img-wrap">
                                    <img src="{{ asset('assets/web/img/blog/img-07.jpg') }}" height="480" width="870"
                                        alt="image description" />
                                </div>
                                <p>
                                    Seawalker (tạm dịch: đi bộ dưới đáy biển) là loại hình lặn biển khá quen thuộc ở nước
                                    ngoài nhưng với Việt Nam và đặc biệt tại Phú Quốc thì chỉ mới xuất hiện gần đây. Với
                                    trải nghiệm này bạn sẽ được đội một chiếc mũ trong suốt giống như mũ của những phi hành
                                    gia. Nên dù cho bạn không biết bơi cũng không có thể thở bình thường và dạo bộ dưới đáy
                                    biển ở độ sâu 3m-10m, những gì bạn cần làm là chiêm ngưỡng các rạn san hô cùng những chú
                                    cá nhiệt đới cực kỳ dễ thương.
                                </p>
                                <p>

                                </p>

                                <h3 style="font-weight: bold" class="content-main-heading">
                                    Thả đôi chân trần đi bộ giữa biển Nhất Tự Sơn
                                </h3>
                                <div class="img-wrap">
                                    <img src="{{ asset('assets/web/img/blog/img-06.jpg') }}" height="480" width="870"
                                        alt="image description" />
                                </div>
                                <p>
                                    Khi nhắc đến con đường đi bộ giữa biển, chắc hẳn nhiều người sẽ nghĩ ngay đến đảo Điệp
                                    Sơn (Nha Trang) nhưng mấy ai biết được rằng tại Phú Yên cũng có một con đường đi bộ giữa
                                    biển độc đáo không kém.
                                </p>
                                <p>
                                    Khác với con đường nối cụm 2 đảo ở Điệp Sơn, con đường đi bộ giữa biển ở Phú Yên lại nối
                                    từ đất liền ra đảo Nhất Tự Sơn. Mỗi lúc thủy triều xuống, một doi cát nằm chìm dưới làn
                                    nước biển chợt hé lộ. Mực nước ở đây cao nhất chỉ tới đầu gối nên lội nước qua đây khá
                                    dễ dàng. Tuy nhiên, bạn nên chú ý là từ tháng ngày 1 đến 15 âm lịch hàng tháng nước sẽ
                                    rút vào buổi chiều. Và từ 16 âm lịch đến cuối tháng, nước sẽ rút vào buổi sáng.
                                </p>
                                <footer class="meta-article">

                                    <div class="footer-sub">
                                        <div class="rate-info">
                                            Đăng bởi <a href="#"> Vy Trần</a>
                                        </div>

                                    </div>
                                    <ul class="ico-action">
                                        <li>
                                            <a href="#"><span class="icon-share"></span></a>
                                        </li>
                                        <li>
                                            <a href="#"><span class="icon-favs"></span></a>
                                        </li>
                                    </ul>
                                </footer>
                            </div>

                            <!-- comments -->

                            <!-- comment form -->

                        </article>
                    </div>
                </div>

            </div>
        </div>
    </main>
@endsection
