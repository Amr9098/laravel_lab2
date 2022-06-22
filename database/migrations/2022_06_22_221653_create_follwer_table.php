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
        Schema::create('follwer', function (Blueprint $table) {
            $table->foreignId('new_users_id')->constrained("new_users")->cascadeOnDelete;
            $table->foreignId('follwer_users_id')->constrained("new_users");
            $table->primary(['new_users_id', 'follwer_users_id']);
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
        Schema::dropIfExists('follwer');
    }
};
