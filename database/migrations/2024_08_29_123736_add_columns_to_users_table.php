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
        Schema::table('users', function (Blueprint $table) {
            // Ajouter la colonne agent_id avec une clé étrangère vers la table agents
            $table->foreignId('agent_id')->nullable()->constrained('agents')->onDelete('cascade');

            // Ajouter les colonnes supplémentaires
            $table->string('telephone', 20)->unique()->nullable();
            $table->string('code_pin', 4)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Supprimer les colonnes et les clés étrangères ajoutées dans la migration up
            $table->dropForeign(['agent_id']);
            $table->dropColumn('agent_id');
            $table->dropColumn('telephone');
            $table->dropColumn('code_pin');
        });
    }
};
