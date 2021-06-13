@extends('core::theme.layouts.default')
@section('custom_css')
@endsection
@section('page_content')
<div class="p-2" style="display: flex;justify-content: flex-start;">
    <a href="{{ route('activity.admin.create') }}" class="btn btn-success btn-sm">{{ trans('activity::admin.create') }}</a>
</div>
@if (count($activities) > 0)
<div id="table-conten">
    <table class="table table-bordered card-body table-active">
        <thead class="bg-light">
            <tr>
                <th class="text-center" style="width:100px">{{ trans('activity::admin.order') }}</th>
                <th class="text-center">{{ trans('activity::admin.name') }}</th>
                <th class="text-center">
                    <img src="{{ asset('assets/admin/images/vn.svg') }}" alt="" width="20" height="20" srcset="" class="mr-2">
                </th>
                <th class="text-center">
                    <img src="{{ asset('assets/admin/images/en.svg') }}" alt="" width="20" height="20" srcset="" class="mr-2">
                </th>
                <th class="text-center">{{ trans('activity::admin.action') }}</th>
                <th class="text-center">{{ trans('activity::admin.status') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($activities as $i => $activity)
            @foreach ($activity->activityTranstion as $j => $item)
            <tr>
                @if ($j==0)
                <td class="text-center" rowspan="{{ count($activity->activityTranstion) }}">
                    <span style="display:none;">{{ $activity['order'] }}</span>
                    <select data-min="{{ $minOrder }}" data-max="{{ $maxOrder }}" data-order="{{ $activity['order'] }}" data-id="{{ $activity['id'] }}" class="form-control changOrderPage"></select>
                </td>
                @endif
                @if ($j==0)
                <td class="text-left">{{ $item->title }}</td>
                @else
                <td class="text-left">{{ $item->title }}</td>
                @endif
                @if (count($activity->activityTranstion) == 2)
                <td class="text-center">
                    <a href="{{ $item['locale'] == 'vi' ? route('activity.admin.edit', ['lang'=> 'vi', $activity['id']]) : route('activity.admin.edit', ['lang'=>'vi', $activity['id'] ]) }}" data-popup="tooltip" title="{{ trans('activity::admin.edit') }}">
                        {!! $item['locale'] == 'vi' ? '<i class="fa fa-check" aria-hidden="true"></i>' : '<i class="fa fa-edit" aria-hidden="true"></i>' !!}
                    </a>
                </td>
                <td class="text-center">
                    <a href="{{ $item['locale'] == 'en' ? route('activity.admin.edit',['lang'=> 'en', $activity['id']]) : route('activity.admin.edit', ['lang'=>'en', $activity['id'] ]) }}" data-popup="tooltip" title="{{ trans('activity::admin.edit') }}">
                        {!! $item['locale'] == 'en' ? '<i class="fa fa-check" aria-hidden="true"></i>' : '<i class="fa fa-edit" aria-hidden="true"></i>' !!}
                    </a>
                </td>
                @else
                <td class="text-center">
                    <a href="{{ $item['locale'] == 'vi' ? route('activity.admin.edit', ['lang'=> 'vi', $activity['id']]) : route('activity.admin.create', ['lang'=>'vi', 'activity_id' =>$activity['id'] ]) }}" data-popup="tooltip" title="{{ $item['locale'] == 'vi' ? trans('activity::admin.edit') : trans('activity::admin.add_page') }}">
                        {!! $item['locale'] == 'vi' ? '<i class="fa fa-check" aria-hidden="true"></i>' : '<i class="fa fa-plus" aria-hidden="true"></i>' !!}
                    </a>
                </td>
                <td class="text-center">
                    <a href="{{ $item['locale'] == 'en' ? route('activity.admin.edit', ['lang'=> 'en', $activity['id']]) : route('activity.admin.create', ['lang'=>'en', 'activity_id' =>$activity['id'] ]) }}" data-popup="tooltip" title="{{ $item['locale'] == 'en' ? trans('activity::admin.edit') : trans('activity::admin.add_page') }}">
                        {!! $item['locale'] == 'en' ? '<i class=" fa fa-check" aria-hidden="true"></i>' : '<i class="fa fa-plus" aria-hidden="true"></i>' !!}
                    </a>
                </td>
                @endif
                <td class="text-center">
                    <a href="javascript:;" onclick="askToDeletePage(this);return false;" data-href="{{ route('activity.admin.delete', $item['id']) }}" class="text-danger" data-popup="tooltip" title="{{ trans('activity::admin.delete') }}"><i class="fas fa-trash-alt"></i></a>
                </td>
                @if ( $j==0)
                <td class="text-center" rowspan="{{ count($activity->activityTranstion) }}">
                    <div class="form-check form-check-switchery form-check-switchery-sm">
                        <label class="form-check-label">
                            <input data-id="{{ $activity['id'] }}" type="checkbox" class="form-input-switchery" {{ $activity['status'] ? 'checked' : '' }}>
                        </label>
                    </div>
                </td>
                @endif
            </tr>
            @endforeach
            @endforeach
        </tbody>
    </table>
</div>
@else
<div class="alert alert-info mt-2">
    {{ trans('activity::admin.datayet') }}
</div>
@endif
@endsection
@section('custom_js')
<script>
    function askToDeletePage(element) {
        if (confirm('{{ trans("activity::admin.asktodel") }}')) {
            window.location.href = $(element).data("href");
        }
        return false;
    }
</script>
<script src="{{ asset('assets/admin/js/plugins/tables/datatables/datatables.min.js') }}"></script>
<script>
    function setSwitchery(switchElement, checkedBool) {
        if((checkedBool && !switchElement.isChecked()) || (!checkedBool && switchElement.isChecked())) {
            switchElement.setPosition(true);
            switchElement.handleOnchange(true);
        }
    }
    $(document).ready(function(){
        $('.uniform-checker').click(function (e) {
            if ($(this).find('input[type="checkbox"]').hasClass('all')) {
                $('input[type="checkbox"].form-check-input-styled:not(.all)').prop('checked', !$(this).find('span').first().hasClass('checked'));
            } else {
                if ($(this).find('span').first().hasClass('checked'))
                    $('.selectAll .uniform-checker .form-check-input-styled').prop('checked', false);
                else {
                    if ($('.uniform-checker span:not(.checked)').length == $('.uniform-checker').length - 1)
                        $('.selectAll .uniform-checker .form-check-input-styled').prop('checked', true);
                }
            }
            $.uniform.update();
        });
        if (!$().DataTable) {
            console.warn('Warning - datatables.min.js is not loaded.');
            return;
        }

        // Setting datatable defaults
        $.extend( $.fn.dataTable.defaults, {
            autoWidth: false,
            dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
            language: {
                sInfo:'{{ trans("activity::admin.showing") }} _START_ {{ trans("activity::admin.to") }} _END_ {{ trans("activity::admin.of") }} _TOTAL_ {{ trans("activity::admin.entries") }}',
                search: '<span>{{ trans("activity::admin.search") }}:</span> _INPUT_',
                searchPlaceholder: '{{ trans("activity::admin.search_plahoder") }}...',
                lengthMenu: '<span>{{ trans("activity::admin.show") }}:</span> _MENU_',
                paginate: { 'first': 'First', 'last': 'Last', 'next': $('html').attr('dir') == 'rtl' ? '&larr;' : '&rarr;', 'previous': $('html').attr('dir') == 'rtl' ? '&rarr;' : '&larr;' }
            }
        });
        $('.datatable-basic').DataTable({
            order: [[0, "asc" ]],
            columnDefs: [
                {targets: [0,3], searchable: false, orderable: false, visible: true }
            ]
        });
        var switches = Array.prototype.slice.call(document.querySelectorAll('.form-input-switchery'));
        switches.forEach(function (html) {
            var switchery = new Switchery(html, {
                secondaryColor: '#d8201c'
            });
        });
        var inProcess = false;
        $(document).find('.form-input-switchery').each(function (i, html) {
            $(html).on('click', function(e){
                if (!inProcess) {
                    if (typeof $(this).attr('checked') !== typeof undefined) {
                        // 1 => 0
                        inProcess = true;
                        $.ajax({
                            type: 'post',
                            url: "{{ route('page.admin.ajaxchangestatus') }}",
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
                                    setTimeout(function(){
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
                            url: "{{ route('page.admin.ajaxchangestatus') }}",
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
                                    setTimeout(function(){
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

    $('.changOrderPage').each(function() {
        var min = $(this).data('min');
        var max = $(this).data('max');
        var selected = $(this).data('order');
        var id = $(this).data('id');
        var html = '';
        for (var i = min; i <= max; i++) {
            html += '<option value="' + i + '" ' + (i == selected ? 'selected' : '') + '>' + i + '</option>';
        }
        $(this).attr('onchange', 'change_order(this);return false;');
        $(this).html(html);
    });

    function change_order(el)
    {
        var id = $(el).data('id');
        var order = $(el).val();
        // call ajax to chang order
        $(document).find('.changOrderPage').attr('disabled', 'disabled');
        $.ajax({
            type: 'post',
            url: "{{ route('page.admin.ajaxchangepage') }}",
            data: {
                _token: _token,
                id: id,
                order: order
            },
            dataType: 'JSON',
            success: function(data) {
                window.location.reload();
            }
        });
    }
</script>
@endsection