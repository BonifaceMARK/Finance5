<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Payment;
use Illuminate\Support\Facades\Http;
use App\Models\Message;
class ApiController extends Controller
{

    public function Payment()
    {
        try {
            // Fetch transactions from the external API
            $payments = Payment::all();

            // Return the transactions as JSON response
            return response()->json($payments);
        } catch (\Exception $e) {
            // Log the error
            Log::error('Error fetching transactions from external API: ' . $e->getMessage());

            // Return    an error response
            return response()->json(['error' => 'Failed to fetch transactions'], 500);
        }
    }


}
