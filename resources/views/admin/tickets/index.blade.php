<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Ticket Management
        </h2>
    </x-slot>

    <div class="space-y-6">

        <!-- Rating Summary -->
        <div class="bg-white overflow-hidden shadow-sm rounded-lg p-6">
            <p class="text-sm text-gray-500 uppercase tracking-wider font-medium mb-3">Average Experience Rating</p>
            <div class="flex items-center space-x-4">
                @php
                    $avgRound = round($ticketRatingsAvg ?? 0);
                    $tColors = [1=>'#ef4444',2=>'#f97316',3=>'#eab308',4=>'#84cc16',5=>'#22c55e',6=>'#14b8a6'];
                    $tLabels = [1=>'Very Unhappy',2=>'Unhappy',3=>'Neutral',4=>'Satisfied',5=>'Happy',6=>'Very Happy'];
                @endphp
                @if($ticketRatingsAvg)
                    <svg class="w-12 h-12 flex-shrink-0" viewBox="0 0 100 100">
                        <circle cx="50" cy="50" r="45" fill="{{ $tColors[$avgRound] ?? '#22c55e' }}"/>
                        <circle cx="35" cy="40" r="5" fill="#000"/><circle cx="65" cy="40" r="5" fill="#000"/>
                        @if($avgRound <= 2)<path d="M 30 70 Q 50 55 70 70" stroke="#000" stroke-width="3" fill="none"/>
                        @elseif($avgRound == 3)<line x1="30" y1="65" x2="70" y2="65" stroke="#000" stroke-width="3"/>
                        @else<path d="M 30 55 Q 50 75 70 55" stroke="#000" stroke-width="3" fill="none"/>@endif
                    </svg>
                @endif
                <div>
                    <span class="text-3xl font-bold text-gray-900">{{ $ticketRatingsAvg ? number_format($ticketRatingsAvg, 1) : '—' }}<span class="text-base text-gray-400"> / 6</span></span>
                    <p class="text-sm text-gray-500 mt-0.5">{{ $ticketRatingsAvg ? ($tLabels[$avgRound] ?? '') : 'No ratings yet' }}</p>
                    <p class="text-xs text-gray-400">Based on {{ $ticketRatingsCount }} rated ticket(s)</p>
                </div>
            </div>
        </div>

        <!-- Tickets Table -->
        <div class="bg-white overflow-hidden shadow-sm rounded-lg">
            <div class="p-6">
                <!-- Filter Section -->
                <div class="mb-6 flex flex-wrap gap-4 items-center justify-between">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900">All Tickets</h3>
                        <p class="text-sm text-gray-500">Total: {{ $tickets->total() }} tickets</p>
                    </div>
                    
                    <div class="flex gap-2">
                        <a href="{{ route('admin.tickets.index') }}" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-300">
                            All
                        </a>
                        <a href="{{ route('admin.tickets.index', ['status' => 'pending']) }}" class="px-4 py-2 bg-yellow-100 text-yellow-800 rounded-lg text-sm font-medium hover:bg-yellow-200">
                            Pending
                        </a>
                        <a href="{{ route('admin.tickets.index', ['status' => 'reviewed']) }}" class="px-4 py-2 bg-blue-100 text-blue-800 rounded-lg text-sm font-medium hover:bg-blue-200">
                            Reviewed
                        </a>
                        <a href="{{ route('admin.tickets.index', ['status' => 'resolved']) }}" class="px-4 py-2 bg-green-100 text-green-800 rounded-lg text-sm font-medium hover:bg-green-200">
                            Resolved
                        </a>
                    </div>
                </div>

                <!-- Tickets Table -->
                @if($tickets->count() > 0)
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Message</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Rating</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($tickets as $ticket)
                                    @php
                                        $ratingColors = [1=>'#ef4444',2=>'#f97316',3=>'#eab308',4=>'#84cc16',5=>'#22c55e',6=>'#14b8a6'];
                                        $ratingLabels = [1=>'Very Unhappy',2=>'Unhappy',3=>'Neutral',4=>'Satisfied',5=>'Happy',6=>'Very Happy'];
                                    @endphp
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            #{{ $ticket->id }}
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-900">
                                            <div class="max-w-md">
                                                {{ Str::limit($ticket->message, 150) }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            @if($ticket->rating)
                                                <div class="flex items-center space-x-2" title="{{ $ratingLabels[$ticket->rating] ?? '' }}">
                                                    <svg class="w-8 h-8 flex-shrink-0" viewBox="0 0 100 100">
                                                        <circle cx="50" cy="50" r="45" fill="{{ $ratingColors[$ticket->rating] ?? '#22c55e' }}"/>
                                                        <circle cx="35" cy="40" r="5" fill="#000"/>
                                                        <circle cx="65" cy="40" r="5" fill="#000"/>
                                                        @if($ticket->rating <= 2)
                                                            <path d="M 30 70 Q 50 55 70 70" stroke="#000" stroke-width="3" fill="none"/>
                                                        @elseif($ticket->rating == 3)
                                                            <line x1="30" y1="65" x2="70" y2="65" stroke="#000" stroke-width="3"/>
                                                        @else
                                                            <path d="M 30 55 Q 50 75 70 55" stroke="#000" stroke-width="3" fill="none"/>
                                                        @endif
                                                    </svg>
                                                    <span class="text-xs text-gray-500">{{ $ratingLabels[$ticket->rating] ?? '' }}</span>
                                                </div>
                                            @else
                                                <span class="text-xs text-gray-400 italic">No rating</span>
                                            @endif
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-3 py-1 text-xs font-semibold rounded-full
                                                @if($ticket->status === 'pending') bg-yellow-100 text-yellow-800
                                                @elseif($ticket->status === 'reviewed') bg-blue-100 text-blue-800
                                                @else bg-green-100 text-green-800
                                                @endif">
                                                {{ ucfirst($ticket->status) }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{ $ticket->created_at->format('M d, Y H:i') }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <div class="flex items-center gap-2">
                                                <!-- Status Update Form -->
                                                <form method="POST" action="{{ route('admin.tickets.update-status', $ticket) }}" class="inline">
                                                    @csrf
                                                    @method('PATCH')
                                                    <select name="status" onchange="this.form.submit()" class="text-xs border-gray-300 rounded-md focus:ring-green-500 focus:border-green-500">
                                                        <option value="pending" {{ $ticket->status === 'pending' ? 'selected' : '' }}>Pending</option>
                                                        <option value="reviewed" {{ $ticket->status === 'reviewed' ? 'selected' : '' }}>Reviewed</option>
                                                        <option value="resolved" {{ $ticket->status === 'resolved' ? 'selected' : '' }}>Resolved</option>
                                                    </select>
                                                </form>

                                                <!-- Delete Button -->
                                                <form method="POST" action="{{ route('admin.tickets.destroy', $ticket) }}" class="inline" onsubmit="return confirm('Are you sure you want to delete this ticket?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-600 hover:text-red-900">
                                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="mt-6">
                        {{ $tickets->links() }}
                    </div>
                @else
                    <div class="text-center py-12">
                        <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        <h3 class="mt-2 text-sm font-medium text-gray-900">No tickets</h3>
                        <p class="mt-1 text-sm text-gray-500">No tickets have been submitted yet.</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-admin-layout>
