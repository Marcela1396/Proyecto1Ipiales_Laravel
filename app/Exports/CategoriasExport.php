<?php

namespace App\Exports;

use App\Models\Categoria;
use Maatwebsite\Excel\Concerns\FromCollection;


class CategoriasExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Categoria::all();
    }
}
