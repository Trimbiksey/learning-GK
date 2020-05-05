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
  	<section class="prodution" id="production">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-7 order-last order-md-first">
					<div class="production-slider_top hidden-mobile">
						<img src="img/production/big/howwework__img1-big.jpg" alt="">
						<img src="img/production/big/howwework__img2-big.jpg" alt="">
						<img src="img/production/big/howwework__img3-big.jpg" alt="">
						<img src="img/production/big/howwework__img4-big.jpg" alt="">
						<img src="img/production/big/howwework__img5-big.jpg" alt="">
						<img src="img/production/big/howwework__img6-big.jpg" alt="">
					</div>
					<div class="production-slider_bottom  wow fadeInLeft">
						<img src="img/production/big/howwework__img1-big.jpg" alt="">
						<img src="img/production/big/howwework__img2-big.jpg" alt="">
						<img src="img/production/big/howwework__img3-big.jpg" alt="">
						<img src="img/production/big/howwework__img4-big.jpg" alt="">
						<img src="img/production/big/howwework__img5-big.jpg" alt="">
						<img src="img/production/big/howwework__img6-big.jpg" alt="">
					</div>
				</div>
				<div class="col-12 col-md-5 order-first order-md-last">
					<div class="production-text">
						<div class="production-text__title">Производство

						</div>
						<div class="production-text__descr">Современное оборудование позволяет произ- водить до 5 миллионов
							квадратных метров гофрокартона ежемесячно. Гофрокороба и лотки производятся по ГОСТу или чертежам
							заказчика.<br>
							Досконально прорабатываем конструкции коро- бов и составы сырья, учитывая условия хранения,
							транспортировки и производства вашей продукции.
							Возможно нанесение цветной флексопечати на поверхность коробов.

						</div>
					</div>
				</div>
			</div>
		</div>
  </section>
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