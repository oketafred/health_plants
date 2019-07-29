<?php

namespace App\Imports;

use App\Plant;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PlantsImport implements ToModel, WithBatchInserts, WithChunkReading, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Plant([
            'plant_name'     => $row['plant_name'],
            'latin_name'    => $row['latin_name'], 
            'description' => $row['description'],
            'growth_condition' => $row['growth_condition'],
            'plant_photo' => $row['plant_photo'],
        ]);
    }

    public function batchSize(): int
    {
        return 1000;
    }

    public function chunkSize(): int
    {
        return 1000;
    }

}
