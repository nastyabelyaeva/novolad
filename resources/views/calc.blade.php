<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<title>Калькулятор цены</title>
		<link rel="stylesheet" href="{{ asset('style/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('style/css/style.css') }}">
		<link rel="stylesheet" href="{{ asset('style/css/main.css') }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
	</head>

	<body>
		<main class="calc-wrapper">
			<div class="container">
				<form id="form">
					<div class="heading">
						<h1 class="heading-title">Калькулятор стоимости ремонта</h1>
						<p class="heading-desc">Базовая цена: 1 м² = 6 тыс. рублей</p>
					</div>

					<!-- Площадь -->
					<div class="calc-section">
						<label class="checkbox-wrapper title-bold section-title section-title--vertical-center">
							<span class="title__inline">Площадь квартиры:</span>
							<input type="number" min="0" max="200" value="50" id="square-input" class="title__inline input-short" />
							<span class="title__inline">м²</span>
						</label>
						<input type="range" id="square-range" class="range-input" min="0" max="200" value="50" step="1" />
					</div>
					<!-- // Площадь -->

					<!-- Мобильная адаптивность -->
					<div class="calc-section">
						<h4 class="checkbox-wrapper title-bold section-title">Тип ремонта</h4>
						<label class="radio-wrapper" data-name="mobile">
							<input type="radio" class="radio" name="type" value="1" />
							<div class="title-lite">Косметический</div>
						</label>
						<label class="radio-wrapper" data-name="mobile">
							<input type="radio" class="radio" name="type" value="1.3" checked />
							<div class="title-lite">
								Капитальный
								<span class="note">+30% к стоимости</span>
							</div>
						</label>
						<label class="radio-wrapper" data-name="mobile">
							<input type="radio" class="radio" name="type" value="1.5" />
							<div class="title-lite">
								Под ключ
								<span class="note">+50% к стоимости</span>
							</div>
						</label>
					</div>
					<!-- // Мобильная адаптивность -->

					<!-- Мобильная адаптивность -->
					<div class="calc-section">
						<label class="checkbox-wrapper title-bold section-title"> Тип дома </label>
						<label class="radio-wrapper">
							<input type="radio" class="radio" name="building" value="1" checked />
							<div class="title-lite">Новострой</div>
						</label>
						<label class="radio-wrapper">
							<input type="radio" class="radio" name="building" value="1.1" />
							<div class="title-lite">
								Вторичка
								<span class="note">+10% к стоимости</span>
							</div>
						</label>
					</div>
					<!-- // Мобильная адаптивность -->

					<!-- Количество комнат -->
					<div class="calc-section">
						<label class="checkbox-wrapper title-bold section-title"> Количество комнат </label>
						<div class="rooms-wrapper">
							<label class="rooms-label">
								<input class="rooms-radio-real" type="radio" name="rooms" value="0.8" />
								<span class="rooms-radio-fake">C</span>
							</label>

							<label class="rooms-label">
								<input class="rooms-radio-real" type="radio" name="rooms" value="1" checked/>
								<span class="rooms-radio-fake">1</span>
							</label>

							<label class="rooms-label">
								<input class="rooms-radio-real" type="radio" name="rooms" value="1" />
								<span class="rooms-radio-fake">2</span>
							</label>

							<label class="rooms-label">
								<input class="rooms-radio-real" type="radio" name="rooms" value="1.05" />
								<span class="rooms-radio-fake">3</span>
							</label>

							<label class="rooms-label">
								<input class="rooms-radio-real" type="radio" name="rooms" value="1.05" />
								<span class="rooms-radio-fake">4</span>
							</label>

							<label class="rooms-label">
								<input class="rooms-radio-real" type="radio" name="rooms" value="1.05" />
								<span class="rooms-radio-fake">5</span>
							</label>
						</div>
					</div>
					<!-- // Количество комнат -->

					<!-- Дополнительные опции -->
					<div class="calc-section">
						<label class="checkbox-wrapper title-bold section-title"> Дополнительные опции </label>
						<label class="radio-wrapper">
							<input type="checkbox" class="radio" name="ceiling" value="900" />
							<div class="title-lite">
								Натяжные потолки
								<span class="note">900 руб. за м.кв.</span>
							</div>
						</label>
						<label class="radio-wrapper">
							<input type="checkbox" class="radio" name="walls" value="1.1" />
							<div class="title-lite">
								Покраска стен
								<span class="note">+10% к стоимости</span>
							</div>
						</label>
						<label class="radio-wrapper">
							<input type="checkbox" class="radio" name="floor" value="1.1" />
							<div class="title-lite">
								Теплый пол
								<span class="note">+10% к стоимости</span>
							</div>
						</label>
					</div>
					<!-- // Дополнительные опции -->

					<!-- Стоимость ремонта -->
					<div class="calc-price">
						<div class="calc-price-title">Стоимость ремонта:</div>
						<div class="calc-price-value">
							<span id="total-price">0</span>
							рублей
						</div>
					</div>
					<!-- // Стоимость ремонта -->
				</form>
			</div>
		</main>
		<div class="container position-relative mt-3 mb-3">
      <div class="position-absolute top-50 start-50 translate-middle">
        <a href="{{ route('main') }}" class="btn btn-primary" role="button">Вернуться на главную</a>
    </div>
      </div>

		<script src="{{ asset('style/js/bootstrap.bundle.min.js') }}"></script>
		<script src="{{ asset('style/js/calc.js') }}"></script>/>
	</body>
</html>
