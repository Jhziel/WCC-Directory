<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\Admin\DashboardController;
use App\Models\Event;
use App\Models\Announcement;
use App\Models\ImportantReminder;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/homepage', function () {
    $announcements = Announcement::where('is_active', true)->latest()->get();
    $importantReminders = ImportantReminder::where('is_active', true)->latest()->get();
    return view('homepage', compact('announcements', 'importantReminders'));
})->name('homepage');

Route::get('/events', function () {
    $events = Event::where('is_active', true)->latest()->get();
    return view('events', compact('events'));
})->name('events');

Route::get('/campus-directory', function () {
    return view('campus-directory');
})->name('campus.directory');

Route::get('/campus-policies', function () {
    return view('campus-policies');
})->name('campus.policies');

Route::get('/submit-ticket', function () {
    return view('submit-ticket');
})->name('submit.ticket');

Route::post('/submit-ticket', [TicketController::class, 'store'])->name('ticket.store');

Route::get('/rate-experience', [TicketController::class, 'showRating'])->name('rate.experience');

Route::post('/rate-experience', [TicketController::class, 'storeRating'])->name('rating.store');

// Floor Routes
Route::get('/floor/{floor}', function ($floor) {
    $floorMap = [
        1 => '1stfloor',
        2 => '2ndfloor',
        3 => '3rdfloor',
        4 => '4thfloor',
        5 => '5thfloor',
        6 => '6thfloor',
        7 => '7thfloor',
        8 => '8thfloor',
    ];
    
    if (array_key_exists($floor, $floorMap)) {
        return view($floorMap[$floor]);
    }
    
    abort(404);
})->where('floor', '[1-8]')->name('floor.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Routes
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/tickets', [TicketController::class, 'adminIndex'])->name('tickets.index');
    Route::patch('/tickets/{ticket}/status', [TicketController::class, 'updateStatus'])->name('tickets.update-status');
    Route::delete('/tickets/{ticket}', [TicketController::class, 'destroy'])->name('tickets.destroy');
    
    // Event management routes
    Route::resource('events', \App\Http\Controllers\Admin\EventController::class);
    
    // Announcement management routes
    Route::resource('announcements', \App\Http\Controllers\Admin\AnnouncementController::class);
    
    // Important Reminders management routes
    Route::resource('important-reminders', \App\Http\Controllers\Admin\ImportantReminderController::class);
});

// API Routes for Room Search & Navigation
Route::prefix('api')->name('api.')->group(function () {
    Route::get('/rooms/search', [\App\Http\Controllers\API\RoomController::class, 'search'])->name('rooms.search');
    Route::get('/rooms/types', [\App\Http\Controllers\API\RoomController::class, 'types'])->name('rooms.types');
    Route::get('/rooms/floor/{floor}', [\App\Http\Controllers\API\RoomController::class, 'byFloor'])->name('rooms.byFloor');
    Route::get('/rooms/{id}', [\App\Http\Controllers\API\RoomController::class, 'show'])->name('rooms.show');
    Route::post('/rooms/find-path', [\App\Http\Controllers\API\RoomController::class, 'findPath'])->name('rooms.findPath');
});

require __DIR__.'/auth.php';
