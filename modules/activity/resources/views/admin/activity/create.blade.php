@extends('core::theme.layouts.default')
@section('page_content')
<div class="p-3">
    <form action="{{ route('activity.admin.create') }}" method="post">
        {{ csrf_field() }}
        <div class="row ml-0 mr-0">
            <div class="col-md-8 p-0" style="border-right: 1px solid #ddd">
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3"><strong>{{ trans('page::admin.title') }}</strong> <sup class="text-danger">(*)</sup></label>
                        <div class="col-lg-9">
                            <input id="txtTitle" name="title" value="{{ isset($data['oldActivity']->title) ? old('title', $data['oldActivity']->title) : old('title') }}" type="text" class="form-control" placeholder="{{ trans('page::admin.title_pla') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label"><strong>{{ trans('page::admin.slug') }}</strong> <sup class="text-danger">(*)</sup></label>
                        <div class="col-lg-9">
                            <div class="input-group">
                                <input placeholder="{{ trans('page::admin.slug_pla') }}" type="text" class="form-control" name="link" value="{{ isset( $data['oldActivity']->link) ? old('link',  $data['oldActivity']->link) : old('link') }}" {!! isset( $data['oldActivity']->link) ? 'readonly' : '' !!}>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3"><strong>{{ trans('page::admin.illustration') }}</strong></label>
                        <div class="col-lg-9">
                            <div class="input-group areaBrowserFile">
                                <input placeholder="{{ trans('page::admin.illustration_pla') }}" readonly type="text" id="page-image" class="form-control" name="image" value="{{ isset( $data['oldActivity']->image) ? old('image',  $data['oldActivity']->image) : old('image') }}">
                                <div class="input-group-prepend mr-0">
                                    <button class="btn btn-light btn-sm btn-remove-file text-danger" type="button"><i class="fa fa-times"></i></button>
                                    <button class="btn btn-dark btn-sm btn-choose-file" data-id="page-image" type="button"><i class="fa fa-image mr-1"></i>
                                        {{ trans('page::admin.illustration_pla') }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3"><strong>{{ trans('page::admin.description') }}</strong></label>
                        <div class="col-lg-9">
                            <textarea name="description" rows="4" class="form-control" placeholder="{{ trans('page::admin.description_pla') }}">{{ isset( $data['oldActivity']->description) ? old('description',  $data['oldActivity']->description) : old('description') }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-md-4 p-0">
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3"><strong>{{ trans('page::admin.locale') }}</strong> <sup class="text-danger">(*)</sup></label>
                        <div class="col-lg-9">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <div class="uniform-choice">
                                        <div class="uniform-choice">
                                            <input name="locale" type="radio" class="form-check-input-styled" {{ isset($data['lang']) && $data['lang'] =='vi' ? 'checked' : '' }} value="vi">
                                        </div>
                                    </div>
                                    <img src="{{ asset('assets/admin/images/vn.svg') }}" alt="" width="20" height="20" srcset="">
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <div class="uniform-choice">
                                        <div class="uniform-choice">
                                            <input name="locale" type="radio" class="form-check-input-styled" {{ isset($data['lang']) && $data['lang'] =='en' ? 'checked' : '' }} value="en">
                                        </div>
                                    </div>
                                    <span class="text-danger"><img src="{{ asset('assets/admin/images/en.svg') }}" alt="" width="20" height="20" srcset=""></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3"><strong>{{ trans('page::admin.status_page') }}</strong></label>
                        <div class="col-lg-9">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <div class="uniform-choice">
                                        <div class="uniform-choice">
                                            <input name="status" type="radio" class="form-check-input-styled" {{ old('status', 1) == 1 ? 'checked' : '' }} value="1">
                                        </div>
                                    </div>
                                    <span class="text-success">{{ trans('page::admin.show') }}</span>
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <div class="uniform-choice">
                                        <div class="uniform-choice">
                                            <input name="status" type="radio" class="form-check-input-styled" {{ old('status', 1) == 0 ? 'checked' : '' }} value="0">
                                        </div>
                                    </div>
                                    <span class="text-danger">{{ trans('page::admin.hidden') }}</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="text-center mb-5">
                        <a href="{{ route('page.admin.list') }}" class="btn btn-dark btn-sm">{{ trans('page::admin.cancel') }}</a>
                        <button type="submit" class="btn btn-info btn-sm">{{ trans('page::admin.add_page') }}</button>
                    </div>
                </div>
            </div> --}}
        </div>
    </form>
</div>
@endsection
@section('custom_js')
<script type="text/javascript" src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
    $(document).ready(function(){
        CKEDITOR.replace('content',{
            language: 'vi',
            height: 800,
            filebrowserBrowseUrl: '/file-manager/ckeditor'
        });
    });
    function get_slug(elTitle, elSlug) {
    $.ajax({
        type: "post",
        url: "{{ route('get-slug') }}",
        data: {
            _token: _token,
            plainText: $(elTitle).val()
        },
        dataType: "JSON",
        success: function (data) {
            $(elSlug).val(data);
        }
    });
}

</script>
@endsection