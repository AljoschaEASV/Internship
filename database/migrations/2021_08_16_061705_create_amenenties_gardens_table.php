<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmenentiesGardensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amenenties_gardens', function (Blueprint $table) {
            $table->timestamps();
            $table->foreignId('garden_id')->references('id')->on('gardens');
            $table->foreignId('amenity_id')->references('id')->on('amenities');

            // Composite key
            $table->primary(['garden_id', 'amenity_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('amenenties_gardens');
    }
}
