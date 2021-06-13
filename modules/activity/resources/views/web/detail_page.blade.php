@extends('web::layouts.main_right')
@section('page_content')
<nav class="nav-breadcrumb pt-3">
    <ol class="breadcrumb">
        <li class="breadcrumb-item ">
            <a href="{{ route('index') }}">{{ trans('web::common.home') }}</a>
        </li>
        <li class="breadcrumb-item active">
            <span>{{ Str::words($page->translateOrDefault('vi', true)->title, 30, '...') }}</span>
        </li>
    </ol>
    <div class="bdtop1"></div>
    <div class="bdtop2"></div>
</nav>
<section class="page" id="detail">
    {!! $page->translateOrDefault('vi', true)->content !!}
</section>
@endsection