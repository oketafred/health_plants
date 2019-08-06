<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiseaseCategory extends Model
{
	public function diseases() {

		return $this->hasMany(Disease::class);

	}
}
