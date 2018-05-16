<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ChartController extends Controller
{
    
    public function getTotal() //Gets all votes
    {
        $lavaBar = new Lavacharts;

        $barVotes  = $lavaBar->DataTable();

        //Count votes from database
        $sadVotes = DB::select( DB::raw("SELECT `option` FROM tbl_opinions WHERE `option` = 1"));
        $totalSad = count($sadVotes);

        $neutralVotes = DB::select( DB::raw("SELECT `option` FROM tbl_opinions WHERE `option` = 2"));
        $totalNeutral = count($neutralVotes);

        $happyVotes = DB::select( DB::raw("SELECT `option` FROM tbl_opinions WHERE `option` = 3"));
        $totalHappy = count($happyVotes);

        $barVotes->addStringColumn('barVotes')
            ->addNumberColumn('Votes')
            ->addRow(['Sad', $totalSad])
            ->addRow(['Neutral', $totalNeutral])
            ->addRow(['Happy', $totalHappy]);

        $barchart = $lavaBar->BarChart('barVotes', $barVotes, [
            'title' => 'Total votes'
        ]);

        return view('charts.total', [
            'lavaBar'       => $lavaBar,
            'totalSad'      => $totalSad,
            'totalNeutral'  => $totalNeutral,
            'totalHappy'    => $totalHappy
        ]);
    }

    public function getDaily() //Gets daily votes
    {
        $lavaDaily = new Lavacharts;

        $votesToday  = $lavaDaily->DataTable();

        $now = Carbon::today();
        $today = $now->toDateString();
        
        $sadToday = DB::select( DB::raw("SELECT `option` FROM tbl_opinions WHERE created_at LIKE '$today%' && `option` = 1"));
        $totalSadToday = count($sadToday);

        $neutralToday = DB::select( DB::raw("SELECT `option` FROM tbl_opinions WHERE created_at LIKE '$today%' && `option` = 2"));
        $totalNeutralToday = count($neutralToday);

        $happyToday = DB::select( DB::raw("SELECT `option` FROM tbl_opinions WHERE created_at LIKE '$today%' && `option` = 3"));
        $totalHappyToday = count($happyToday);

        $votesToday->addStringColumn('votesToday')
            ->addNumberColumn('Votes')
            ->addRow(['Sad', $totalSadToday])
            ->addRow(['Neutral', $totalNeutralToday])
            ->addRow(['Happy', $totalHappyToday]);

        $barChartDaily = $lavaDaily->BarChart('votesToday', $votesToday, [
            'title' => 'Votes today'
        ]);

        return view('charts.daily', [
            'lavaDaily'            => $lavaDaily,
            'totalSadToday'        => $totalSadToday,
            'totalNeutralToday'    => $totalNeutralToday,
            'totalHappyToday'      => $totalHappyToday
        ]);

    }

    public function getWeekly() { //Get weekly votes

        $lavaWeekly = new Lavacharts;

        $votesWeekly  = $lavaWeekly->DataTable();

        $startOfWeek = Carbon::today()->startOfWeek();
        $endOfWeek = Carbon::today()->endOfWeek();

        $sadWeekly = DB::select( DB::raw("SELECT `option` FROM tbl_opinions WHERE `created_at` BETWEEN '$startOfWeek' AND '$endOfWeek' && `option` = 1"));
        $totalSadWeekly = count($sadWeekly);

        $neutralWeekly = DB::select( DB::raw("SELECT `option` FROM tbl_opinions WHERE `created_at` BETWEEN '$startOfWeek' AND '$endOfWeek' && `option` = 2"));
        $totalNeutralWeekly = count($neutralWeekly);

        $happyWeekly = DB::select( DB::raw("SELECT `option` FROM tbl_opinions WHERE `created_at` BETWEEN '$startOfWeek' AND '$endOfWeek' && `option` = 3"));
        $totalHappyWeekly = count($happyWeekly);

        $votesWeekly->addStringColumn('votesWeekly')
        ->addNumberColumn('Votes')
        ->addRow(['Sad', $totalSadWeekly])
        ->addRow(['Neutral', $totalNeutralWeekly])
        ->addRow(['Happy', $totalHappyWeekly]);

        $barChartWeekly = $lavaWeekly->BarChart('votesWeekly', $votesWeekly, [
            'title' => 'Weekly votes'
        ]);

        return view('charts.weekly', [
            'lavaWeekly'            => $lavaWeekly,
            'totalSadWeekly'        => $totalSadWeekly,
            'totalNeutralWeekly'    => $totalNeutralWeekly,
            'totalHappyWeekly'      => $totalHappyWeekly
        ]);

    }

    public function getMonthly() //Get monthly votes
    {

        $lavaMonthly = new Lavacharts;

        $votesMonthly  = $lavaMonthly->DataTable();

        $startOfMonth = Carbon::today()->startOfMonth();
        $endOfMonth = Carbon::today()->endOfMonth();

        $sadMonthly = DB::select( DB::raw("SELECT `option` FROM tbl_opinions WHERE `created_at` BETWEEN '$startOfMonth' AND '$endOfMonth' && `option` = 1"));
        $totalSadMonthly = count($sadMonthly);

        $neutralMonthly = DB::select( DB::raw("SELECT `option` FROM tbl_opinions WHERE `created_at` BETWEEN '$startOfMonth' AND '$endOfMonth' && `option` = 2"));
        $totalNeutralMonthly = count($neutralMonthly);

        $happyMonthly = DB::select( DB::raw("SELECT `option` FROM tbl_opinions WHERE `created_at` BETWEEN '$startOfMonth' AND '$endOfMonth' && `option` = 3"));
        $totalHappyMonthly = count($happyMonthly);

        $votesMonthly->addStringColumn('votesMonthly')
        ->addNumberColumn('Votes')
        ->addRow(['Sad', $totalSadMonthly])
        ->addRow(['Neutral', $totalNeutralMonthly])
        ->addRow(['Happy', $totalHappyMonthly]);

        $barChartMonthly = $lavaMonthly->BarChart('votesMonthly', $votesMonthly, [
            'title' => 'Monthly votes'
        ]);

        return view('charts.monthly', [
            'lavaMonthly'            => $lavaMonthly,
            'totalSadMonthly'        => $totalSadMonthly,
            'totalNeutralMonthly'    => $totalNeutralMonthly,
            'totalHappyMonthly'      => $totalHappyMonthly
        ]);

    }
}
