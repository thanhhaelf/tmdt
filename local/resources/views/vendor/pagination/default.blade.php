@if ($paginator->hasPages())
    <ul class="pagination flex-m flex-w p-t-26">

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active item-pagination flex-c-m trans-0-4 active-pagination"><span>{{ $page }}</span></li>
                    @else
                        <li class="item-pagination flex-c-m trans-0-4"><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach
    </ul>
@endif
