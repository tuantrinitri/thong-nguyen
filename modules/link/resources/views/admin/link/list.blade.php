@extends('core::theme.layouts.default')
@section('page_content')
<div class="page-header-content header-elements-md-inline">
    <div class="page-title d-flex">
        <h4><i class="fas fa-link mr-2"></i> <span class="font-weight-semibold">Liên kết</span> - Danh sách</h4>
        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
    </div>
    <div class="header-elements d-none">
        <div class="d-flex justify-content-center">
            <a href="{{route('link.admin.create')}}" class="btn btn-primary btn-sm">Thêm liên kết</a>
        </div>
    </div>
</div>
{{-- <div class="card-body">
    <form method="GET">
        <div class="row">
            <div class="col-sm-12 col-md-9 form-group">
                <div class="form-group mb-0">
                    <input type="text" placeholder="Nhập nội dung tìm kiếm" class="form-control" name="title" id="" aria-describedby="helpId" value="{{ $_GET['title'] ?? '' }}">
</div>
</div>
<div class="col-sm-12 col-md-3">
    <div class="row">
        <div class="col-6">
            <button type="submit" class="btn btn-info w-100"><i class="fas fa-filter mr-2"></i>Lọc</button>
        </div>
        <div class="col-6">
            <a href="{{route('link.admin.index')}}" class="btn btn-danger w-100" id="button-search-document"><i class="icon-trash mr-2"></i>Xóa</a>
        </div>
    </div>
</div>
</div>
</form>

</div> --}}
@if (isset($links) && count($links) > 0)
<div class="table-responsive">
    <table class="table datatable-basic">
        <thead class="bg-light">
            <tr>
                <th class="text-center">Tiêu đề</th>
                <th class="text-center">Danh mục</th>
                <th class="text-center">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($links as $link)
            <tr>
                <td class="text-center">
                    <a data-toggle="tooltip" data-placement="right" title="{{ $link['title'] }}" target="_blank" href="{{ $link['link'] }}">
                        <strong>
                            {{Str::limit($link['title'], 45)}}
                        </strong>
                    </a>
                </td>
                <td class="text-center">
                    @if($link['type']==1)
                    {{'Liên kết video'}}
                    @else
                    {{'Liên kết nhanh'}}
                    @endif
                </td>
                <td class="text-center">
                    <a href="{{ route('link.admin.edit', $link['id']) }}" class="text-warning mr-2" data-popup="tooltip" title="Sửa"><i class="fa fa-edit"></i></a>
                    <a href="javascript:;" onclick="askDel(this);return false;" data-href="{{ route('link.admin.delete', $link['id']) }}" class="text-danger" data-popup="tooltip" title="Xóa"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @if ($links->links('vendor.pagination.bootstrap-4'))
    <div class="cms-paginate float-right mr-3">
        {{ $links->links('vendor.pagination.bootstrap-4') }}
    </div>
    @endif
</div>
@else
<div class="card-body">
    <div class="alert alert-info">
        Chưa có dữ liệu
    </div>
</div>
@endif
@endsection