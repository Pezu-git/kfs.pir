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
        Schema::create('gph_contracts', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('surname');
            $table->string('name');
            $table->string('patronymic');
            $table->string('contract_subject');
            $table->date('beginning');
            $table->string('number');
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('gph_contracts');
    }
};
