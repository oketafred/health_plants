<?php

namespace App\Exports;

use App\Plant;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PlantsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
    	return Plant::all();
    }

    public function headings(): array
    {
    	return [
    		'id',
    		'plant_name',
    		'latin_name',
    		'description',
    		'growth_condition',
    		'plant_photo',
    		'created_at',
    		'updated_at',
    	];
    }
}
