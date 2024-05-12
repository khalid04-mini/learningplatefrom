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
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Participant::class , 'participant_id');
            $table->foreignIdFor(\App\Models\Formation::class , 'formation_id');
            $table->timestamp('date_inscription');
            $table->string('statut');
            $table->boolean('paye')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscriptions');
    }
};
