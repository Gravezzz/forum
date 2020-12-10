<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Forum</title>

	<link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

	<div class="wrapper">
		<div class="forum">
			<div class="conteiner">
				<div class="forum__body">
					<!-- Боковое меню -->
					<nav class="menu">
						<!-- Логотип -->
						<a href="/">
							<div class="menu__logo">
								<img src="assets/img/logo.svg" alt="The logo">
							</div>
						</a>
						<hr>
						<!-- Элементы меню -->
						<div class="menu__items">
							<ul class="menu__ul">
								<a href="#">
									<li class="ul__link">
										<div class="circle">
											<div class="icon"><img src="assets/img/person.svg" alt=""></div>
										</div>
									</li>
								</a>
								<a href="#">
									<li class="ul__link">
										<div class="circle">
											<div class="icon"><img src="assets/img/list.svg" alt=""></div>
										</div>
									</li>
								</a>
								<a href="#">
									<li class="ul__link">
										<div class="circle">
											<div class="icon"><img src="assets/img/star.svg" alt=""></div>
										</div>
									</li>
								</a>
								<a href="#">
									<li class="ul__link">
										<div class="circle">
											<div class="icon"><img src="assets/img/plus.svg" alt=""></div>
										</div>
									</li>
								</a>
							</ul>
						</div>
						<hr>
						<!-- Выход -->
						<a href="#">
							<div class="menu__exit">
								<div class="circle">
									<div class="icon"><img src="assets/img/logout.svg" alt=""></div>
								</div>
							</div>
						</a>
					</nav>
					<!-- Весь контент в правой части -->
					<div class="main">
						<!-- Шапка -->
						<header class="header">
							<div class="search">
								<div class="icon first"><img src="assets/img/search.svg" alt="The search."></div>
								<input type="text" placeholder="search ...">
								<div class="icon last"><img src="assets/img/delete.svg" alt="The delete input."></div>
							</div>
							<div class="title">
								<span>Title Product</span>
							</div>
						</header>
						<!-- Контент под шапкой -->
						<div class="content">
							<!-- Список продуктов -->
							<nav class="content__products">
								<ul class="products__list">
									<?php
									$count = 0;
									while ($count < 20) {
									?>
										<a href="#">
											<li class="products__item">
												<div class="icon"><img src="assets/img/img.svg" alt=""></div>
												<div class="item__content">
													<div class="item__title">
														<span>Title</span>
														<div class="item__message">
															<div class="icon"><img src="assets/img/mes.svg" alt=""></div>
															<span>100</span>
														</div>
													</div>
													<div class="item__about">
														<span>About: <span>last comment</span></span>
													</div>
												</div>
											</li>
										</a>
									<?php
										$count++;
									}
									?>
								</ul>
							</nav>
							<!-- Рабочая область -->
							<div class="content__workspace">
								<!-- Описание продукта -->
								<div class="workspace__product">
									<div class="icon-300"><img src="assets/img/img_big.svg" alt=""></div>
									<div class="product__content">
										<div class="content__text">
											<span>
												Описание, которое поможет увеличить продажи, должно быть таким: <br>
												<br>
												1. четко объясняет, для чего нужен ваш товар и как его использовать; <br>
												2. подчеркивает преимущества товара; <br>
												3. предоставляет всю информацию, необходимую для принятия решения о покупке — вес, размер, материалы и так далее; <br>
												5. говорит на языке вашей целевой аудитории; <br>
												6. содержит отзывы, ссылки на достоверные источники и разные виды контента, которые помогают подтвердить слова продавца.
											</span>
										</div>
										<div class="content__author">
											<a href="#"><span>Iosif Isachko</span></a>
										</div>
									</div>
								</div>
								<!-- Комментарии к продукту -->
								<div class="workspace__comments">
									<ul class="comments__list">
										<li class="comment__item">
											<div class="comment">
												<div class="comment_person"><a href="#"><img src="assets/img/person_blue.svg" alt=""></a></div>
												<div class="comment_text">
													<span id="name">Iosif Isachko</span>
													<span id="com">
														Добро и зло — антонимичные понятия и, таким образом, отрицают друг друга. В европейской традиции добро обычно ассоциируют со светом, светлым, белым.
													</span>
												</div>
												<div class="comment_date">
													<span id="time">19:00</span>
													<span id="date">31.12.2020</span>
												</div>
											</div>
										</li>
										<li class="comment__item">
											<div class="comment">
												<div class="comment_person"><a href="#"><img src="assets/img/person_blue.svg" alt=""></a></div>
												<div class="comment_text">
													<span id="name">Iosif Isachko</span>
													<span id="com">
														Изначально было противоположно понятию худа (то есть означало результат действия блага, в противовес результату действия зла), а в более позднее время стало употребляться как антоним понятия зла, означая намеренное, бескорыстное и искреннее стремление к осуществлению блага, полезного деяния, например, помощи ближнему, а также незнакомому человеку или животному и растительному миру.
													</span>
												</div>
												<div class="comment_date">
													<span id="time">19:00</span>
													<span id="date">31.12.2020</span>
												</div>
											</div>
										</li>
										<li class="comment__item">
											<div class="comment">
												<div class="comment_person"><a href="#"><img src="assets/img/person_blue.svg" alt=""></a></div>
												<div class="comment_text">
													<span id="name">Iosif Isachko</span>
													<span id="com">
														Изначально было противоположно понятию худа (то есть означало результат действия блага, в противовес результату действия зла), а в более позднее время стало употребляться как антоним понятия зла, означая намеренное, бескорыстное и искреннее стремление к осуществлению блага, полезного деяния, например, помощи ближнему, а также незнакомому человеку или животному и растительному миру.
													</span>
												</div>
												<div class="comment_date">
													<span id="time">19:00</span>
													<span id="date">31.12.2020</span>
												</div>
											</div>
										</li>
										<li class="comment__item">
											<div class="comment">
												<div class="comment_person"><a href="#"><img src="assets/img/person_blue.svg" alt=""></a></div>
												<div class="comment_text">
													<span id="name">Iosif Isachko</span>
													<span id="com">
														Добро и зло — антонимичные понятия и, таким образом, отрицают друг друга. В европейской традиции добро обычно ассоциируют со светом, светлым, белым.
													</span>
												</div>
												<div class="comment_date">
													<span id="time">19:00</span>
													<span id="date">31.12.2020</span>
												</div>
											</div>
										</li>
									</ul>
								</div>
								<!-- Отправка комментария -->
								<div class="workspace__post">
									<div class="post__content">
										<div class="icon-50 person">
											<img src="assets/img/person_orange.svg" alt="">
										</div>
										<textarea placeholder="Leave your comment"></textarea>
										<div class="icon-50 send"><a href="#"><img src="assets/img/send.svg" alt=""></a></div>
									</div>
									<div class="post__line">
										<hr>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</body>

</html>