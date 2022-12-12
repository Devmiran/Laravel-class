<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees_', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastname');
            $table->string('document');
            $table->date('birthdate');
            $table->integer('age');
            $table->string('phone');
            $table->string('address');
            $table->string('job');
            $table->foreignId('area_id')
            ->nullable()
            ->constrained('areas');
            $table->foreignId('contract_id')
            ->nullable()
            ->constrained('contracts');
            $table->timestamps();
            $table->softDeletes();
           

           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees_');
    }
};
