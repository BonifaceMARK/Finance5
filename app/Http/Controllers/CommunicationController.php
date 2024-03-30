<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChatMessage;
use Illuminate\Support\Facades\Auth;

class CommunicationController extends Controller
{

    public function index()
    {
        // Fetch the last 10 messages with the associated user
        $messages = ChatMessage::latest()->with('user')->limit(10)->get();

        // Return the authenticated user's name and department
        $user = Auth::user();
        $name = $user->name;
        $department = $user->department;

        return view('cac', compact('messages', 'name', 'department'));
    }

    public function storeMessage(Request $request)
    {
        $request->validate([
            'message' => 'required|string',
        ]);

        // Create a new message instance
        $message = new ChatMessage();
        $message->message = $request->input('message');

        // Associate the message with the authenticated user
        $message->user_id = Auth::id();

        // Save the message
        $message->save();

        return redirect()->back()->with('success', 'Message sent successfully.');
    }
    public function fetch()
    {
        // Fetch the latest chat messages
        $messages = ChatMessage::latest()->limit(10)->pluck('message');

        return response()->json($messages, 200);
    }
}
