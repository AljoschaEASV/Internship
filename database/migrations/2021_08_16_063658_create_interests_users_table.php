<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInterestsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('interests_users', function (Blueprint $table) {
            $table->timestamps();
            $table->foreignId('interest_id')->references('id')->on('interests');
            $table->foreignId('user_id')->references('id')->on('users');

            // Composite key
            $table->primary(['interest_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('interests_users');
    }
}
