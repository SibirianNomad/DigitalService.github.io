<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Digital Service</title>
<meta name='viewport' content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="css/jquery.fancybox-1.3.4.css?v=1" type="text/css" media="screen" >
<link rel="stylesheet" href="css/style.css?v=1" type="text/css" media="screen" >
<link rel="stylesheet" href="css/left-nav-style.css?v=2" type="text/css" media="screen" >
</head>
<body>
	<input type="checkbox" id="nav-toggle" hidden="">
	<nav class="nav">
        <label for="nav-toggle" class="nav-toggle" onclick>
			<img src="img/menu.svg" class="burger-menu">
		</label>
       
        <ul class="nav-toggle-menu">
			<li><a href='#service' class='header_link'>Услуги</a></li>
			<li><a href='#license' class='header_link'>Лицензии</a></li>
			<li><a href='#contacts' class='header_link'>Контакты</a></li>
        </ul>
    </nav>
	<main role="main">
	<div class='header'>
			<div class='b-block'>
				<div class='header_top-menu'>
					<a class='logo_block' href='http://dgs.ru//'>
						<img class='logo' src='img/logo1.png'>
					</a>
					<div class='header_menu'>
						<ul class='header_menu-ul'>
							<li><a href='#service' class='header_link'>Услуги</a></li>
							<li><a href='#license' class='header_link'>Лицензии</a></li>
							<li><a href='#contacts' class='header_link'>Контакты</a></li>
						</ul>
					</div>
					<div class="header-contact">
						<div class="header_phone_service">Телефон технической <br>поддержки</div>
						<div class="header_number">
							<a href="tel:+7(3822) 22-96-92" class="header_number-link">+7 (3822) 22-96-92</a>
						</div>
					</div>
				</div>
				<div class='header_box_title_backgrond'>
					<div class="header_title_bid">
					<div class='header_title'>
						<h1>Скоростной Безлиминтный Интернет в Томске
						и Томском районе.
						<p> Скорость до 10 Мбит/с - <span class="tarif">660 руб/месяц.</span></span></p>
						<p class="cctv"> Монтаж видеонаблюдения.</p>
						</h1>
					</div>
					<a href='#' class="drop_bid">
						Подать заявку на подключение
					</a>
				</div>
						<div class='header_backgrond'></div>
						<div class='header_backgrond1'></div>
					</div>
					<a href="#service">
						<div class="mouseicon">
							<img class="mouseicon_first" src="img/Mouseicon1.svg">
						</div>
					</a>
			</div>		
		</div>
		<div class="services">
			<a name="service"></a>
				<h2>Наши услуги</h2>
			<div class="b-block">
				<div class="service">
					<img src="img/internet.png">
					<div class="service_title">Безлиминтный интернет</div>
					<div class="service_line"></div>
					<div class="service_text">
						 Скоростной безлимитный интернет. Подключение в Томске и томском районе. Настройка и поддержка Wi-Fi.
					</div>
				</div>
				
				<div class="service">
					<img src="img/camera.png">
					<div class="service_title">Монтаж видеонаблюдения</div>
					<div class="service_line"></div>
					<div class="service_text">
						Организация видеонаблюдения через интернет, проектирование, монтаж оборудования и сопровождение.
					</div>
				</div>
			</div>
		</div>
		
		<div class='contact'>
			<a name='contacts'></a>
			<div class='b-block'>
				<a name='contact'></a>
				<div class='contact-left'>
					<div class='b-block_contact-left'>
						<form class='contact_mainform' id='main_form'>
							<div class='contact-title'><h3 class='contact-title-text'>Обратная связь</h3></div>
							<div class='contact-left_name-block'>
								<div class='contact-left_text'>Ваше имя</div>
								<input type='text' placeholder="Ива Иванович" class='contact-left_form' name='name'>
							</div>

							<div class ='contact-left_number-block'>
								<div class='contact-left_text'>Ваш номер</div>
								<input  type='text' name='number' id='phone' placeholder="8(999)-999-99-99" class='contact-left_form form_number'>
							</div>

							<div class='contact-left_theme-block'>
								<div class='contact-left_text'>Тема сообщения</div>
								<input type='text' name='theme' placeholder="Тема сообщения" class='contact-left_form theme'>
							</div>


							<div class='contact-left_text'>Текст сообщения</div>
							<textarea placeholder="Hello!" name='maintext' class='contact-left_form theme_textarea'></textarea>
							<div class="contact_text_button_block">
								<div class='contact-left_bottom_text'>Отправляя запрос, Вы подтверждаете согласие на обработку персональных данных</div>
								<input type='submit' class='contact-left_button'  value='Отправить   →'>
							</div>
							</form>
					</div>
				</div>
				<div class='contact-right'>
					<div class='b-block_contact-right'>
						<div class='contact-title'><h3 class='contact-title-text'>Наш офис</h3></div>
						<div class='contact_text'>
							<p><span class='contact_text-firstword'>Адрес: </span> г.Томск, <nobr>пер. Паровозный д.10</nobr></p>
							<p><span class='contact_text-firstword'>E-mail: </span> <a href='mail:support@dgs.ruu' class='contact_number-link'>support@dgs.ru</a></p>
							<p><span class='contact_text-firstword'>Телефон: </span><a href='tel:+7 (3822) 99-9-23' class='contact_number-link'>+7 3822 90 13 32</a></p>
							<p><span class='contact_text-firstword'>Факс: </span><a href='tel:+7 (3822) 99-99-24' class='contact_number-link'>+7 3822 90 13 32</a></p>
						</div>
						<a href='inf.txt' download="inf.txt" class='contact-right_button'>Скачать реквизиты   ↓</a>
						<div class='contact-title'><h3 class='contact-title-text'>Хотите у нас работать?</h3></div>
						<div class='contact_text'>Пожалуйста, отправьте резюме и сопроводительное письмо по адресу: <a href='mail:office@dgs.ru' class='contact_mail'>office@dgs.ru</a></div>
					</div>
				</div>
			</div>
		</div>
		<div class='map'>
			<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A637a40612d5c1944e3c426592e8a685a58cd7eb91e0e45c5b397f3d6c9a97091&amp;width=100%25&amp;height=518&amp;lang=ru_RU&amp;scroll=true"></script>
		</div>
		<div class="licenses">
			<a name='license'></a>
			<img src="img/lisence1.jpg">
			<img src="img/lisence2.jpg">
		</div>	
		<hr>
		<div class="b-block footer">
			<div class="footer_text">© Copyright Digital Service 2007 - <?=date('Y')?></div>
			<div class="footer_text">Разработка сайта: <a href='tel:+7-923-429-08-49'>Курченко Евгений</a></div>
		</div>
		<div class="popup" id='popup'>
			<div class='b-block_contact-left'>
				<form class='contact_mainform' id='popup_form'>
					<div class='contact-title'><h3 class='contact-title-text'>Обратная связь</h3></div>
					<div class='contact-left_name-block'>
						<div class='contact-left_text'>Ваше имя</div>
						<input type='text' placeholder="Ива Иванович" class='contact-left_form' name='name_popup'>
					</div>

					<div class ='contact-left_number-block'>
						<div class='contact-left_text'>Ваш номер</div>
						<input  type='text' name='number_popup' id='popup_phone' placeholder="8(999)-999-99-99" class='contact-left_form form_number'>
					</div>
						<input type='submit' class='contact-left_button'  value='Отправить'>
						<div class='contact-left_bottom_text'>Отправляя запрос, Вы подтверждаете согласие на обработку персональных данных</div>
					</div>
					</form>
			</div>
			<div class="popup-success" id='popup-success'>
				<img src='img/success.svg'>
				<h3 class='contact-title-text'>Ваша заявка отправлена</h3>
				<h3 class='contact-title-text'>Наш менеджер с вами свяжется в ближайшее время</h3>
			</div>
		</div>
		</div>
	</main>	
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox-1.3.4.js"></script>
	<script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>	
</body>
</html>


