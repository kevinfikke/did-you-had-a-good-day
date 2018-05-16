<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;

class ExcelController extends Controller
{
    public function export(){
    	Excel::download('test', function($excel){
    		$excel->sheet('test', function($sheet){
    			$sheet->loadView('test');
    		});
    	})->download('xlsx');
    }
}
