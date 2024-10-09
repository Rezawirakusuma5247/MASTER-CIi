<?php

namespace App\Exports;

use App\Models\RezaWirakusuma;
use Maatwebsite\Excel\Concerns\FromCollection;

class DosenExport implements FromCollection
{
    public function collection()
    {
        return RezaWirakusuma::all();
    }
}

