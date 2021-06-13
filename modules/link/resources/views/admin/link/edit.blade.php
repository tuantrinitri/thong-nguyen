@extends('core::theme.layouts.default')
@section('page_content')
<div class="page-header-content header-elements-md-inline">
    <div class="page-title d-flex">
        <h4><i class="fas fa-link mr-2"></i> <span class="font-weight-semibold">Liên kết</span> - Sửa #{{$link['id']}}</h4>
        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
    </div>
    <div class="header-elements d-none">
        <div class="d-flex justify-content-center">
            <a href="{{route('link.admin.index')}}" class="btn btn-primary btn-sm">Danh sách liên kết</a>
        </div>
    </div>
</div>
<div class="card-body">
    <form action="{{route('link.admin.edit',$link['id'])}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <fieldset class="mb-3">
            <div class="form-group ">
                <label class="col-form-label"><strong>Danh mục</strong> <sup class="text-danger">(*)</sup></label>
                <select class="form-control" name="type" id="categories">
                    <option value="" disabled selected>Chọn danh mục</option>
                    <option {{ old('type', $link['type']) == '1' ? 'selected' : '' }} value='1'>Liên kết video</option>
                    <option {{ old('type',$link['type']) == '0' ? 'selected' : '' }} value='0'>Liên kết nhanh</option>
                </select>
            </div>
            <div class="form-group ">
                <label class="col-form-label"><strong>Tiêu đề</strong> <sup class="text-danger">(*)</sup></label>
                <input placeholder="Nhập tiêu đề" id="txtTitle" type="text" name="title" class="form-control" value="{{ old('title',$link['title']) }}">
            </div>

            <div class="form-group">
                <label class="col-form-label"><strong>Đường dẫn liên kết</strong> <sup class="text-danger">(*)</sup></label>
                <div class="input-group">
                    <input placeholder="Nhập đường dẫn liên kết" id="txtSlug" type="text" class="form-control" name="link" value="{{ old('link',$link['link']) }}">
                </div>
            </div>


            <hr>
        </fieldset>
        <div class="text-center">
            <a href="{{ route('link.admin.index') }}" class="btn btn-dark btn-sm">Hủy bỏ</a>
            <button type="submit" class="btn btn-info btn-sm">Sửa liên kết</button>
        </div>
    </form>
</div>
@endsection