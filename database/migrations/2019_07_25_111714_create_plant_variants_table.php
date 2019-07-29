<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlantVariantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plant_variants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('plant_id')->unsigned();
            $table->string('plant_variant_name');
            $table->text('plant_variant_description');
            $table->text('plant_variant_growth_description');
            $table->string('plant_variant_photos');

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
        Schema::dropIfExists('plant_variants');
    }
}
