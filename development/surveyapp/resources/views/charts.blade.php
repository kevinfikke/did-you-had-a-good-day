@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="content">

            <div class="row">
                <div class="chart">
                        <div id="chart-div"></div>
                        {!! $lava->render('DonutChart', 'Votes', 'chart-div') !!}  
                </div>
            </div>


        </div>    
    </div>    

@include('layouts.sidebar')

@endsection