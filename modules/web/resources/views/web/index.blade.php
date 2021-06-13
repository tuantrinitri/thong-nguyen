@extends('web::layouts.home')
@section('custom_css')
@endsection
@section('page_content')
     <div class="banner banner-home">
          <!-- revolution slider starts -->
          <div
            id="rev_slider_279_1_wrapper"
            class="rev_slider_wrapper fullscreen-container"
            data-alias="restaurant-header"
            style="
              margin: 0px auto;
              background-color: #474d4b;
              padding: 0px;
              margin-top: 0px;
              margin-bottom: 0px;
            "
          >
            <div
              id="rev_slider_70_1"
              class="rev_slider fullscreenabanner"
              style="display: none"
              data-version="5.1.4"
            >
              <ul>
                <li
                  class="slider-color-schema-dark"
                  data-index="rs-2"
                  data-transition="fade"
                  data-slotamount="7"
                  data-easein="default"
                  data-easeout="default"
                  data-masterspeed="1000"
                  data-rotate="0"
                  data-saveperformance="off"
                  data-title="Slide"
                  data-description=""
                >
                  <!-- main image for revolution slider -->
                  <img
                    src="{{ asset('assets/web/img/banner/img-01.jpg') }}"
                    alt="image description"
                    data-bgposition="center center"
                    data-kenburns="on"
                    data-duration="30000"
                    data-ease="Linear.easeNone"
                    data-scalestart="100"
                    data-scaleend="120"
                    data-rotatestart="0"
                    data-rotateend="0"
                    data-offsetstart="0 0"
                    data-offsetend="0 0"
                    data-bgparallax="10"
                    class="rev-slidebg"
                    data-bgfit="cover"
                    data-no-retina
                  />

                  <div
                    class="tp-caption tp-resizeme"
                    id="slide-897-layer-7"
                    data-x="['center','center','center','center']"
                    data-hoffset="['0','0','0','0']"
                    data-y="['top','top','middle','middle']"
                    data-voffset="['160','120','-120','-70']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                    data-transform_out="opacity:0;s:300;s:300;"
                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                    data-start="1500"
                    data-splitin="none"
                    data-splitout="none"
                    data-responsive_offset="on"
                    style="
                      z-index: 9;
                      white-space: nowrap;
                      font-size: 60px;
                      line-height: 100px;
                      text-align: center;
                    "
                  >
                    <span class="icon-wildlife"></span>
                  </div>

                  <div
                    class="tp-caption banner-heading-sub tp-resizeme rs-parallaxlevel-0"
                    data-x="['center','center','center','center']"
                    data-hoffset="['0','0','0','0']"
                    data-y="['top','top','middle','middle']"
                    data-voffset="['280','240','10','20']"
                    data-fontsize="['48','48','44','28']"
                    data-lineheight="['85','85','50','50']"
                    data-width="['1200','1000','750','480']"
                    data-height="none"
                    data-whitespace="normal"
                    data-transform_idle="o:1;"
                    data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                    data-mask_in="x:0px;y:0px;"
                    data-mask_out="x:inherit;y:inherit;"
                    data-start="1000"
                    data-splitin="none"
                    data-splitout="none"
                    data-responsive_offset="on"
                    style="
                      z-index: 7;
                      letter-spacing: 0;
                      font-weight: 100;
                      text-align: center;
                      color: #ffffff;
                    "
                  >
                    EXPEDITION OF UNEXPLORED
                  </div>

                  <div
                    class="tp-caption banner-heading-sub tp-resizeme rs-parallaxlevel-10"
                    data-x="['center','center','center','center']"
                    data-hoffset="['0','0','0','0']"
                    data-y="['top','top','middle','middle']"
                    data-voffset="['340','290','70','70']"
                    data-fontsize="['60','60','60','40']"
                    data-lineheight="['110','110','100','60']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;"
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                    data-start="1000"
                    data-splitin="none"
                    data-splitout="none"
                    data-responsive_offset="on"
                    style="
                      z-index: 8;
                      padding-right: 10px;
                      text-indent: 5px;
                      font-weight: 900;
                      white-space: nowrap;
                    "
                  >
                    TERRITORY
                  </div>

                  <div
                    class="tp-caption rev-btn rs-parallaxlevel-10"
                    id="slide-163-layer-2"
                    data-x="['center','center','center','center']"
                    data-hoffset="['0','0','0','0']"
                    data-y="['middle','middle','middle','middle']"
                    data-voffset="['150','160','180','150']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power3.easeOut;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                    data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                    data-mask_out="x:inherit;y:inherit;"
                    data-start="1250"
                    data-splitin="none"
                    data-splitout="none"
                    data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-164","delay":""}]'
                    data-responsive_offset="on"
                  >
                    <a class="btn btn-banner" href="#">PURCHASE</a>
                  </div>
                </li>

                <li
                  data-index="rs-81"
                  data-transition="slideoverup"
                  data-slotamount="7"
                  data-easein="default"
                  data-easeout="default"
                  data-masterspeed="1000"
                  data-rotate="0"
                  data-saveperformance="off"
                  data-title="The Menu"
                  data-description=""
                >
                  <!-- main image for revolution slide -->
                  <img
                    alt="image description"
                    src="{{ asset('assets/web/img/banner/img-01.jpg') }}"
                    data-lazyload="{{ asset('assets/web/img/banner/img-02.jpg') }}"
                    data-bgposition="right center"
                    data-kenburns="on"
                    data-duration="30000"
                    data-ease="Power1.easeOut"
                    data-scalestart="110"
                    data-scaleend="100"
                    data-rotatestart="0"
                    data-rotateend="0"
                    data-offsetstart="0 0"
                    data-offsetend="0 0"
                    class="rev-slidebg"
                    data-no-retina
                  />

                  <div
                    class="tp-caption tp-resizeme"
                    id="slide-897-layer1-7"
                    data-x="['center','center','center','center']"
                    data-hoffset="['0','0','0','0']"
                    data-y="['top','top','middle','middle']"
                    data-voffset="['160','120','-120','-70']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                    data-transform_out="opacity:0;s:300;s:300;"
                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                    data-start="1500"
                    data-splitin="none"
                    data-splitout="none"
                    data-responsive_offset="on"
                    style="
                      z-index: 9;
                      white-space: nowrap;
                      font-size: 60px;
                      line-height: 100px;
                      text-align: center;
                    "
                  >
                    <span class="icon-hiking-camping"></span>
                  </div>

                  <div
                    class="tp-caption banner-heading-sub tp-resizeme rs-parallaxlevel-0"
                    data-x="['center','center','center','center']"
                    data-hoffset="['0','0','0','0']"
                    data-y="['top','top','middle','middle']"
                    data-voffset="['280','240','10','20']"
                    data-fontsize="['48','48','44','28']"
                    data-lineheight="['85','85','50','50']"
                    data-width="['1200','1000','750','480']"
                    data-height="none"
                    data-whitespace="normal"
                    data-transform_idle="o:1;"
                    data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                    data-mask_in="x:0px;y:0px;"
                    data-mask_out="x:inherit;y:inherit;"
                    data-start="1000"
                    data-splitin="none"
                    data-splitout="none"
                    data-responsive_offset="on"
                    style="
                      z-index: 7;
                      letter-spacing: 0;
                      font-weight: 100;
                      text-align: center;
                      color: #ffffff;
                    "
                  >
                    ADEVENTURE TOUR TEMPLATE
                  </div>

                  <div
                    class="tp-caption tp-resizeme banner-heading-sub rs-parallaxlevel-10"
                    data-x="['center','center','center','center']"
                    data-hoffset="['-80','-80','-80','-60']"
                    data-y="['top','top','middle','middle']"
                    data-voffset="['330','280','60','60']"
                    data-fontsize="['60','60','60','40']"
                    data-lineheight="['110','110','100','60']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;"
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                    data-start="1000"
                    data-splitin="none"
                    data-splitout="none"
                    data-responsive_offset="on"
                    style="
                      z-index: 8;
                      padding-right: 10px;
                      text-indent: 5px;
                      font-weight: 300;
                      font-style: italic;
                      white-space: nowrap;
                      color: ;
                    "
                  >
                    of
                  </div>

                  <div
                    class="tp-caption tp-resizeme banner-heading-sub rs-parallaxlevel-10"
                    data-x="['center','center','center','center']"
                    data-hoffset="['30','30','30','20']"
                    data-y="['top','top','middle','middle']"
                    data-voffset="['330','280','60','60']"
                    data-fontsize="['60','60','60','40']"
                    data-lineheight="['110','110','100','60']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;"
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                    data-start="1000"
                    data-splitin="none"
                    data-splitout="none"
                    data-responsive_offset="on"
                    style="
                      z-index: 8;
                      padding-right: 10px;
                      text-indent: 5px;
                      font-weight: 900;
                      white-space: nowrap;
                    "
                  >
                    2016
                  </div>

                  <div
                    class="tp-caption rev-btn rs-parallaxlevel-10"
                    id="slide-163-layer1-2"
                    data-x="['center','center','center','center']"
                    data-hoffset="['0','0','0','0']"
                    data-y="['middle','middle','middle','middle']"
                    data-voffset="['150','160','180','150']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power3.easeOut;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                    data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                    data-mask_out="x:inherit;y:inherit;"
                    data-start="800"
                    data-splitin="none"
                    data-splitout="none"
                    data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-164","delay":""}]'
                    data-responsive_offset="on"
                  >
                    <a class="btn btn-banner" href="#">PURCHASE</a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="feature-block">
            <div class="holder">
              <ul>
                <li>
                  <a href="#">
                    <span class="ico">
                      <span class="icon-bungee"></span>
                    </span>
                    <span class="info">Bungee Jump</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="ico">
                      <span class="icon-hiking"></span>
                    </span>
                    <span class="info">Hiking Trips</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="ico">
                      <span class="icon-wildlife"></span>
                    </span>
                    <span class="info">Wildlife Safari</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="ico">
                      <span class="icon-peak-climbing"></span>
                    </span>
                    <span class="info">Peak Climbing</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="ico">
                      <span class="icon-mountain-biking"></span>
                    </span>
                    <span class="info">Mount Biking</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="ico">
                      <span class="icon-scuba-diving"></span>
                    </span>
                    <span class="info">Scuba Diving</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="ico">
                      <span class="icon-hunting"></span>
                    </span>
                    <span class="info">Hunting Trip</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="ico">
                      <span class="icon-boating"></span>
                    </span>
                    <span class="info">Sailing Trips</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- main container -->
        <main id="main">
          <section class="content-block bg-white">
            <div class="container">
              <header class="content-heading">
                <h2 class="main-heading">THE ADVENTURE</h2>
                <span class="main-subtitle"
                  >Mastering the art of perfect adventure for 10+ years in the
                  wild.</span
                >
                <div class="seperator"></div>
              </header>
              <div class="adventure-holder gallery-home-holder">
                <div class="row">
                  <div class="col-md-6 img-block">
                    <!-- gallery list -->
                    <ul class="gallery-list gallery-with-icon">
                      <li>
                        <a href="#" class="thumbnail">
                          <img
                            src="{{ asset('assets/web/img/gallery/img-01.jpg') }}"
                            height="165"
                            width="170"
                            alt="image description"
                          />
                          <span class="hover icon-bird"></span>
                          <span class="info">aerial</span>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="thumbnail">
                          <img
                            src="{{ asset('assets/web/img/gallery/img-02.jpg') }}"
                            height="165"
                            width="170"
                            alt="image description"
                          />
                          <span class="hover icon-peak"></span>
                          <span class="info">land</span>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="thumbnail">
                          <img
                            src="{{ asset('assets/web/img/gallery/img-03.jpg') }}"
                            height="165"
                            width="170"
                            alt="image description"
                          />
                          <span class="hover icon-water"></span>
                          <span class="info">water</span>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="thumbnail">
                          <img
                            src="{{ asset('assets/web/img/gallery/img-04.jpg') }}"
                            height="165"
                            width="170"
                            alt="image description"
                          />
                          <span class="hover icon-asia"></span>
                          <span class="info">asia</span>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="thumbnail">
                          <img
                            src="{{ asset('assets/web/img/gallery/img-05.jpg') }}"
                            height="165"
                            width="170"
                            alt="image description"
                          />
                          <span class="hover icon-arctic"></span>
                          <span class="info">arctic</span>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="thumbnail">
                          <img
                            src="{{ asset('assets/web/img/gallery/img-06.jpg') }}"
                            height="165"
                            width="170"
                            alt="image description"
                          />
                          <span class="hover icon-africa"></span>
                          <span class="info">africa</span>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="thumbnail">
                          <img
                            src="{{ asset('assets/web/img/gallery/img-07.jpg') }}"
                            height="165"
                            width="170"
                            alt="image description"
                          />
                          <span class="hover icon-plant"></span>
                          <span class="info">nature</span>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="thumbnail">
                          <img
                            src="{{ asset('assets/web/img/gallery/img-08.jpg') }}"
                            height="165"
                            width="170"
                            alt="image description"
                          />
                          <span class="hover icon-wildlife"></span>
                          <span class="info">wildness</span>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="thumbnail">
                          <img
                            src="{{ asset('assets/web/img/gallery/img-09.jpg') }}"
                            height="165"
                            width="170"
                            alt="image description"
                          />
                          <span class="hover icon-diamond"></span>
                          <span class="info">all</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-6 text-block">
                    <div class="centered">
                      <h2 class="intro-heading">Living a Life of Adventure</h2>
                      <p class="intro">
                        This is Photoshop's version of Lorem Ipsum. Proin
                        gravida nibh vel velit auctor aliquet. Aenean
                        sollicitudin, lorem quis bibendum auctor, nisi elit
                        consequat ipsum, nec sagittis sem nibh id elit. Duis sed
                        odio sit amet nibh vulputate cursus a sit amet mauris.
                        Morbi accumsan ipsum velit.
                      </p>
                      <a
                        href="#"
                        class="btn btn-info-sub btn-md btn-shadow radius"
                        >Dig More</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- special block -->
          <aside class="special-block">
            <div class="container">
              <p class="special-text">
                Get special discount on select treks, this week.
                <strong>Call <a href="tel:157757525">+1 5775 7525</a></strong>
              </p>
            </div>
          </aside>
          <!-- article list holder -->
          <div class="content-block content-spacing">
            <div class="container">
              <header class="content-heading">
                <h2 class="main-heading">POPULAR TOURS</h2>
                <span class="main-subtitle"
                  >We have a unique way of meeting your adventurous
                  expectations!</span
                >
                <div class="seperator"></div>
              </header>
              <div class="content-holder">
                <div class="row db-3-col">
                  <article class="col-sm-6 col-md-4 article has-hover-s3">
                    <div class="img-wrap">
                      <a href="#">
                        <img
                          src="{{ asset('assets/web/img/listing/img-01.jpg') }}"
                          height="215"
                          width="370"
                          alt="image description"
                        />
                      </a>
                      <div class="img-caption text-uppercase">
                        Discover Timeless
                      </div>
                      <div class="hover-article">
                        <div class="star-rating">
                          <span><span class="icon-star"></span></span>
                          <span><span class="icon-star"></span></span>
                          <span><span class="icon-star"></span></span>
                          <span><span class="icon-star"></span></span>
                          <span class="disable"
                            ><span class="icon-star"></span
                          ></span>
                        </div>
                        <div class="icons">
                          <a href="#"><span class="icon-heart"></span></a>
                          <a href="#"><span class="icon-reply"></span></a>
                        </div>
                        <div class="info-footer">
                          <span class="price">from <span>$2749</span></span>
                          <a href="#" class="link-more">Explore</a>
                        </div>
                      </div>
                    </div>
                    <h3><a href="#">Jungle safari for families</a></h3>
                    <p>
                      This is Photoshop's version of Lorem Ipsum. Proin gravida
                      nibh vel velit auctor aliquet. Aenean sollicitudin, lorem
                      quis bibendum auctor, nisi elit consequat ipsum,
                    </p>
                  </article>
                  <article class="col-sm-6 col-md-4 article has-hover-s3">
                    <div class="img-wrap">
                      <a href="#">
                        <img
                          src="{{ asset('assets/web/img/listing/img-02.jpg') }}"
                          height="215"
                          width="370"
                          alt="image description"
                        />
                      </a>
                      <div class="img-caption text-uppercase">
                        Finding Egyptians
                      </div>
                      <div class="hover-article">
                        <div class="star-rating">
                          <span><span class="icon-star"></span></span>
                          <span><span class="icon-star"></span></span>
                          <span><span class="icon-star"></span></span>
                          <span><span class="icon-star"></span></span>
                          <span class="disable"
                            ><span class="icon-star"></span
                          ></span>
                        </div>
                        <div class="icons">
                          <a href="#"><span class="icon-heart"></span></a>
                          <a href="#"><span class="icon-reply"></span></a>
                        </div>
                        <div class="info-footer">
                          <span class="price">from <span>$2749</span></span>
                          <a href="#" class="link-more">Explore</a>
                        </div>
                      </div>
                    </div>
                    <h3><a href="#">Nature wildlife photography</a></h3>
                    <p>
                      This is Photoshop's version of Lorem Ipsum. Proin gravida
                      nibh vel velit auctor aliquet. Aenean sollicitudin, lorem
                      quis bibendum auctor, nisi elit consequat ipsum,
                    </p>
                  </article>
                  <article class="col-sm-6 col-md-4 article has-hover-s3">
                    <div class="img-wrap">
                      <a href="#">
                        <img
                          src="{{ asset('assets/web/img/listing/img-03.jpg') }}"
                          height="215"
                          width="370"
                          alt="image description"
                        />
                      </a>
                      <div class="img-caption text-uppercase">
                        Cave Adventures
                      </div>
                      <div class="hover-article">
                        <div class="star-rating">
                          <span><span class="icon-star"></span></span>
                          <span><span class="icon-star"></span></span>
                          <span><span class="icon-star"></span></span>
                          <span><span class="icon-star"></span></span>
                          <span class="disable"
                            ><span class="icon-star"></span
                          ></span>
                        </div>
                        <div class="icons">
                          <a href="#"><span class="icon-heart"></span></a>
                          <a href="#"><span class="icon-reply"></span></a>
                        </div>
                        <div class="info-footer">
                          <span class="price">from <span>$2749</span></span>
                          <a href="#" class="link-more">Explore</a>
                        </div>
                      </div>
                    </div>
                    <h3><a href="#">Polar arctic expeditions</a></h3>
                    <p>
                      This is Photoshop's version of Lorem Ipsum. Proin gravida
                      nibh vel velit auctor aliquet. Aenean sollicitudin, lorem
                      quis bibendum auctor, nisi elit consequat ipsum,
                    </p>
                  </article>
                  <article class="col-sm-6 col-md-4 article has-hover-s3">
                    <div class="img-wrap">
                      <a href="#">
                        <img
                          src="{{ asset('assets/web/img/listing/img-04.jpg') }}"
                          height="215"
                          width="370"
                          alt="image description"
                        />
                      </a>
                      <div class="img-caption text-uppercase">
                        Peak Climbing
                      </div>
                      <div class="hover-article">
                        <div class="star-rating">
                          <span><span class="icon-star"></span></span>
                          <span><span class="icon-star"></span></span>
                          <span><span class="icon-star"></span></span>
                          <span><span class="icon-star"></span></span>
                          <span class="disable"
                            ><span class="icon-star"></span
                          ></span>
                        </div>
                        <div class="icons">
                          <a href="#"><span class="icon-heart"></span></a>
                          <a href="#"><span class="icon-reply"></span></a>
                        </div>
                        <div class="info-footer">
                          <span class="price">from <span>$2749</span></span>
                          <a href="#" class="link-more">Explore</a>
                        </div>
                      </div>
                    </div>
                    <h3><a href="#">Marine diving excursions</a></h3>
                    <p>
                      This is Photoshop's version of Lorem Ipsum. Proin gravida
                      nibh vel velit auctor aliquet. Aenean sollicitudin, lorem
                      quis bibendum auctor, nisi elit consequat ipsum,
                    </p>
                  </article>
                  <article class="col-sm-6 col-md-4 article has-hover-s3">
                    <div class="img-wrap">
                      <a href="#">
                        <img
                          src="{{ asset('assets/web/img/listing/img-05.jpg') }}"
                          height="215"
                          width="370"
                          alt="image description"
                        />
                      </a>
                      <div class="img-caption text-uppercase">
                        Treasure Hunting
                      </div>
                      <div class="hover-article">
                        <div class="star-rating">
                          <span><span class="icon-star"></span></span>
                          <span><span class="icon-star"></span></span>
                          <span><span class="icon-star"></span></span>
                          <span><span class="icon-star"></span></span>
                          <span class="disable"
                            ><span class="icon-star"></span
                          ></span>
                        </div>
                        <div class="icons">
                          <a href="#"><span class="icon-heart"></span></a>
                          <a href="#"><span class="icon-reply"></span></a>
                        </div>
                        <div class="info-footer">
                          <span class="price">from <span>$2749</span></span>
                          <a href="#" class="link-more">Explore</a>
                        </div>
                      </div>
                    </div>
                    <h3><a href="#">Go wild at national parks</a></h3>
                    <p>
                      This is Photoshop's version of Lorem Ipsum. Proin gravida
                      nibh vel velit auctor aliquet. Aenean sollicitudin, lorem
                      quis bibendum auctor, nisi elit consequat ipsum,
                    </p>
                  </article>
                  <article class="col-sm-6 col-md-4 article has-hover-s3">
                    <div class="img-wrap">
                      <a href="#">
                        <img
                          src="{{ asset('assets/web/img/listing/img-06.jpg') }}"
                          height="215"
                          width="370"
                          alt="image description"
                        />
                      </a>
                      <div class="img-caption text-uppercase">
                        A night with sky
                      </div>
                      <div class="hover-article">
                        <div class="star-rating">
                          <span><span class="icon-star"></span></span>
                          <span><span class="icon-star"></span></span>
                          <span><span class="icon-star"></span></span>
                          <span><span class="icon-star"></span></span>
                          <span class="disable"
                            ><span class="icon-star"></span
                          ></span>
                        </div>
                        <div class="icons">
                          <a href="#"><span class="icon-heart"></span></a>
                          <a href="#"><span class="icon-reply"></span></a>
                        </div>
                        <div class="info-footer">
                          <span class="price">from <span>$2749</span></span>
                          <a href="#" class="link-more">Explore</a>
                        </div>
                      </div>
                    </div>
                    <h3><a href="#">Educational trips in wild</a></h3>
                    <p>
                      This is Photoshop's version of Lorem Ipsum. Proin gravida
                      nibh vel velit auctor aliquet. Aenean sollicitudin, lorem
                      quis bibendum auctor, nisi elit consequat ipsum,
                    </p>
                  </article>
                </div>
              </div>
            </div>
          </div>
          <!-- couter block -->
          <aside class="count-block">
            <div class="container-fluid">
              <div class="row">
                <div class="col-xs-6 col-md-3 block-1">
                  <div class="holder">
                    <span class="icon icon-step"></span>
                    <span class="info"><span class="counter">8702</span></span>
                    <span class="txt">WILDLIFE SPECIES</span>
                  </div>
                </div>
                <div class="col-xs-6 col-md-3 block-2">
                  <div class="holder">
                    <span class="icon icon-fish-jumping"></span>
                    <span class="info"><span class="counter">378</span></span>
                    <span class="txt">ARCTIC EXPERIENCES</span>
                  </div>
                </div>
                <div class="col-xs-6 col-md-3 block-3">
                  <div class="holder">
                    <span class="icon icon-tree"></span>
                    <span class="info"><span class="counter">377</span></span>
                    <span class="txt">NATIONAL PARKS</span>
                  </div>
                </div>
                <div class="col-xs-6 col-md-3 block-4">
                  <div class="holder">
                    <span class="icon icon-duration"></span>
                    <span class="info"><span class="counter">8973</span></span>
                    <span class="txt">DAYS IN THE WILD</span>
                  </div>
                </div>
              </div>
            </div>
          </aside>
          <!-- featured adventure content -->
          <div class="featured-content adventure-holder">
            <div class="container-fluid">
              <div class="row same-height">
                <div class="col-md-6 image height">
                  <div class="bg-stretch">
                    <img
                      src="{{ asset('assets/web/img/img-01.jpg') }}"
                      height="627"
                      width="960"
                      alt="image description"
                    />
                  </div>
                </div>
                <div class="col-md-6 text-block height">
                  <div class="centered">
                    <h2 class="intro-heading">
                      Botswana &amp; Angola - The Tribe
                    </h2>
                    <p class="intro">
                      This is Photoshop's version of Lorem Ipsum. Proin gravida
                      nibh vel velit auctor aliquet. Aenean sollicitudin, lorem
                      quis bibendum auctor, nisi elit consequat ipsum, Duis sed
                      odio sit amet nibh vulputate cursus a it amet mauris.
                    </p>
                    <a href="#" class="btn btn-primary btn-lg">explore</a>
                  </div>
                </div>
              </div>
              <div class="row same-height">
                <div class="col-md-6 image height">
                  <div class="bg-stretch">
                    <img
                      src="{{ asset('assets/web/img/img-02.jpg') }}"
                      height="627"
                      width="960"
                      alt="image description"
                    />
                  </div>
                </div>
                <div class="col-md-6 text-block height">
                  <div class="centered">
                    <h2 class="intro-heading">
                      Maritime Adventure - The Arctic
                    </h2>
                    <p class="intro">
                      This is Photoshop's version of Lorem Ipsum. Proin gravida
                      nibh vel velit auctor aliquet. Aenean sollicitudin, lorem
                      quis bibendum auctor, nisi elit consequat ipsum, Duis sed
                      odio sit amet nibh vulputate cursus a it amet mauris.
                    </p>
                    <a href="#" class="btn btn-primary btn-lg">explore</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- browse block -->
          <div class="browse-block">
            <div class="browse-destination column">
              <a href="#"><span>BROWSE BY DESTINATION</span></a>
            </div>
            <div class="browse-adventures column">
              <a href="#"><span>BROWSE BY ADVENTURES</span></a>
            </div>
          </div>
          <!-- article list with boxed style -->
          <section class="content-block article-boxed">
            <div class="container">
              <header class="content-heading">
                <h2 class="main-heading">TOP ADVENTURES</h2>
                <span class="main-subtitle"
                  >Our collection of the most popular adventures in 2016.</span
                >
                <div class="seperator"></div>
              </header>
              <div class="content-holder content-boxed">
                <div class="row db-3-col">
                  <article class="col-sm-6 col-md-4 article has-hover-s1">
                    <div class="thumbnail">
                      <div class="img-wrap">
                        <img
                          src="{{ asset('assets/web/img/listing/img-07.jpg') }}"
                          height="228"
                          width="350"
                          alt="image description"
                        />
                      </div>
                      <h3 class="small-space">
                        <a href="tour-detail.html"
                          >Evening with Panda in China</a
                        >
                      </h3>
                      <span class="info"
                        >Nordic Walk, Swiss Alps or French Hiking?</span
                      >
                      <aside class="meta">
                        <span class="country">
                          <span class="icon-world"> </span>12 Countries
                        </span>
                        <span class="activity">
                          <span class="icon-acitivities"> </span>79 Activities
                        </span>
                      </aside>
                      <p>
                        This is Photoshop's version of Lorem Ipsum. Proin
                        gravida nibh vel velit auctor aliquet. Aenean
                        sollicitudin, lorem quis bibendum auctor, nisi elit
                        consequat ipsum,
                      </p>
                      <a href="tour-detail.html" class="btn btn-default"
                        >explore</a
                      >
                      <footer>
                        <ul class="social-networks">
                          <li>
                            <a href="#"><span class="icon-twitter"></span></a>
                          </li>
                          <li>
                            <a href="#"
                              ><span class="icon-google-plus"></span
                            ></a>
                          </li>
                          <li>
                            <a href="#"><span class="icon-facebook"></span></a>
                          </li>
                          <li>
                            <a href="#"><span class="icon-linkedin"></span></a>
                          </li>
                        </ul>
                        <span class="price">from <span>$2749</span></span>
                      </footer>
                    </div>
                  </article>
                  <article class="col-sm-6 col-md-4 article has-hover-s1">
                    <div class="thumbnail">
                      <div class="img-wrap">
                        <img
                          src="{{ asset('assets/web/img/listing/img-08.jpg') }}"
                          height="228"
                          width="350"
                          alt="image description"
                        />
                      </div>
                      <h3 class="small-space">
                        <a href="tour-detail.html"
                          >Sleeping with Sea Lion in Arctic</a
                        >
                      </h3>
                      <span class="info"
                        >Nordic Walk, Swiss Alps or French Hiking?</span
                      >
                      <aside class="meta">
                        <span class="country">
                          <span class="icon-world"> </span>12 Countries
                        </span>
                        <span class="activity">
                          <span class="icon-acitivities"> </span>79 Activities
                        </span>
                      </aside>
                      <p>
                        This is Photoshop's version of Lorem Ipsum. Proin
                        gravida nibh vel velit auctor aliquet. Aenean
                        sollicitudin, lorem quis bibendum auctor, nisi elit
                        consequat ipsum,
                      </p>
                      <a href="tour-detail.html" class="btn btn-default"
                        >explore</a
                      >
                      <footer>
                        <ul class="social-networks">
                          <li>
                            <a href="#"><span class="icon-twitter"></span></a>
                          </li>
                          <li>
                            <a href="#"
                              ><span class="icon-google-plus"></span
                            ></a>
                          </li>
                          <li>
                            <a href="#"><span class="icon-facebook"></span></a>
                          </li>
                          <li>
                            <a href="#"><span class="icon-linkedin"></span></a>
                          </li>
                        </ul>
                        <span class="price">from <span>$2749</span></span>
                      </footer>
                    </div>
                  </article>
                  <article class="col-sm-6 col-md-4 article has-hover-s1">
                    <div class="thumbnail">
                      <div class="img-wrap">
                        <img
                          src="{{ asset('assets/web/img/listing/img-09.jpg') }}"
                          height="228"
                          width="350"
                          alt="image description"
                        />
                      </div>
                      <h3 class="small-space">
                        <a href="tour-detail.html"
                          >Following Zebras to Water hole</a
                        >
                      </h3>
                      <span class="info"
                        >Nordic Walk, Swiss Alps or French Hiking?</span
                      >
                      <aside class="meta">
                        <span class="country">
                          <span class="icon-world"> </span>12 Countries
                        </span>
                        <span class="activity">
                          <span class="icon-acitivities"> </span>79 Activities
                        </span>
                      </aside>
                      <p>
                        This is Photoshop's version of Lorem Ipsum. Proin
                        gravida nibh vel velit auctor aliquet. Aenean
                        sollicitudin, lorem quis bibendum auctor, nisi elit
                        consequat ipsum,
                      </p>
                      <a href="tour-detail.html" class="btn btn-default"
                        >explore</a
                      >
                      <footer>
                        <ul class="social-networks">
                          <li>
                            <a href="#"><span class="icon-twitter"></span></a>
                          </li>
                          <li>
                            <a href="#"
                              ><span class="icon-google-plus"></span
                            ></a>
                          </li>
                          <li>
                            <a href="#"><span class="icon-facebook"></span></a>
                          </li>
                          <li>
                            <a href="#"><span class="icon-linkedin"></span></a>
                          </li>
                        </ul>
                        <span class="price">from <span>$2749</span></span>
                      </footer>
                    </div>
                  </article>
                  <article class="col-sm-6 col-md-4 article has-hover-s1">
                    <div class="thumbnail">
                      <div class="img-wrap">
                        <img
                          src="{{ asset('assets/web/img/listing/img-10.jpg') }}"
                          height="228"
                          width="350"
                          alt="image description"
                        />
                      </div>
                      <h3 class="small-space">
                        <a href="tour-detail.html"
                          >Discovering Wild Trails in Africa</a
                        >
                      </h3>
                      <span class="info"
                        >Nordic Walk, Swiss Alps or French Hiking?</span
                      >
                      <aside class="meta">
                        <span class="country">
                          <span class="icon-world"> </span>12 Countries
                        </span>
                        <span class="activity">
                          <span class="icon-acitivities"> </span>79 Activities
                        </span>
                      </aside>
                      <p>
                        This is Photoshop's version of Lorem Ipsum. Proin
                        gravida nibh vel velit auctor aliquet. Aenean
                        sollicitudin, lorem quis bibendum auctor, nisi elit
                        consequat ipsum,
                      </p>
                      <a href="tour-detail.html" class="btn btn-default"
                        >explore</a
                      >
                      <footer>
                        <ul class="social-networks">
                          <li>
                            <a href="#"><span class="icon-twitter"></span></a>
                          </li>
                          <li>
                            <a href="#"
                              ><span class="icon-google-plus"></span
                            ></a>
                          </li>
                          <li>
                            <a href="#"><span class="icon-facebook"></span></a>
                          </li>
                          <li>
                            <a href="#"><span class="icon-linkedin"></span></a>
                          </li>
                        </ul>
                        <span class="price">from <span>$2749</span></span>
                      </footer>
                    </div>
                  </article>
                  <article class="col-sm-6 col-md-4 article has-hover-s1">
                    <div class="thumbnail">
                      <div class="img-wrap">
                        <img
                          src="{{ asset('assets/web/img/listing/img-11.jpg') }}"
                          height="228"
                          width="350"
                          alt="image description"
                        />
                      </div>
                      <h3 class="small-space">
                        <a href="tour-detail.html"
                          >Angola Safari for Family &amp; Children</a
                        >
                      </h3>
                      <span class="info"
                        >Nordic Walk, Swiss Alps or French Hiking?</span
                      >
                      <aside class="meta">
                        <span class="country">
                          <span class="icon-world"> </span>12 Countries
                        </span>
                        <span class="activity">
                          <span class="icon-acitivities"> </span>79 Activities
                        </span>
                      </aside>
                      <p>
                        This is Photoshop's version of Lorem Ipsum. Proin
                        gravida nibh vel velit auctor aliquet. Aenean
                        sollicitudin, lorem quis bibendum auctor, nisi elit
                        consequat ipsum,
                      </p>
                      <a href="tour-detail.html" class="btn btn-default"
                        >explore</a
                      >
                      <footer>
                        <ul class="social-networks">
                          <li>
                            <a href="#"><span class="icon-twitter"></span></a>
                          </li>
                          <li>
                            <a href="#"
                              ><span class="icon-google-plus"></span
                            ></a>
                          </li>
                          <li>
                            <a href="#"><span class="icon-facebook"></span></a>
                          </li>
                          <li>
                            <a href="#"><span class="icon-linkedin"></span></a>
                          </li>
                        </ul>
                        <span class="price">from <span>$2749</span></span>
                      </footer>
                    </div>
                  </article>
                  <article class="col-sm-6 col-md-4 article has-hover-s1">
                    <div class="thumbnail">
                      <div class="img-wrap">
                        <img
                          src="{{ asset('assets/web/img/listing/img-12.jpg') }}"
                          height="228"
                          width="350"
                          alt="image description"
                        />
                      </div>
                      <h3 class="small-space">
                        <a href="tour-detail.html"
                          >Royal Safari in Bangaladesh</a
                        >
                      </h3>
                      <span class="info"
                        >Nordic Walk, Swiss Alps or French Hiking?</span
                      >
                      <aside class="meta">
                        <span class="country">
                          <span class="icon-world"> </span>12 Countries
                        </span>
                        <span class="activity">
                          <span class="icon-acitivities"> </span>79 Activities
                        </span>
                      </aside>
                      <p>
                        This is Photoshop's version of Lorem Ipsum. Proin
                        gravida nibh vel velit auctor aliquet. Aenean
                        sollicitudin, lorem quis bibendum auctor, nisi elit
                        consequat ipsum,
                      </p>
                      <a href="tour-detail.html" class="btn btn-default"
                        >explore</a
                      >
                      <footer>
                        <ul class="social-networks">
                          <li>
                            <a href="#"><span class="icon-twitter"></span></a>
                          </li>
                          <li>
                            <a href="#"
                              ><span class="icon-google-plus"></span
                            ></a>
                          </li>
                          <li>
                            <a href="#"><span class="icon-facebook"></span></a>
                          </li>
                          <li>
                            <a href="#"><span class="icon-linkedin"></span></a>
                          </li>
                        </ul>
                        <span class="price">from <span>$2749</span></span>
                      </footer>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </section>
          <!-- content block with guide info -->
          <section class="content-block guide-sub guide-add bg-white">
            <div class="container">
              <header class="content-heading">
                <h2 class="main-heading">MEET THE GUIDES</h2>
                <span class="main-subtitle"
                  >Our highly trained and efficient guides at your service</span
                >
                <div class="seperator"></div>
              </header>
              <div class="content-holder">
                <div class="row">
                  <div class="col-sm-6 col-md-4 img-article">
                    <div class="holder">
                      <div class="img-wrap">
                        <img
                          src="{{ asset('assets/web/img/listing/img-13.jpg') }}"
                          height="436"
                          width="370"
                          alt="image description"
                        />
                        <ul class="social-networks">
                          <li>
                            <a href="#"><span class="icon-facebook"></span></a>
                          </li>
                          <li>
                            <a href="#"><span class="icon-twitter"></span></a>
                          </li>
                          <li>
                            <a href="#"
                              ><span class="icon-google-plus"></span
                            ></a>
                          </li>
                          <li>
                            <a href="#"><span class="icon-linkedin"></span></a>
                          </li>
                        </ul>
                      </div>
                      <div class="caption">
                        <h3 class="small-space">Jason Statham</h3>
                        <span class="designation">TREKKING GUIDE</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 img-article">
                    <div class="holder">
                      <div class="img-wrap">
                        <img
                          src="{{ asset('assets/web/img/listing/img-14.jpg') }}"
                          height="436"
                          width="370"
                          alt="image description"
                        />
                        <ul class="social-networks">
                          <li>
                            <a href="#"><span class="icon-facebook"></span></a>
                          </li>
                          <li>
                            <a href="#"><span class="icon-twitter"></span></a>
                          </li>
                          <li>
                            <a href="#"
                              ><span class="icon-google-plus"></span
                            ></a>
                          </li>
                          <li>
                            <a href="#"><span class="icon-linkedin"></span></a>
                          </li>
                        </ul>
                      </div>
                      <div class="caption">
                        <h3 class="small-space">Cleona Tropez</h3>
                        <span class="designation">TREKKING GUIDE</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 img-article">
                    <div class="holder">
                      <div class="img-wrap">
                        <img
                          src="{{ asset('assets/web/img/listing/img-15.jpg') }}"
                          height="436"
                          width="370"
                          alt="image description"
                        />
                        <ul class="social-networks">
                          <li>
                            <a href="#"><span class="icon-facebook"></span></a>
                          </li>
                          <li>
                            <a href="#"><span class="icon-twitter"></span></a>
                          </li>
                          <li>
                            <a href="#"
                              ><span class="icon-google-plus"></span
                            ></a>
                          </li>
                          <li>
                            <a href="#"><span class="icon-linkedin"></span></a>
                          </li>
                        </ul>
                      </div>
                      <div class="caption">
                        <h3 class="small-space">Martin Blake</h3>
                        <span class="designation">TREKKING GUIDE</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- testimonial block -->
          <div
            class="testimonial-holder parallax"
            data-stellar-background-ratio="0.25"
            id="testimonial-home-page"
          >
            <div class="container">
              <div id="testimonial-home-slide">
                <div class="slide">
                  <blockquote class="testimonial-quote">
                    <div class="img">
                      <img
                        src="{{ asset('assets/web/img/thumbs/img-01.jpg') }}"
                        height="112"
                        width="112"
                        alt="image description"
                      />
                    </div>
                    <div class="text">
                      <cite>STEVE JORGAN - NORWAY</cite>
                      <q
                        >This is Photoshop's version of Lorem Ipsum. Proin
                        gravida nibh vel velit auctor aliquet. Aenean
                        sollicitudin, lorem quis bibendum auctor, nisi elit
                        consequat ipsum, nec sagittis sem nibh id elit. Duis sed
                        odio sit amet nibh vulputate cursus a sit amet
                        mauris.”</q
                      >
                    </div>
                  </blockquote>
                </div>
                <div class="slide">
                  <blockquote class="testimonial-quote">
                    <div class="img">
                      <img
                        src="{{ asset('assets/web/img/thumbs/img-02.jpg') }}"
                        height="112"
                        width="112"
                        alt="image description"
                      />
                    </div>
                    <div class="text">
                      <cite>DARREN SPRATT - AUSTRALIA</cite>
                      <q
                        >This is Photoshop's version of Lorem Ipsum. Proin
                        gravida nibh vel velit auctor aliquet. Aenean
                        sollicitudin, lorem quis bibendum auctor, nisi elit
                        consequat ipsum, nec sagittis sem nibh id elit. Duis sed
                        odio sit amet nibh vulputate cursus a sit amet
                        mauris.”</q
                      >
                    </div>
                  </blockquote>
                </div>
                <div class="slide">
                  <blockquote class="testimonial-quote">
                    <div class="img">
                      <img
                        src="{{ asset('assets/web/img/thumbs/img-03.jpg') }}"
                        height="112"
                        width="112"
                        alt="image description"
                      />
                    </div>
                    <div class="text">
                      <cite>RIYA YAHIDA - SPAIN</cite>
                      <q
                        >This is Photoshop's version of Lorem Ipsum. Proin
                        gravida nibh vel velit auctor aliquet. Aenean
                        sollicitudin, lorem quis bibendum auctor, nisi elit
                        consequat ipsum, nec sagittis sem nibh id elit. Duis sed
                        odio sit amet nibh vulputate cursus a sit amet
                        mauris.”</q
                      >
                    </div>
                  </blockquote>
                </div>
              </div>
            </div>
          </div>
          <!-- partner list -->
          <article class="partner-block">
            <div class="container">
              <header class="content-heading">
                <h2 class="main-heading">Partner</h2>
                <span class="main-subtitle"
                  >People who always support and endorse our good work</span
                >
                <div class="seperator"></div>
              </header>
              <div class="partner-list" id="partner-slide">
                <div class="partner">
                  <a href="#">
                    <img
                      width="130"
                      src="{{ asset('assets/web/img/logos/logo-travelagancy.svg') }}"
                      alt="image description"
                    />
                    <img
                      class="hover"
                      width="130"
                      src="{{ asset('assets/web/img/logos/logo-travelagancy-hover.svg') }}"
                      alt="image description"
                    />
                  </a>
                </div>
                <div class="partner">
                  <a href="#">
                    <img
                      width="130"
                      src="{{ asset('assets/web/img/logos/logo-around-world.svg') }}"
                      alt="image description"
                    />
                    <img
                      class="hover"
                      width="130"
                      src="{{ asset('assets/web/img/logos/logo-around-world-hover.svg') }}"
                      alt="image description"
                    />
                  </a>
                </div>
                <div class="partner">
                  <a href="#">
                    <img
                      width="130"
                      src="{{ asset('assets/web/img/logos/logo-tourist.svg') }}"
                      alt="image description"
                    />
                    <img
                      class="hover"
                      width="130"
                      src="{{ asset('assets/web/img/logos/logo-tourist-hover.svg') }}"
                      alt="image description"
                    />
                  </a>
                </div>
                <div class="partner">
                  <a href="#">
                    <img
                      width="130"
                      src="{{ asset('assets/web/img/logos/logo-adventure.svg') }}"
                      alt="image description"
                    />
                    <img
                      class="hover"
                      width="130"
                      src="{{ asset('assets/web/img/logos/logo-adventure-hover.svg') }}"
                      alt="image description"
                    />
                  </a>
                </div>
                <div class="partner">
                  <a href="#">
                    <img
                      width="130"
                      src="{{ asset('assets/web/img/logos/logo-around-world.svg') }}"
                      alt="image description"
                    />
                    <img
                      class="hover"
                      width="130"
                      src="{{ asset('assets/web/img/logos/logo-around-world-hover.svg') }}"
                      alt="image description"
                    />
                  </a>
                </div>
                <div class="partner">
                  <a href="#">
                    <img
                      width="130"
                      src="{{ asset('assets/web/img/logos/logo-travelagancy.svg') }}"
                      alt="image description"
                    />
                    <img
                      class="hover"
                      width="130"
                      src="{{ asset('assets/web/img/logos/logo-travelagancy-hover.svg') }}"
                      alt="image description"
                    />
                  </a>
                </div>
                <div class="partner">
                  <a href="#">
                    <img
                      width="130"
                      src="{{ asset('assets/web/img/logos/logo-adventure.svg') }}"
                      alt="image description"
                    />
                    <img
                      class="hover"
                      width="130"
                      src="{{ asset('assets/web/img/logos/logo-adventure-hover.svg') }}"
                      alt="image description"
                    />
                  </a>
                </div>
                <div class="partner">
                  <a href="#">
                    <img
                      width="130"
                      src="{{ asset('assets/web/img/logos/logo-around-world.svg') }}"
                      alt="image description"
                    />
                    <img
                      class="hover"
                      width="130"
                      src="{{ asset('assets/web/img/logos/logo-around-world-hover.svg') }}"
                      alt="image description"
                    />
                  </a>
                </div>
                <div class="partner">
                  <a href="#">
                    <img
                      width="130"
                      src="{{ asset('assets/web/img/logos/logo-travelagancy.svg') }}"
                      alt="image description"
                    />
                    <img
                      class="hover"
                      width="130"
                      src="{{ asset('assets/web/img/logos/logo-travelagancy-hover.svg') }}"
                      alt="image description"
                    />
                  </a>
                </div>
              </div>
            </div>
          </article>
        </main>
@endsection