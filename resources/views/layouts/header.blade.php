
<html>
		<head>
			<meta charset = "UTF-8">
			<link rel = "stylesheet" href = "index.css">
			<title>
				laud gaming
			</title>
		</head>
		<body>
			<header>
				<div class = "Logo">
					<img src = "img/logo.png">
				</div>
				<div class = "menu">
					<ul class = "b_menu">
						<li class = "menu_element">
							<a href = "/" class = "menu_element_txt">
								<b>ГЛАВНАЯ</b>
							</a>
						</li>
						<li class = "menu_element">
							<a href = "/novinki" class = "menu_element_txt">
								<b>НОВИНКИ</b>
							</a>
						</li>
						<li class = "menu_element">
							<a href = "/skidki" class = "menu_element_txt">
								<b>СКИДКИ</b>
							</a>
						</li>
					</ul>
				</div>
				<div class = "korzina">
					<a href = "/korzina">
						<img src = "img/korz.png">
						<div class = "korz_txt">
							<b>КОРЗИНА</b>
						</div>
					</a>
				</div>
			</header>
			<div class = "banner">
				<img src = "img/banner.png" class = "banner_img">
			</div>
			<div class = "content">
				<div class = "content_menu">
					<ul class = "zhanry">
						<li class = "content_menu_element_head">
							<b>ЖАНРЫ</b>
						</li>
						<a href = "/shooters" class = "men_txt">
							<li class = "content_menu_element">
									Шутеры
							</li>
						</a>
						<a href = "/mmo" class = "men_txt">
							<li class = "content_menu_element">
									MMO-RPG
							</li>
						</a>
						<a href = "/gonki" class = "men_txt">
							<li class = "content_menu_element">
									Гонки
							</li>
						</a>
						<a href = "/sport" class = "men_txt">
							<li class = "content_menu_element">
									Спорт
							</li>
						</a>
						<a href = "/horror" class = "men_txt">
							<li class = "content_menu_element">
									Хоррор
							</li>
						</a>
					</ul>
				</div>
@yield('content')
				