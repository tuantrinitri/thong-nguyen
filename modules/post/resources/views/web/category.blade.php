@extends('web::layouts.home')
@section('page_content')
    <section class="banner banner-inner parallax" data-stellar-background-ratio="0.5" id="blog-fullwidth">
        <div class="banner-text">
            <div class="center-text">
                <div class="container">
                    <h1>{{ $category->title }}</h1>
                    <strong class="subtitle">day la subtitle!</strong>
                    <!-- breadcrumb -->
                    <nav class="breadcrumbs">
                        <ul>
                            <li><a href="#">TRANG CHỦ</a></li>
                            <li><span>TIN TỨC</span></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- main container -->
    <main id="main">

        <div class="common-spacing blog-full-width">
            <div class="container">
                <div>
                    <div>
                        <div class="blog-holder">
                            <!-- blog list -->
                            <div class="blog-list">
                                @foreach ($posts as $post)
                                    {{-- @dd($post['image']) --}}
                                    <article class="article blog-article">
                                        <div class="img-wrap">

                                            <a href="#"><img src="{{ asset($post['image']) }}" height="480" width="870"
                                                    alt="image description"></a>
                                        </div>
                                        <div class="description">
                                            <header class="heading">

                                                <h3><a
                                                        href="{{ route('web.post.post', $post->slug) }}">{{ $post->title }}</a>
                                                </h3>
                                                <time class="info-day" datetime="2011-01-12">Aug 11</time>
                                            </header>
                                            <p>{{ Str::limit($post->description, 300) }}</p>
                                            <footer class="meta">

                                                <div class="rate-info">
                                                    Post by <a href="#">Ian Lee</a>
                                                </div>

                                            </footer>
                                            <div class="link-view">
                                                <a href="#">Xem thêm</a>
                                            </div>
                                        </div>
                                    </article>
                                @endforeach
                            </div>
                        </div>
                        <!-- pagination wrap -->
                        <nav class="pagination-wrap bg-gray">
                            <div class="btn-prev">
                                <a href="#" aria-label="Previous">
                                    <span class="icon-angle-right"></span>
                                </a>
                            </div>
                            <ul class="pagination">
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="active"><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li>...</li>
                                <li><a href="#">7</a></li>
                            </ul>
                            <div class="btn-next">
                                <a href="#" aria-label="Previous">
                                    <span class="icon-angle-right"></span>
                                </a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
