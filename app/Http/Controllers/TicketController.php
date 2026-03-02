<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Store a newly submitted ticket
     */
    public function store(Request $request)
    {
        $request->validate([
            'ticket_message' => 'nullable|string|max:1000',
            'rating' => 'nullable|integer|min:1|max:6',
        ]);

        // Only save if there's a message or a rating
        if ($request->filled('ticket_message') || $request->filled('rating')) {
            Ticket::create([
                'message' => $request->ticket_message ?? '',
                'status' => 'pending',
                'rating' => $request->rating ?: null,
            ]);
        }


        return redirect()->route('homepage')->with('success', 'Thank you for your feedback!');
    }

    /**
     * Show rating page
     */
    public function showRating()
    {
        return view('rate-experience');
    }

    /**
     * Store rating
     */
    public function storeRating(Request $request)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:6',
        ]);

        // Create rating
        Rating::create([
            'rating' => $request->rating,
        ]);

        return redirect()->route('homepage')->with('success', 'Thank you for your feedback!');
    }

    /**
     * Display all tickets in admin panel
     */
    public function adminIndex(Request $request)
    {
        $query = Ticket::query();
        
        // Filter by status if provided
        if ($request->has('status')) {
            $query->where('status', $request->status);
        }
        
        $tickets = $query->orderBy('created_at', 'desc')->paginate(20);

        // Ratings from tickets
        $ticketRatingsAvg = Ticket::whereNotNull('rating')->avg('rating');
        $ticketRatingsCount = Ticket::whereNotNull('rating')->count();

        return view('admin.tickets.index', compact(
            'tickets',
            'ticketRatingsAvg',
            'ticketRatingsCount'
        ));
    }

    /**
     * Update ticket status
     */
    public function updateStatus(Request $request, Ticket $ticket)
    {
        $request->validate([
            'status' => 'required|in:pending,reviewed,resolved',
        ]);

        $ticket->update([
            'status' => $request->status,
        ]);

        return redirect()->route('admin.tickets.index')->with('success', 'Ticket status updated!');
    }

    /**
     * Delete a ticket
     */
    public function destroy(Ticket $ticket)
    {
        $ticket->delete();
        
        return redirect()->route('admin.tickets.index')->with('success', 'Ticket deleted successfully!');
    }
}
