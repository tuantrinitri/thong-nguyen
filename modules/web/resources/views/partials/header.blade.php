  <header id="header" class="default-white-header header-v2">
      <div class="container-fluid">

          <!-- logo -->
          <div class="logo">
              <a href="{{ route('web.index') }}">
                  <img class="normal" src="{{ asset(setting('site_logo')) }}" alt="Thông">

              </a>
          </div>
          <!-- main navigation -->
          @widgetGroup('MAIN_MENU')
      </div>

  </header>
