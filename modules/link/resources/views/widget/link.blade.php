<ul class="list-item">
   @foreach ($links as $item)
   <li>
      <a href="{{ $item['link'] }}" target="_blank" title="{{ $item['title'] }}">{{ $item['title'] }}</a>
   </li>
   @endforeach
</ul>