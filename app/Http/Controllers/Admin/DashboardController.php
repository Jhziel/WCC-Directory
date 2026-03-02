<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display the admin dashboard
     */
    public function index()
    {
        $totalTickets = Ticket::count();
        $pendingTickets = Ticket::where('status', 'pending')->count();
        $reviewedTickets = Ticket::where('status', 'reviewed')->count();
        $resolvedTickets = Ticket::where('status', 'resolved')->count();

        // Ratings sourced from tickets (nullable rating column)
        $totalRatings = Ticket::whereNotNull('rating')->count();
        $averageRating = Ticket::whereNotNull('rating')->avg('rating');

        // Emoji rating distribution from tickets
        $ratingDistribution = [];
        for ($i = 1; $i <= 6; $i++) {
            $ratingDistribution[$i] = Ticket::where('rating', $i)->count();
        }

        // Recent tickets
        $recentTickets = Ticket::orderBy('created_at', 'desc')->take(5)->get();

        return view('admin.dashboard', compact(
            'totalTickets',
            'pendingTickets',
            'reviewedTickets',
            'resolvedTickets',
            'totalRatings',
            'averageRating',
            'ratingDistribution',
            'recentTickets'
        ));
    }
}
