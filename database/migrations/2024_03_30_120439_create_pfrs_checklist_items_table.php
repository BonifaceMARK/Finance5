<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePfrsChecklistItemsTable extends Migration
{
    public function up()
    {
        Schema::create('pfrs_checklist_items', function (Blueprint $table) {
            $table->id();
            $table->string('department'); // Department field
            $table->text('notes')->nullable(); // Notes field (nullable)
            $table->string('status')->default(''); // Status field indicating completion
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pfrs_checklist_items');
    }
}
