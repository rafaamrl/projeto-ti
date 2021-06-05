<div class="relative inline-block text-left" id="dropdown">
    <div>
        <button type="button"
            class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500"
            id="menu-button" aria-expanded="true" aria-haspopup="true">
            {{ $room->slug . ' ' . $room->number }}
            <!-- Heroicon name: solid/chevron-down -->
            <svg class="w-5 h-5 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                aria-hidden="true">
                <path fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd" />
            </svg>
        </button>
    </div>

    <div class="absolute right-0 w-56 mt-2 transition duration-100 ease-out origin-top-right transform scale-95 bg-white rounded-md shadow-lg opacity-0 ring-1 ring-black ring-opacity-5 focus:outline-none"
        role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1" id="dropdown-menu">
        <div class="py-1" role="none">
            @foreach ($regions as $region)
                @if ($region->name == 'room')
                    <a href="{{ route('logs', ['region' => $region->name, 'number' => $region->number]) }}"
                        class="block w-full px-4 py-2 text-sm text-left text-gray-700" tabindex="-1">
                        {{ $region->slug . ' ' . $region->number }}
                    </a>
                @endif
            @endforeach
        </div>
    </div>
</div>
