@extends('core::theme.layouts.default')
@section('page_content')
<div class="p-3">
    <a href="{{ route('page.admin.create') }}" class="btn btn-success btn-sm">{{ trans('page::admin.add_page') }}</a>
    @if (count($pages) > 0)
    <div class="table-responsive">
        <table class="table datatable-basic">
            <thead class="bg-light">
                <tr>
                    <th class="text-center" style="width:100px">{{ trans('page::admin.order') }}</th>
                    <th class="text-center">{{ trans('page::admin.name_page') }}</th>
                    <th class="text-center">{{ trans('page::admin.status_page') }}</th>
                    <th class="text-center">{{ trans('page::admin.action_page') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pages as $page)
                <tr>
                    <td class="text-center">
                        <span style="display:none;">{{ $page['order'] }}</span>
                        <select data-min="{{ $minOrder }}" data-max="{{ $maxOrder }}" data-order="{{ $page['order'] }}"
                            data-id="{{ $page['id'] }}" class="form-control changOrderPage"></select>
                    </td>
                    <td><a target="_blank" {{-- href="{{ route('executeSlug',$page['slug']) }}"></a> --}}
                        <strong>{{ $page['title'] }}</strong>
                    </td>
                    <td class="text-center">
                        <div class="form-check form-check-switchery form-check-switchery-sm">
                            <label class="form-check-label">
                                <input data-id="{{ $page['id'] }}" type="checkbox" class="form-input-switchery"
                                    {{ $page['status'] ? 'checked' : '' }}>
                            </label>
                        </div>
                    </td>
                    <td class="text-center">
                        <a href="{{ route('page.admin.edit', $page['id']) }}" class="text-warning mr-2"
                            data-popup="tooltip" title="{{ trans('page::admin.edit') }}"><i class="fa fa-edit"></i></a>
                        <a href="javascript:;" onclick="askToDeletePage(this);return false;"
                            data-href="{{ route('page.admin.delete', $page['id']) }}" class="text-danger"
                            data-popup="tooltip" title="{{ trans('page::admin.delete') }}"><i
                                class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
    <div class="card-body">
        <div class="alert alert-info">
            {{ trans('page::admin.datayet') }}
        </div>
    </div>
    @endif
</div>
@endsection
@section('custom_js')
<script>
    function askToDeletePage(element) {
        if (confirm('{{ trans("page::admin.asktodel") }}')) {
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
                sInfo:'{{ trans("page::admin.showing") }} _START_ {{ trans("page::admin.to") }} _END_ {{ trans("page::admin.of") }} _TOTAL_ {{ trans("page::admin.entries") }}',
                search: '<span>{{ trans("page::admin.search") }}:</span> _INPUT_',
                searchPlaceholder: '{{ trans("page::admin.search_plahoder") }}...',
                lengthMenu: '<span>{{ trans("page::admin.show") }}:</span> _MENU_',
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
