<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ExcelExport implements FromCollection
{
    public function export(){
    	return Excel::download(new App\Export\InvoicesExport, 'invoices.xlsx');
    }
}