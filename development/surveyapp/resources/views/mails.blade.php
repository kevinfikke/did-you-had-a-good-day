@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">gekregen mails die nog moeten worden beantwoordt</div>

                <div class="panel-body">
                    
                    <table>
                    	<tr>
                    		<th>mail</th>
                    		<th>send</th>
                    	</tr>
						
                  		@foreach ($returnMails[0] as $returnmail)
                  			<tr>
							    <th class="mail">{{$returnmail->mail}}</th>
							    <th class="send-mail-button">
							    	<form method="post" action="{{ route('mails')}}">
							    		<input type="hidden" name="_method" value="PUT">
							    		{{csrf_field()}}
							    		<input type="submit" name="test" value="verzenden">
							    		<input type="hidden" name="id" value="{{$returnmail->id}}">
							    	</form>
							    </th>
						    </tr>
						@endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.sidebar')
</div>
@endsection 	