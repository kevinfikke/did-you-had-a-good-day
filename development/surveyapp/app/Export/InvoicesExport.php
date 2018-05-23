<?php

namespace App\Exports;


class InvoicesExport implements \Maatwebsite\Excel\Concerns\FromCollection
{
    public function collection()
    {
        return users::all();
    }
}