@extends('core::theme.layouts.default')
@section('page_header')
<div class="page-header-content header-elements-md-inline">
    <div class="page-title d-flex">
        <h4><i class="fa fa-users mr-2"></i> <span class="font-weight-semibold">Tài khoản</span> - Thêm</h4>
    </div>
</div>
@endsection
@section('page_content')
<form action="{{ route('user.admin.add') }}" method="post">
    {{ csrf_field() }}
    <ul class="nav nav-tabs nav-tabs-highlight mb-0">
        <li class="nav-item"><a href="#tab-account" class="nav-link active" data-toggle="tab">TÀI KHOẢN</a></li>
        <li class="nav-item"><a href="#tab-information" class="nav-link" data-toggle="tab">THÔNG TIN</a></li>
        <li class="nav-item"><a href="#tab-roleandpermission" class="nav-link" data-toggle="tab">VAI TRÒ - QUYỀN HẠN</a>
        </li>
    </ul>

    <div class="tab-content">
        <div class="tab-pane fadeshow active" id="tab-account">
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-form-label col-lg-3"><strong>Email</strong> <sup class="text-danger">(*)</sup></label>
                    <div class="col-lg-9">
                        <input autocomplete="new-password" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Nhập email">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-lg-3"><strong>Mật khẩu</strong> <sup class="text-danger">(*)</sup></label>
                    <div class="col-lg-9">
                        <input autocomplete="new-password" type="password" class="form-control input-inline" name="password" value="{{ old('password') }}" placeholder="Nhập mật khẩu">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-lg-3"><strong>Nhập lại mật khẩu</strong> <sup class="text-danger">(*)</sup></label>
                    <div class="col-lg-9">
                        <input autocomplete="new-password" type="password" class="form-control" name="repassword" value="{{ old('repassword') }}" placeholder="Nhập lại mật khẩu">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-lg-3"><strong>Tên hiển thị</strong></label>
                    <div class="col-lg-9">
                        <input autocomplete="new-password" type="text" class="form-control" name="display_name" value="{{ old('display_name') }}" placeholder="Nhập tên hiển thị">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-lg-3"><strong>Trạng thái</strong></label>
                    <div class="col-lg-9">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <div class="uniform-choice">
                                    <div class="uniform-choice">
                                        <input name="status" type="radio" class="form-check-input-styled" {{ old('status', 1) == 1 ? 'checked' : '' }} value="1">
                                    </div>
                                </div>
                                <span class="text-success">Hoạt động</span>
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <div class="uniform-choice">
                                    <div class="uniform-choice">
                                        <input name="status" type="radio" class="form-check-input-styled" {{ old('status', 1) == 0 ? 'checked' : '' }} value="0">
                                    </div>
                                </div>
                                <span class="text-danger">Tạm khóa</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fadeshow" id="tab-information">
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-form-label col-lg-3">
                        <strong>Phòng ban</strong>
                    </label>
                    <div class="col-lg-9">
                        <em class="text-danger">Nếu không phải là tài khoản cho nhân viên, vui lòng không được chọn ô
                            này.</em>
                        <select name="info[department_id]" class="form-control select2">
                            <option value="">Không chọn</option>
                            @foreach ($departments as $department)
                            <option value="{{ $department['id'] }}" {{ old('info.department_id') == $department['id'] ? 'selected' : '' }}>
                                {{ $department['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-lg-3"><strong>Họ tên</strong></label>
                    <div class="col-lg-9">
                        <input autocomplete="new-password" type="text" class=" form-control" name="info[fullname]" value="{{ old('info.fullname') }}" placeholder="Nhập họ tên">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-lg-3"><strong>Điện thoại</strong></label>
                    <div class="col-lg-9">
                        <input autocomplete="new-password" type="text" class=" form-control" name="info[phone]" value="{{ old('info.phone') }}" placeholder="Nhập điện thoại">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-lg-3"><strong>Giới tính</strong></label>
                    <div class="col-lg-9">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <div class="uniform-choice">
                                    <div class="uniform-choice">
                                        <input name="info[gender]" type="radio" class="form-check-input-styled" {{ old('info.gender', 1) == 1 ? 'checked' : '' }} value="1">
                                    </div>
                                </div>
                                Nam
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <div class="uniform-choice">
                                    <div class="uniform-choice">
                                        <input name="info[gender]" type="radio" class="form-check-input-styled" {{ old('info.gender', 1) == 2 ? 'checked' : '' }} value="2">
                                    </div>
                                </div>
                                Nữ
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-lg-3"><strong>Địa chỉ</strong></label>
                    <div class="col-lg-9">
                        <input autocomplete="new-password" type="text" class=" form-control" name="info[address]" value="{{ old('info.address') }}" placeholder="Nhập địa chỉ">
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fadeshow p-2" id="tab-roleandpermission">
            <div class="col-12">
                <div class="form-group">
                    <label class="mt-2">SUPER ADMIN</label>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input id="isSuperAdmin" name="is_superadmin" value="1" type="checkbox" class="form-check-input-styled" {{ old('is_superadmin', 0) == 1 ? 'checked' : '' }}>
                            Đánh dấu là tài khoản <strong>Super Admin</strong>
                        </label>
                    </div>
                </div>
            </div>
            <div id="selectRoleArea">
                <div class="col-12">
                    <div class="form-group">
                        <label class="mt-2">CHỌN VAI TRÒ</label>
                        <select name="roles[]" id="selectRole" multiple="multiple" class="form-control select2" onchange="autoCheckPermissions();">
                            @foreach ($roles as $role)
                            <option value="{{ $role['id'] }}" {{ in_array($role['id'], old('roles', [])) ? 'selected' : '' }}>
                                {{ $role['title'] ? $role['title'] : $role['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <h5 class="pt-3 text-center">CHỌN QUYỀN HẠN</h5>
                <div class="col-12 list_permissions">
                    @foreach (get_list_permissions() as $mod)
                    <div class="mb-0 rounded-0">
                        <h6 class="card-title">
                            <a data-toggle="collapse" class="text-default collapsed" href="#collapsible-{{ $mod['module'] }}" aria-expanded="true"><strong><i class="{{ $mod['icon'] }}"></i>&nbsp;&nbsp;{{ $mod['title'] }}</strong></a>
                        </h6>
                        <div id="collapsible-{{ $mod['module'] }}" class="collapse show">
                            <div class="row">
                                @foreach ($mod['permissions'] as $permission)
                                <div class="col-md-3 mb-2">
                                    <div class="form-check">
                                        <label class="form-check-label item_permission">
                                            <input id="permission_{{ $permission['id'] }}" name="permissions[]" value="{{ $permission['name'] }}" type="checkbox" class="checkbox_permission form-check-input-styled">
                                            <strong>{{ trans($permission['title']) }}</strong>
                                            <br>
                                            <em><small>{{ trans($permission['description']) }}</small></em>
                                        </label>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="text-center mb-3">
        <a href="{{ route('user.admin.list') }}" class="btn btn-dark">Hủy bỏ</a>
        <button type="submit" class="btn btn-info">Thêm tài khoản</button>
    </div>
</form>
@endsection
@section('custom_js')
<script src="{{ asset('assets/select2/dist/js/select2.min.js') }}"></script>
<script>
    $('.select2').select2({
        minimumResultsForSearch: Infinity
    });
    $(document).ready(function(){
        if (typeof $('#isSuperAdmin').attr('checked') !== typeof undefined && $('#isSuperAdmin').attr('checked') !== false) {
            $('#selectRoleArea').hide();
        } else {
            $('#selectRoleArea').show();
        }
        $('#uniform-isSuperAdmin').click(function(e){
            if ($('#uniform-isSuperAdmin > span').hasClass('checked')) {
                $('#selectRoleArea').slideDown(200);
            } else {
                $('#selectRoleArea').slideUp(200);
            }
        });
        autoCheckPermissions();
        var old_permissions = {!! json_encode(old('permissions', [])) !!};
        old_permissions.forEach(function(e){
            $('input[value="' + e + '"]').prop("checked", true);
            $('input[value="' + e + '"]').parent().parent().parent().addClass('selected');
        })
        $.uniform.update();
    })

    var list_roles = {!! $rolesWithPermissions !!};
    function autoCheckPermissions()
    {
        var check_permissions = [];
        var selectedRoles = $('#selectRole').val();
        selectedRoles.forEach(function(e){
            check_permissions = check_permissions.concat(list_roles[e]).unique();
        });
        $(document).find('.checkbox_permission[disabled="disabled"]').each(function(i, el){
            $(el).prop('checked', false);
            $(el).removeAttr("disabled");
            $(el).parent().parent().parent().removeClass('selected');
        });
        check_permissions.forEach(function(e){
            $('#permission_' + e).prop("checked", true);
            $('#permission_' + e).attr("disabled", "disabled");
            $('#permission_' + e).parent().parent().parent().addClass('selected');
        });
        $.uniform.update();
    }
</script>
@endsection