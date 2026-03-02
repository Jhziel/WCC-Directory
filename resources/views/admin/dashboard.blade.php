<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="space-y-6">
        <!-- Statistics Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <!-- Total Tickets -->
            <div class="bg-white overflow-hidden shadow-sm rounded-lg">
                <div class="p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-green-500 rounded-md p-3">
                            <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">Total Tickets</dt>
                                <dd class="text-3xl font-semibold text-gray-900">{{ $totalTickets }}</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pending Tickets -->
            <div class="bg-white overflow-hidden shadow-sm rounded-lg">
                <div class="p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-yellow-500 rounded-md p-3">
                            <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">Pending</dt>
                                <dd class="text-3xl font-semibold text-gray-900">{{ $pendingTickets }}</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Reviewed Tickets -->
            <div class="bg-white overflow-hidden shadow-sm rounded-lg">
                <div class="p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-blue-500 rounded-md p-3">
                            <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">Reviewed</dt>
                                <dd class="text-3xl font-semibold text-gray-900">{{ $reviewedTickets }}</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Resolved Tickets -->
            <div class="bg-white overflow-hidden shadow-sm rounded-lg">
                <div class="p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-green-700 rounded-md p-3">
                            <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">Resolved</dt>
                                <dd class="text-3xl font-semibold text-gray-900">{{ $resolvedTickets }}</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Rating Statistics -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <!-- Average Rating -->
            <div class="bg-white overflow-hidden shadow-sm rounded-lg">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Average Rating</h3>
                    @php
                        $avgRound = round($averageRating ?? 0);
                        $emojiColors = [1=>'#ef4444',2=>'#f97316',3=>'#eab308',4=>'#84cc16',5=>'#22c55e',6=>'#14b8a6'];
                        $emojiLabels = [1=>'Very Unhappy',2=>'Unhappy',3=>'Neutral',4=>'Satisfied',5=>'Happy',6=>'Very Happy'];
                    @endphp
                    <div class="flex items-center justify-center space-x-6">
                        @if($totalRatings > 0)
                            <svg class="w-20 h-20" viewBox="0 0 100 100">
                                <circle cx="50" cy="50" r="45" fill="{{ $emojiColors[$avgRound] ?? '#22c55e' }}"/>
                                <circle cx="35" cy="40" r="5" fill="#000"/><circle cx="65" cy="40" r="5" fill="#000"/>
                                @if($avgRound <= 2)
                                    <path d="M 30 70 Q 50 55 70 70" stroke="#000" stroke-width="3" fill="none"/>
                                @elseif($avgRound == 3)
                                    <line x1="30" y1="65" x2="70" y2="65" stroke="#000" stroke-width="3"/>
                                @else
                                    <path d="M 30 55 Q 50 75 70 55" stroke="#000" stroke-width="3" fill="none"/>
                                @endif
                            </svg>
                        @else
                            <svg class="w-20 h-20 opacity-20" viewBox="0 0 100 100">
                                <circle cx="50" cy="50" r="45" fill="#9ca3af"/>
                                <circle cx="35" cy="40" r="5" fill="#000"/><circle cx="65" cy="40" r="5" fill="#000"/>
                                <line x1="30" y1="65" x2="70" y2="65" stroke="#000" stroke-width="3"/>
                            </svg>
                        @endif
                        <div>
                            <div class="text-5xl font-bold text-gray-900">
                                {{ $totalRatings > 0 ? number_format($averageRating, 1) : '—' }}
                                <span class="text-xl text-gray-400">/ 6</span>
                            </div>
                            <div class="text-gray-500 mt-1 text-sm">{{ $totalRatings > 0 ? ($emojiLabels[$avgRound] ?? '') : 'No ratings yet' }}</div>
                            <div class="text-xs text-gray-400 mt-1">Based on {{ $totalRatings }} rating(s)</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Emoji Rating Distribution -->
            <div class="bg-white overflow-hidden shadow-sm rounded-lg">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Rating Distribution</h3>
                    @php
                        $distEmojis = [
                            6 => ['color'=>'#14b8a6','label'=>'Very Happy'],
                            5 => ['color'=>'#22c55e','label'=>'Happy'],
                            4 => ['color'=>'#84cc16','label'=>'Satisfied'],
                            3 => ['color'=>'#eab308','label'=>'Neutral'],
                            2 => ['color'=>'#f97316','label'=>'Unhappy'],
                            1 => ['color'=>'#ef4444','label'=>'Very Unhappy'],
                        ];
                    @endphp
                    <div class="space-y-3">
                        @foreach($distEmojis as $r => $meta)
                            @php
                                $count = $ratingDistribution[$r] ?? 0;
                                $pct = $totalRatings > 0 ? ($count / $totalRatings) * 100 : 0;
                            @endphp
                            <div class="flex items-center gap-3">
                                <svg class="w-7 h-7 flex-shrink-0" viewBox="0 0 100 100">
                                    <circle cx="50" cy="50" r="45" fill="{{ $meta['color'] }}"/>
                                    <circle cx="35" cy="40" r="4" fill="#000"/><circle cx="65" cy="40" r="4" fill="#000"/>
                                    @if($r <= 2)
                                        <path d="M 30 70 Q 50 55 70 70" stroke="#000" stroke-width="3" fill="none"/>
                                    @elseif($r == 3)
                                        <line x1="30" y1="65" x2="70" y2="65" stroke="#000" stroke-width="3"/>
                                    @else
                                        <path d="M 30 55 Q 50 75 70 55" stroke="#000" stroke-width="3" fill="none"/>
                                    @endif
                                </svg>
                                <div class="flex-1">
                                    <div class="flex justify-between text-xs text-gray-500 mb-1">
                                        <span>{{ $meta['label'] }}</span>
                                        <span>{{ $count }}</span>
                                    </div>
                                    <div class="bg-gray-200 rounded-full h-2">
                                        <div class="h-2 rounded-full transition-all" style="width: {{ $pct }}%; background-color: {{ $meta['color'] }}"></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Tickets -->
        <div class="bg-white overflow-hidden shadow-sm rounded-lg">
            <div class="p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-semibold text-gray-900">Recent Tickets</h3>
                    <a href="{{ route('admin.tickets.index') }}" class="text-green-600 hover:text-green-700 text-sm font-medium">
                        View All →
                    </a>
                </div>
                
                @if($recentTickets->count() > 0)
                    <div class="space-y-3">
                        @foreach($recentTickets as $ticket)
                            <div class="border-l-4 border-{{ $ticket->status === 'pending' ? 'yellow' : ($ticket->status === 'reviewed' ? 'blue' : 'green') }}-500 pl-4 py-2">
                                <div class="flex justify-between items-start">
                                    <div class="flex-1">
                                        <p class="text-gray-800">{{ Str::limit($ticket->message, 100) }}</p>
                                        <p class="text-xs text-gray-500 mt-1">{{ $ticket->created_at->diffForHumans() }}</p>
                                    </div>
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full 
                                        @if($ticket->status === 'pending') bg-yellow-100 text-yellow-800
                                        @elseif($ticket->status === 'reviewed') bg-blue-100 text-blue-800
                                        @else bg-green-100 text-green-800
                                        @endif">
                                        {{ ucfirst($ticket->status) }}
                                    </span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-gray-500 text-center py-8">No tickets submitted yet.</p>
                @endif
            </div>
        </div>
    </div>
</x-admin-layout>
