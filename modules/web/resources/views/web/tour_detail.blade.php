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
                                <img src="{{asset('assets/web/img/generic/img-17.jpg')}}" alt="image descriprion" height="1104" width="966" />
                            </div>
                        </div>
                        <div class="slide">
                            <div class="bg-stretch">
                                <img src="{{asset('assets/web/img/generic/img-07.jpg')}}" alt="image descriprion" height="1104" width="966" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="height col-md-6 text-col">
                    <div class="holder">
                        <h1 class="small-size"></h1>
                        <div class="description">
                            <p>
                            </p>
                        </div>
                        {{-- <ul class="reviews-info">
                            <div class="frame-info pos-relative">
                                <div class="sec1">
                                    <div class="f-left frame-rating">
                                        <div style="float:left;margin:8px 0px"
                                            data-tourid="47ccf4ff-0a8f-4df6-b82f-fcb41009eb1f" class="rateit"
                                            data-rateit-value="4.62" data-rateit-resetable="false"><button
                                                id="rateit-reset-2" data-role="none" class="rateit-reset"
                                                aria-label="reset rating" aria-controls="rateit-range-2"
                                                style="display: none;"></button>
                                            <div id="rateit-range-2" class="rateit-range" tabindex="0" role="slider"
                                                aria-label="rating" aria-owns="rateit-reset-2" aria-valuemin="0"
                                                aria-valuemax="5" aria-valuenow="4.62" aria-readonly="false"
                                                style="width: 80px; height: 16px;">
                                                <div class="rateit-selected"
                                                    style="height: 16px; width: 73.92px; display: block;"></div>
                                                <div class="rateit-hover" style="height: 16px; width: 0px; display: none;">
                                                </div>
                                            </div>
                                        </div>
                                        <div style="float: left; margin-top:8px" class="hidden-xs">
                                            <span class="hreview-aggregate">
                                                <span class="item">
                                                    <span class="fn">
                                                        <span class="rating"><span
                                                                class="votes"></span> Đánh giá: <span
                                                                class="average"><strong>4.62</strong></span><strong>/<span
                                                                    class="best">5 </span></strong>trong <span
                                                                class="summary"><strong>367</strong>
                                                    </span>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="viewed">
                                        <i class="fa fa-eye"></i>&nbsp;&nbsp;<span>377</span>&nbsp;&nbsp;
                                        <i class="fa fa-thumbs-up"
                                            style="color: #777"></i>&nbsp;&nbsp;<span>126</span>&nbsp;&nbsp;
                                        <i class="fa fa-comment" style="color: #777"></i>&nbsp;&nbsp;<span>0</span>
                                    </div>
                                </div>
                                <div class="sec2">
                                    <div class="row mg-bot10">
                                        <div class="col-lg-4 col-md-2 col-sm-3 col-xs-6" >Khởi hành: </div>
                                        <div class="col-lg-8 col-md-10 col-sm-9 col-xs-6">
                                            <div class="mg-bot-date">
                                               
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mg-bot10">
                                        <div class="col-lg-4 col-md-2 col-sm-3 col-xs-6">Thời gian:</div>
                                        <div class="col-lg-8 col-md-10 col-sm-9 col-xs-6">
                                            Ngày
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-2 col-sm-3 col-xs-6"
                                            style="padding-right: 0px !important;">Nơi khởi hành:</div>
                                        <div class="col-lg-8 col-md-10 col-sm-9 col-xs-6">
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="sec3">
                                    <div class="row">
                                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                            <div style="margin-bottom: 7px;" itemscope=""
                                                itemtype="http://schema.org/PriceSpecification">
                                                <span class="price" itemprop="price"
                                                    content="6498000"></span>&nbsp;<span class="unit"
                                                    itemprop="priceCurrency" content="VND">đ</span>
                                            </div>
                                            <div>
                                                Số chỗ còn nhận:
                                                <span class="sit">9</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                                <div class="bg-phone hidden-md hidden-sm hidden-xs">
                                    <img src="/Content/ThemeHe/img/bg-phone.png" alt="phone">
                                </div>s
                            </div>
                        </ul> --}}
                        <div class="btn-holder">
                            <a href="{{route('web.booking')}}" class="btn btn-lg btn-info">Đặt ngay</a>
                        </div>
                        <ul class="social-networks social-share">
                            <li>
                                <a href="#" class="facebook">
                                    <span class="ico">
                                        <span class="icon-facebook"></span>
                                    </span>
                                    <span class="text">Share</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="twitter">
                                    <span class="ico">
                                        <span class="icon-twitter"></span>
                                    </span>
                                    <span class="text">Tweet</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="google">
                                    <span class="ico">
                                        <span class="icon-google-plus"></span>
                                    </span>
                                    <span class="text">+1</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="pin">
                                    <span class="ico">
                                        <span class="icon-pin"></span>
                                    </span>
                                    <span class="text">Pin it</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <div class="tab-container">
            <nav class="nav-wrap" id="sticky-tab">
                <div class="container">
                    <!-- nav tabs -->
                    <ul class="nav nav-tabs text-center" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#tab01" aria-controls="tab01" role="tab" data-toggle="tab">Chương trình tour</a>
                        </li>
                        <li role="presentation">
                            <a href="#tab02" aria-controls="tab02" role="tab" data-toggle="tab">Chi tiết tour</a>
                        </li>
                        <li role="presentation">
                            <a href="#tab03" aria-controls="tab03" role="tab" data-toggle="tab">lưu ý
                        </li>
                        <li role="presentation">
                            <a href="#tab04" aria-controls="tab04" role="tab" data-toggle="tab">Ý kiến khách hàng</a>
                        </li>
                        <li role="presentation">
                            <a href="#tab05" aria-controls="tab05" role="tab" data-toggle="tab">Liên hệ</a>
                        </li>
                        <li role="presentation">
                            <a href="#tab06" aria-controls="tab06" role="tab" data-toggle="tab">Bản đồ</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- tab panes -->
            <div class="container tab-content trip-detail">
                <!-- chuong trinh tour -->
                <div role="tabpanel" class="tab-pane active" id="tab01">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="detail">
                                <div class="chuongtrinhtour mg-bot30" style="display: block;">
                                    <div class="title-lg">
                                        <h2>Chương trình tour</h2>
                                    </div>
                                 
                                    
                                      <div class="sec-content itinerary">
                                        <div class="list">
                                            <div class="list__item">
                                                <div class="list__time">
                                                    <div class="num">Ngày  </div>
                                                    <div class="day"></div>
                                                </div>
                                                <div class="list__border"></div>
                                                <div class="list__desc">
                                                    <h3 class="font500 name"><img src="/Content/ThemeHe/img/i-marker.png"
                                                            alt="marker"></h3>
                                                    <div class="d1 detail">
                                                        
                                                    </div>
                                                   
                                                    <div class="border"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                 
                                    
                                </div>
                            </div>
                        </div>
                        <!-- end chuong trinh tour -->
                    </div>
                </div>
                <!-- luu y -->
                <div role="tabpanel" class="tab-pane" id="tab02">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="sec-content tour-detail">
                                <div class="plane">
                                    <div class="title">
                                        <span class="hidden-xs"><img src="/Content/ThemeHe/img/i-plane.png"
                                                alt="plane">&nbsp;&nbsp;</span>
                                        Thông tin vận chuyển
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td>Ngày đi: </td>
                                                        <td>Phương tiện: </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div id="divThongTinKhachSan">
                                    <div class="">
                                        <div class="title">
                                            <span class="hidden-xs"><img src="/Content/ThemeHe/img/i-hotel.png"
                                                    alt="hotel">&nbsp;&nbsp;</span>
                                            Thông tin khách sạn
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <td data-title="Thông tin khách sạn: "></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="divThongTinHDV">
                                    <div class="tour-guide">
                                        <div class="title">
                                            <span class="hidden-xs">
                                                <img src="/Content/ThemeHe/img/i-hdv.png" alt="hdv">&nbsp;&nbsp;
                                            </span>
                                            Thông tin hướng dẫn viên
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <td data-title="Thông tin hướng dẫn viên: "></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="info">
                                    <div class="title">
                                        <span class="hidden-xs"><img src="/Content/ThemeHe/img/i-info.png"
                                                alt="info">&nbsp;&nbsp;</span>
                                        Thông tin tập trung
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td>Ngày giờ tập trung</td>
                                                        <td>
                                                            
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Nơi tập trung
                                                        </td>
                                                        <td>
                                                            <span>  </span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tour-price">
                                    <div class="title">
                                        <span class="hidden-xs"><img src="/Content/ThemeHe/img/i-tourprice.png"
                                                alt="tourprice">&nbsp;&nbsp;</span>
                                        Giá tour &amp; Phụ thu phòng đơn
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr class="bold">
                                                        <td>Loại khách</td>
                                                        <td>Giá tour</td>
                                                        <td>Land tour</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td data-title="Loại khách">Người lớn (Từ 12 tuổi trở lên)</td>
                                                        <td data-title="Giá tour">6,498,000<span> đ</span></td>
                                                        <td data-title="Land tour">4,000,000 đ</td>
                                                    </tr>
                                                    <tr>
                                                        <td data-title="Loại khách">Trẻ em (Từ 5 tuổi đến dưới 12 tuổi)</td>
                                                        <td data-title="Giá tour">5,523,000<span> đ</span></td>
                                                        <td data-title="Land tour">4,000,000 đ</td>
                                                    </tr>
                                                    <tr>
                                                        <td data-title="Loại khách">Trẻ nhỏ (Từ 2 tuổi đến dưới 5 tuổi)</td>
                                                        <td data-title="Giá tour">3,898,000<span> đ</span></td>
                                                        <td data-title="Land tour">0 đ</td>
                                                    </tr>
                                                    <tr>
                                                        <td data-title="Loại khách">Em bé (Dưới 2 tuổi)</td>
                                                        <td data-title="Giá tour">500,000 đ</td>
                                                        <td data-title="Land tour">0 đ</td>
                                                    </tr>
                                                    <tr style="color: #cd2c24">
                                                        <td data-title="Loại khách">Phụ thu phòng đơn</td>
                                                        <td data-title="Giá tour">1,500,000<span> đ</span></td>
                                                        <td data-title="Land tour">1,500,000 đ</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="note">
                                    <div class="title">
                                        <span class="hidden-xs">
                                            <img src="/Content/ThemeHe/img/i-note.png" alt="note">&nbsp;&nbsp;
                                        </span>
                                        Ghi chú
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <p class="note-content">
                                               
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>  
                <!-- accomodation tab content -->
                <div role="tabpanel" class="tab-pane" id="tab03">
                    <div class="row">
                        <div class="col-md-12">
                         <div class="sec-content attention">
                             
                         </div>
                    </div>
                </div>
                <!-- y kien khach hang -->
                <div role="tabpanel" class="tab-pane" id="tab04">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="question-select">
                                <select id="tabSelect" class="question">
                                    <option value="#innerTab1">
                                        What kind of footwear is suitable?
                                    </option>
                                    <option value="#innerTab2">
                                        What kind of bag is suitable?
                                    </option>
                                    <option value="#innerTab3">
                                        What kind of clothes are suitable?
                                    </option>
                                </select>
                                <ul class="nav nav-tabs" id="questionTab">
                                    <li class="active">
                                        <a href="#innerTab1" data-toggle="tab">What kind of footwear wearing is
                                            suitable?</a>
                                    </li>
                                    <li>
                                        <a href="#innerTab2" data-toggle="tab">What kind of bag is suitable?</a>
                                    </li>
                                    <li>
                                        <a href="#innerTab3" data-toggle="tab">What kind of clothes wearing is suitable?</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-wrapper">
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
                                                <img src="{{asset('assets/web/img/generic/img-12.jpg')}}" height="52" width="101"
                                                    alt="image description" />
                                            </li>
                                            <li>
                                                <img src="{{asset('assets/web/img/generic/img-13.jpg')}}" height="97" width="114"
                                                    alt="image description" />
                                            </li>
                                            <li>
                                                <img src="{{asset('assets/web/img/generic/img-14.jpg')}}" height="104" width="124"
                                                    alt="image description" />
                                            </li>
                                        </ul>
                                        <div class="reviews-slot v-middle">
                                            <div class="thumb">
                                                <a href="#"><img src="{{asset('assets/web/img/thumbs/img-04.jpg')}}" height="50" width="50"
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
                                                <a href="#"><img src="{{asset('assets/web/img/thumbs/img-04.jpg')}}" height="50" width="50"
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
                                                <img src="{{asset('assets/web/img/generic/img-12.jpg')}}" height="52" width="101"
                                                    alt="image description" />
                                            </li>
                                            <li>
                                                <img src="{{asset('assets/web/img/generic/img-13.jpg')}}" height="97" width="114"
                                                    alt="image description" />
                                            </li>
                                            <li>
                                                <img src="{{asset('assets/web/img/generic/img-14.jpg')}}" height="104" width="124"
                                                    alt="image description" />
                                            </li>
                                        </ul>
                                        <div class="reviews-slot v-middle">
                                            <div class="thumb">
                                                <a href="#"><img src="{{asset('assets/web/img/thumbs/img-04.jpg')}}" height="50" width="50"
                                                        alt="image description" /></a>
                                            </div>
                                            <div class="text">
                                                <strong class="name"><a href="#">Jessica Lambert - Customer
                                                        Relations</a></strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="header-box">
                                <a href="#" class="link-right">Writing A Review</a>
                                <span class="rate-left">
                                    <strong class="title">Overall Rating</strong>
                                    <span class="star-rating">
                                        <span><span class="icon-star"></span></span>
                                        <span><span class="icon-star"></span></span>
                                        <span><span class="icon-star"></span></span>
                                        <span><span class="icon-star"></span></span>
                                        <span class="disable"><span class="icon-star"></span></span>
                                    </span>
                                    <span class="value">4.7/5</span>
                                </span>
                            </div>
                            <div class="comments reviews-body">
                                <div class="comment-holder">
                                    <div class="comment-slot">
                                        <div class="thumb">
                                            <a href="#"><img src="{{asset('assets/web/img/thumbs/img-05.jpg')}}" height="50" width="50"
                                                    alt="image description" /></a>
                                        </div>
                                        <div class="text">
                                            <header class="comment-head">
                                                <div class="left">
                                                    <strong class="name">
                                                        <a href="#">Cleona Torez - Spain</a>
                                                    </strong>
                                                    <div class="meta">Reviewed on 14/1/2016</div>
                                                </div>
                                                <div class="right">
                                                    <div class="star-rating">
                                                        <span><span class="icon-star"></span></span>
                                                        <span><span class="icon-star"></span></span>
                                                        <span><span class="icon-star"></span></span>
                                                        <span><span class="icon-star"></span></span>
                                                        <span class="disable"><span class="icon-star"></span></span>
                                                    </div>
                                                    <span class="value">4.7/5</span>
                                                </div>
                                            </header>
                                            <div class="des">
                                                <p>
                                                    This is Photoshop's version of Lorem Ipsum.
                                                    Proin gravida nibh vel velit auctor aliquet.
                                                    Aenean sollicitudin, lorem quis bibendum auctor,
                                                    nisi elit consequat ipsum, nec sagittis sem nibh
                                                    id elit. Duis sed odio sit amet nibh vulputate
                                                    cursus a sit amet mauris.
                                                </p>
                                                <div class="link-holder">
                                                    <a href="#">Read Full Review</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-slot">
                                        <div class="thumb">
                                            <a href="#"><img src="{{asset('assets/web/img/thumbs/img-06.jpg')}}" height="50" width="50"
                                                    alt="image description" /></a>
                                        </div>
                                        <div class="text">
                                            <header class="comment-head">
                                                <div class="left">
                                                    <strong class="name">
                                                        <a href="#">Cleona Torez - Spain</a>
                                                    </strong>
                                                    <div class="meta">Reviewed on 14/1/2016</div>
                                                </div>
                                                <div class="right">
                                                    <div class="star-rating">
                                                        <span><span class="icon-star"></span></span>
                                                        <span><span class="icon-star"></span></span>
                                                        <span><span class="icon-star"></span></span>
                                                        <span><span class="icon-star"></span></span>
                                                        <span class="disable"><span class="icon-star"></span></span>
                                                    </div>
                                                    <span class="value">4.7/5</span>
                                                </div>
                                            </header>
                                            <div class="des">
                                                <p>
                                                    This is Photoshop's version of Lorem Ipsum.
                                                    Proin gravida nibh vel velit auctor aliquet.
                                                    Aenean sollicitudin, lorem quis bibendum auctor,
                                                    nisi elit consequat ipsum, nec sagittis sem nibh
                                                    id elit. Duis sed odio sit amet nibh vulputate
                                                    cursus a sit amet mauris.
                                                </p>
                                                <div class="link-holder">
                                                    <a href="#">Read Full Review</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-slot">
                                        <div class="thumb">
                                            <a href="#"><img src="{{asset('assets/web/img/thumbs/img-07.jpg')}}" height="50" width="50"
                                                    alt="image description" /></a>
                                        </div>
                                        <div class="text">
                                            <header class="comment-head">
                                                <div class="left">
                                                    <strong class="name">
                                                        <a href="#">Cleona Torez - Spain</a>
                                                    </strong>
                                                    <div class="meta">Reviewed on 14/1/2016</div>
                                                </div>
                                                <div class="right">
                                                    <div class="star-rating">
                                                        <span><span class="icon-star"></span></span>
                                                        <span><span class="icon-star"></span></span>
                                                        <span><span class="icon-star"></span></span>
                                                        <span><span class="icon-star"></span></span>
                                                        <span class="disable"><span class="icon-star"></span></span>
                                                    </div>
                                                    <span class="value">4.7/5</span>
                                                </div>
                                            </header>
                                            <div class="des">
                                                <p>
                                                    This is Photoshop's version of Lorem Ipsum.
                                                    Proin gravida nibh vel velit auctor aliquet.
                                                    Aenean sollicitudin, lorem quis bibendum auctor,
                                                    nisi elit consequat ipsum, nec sagittis sem nibh
                                                    id elit. Duis sed odio sit amet nibh vulputate
                                                    cursus a sit amet mauris.
                                                </p>
                                                <div class="link-holder">
                                                    <a href="#">Read Full Review</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="link-more text-center">
                                    <a href="#">Show More Reviews - 75 Reviews</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end y kien khach hang -->

                <!-- lien  -->
                <div role="tabpanel" class="tab-pane" id="tab05">
                    <ul class="row gallery-list has-center">
                        <li class="col-sm-6">
                            <a class="fancybox" data-fancybox-group="group" href="{{asset('assets/web/img/gallery/img-10-2.jpg')}}"
                                title="Caption Goes Here">
                                <span class="img-holder">
                                    <img src="{{asset('assets/web/img/gallery/img-10.jpg')}}" height="750" width="450" alt="image description" />
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
                            <a class="fancybox" data-fancybox-group="group" href="{{asset('assets/web/img/gallery/img-11-2.jpg')}}"
                                title="Caption Goes Here">
                                <span class="img-holder">
                                    <img src="{{asset('assets/web/img/gallery/img-11.jpg')}}" height="240" width="370" alt="image description" />
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
                            <a class="fancybox" data-fancybox-group="group" href="{{asset('assets/web/img/gallery/img-12-2.jpg')}}"
                                title="Caption Goes Here">
                                <span class="img-holder">
                                    <img src="{{asset('assets/web/img/gallery/img-12.jpg')}}" height="240" width="370" alt="image description" />
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
                            <a class="fancybox" data-fancybox-group="group" href="{{asset('assets/web/img/gallery/img-13-2.jpg')}}"
                                title="Caption Goes Here">
                                <span class="img-holder">
                                    <img src="{{asset('assets/web/img/gallery/img-13.jpg')}}" height="240" width="370" alt="image description" />
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
                            <a class="fancybox" data-fancybox-group="group" href="{{asset('assets/web/img/gallery/img-14-2.jpg')}}"
                                title="Caption Goes Here">
                                <span class="img-holder">
                                    <img src="{{asset('assets/web/img/gallery/img-14.jpg')}}" height="240" width="370" alt="image description" />
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
                            <a class="fancybox" data-fancybox-group="group" href="{{asset('assets/web/img/gallery/img-15-2.jpg')}}"
                                title="Caption Goes Here">
                                <span class="img-holder">
                                    <img src="{{asset('assets/web/img/gallery/img-15.jpg')}}" height="240" width="370" alt="image description" />
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
                            <a class="fancybox" data-fancybox-group="group" href="{{asset('assets/web/img/gallery/img-16-2.jpg')}}"
                                title="Caption Goes Here">
                                <span class="img-holder">
                                    <img src="{{asset('assets/web/img/gallery/img-16.jpg')}}" height="240" width="370" alt="image description" />
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
                            <a class="fancybox" data-fancybox-group="group" href="{{asset('assets/web/img/gallery/img-17-2.jpg')}}"
                                title="Caption Goes Here">
                                <span class="img-holder">
                                    <img src="{{asset('assets/web/img/gallery/img-17.jpg')}}" height="240" width="370" alt="image description" />
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
                            <a class="fancybox" data-fancybox-group="group" href="{{asset('assets/web/img/gallery/img-18-2.jpg')}}"
                                title="Caption Goes Here">
                                <span class="img-holder">
                                    <img src="{{asset('assets/web/img/gallery/img-18.jpg')}}" height="240" width="370" alt="image description" />
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
                </div>
                <!-- end lien he-->

                <!-- ban do -->
                <div role="tabpanel" class="tab-pane" id="tab06">
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
                </div>
                 <!-- end ban do -->
            </div>
        </div>
        <!-- recent block -->
        <aside class="recent-block recent-gray recent-wide-thumbnail">
            <div class="container">
                <h2 class="text-center text-uppercase">RECENTLY VIEWED</h2>
                <div class="row">
                    <article class="col-sm-6 col-md-3 article">
                        <div class="thumbnail">
                            <h3 class="no-space">
                                <a href="#">Everest Basecamp Trek</a>
                            </h3>
                            <strong class="info-title">Everest Region, Nepal</strong>
                            <div class="img-wrap">
                                <img src="{{asset('assets/web/img/listing/img-31.jpg')}}" height="210" width="250" alt="image description" />
                            </div>
                            <footer>
                                <div class="sub-info">
                                    <span>5 Days</span>
                                    <span>$299</span>
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
                                <a href="#">Everest Basecamp Trek</a>
                            </h3>
                            <strong class="info-title">Everest Region, Nepal</strong>
                            <div class="img-wrap">
                                <img src="{{asset('assets/web/img/listing/img-32.jpg')}}" height="210" width="250" alt="image description" />
                            </div>
                            <footer>
                                <div class="sub-info">
                                    <span>5 Days</span>
                                    <span>$299</span>
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
                                <a href="#">Everest Basecamp Trek</a>
                            </h3>
                            <strong class="info-title">Everest Region, Nepal</strong>
                            <div class="img-wrap">
                                <img src="{{asset('assets/web/img/listing/img-33.jpg')}}" height="210" width="250" alt="image description" />
                            </div>
                            <footer>
                                <div class="sub-info">
                                    <span>5 Days</span>
                                    <span>$299</span>
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
                                <a href="#">Everest Basecamp Trek</a>
                            </h3>
                            <strong class="info-title">Everest Region, Nepal</strong>
                            <div class="img-wrap">
                                <img src="{{asset('assets/web/img/listing/img-34.jpg')}}" height="210" width="250" alt="image description" />
                            </div>
                            <footer>
                                <div class="sub-info">
                                    <span>5 Days</span>
                                    <span>$299</span>
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
