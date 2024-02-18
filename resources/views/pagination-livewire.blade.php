
<nav class="py-2 m-auto w-full overflow-scroll scrollbar-hide">
    <ul class="flex -space-x-px text-sm md:justify-center justify-start">
        @if ($paginator->onFirstPage())
            <li>
                <button wire:click="previousPage" wire:loading.attr="disabled" class="flex items-center justify-center px-3 h-8 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 ">Previous</button>
            </li>
        @else
            <li>
                <button wire:click="previousPage" wire:loading.attr="disabled" class="flex items-center justify-center px-3 h-8 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 ">Previous</button>
            </li>
        @endif
        @foreach ($elements as $element)
            @if (is_string($element))
                <li>
                    <span class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">{{ $element }}</span>
                </li>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li>
                            <span class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 ">{{ $page }}</span>
                        </li>
                    @else
                        <li>
                            <button wire:click="gotoPage({{ $page }})" wire:loading.attr="disabled" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">{{ $page }}</button>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach
        @if ($paginator->hasMorePages())
            <li>
                <button wire:click="nextPage" wire:loading.attr="disabled" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 ">Next</button>
            </li>
        @else
            <li>
                <span class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 ">Next</span>
            </li>
        @endif
    </ul>
</nav>
