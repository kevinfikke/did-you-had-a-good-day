@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="content">

            <div class="monthly">

                <div class="monthlyVoteCount">
                    <h1>This months' votes:</h1>
                    <h3>Didn't have a good day :{{ $totalSadMonthly }}</h3>
                    <h3>Had a neutral day :{{ $totalNeutralMonthly }}</h3>
                    <h3>Had a good day :{{ $totalHappyMonthly }}</h3>
                </div>
            </div>   

            <div class="barChart">
                <div id="barchart-div"></div>
                {!! $lavaMonthly->render('BarChart', 'votesMonthly', 'barchart-div') !!}  
            </div>
        </div>    
    </div>    

@include('layouts.sidebar')

@endsection