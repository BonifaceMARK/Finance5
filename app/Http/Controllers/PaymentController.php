<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransactionsReport;
use App\Helpers\Helpers;
class PaymentController extends Controller
{

    public function index()
    {
        $transactionsReports = TransactionsReport::all();
            $curl = curl_init();
            $url = "https://fms3-swasfcrb.fguardians-fms.com/s-pull-approved";
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($curl);
            curl_close($curl);
            $data = json_decode($response, true);
            if (!empty($data)) {
                foreach ($data as $item) {
                    // Retrieve the record by its reference
                    $existingItem = TransactionsReport::where('reference', $item['reference'])->first();
                    if ($existingItem) {

                        $nestedComment = $item['comment'];
                        $comment = $nestedComment['comment'];
                        $existingItem->transactionStatus = $item['status'];
                        $existingItem->updated_at = $item['updated_at'];
                        $existingItem->comment = $comment;
                        // Save the changes
                        $existingItem->save();
                    } else {


                    }

                }
            }

        return view('transactions.index', compact('transactionsReports'));

    }


    public function showCancelForm($id)
    {
        $transactionsReports = TransactionsReport::findOrFail($id);
        return view('transactions-report.cancel', compact('transactionsReports'));
    }
    public function processCancellation(Request $request, $id)
    {
        $transactionsReport = TransactionsReport::findOrFail($id);

        // Delete the TransactionsReport
        $transactionsReport->delete();

        return redirect()->route('transactions.index')->with('success', 'Transaction has been deleted successfully.');
    }

    public function store(Request $request)
    {
        $randomString = Helpers::generateRandomString(10);
        $validatedData = $request->validate([

            'productName' => 'required|string',
            'transactionName' => 'required|string',
            'paymentMethod' => 'required|string',
            'cardType' => 'required|string',
            'transactionType' => 'required|string',
            'transactionAmount' => 'required|numeric',
            'transactionDate' => 'required|date',
            'description' => 'nullable|string',
            'comment' => 'nullable|string',
            'transactionStatus' => 'required|string',
            'reasonForCancellation' => 'string|nullable',
        ]);
        $validatedData['reference'] = $randomString;
        TransactionsReport::create($validatedData);

        return redirect()->route('transactions.index')->with('success', 'Transaction report created successfully.');
    }



}
