@if (count($breadcrumbs))
@foreach ($breadcrumbs as $breadcrumb)
@if ($breadcrumb->url && !$loop->last)
<a href="{{ $breadcrumb->url }}" class="breadcrumb-item">{!! $breadcrumb->title !!}</a>
@else
<span class="breadcrumb-item active">{!! $breadcrumb->title !!}</span>
@endif
@endforeach
@endif
