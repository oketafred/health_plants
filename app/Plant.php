<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
	protected $fillable = ['plant_name', 'description', 'latin_name', 'plant_photo', 'growth_condition'];

	public function plant_variants(){

		return $this->hasMany(PlantVariant::class);

	}
}
