<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CommunicationController extends Controller
{
     // Display all messages
     public function index()
     {
         $messages = Message::all();
         return view('cac', compact('messages'));
     }

     // Show the form for creating a new message
     public function create()
     {
         // You might want to retrieve the list of users for sender and recipient selection
         $users = User::all();
         return view('messages.create', compact('users'));
     }

     // Store a newly created message in storage
     public function store(Request $request)
     {
         $request->validate([
             'sender_id' => 'required|exists:users,id',
             'recipient_id' => 'required|exists:users,id',
             'content' => 'required',
         ]);

         $message = new Message();
         $message->sender_id = $request->sender_id;
         $message->recipient_id = $request->recipient_id;
         $message->content = $request->content;
         $message->sender_name = Auth::user()->name; // Assuming sender's name is set to the authenticated user's name
         $message->recipient_name = User::find($request->recipient_id)->name; // Assuming recipient's name is retrieved from the user model
         $message->save();

         return redirect()->route('messages.index')->with('success', 'Message sent successfully!');
     }

     // Display the specified message
     public function show($id)
     {
         $message = Message::findOrFail($id);
         return view('messages.show', compact('message'));
     }

     // Remove the specified message from storage
     public function destroy($id)
     {
         $message = Message::findOrFail($id);
         $message->delete();

         return redirect()->route('messages.index')->with('success', 'Message deleted successfully!');
     }
}
