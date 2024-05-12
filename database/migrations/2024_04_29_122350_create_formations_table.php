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
        Schema::create('formations', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('slug');
            $table->text('description');
            $table->decimal('prix');
            $table->decimal('montant_paye');
            $table->foreignIdFor(\App\Models\Formateur::class, 'formateur_id');
            $table->foreignIdFor(\App\Models\Salle::class, 'salle_id');
            $table->timestamp('date_debut')->nullable();
            $table->timestamp('date_fin')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formations');
    }
};
