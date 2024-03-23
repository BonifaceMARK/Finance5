<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectDecisionsTable extends Migration
{
    public function up()
    {
        Schema::create('project_decisions', function (Blueprint $table) {
            $table->id();
            $table->string('project_name');
            $table->foreign('project_name')->references('project_name')->on('projects')->onDelete('cascade');
            $table->string('decision'); // The decision made (e.g., successful, unsuccessful)
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('project_decisions');
    }
}
