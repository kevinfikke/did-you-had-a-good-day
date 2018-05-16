@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="content">

            <div class="daily">

                <div class="dailyVoteCount">
                    <h1>today's votes:</h1>
                    <h3>Didn't have a good day :{{ $totalSadToday }}</h3>
                    <h3>Had a neutral day :{{ $totalNeutralToday }}</h3>
                    <h3>Had a good day :{{ $totalHappyToday }}</h3>
                </div>
            </div>   

            <div class="barChart">
                <div id="barchart-div"></div>
                {!! $lavaDaily->render('BarChart', 'votesToday', 'barchart-div') !!}  
            </div>
            
        </div>    
    </div>    

@include('layouts.sidebar')

@endsection