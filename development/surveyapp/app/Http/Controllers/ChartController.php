<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;
use Illuminate\Support\Facades\DB;



class ChartController extends Controller
{
    
    public function getPie()
    {
        $lava = new Lavacharts;

        $chartVotes = $lava->DataTable();

        //Count votes from database
        $sadVotes = DB::select( DB::raw("SELECT `option` FROM tbl_opinions WHERE `option` = 1"));
        $totalSad = count($sadVotes);

        $neutralVotes = DB::select( DB::raw("SELECT `option` FROM tbl_opinions WHERE `option` = 2"));
        $totalNeutral = count($neutralVotes);

        $happyVotes = DB::select( DB::raw("SELECT `option` FROM tbl_opinions WHERE `option` = 3"));
        $totalHappy = count($happyVotes);
        
        $chartVotes->addStringColumn('Votes')
                ->addNumberColumn('Number')
                ->addRow(array('Sad', $totalSad))
                ->addRow(array('Neutral', $totalNeutral))
                ->addRow(array('Happy', $totalHappy));


        $donutchart = $lava->DonutChart('Votes', $chartVotes, [
            'title' => 'Votes'
        ]);


        return view('charts', [
            'lava'      => $lava
        ]);
    }

    

}
