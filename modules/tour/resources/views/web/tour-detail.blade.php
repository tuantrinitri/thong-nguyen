@extends('web::layouts.home')
@section('page_content')
    <main id="main">
        <!-- main tour information -->
        <section class="container-fluid trip-info">
            <div class="same-height two-columns row">
                <div class="height col-md-6">
                    <!-- top image slideshow -->
                    <div id="tour-slide">
                        <div class="slide">
                            <div class="bg-stretch">
                                <img src="{{ asset($tour['image_tour']) }}" alt="image descriprion" height="1104"
                                    width="966" />
                            </div>
                        </div>

                    </div>
                </div>
                <div class="height col-md-6 text-col">
                    <div class="holder">
                        <h1 class="small-size">{{ $tour['title'] }}</h1>
                        {{-- <div class="price"> <strong>VNĐ {{ $tour['price'] }}</strong></div> --}}
                        <div class="description">
                            <p>
                                {{ $tour['description'] }}
                            </p>
                        </div>
                        <ul class="reviews-info">
                            <li>
                                <div class="info-left">
                                    <strong class="title">Mã tour</strong>

                                </div>
                                <div class="info-right">
                                    <div class="star-rating">
                                        <p>{{ $tour['tour_code'] }}</p>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="info-left">
                                    <strong class="title">Ngày đi</strong>
                                    <span class="value">Giá</span>
                                </div>
                                <div class="info-right">
                                    <p>{{ $tour['date_go'] }}</p>
                                    <span class="value">{{ $tour['price'] }} đ</span>
                                </div>
                            </li>
                            <li>
                                <div class="info-left">
                                    <strong class="title">Nơi đi</strong>
                                </div>
                                <div class="info-right">
                                    <p>{{ $tour['leave_from'] }}</p>
                                    <span class="value"></span>
                                </div>
                            </li>
                            <li>
                                <div class="info-left">
                                    <strong class="title">Tổng số ngày</strong>

                                </div>
                                <div class="info-right">
                                    <span class="value">{{ $tour['total_date'] }}</span>
                                </div>
                            </li>
                        </ul>
                        <div class="btn-holder">
                            {{-- dan den trang lien he --}}
                            <a href="{{ route('web.tour.booking', $tour['id']) }}" class="btn btn-lg btn-info">Đặt
                                ngay</a>

                        </div>

                    </div>
                </div>
            </div>
        </section>
        <div class="tab-container">
            <nav class="nav-wrap" id="sticky-tab">
                <div class="container">
                    <!-- nav tabs -->
                    <ul class="nav nav-tabs text-center" role="tablist">

                        <li role="presentation">
                            <a href="#tab01" aria-controls="tab01" role="tab" data-toggle="tab">Chương Trình Tour</a>
                        </li>
                        <li role="presentation">
                            <a href="#tab03" aria-controls="tab03" role="tab" data-toggle="tab">Lưu ý</a>
                        </li>


                    </ul>
                </div>
            </nav>
            <!-- tab panes -->
            <div class="container tab-content trip-detail">
                <!-- overview tab content -->
                <div role="tabpanel" class="tab-pane active" id="tab01">
                    <div class="row">
                        <ol class="detail-accordion">
                            {!! $tour->calendarTour['content'] !!}
                        </ol>

                    </div>
                </div>
                <!-- accomodation tab content -->
                <div role="tabpanel" class="tab-pane" id="tab03">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="detail">
                                <h5> Lưu ý: </h5>
                                <p>

                                    - Hành trình có thể thay đổi thứ tự điểm đến tùy vào điều kiện thực tế. <br>
                                    - Lịch trình tham quan (tắm biển, ngắm hoa, trải nghiệm,...) rất dễ bị ảnh hưởng bởi
                                    thời tiết. Đây là trường hợp bất khả kháng mong Quý khách hiểu và thông cảm. <br>
                                    - Khách Sạn có thể ở xa trung tâm thành phố vào các mùa Cao Điểm. <br>
                                </p>
                                <h5>Giá tour bao gồm:</h5>
                                <p>
                                    - Xe tham quan (15, 25, 35, 45 chỗ tùy theo số lượng khách) theo chương trình.<br>
                                    - Khách sạn 4 sao theo tiêu chuẩn 2 khách/phòng hoặc 3 khách/phòng<br>
                                    - Vé tham quan theo chương trình<br>
                                    - Hướng dẫn viên tiếng Việt nối tuyến<br>
                                    - Bảo hiểm du lịch với mức bồi thường cao nhất 120.000.000đ/vụ<br>
                                    - Nón Vietravel + Nước suối + Khăn lạnh<br>
                                    - Thuế VAT.<br>
                                </p>
                                <h5>Giá tour không bao gồm:</h5>
                                <p>
                                    - Vé máy bay.<br>
                                    - Chi phí cá nhân: ăn uống ngoài chương trình, giặt ủi, chi phí hủy đổi hành trình và
                                    nâng hạng chuyến bay, hành lý quá cước, phụ thu phòng đơn,…<br>
                                    - Chi phí tham quan ngoài chương trình.<br>

                                <h5>Giá dành cho trẻ em</h5><br>
                                <p>- Trẻ em dưới 5 tuổi: không thu phí dịch vụ, bố mẹ tự lo cho bé và thanh toán các chi
                                    phí phát sinh (đối với các dịch vụ tính phí theo chiều cao…). Hai người lớn chỉ được kèm
                                    1 trẻ em dưới 5 tuổi, trẻ em thứ 2 sẽ đóng phí theo quy định dành cho độ tuổi từ 5 đến
                                    dưới 12 tuổi và phụ thu phòng đơn. Vé máy bay, tàu hỏa, phương tiện vận chuyển công cộng
                                    mua vé theo quy định của các đơn vị vận chuyển (nếu có)<br>
                                    - Trẻ em từ 5 tuổi đến dưới 12 tuổi: 50% giá tour người lớn đối với tuyến xe, 75% giá
                                    tour người lớn đối với tuyến có vé máy bay (không có chế độ giường riêng). Hai người lớn
                                    chỉ được kèm 1 trẻ em từ 5 - dưới 12 tuổi, trẻ em thứ hai trở lên phải mua 1 suất giường
                                    đơn.<br>
                                    Giá dành cho trẻ em có thể sẽ thay đổi vào thời điểm Quý khách xác nhận tham gia hành
                                    trình tour (*).<br>
                                    - Trẻ em từ 12 tuổi trở lên: mua một vé như người lớn.<br>
                                </p>

                                <h5>Điều kiện thanh toán:</h5>
                                - Khi đăng ký đặt cọc 50% số tiền tour<br>
                                - Số tiền còn lại thanh toán hết trước ngày khởi hành 7-10 ngày (áp dụng tour ngày
                                thường), trước ngày khởi hành 20-25 ngày (áp dụng tour lễ tết)<br>

                                <h5>Các điều kiện khi đăng ký tour:</h5>
                                <p>
                                    - Đối với Khách Quốc tịch Việt Nam: Khi đi tour Trẻ em từ 14 tuổi trở lên và người lớn
                                    cần đem theo CMND/Passport (Hộ chiếu) bản chính còn hạn sử dụng, hình ảnh rõ (CMND có
                                    thời hạn sử dụng không quá 15 năm, tính từ ngày cấp)/ Giấy khai sinh bản chính (trẻ em
                                    dưới 14 tuổi), trẻ em trên 14 tuổi bắt buộc phải có CMND hoặc Passport làm thủ tục lên
                                    máy bay.<br>
                                    - Đối với khách Nước ngoài/Việt Kiều: Khi đi tour phải mang theo đầy đủ Passport (Hộ
                                    Chiếu) bản chính còn hạn sử dụng hoặc thẻ xanh kèm theo Visa và giấy tái xuất nhập Việt
                                    Nam làm thủ tục lên máy bay.<br>
                                    - Khi đăng ký tour Quý khách vui lòng mang theo CMND/Passport bản chính hoặc cung cấp
                                    tên chính xác đầy đủ, đúng từng ký tự trên CMND/ Passport (Hộ chiếu)/Giấy khai sinh (trẻ
                                    em dưới 14 tuổi) theo thứ tự: Họ/tên lót/tên. Quý khách khi đăng ký cung cấp tên theo
                                    giấy tờ tùy thân nào, khi đi tour phải mang theo giấy tờ tùy thân đó theo qui định hãng
                                    hàng không<br>
                                    - Trong trường hợp Quý khách cung cấp tên sai, đến trễ giờ bay, vui lòng chịu phí đổi vé
                                    hoặc mua lại vé mới theo quy định của Hãng Hàng Không (nếu chuyến bay còn chỗ).<br>
                                    - Trong trường hợp Quý khách bay hãng hàng không Vietjet và Jetstar, vé không hoàn,
                                    không dời, đổi, huỷ, sai tên mất 100% theo qui định hãng hàng không. Giá vé máy bay trẻ
                                    em bằng 100% người lớn.<br>
                                    - Trong trường hợp Quý khách bay hãng hàng không Vietnam Air. Vé máy bay khuyến mãi
                                    không hoàn, không đổi, hủy, sai tên mất 100% theo qui định hãng hàng không. vé Vietnam
                                    Airlines không bay chặng đi, tự động hủy chặng về. Giá vé máy bay trẻ em bằng 90% vé
                                    người lớn.<br>
                                    - Giá vé, giờ bay có thể thay đổi theo Hãng Hàng Không (Vietnam Airlines, Vietjet,
                                    Jetstar) không thể báo trước.<br>
                                    - Do các chuyến bay phụ thuộc vào các hãng Hàng Không nên trong một số trường hợp giờ
                                    bay có thể thay đổi mà không được báo trước. Tùy vào tình hình thực tế, Chương trình và
                                    điểm tham quan có thể linh động thay đổi thứ tự các điểm phù hợp điều kiện giờ bay và
                                    thời tiết thực tế. Vietravel sẽ không chịu trách nhiệm bảo đảm các điểm tham quan trong
                                    trường hợp:<br>
                                    + Xảy ra thiên tai: bão lụt, hạn hán, động đất, dịch bệnh…<br>
                                    + Sự cố về an ninh: khủng bố, biểu tình<br>
                                    + Sự cố về hàng không: trục trặc kỹ thuật, an ninh, dời, hủy, hoãn chuyến bay.<br>
                                    - Nếu những trường hợp trên xảy ra, Vietravel sẽ xem xét để hoàn trả chi phí không tham
                                    quan cho khách trong điều kiện có thể (sau khi đã trừ lại các dịch vụ đã thực hiện….và
                                    không chịu trách nhiệm bồi thường thêm bất kỳ chi phí nào khác).<br>
                                    - Sau khi Quý khách đã làm thủ tục Hàng Không và nhận thẻ lên máy bay, đề nghị Quý khách
                                    giữ cẩn thận và lưu ý lên máy bay đúng giờ. Vietravel không chịu trách nhiệm trong
                                    trường hợp khách làm mất thẻ lên máy bay và không lên máy bay đúng theo giờ quy định của
                                    Hàng Không.<br>
                                    - Giờ nhận phòng khách sạn: sau 14:00 giờ và trả phòng trước<br>iờ
                                    - Phòng khách sạn/resort có thể xảy ra trường hợp phòng không gần nhau, không cùng tầng,
                                    loại phòng một giường đôi hoặc hai giường đơn không theo yêu cầu, tùy tình hình thực tế
                                    từng khách sạn/Resort.<br>
                                    - Trường hợp quý khách tham gia tour 01 khách, bắt buộc đóng thêm tiền phụ thu phòng đơn
                                    để ở riêng 01 phòng. Trường hợp trong đoàn cũng có khách đi 01 mình, cùng giới tính và
                                    có nhu cầu muốn ghép cùng phòng với quý khách thì Vietravel sẽ hoàn lại tiền phụ thu
                                    phòng đơn cho quý khách.<br>
                                    - Trường hợp quý khách đi nhóm 03 khách, Vietravel sẽ cung cấp 01 phòng dành cho 03
                                    khách là 01 giường lớn 1m6 và 01 giường phụ di động từ 0.8 - 1,2m (extrabed) hoặc 01 nệm
                                    đơn tùy từng khách sạn/Resort. Trong trường quý khách có nhu cầu ở riêng, vui lòng đóng
                                    thêm tiền phụ thu phòng đơn theo qui định<br>
                                    - Thông tin hành lý khi đi tour : Xách tay dưới 7kg/1khách - Kích thước không quá: 56cm
                                    x 36cm x 23 cm, chất lỏng với thể tích không quá 100ml. Ký gửi: 20kg/1khách - Kích thước
                                    không quá: 119cm x 119cm x 81cm. Các vật phẩm không được chấp nhận dưới dạng hành lý ký
                                    gởi hoặc vận chuyển trong hành lý theo qui định hàng không<br>
                                    - Thông tin tập trung : Tại sân bay Tân Sơn Nhất, Ga đi trong nước, trước giờ bay 2
                                    tiếng (áp dụng ngày thường), trước 2 tiếng 30 phút (áp dụng lễ tết), tại cột số 4 Trong
                                    trường hợp bay hãng hàng không Vietjet, tại cột 10 trong trường hợp bay hãng hàng không
                                    Vietnam, Jetstar.<br>
                                    - Quý khách dưới 18 tuổi khi đi tour phải có Bố Mẹ hoặc người thân trên 18 tuổi đi cùng.
                                    Trường hợp đi một mình phải được Bố Mẹ ủy quyền (có xác nhận của chính quyền địa phương)
                                    cho Vietravel<br>
                                    - Khách nữ từ 55 tuổi trở lên và khách nam từ 60 trở lên: nên có người thân dưới 55 tuổi
                                    (đầy đủ sức khỏe) đi cùng. Riêng khách từ 70 tuổi trở lên: Bắt buộc phải có người thân
                                    dưới 55 tuổi (đầy đủ sức khỏe) đi cùng . Vì lý do an toàn Quý khách hạn chế và không
                                    nhận khách từ 80 tuổi trở lên. Khách trên 80 tuổi không có chế độ bảo hiểm.<br>
                                    - Quý khách đang mang thai vui lòng báo cho nhân viên bán tour ngay tại thời điểm đăng
                                    ký. Lưu ý phải có ý kiến của bác sĩ trước khi đi tour. Cam kết tự chịu trách nhiệm về
                                    sức khỏe của mình và thai nhi trong suốt thời gian tham gia chương trình du lịch.<br>
                                    - Đây là chương trình du lịch trọn gói, Vietravel không có trách nhiệm hoàn trả chi phí
                                    chênh lệch cho các khách hàng thuộc diện miễn giảm hoặc đối tượng ưu tiên như trẻ nhỏ,
                                    người lớn tuổi, người có công với cách mạng… Chính sách miễn giảm, ưu tiên (nếu có) chỉ
                                    dành cho khách lẻ của các điểm tham quan.<br>
                                    - Quý khách có nhu cầu cần xuất hóa đơn vui lòng cung cấp thông tin xuất hóa đơn cho
                                    nhân viên bán tour khi ngay khi đăng ký, không nhận xuất hóa đơn sau khi tour đã kết
                                    thúc.<br>
                                    - Quý khách vui lòng tham khảo kỹ các Điều Kiện Bán Vé trước khi đăng ký chuyến du lịch.
                                    Trong trường hợp không trực tiếp đăng ký, nhờ người thân đăng ký hộ vui lòng cập nhật
                                    thông tin từ người đăng ký.<br>
                                </p>

                                <h5> Các điều kiện chuyển và hủy tour</h5>
                                <p>
                                    Lưu ý khi chuyển/huỷ tour:<br>
                                    - Sau khi đóng tiền, nếu Quý khách muốn chuyển/huỷ tour xin vui lòng mang Vé Du Lịch đến
                                    văn phòng đăng ký tour để làm thủ tục chuyển/huỷ tour và chịu mất phí theo quy định của
                                    Vietravel. Không giải quyết các trường hợp liên hệ chuyển/huỷ tour qua điện thoại.<br>
                                </p>

                                Các điều kiện huỷ tour: (đối với ngày thường):<br>
                                - Được chuyển sang các tuyến du lịch khác trước ngày khởi hành 20 ngày: Không mất chi
                                phí.<br>
                                - Nếu hủy hoặc chuyển sang các chuyến du lịch khác ngay sau khi đăng ký từ 15-19 ngày
                                trước ngày khởi hành: Chi phí hủy tour: 50% tiền cọc tour.<br>
                                - Nếu hủy hoặc chuyển sang các chuyến du lịch khác từ 12-14 ngày trước ngày khởi hành:
                                Chi phí hủy tour: 100% tiền cọc tour.<br>
                                - Nếu hủy chuyến du lịch trong vòng từ 08-11 ngày trước ngày khởi hành: Chi phí hủy
                                tour: 50% trên giá tour du lịch.<br>
                                - Nếu hủy chuyến du lịch trong vòng từ 05-07 ngày trước ngày khởi hành: Chi phí hủy
                                tour: 70% trên giá tour du lịch.<br>
                                - Nếu hủy chuyến du lịch trong vòng từ 02-04 ngày trước ngày khởi hành: Chi phí hủy
                                tour: 90% trên giá vé du lịch.<br>
                                - Nếu hủy chuyến du lịch trong vòng 1 ngày trước ngày khởi hành : Chi phí hủy tour: 100%
                                trên giá vé du lịch.<br>

                                Các điều kiện huỷ tour: (đối với ngày lễ, Tết. Áp dụng cho các tour có thời gian diễn ra
                                rơi vào một trong các ngày Lễ, Tết theo qui định)<br>
                                - Được chuyển sang các tuyến du lịch khác trước ngày khởi hành 30 ngày: Không mất chi
                                phí.<br>
                                - Nếu hủy hoặc chuyển sang các chuyến du lịch khác ngay sau khi đăng ký từ 25-29 ngày
                                trước ngày khởi hành: Chi phí hủy tour: 50% tiền cọc tour.<br>
                                - Nếu hủy hoặc chuyển sang các chuyến du lịch khác từ 20-24 ngày trước ngày khởi hành:
                                Chi phí hủy tour: 100% tiền cọc tour.<br>
                                - Nếu hủy chuyến du lịch trong vòng từ 17-19 ngày trước ngày khởi hành: Chi phí hủy
                                tour: 50% trên giá tour du lịch.<br>
                                - Nếu hủy chuyến du lịch trong vòng từ 08-16 ngày trước ngày khởi hành: Chi phí hủy
                                tour: 70% trên giá tour du lịch.<br>
                                - Nếu hủy chuyến du lịch trong vòng từ 02-07 ngày trước ngày khởi hành: Chi phí hủy
                                tour: 90% trên giá vé du lịch.<br>
                                - Nếu hủy chuyến du lịch trong vòng 1 ngày trước ngày khởi hành : Chi phí hủy tour: 100%
                                trên giá vé du lịch.

                                Thời gian hủy chuyến du lịch được tính cho ngày làm việc, không tính thứ 7, Chủ Nhật và
                                các ngày Lễ, Tết.<br>


                                </p>

                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <aside class="recent-block recent-list recent-wide-thumbnail">
                <div class="container">
                    <h2 class="text-center text-uppercase">Tour tương tự</h2>
                    <div class="row">
                        @foreach ($tours as $item)
                            <article class="col-sm-6 col-md-3 article">
                                <div class="thumbnail">
                                    <h3 class="no-space">
                                        <a href="{{ route('web.tour.detail', $item['id']) }}">{{ $item['title'] }}</a>
                                    </h3>
                                    <strong class="info-title">Nha Trang</strong>
                                    <div class="img-wrap">
                                        <img src="{{ asset($tour['image_tour']) }}" height="210" width="250"
                                            alt="image description" />
                                    </div>
                                    <footer>
                                        <div class="sub-info">
                                            {{ $item['total_date'] }}
                                        </div>
                                        <ul class="ico-list">
                                            <li class="pop-opener">
                                                <a href="{{ route('web.tour.detail', $item['id']) }}">
                                                    <span class="icon-hiking"></span>

                                                </a>
                                            </li>
                                            <li class="pop-opener">
                                                <a href="{{ route('web.tour.detail', $item['id']) }}">
                                                    <span class="icon-mountain"></span>

                                                </a>
                                            </li>
                                            <li class="pop-opener">
                                                <a href="{{ route('web.tour.detail', $item['id']) }}">
                                                    <span class="icon-level5"></span>

                                                </a>
                                            </li>
                                        </ul>
                                    </footer>
                                </div>
                            </article>

                        @endforeach

                    </div>
                </div>
            </aside>
    </main>
@endsection
