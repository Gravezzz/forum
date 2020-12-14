<?php
include "configs/db.php";

?>

<!-- Описание продукта -->
<?php 
if (isset($_GET['topic_id'])) {

$sql_comments = "SELECT * FROM comments WHERE topic_id =" . $_GET['topic_id'];
$comments_result = mysqli_query($connect, $sql_comments);
$comments_number = mysqli_num_rows($comments_result);

$sql = "SELECT * FROM topics WHERE id =" . $_GET['topic_id'];

$result = mysqli_query($connect, $sql);

$topic = mysqli_fetch_assoc($result);

	?>
<div class="workspace__product">
	<?php echo "<div class=\"icon-300\"><img src='" . $topic['img'] . "' ></div>"; ?>

	<div class="product__content">

		<div class="content__text">
			<span>
				<?php 
				echo $topic['description'];
				?>
			</span>
		</div>

		<div class="content__author">
			<a href="#"><span>Iosif Isachko</span></a>
		</div>

	</div>

</div>
<div class="workspace__comments">
<?php

$i=0;
while ($i < $comments_number) {
$comments = mysqli_fetch_assoc($comments_result);
$username_sql = "SELECT * FROM users WHERE id =" . $comments['person_id'];

$username = mysqli_query($connect, $username_sql);

$username = mysqli_fetch_assoc($username);

?>
<!-- Комментарии к продукту -->


	<ul class="comments__list">
		<li class="comment__item">
			<div class="comment">
				<div class="comment_person"><a href="#"><img src="assets/img/person_blue.svg" alt=""></a></div>
				<div class="comment_text">
					<span id="name">
						<?php
						echo $username['username'];
						?>
						</span>
					<span id="com">
						<?php
						echo $comments['comment'];
						?>
					</span>
				</div>
				<div class="comment_date">
					<span id="time"> 
						<?php echo $comments['date']; ?>							
					</span>
				</div>
			</div>
		</li>
	</ul>	

<?php
$i++;
}
?>
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

<?php
}else{
?>

<div class="workspace__product">

	<div class="product__content">

		<div class="content__text">
			<span>
				Выберите тему
			</span>
		</div>
	</div>

</div>
<?php
}	
?>


