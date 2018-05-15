@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="content">

            <div class="row">
                <div class="col-md-6 col-md-offset-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">Today's votes</div>
            
                        <div class="panel-body">
                            @foreach ($opinionResults as $opinionResult)
                                <ul>
                                    <li><p>{{ $opinionResult->option }}</p></li>
                                </ul>    
                            @endforeach 
                        </div>
                    </div>
                </div>
            </div>


        </div>    
    </div>    

@include('layouts.sidebar')

@endsection