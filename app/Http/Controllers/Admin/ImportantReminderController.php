<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ImportantReminder;
use Illuminate\Http\Request;

class ImportantReminderController extends Controller
{
    public function index()
    {
        $reminders = ImportantReminder::latest()->get();
        return view('admin.important-reminders.index', compact('reminders'));
    }

    public function create()
    {
        return view('admin.important-reminders.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'is_active' => 'boolean',
        ]);

        $validated['is_active'] = $request->has('is_active');

        ImportantReminder::create($validated);

        return redirect()->route('admin.important-reminders.index')
            ->with('success', 'Important Reminder created successfully.');
    }

    public function show(ImportantReminder $importantReminder)
    {
        return view('admin.important-reminders.show', compact('importantReminder'));
    }

    public function edit(ImportantReminder $importantReminder)
    {
        return view('admin.important-reminders.edit', compact('importantReminder'));
    }

    public function update(Request $request, ImportantReminder $importantReminder)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'is_active' => 'boolean',
        ]);

        $validated['is_active'] = $request->has('is_active');

        $importantReminder->update($validated);

        return redirect()->route('admin.important-reminders.index')
            ->with('success', 'Important Reminder updated successfully.');
    }

    public function destroy(ImportantReminder $importantReminder)
    {
        $importantReminder->delete();

        return redirect()->route('admin.important-reminders.index')
            ->with('success', 'Important Reminder deleted successfully.');
    }
}
