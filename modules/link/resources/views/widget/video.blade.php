<div class="rvs-item-container">
   <div class="rvs-item-stage">
      @foreach ($videos as $item)
      <div class="rvs-item">
         <p class="rvs-item-text">{{ $item['title'] }}</p>
         <iframe width="1000" height="600" src="{{ $item['link'] }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
         {{-- <a href="{{ $item['link'] }}" class="rvs-play-video"></a> --}}
      </div>
      @endforeach
   </div>
</div>

<div class="rvs-nav-container">
   <a class="rvs-nav-prev"></a>
   <div class="rvs-nav-stage">
      @foreach ($videos as $item)
      <a class="rvs-nav-item">
         <span class="rvs-nav-item-thumb" style="background-image: url({{ asset('assets/web/images/bg-video.jpg') }})"></span>
         <h4 class="rvs-nav-item-title">{{ $item['title'] }}</h4>
      </a>
      @endforeach
   </div>
   <a class="rvs-nav-next"></a>
</div>