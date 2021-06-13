<ul class="works-grid works-grid-gut works-grid-3 works-hover-w" id="works-grid">
   @foreach ($activities as $item)
   <li class="work-item illustration webdesign">
      <a href="{{ $item['link'] }}" target="_blank">
         <div class="work-image">
            <img src="{{ asset($item['image']) }}" alt="Portfolio Item" />
         </div>
         <div class="work-caption font-alt">
            <h3 class="work-title">{{ $item['title'] }}</h3>
            <div class="work-descr">{{ $item['description'] }}</div>
         </div>
      </a>
   </li>
   @endforeach
</ul>