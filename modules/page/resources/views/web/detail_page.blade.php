@extends('web::layouts.main')
@section('page_content')
<nav aria-label="breadcrumb" class="text-center">
    <div id="breadcrumb">
        <h1>{{ $page['title'] }}</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('index') }}">Trang chủ - Hồ sơ năng lực</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $page['title'] }}</li>
        </ol>
    </div>
</nav>
<main id="main">
    <div id="content" role="main" class="content-area">
        <div class="container">
            <section id="contact" class="pb-5">
                {!! $page['content'] !!}
            </section>
        </div>
    </div>
</main>
@endsection
