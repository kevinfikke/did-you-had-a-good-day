@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="content">

                <h1>Votes between {{$firstdate}} and {{$seconddate}}</h1>

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
