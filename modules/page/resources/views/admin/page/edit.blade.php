@extends('core::theme.layouts.default')
@section('page_content')
<div class="p-3">
    <form action="{{ route('page.admin.edit', $page['id']) }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $page['id'] }}">
        <div class="row ml-0 mr-0">
            <div class="col-md-8 p-0" style="border-right: 1px solid #ddd">
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3"><strong>{{ trans('page::admin.title') }}</strong> <sup
                                class="text-danger">(*)</sup></label>
                        <div class="col-lg-9">
                            <input id="txtTitle" name="title" value="{{ old('title', $page['title']) }}" type="text"
                                class="form-control" placeholder="{{ trans('page::admin.title_pla') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3"><strong>{{ trans('page::admin.slug') }}</strong>
                            <sup class="text-danger">(*)</sup></label>
                        <div class="col-lg-9">
                            <div class="input-group">
                                <input placeholder="{{ trans('page::admin.slug_slug') }}" id="txtSlug" type="text"
                                    class="form-control" name="slug" value="{{ old('slug', $page['slug']) }}">
                                <div class="input-group-prepend mr-0">
                                    <a href="javascript:;" onclick="get_slug_page('#txtTitle', '#txtSlug');"
                                        class="btn btn-dark btn-sm"><em class="fa fa-sync"></em></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label
                            class="col-form-label col-lg-3"><strong>{{ trans('page::admin.illustration') }}</strong></label>
                        <div class="col-lg-9">
                            <div class="input-group areaBrowserFile">
                                <input placeholder="{{ trans('page::admin.illustration_pla') }}" readonly type="text"
                                    id="page-image" class="form-control" name="image"
                                    value="{{ old('image', $page['image']) }}">
                                <div class="input-group-prepend mr-0">
                                    <button class="btn btn-light btn-sm btn-remove-file text-danger" type="button"><i
                                            class="fa fa-times"></i></button>
                                    <button class="btn btn-dark btn-sm btn-choose-file" data-id="page-image"
                                        type="button"><i class="fa fa-image mr-1"></i>
                                        {{ trans('page::admin.illustration_pla') }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label
                            class="col-form-label col-lg-3"><strong>{{ trans('page::admin.description') }}</strong></label>
                        <div class="col-lg-9">
                            <textarea name="description" rows="4" class="form-control"
                                placeholder="{{ trans('page::admin.description_pla') }}">{{ old('description', $page['description']) }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label
                            class="col-form-label col-lg-12"><strong>{{ trans('page::admin.content_detail') }}</strong>
                            <sup class="text-danger">(*)</sup></label>
                        <div class="col-lg-12">
                            <textarea id="content" name="content" rows="3"
                                class="form-control">{{ old('content', $page['content']) }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-0">
                <div class="card-body">
                    <div class="form-group row">
                        <label
                            class="col-form-label col-lg-3"><strong>{{ trans('page::admin.status_page') }}</strong></label>
                        <div class="col-lg-9">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <div class="uniform-choice">
                                        <div class="uniform-choice">
                                            <input name="status" type="radio" class="form-check-input-styled"
                                                {{ old('status', $page['status']) == 1 ? 'checked' : '' }} value="1">
                                        </div>
                                    </div>
                                    <span class="text-success">{{ trans('page::admin.show') }}</span>
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <div class="uniform-choice">
                                        <div class="uniform-choice">
                                            <input name="status" type="radio" class="form-check-input-styled"
                                                {{ old('status', $page['status']) == 0 ? 'checked' : '' }} value="0">
                                        </div>
                                    </div>
                                    <span class="text-danger">{{ trans('page::admin.hidden') }}</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <a data-toggle="collapse" class="text-default collapsed" href="#collapsible-seo"
                        aria-expanded="true">
                        <h6><strong><i class="fab fa-google mr-2"></i>{{ trans('page::admin.seo_conf') }}</strong></h6>
                    </a>
                    <div id="collapsible-seo" class="collapse show">
                        <div class="form-group">
                            <label><strong>{{ trans('page::admin.seo_title') }}</strong></label>
                            <input name="seo_title" type="text" class="form-control"
                                placeholder="{{ trans('page::admin.seo_title_pla') }}"
                                value="{{ old('seo_title', $page['seo_title']) }}">
                        </div>
                        <div class="form-group">
                            <label><strong>{{ trans('page::admin.seo_des') }}</strong></label>
                            <input name="seo_description" type="text" class="form-control"
                                placeholder="{{ trans('page::admin.seo_des_pla') }}"
                                value="{{ old('seo_description', $page['seo_description']) }}">
                        </div>
                        <div class="form-group">
                            <label><strong>{{ trans('page::admin.seo_key') }}</strong></label>
                            <input name="seo_keywords" type="text" class="form-control"
                                placeholder="{{ trans('page::admin.seo_key_pla') }}"
                                value="{{ old('seo_keywords', $page['seo_keywords']) }}">
                        </div>
                        <div class="form-group">
                            <label><strong>{{ trans('page::admin.seo_img') }}</strong></label>
                            <div class="input-group areaBrowserFile">
                                <input placeholder="{{ trans('page::admin.seo_img_pla') }}" readonly type="text"
                                    id="seo-image" class="form-control" name="seo_image"
                                    value="{{ old('seo_image', $page['seo_image']) }}">
                                <div class="input-group-prepend mr-0">
                                    <button class="btn btn-light btn-sm btn-remove-file text-danger" type="button"><i
                                            class="fa fa-times"></i></button>
                                    <button class="btn btn-dark btn-sm btn-choose-file" data-id="seo-image"
                                        type="button"><i class="fa fa-image mr-1"></i>
                                        {{ trans('page::admin.seo_img_pla') }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr>
        <div class="text-center mb-5">
            <a href="{{ route('page.admin.list') }}" class="btn btn-dark btn-sm">{{ trans('page::admin.cancel') }}</a>
            <button type="submit" class="btn btn-info btn-sm">{{ trans('page::admin.save') }}</button>
        </div>
    </form>
</div>
@endsection
@section('custom_js')
<script type="text/javascript" src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
    var num_item = {{ (isset($menu_data) && is_array($menu_data)) ? count($menu_data) : 0 }};
    function add_new_item()
    {
        var html = '<div class="form-group row">' +
                    '<div class="col-lg-5"><input placeholder="Tiêu đề" type="text" name="menu_rights['+num_item+'][title]" class="form-control"></div>'+
                    '<div class="col-lg-6"><input placeholder="Liên kết" type="text" name="menu_rights['+num_item+'][link]" class="form-control"></div>'+
                    '<div class="col-lg-1"><a href="javascript:;" class="text-danger" onclick="remove_item(this);"><i class="fa fa-trash"></i></a></div>' +
                    '</div>';
        $('#listMenuItem').append(html);
        num_item++;
    }
    function remove_item(el)
    {
        $(el).parent().parent().remove();
    }

    $(document).ready(function(){
        CKEDITOR.replace('content',{
            language: 'vi',
            height: 400,
            filebrowserBrowseUrl: '/file-manager/ckeditor'
        });
    });

    function get_slug_page(elTitle, elSlug) {
    $.ajax({
            type: "post",
            url: "{{ route('get-slug-page') }}",
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
