

@if ($paginator->hasPages())
<div class="toolbox toolbox-pagination" style="justify-content: center!important;">
    <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled prev" aria-disabled="true">
                    <span style="margin-right: 10px;" aria-hidden="true"><i class="w-icon-long-arrow-left"></i> Prev </span>
                </li>
            @else
                <li style="margin-right:10px"><a class="prev" href="{{ $paginator->previousPageUrl() }}"><i class="w-icon-long-arrow-left"></i> Prev </a></li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active" aria-current="page" style="border: 1px solid #eee;padding:2px 10px 2px 10px;margin-right:10px;background-color:#336699 !important;color:#FFF;border-radius:50%"><span>{{ $page }}</span></li>
                        @else
                            <li style="padding:0px 8px 0px 8px;border:1px solid #555;border-radius:50%;margin:0px 10px 0px 0px;"><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li style="margin-left: 10px" class="next">
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"> Next <i class="w-icon-long-arrow-right"></i></a>
                </li>
            @else
                <li class="disabled next" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span aria-hidden="true"> Next <i class="w-icon-long-arrow-right"></i></span>
                </li>
            @endif
        </ul>
    </div>
@endif
