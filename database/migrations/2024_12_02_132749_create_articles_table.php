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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255); // Crée la colonne 'title', un champ de type string, avec une longueur maximale de 255 caractères
            $table->string('image'); // Crée la colonne 'image', un champ de type string pour stocker le chemin de l'image
            $table->text('content'); // Crée la colonne 'body', un champ de type 'text' pour stocker des contenus plus longs
            $table->string('file_path')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
