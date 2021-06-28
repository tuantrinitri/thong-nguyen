

 <footer id="footer">
        <div class="container">
          <!-- newsletter form -->
          <form
            action="https://html.waituk.com/entrada/php/subscribe.html"
            id="signup"
            method="post"
            class="newsletter-form"
          >
            <fieldset>
              <div class="input-holder">
                <input
                  type="email"
                  class="form-control"
                  placeholder="Nhập email"
                  name="subscriber_email"
                  id="subscriber_email"
                />
                <input type="submit" value="Đăng Ký" />
              </div>
              <span class="info" id="subscribe_message"
                >Các deal du lịch giảm giá đến 60% sẽ được gửi đến inbox của bạn
Khi nhấp vào Đăng ký, bạn đồng ý với Các Điều Kiện & Điều Khoản và Chính Sách Bảo Mật của chúng tôi</span
              >
            </fieldset>
          </form>
          <!-- footer links -->
          <div class="row footer-holder">
            <nav class="col-sm-4 col-lg-3 footer-nav">
              <h3>Về Avoka</h3>
              <ul class="slide">
                <li><a href="#">Cách đặt chỗ </a></li>
                <li><a href="#">Liên hệ chúng tôi</a></li>
                <li><a href="#">Trợ giúp</a></li>
                <li><a href="#">Tuyển dụng</a></li>
                <li><a href="#">Về chúng tôi</a></li>
               
              </ul>
            </nav>
            <nav class="col-sm-4 col-lg-3 footer-nav">
              <h3>Đối Tác</h3>
              <ul class="slide">
                <li><a href="#">Đối tác đăng nhập</a></li>
                <li><a href="#">Đối tác liên kết</a></li>
                <li><a href="#">Chương trình cho Đại lý</a></li>
                <li><a href="#">Hợp tác cùng chúng tối</a></li>
              </ul>
            </nav>
            <nav class="col-sm-4 col-lg-3 footer-nav">
              <h3>Thông Tin</h3>
              <ul class="slide">
                <li><a href="#">Tạp chí du lịchn</a></li>
                <li><a href="#">Cẩm nang du lịch</a></li>
                <li><a href="#">Kinh nghiệm du lịch</a></li>
                <li><a href="#">Tin tức</a></li>
                <li><a href="#">FAQ</a></li>
              </ul>
            </nav>
            <nav class="col-sm-4 col-lg-3 footer-nav last">
              <h3>Liên Hệ</h3>
              <ul class="slide address-block">
                <li class="wrap-text">
                  <span class="icon-tel"></span>
                  <a href="tel:0971773444">0971773444</a>
                </li>
                <li class="wrap-text">
                  <span class="icon-fax"></span>
                  <a href="tel:0375689031">0375689031</a>
                </li>
                <li class="wrap-text">
                  <span class="icon-email"></span>
                  <a href="#">nguyenthongth1906@gmail.com</a>
                </li>
                <li>
                  <span class="icon-home"></span>
                  <address>Số 07, Mai Xuân Thưởng, TP Nha Trang</address>
                </li>
              </ul>
            </nav>
          </div>
        
        </div>
        <div class="footer-bottom">
          <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <!-- copyright -->
                <strong class="copyright"
                  ><i class="fa fa-copyright"></i> Design by <a href="#">Thong Thong</a></strong
                >
              </div>
              <div class="col-lg-6">
                <ul class="payment-option">
                  <li>
                    <img src="{{ asset('assets/web/img/footer/visa.png" alt="visa" /') }}">
                  </li>
                  <li>
                    <img
                      src="{{ asset('assets/web/img/footer/mastercard.png') }}"
                      height="20"
                      width="33"
                      alt="master card"
                    />
                  </li>
                  <li>
                    <img
                      src="{{ asset('assets/web/img/footer/paypal.png') }}"
                      height="20"
                      width="72"
                      alt="paypal"
                    />
                  </li>
                  <li>
                    <img
                      src="{{ asset('assets/web/img/footer/maestro.png') }}"
                      height="20"
                      width="33"
                      alt="maestro"
                    />
                  </li>
                  <li>
                    <img
                      src="{{ asset('assets/web/img/footer/bank-transfer.png') }}"
                      height="20"
                      width="55"
                      alt="bank transfer"
                    />
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </footer>