@extends('web::layouts.home')
@section('page_content')
  <!-- main container -->
        <main id="main">
          <!-- main tour information -->
          <section class="container-fluid trip-info">
            <div class="same-height two-columns row">
              <div class="height col-md-6">
                <!-- top image slideshow -->
                <div id="tour-slide">
                  <div class="slide">
                    <div class="bg-stretch">
                      <img
                        src="{{asset('assets/web/img/generic/img-17.jpg')}}"
                        alt="image descriprion"
                        height="1104"
                        width="966"
                      />
                    </div>
                  </div>
                  <div class="slide">
                    <div class="bg-stretch">
                      <img
                        src="{{asset('assets/web/img/generic/img-07.jpg')}}"
                        alt="image descriprion"
                        height="1104"
                        width="966"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <div class="height col-md-6 text-col">
                <div class="holder">
                  <h1 class="small-size">Annapurna Circuit Trek</h1>
                  <div class="price">from <strong>US $979</strong></div>
                  <div class="description">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna
                      aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                      ullamco laboris nisi ctetur, adipisci velit, sed quia non
                      numquam eius modi.
                    </p>
                  </div>
                  <ul class="reviews-info">
                    <li>
                      <div class="info-left">
                        <strong class="title">Reviews</strong>
                        <span class="value">75 Reviews</span>
                      </div>
                      <div class="info-right">
                        <div class="star-rating">
                          <span><span class="icon-star"></span></span>
                          <span><span class="icon-star"></span></span>
                          <span><span class="icon-star"></span></span>
                          <span><span class="icon-star"></span></span>
                          <span class="disable"
                            ><span class="icon-star"></span
                          ></span>
                        </div>
                        <span class="value">5/5</span>
                      </div>
                    </li>
                    <li>
                      <div class="info-left">
                        <strong class="title">Vacation Style</strong>
                        <span class="value">Adult Group</span>
                      </div>
                      <div class="info-right">
                        <ul class="ico-list">
                          <li>
                            <span class="icon icon-hiking"></span>
                          </li>
                          <li>
                            <span class="icon icon-mount"></span>
                          </li>
                          <li>
                            <span class="icon icon-camping"></span>
                          </li>
                        </ul>
                        <span class="value">Camping Trek</span>
                      </div>
                    </li>
                    <li>
                      <div class="info-left">
                        <strong class="title">Activity Level</strong>
                        <span class="value">Quite Tough</span>
                      </div>
                      <div class="info-right">
                        <ul class="ico-list">
                          <li>
                            <span class="icon icon-level3"></span>
                          </li>
                          <li>
                            <span class="icon icon-level5"></span>
                          </li>
                          <li>
                            <span class="icon icon-level7"></span>
                          </li>
                        </ul>
                        <span class="value">9/10</span>
                      </div>
                    </li>
                    <li>
                      <div class="info-left">
                        <strong class="title">Group Size</strong>
                        <span class="value">Medium Grougs</span>
                      </div>
                      <div class="info-right">
                        <ul class="ico-list">
                          <li>
                            <span class="icon icon-group-small"></span>
                          </li>
                          <li>
                            <span class="icon icon-group-medium"></span>
                          </li>
                          <li>
                            <span class="icon icon-group-large"></span>
                          </li>
                        </ul>
                        <span class="value">6/10</span>
                      </div>
                    </li>
                  </ul>
                  <div class="btn-holder">
                    <a href="#" class="btn btn-lg btn-info">BOOK NOW</a>
                  </div>
                  <ul class="social-networks social-share">
                    <li>
                      <a href="#" class="facebook">
                        <span class="ico">
                          <span class="icon-facebook"></span>
                        </span>
                        <span class="text">Share</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="twitter">
                        <span class="ico">
                          <span class="icon-twitter"></span>
                        </span>
                        <span class="text">Tweet</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="google">
                        <span class="ico">
                          <span class="icon-google-plus"></span>
                        </span>
                        <span class="text">+1</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="pin">
                        <span class="ico">
                          <span class="icon-pin"></span>
                        </span>
                        <span class="text">Pin it</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
          <div class="tab-container">
            <nav class="nav-wrap" id="sticky-tab">
              <div class="container">
                <!-- nav tabs -->
                <ul class="nav nav-tabs text-center" role="tablist">
                  <li role="presentation" class="active">
                    <a
                      href="#tab01"
                      aria-controls="tab01"
                      role="tab"
                      data-toggle="tab"
                      >Overview</a
                    >
                  </li>
                  <li role="presentation">
                    <a
                      href="#tab02"
                      aria-controls="tab02"
                      role="tab"
                      data-toggle="tab"
                      >Itinerary</a
                    >
                  </li>
                  <li role="presentation">
                    <a
                      href="#tab03"
                      aria-controls="tab03"
                      role="tab"
                      data-toggle="tab"
                      >Lodging</a
                    >
                  </li>
                  <li role="presentation">
                    <a
                      href="#tab04"
                      aria-controls="tab04"
                      role="tab"
                      data-toggle="tab"
                      >Faq &amp; Review</a
                    >
                  </li>
                  <li role="presentation">
                    <a
                      href="#tab05"
                      aria-controls="tab05"
                      role="tab"
                      data-toggle="tab"
                      >Gallery</a
                    >
                  </li>
                  <li role="presentation">
                    <a
                      href="#tab06"
                      aria-controls="tab06"
                      role="tab"
                      data-toggle="tab"
                      >Dates &amp; Price</a
                    >
                  </li>
                </ul>
              </div>
            </nav>
            <!-- tab panes -->
            <div class="container tab-content trip-detail">
              <!-- overview tab content -->
              <div role="tabpanel" class="tab-pane active" id="tab01">
                <div class="row">
                  <div class="col-md-6">
                    <strong class="header-box"
                      >All about the classic Annapurna Circuit Trekking</strong
                    >
                    <div class="detail">
                      <p>
                        This is Photoshop's version of Lorem Ipsum. Proin
                        gravida nibh vel velit auctor aliquet. Aenean
                        sollicitudin, lorem quis bibendum auctor, nisi elit
                        consequat ipsum, nec sagittis sem nibh id elit.
                      </p>
                      <p>
                        Duis sed odio sit amet nibh vulputate cursus a sit amet
                        mauris. Morbi accumsan ipsum velit. Nam nec tellus a
                        odio tincidunt auctor a ornare odio.
                      </p>
                      <p>
                        Sed non mauris vitae erat consequat auctor eu in elit.
                        Class aptent taciti sociosqu ad litora torquent per
                        conubia nostra, per inceptos himenaeos. Mauris in erat
                        justo.
                      </p>
                      <p>
                        Nullam ac urna eu felis dapibus condimentum sit amet a
                        augue. Sed non neque elit. Sed ut imperdiet nisi.
                      </p>
                      <p>
                        Proin condimentum fermentum nunc. Etiam pharetra, erat
                        sed fermentum feugiat, velit mauris egestas quam.
                      </p>
                      <p>
                        Ulins aliquam massa nisl quis neque. Proin condimentum
                        fermentum nunc. Etiam pharetra, erat sed fermentum
                        feugiat, velit mauris egestas quam, ut aliquam massa
                        nisl quis neque.
                      </p>
                      <p>
                        Proin condimentum fermentum nunc. Etiam pharetra, erat
                        sed fermentum feugiat, velit mauris egestas quam.
                      </p>
                      <p>
                        Ulins aliquam massa nisl quis neque. Proin condimentum
                        fermentum nunc. Etiam pharetra, erat sed fermentum
                        feugiat, velit mauris egestas quam, ut aliquam massa
                        nisl quis neque.
                      </p>
                      <p>
                        Ulins aliquam massa nisl quis neque. Proin condimentum
                        fermentum nunc. Etiam pharetra, erat sed fermentum
                        feugiat, velit mauris egestas quam, ut aliquam massa
                        nisl quis neque.
                      </p>
                      <p>Suspendisse gin orci enim.</p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <strong class="header-box"
                      >The tour package inclusions and exclusions at a
                      glance</strong
                    >
                    <div class="text-box">
                      <div class="holder">
                        <strong class="title"
                          >Whats included in this tour</strong
                        >
                        <span class="sub-title"
                          >Items that are covered in the cost of tour
                          price.</span
                        >
                        <p>
                          This is Photoshop's version of Lorem Ipsum. Proin
                          gravida nibh vel velit auctor aliquet. Aenean
                          sollicitudin, lorem quis bibendum auctor, nisi elit
                          consequat ipsum, nec sagittis sem nibh id elit.
                        </p>
                        <ul class="content-list tick-list">
                          <li>
                            All breakfasts, lunches and dinners &amp; dining
                          </li>
                          <li>
                            All accommodation including tea houses en route
                          </li>
                          <li>
                            All transportation including taxis and coaches
                          </li>
                          <li>
                            Flights from Heathrow if booked inc. of flight
                          </li>
                          <li>Tour and trekking guide for entire journey</li>
                        </ul>
                      </div>
                    </div>
                    <div class="text-box not-included">
                      <div class="holder">
                        <strong class="title"
                          >Whats not included in this tour</strong
                        >
                        <span class="sub-title"
                          >Items that are covered in the cost of tour
                          price.</span
                        >
                        <p>
                          This is Photoshop's version of Lorem Ipsum. Proin
                          gravida nibh vel velit auctor aliquet. Aenean
                          sollicitudin, lorem quis bibendum auctor, nisi elit
                          consequat ipsum, nec sagittis sem nibh id elit.
                        </p>
                        <ul class="content-list cross-list">
                          <li>Travel insurance and other emergencies</li>
                          <li>Visa fees and entry clearing fees</li>
                          <li>Single room accommodations</li>
                          <li>Liquors, beeers and bootled beverages</li>
                          <li>Photography ccessories like cameras etc.</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- itinerary tab content -->
              <div role="tabpanel" class="tab-pane" id="tab02">
                <div class="row">
                  <div class="col-md-6">
                    <ol class="detail-accordion">
                      <li>
                        <a href="#">
                          <strong class="title">Day 1</strong>
                          <span>Depart London</span>
                        </a>
                        <div class="slide">
                          <div class="slide-holder">
                            <p>
                              Lorem ipsum dolor sit amet, consectetur
                              adipisicing elit, sed do eiusmod tempor incididunt
                              ut labore et dolore magna aliqua. Ut enim ad minim
                              veniam, quis nostrud exercitation ullamco laboris
                              nisi ctetur, adipisci velit, sed quia non numquam
                              eius modi.
                            </p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <a href="#">
                          <strong class="title">Day 2</strong>
                          <span>Arrive in Kathmandu</span>
                        </a>
                        <div class="slide">
                          <div class="slide-holder">
                            <p>
                              Lorem ipsum dolor sit amet, consectetur
                              adipisicing elit, sed do eiusmod tempor incididunt
                              ut labore et dolore magna aliqua. Ut enim ad minim
                              veniam, quis nostrud exercitation ullamco laboris
                              nisi ctetur, adipisci velit, sed quia non numquam
                              eius modi.
                            </p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <a href="#">
                          <strong class="title">Day 3</strong>
                          <span>Leave for Pokhara</span>
                        </a>
                        <div class="slide">
                          <div class="slide-holder">
                            <p>
                              Lorem ipsum dolor sit amet, consectetur
                              adipisicing elit, sed do eiusmod tempor incididunt
                              ut labore et dolore magna aliqua. Ut enim ad minim
                              veniam, quis nostrud exercitation ullamco laboris
                              nisi ctetur, adipisci velit, sed quia non numquam
                              eius modi.
                            </p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <a href="#">
                          <strong class="title">Day 4</strong>
                          <span>Start Trekking at Besi</span>
                        </a>
                        <div class="slide">
                          <div class="slide-holder">
                            <p>
                              Lorem ipsum dolor sit amet, consectetur
                              adipisicing elit, sed do eiusmod tempor incididunt
                              ut labore et dolore magna aliqua. Ut enim ad minim
                              veniam, quis nostrud exercitation ullamco laboris
                              nisi ctetur, adipisci velit, sed quia non numquam
                              eius modi.
                            </p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <a href="#">
                          <strong class="title">Day 5</strong>
                          <span>Day subtitle message</span>
                        </a>
                        <div class="slide">
                          <div class="slide-holder">
                            <p>
                              Lorem ipsum dolor sit amet, consectetur
                              adipisicing elit, sed do eiusmod tempor incididunt
                              ut labore et dolore magna aliqua. Ut enim ad minim
                              veniam, quis nostrud exercitation ullamco laboris
                              nisi ctetur, adipisci velit, sed quia non numquam
                              eius modi.
                            </p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <a href="#">
                          <strong class="title">Day 6</strong>
                          <span>Day subtitle message</span>
                        </a>
                        <div class="slide">
                          <div class="slide-holder">
                            <p>
                              Lorem ipsum dolor sit amet, consectetur
                              adipisicing elit, sed do eiusmod tempor incididunt
                              ut labore et dolore magna aliqua. Ut enim ad minim
                              veniam, quis nostrud exercitation ullamco laboris
                              nisi ctetur, adipisci velit, sed quia non numquam
                              eius modi.
                            </p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <a href="#">
                          <strong class="title">Day 7</strong>
                          <span>Depart London</span>
                        </a>
                        <div class="slide">
                          <div class="slide-holder">
                            <p>
                              Lorem ipsum dolor sit amet, consectetur
                              adipisicing elit, sed do eiusmod tempor incididunt
                              ut labore et dolore magna aliqua. Ut enim ad minim
                              veniam, quis nostrud exercitation ullamco laboris
                              nisi ctetur, adipisci velit, sed quia non numquam
                              eius modi.
                            </p>
                          </div>
                        </div>
                      </li>
                      <li class="active">
                        <a href="#">
                          <strong class="title">Day 8</strong>
                          <span>Return to London</span>
                        </a>
                        <div class="slide">
                          <div class="slide-holder">
                            <p>
                              This is Photoshop's version of Lorem Ipsum. Proin
                              gravida nibh vel velit auctor aliquet. Aenean
                              sollicitudin, lorem quis bibendum auctor, nisi
                              elit consequat ipsum, nec sagittis sem nibh id
                              elit.
                            </p>
                            <p>
                              Duis sed odio sit amet nibh vulputate cursus a sit
                              amet mauris. Morbi accumsan ipsum velit. Nam nec
                              tellus a odio tincidunt auctor a ornare odio.
                            </p>
                          </div>
                        </div>
                      </li>
                    </ol>
                  </div>
                  <div class="col-md-6">
                    <article class="img-article article-light">
                      <div class="img-wrap">
                        <img
                          src="img/generic/img-08.jpg"
                          height="319"
                          width="570"
                          alt="image description"
                        />
                      </div>
                      <div class="text-block">
                        <h3><a href="#">Member taking a short break</a></h3>
                        <p>
                          Consider packing your bag with folloing daily
                          essentials.
                        </p>
                      </div>
                    </article>
                    <article class="img-article article-light">
                      <div class="img-wrap">
                        <img
                          src="img/generic/img-09.jpg"
                          height="319"
                          width="570"
                          alt="image description"
                        />
                      </div>
                      <div class="text-block">
                        <h3>
                          <a href="#">Couple enjoying the spectacular view</a>
                        </h3>
                        <p>
                          Consider packing your bag with folloing daily
                          essentials.
                        </p>
                      </div>
                    </article>
                  </div>
                </div>
              </div>
              <!-- accomodation tab content -->
              <div role="tabpanel" class="tab-pane" id="tab03">
                <div class="row">
                  <div class="col-md-6">
                    <strong class="header-box"
                      >Hotels, Tea Houses and Lodges</strong
                    >
                    <div class="detail">
                      <p>
                        This is Photoshop's version of Lorem Ipsum. Proin
                        gravida nibh vel velit auctor aliquet. Aenean
                        sollicitudin, lorem quis bibendum auctor, nisi elit
                        consequat ipsum, nec sagittis sem nibh id elit.
                      </p>
                      <p>
                        Duis sed odio sit amet nibh vulputate cursus a sit amet
                        mauris. Morbi accumsan ipsum velit. Nam nec tellus a
                        odio tincidunt auctor a ornare odio.
                      </p>
                      <p>
                        Sed non mauris vitae erat consequat auctor eu in elit.
                        Class aptent taciti sociosqu ad litora torquent per
                        conubia nostra, per inceptos himenaeos. Mauris in erat
                        justo.
                      </p>
                      <p>
                        Nullam ac urna eu felis dapibus condimentum sit amet a
                        augue. Sed non neque elit. Sed ut imperdiet nisi.
                      </p>
                      <p>
                        Proin condimentum fermentum nunc. Etiam pharetra, erat
                        sed fermentum feugiat, velit mauris egestas quam.
                      </p>
                      <p>
                        Ulins aliquam massa nisl quis neque. Proin condimentum
                        fermentum nunc. Etiam pharetra, erat sed fermentum
                        feugiat, velit mauris egestas quam, ut aliquam massa
                        nisl quis neque.
                      </p>
                      <p>
                        Proin condimentum fermentum nunc. Etiam pharetra, erat
                        sed fermentum feugiat, velit mauris egestas quam.
                      </p>
                      <p>
                        Ulins aliquam massa nisl quis neque. Proin condimentum
                        fermentum nunc. Etiam pharetra, erat sed fermentum
                        feugiat, velit mauris egestas quam, ut aliquam massa
                        nisl quis neque.
                      </p>
                      <p>
                        Ulins aliquam massa nisl quis neque. Proin condimentum
                        fermentum nunc. Etiam pharetra, erat sed fermentum
                        feugiat, velit mauris egestas quam, ut aliquam massa
                        nisl quis neque.
                      </p>
                      <p>Suspendisse gin orci enim.</p>
                    </div>
                  </div>
                  <div class="col-md-6 accomodation-block">
                    <strong class="header-box"
                      >The tour package inclusions and exclusions at a
                      glance</strong
                    >
                    <div class="text-box">
                      <div class="holder">
                        <strong class="title"
                          >Shared Rooms included in teh Price</strong
                        >
                        <span class="sub-title"
                          >Items that are covered in the cost of tour
                          price.</span
                        >
                        <div class="img-holder">
                          <img
                            src="img/generic/img-10.jpg"
                            height="467"
                            width="700"
                            alt="image description"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="text-box not-included">
                      <div class="holder">
                        <strong class="title"
                          >Individual Rooms not included in the Price</strong
                        >
                        <span class="sub-title"
                          >Items that are covered in the cost of tour
                          price.</span
                        >
                        <div class="img-holder">
                          <img
                            src="img/generic/img-11.jpg"
                            height="467"
                            width="700"
                            alt="image description"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- faq and review tab content -->
              <div role="tabpanel" class="tab-pane" id="tab04">
                <div class="row">
                  <div class="col-md-6">
                    <div class="question-select">
                      <select id="tabSelect" class="question">
                        <option value="#innerTab1">
                          What kind of footwear is suitable?
                        </option>
                        <option value="#innerTab2">
                          What kind of bag is suitable?
                        </option>
                        <option value="#innerTab3">
                          What kind of clothes are suitable?
                        </option>
                      </select>
                      <ul class="nav nav-tabs" id="questionTab">
                        <li class="active">
                          <a href="#innerTab1" data-toggle="tab"
                            >What kind of footwear wearing is suitable?</a
                          >
                        </li>
                        <li>
                          <a href="#innerTab2" data-toggle="tab"
                            >What kind of bag is suitable?</a
                          >
                        </li>
                        <li>
                          <a href="#innerTab3" data-toggle="tab"
                            >What kind of clothes wearing is suitable?</a
                          >
                        </li>
                      </ul>
                    </div>
                    <div class="tab-wrapper">
                      <div
                        role="tabpanel"
                        class="tab-pane active"
                        id="innerTab1"
                      >
                        <div class="detail">
                          <p>
                            This is Photoshop's version of Lorem Ipsum. Proin
                            gravida nibh vel velit auctor aliquet. Aenean
                            sollicitudin, lorem quis bibendum auctor, nisi elit
                            consequat ipsum, nec sagittis sem nibh id elit.
                          </p>
                          <p>
                            Duis sed odio sit amet nibh vulputate cursus a sit
                            amet mauris. Morbi accumsan ipsum velit. Nam nec
                            tellus a odio tincidunt auctor a ornare odio.
                          </p>
                          <p>
                            Sed non mauris vitae erat consequat auctor eu in
                            elit. Class aptent taciti sociosqu ad litora
                            torquent per conubia nostra, per inceptos himenaeos.
                            Mauris in erat justo.
                          </p>
                          <p>
                            Nullam ac urna eu felis dapibus condimentum sit amet
                            a augue. Sed non neque elit. Sed ut imperdiet nisi.
                          </p>
                          <p>
                            Proin condimentum fermentum nunc. Etiam pharetra,
                            erat sed fermentum feugiat, velit mauris egestas
                            quam.
                          </p>
                          <p>
                            Ulins aliquam massa nisl quis neque. Proin
                            condimentum fermentum nunc. Etiam pharetra, erat sed
                            fermentum feugiat, velit mauris egestas quam, ut
                            aliquam massa nisl quis neque.
                          </p>
                          <p>
                            Proin condimentum fermentum nunc. Etiam pharetra,
                            erat sed fermentum feugiat, velit mauris egestas
                            quam.
                          </p>
                          <p>
                            Ulins aliquam massa nisl quis neque. Proin
                            condimentum fermentum nunc. Etiam pharetra, erat sed
                            fermentum feugiat, velit mauris egestas quam, ut
                            aliquam massa nisl quis neque.
                          </p>
                          <p>Suspendisse gin orci enim.</p>
                          <ul class="img-list">
                            <li>
                              <img
                                src="img/generic/img-12.jpg"
                                height="52"
                                width="101"
                                alt="image description"
                              />
                            </li>
                            <li>
                              <img
                                src="img/generic/img-13.jpg"
                                height="97"
                                width="114"
                                alt="image description"
                              />
                            </li>
                            <li>
                              <img
                                src="img/generic/img-14.jpg"
                                height="104"
                                width="124"
                                alt="image description"
                              />
                            </li>
                          </ul>
                          <div class="reviews-slot v-middle">
                            <div class="thumb">
                              <a href="#"
                                ><img
                                  src="img/thumbs/img-04.jpg"
                                  height="50"
                                  width="50"
                                  alt="image description"
                              /></a>
                            </div>
                            <div class="text">
                              <strong class="name"
                                ><a href="#"
                                  >Jessica Lambert - Customer Relations</a
                                ></strong
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                      <div role="tabpanel" class="tab-pane" id="innerTab2">
                        <div class="detail">
                          <p>
                            This is Photoshop's version of Lorem Ipsum. Proin
                            gravida nibh vel velit auctor aliquet. Aenean
                            sollicitudin, lorem quis bibendum auctor, nisi elit
                            consequat ipsum, nec sagittis sem nibh id elit.
                          </p>
                          <p>
                            Duis sed odio sit amet nibh vulputate cursus a sit
                            amet mauris. Morbi accumsan ipsum velit. Nam nec
                            tellus a odio tincidunt auctor a ornare odio.
                          </p>
                          <p>
                            Sed non mauris vitae erat consequat auctor eu in
                            elit. Class aptent taciti sociosqu ad litora
                            torquent per conubia nostra, per inceptos himenaeos.
                            Mauris in erat justo.
                          </p>
                          <p>
                            Nullam ac urna eu felis dapibus condimentum sit amet
                            a augue. Sed non neque elit. Sed ut imperdiet nisi.
                          </p>
                          <div class="reviews-slot v-middle">
                            <div class="thumb">
                              <a href="#"
                                ><img
                                  src="img/thumbs/img-04.jpg"
                                  height="50"
                                  width="50"
                                  alt="image description"
                              /></a>
                            </div>
                            <div class="text">
                              <strong class="name"
                                ><a href="#"
                                  >Jessica Lambert - Customer Relations</a
                                ></strong
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                      <div role="tabpanel" class="tab-pane" id="innerTab3">
                        <div class="detail">
                          <p>
                            This is Photoshop's version of Lorem Ipsum. Proin
                            gravida nibh vel velit auctor aliquet. Aenean
                            sollicitudin, lorem quis bibendum auctor, nisi elit
                            consequat ipsum, nec sagittis sem nibh id elit.
                          </p>
                          <p>
                            Duis sed odio sit amet nibh vulputate cursus a sit
                            amet mauris. Morbi accumsan ipsum velit. Nam nec
                            tellus a odio tincidunt auctor a ornare odio.
                          </p>
                          <p>
                            Sed non mauris vitae erat consequat auctor eu in
                            elit. Class aptent taciti sociosqu ad litora
                            torquent per conubia nostra, per inceptos himenaeos.
                            Mauris in erat justo.
                          </p>
                          <p>
                            Nullam ac urna eu felis dapibus condimentum sit amet
                            a augue. Sed non neque elit. Sed ut imperdiet nisi.
                          </p>
                          <p>
                            Proin condimentum fermentum nunc. Etiam pharetra,
                            erat sed fermentum feugiat, velit mauris egestas
                            quam.
                          </p>
                          <p>
                            Ulins aliquam massa nisl quis neque. Proin
                            condimentum fermentum nunc. Etiam pharetra, erat sed
                            fermentum feugiat, velit mauris egestas quam, ut
                            aliquam massa nisl quis neque.
                          </p>
                          <p>
                            Proin condimentum fermentum nunc. Etiam pharetra,
                            erat sed fermentum feugiat, velit mauris egestas
                            quam.
                          </p>
                          <p>
                            Ulins aliquam massa nisl quis neque. Proin
                            condimentum fermentum nunc. Etiam pharetra, erat sed
                            fermentum feugiat, velit mauris egestas quam, ut
                            aliquam massa nisl quis neque.
                          </p>
                          <p>Suspendisse gin orci enim.</p>
                          <ul class="img-list">
                            <li>
                              <img
                                src="img/generic/img-12.jpg"
                                height="52"
                                width="101"
                                alt="image description"
                              />
                            </li>
                            <li>
                              <img
                                src="img/generic/img-13.jpg"
                                height="97"
                                width="114"
                                alt="image description"
                              />
                            </li>
                            <li>
                              <img
                                src="img/generic/img-14.jpg"
                                height="104"
                                width="124"
                                alt="image description"
                              />
                            </li>
                          </ul>
                          <div class="reviews-slot v-middle">
                            <div class="thumb">
                              <a href="#"
                                ><img
                                  src="img/thumbs/img-04.jpg"
                                  height="50"
                                  width="50"
                                  alt="image description"
                              /></a>
                            </div>
                            <div class="text">
                              <strong class="name"
                                ><a href="#"
                                  >Jessica Lambert - Customer Relations</a
                                ></strong
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="header-box">
                      <a href="#" class="link-right">Writing A Review</a>
                      <span class="rate-left">
                        <strong class="title">Overall Rating</strong>
                        <span class="star-rating">
                          <span><span class="icon-star"></span></span>
                          <span><span class="icon-star"></span></span>
                          <span><span class="icon-star"></span></span>
                          <span><span class="icon-star"></span></span>
                          <span class="disable"
                            ><span class="icon-star"></span
                          ></span>
                        </span>
                        <span class="value">4.7/5</span>
                      </span>
                    </div>
                    <div class="comments reviews-body">
                      <div class="comment-holder">
                        <div class="comment-slot">
                          <div class="thumb">
                            <a href="#"
                              ><img
                                src="img/thumbs/img-05.jpg"
                                height="50"
                                width="50"
                                alt="image description"
                            /></a>
                          </div>
                          <div class="text">
                            <header class="comment-head">
                              <div class="left">
                                <strong class="name">
                                  <a href="#">Cleona Torez - Spain</a>
                                </strong>
                                <div class="meta">Reviewed on 14/1/2016</div>
                              </div>
                              <div class="right">
                                <div class="star-rating">
                                  <span><span class="icon-star"></span></span>
                                  <span><span class="icon-star"></span></span>
                                  <span><span class="icon-star"></span></span>
                                  <span><span class="icon-star"></span></span>
                                  <span class="disable"
                                    ><span class="icon-star"></span
                                  ></span>
                                </div>
                                <span class="value">4.7/5</span>
                              </div>
                            </header>
                            <div class="des">
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
                        </div>
                        <div class="comment-slot">
                          <div class="thumb">
                            <a href="#"
                              ><img
                                src="img/thumbs/img-06.jpg"
                                height="50"
                                width="50"
                                alt="image description"
                            /></a>
                          </div>
                          <div class="text">
                            <header class="comment-head">
                              <div class="left">
                                <strong class="name">
                                  <a href="#">Cleona Torez - Spain</a>
                                </strong>
                                <div class="meta">Reviewed on 14/1/2016</div>
                              </div>
                              <div class="right">
                                <div class="star-rating">
                                  <span><span class="icon-star"></span></span>
                                  <span><span class="icon-star"></span></span>
                                  <span><span class="icon-star"></span></span>
                                  <span><span class="icon-star"></span></span>
                                  <span class="disable"
                                    ><span class="icon-star"></span
                                  ></span>
                                </div>
                                <span class="value">4.7/5</span>
                              </div>
                            </header>
                            <div class="des">
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
                        </div>
                        <div class="comment-slot">
                          <div class="thumb">
                            <a href="#"
                              ><img
                                src="img/thumbs/img-07.jpg"
                                height="50"
                                width="50"
                                alt="image description"
                            /></a>
                          </div>
                          <div class="text">
                            <header class="comment-head">
                              <div class="left">
                                <strong class="name">
                                  <a href="#">Cleona Torez - Spain</a>
                                </strong>
                                <div class="meta">Reviewed on 14/1/2016</div>
                              </div>
                              <div class="right">
                                <div class="star-rating">
                                  <span><span class="icon-star"></span></span>
                                  <span><span class="icon-star"></span></span>
                                  <span><span class="icon-star"></span></span>
                                  <span><span class="icon-star"></span></span>
                                  <span class="disable"
                                    ><span class="icon-star"></span
                                  ></span>
                                </div>
                                <span class="value">4.7/5</span>
                              </div>
                            </header>
                            <div class="des">
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
                        </div>
                      </div>
                      <div class="link-more text-center">
                        <a href="#">Show More Reviews - 75 Reviews</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- gallery tab content -->
              <div role="tabpanel" class="tab-pane" id="tab05">
                <ul class="row gallery-list has-center">
                  <li class="col-sm-6">
                    <a
                      class="fancybox"
                      data-fancybox-group="group"
                      href="img/gallery/img-10-2.jpg"
                      title="Caption Goes Here"
                    >
                      <span class="img-holder">
                        <img
                          src="img/gallery/img-10.jpg"
                          height="750"
                          width="450"
                          alt="image description"
                        />
                      </span>
                      <span class="caption">
                        <span class="centered">
                          <strong class="title">ANNAPURNA VIEW</strong>
                          <span class="sub-text">The Classic Trek</span>
                        </span>
                      </span>
                    </a>
                  </li>
                  <li class="col-sm-6">
                    <a
                      class="fancybox"
                      data-fancybox-group="group"
                      href="img/gallery/img-11-2.jpg"
                      title="Caption Goes Here"
                    >
                      <span class="img-holder">
                        <img
                          src="img/gallery/img-11.jpg"
                          height="240"
                          width="370"
                          alt="image description"
                        />
                      </span>
                      <span class="caption">
                        <span class="centered">
                          <strong class="title">ANNAPURNA VIEW</strong>
                          <span class="sub-text">The Classic Trek</span>
                        </span>
                      </span>
                    </a>
                  </li>
                  <li class="col-sm-6">
                    <a
                      class="fancybox"
                      data-fancybox-group="group"
                      href="img/gallery/img-12-2.jpg"
                      title="Caption Goes Here"
                    >
                      <span class="img-holder">
                        <img
                          src="img/gallery/img-12.jpg"
                          height="240"
                          width="370"
                          alt="image description"
                        />
                      </span>
                      <span class="caption">
                        <span class="centered">
                          <strong class="title">ANNAPURNA VIEW</strong>
                          <span class="sub-text">The Classic Trek</span>
                        </span>
                      </span>
                    </a>
                  </li>
                  <li class="col-sm-6">
                    <a
                      class="fancybox"
                      data-fancybox-group="group"
                      href="img/gallery/img-13-2.jpg"
                      title="Caption Goes Here"
                    >
                      <span class="img-holder">
                        <img
                          src="img/gallery/img-13.jpg"
                          height="240"
                          width="370"
                          alt="image description"
                        />
                      </span>
                      <span class="caption">
                        <span class="centered">
                          <strong class="title">ANNAPURNA VIEW</strong>
                          <span class="sub-text">The Classic Trek</span>
                        </span>
                      </span>
                    </a>
                  </li>
                  <li class="col-sm-6">
                    <a
                      class="fancybox"
                      data-fancybox-group="group"
                      href="img/gallery/img-14-2.jpg"
                      title="Caption Goes Here"
                    >
                      <span class="img-holder">
                        <img
                          src="img/gallery/img-14.jpg"
                          height="240"
                          width="370"
                          alt="image description"
                        />
                      </span>
                      <span class="caption">
                        <span class="centered">
                          <strong class="title">ANNAPURNA VIEW</strong>
                          <span class="sub-text">The Classic Trek</span>
                        </span>
                      </span>
                    </a>
                  </li>
                  <li class="col-sm-6">
                    <a
                      class="fancybox"
                      data-fancybox-group="group"
                      href="img/gallery/img-15-2.jpg"
                      title="Caption Goes Here"
                    >
                      <span class="img-holder">
                        <img
                          src="img/gallery/img-15.jpg"
                          height="240"
                          width="370"
                          alt="image description"
                        />
                      </span>
                      <span class="caption">
                        <span class="centered">
                          <strong class="title">ANNAPURNA VIEW</strong>
                          <span class="sub-text">The Classic Trek</span>
                        </span>
                      </span>
                    </a>
                  </li>
                  <li class="col-sm-6">
                    <a
                      class="fancybox"
                      data-fancybox-group="group"
                      href="img/gallery/img-16-2.jpg"
                      title="Caption Goes Here"
                    >
                      <span class="img-holder">
                        <img
                          src="img/gallery/img-16.jpg"
                          height="240"
                          width="370"
                          alt="image description"
                        />
                      </span>
                      <span class="caption">
                        <span class="centered">
                          <strong class="title">ANNAPURNA VIEW</strong>
                          <span class="sub-text">The Classic Trek</span>
                        </span>
                      </span>
                    </a>
                  </li>
                  <li class="col-sm-6">
                    <a
                      class="fancybox"
                      data-fancybox-group="group"
                      href="img/gallery/img-17-2.jpg"
                      title="Caption Goes Here"
                    >
                      <span class="img-holder">
                        <img
                          src="img/gallery/img-17.jpg"
                          height="240"
                          width="370"
                          alt="image description"
                        />
                      </span>
                      <span class="caption">
                        <span class="centered">
                          <strong class="title">ANNAPURNA VIEW</strong>
                          <span class="sub-text">The Classic Trek</span>
                        </span>
                      </span>
                    </a>
                  </li>
                  <li class="col-sm-6">
                    <a
                      class="fancybox"
                      data-fancybox-group="group"
                      href="img/gallery/img-18-2.jpg"
                      title="Caption Goes Here"
                    >
                      <span class="img-holder">
                        <img
                          src="img/gallery/img-18.jpg"
                          height="240"
                          width="370"
                          alt="image description"
                        />
                      </span>
                      <span class="caption">
                        <span class="centered">
                          <strong class="title">ANNAPURNA VIEW</strong>
                          <span class="sub-text">The Classic Trek</span>
                        </span>
                      </span>
                    </a>
                  </li>
                </ul>
              </div>
              <!-- dates and prices tab content -->
              <div role="tabpanel" class="tab-pane" id="tab06">
                <div class="table-container">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            <strong class="date-text">Departure Dates</strong>
                            <span class="sub-text">Confirmed Dates</span>
                          </th>
                          <th>
                            <strong class="date-text">Trip Status</strong>
                            <span class="sub-text">Trip Status</span>
                          </th>
                          <th>
                            <strong class="date-text">Price (PP)</strong>
                            <span class="sub-text">Including Flights</span>
                          </th>
                          <th>
                            <strong class="date-text">Price (PP)</strong>
                            <span class="sub-text">Excluding Flights</span>
                          </th>
                          <th>&nbsp;</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="cell">
                              <div class="middle">
                                Fri 18 Oct '16 - Sun 04 Nov '16
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="cell">
                              <div class="middle">
                                Available &amp; Guaranteed
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="cell">
                              <div class="middle">$2,779</div>
                            </div>
                          </td>
                          <td>
                            <div class="cell">
                              <div class="middle">$3,170</div>
                            </div>
                          </td>
                          <td>
                            <div class="cell">
                              <div class="middle">
                                <a href="#" class="btn btn-default">BOOK NOW</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="cell">
                              <div class="middle">
                                Fri 18 Oct '16 - Sun 04 Nov '16
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="cell">
                              <div class="middle">Booked &amp; Guaranteed</div>
                            </div>
                          </td>
                          <td>
                            <div class="cell">
                              <div class="middle">$2,679</div>
                            </div>
                          </td>
                          <td>
                            <div class="cell">
                              <div class="middle">$3,970</div>
                            </div>
                          </td>
                          <td>
                            <div class="cell">
                              <div class="middle">
                                <a href="#" class="btn btn-default">BOOK NOW</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="cell">
                              <div class="middle">
                                Fri 18 Oct '16 - Sun 04 Nov '16
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="cell">
                              <div class="middle">
                                Available &amp; Guaranteed
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="cell">
                              <div class="middle">$1,779</div>
                            </div>
                          </td>
                          <td>
                            <div class="cell">
                              <div class="middle">$3,470</div>
                            </div>
                          </td>
                          <td>
                            <div class="cell">
                              <div class="middle">
                                <a href="#" class="btn btn-default">BOOK NOW</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="cell">
                              <div class="middle">
                                Fri 18 Oct '16 - Sun 04 Nov '16
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="cell">
                              <div class="middle">Available</div>
                            </div>
                          </td>
                          <td>
                            <div class="cell">
                              <div class="middle">$2,779</div>
                            </div>
                          </td>
                          <td>
                            <div class="cell">
                              <div class="middle">$3,970</div>
                            </div>
                          </td>
                          <td>
                            <div class="cell">
                              <div class="middle">
                                <a href="#" class="btn btn-default">BOOK NOW</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="cell">
                              <div class="middle">
                                Fri 18 Oct '16 - Sun 04 Nov '16
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="cell">
                              <div class="middle">Booked &amp; Guaranteed</div>
                            </div>
                          </td>
                          <td>
                            <div class="cell">
                              <div class="middle">$3,779</div>
                            </div>
                          </td>
                          <td>
                            <div class="cell">
                              <div class="middle">$4,970</div>
                            </div>
                          </td>
                          <td>
                            <div class="cell">
                              <div class="middle">
                                <a href="#" class="btn btn-default">BOOK NOW</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="cell">
                              <div class="middle">
                                Fri 18 Oct '16 - Sun 04 Nov '16
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="cell">
                              <div class="middle">
                                Available &amp; Guaranteed
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="cell">
                              <div class="middle">$2,879</div>
                            </div>
                          </td>
                          <td>
                            <div class="cell">
                              <div class="middle">$3,970</div>
                            </div>
                          </td>
                          <td>
                            <div class="cell">
                              <div class="middle">
                                <a href="#" class="btn btn-default">BOOK NOW</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="cell">
                              <div class="middle">
                                Fri 18 Oct '16 - Sun 04 Nov '16
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="cell">
                              <div class="middle">
                                Available &amp; Guaranteed
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="cell">
                              <div class="middle">$2,679</div>
                            </div>
                          </td>
                          <td>
                            <div class="cell">
                              <div class="middle">$1,970</div>
                            </div>
                          </td>
                          <td>
                            <div class="cell">
                              <div class="middle">
                                <a href="#" class="btn btn-default">BOOK NOW</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="cell">
                              <div class="middle">
                                Fri 18 Oct '16 - Sun 04 Nov '16
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="cell">
                              <div class="middle">Booked &amp; Guaranteed</div>
                            </div>
                          </td>
                          <td>
                            <div class="cell">
                              <div class="middle">$4,779</div>
                            </div>
                          </td>
                          <td>
                            <div class="cell">
                              <div class="middle">$3,970</div>
                            </div>
                          </td>
                          <td>
                            <div class="cell">
                              <div class="middle">
                                <a href="#" class="btn btn-default">BOOK NOW</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="cell">
                              <div class="middle">
                                Fri 18 Oct '16 - Sun 04 Nov '16
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="cell">
                              <div class="middle">
                                Available &amp; Guaranteed
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="cell">
                              <div class="middle">$5,779</div>
                            </div>
                          </td>
                          <td>
                            <div class="cell">
                              <div class="middle">$3,270</div>
                            </div>
                          </td>
                          <td>
                            <div class="cell">
                              <div class="middle">
                                <a href="#" class="btn btn-default">BOOK NOW</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="cell">
                              <div class="middle">
                                Fri 18 Oct '16 - Sun 04 Nov '16
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="cell">
                              <div class="middle">
                                Available &amp; Guaranteed
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="cell">
                              <div class="middle">$2,779</div>
                            </div>
                          </td>
                          <td>
                            <div class="cell">
                              <div class="middle">$3,970</div>
                            </div>
                          </td>
                          <td>
                            <div class="cell">
                              <div class="middle">
                                <a href="#" class="btn btn-default">BOOK NOW</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="load-more text-center text-uppercase">
                    <a href="#">MORE DATES &amp; PRICES</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- recent block -->
          <aside class="recent-block recent-gray recent-wide-thumbnail">
            <div class="container">
              <h2 class="text-center text-uppercase">RECENTLY VIEWED</h2>
              <div class="row">
                <article class="col-sm-6 col-md-3 article">
                  <div class="thumbnail">
                    <h3 class="no-space">
                      <a href="#">Everest Basecamp Trek</a>
                    </h3>
                    <strong class="info-title">Everest Region, Nepal</strong>
                    <div class="img-wrap">
                      <img
                        src="img/listing/img-31.jpg"
                        height="210"
                        width="250"
                        alt="image description"
                      />
                    </div>
                    <footer>
                      <div class="sub-info">
                        <span>5 Days</span>
                        <span>$299</span>
                      </div>
                      <ul class="ico-list">
                        <li class="pop-opener">
                          <a href="#">
                            <span class="icon-hiking"></span>
                            <span class="popup"> Hiking </span>
                          </a>
                        </li>
                        <li class="pop-opener">
                          <a href="#">
                            <span class="icon-mountain"></span>
                            <span class="popup"> Mountain </span>
                          </a>
                        </li>
                        <li class="pop-opener">
                          <a href="#">
                            <span class="icon-level5"></span>
                            <span class="popup"> Level 5 </span>
                          </a>
                        </li>
                      </ul>
                    </footer>
                  </div>
                </article>
                <article class="col-sm-6 col-md-3 article">
                  <div class="thumbnail">
                    <h3 class="no-space">
                      <a href="#">Everest Basecamp Trek</a>
                    </h3>
                    <strong class="info-title">Everest Region, Nepal</strong>
                    <div class="img-wrap">
                      <img
                        src="img/listing/img-32.jpg"
                        height="210"
                        width="250"
                        alt="image description"
                      />
                    </div>
                    <footer>
                      <div class="sub-info">
                        <span>5 Days</span>
                        <span>$299</span>
                      </div>
                      <ul class="ico-list">
                        <li class="pop-opener">
                          <a href="#">
                            <span class="icon-hiking"></span>
                            <span class="popup"> Hiking </span>
                          </a>
                        </li>
                        <li class="pop-opener">
                          <a href="#">
                            <span class="icon-mountain"></span>
                            <span class="popup"> Mountain </span>
                          </a>
                        </li>
                        <li class="pop-opener">
                          <a href="#">
                            <span class="icon-level5"></span>
                            <span class="popup"> Level 5 </span>
                          </a>
                        </li>
                      </ul>
                    </footer>
                  </div>
                </article>
                <article class="col-sm-6 col-md-3 article">
                  <div class="thumbnail">
                    <h3 class="no-space">
                      <a href="#">Everest Basecamp Trek</a>
                    </h3>
                    <strong class="info-title">Everest Region, Nepal</strong>
                    <div class="img-wrap">
                      <img
                        src="img/listing/img-33.jpg"
                        height="210"
                        width="250"
                        alt="image description"
                      />
                    </div>
                    <footer>
                      <div class="sub-info">
                        <span>5 Days</span>
                        <span>$299</span>
                      </div>
                      <ul class="ico-list">
                        <li class="pop-opener">
                          <a href="#">
                            <span class="icon-hiking"></span>
                            <span class="popup"> Hiking </span>
                          </a>
                        </li>
                        <li class="pop-opener">
                          <a href="#">
                            <span class="icon-mountain"></span>
                            <span class="popup"> Mountain </span>
                          </a>
                        </li>
                        <li class="pop-opener">
                          <a href="#">
                            <span class="icon-level5"></span>
                            <span class="popup"> Level 5 </span>
                          </a>
                        </li>
                      </ul>
                    </footer>
                  </div>
                </article>
                <article class="col-sm-6 col-md-3 article">
                  <div class="thumbnail">
                    <h3 class="no-space">
                      <a href="#">Everest Basecamp Trek</a>
                    </h3>
                    <strong class="info-title">Everest Region, Nepal</strong>
                    <div class="img-wrap">
                      <img
                        src="img/listing/img-34.jpg"
                        height="210"
                        width="250"
                        alt="image description"
                      />
                    </div>
                    <footer>
                      <div class="sub-info">
                        <span>5 Days</span>
                        <span>$299</span>
                      </div>
                      <ul class="ico-list">
                        <li class="pop-opener">
                          <a href="#">
                            <span class="icon-hiking"></span>
                            <span class="popup"> Hiking </span>
                          </a>
                        </li>
                        <li class="pop-opener">
                          <a href="#">
                            <span class="icon-mountain"></span>
                            <span class="popup"> Mountain </span>
                          </a
                          >
                        </li>
                        <li class="pop-opener">
                          <a href="#">
                            <span class="icon-level5"></span>
                            <span class="popup"> Level 5 </span>
                          </a>
                        </li>
                      </ul>
                    </footer>
                  </div>
                </article>
              </div>
            </div>
          </aside>
        </main>
@endsection
