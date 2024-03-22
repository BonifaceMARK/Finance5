<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Models\Message;

class ApiController extends Controller
{
    public function fetchMessages()
    {
        $client = new Client();
        $response = $client->get('http://api.example.com/messages');
        $messages = json_decode($response->getBody()->getContents(), true);

        // Return or use the $messages data as needed
        return $messages;
    }
    public function sendMessage(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'sender_id' => 'required|exists:users,id',
            'recipient_id' => 'required|exists:users,id',
            'content' => 'required|string',
            'sender_name' => 'required|string',
            'recipient_name' => 'required|string',
        ]);

        // Create a new message
        $message = Message::create($validatedData);

        // Return the created message
        return response()->json($message, 201);
    }

}
