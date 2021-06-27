  <header id="header" class="default-white-header header-v2">
          <div class="container-fluid">
           
            <!-- logo -->
            <div class="logo">
              <a href="{{route('web.index')}}">
                <img class="normal" src="{{asset('assets/web/img/logos/logo.svg')}}" alt="Entrada" />
                <img
                  class="gray-logo"
                  src="{{asset('assets/web/img/logos/logo-gray.svg')}}"
                  alt="Entrada"
                />
              </a>
            </div>
            <!-- main navigation -->
            <nav class="navbar navbar-default">
              <div class="navbar-header">
                <button
                  type="button"
                  class="navbar-toggle nav-opener"
                  data-toggle="collapse"
                  data-target="#nav"
                >
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>
              <!-- main menu items and drop for mobile -->
              <div class="collapse navbar-collapse" id="nav">
                <!-- main navbar -->
                <ul class="nav navbar-nav nav-center">
                   <li><a href="{{route('web.index')}}">Trang chủ</a></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                      >Du lịch <b class="icon-angle-down"></b
                    ></a>
                    <div class="dropdown-menu">
                      <ul>
                        <li>
                          <a href="{{route('web.tourtype')}}"
                            >Du lịch trong nước</a
                          >
                        </li>
                        <li>
                          <a href="#"
                            >Du lịch nước ngoài</a
                          >
                        </li>
                      </ul>
                    </div>
                  </li>
                 <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                      >Tin tức <b class="icon-angle-down"></b
                    ></a>
                    <div class="dropdown-menu">
                      <ul>
                        <li>
                          
                          <a href="{{ route('post.web.category', 'tin-tuc-noi-bat')}}"
                            >Cẩm nang du lịch</a
                          >
                        </li>
                        <li>
                          <a href="{{ route('post.web.category', 'cac-su-kien')}}"
                            >Kinh nghiệm du lịch</a
                          >
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li><a href="{{route('web.contact')}}">Liên hệ</a></li>
                  <li><a href="{{route('web.tourdetail')}}">Chi tiết</a></li>                          
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li class="visible-xs visible-sm">
                    <a href="login.html">
                      <span class="icon icon-user"></span>
                      <span class="text">Login</span>
                    </a>
                  </li>
                  <li class="hidden-xs hidden-sm">
                    <a href="login.html">
                      <span class="icon icon-user"></span>
                    </a>
                  </li>
                  <li
                    class="visible-xs visible-sm nav-visible dropdown last-dropdown"
                  >
                    <a href="my-cart.html" data-toggle="dropdown">
                      <span class="icon icon-cart"></span>
                      <span class="text hidden-md hidden-lg">Cart</span>
                      <span class="text hidden-xs hidden-sm">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-md">
                      <div class="drop-wrap cart-wrap">
                        <strong class="title">Shopping Cart</strong>
                        <ul class="cart-list">
                          <li>
                            <div class="img">
                              <a href="#">
                                <img
                                  src="{{asset('assets/web/img/listing/img-16.jpg')}}"
                                  height="165"
                                  width="170"
                                  alt="image description"
                                />
                              </a>
                            </div>
                            <div class="text-holder">
                              <span class="amount">x 2</span>
                              <div class="text-wrap">
                                <strong class="name"
                                  ><a href="#">Weekend in Paradise</a></strong
                                >
                                <span class="price">$199</span>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="img">
                              <a href="#">
                                <img
                                  src="{{asset('assets/web/img/listing/img-17.jpg')}}"
                                  height="165"
                                  width="170"
                                  alt="image description"
                                />
                              </a>
                            </div>
                            <div class="text-holder">
                              <span class="amount">x 4</span>
                              <div class="text-wrap">
                                <strong class="name"
                                  ><a href="#">Water Sports in Spain</a></strong
                                >
                                <span class="price">$199</span>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="img">
                              <a href="#">
                                <img
                                  src="{{asset('assets/web/img/listing/img-18.jpg')}}"
                                  height="165"
                                  width="170"
                                  alt="image description"
                                />
                              </a>
                            </div>
                            <div class="text-holder">
                              <span class="amount">x 4</span>
                              <div class="text-wrap">
                                <strong class="name"
                                  ><a href="#">Beach Party in Greece</a></strong
                                >
                                <span class="price">$199</span>
                              </div>
                            </div>
                          </li>
                        </ul>
                        <div class="footer">
                          <a href="my-cart.html" class="btn btn-primary"
                            >View cart</a
                          >
                          <span class="total">$3300</span>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="dropdown hidden-xs hidden-sm last-dropdown">
                    <a href="#"
                      ><span class="text">EN</span>
                      <span class="icon-angle-down"></span
                    ></a>
                    <div class="dropdown-menu dropdown-sm">
                      <div class="drop-wrap lang-wrap">
                        <div class="lang-row">
                          <div class="lang-col">
                            <a href="#">
                              <span class="text">English</span>
                            </a>
                          </div>
                        </div>
                        <div class="lang-row">
                          <div class="lang-col">
                            <a href="#">
                              <span class="text">German</span>
                            </a>
                          </div>
                        </div>
                        <div class="lang-row">
                          <div class="lang-col">
                            <a href="#">
                              <span class="text">Russian</span>
                            </a>
                          </div>
                        </div>
                        <div class="lang-row">
                          <div class="lang-col">
                            <a href="#">
                              <span class="text">Czech</span>
                            </a>
                          </div>
                        </div>
                        <div class="lang-row">
                          <div class="lang-col">
                            <a href="#">
                              <span class="text">Chinese</span>
                            </a>
                          </div>
                        </div>
                        <div class="lang-row">
                          <div class="lang-col">
                            <a href="#">
                              <span class="text">Danish</span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="visible-md visible-lg nav-visible">
                    <a href="#" class="search-opener"
                      ><span class="icon icon-search"></span
                    ></a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
          <!-- search form -->
          <form class="search-form" action="#">
            <fieldset>
              <a href="#" class="search-opener hidden-md hidden-lg">
                <span class="icon-search"></span>
              </a>
              <div class="search-wrap">
                <a href="#" class="search-opener close">
                  <span class="icon-cross"></span>
                </a>
                <div class="trip-form trip-form-v2 trip-search-main">
                  <div class="trip-form-wrap">
                    <div class="holder">
                      <label>Departing</label>
                      <div class="select-holder">
                        <div
                          id="datepicker"
                          class="input-group date"
                          data-date-format="mm-dd-yyyy"
                        >
                          <input class="form-control" type="text" readonly />
                          <span class="input-group-addon"
                            ><i class="icon-drop"></i
                          ></span>
                        </div>
                      </div>
                    </div>
                    <div class="holder">
                      <label>Returning</label>
                      <div class="select-holder">
                        <div
                          id="datepicker1"
                          class="input-group date"
                          data-date-format="mm-dd-yyyy"
                        >
                          <input class="form-control" type="text" readonly />
                          <span class="input-group-addon"
                            ><i class="icon-drop"></i
                          ></span>
                        </div>
                      </div>
                    </div>
                    <div class="holder">
                      <label for="select-region">Select Region</label>
                      <div class="select-holder">
                        <select
                          class="trip-select trip-select-v2 region"
                          name="region"
                          id="select-region"
                        >
                          <option value="select">Africa</option>
                          <option value="select">Arctic</option>
                          <option value="select">Asia</option>
                          <option value="select">Europe</option>
                          <option value="select">Oceanaia</option>
                          <option value="select">Polar</option>
                        </select>
                      </div>
                    </div>
                    <div class="holder">
                      <label for="select-activity">Select Activity</label>
                      <div class="select-holder">
                        <select
                          class="trip-select trip-select-v2 acitvity"
                          name="activity"
                          id="select-activity"
                        >
                          <option value="Holiday Type">Holiday Type</option>
                          <option value="Holiday Type">Beach Holidays</option>
                          <option value="Holiday Type">Weekend Trips</option>
                          <option value="Holiday Type">Summer and Sun</option>
                          <option value="Holiday Type">Water Sports</option>
                          <option value="Holiday Type">Scuba Diving</option>
                        </select>
                      </div>
                    </div>
                    <div class="holder">
                      <label for="price-range">Price Range</label>
                      <div class="select-holder">
                        <select
                          class="trip-select trip-select-v2 price"
                          name="activity"
                          id="price-range"
                        >
                          <option value="Price Range">Price Range</option>
                          <option value="Price Range">$1 - $499</option>
                          <option value="Price Range">$500 - $999</option>
                          <option value="Price Range">$1000 - $1499</option>
                          <option value="Price Range">$1500 - $2999</option>
                          <option value="Price Range">$3000+</option>
                        </select>
                      </div>
                    </div>
                    <div class="holder">
                      <button class="btn btn-trip btn-trip-v2" type="submit">
                        Find Tours
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </fieldset>
          </form>
        </header>