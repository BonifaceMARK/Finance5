<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsReportTbl extends Migration
{
    public function up()
    {
        Schema::create('transactions_report_tbl', function (Blueprint $table) {
            $table->id();
            $table->string('transactionName');
            $table->string('transactionType');
            $table->decimal('transactionAmount', 10, 2);
            $table->dateTime('transactionDate');
            $table->string('transactionStatus');
            $table->string('reasonForCancellation')->nullable();
            // Add more columns if needed
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('transactions_report_tbl');
    }
}
