<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnseignantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enseignants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('option_id');
            $table->string('statut')->default('Etudiant');
            $table->string('last_name')->nullable();
            $table->string('matricule');
            $table->string('email')->unique();
            $table->integer('heur')->default(0);
            $table->string('phone_number')->nullable();
            $table->string('password');
            $table->string('avatar')->default('default.png');
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
        Schema::dropIfExists('enseignants');
    }
}
