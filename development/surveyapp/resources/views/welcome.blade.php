@extends('layouts.app')

@section('content')
<div class="container">
    <div class="content">

		<form class="opinionForm" method="post" action="{{ route('vote') }}">	
    {{csrf_field()}}
			<button name="option" value="1">
				<div class="img">
					<img src="img/happy.png">
				</div>
			</button>
			<button name="option" value="2">
				<div class="img">
					<img src="img/neutral.png">
				</div>
			</button>
			<button name="option" value="3">
				<div class="img">
					<img src="img/sad.png">
				</div>
            </button>
		</form>
	</div>

	<div class="mail">
		<h2>Meer te vragen? Laat je mail achter</h2>
		<form method="post" action="{{ route('mail') }}">
		{{csrf_field()}}
			<input type="email" name="mail" class="form-control">
			<input type="submit" class="btn btn-primary">
		</form>
	</div>
</div>
@endsection
