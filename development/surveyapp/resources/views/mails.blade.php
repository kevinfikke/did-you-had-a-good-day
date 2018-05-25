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
                            <th>telefoon nummer</th>
                    		<th>done</th>
                    	</tr>
						
                  		@foreach ($returnMails[0] as $returnmail)
                  			<tr>
							    <th class="mail">{{$returnmail->mail}}</th>
                                <th class="phone">{{$returnmail->phone}}</th>
							    <th class="send-mail-button">
							    	<form method="post" action="{{ route('mails') , $returnmail->id}}">
							    		<input type="hidden" name="_method" value="PUT">
							    		{{csrf_field()}}
							    		<input class="btn btn-danger" type="submit" name="test" value="delete">
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