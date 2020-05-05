<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="./favicon.ico">

	<title>Заголовок</title>

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900&display=swap&subset=cyrillic"
		rel="stylesheet">

	<!-- Custom Fonts -->
	<link rel="stylesheet" href="css/fonts.css">


	<!-- Custom styles for this template -->

	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/slick.css">
	<link rel="stylesheet" href="css/slick-theme.css">
	<link href="css/style.css?1.0.9" rel="stylesheet">
</head>

<body>
  <?php
  include 'header.php';
  ?>
	<section class="clients" id="clients">
		<div class="container">
			<h2 class="section-title wow fadeInLeft">
				Наши клиенты
			</h2>
			<!-- /.section-title -->
			<div class="clients">
				<div class="clients-block"><img src="img/clients/client-1.png" alt="#" class="clients-block__img"></div>
				<!-- /.clients-block -->
				<div class="clients-block"><img src="img/clients/client-2.png" alt="#" class="clients-block__img"></div>
				<!-- /.clients-block -->
				<div class="clients-block"><img src="img/clients/client-3.png" alt="#" class="clients-block__img"></div>
				<!-- /.clients-block -->
				<div class="clients-block"><img src="img/clients/client-4.png" alt="#" class="clients-block__img"></div>
				<!-- /.clients-block -->
				<div class="clients-block"><img src="img/clients/client-5.png" alt="#" class="clients-block__img"></div>
				<!-- /.clients-block -->
				<div class="clients-block"><img src="img/clients/client-6.png" alt="#" class="clients-block__img"></div>
				<!-- /.clients-block -->
				<div class="clients-block"><img src="img/clients/client-7.png" alt="#" class="clients-block__img"></div>
				<!-- /.clients-block -->
				<div class="clients-block"><img src="img/clients/client-8.png" alt="#" class="clients-block__img"></div>
				<!-- /.clients-block -->
				<div class="clients-block"><img src="img/clients/client-9.png" alt="#" class="clients-block__img"></div>
				<!-- /.clients-block -->
				<div class="clients-block"><img src="img/clients/client-10.png" alt="#" class="clients-block__img"></div>
				<!-- /.clients-block -->
				<div class="clients-block"><img src="img/clients/client-11.png" alt="#" class="clients-block__img"></div>
				<!-- /.clients-block -->
				<div class="clients-block"><img src="img/clients/client-12.png" alt="#" class="clients-block__img"></div>
				<!-- /.clients-block -->
			</div>
			<!-- /.clients -->
		</div>
		<!-- /.container -->
	</section>
	<!-- /.clients -->

<?php
    include 'footer.php'
    ?>
   	<div class="overlay">
		<div class="popup">
			<div class="popup-title">
				Форма обратной связи
			</div>
			<!-- /.popup-title -->
			<div class="popup-close"> &times;</div>
			<!-- /.popup-close -->
			<div class="popup-form">
				<form action="#" class="main-form">
					<div class="popup-form-header">
						Получите индивидуальное предложение
						<span>на производство и поставку изделий</span>
						<label for="phone" class="popup-form__label">
							Введите ваш номер телефона:
						</label>
						<input type="tel" class="popup-form__input" name="phone" required>
						<button class="button popup-form__btn">
							Оставить заявку!
						</button>
						<div class="popup-form__note">
							*Минимальный заказ 500шт
						</div>
					</div>
				</form>


			</div>
			<!-- /.popup-form -->
		</div>
		<!-- /.popup -->
	</div>
	<!-- /.overlay -->

	<!-- Bootstrap core JavaScript -->
	<script src="http://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/scripts.js"></script>


</body>

</html>