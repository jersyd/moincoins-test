<?php

namespace App\Imports;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class CategoriesImport implements ToModel, WithStartRow
{
    /**
     * @return int
     */
    public function startRow(): int
    {
        return 2;
    }

    /**
    * @param array $row
    *
    * @return Model
    */
    public function model(array $row): Model
    {
        return new Category([
            'id' => $row[0],
            'name' => $row[1],
            'url_key' => $row[2],
            'description' => $row[3],
            'image' => $row[4],
            'parent_id' => $row[5]
        ]);
    }
}
