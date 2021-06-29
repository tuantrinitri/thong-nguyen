@extends('web::layouts.home')
@section('page_content')
    <main id="main">
        <!-- top information area -->
        <div class="inner-top">
            <div class="container">
                <h1 class="inner-main-heading">Đặt tour</h1>
                <!-- breadcrumb -->

            </div>
        </div>
        <div class="inner-main common-spacing container">
            <!-- booking form -->
            <form class="booking-form" action="{{ route('web.tour.booking', $tour['id']) }}" method="POST">
                {{ csrf_field() }}
                <div class="row same-height">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-holder">
                                <h2 class="small-size">Thông tin thanh toán</h2>
                                <div class="wrap">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="hold">
                                                <label for="name">Họ Và Tên</label>
                                                <input type="text" name="customer" class="form-control" />
                                            </div>
                                        </div>

                                    </div>
                                    <div class="hold">
                                        <label for="address">Địa Chỉ</label>
                                        <input type="text" id="address" name="address" class="form-control" />
                                    </div>

                                    <div class="hold">
                                        <label for="city">Số Khách</label>
                                        <input type="text" name="total_customer" class="form-control" />
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="hold">
                                                <label for="em">Email</label>
                                                <input type="email" name="email" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="hold">
                                                <label for="phn">Điện thoại</label>
                                                <input type="text" name="phone" class="form-control" />
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-holder">
                                <h2 class="small-size">Ghi chú bổ sung</h2>
                                <div class="wrap">
                                    <div class="hold">
                                        <label for="txt">Ghi chú của bạn</label>
                                        <textarea id="txt" name="note" class="form-control"
                                            placeholder="điền ý kiến vào đây"></textarea>
                                    </div>
                                </div>

                                <div class="order-block">
                                    <h2 class="small-size">Xem trước Đơn đặt hàng</h2>
                                    <div class="wrap">
                                        <table class="product-table">
                                            <thead>
                                                <tr>
                                                    <th>Chuyến tham quan đã chọn</th>
                                                    <th>Tổng giá</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <span class="title">{{ $tour['title'] }}</span>

                                                    </td>

                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td></td>
                                                    <td>{{ $tour['price'] }}</td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <button type="submit" class="btn btn-default">
                                            Xác nhận đặt chỗ
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </main>
@endsection
