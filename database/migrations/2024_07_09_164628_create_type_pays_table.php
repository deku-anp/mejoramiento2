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
        Schema::create('type_pays', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('nombre');

            $table->unsignedBigInteger('pay_id');

            $table->foreign('pay_id')
            ->references('id')
            ->on('pays')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('type_pays');
    }
};
