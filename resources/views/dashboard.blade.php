<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-3">
                <img src="{{ asset('img/wcc-scans.png') }}" alt="WCC SCAN" class="h-10 w-auto">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Dashboard') }}
                </h2>
            </div>
            <div class="text-sm text-gray-600">
                <span class="font-medium">WCC SCAN</span> - Smart Campus Assistant & Navigator
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Welcome Card -->
            <div class="bg-gradient-to-r from-green-700 to-green-600 overflow-hidden shadow-lg sm:rounded-lg mb-6">
                <div class="p-8 text-white">
                    <h3 class="text-2xl font-bold mb-2">Welcome to WCC SCAN!</h3>
                    <p class="text-green-50">Smart Campus Assistant & Navigator - Your digital companion for navigating WCC Aeronautical and Technological College</p>
                </div>
            </div>

            <!-- Quick Stats Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                <!-- Stats Card 1 -->
                <div class="bg-white overflow-hidden shadow-md sm:rounded-lg hover:shadow-lg transition">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div class="text-3xl font-bold text-green-700">0</div>
                            <div class="bg-green-100 p-3 rounded-full">
                                <svg class="w-6 h-6 text-green-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                        </div>
                        <h4 class="text-gray-600 font-medium">Total Faculty</h4>
                    </div>
                </div>

                <!-- Stats Card 2 -->
                <div class="bg-white overflow-hidden shadow-md sm:rounded-lg hover:shadow-lg transition">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div class="text-3xl font-bold text-green-700">0</div>
                            <div class="bg-green-100 p-3 rounded-full">
                                <svg class="w-6 h-6 text-green-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                </svg>
                            </div>
                        </div>
                        <h4 class="text-gray-600 font-medium">Total Departments</h4>
                    </div>
                </div>

                <!-- Stats Card 3 -->
                <div class="bg-white overflow-hidden shadow-md sm:rounded-lg hover:shadow-lg transition">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div class="text-3xl font-bold text-green-700">0</div>
                            <div class="bg-green-100 p-3 rounded-full">
                                <svg class="w-6 h-6 text-green-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                                </svg>
                            </div>
                        </div>
                        <h4 class="text-gray-600 font-medium">Active Records</h4>
                    </div>
                </div>
            </div>

            <!-- Info Card -->
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                        <span class="bg-green-100 text-green-700 p-2 rounded-full mr-3">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </span>
                        Campus Directory System
                    </h3>
                    <div class="text-gray-600 space-y-2">
                        <p>Welcome to the WCC SCAN Campus Directory System. This platform helps you:</p>
                        <ul class="list-disc list-inside ml-4 space-y-1">
                            <li>Navigate through campus departments and offices</li>
                            <li>Find faculty and staff contact information</li>
                            <li>Access important campus resources</li>
                            <li>Get real-time updates and announcements</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Footer Info -->
            <div class="mt-6 text-center text-sm text-gray-500">
                <p>WCC Aeronautical and Technological College</p>
                <p>Aviation Electronics Department</p>
            </div>
        </div>
    </div>
</x-app-layout>
