@extends('layouts.app')

@section('content')
<div class="container app">
    <div class="content">
		<div class="logo">
			<img class="logo-img" src="img/logo.png" alt="">
		</div>
		<div class="slogan">
			<h1>Heb je een leuke dag gehad?</h1>
		</div>
		<form class="opinionForm" method="post" action="{{ route('vote') }}">	
    {{csrf_field()}}
			<button name="option" value="1">
				<div class="img">
					<img src="img/sad.png">
				</div>
			</button>
			<button name="option" value="2">
				<div class="img">
					<img src="img/neutral.png">
				</div>
			</button>
			<button name="option" value="3">
				<div class="img">
					<img src="img/happy.png">
				</div>
            </button>
		</form>
	</div>

	<div class="mail">
		<div class="pop-up" id="myPopup">
			<div class="pop-up-header">
				<button class="close-pop-up" onclick="popupOpen()">X</button>
				<h2 class="pop-up-title">Meer te vragen? Laat je mail achter</h2>
			</div>
			<form method="post" action="{{ route('mail') }}">
			{{csrf_field()}}
				<input type="email" name="mail" class="form-control">
				<input type="submit" class="btn btn-primary">
			</form>
		</div>
		<button class="btn btn-primary popup-button" onclick="popupOpen()">contact opnemen</button>
	</div>
</div>
@endsection
