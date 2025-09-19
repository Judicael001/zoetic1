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
        Schema::table('formations', function (Blueprint $table) {
            $table->string('titre');
            $table->text('description')->nullable();
            $table->integer('duree')->nullable(); // en heures ou jours
            $table->decimal('prix', 8, 2)->nullable(); // CFA
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('formations', function (Blueprint $table) {
            $table->dropColumn(['titre', 'description', 'duree', 'prix']);
        });
    }
};
