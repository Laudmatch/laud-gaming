<!DOCTYPE html>
	@extends('layouts.header')
	@section('content')
				<div class = "content_main_txt">
					<b>ШУТЕРЫ</b>
				</div>
				<div class = "game">
				<a href = "/t1" class = "ss1">
					<div class = "img">
						<img src = "img/game1.png">
					</div>
					<div class = "game_txt">
						<div class = "nazv">
							<b>PLAYER UNKNOWNS BATTLEGROUNDS</b>
						</div>
						<div class = "cena">
							<strike> 500р </strike> 300р
						</div>
					</div>
					<form class = "form">
						<button class = "form_button">
							В корзину
						</button>
					</form>
				</a>
				</div>
				<div class = "game">
				<a href = "/t4" class = "ss1">
					<div class = "img">
						<img src = "img/game4.png">
					</div>
					<div class = "game_txt">
						<div class = "nazv">
							<b>CALL OF DUTY: BLACK OPS 4</b>
						</div>
						<div class = "cena">
							500р
						</div>
					</div>
					<form class = "form">
						<button class = "form_button">
							В корзину
						</button>
					</form>
				</a>
				</div>
				<div class = "game">
				<a href = "/t5" class = "ss1">
					<div class = "img">
						<img src = "img/game5.png">
					</div>
					<div class = "game_txt">
						<div class = "nazv">
							<b>BATTLEFIELD V</b>
						</div>
						<div class = "cena">
							500р
						</div>
					</div>
					<form class = "form">
						<button class = "form_button">
							В корзину
						</button>
					</form>
				</a>
				</div>
			</div>
			<footer>
				<div class = "footer_txt">
					<a href = "#" class = "f_txt">
						Мы в соц. сетях
					</a>
					<a href = "#" class = "f_txt">
						Администрация
					</a>
				</div>
			</footer>
		</body>
	</html>
	@endsection