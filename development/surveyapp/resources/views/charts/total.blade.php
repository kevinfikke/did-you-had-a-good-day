@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="content">

            <div class="total">

                <div class="totalVoteCount">
                    <h1>Total votes:</h1>
                    <h3>Didn't have a good day :{{ $totalSad }}</h3>
                    <h3>Had a neutral day :{{ $totalNeutral }}</h3>
                    <h3>Had a good day :{{ $totalHappy }}</h3>
                </div>
            </div>   

            <div class="barChart">
                <div id="barchart-div"></div>
                {!! $lavaBar->render('BarChart', 'barVotes', 'barchart-div') !!}  
            </div>
        </div>    
    </div>    

@include('layouts.sidebar')

@endsection