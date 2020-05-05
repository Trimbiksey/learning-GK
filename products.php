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
include 'header.php'
?>

<section class="products" id="products">
<div class="container">
  <h2 class="section-title wow fadeInLeft">Наша продукция</h2>
  <!-- /.section-title -->
  <div class="row">


    <div class="col-12 col-md-6">
      <div class="products-block">
        <img class="products-block__img" src="img/products/img-1.png" alt="#">
        <div class="products-block__title">
          Гофрокороб 4-х клапанный
        </div>
        <!-- /.products-block__title -->
        <div class="products-block__buttons"><button
            class="button button-o products-block__button">Подробнее</button><button class="button">Получить
            расчет</button></div>
        <!-- /.products-block__buttons -->
      </div>
    </div>
    <!-- /.col-6 -->


    <div class="col-12 col-md-6">
      <div class="products-block">
        <img class="products-block__img" src="img/products/img-2.png" alt="#">
        <div class="products-block__title">
          Гофролоток
        </div>
        <!-- /.products-block__title -->
        <div class="products-block__buttons"><button
            class="button button-o products-block__button">Подробнее</button><button class="button">Получить
            расчет</button></div>
        <!-- /.products-block__buttons -->
      </div>
    </div>
    <!-- /.col-6 -->
  </div>
  <!-- /.row -->
  <div class="row">


    <div class="col-12 col-md-6">
      <div class="products-block">
        <img class="products-block__img" src="img/products/img-4.png" alt="#">
        <div class="products-block__title">
          Гофрокороб самосборный (сложная высечка)
        </div>
        <!-- /.products-block__title -->
        <div class="products-block__buttons"><button
            class="button button-o products-block__button">Подробнее</button><button class="button">Получить
            расчет</button></div>
        <!-- /.products-block__buttons -->
      </div>
    </div>
    <!-- /.col-6 -->


    <div class="col-12 col-md-6">
      <div class="products-block">
        <img class="products-block__img" src="img/products/img-3.png" alt="#">
        <div class="products-block__title">
          Листовой гофрокартон
        </div>
        <!-- /.products-block__title -->
        <div class="products-block__buttons"><button
            class="button button-o products-block__button">Подробнее</button><button class="button">Получить
            расчет</button>
        </div>
        <!-- /.products-block__buttons -->
      </div>
    </div>
    <!-- /.col-6 -->
  </div>
  <!-- /.row -->
</div>
<!-- /.container -->
</section>
<!-- /.products -->


<section class="offer dark-bg">
<div class="container">
  <h2 class="offer-title">
    Получите индивидуальное предложение
    <span class="offer-title_small">на производство и поставку изделий</span>
  </h2>
  <div class="offer-form">
    <form action="#">
      <label class="offer-form__label" for="">Введите ваш номер телефона:</label>
      <input class="form__input offer-form__input" type="tel" placeholder="+7 (ХХХ) ХХХ-ХХ-ХХ">
      <button class="button offer-form__button" type="submit">Оставить заявку!</button>
    </form>
    <small class="form-small">*Минимальный заказ 500шт</small>
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