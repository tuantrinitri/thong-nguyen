@extends('web::layouts.home')
@section('page_content')
  <!-- main banner -->      
      <section class="banner banner-inner parallax" data-stellar-background-ratio="0.5" id="blog-single">
        <div class="banner-text">
          <div class="center-text">
            <div class="container">
              <h1>{{ $post->category->title }}</h1>
              <strong class="subtitle">{{ $post->category->description }}</strong>
              <!-- breadcrumb -->
              <nav class="breadcrumbs">
                <ul>
                  <li><a href="{{route('web.index')}}">HOME</a></li>
                  <li><a href="{{ route('web.post.categories',$post->category['slug']) }}">{{ $post->category->title }}</a></li>
                  <li class="active">{{ $post['title'] }}</li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </section>
      <!-- main container -->
      <main id="main">
        <div class="content-with-sidebar common-spacing content-left">
          <div class="container">
            
              <div id="content">
                <div class="blog-holder no-pagination">
                  <!-- blog single -->
                  <article class="blog-single">
                    <div class="img-wrap">
                      <img src="{{ asset('') }}" height="480" width="870" alt="image description" />
                    </div>
                    <div class="description">
                      <h1 class="content-main-heading">
                        {{ $post->title }}
                      </h1>
                    
                      {!! $post->content !!}
                      
                      <footer class="meta-article">
                        <span class="star-rating">
                          <span><span class="icon-star"></span></span>
                          <span><span class="icon-star"></span></span>
                          <span><span class="icon-star"></span></span>
                          <span><span class="icon-star"></span></span>
                          <span class="disable"><span class="icon-star"></span></span>
                        </span>
                        <div class="footer-sub">
                          <div class="rate-info">
                            Post by <a href="#">{{ $post->author }}</a>
                          </div>
                        
                        </div>
                     
                      </footer>
                    </div>
                    <div class="header-box">
                      <a href="#" class="link-right">75 Commenting</a>
                      <span class="rate-left">
                        <strong class="title">Overall Rating</strong>
                        <span class="star-rating">
                          <span><span class="icon-star"></span></span>
                          <span><span class="icon-star"></span></span>
                          <span><span class="icon-star"></span></span>
                          <span><span class="icon-star"></span></span>
                          <span class="disable"><span class="icon-star"></span></span>
                        </span>
                        <span class="value">4.7/5</span>
                      </span>
                    </div>
                    <!-- comments -->
                    <div class="comments">
                      <div class="comment-slot">
                        <div class="thumb">
                          <a href="#"><img src="img/blog/thumb-07.jpg" height="50" width="50"
                              alt="image description" /></a>
                        </div>
                        <div class="text">
                          <header class="comment-head">
                            <div class="left">
                              <strong class="name">
                                <a href="#">Cleona Torez - Spain</a>
                              </strong>
                              <div class="meta">
                                Commented on
                                <time datetime="2016-07-19">14/1/2016</time>
                              </div>
                            </div>
                            <div class="right">
                              <div class="star-rating">
                                <span><span class="icon-star"></span></span>
                                <span><span class="icon-star"></span></span>
                                <span><span class="icon-star"></span></span>
                                <span><span class="icon-star"></span></span>
                                <span class="disable"><span class="icon-star"></span></span>
                              </div>
                              <span class="value">4.7/5</span>
                            </div>
                          </header>
                          <div class="comment-detail">
                            <p>
                              This is Photoshop's version of Lorem Ipsum.
                              Proin gravida nibh vel velit auctor aliquet.
                              Aenean sollicitudin, lorem quis bibendum auctor,
                              nisi elit consequat ipsum, nec sagittis sem nibh
                              id elit. Duis sed odio sit amet nibh vulputate
                              cursus a sit amet mauris.
                            </p>
                            <div class="link-holder">
                              <a href="#">Read Full Review</a>
                            </div>
                          </div>
                        </div>
                        <!-- comemmts reply -->
                        <div class="comments reply">
                          <div class="comment-slot">
                            <div class="thumb">
                              <a href="#"><img src="img/blog/thumb-08.jpg" height="50" width="50"
                                  alt="image description" /></a>
                            </div>
                            <div class="text">
                              <header class="comment-head">
                                <div class="left">
                                  <strong class="name">
                                    <a href="#">Cleona Torez - Spain</a>
                                  </strong>
                                  <div class="meta">
                                    Commented on
                                    <time datetime="2016-07-19">14/1/2016</time>
                                  </div>
                                </div>
                                <div class="right">
                                  <div class="star-rating">
                                    <span><span class="icon-star"></span></span>
                                    <span><span class="icon-star"></span></span>
                                    <span><span class="icon-star"></span></span>
                                    <span><span class="icon-star"></span></span>
                                    <span class="disable"><span class="icon-star"></span></span>
                                  </div>
                                  <span class="value">4.7/5</span>
                                </div>
                              </header>
                              <div class="comment-detail">
                                <p>
                                  This is Photoshop's version of Lorem Ipsum.
                                  Proin gravida nibh vel velit auctor aliquet.
                                  Aenean sollicitudin, lorem quis bibendum
                                  auctor, nisi elit consequat ipsum, nec
                                  sagittis sem nibh id elit. Duis sed odio sit
                                  amet nibh vulputate cursus a sit amet
                                  mauris.
                                </p>
                                <div class="link-holder">
                                  <a href="#">Read Full Review</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="comment-slot">
                            <div class="thumb">
                              <a href="#"><img src="img/blog/thumb-09.jpg" height="50" width="50"
                                  alt="image description" /></a>
                            </div>
                            <div class="text">
                              <header class="comment-head">
                                <div class="left">
                                  <strong class="name">
                                    <a href="#">Cleona Torez - Spain</a>
                                  </strong>
                                  <div class="meta">
                                    Commented on
                                    <time datetime="2016-07-19">14/1/2016</time>
                                  </div>
                                </div>
                                <div class="right">
                                  <div class="star-rating">
                                    <span><span class="icon-star"></span></span>
                                    <span><span class="icon-star"></span></span>
                                    <span><span class="icon-star"></span></span>
                                    <span><span class="icon-star"></span></span>
                                    <span class="disable"><span class="icon-star"></span></span>
                                  </div>
                                  <span class="value">4.7/5</span>
                                </div>
                              </header>
                              <div class="comment-detail">
                                <p>
                                  This is Photoshop's version of Lorem Ipsum.
                                  Proin gravida nibh vel velit auctor aliquet.
                                  Aenean sollicitudin, lorem quis bibendum
                                  auctor, nisi elit consequat ipsum, nec
                                  sagittis sem nibh id elit. Duis sed odio sit
                                  amet nibh vulputate cursus a sit amet
                                  mauris.
                                </p>
                                <div class="link-holder">
                                  <a href="#">Read Full Review</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="link-more">
                        <a href="#">Show More Reviews - 75 Reviews</a>
                      </div>
                    </div>
                    <!-- comment form -->
                    <form action="#" class="comment-form">
                      <fieldset>
                        <h3>LEAVE YOUR COMMENT</h3>
                        <div class="row">
                          <div class="col-sm-6 form-group">
                            <input placeholder="Full Name" type="text" class="form-control" />
                          </div>
                          <div class="col-sm-6 form-group">
                            <input placeholder="Email Address" type="email" class="form-control" />
                          </div>
                          <div class="col-sm-6 form-group form-rate">
                            <input placeholder="Rate Article" type="text" class="form-control" />
                            <div class="star-rating">
                              <span class="disable"><span class="icon-star"></span></span>
                              <span class="disable"><span class="icon-star"></span></span>
                              <span class="disable"><span class="icon-star"></span></span>
                              <span class="disable"><span class="icon-star"></span></span>
                              <span class="disable"><span class="icon-star"></span></span>
                            </div>
                          </div>
                          <div class="col-sm-6 form-group">
                            <input placeholder="Website" type="text" class="form-control" />
                          </div>
                          <div class="col-sm-12 form-group">
                            <textarea placeholder="Your Comment" class="form-control"></textarea>
                          </div>
                          <div class="col-sm-12 btn-holder">
                            <button type="submit" class="btn btn-default">
                              POST COMMENT
                            </button>
                          </div>
                        </div>
                      </fieldset>
                    </form>
                  </article>
                </div>
              </div>
              
            </div>
          </div>
      </main>
@endsection