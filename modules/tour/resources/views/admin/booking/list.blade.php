@extends('core::theme.layouts.default')
@section('page_content')
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><i class="far fa-newspaper mr-2"></i> <span class="font-weight-semibold">Booking</span> - Danh sách
            </h4>
            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>
    </div>
    <div class="card-header border-bottom mb-0 header-elements-inline p-0">
        <div class="text-center" style="margin-top: 20px!important;width: 100%;padding-left: 10px;padding-right: 10px;">

        </div>
    </div>

    @if (isset($bookings) && count($bookings) > 0)

        {{-- thay  tìm class rồi thay vào =  class="table-scrollable" --}}
        <div class="table-scrollable">
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Khách hàng</th>
                        <th class="text-center">Điạ chỉ</th>
                        <th class="text-center">Số khách</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Số điện thoại</th>
                        <th class="text-center">Ghi chú</th>
                        <th style="width:100px;">Trạng thái</th>
                        <th style="width:100px;">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bookings as $booking)
                        {{-- @dd($booking) --}}
                        <tr>
                            <td class="text-center">{{ $booking['id'] }}</td>
                            <td>
                                <strong>{{ $booking['customer'] }}></strong>
                            </td>
                            <td class="text-center">
                                {{ $booking['address'] }}
                            </td>
                            <td class="text-center">{{ $booking['total_customer'] }}</td>

                            <td class="text-center">{{ $booking['email'] }}</td>

                            <td class="text-center">{{ $booking['phone'] }}</td>
                            <td class="text-center">{{ $booking['note'] }}</td>

                            <td class="text-center">
                                {{ $booking['status'] == 1 ? 'Đang hoạt động' : 'Tạm ngưng' }}
                            </td>

                            <td class="text-center">
                                <a href="{{ route('tour.admin.cancel', $booking['id']) }}" class="text-danger mr-2"
                                    data-popup="tooltip" title="Hủy "><i class="fa fa-trash-o"></i></a>


                            </td>
                        </tr>
                    @endforeach
                </tbody>
                {{-- @if ($bookings->links('vendor.pagination.bootstrap-4'))
                    <div class="cms-paginate float-right mr-3">
                        {{ $bookings->links('vendor.pagination.bootstrap-4') }}
                    </div>
                @endif --}}
            </table>
        </div>


    @else
        <div class="card-body">
            <div class="alert alert-info">
                Chưa có dữ liệu
            </div>
        </div>
    @endif
@endsection
@section('custom_js')
    <script src="{{ asset('assets/admin/js/plugins/tables/datatables/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            var switches = Array.prototype.slice.call(document.querySelectorAll('.form-input-switchery'));
            switches.forEach(function(html) {
                var switchery = new Switchery(html, {
                    secondaryColor: '#d8201c'
                });
            });
            var inProcess = false;
            $(document).find('.form-input-switchery').each(function(i, html) {
                $(html).on('click', function(e) {
                    if (!inProcess) {
                        if (typeof $(this).attr('checked') !== typeof undefined) {
                            // 1 => 0
                            inProcess = true;
                            $.ajax({
                                type: 'post',
                                url: "{{ route('post.admin.status') }}",
                                data: {
                                    _token: _token,
                                    id: $(this).data('id'),
                                    status: 0
                                },
                                dataType: 'JSON',
                                success: function(res) {
                                    inProcess = false;
                                    if (res.status) {
                                        $(html).removeAttr('checked');
                                        app.showNotify(res.msg, 'success');
                                    } else {
                                        app.showNotify(res.msg, 'error');
                                        setTimeout(function() {
                                            var newEl = new Switchery(html, {
                                                secondaryColor: '#d8201c'
                                            });
                                            setSwitchery(newEl, true);
                                        }, 200);
                                    }
                                }
                            });
                        }
                        if (typeof $(this).attr('checked') === typeof undefined) {
                            // 0 => 1
                            inProcess = true;
                            $.ajax({
                                type: 'post',
                                url: "{{ route('post.admin.status') }}",
                                data: {
                                    _token: _token,
                                    id: $(this).data('id'),
                                    status: 1
                                },
                                dataType: 'JSON',
                                success: function(res) {
                                    inProcess = false;
                                    if (res.status) {
                                        $(html).attr('checked', 'checked');
                                        app.showNotify(res.msg, 'success');
                                    } else {
                                        app.showNotify(res.msg, 'error');
                                        setTimeout(function() {
                                            var newEl = new Switchery(html, {
                                                secondaryColor: '#d8201c'
                                            });
                                            setSwitchery(newEl, false);
                                        }, 200);
                                    }
                                }
                            });
                        }
                    } else {
                        e.preventDefault();
                    }
                });
            });
        });
    </script>
@endsection
