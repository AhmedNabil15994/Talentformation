@if ($paginator->hasPages())
  <ul class="d-flex align-items-center justify-content-center">
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
      <li><a href="#"><i class="fa-solid fa-angles-{{locale() == 'en' ? 'left' : 'right'}}"></i></a></li>
    @else
      <li><a href="{{ $paginator->previousPageUrl() }}"><i class="fa-solid fa-angles-{{locale() == 'en' ? 'left' : 'right'}}"></i></a></li>
    @endif

    {{-- Pagination Elements --}}
    @foreach ($elements as $element)
      {{-- "Three Dots" Separator --}}
      @if (is_string($element))
        <li class="page-numbers" aria-current="page"><a href="#">{{$element}}</a></li>
      @endif

      {{-- Array Of Links --}}
      @if (is_array($element))
        @foreach ($element as $page => $url)
          <li><a href="{{$url}}" class="{{$page == $paginator->currentPage() ? 'active' : ''}}">{{$page}}</a></li>
        @endforeach
      @endif
    @endforeach

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
      <li><a href="{{ $paginator->nextPageUrl() }}"><i class="fa-solid fa-angles-{{locale() == 'en' ? 'right' : 'left'}}"></i></a></li>
    @else
      <li><a href="#"><i class="fa-solid fa-angles-{{locale() == 'en' ? 'right' : 'left'}}"></i></a></li>
    @endif
  </ul>
@endif