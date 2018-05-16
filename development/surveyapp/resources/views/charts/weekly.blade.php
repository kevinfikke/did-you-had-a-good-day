@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="content">

            <div class="weekly">

                <div class="weeklyVoteCount">
                    <h1>This weeks' votes:</h1>
                    <h3>Didn't have a good day :{{ $totalSadWeekly }}</h3>
                    <h3>Had a neutral day :{{ $totalNeutralWeekly }}</h3>
                    <h3>Had a good day :{{ $totalHappyWeekly }}</h3>
                </div>
            </div>   

            <div class="barChart">
                <div id="barchart-div"></div>
                {!! $lavaWeekly->render('BarChart', 'votesWeekly', 'barchart-div') !!}  
            </div>
        </div>    
    </div>    

@include('layouts.sidebar')

@endsection