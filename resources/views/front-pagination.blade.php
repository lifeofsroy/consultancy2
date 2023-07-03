@if ($paginator->hasPages())
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center mt-5">
            @if ($paginator->onFirstPage())
                <li class="page-item disabled">
                    <span class="page-link" aria-disabled="true">
                        <span aria-hidden="true">&laquo;</span>
                    </span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="#" wire:click.prevent="previousPage('page')" aria-label="Previous">
                        <span>&laquo;</span>
                    </a>
                </li>
            @endif

            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="page-item disabled"><span class="page-link">{{ $element }}</span></li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#" wire:click.prevent="gotoPage({{ $page }})">{{ $page }}</a></li>
                        @else
                            <li class="page-item"><a class="page-link" href="#" wire:click.prevent="gotoPage({{ $page }})">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="#" wire:click.prevent="nextPage('page')" aria-label="Next">
                        <span>&raquo;</span>
                    </a>
                </li>
            @else
                <li class="page-item disabled">
                    <span class="page-link" aria-disabled="true">
                        <span aria-hidden="true">&raquo;</span>
                    </span>
                </li>
            @endif
        </ul>
    </nav>

    <div class="text-center mt-2">Showing {{ $paginator->firstItem() }} to {{ $paginator->lastItem() }} of
        {{ $paginator->total() }} entries</div>
@endif
