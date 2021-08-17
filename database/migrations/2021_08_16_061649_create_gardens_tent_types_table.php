<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGardensTentTypesTable extends Migration
{

    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gardens_tent_types', function (Blueprint $table) {
            $table->timestamps();
            $table->foreignId('garden_id')->references('id')->on('gardens');
            $table->foreignId('tent_type_id')->references('id')->on('tent_types');
            
            $table->primary(['tent_type_id', 'garden_id']);

           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gardens_tent_types');
    }
}
