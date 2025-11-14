<?php

namespace App\Http\Controllers;

use App\Models\FeedbackClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FeedbackClientController extends Controller
{
    public function index()
    {
        $feedbacks = FeedbackClient::latest()->get();
        return view('admin/feedbackclient.index', compact('feedbacks'));
    }

    public function create()
    {
        return view('admin/feedbackclient.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'client_company' => 'required|string|max:255',
            'client_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'feedback' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        if ($request->hasFile('client_photo')) {
            $validated['client_photo'] = $request->file('client_photo')->store('feedback-clients', 'public');
        }

        FeedbackClient::create($validated);

        return redirect()->route('feedbackclient.index')
            ->with('success', 'Client feedback added successfully!');
    }

    public function edit(FeedbackClient $feedbackclient)
    {
        return view('admin/feedbackclient.edit', compact('feedbackclient'));
    }

    public function update(Request $request, FeedbackClient $feedbackclient)
    {
        $validated = $request->validate([
            'client_company' => 'required|string|max:255',
            'client_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'feedback' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        if ($request->hasFile('client_photo')) {
            if ($feedbackclient->client_photo) {
                Storage::disk('public')->delete($feedbackclient->client_photo);
            }
            $validated['client_photo'] = $request->file('client_photo')->store('feedback-clients', 'public');
        }

        $feedbackclient->update($validated);

        return redirect()->route('feedbackclient.index')
            ->with('success', 'Client feedback updated successfully!');
    }

    public function destroy(FeedbackClient $feedbackclient)
    {
        if ($feedbackclient->client_photo) {
            Storage::disk('public')->delete($feedbackclient->client_photo);
        }

        $feedbackclient->delete();

        return redirect()->route('feedbackclient.index')
            ->with('success', 'Client feedback deleted successfully!');
    }
}