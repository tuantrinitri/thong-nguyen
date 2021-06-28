@extends('web::layouts.home')
@section('page_content')
    <!-- main container -->
    <main id="main">
        <!-- main tour information -->
        <section class="container-fluid trip-info">
            <div class="same-height two-columns row">
                <div class="height col-md-6">
                    <!-- top image slideshow -->
                    <div id="tour-slide">
                        <div class="slide">
                            <div class="bg-stretch">
                                <img src="{{ asset('assets/web/img/generic/img-17.jpg') }}" alt="image descriprion"
                                    height="1104" width="966" />
                            </div>
                        </div>
                        <div class="slide">
                            <div class="bg-stretch">
                                <img src="{{ asset('assets/web/img/generic/img-07.jpg') }}" alt="image descriprion"
                                    height="1104" width="966" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="height col-md-6 text-col">
                    <div class="holder">
                        <h1 class="small-size">Nha Trang - Phú Yên - Quy Nhơn</h1>
                        <div class="price"><strong></strong></div>
                        <div class="description">
                            <p>
                            </p>
                        </div>
                        <ul class="reviews-info">
                            <li>
                                <div class="info-left">
                                    <strong class="title">Mã tour</strong>

                                </div>
                                <div class="info-right">
                                    <div class="star-rating">
                                        <p>M52-021-010721</p>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="info-left">
                                    <strong class="title">Ngày đi</strong>
                                    <span class="value">Giá</span>
                                </div>
                                <div class="info-right">
                                    <p>01/07/2021</p>
                                    <span class="value">2,990,000 đ</span>
                                </div>
                            </li>
                            <li>
                                <div class="info-left">
                                    <strong class="title">nơi đi</strong>
                                    <span class="value">tổng số chỗ</span>
                                </div>
                                <div class="info-right">
                                    <p>Hồ Chí Minh</p>
                                    <span class="value">9/10</span>
                                </div>
                            </li>
                            <li>
                                <div class="info-left">
                                    <strong class="title">tổng số ngày</strong>
                                    <span class="value"></span>
                                </div>
                                <div class="info-right">

                                    <span class="value">2 ngày</span>
                                </div>
                            </li>
                        </ul>
                        <div class="btn-holder">
                            <a href="{{ route('web.booking') }}" class="btn btn-lg btn-info">ĐẶT NGAY</a>
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
                            <a href="#tab02" aria-controls="tab02" role="tab" data-toggle="tab">Chương Trình Tour</a>
                        </li>
                        <li role="presentation">
                            <a href="#tab03" aria-controls="tab03" role="tab" data-toggle="tab">Lưu ý</a>
                        </li>
                        <li role="presentation">
                            <a href="#tab04" aria-controls="tab04" role="tab" data-toggle="tab">ý Kiến</a>
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
                                <li>
                                    <a href="#">
                                        <strong class="title">Ngày 1</strong>
                                        <span>01-07-2021</span>
                                    </a>
                                    <div class="slide">
                                        <div class="slide-holder">
                                            <p>
                                                Quý khách tập trung tại Vietravel Nha Trang (100 Quang Trung, P. Lộc Thọ,
                                                Tp.Nha Trang), đoàn khởi hành tham quan:
                                                - Biển Đại Lãnh: uốn cong hình lưỡi liềm được ví như thiên đường biển nhiệt
                                                đới với bãi cát mịn trải dài hòa cùng nước biển trong vắt nhìn rõ tận đáy.
                                                Du khách thỏa thích tắm biển và chiêm ngưỡng cảnh núi non hùng vĩ xung
                                                quanh.

                                                Đoàn khởi hành đi Phú Yên, tham quan:
                                                - Đầm Ô Loan: Quý khách chiêm ngưỡng cảnh đẹp Đầm Ô Loan trông như đôi cánh
                                                Phượng Hoàng dang rộng giữa mây trời và núi ngàn.
                                                - Gành Đá Đĩa: những khối đá hình lăng trụ được xếp chồng lên nhau một cách
                                                ngay ngắn tựa như có bàn tay của vị thần nào đó sắp đặt, thắng cảnh độc nhất
                                                vô nhị của tỉnh Phú Yên và Quốc Gia.
                                                - Nhà Thờ Mằng Lăng: một trong những nhà thờ cổ xưa nhất ở Việt Nam. Nơi đây
                                                đặc biệt lưu giữ cuốn sách in chữ quốc ngữ đầu tiên của nước ta.
                                                - Quảng Đức Xưa: nơi đây đã chinh phục du khách bằng sự lưu giữ văn hóa độc
                                                đáo - dòng gốm tráng men sò huyết gợi nhớ về một thời làng Quảng Đức quanh
                                                năm “đỏ lửa” với sự kết hợp giữa vườn cây và nhà cổ tạo cảm giác nhẹ nhàng,
                                                thư giãn để từ đó cảm nhận sâu sắc hơn về dòng chảy văn hóa của một vùng đất
                                                trù phú.
                                                Nghỉ đêm tại Thành phố Quy Nhơn. Tối quý khách có thể tự do dạo phố biển,
                                                thưởng thức hải sản hoặc check in các quán café đẹp dọc biển như S- Blue
                                                hoặc Surf Bar…

                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <strong class="title">Ngày 2</strong>
                                        <span>02-07-2021</span>
                                    </a>
                                    <div class="slide">
                                        <div class="slide-holder">
                                            <p>
                                                Sau khi ăn sáng và trả phòng, xe đưa đoàn tham quan:
                                                - Chụp hình với tượng Phật chùa Ông Núi - Một trong những tượng Phật ngồi
                                                lớn nhất Đông Nam Á.
                                                - Eo Gió: từ trên cao nhìn xuống, Eo Gió như một bức tranh sơn thủy hữu tình
                                                với trời, mây, nước… biển núi ôm nhau vừa gợi cảm, vừa hoang sơ đầy quyến
                                                rũ.

                                                Mua sắm các đặc sản Quy Nhơn tại shop Phương Nghi như Rượu Bàu Đá, Nem Chợ
                                                Huyện, Bánh Hồng, Tré Bình Định, Bánh Ít Lá Gai…
                                                Sau bữa trưa, đoàn khởi hành về Nha Trang, kết thúc chương trình du lịch.

                                            </p>
                                        </div>
                                    </div>
                 
                            </ol>
                        
                    </div>
                </div>
                <!-- itinerary tab content -->
                <div role="tabpanel" class="tab-pane" id="tab02">
                    <div class="row">
                        <div class="col-md-12">
                            <ol class="detail-accordion">
                                <li>
                                    <a href="#">
                                        <strong class="title">Ngày 1</strong>
                                        <span>01-07-2021</span>
                                    </a>
                                    <div class="slide">
                                        <div class="slide-holder">
                                            <p>
                                                Quý khách tập trung tại Vietravel Nha Trang (100 Quang Trung, P. Lộc Thọ,
                                                Tp.Nha Trang), đoàn khởi hành tham quan:
                                                - Biển Đại Lãnh: uốn cong hình lưỡi liềm được ví như thiên đường biển nhiệt
                                                đới với bãi cát mịn trải dài hòa cùng nước biển trong vắt nhìn rõ tận đáy.
                                                Du khách thỏa thích tắm biển và chiêm ngưỡng cảnh núi non hùng vĩ xung
                                                quanh.

                                                Đoàn khởi hành đi Phú Yên, tham quan:
                                                - Đầm Ô Loan: Quý khách chiêm ngưỡng cảnh đẹp Đầm Ô Loan trông như đôi cánh
                                                Phượng Hoàng dang rộng giữa mây trời và núi ngàn.
                                                - Gành Đá Đĩa: những khối đá hình lăng trụ được xếp chồng lên nhau một cách
                                                ngay ngắn tựa như có bàn tay của vị thần nào đó sắp đặt, thắng cảnh độc nhất
                                                vô nhị của tỉnh Phú Yên và Quốc Gia.
                                                - Nhà Thờ Mằng Lăng: một trong những nhà thờ cổ xưa nhất ở Việt Nam. Nơi đây
                                                đặc biệt lưu giữ cuốn sách in chữ quốc ngữ đầu tiên của nước ta.
                                                - Quảng Đức Xưa: nơi đây đã chinh phục du khách bằng sự lưu giữ văn hóa độc
                                                đáo - dòng gốm tráng men sò huyết gợi nhớ về một thời làng Quảng Đức quanh
                                                năm “đỏ lửa” với sự kết hợp giữa vườn cây và nhà cổ tạo cảm giác nhẹ nhàng,
                                                thư giãn để từ đó cảm nhận sâu sắc hơn về dòng chảy văn hóa của một vùng đất
                                                trù phú.
                                                Nghỉ đêm tại Thành phố Quy Nhơn. Tối quý khách có thể tự do dạo phố biển,
                                                thưởng thức hải sản hoặc check in các quán café đẹp dọc biển như S- Blue
                                                hoặc Surf Bar…

                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <strong class="title">Ngày 2</strong>
                                        <span>02-07-2021</span>
                                    </a>
                                    <div class="slide">
                                        <div class="slide-holder">
                                            <p>
                                                Sau khi ăn sáng và trả phòng, xe đưa đoàn tham quan:
                                                - Chụp hình với tượng Phật chùa Ông Núi - Một trong những tượng Phật ngồi
                                                lớn nhất Đông Nam Á.
                                                - Eo Gió: từ trên cao nhìn xuống, Eo Gió như một bức tranh sơn thủy hữu tình
                                                với trời, mây, nước… biển núi ôm nhau vừa gợi cảm, vừa hoang sơ đầy quyến
                                                rũ.

                                                Mua sắm các đặc sản Quy Nhơn tại shop Phương Nghi như Rượu Bàu Đá, Nem Chợ
                                                Huyện, Bánh Hồng, Tré Bình Định, Bánh Ít Lá Gai…
                                                Sau bữa trưa, đoàn khởi hành về Nha Trang, kết thúc chương trình du lịch.

                                            </p>
                                        </div>
                                    </div>
                 
                            </ol>
                        </div>
                        {{-- <div class="col-md-6">
                    <article class="img-article article-light">
                      <div class="img-wrap">
                        <img
                          src="img/generic/img-08.jpg"
                          height="319"
                          width="570"
                          alt="image description"
                        />
                      </div>
                      <div class="text-block">
                        <h3><a href="#">Member taking a short break</a></h3>
                        <p>
                          Consider packing your bag with folloing daily
                          essentials.
                        </p>
                      </div>
                    </article>
                    <article class="img-article article-light">
                      <div class="img-wrap">
                        <img
                          src="img/generic/img-09.jpg"
                          height="319"
                          width="570"
                          alt="image description"
                        />
                      </div>
                      <div class="text-block">
                        <h3>
                          <a href="#">Couple enjoying the spectacular view</a>
                        </h3>
                        <p>
                          Consider packing your bag with folloing daily
                          essentials.
                        </p>
                      </div>
                    </article>
                  </div> --}}
                    </div>
                </div>
                <!-- accomodation tab content -->
                <div role="tabpanel" class="tab-pane" id="tab03">
                    <div class="row">
                        <div class="col-md-12">
                            {{-- <strong class="header-box"
                      >Hotels, Tea Houses and Lodges</strong
                    > --}}
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
                <!-- faq and review tab content -->
                <div role="tabpanel" class="tab-pane" id="tab04">
                    <strong class="header-box">Ý KIẾN KHÁCH HÀNG (0)</strong>
                            <div class="detail">
                                <div class="frame-feedback">
                                    <div class="title">
                                        {{-- <img src="/Content/ThemeHe/img/i-feedback.png" alt="feedback">&nbsp;&nbsp;Gửi ý kiến --}}
                                    </div>
                                    <div class="form-feedback">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 col-xs-12 mg-bot15">
                                                <input class="form-control input-md" id="UserName" name="UserName"
                                                    placeholder="Họ tên(*)" required="required" type="text" value="">
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-12 mg-bot15">
                                                <input class="form-control input-md" id="Email" name="Email"
                                                    placeholder="Email(*)" required="required" type="email" value="">
                                            </div>
                                        </div>
                                        <div class="row mg-bot15">
                                            <div class="col-xs-12">
                                                <textarea class="form-control" cols="20" id="Content" name="Content"
                                                    placeholder="Ý kiến của bạn(*)" required="required" rows="5"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 text-center mg-bot15">
                                                <button type="submit" class="btn btn-md btn-detail"
                                                    id="btn_submitmainform">Gửi đi&nbsp;&nbsp;</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="tab-wrapper">
                                <div role="tabpanel" class="tab-pane active" id="innerTab1">
                                    <div class="detail">
                                        <p>
                                            This is Photoshop's version of Lorem Ipsum. Proin
                                            gravida nibh vel velit auctor aliquet. Aenean
                                            sollicitudin, lorem quis bibendum auctor, nisi elit
                                            consequat ipsum, nec sagittis sem nibh id elit.
                                        </p>
                                        <p>
                                            Duis sed odio sit amet nibh vulputate cursus a sit
                                            amet mauris. Morbi accumsan ipsum velit. Nam nec
                                            tellus a odio tincidunt auctor a ornare odio.
                                        </p>
                                        <p>
                                            Sed non mauris vitae erat consequat auctor eu in
                                            elit. Class aptent taciti sociosqu ad litora
                                            torquent per conubia nostra, per inceptos himenaeos.
                                            Mauris in erat justo.
                                        </p>
                                        <p>
                                            Nullam ac urna eu felis dapibus condimentum sit amet
                                            a augue. Sed non neque elit. Sed ut imperdiet nisi.
                                        </p>
                                        <p>
                                            Proin condimentum fermentum nunc. Etiam pharetra,
                                            erat sed fermentum feugiat, velit mauris egestas
                                            quam.
                                        </p>
                                        <p>
                                            Ulins aliquam massa nisl quis neque. Proin
                                            condimentum fermentum nunc. Etiam pharetra, erat sed
                                            fermentum feugiat, velit mauris egestas quam, ut
                                            aliquam massa nisl quis neque.
                                        </p>
                                        <p>
                                            Proin condimentum fermentum nunc. Etiam pharetra,
                                            erat sed fermentum feugiat, velit mauris egestas
                                            quam.
                                        </p>
                                        <p>
                                            Ulins aliquam massa nisl quis neque. Proin
                                            condimentum fermentum nunc. Etiam pharetra, erat sed
                                            fermentum feugiat, velit mauris egestas quam, ut
                                            aliquam massa nisl quis neque.
                                        </p>
                                        <p>Suspendisse gin orci enim.</p>
                                        <ul class="img-list">
                                            <li>
                                                <img src="img/generic/img-12.jpg" height="52" width="101"
                                                    alt="image description" />
                                            </li>
                                            <li>
                                                <img src="img/generic/img-13.jpg" height="97" width="114"
                                                    alt="image description" />
                                            </li>
                                            <li>
                                                <img src="img/generic/img-14.jpg" height="104" width="124"
                                                    alt="image description" />
                                            </li>
                                        </ul>
                                        <div class="reviews-slot v-middle">
                                            <div class="thumb">
                                                <a href="#"><img src="img/thumbs/img-04.jpg" height="50" width="50"
                                                        alt="image description" /></a>
                                            </div>
                                            <div class="text">
                                                <strong class="name"><a href="#">Jessica Lambert - Customer
                                                        Relations</a></strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="innerTab2">
                                    <div class="detail">
                                        <p>
                                            This is Photoshop's version of Lorem Ipsum. Proin
                                            gravida nibh vel velit auctor aliquet. Aenean
                                            sollicitudin, lorem quis bibendum auctor, nisi elit
                                            consequat ipsum, nec sagittis sem nibh id elit.
                                        </p>
                                        <p>
                                            Duis sed odio sit amet nibh vulputate cursus a sit
                                            amet mauris. Morbi accumsan ipsum velit. Nam nec
                                            tellus a odio tincidunt auctor a ornare odio.
                                        </p>
                                        <p>
                                            Sed non mauris vitae erat consequat auctor eu in
                                            elit. Class aptent taciti sociosqu ad litora
                                            torquent per conubia nostra, per inceptos himenaeos.
                                            Mauris in erat justo.
                                        </p>
                                        <p>
                                            Nullam ac urna eu felis dapibus condimentum sit amet
                                            a augue. Sed non neque elit. Sed ut imperdiet nisi.
                                        </p>
                                        <div class="reviews-slot v-middle">
                                            <div class="thumb">
                                                <a href="#"><img src="img/thumbs/img-04.jpg" height="50" width="50"
                                                        alt="image description" /></a>
                                            </div>
                                            <div class="text">
                                                <strong class="name"><a href="#">Jessica Lambert - Customer
                                                        Relations</a></strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="innerTab3">
                                    <div class="detail">
                                        <p>
                                            This is Photoshop's version of Lorem Ipsum. Proin
                                            gravida nibh vel velit auctor aliquet. Aenean
                                            sollicitudin, lorem quis bibendum auctor, nisi elit
                                            consequat ipsum, nec sagittis sem nibh id elit.
                                        </p>
                                        <p>
                                            Duis sed odio sit amet nibh vulputate cursus a sit
                                            amet mauris. Morbi accumsan ipsum velit. Nam nec
                                            tellus a odio tincidunt auctor a ornare odio.
                                        </p>
                                        <p>
                                            Sed non mauris vitae erat consequat auctor eu in
                                            elit. Class aptent taciti sociosqu ad litora
                                            torquent per conubia nostra, per inceptos himenaeos.
                                            Mauris in erat justo.
                                        </p>
                                        <p>
                                            Nullam ac urna eu felis dapibus condimentum sit amet
                                            a augue. Sed non neque elit. Sed ut imperdiet nisi.
                                        </p>
                                        <p>
                                            Proin condimentum fermentum nunc. Etiam pharetra,
                                            erat sed fermentum feugiat, velit mauris egestas
                                            quam.
                                        </p>
                                        <p>
                                            Ulins aliquam massa nisl quis neque. Proin
                                            condimentum fermentum nunc. Etiam pharetra, erat sed
                                            fermentum feugiat, velit mauris egestas quam, ut
                                            aliquam massa nisl quis neque.
                                        </p>
                                        <p>
                                            Proin condimentum fermentum nunc. Etiam pharetra,
                                            erat sed fermentum feugiat, velit mauris egestas
                                            quam.
                                        </p>
                                        <p>
                                            Ulins aliquam massa nisl quis neque. Proin
                                            condimentum fermentum nunc. Etiam pharetra, erat sed
                                            fermentum feugiat, velit mauris egestas quam, ut
                                            aliquam massa nisl quis neque.
                                        </p>
                                        <p>Suspendisse gin orci enim.</p>
                                        <ul class="img-list">
                                            <li>
                                                <img src="img/generic/img-12.jpg" height="52" width="101"
                                                    alt="image description" />
                                            </li>
                                            <li>
                                                <img src="img/generic/img-13.jpg" height="97" width="114"
                                                    alt="image description" />
                                            </li>
                                            <li>
                                                <img src="img/generic/img-14.jpg" height="104" width="124"
                                                    alt="image description" />
                                            </li>
                                        </ul>
                                        <div class="reviews-slot v-middle">
                                            <div class="thumb">
                                                <a href="#"><img src="img/thumbs/img-04.jpg" height="50" width="50"
                                                        alt="image description" /></a>
                                            </div>
                                            <div class="text">
                                                <strong class="name"><a href="#">Jessica Lambert - Customer
                                                        Relations</a></strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        
                    </div>
                </div>
                <!-- gallery tab content -->
                {{-- <div role="tabpanel" class="tab-pane" id="tab05">
                    <ul class="row gallery-list has-center">
                        <li class="col-sm-6">
                            <a class="fancybox" data-fancybox-group="group" href="img/gallery/img-10-2.jpg"
                                title="Caption Goes Here">
                                <span class="img-holder">
                                    <img src="img/gallery/img-10.jpg" height="750" width="450" alt="image description" />
                                </span>
                                <span class="caption">
                                    <span class="centered">
                                        <strong class="title">ANNAPURNA VIEW</strong>
                                        <span class="sub-text">The Classic Trek</span>
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li class="col-sm-6">
                            <a class="fancybox" data-fancybox-group="group" href="img/gallery/img-11-2.jpg"
                                title="Caption Goes Here">
                                <span class="img-holder">
                                    <img src="img/gallery/img-11.jpg" height="240" width="370" alt="image description" />
                                </span>
                                <span class="caption">
                                    <span class="centered">
                                        <strong class="title">ANNAPURNA VIEW</strong>
                                        <span class="sub-text">The Classic Trek</span>
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li class="col-sm-6">
                            <a class="fancybox" data-fancybox-group="group" href="img/gallery/img-12-2.jpg"
                                title="Caption Goes Here">
                                <span class="img-holder">
                                    <img src="img/gallery/img-12.jpg" height="240" width="370" alt="image description" />
                                </span>
                                <span class="caption">
                                    <span class="centered">
                                        <strong class="title">ANNAPURNA VIEW</strong>
                                        <span class="sub-text">The Classic Trek</span>
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li class="col-sm-6">
                            <a class="fancybox" data-fancybox-group="group" href="img/gallery/img-13-2.jpg"
                                title="Caption Goes Here">
                                <span class="img-holder">
                                    <img src="img/gallery/img-13.jpg" height="240" width="370" alt="image description" />
                                </span>
                                <span class="caption">
                                    <span class="centered">
                                        <strong class="title">ANNAPURNA VIEW</strong>
                                        <span class="sub-text">The Classic Trek</span>
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li class="col-sm-6">
                            <a class="fancybox" data-fancybox-group="group" href="img/gallery/img-14-2.jpg"
                                title="Caption Goes Here">
                                <span class="img-holder">
                                    <img src="img/gallery/img-14.jpg" height="240" width="370" alt="image description" />
                                </span>
                                <span class="caption">
                                    <span class="centered">
                                        <strong class="title">ANNAPURNA VIEW</strong>
                                        <span class="sub-text">The Classic Trek</span>
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li class="col-sm-6">
                            <a class="fancybox" data-fancybox-group="group" href="img/gallery/img-15-2.jpg"
                                title="Caption Goes Here">
                                <span class="img-holder">
                                    <img src="img/gallery/img-15.jpg" height="240" width="370" alt="image description" />
                                </span>
                                <span class="caption">
                                    <span class="centered">
                                        <strong class="title">ANNAPURNA VIEW</strong>
                                        <span class="sub-text">The Classic Trek</span>
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li class="col-sm-6">
                            <a class="fancybox" data-fancybox-group="group" href="img/gallery/img-16-2.jpg"
                                title="Caption Goes Here">
                                <span class="img-holder">
                                    <img src="img/gallery/img-16.jpg" height="240" width="370" alt="image description" />
                                </span>
                                <span class="caption">
                                    <span class="centered">
                                        <strong class="title">ANNAPURNA VIEW</strong>
                                        <span class="sub-text">The Classic Trek</span>
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li class="col-sm-6">
                            <a class="fancybox" data-fancybox-group="group" href="img/gallery/img-17-2.jpg"
                                title="Caption Goes Here">
                                <span class="img-holder">
                                    <img src="img/gallery/img-17.jpg" height="240" width="370" alt="image description" />
                                </span>
                                <span class="caption">
                                    <span class="centered">
                                        <strong class="title">ANNAPURNA VIEW</strong>
                                        <span class="sub-text">The Classic Trek</span>
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li class="col-sm-6">
                            <a class="fancybox" data-fancybox-group="group" href="img/gallery/img-18-2.jpg"
                                title="Caption Goes Here">
                                <span class="img-holder">
                                    <img src="img/gallery/img-18.jpg" height="240" width="370" alt="image description" />
                                </span>
                                <span class="caption">
                                    <span class="centered">
                                        <strong class="title">ANNAPURNA VIEW</strong>
                                        <span class="sub-text">The Classic Trek</span>
                                    </span>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div> --}}
                <!-- dates and prices tab content -->
                {{-- <div role="tabpanel" class="tab-pane" id="tab06">
                    <div class="table-container">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            <strong class="date-text">Departure Dates</strong>
                                            <span class="sub-text">Confirmed Dates</span>
                                        </th>
                                        <th>
                                            <strong class="date-text">Trip Status</strong>
                                            <span class="sub-text">Trip Status</span>
                                        </th>
                                        <th>
                                            <strong class="date-text">Price (PP)</strong>
                                            <span class="sub-text">Including Flights</span>
                                        </th>
                                        <th>
                                            <strong class="date-text">Price (PP)</strong>
                                            <span class="sub-text">Excluding Flights</span>
                                        </th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="cell">
                                                <div class="middle">
                                                    Fri 18 Oct '16 - Sun 04 Nov '16
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cell">
                                                <div class="middle">
                                                    Available &amp; Guaranteed
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cell">
                                                <div class="middle">$2,779</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cell">
                                                <div class="middle">$3,170</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cell">
                                                <div class="middle">
                                                    <a href="#" class="btn btn-default">BOOK NOW</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="cell">
                                                <div class="middle">
                                                    Fri 18 Oct '16 - Sun 04 Nov '16
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cell">
                                                <div class="middle">Booked &amp; Guaranteed</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cell">
                                                <div class="middle">$2,679</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cell">
                                                <div class="middle">$3,970</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cell">
                                                <div class="middle">
                                                    <a href="#" class="btn btn-default">BOOK NOW</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="cell">
                                                <div class="middle">
                                                    Fri 18 Oct '16 - Sun 04 Nov '16
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cell">
                                                <div class="middle">
                                                    Available &amp; Guaranteed
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cell">
                                                <div class="middle">$1,779</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cell">
                                                <div class="middle">$3,470</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cell">
                                                <div class="middle">
                                                    <a href="#" class="btn btn-default">BOOK NOW</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="cell">
                                                <div class="middle">
                                                    Fri 18 Oct '16 - Sun 04 Nov '16
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cell">
                                                <div class="middle">Available</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cell">
                                                <div class="middle">$2,779</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cell">
                                                <div class="middle">$3,970</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cell">
                                                <div class="middle">
                                                    <a href="#" class="btn btn-default">BOOK NOW</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="cell">
                                                <div class="middle">
                                                    Fri 18 Oct '16 - Sun 04 Nov '16
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cell">
                                                <div class="middle">Booked &amp; Guaranteed</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cell">
                                                <div class="middle">$3,779</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cell">
                                                <div class="middle">$4,970</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cell">
                                                <div class="middle">
                                                    <a href="#" class="btn btn-default">BOOK NOW</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="cell">
                                                <div class="middle">
                                                    Fri 18 Oct '16 - Sun 04 Nov '16
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cell">
                                                <div class="middle">
                                                    Available &amp; Guaranteed
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cell">
                                                <div class="middle">$2,879</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cell">
                                                <div class="middle">$3,970</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cell">
                                                <div class="middle">
                                                    <a href="#" class="btn btn-default">BOOK NOW</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="cell">
                                                <div class="middle">
                                                    Fri 18 Oct '16 - Sun 04 Nov '16
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cell">
                                                <div class="middle">
                                                    Available &amp; Guaranteed
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cell">
                                                <div class="middle">$2,679</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cell">
                                                <div class="middle">$1,970</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cell">
                                                <div class="middle">
                                                    <a href="#" class="btn btn-default">BOOK NOW</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="cell">
                                                <div class="middle">
                                                    Fri 18 Oct '16 - Sun 04 Nov '16
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cell">
                                                <div class="middle">Booked &amp; Guaranteed</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cell">
                                                <div class="middle">$4,779</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cell">
                                                <div class="middle">$3,970</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cell">
                                                <div class="middle">
                                                    <a href="#" class="btn btn-default">BOOK NOW</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="cell">
                                                <div class="middle">
                                                    Fri 18 Oct '16 - Sun 04 Nov '16
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cell">
                                                <div class="middle">
                                                    Available &amp; Guaranteed
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cell">
                                                <div class="middle">$5,779</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cell">
                                                <div class="middle">$3,270</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cell">
                                                <div class="middle">
                                                    <a href="#" class="btn btn-default">BOOK NOW</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="cell">
                                                <div class="middle">
                                                    Fri 18 Oct '16 - Sun 04 Nov '16
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cell">
                                                <div class="middle">
                                                    Available &amp; Guaranteed
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cell">
                                                <div class="middle">$2,779</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cell">
                                                <div class="middle">$3,970</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cell">
                                                <div class="middle">
                                                    <a href="#" class="btn btn-default">BOOK NOW</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="load-more text-center text-uppercase">
                            <a href="#">MORE DATES &amp; PRICES</a>
                        </div>
                    </div>
                </div> --}}
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
                                    <span>3 Ngày</span>

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
