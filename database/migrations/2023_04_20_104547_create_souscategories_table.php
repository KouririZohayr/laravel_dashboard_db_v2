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
        Schema::create('souscategories', function (Blueprint $table) {
            $table->id();
            $table->string('intitule_SC',30);
            $table->unsignedbiginteger('id_CG');
            $table->foreign('id_CG')->references('id')->on('categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('souscategories');
    }
};
