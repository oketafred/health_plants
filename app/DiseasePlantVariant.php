<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiseasePlantVariant extends Model
{
	public function disease() {

		return $this->hasOne(Disease::class);

	}

	public function plant_variant() {

		return $this->hasOne(PlantVariant::class);

	}
}
