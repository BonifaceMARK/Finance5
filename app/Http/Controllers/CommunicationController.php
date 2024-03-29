<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChatMessage;

class CommunicationController extends Controller
{

  public function index()
{
    $messages = ChatMessage::latest()->limit(10)->get(); // Fetch full ChatMessage objects
    return view('cac')->with('messages', $messages);
}


    public function storeMessage(Request $request)
    {
        $request->validate([
            'message' => 'required|string',
        ]);

        $message = new ChatMessage();
        $message->message = $request->input('message');
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
