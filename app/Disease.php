<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
	public function disease_category() {

		return $this->hasOne(DiseaseCategory::class);

	}

	public function disease_plant_variant() {

		return $this->hasMany(DiseasePlantVariant::class);

	}
}
