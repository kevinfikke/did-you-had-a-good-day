@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="content">

            <h1>Give votes between:</h1>
            
            <div class="dates">
            <form action="{{ route('datechart') }}">
                    {{csrf_field()}}
                    <input type="date" name="date1">
                    <input type="date" name="date2">
                    <input type="submit">
                </form>
            </div>
        </div>    
    </div>    

@include('layouts.sidebar')

@endsection