@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="content">

                <h1>Votes between {{$firstdate}} and {{$seconddate}}</h1>

                <div class="totalnumbers">
                        <div class="monthlyVoteCount">
                            <h3>Didn't have a good day :{{ $totalSadOwn }}</h3>
                            <h3>Had a neutral day :{{ $totalNeutralOwn }}</h3>
                            <h3>Had a good day :{{ $totalHappyOwn }}</h3>
                        </div>
                </div>

                 <div class="barChart">
                <div id="barchart-div"></div>
                {!! $lavaOwn->render('BarChart', 'votesOwn', 'barchart-div') !!}
                
                <div class="back">      
                        <button class="btn btn-primary">Back</button>
                </div>
        </div>
        </div>    
    </div>  

@include('layouts.sidebar')

@endsection
