@props(['currentFloor' => 1])

<div class="fixed left-8 top-1/2 transform -translate-y-1/2 z-50">
    <div class="flex flex-col items-center space-y-4">
        @for ($floor = 8; $floor >= 1; $floor--)
            <a href="{{ route('floor.show', $floor) }}" 
               class="group relative">
                <!-- Circle -->
                <div class="w-16 h-16 rounded-full border-4 flex items-center justify-center transition-all duration-300 
                    {{ $currentFloor == $floor 
                        ? 'bg-gradient-to-br from-green-600 to-green-800 border-green-700 shadow-lg scale-110' 
                        : 'bg-white border-gray-300 hover:border-green-500 hover:scale-105' }}">
                    <span class="text-2xl font-bold {{ $currentFloor == $floor ? 'text-white' : 'text-gray-700 group-hover:text-green-600' }}">
                        {{ $floor }}
                    </span>
                </div>
                
                <!-- Connecting Line (except for first floor) -->
                @if ($floor > 1)
                    <div class="absolute left-1/2 -translate-x-1/2 top-full w-1 h-4 
                        {{ $currentFloor == $floor || $currentFloor == $floor - 1 
                            ? 'bg-gradient-to-b from-green-700 to-green-600' 
                            : 'bg-gray-300' }}">
                    </div>
                @endif

                <!-- Tooltip -->
                <div class="absolute left-20 top-1/2 -translate-y-1/2 opacity-0 group-hover:opacity-100 transition-opacity duration-200 pointer-events-none">
                    <div class="bg-gray-900 text-white px-3 py-1 rounded text-sm whitespace-nowrap">
                        {{ $floor }}{{ $floor == 1 ? 'st' : ($floor == 2 ? 'nd' : ($floor == 3 ? 'rd' : 'th')) }} Floor
                    </div>
                </div>
            </a>
        @endfor
    </div>
</div>
