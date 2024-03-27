<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\TransactionsReport;

class ApiController extends Controller
{

    public function Payment()
    {
        try {
            // Fetch transactions from the external API
            $transactions = TransactionsReport::all();

            // Return the transactions as JSON response
            return response()->json($transactions);
        } catch (\Exception $e) {
            // Log the error
            Log::error('Error fetching transactions from external API: ' . $e->getMessage());

            // Return    an error response
            return response()->json(['error' => 'Failed to fetch transactions'], 500);
        }
    }
    public function test()
    {
        // Fetch data from the TransactionsReport model
        $transactions = TransactionsReport::all();

        // Return the data as JSON
        return response()->json($transactions);
    }

}
