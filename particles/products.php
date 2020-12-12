<?php
include "configs/db.php";
?>

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