<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlantVariant extends Model
{

	public function plant(){

		return $this->hasOne(Plant::class);

	}

	public function disease_plant_variant() {

		return $this->hasMany(DiseasePlantVariant::class);

	}

}
