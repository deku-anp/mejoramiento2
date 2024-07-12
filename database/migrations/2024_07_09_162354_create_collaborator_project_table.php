<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('collaborator_project', function (Blueprint $table) {
            $table->id();

            //creacion de tablas foraneas

            $table->unsignedBigInteger('collaborator_id')->nullable();
            $table->unsignedBigInteger('project_id')->nullable();

            $table->foreign('collaborator_id')
                ->references('id')
                ->on('collaborators')->onDelete('cascade');

            $table->foreign('project_id')
                ->references('id')
                ->on('projects')->onDelete('cascade');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('collaborator_project');
    }
};
