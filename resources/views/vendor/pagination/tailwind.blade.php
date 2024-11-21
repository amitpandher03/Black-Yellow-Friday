@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="join">
        <div class="flex items-center join-item">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <span class="btn btn-disabled">
                    {!! __('pagination.previous') !!}
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="btn btn-primary">
                    {!! __('pagination.previous') !!}
                </a>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <button class="btn btn-primary join-item" aria-current="page">{{ $page }}</button>
                        @else
                            <a href="{{ $url }}" class="btn join-item">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="btn btn-primary">
                    {!! __('pagination.next') !!}
                </a>
            @else
                <span class="btn btn-disabled">
                    {!! __('pagination.next') !!}
                </span>
            @endif
        </div>
    </nav>
@endif
