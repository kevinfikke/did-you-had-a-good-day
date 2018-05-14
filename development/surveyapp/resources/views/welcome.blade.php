@extends('layouts.app')

@section('content')
<div class="container">
    <div class="content">
	<form method="post" action="{{ route('vote') }}">
		<input type="hidden" value="{{csrf_token()}}" name="_token"/>
			<button>
				<div class="img">
					<img src="img/sad.png">
				</div>
            </button>
            <input type="submit" class="form-control" name="1">
		</form>

		<form method="post" action="{{route('vote') }}">
			<input type="hidden" value="{{csrf_token()}}" name="_token">
			<button>
				<div class="img">
					<img src="img/neutral.png">
				</div>
            </button>
            <input type="submit" class="form-control" name="2">
		</form>
			
		<form method="post" action="{{ route('vote') }}">	
			<input type="hidden" value="{{csrf_token()}}" name="_token"/>
			<button>
				<div class="img">
					<img src="img/happy.png">
				</div>
            </button>
            <input type="submit" class="form-control" name="3">
        </form>
	</div>
</div>
@endsection
