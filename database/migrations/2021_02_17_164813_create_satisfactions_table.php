<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSatisfactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Satisfactions', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('email');
            $table->string('service');
            $table->string('disponibilte')->nullable();
            $table->string('delais')->nullable();
            $table->string('prix')->nullable();
            $table->string('qualite')->nullable();
            $table->string('proprete')->nullable();
            $table->string('protection')->nullable();
            $table->string('conseils')->nullable();
            $table->string('recommandation')->nullable();
            $table->string('note')->nullable();
            $table->string('avis')->nullable();
            $table->string('link')->nullable();
            $table->string('statut')->nullable();
            $table->string('publie')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Satisfaction');
    }
}
