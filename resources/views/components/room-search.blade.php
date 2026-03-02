<!-- Room Search Modal -->
<div x-data="roomSearch()" x-init="init()" class="fixed top-4 left-1/2 transform -translate-x-1/2 z-50">
    <!-- Search Button -->
    <button 
        @click="openSearch()" 
        class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-3 px-6 border border-gray-300 rounded-lg shadow-lg flex items-center space-x-2 transition-all">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
        </svg>
        <span>Search Rooms & Navigate</span>
    </button>

    <!-- Search Modal -->
    <div 
        x-show="isOpen" 
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center p-4"
        @click.self="closeSearch()"
        style="display: none;">
        
        <div class="bg-white rounded-lg shadow-2xl w-full max-w-2xl max-h-[80vh] overflow-hidden">
            <!-- Modal Header -->
            <div class="bg-gradient-to-r from-green-700 to-green-600 text-white p-4 flex justify-between items-center">
                <h3 class="text-xl font-bold">Room Search & Navigation</h3>
                <button @click="closeSearch()" class="text-white hover:text-gray-200">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <!-- Search Input -->
            <div class="p-4 border-b">
                <input 
                    type="text" 
                    x-model="searchQuery"
                    @input.debounce.300ms="search()"
                    placeholder="Search for rooms, labs, offices..." 
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                
                <!-- Filters -->
                <div class="mt-3 flex space-x-2">
                    <select x-model="filterFloor" @change="search()" class="px-3 py-2 border rounded-lg text-sm">
                        <option value="">All Floors</option>
                        <option value="1">Floor 1</option>
                        <option value="2">Floor 2</option>
                        <option value="3">Floor 3</option>
                        <option value="4">Floor 4</option>
                        <option value="5">Floor 5</option>
                        <option value="6">Floor 6</option>
                        <option value="7">Floor 7</option>
                        <option value="8">Floor 8</option>
                    </select>
                </div>
            </div>

            <!-- Search Results -->
            <div class="p-4 overflow-y-auto max-h-96">
                <div x-show="loading" class="text-center py-8 text-gray-500">
                    <svg class="animate-spin h-8 w-8 mx-auto mb-2 text-green-600" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    Searching...
                </div>

                <div x-show="!loading && results.length === 0 && searchQuery.length > 0" class="text-center py-8 text-gray-500">
                    <svg class="w-16 h-16 mx-auto mb-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <p>No rooms found</p>
                </div>

                <div x-show="!loading && results.length > 0" class="space-y-2">
                    <template x-for="room in results" :key="room.id">
                        <div 
                            @click="selectRoom(room)" 
                            class="p-3 border rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <div class="flex justify-between items-start">
                                <div class="flex-1">
                                    <h4 class="font-semibold text-gray-800" x-text="room.name"></h4>
                                    <p class="text-sm text-gray-600" x-text="room.description || room.type"></p>
                                </div>
                                <span class="text-xs bg-green-100 text-green-700 px-2 py-1 rounded" x-text="'Floor ' + room.floor"></span>
                            </div>
                        </div>
                    </template>
                </div>
            </div>

            <!-- Navigation Mode (shown when room selected) -->
            <div x-show="selectedRoom" class="border-t p-4 bg-gray-50">
                <div class="flex items-center justify-between mb-2">
                    <span class="text-sm font-semibold">Navigate to: <span x-text="selectedRoom?.name" class="text-green-700"></span></span>
                    <button @click="clearSelection()" class="text-sm text-red-600 hover:text-red-800">Clear</button>
                </div>
                <button 
                    @click="showDirections()" 
                    class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded-lg transition-colors">
                    Show Directions
                </button>
            </div>
        </div>
    </div>
</div>

<script>
function roomSearch() {
    return {
        isOpen: false,
        searchQuery: '',
        filterFloor: '',
        results: [],
        loading: false,
        selectedRoom: null,
        
        init() {
            // Initialize
        },
        
        openSearch() {
            this.isOpen = true;
            this.$nextTick(() => {
                const input = this.$el.querySelector('input[type="text"]');
                if (input) input.focus();
            });
        },
        
        closeSearch() {
            this.isOpen = false;
            this.searchQuery = '';
            this.results = [];
            this.selectedRoom = null;
        },
        
        async search() {
            if (this.searchQuery.length < 1 && !this.filterFloor) {
                this.results = [];
                return;
            }
            
            this.loading = true;
            
            try {
                const params = new URLSearchParams({
                    q: this.searchQuery,
                    floor: this.filterFloor
                });
                
                const response = await fetch(`/api/rooms/search?${params}`);
                this.results = await response.json();
            } catch (error) {
                console.error('Search error:', error);
                this.results = [];
            } finally {
                this.loading = false;
            }
        },
        
        selectRoom(room) {
            this.selectedRoom = room;
        },
        
        clearSelection() {
            this.selectedRoom = null;
        },
        
        showDirections() {
            if (!this.selectedRoom) return;
            
            // Emit event for parent component to handle
            window.dispatchEvent(new CustomEvent('navigate-to-room', {
                detail: { room: this.selectedRoom }
            }));
            
            this.closeSearch();
        }
    }
}
</script>
