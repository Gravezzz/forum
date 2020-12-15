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

$query = "SELECT * FROM users WHERE id = " . $topic['person_id'];
$resultQuery = mysqli_query($connect, $query);
$contentAuthor = mysqli_fetch_assoc($resultQuery);

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
			<a href="#"><span><?php echo $contentAuthor["fullname"]; ?></span></a>
		</div>

	</div>

</div>

<div class="workspace__comments">
	<!-- Комментарии к продукту -->
	<ul class="comments__list">
	<?php
	$i=0;
	while ($i < $comments_number) {
	$comments = mysqli_fetch_assoc($comments_result);
	$username_sql = "SELECT * FROM users WHERE id =" . $comments['person_id'];
	$username = mysqli_query($connect, $username_sql);
	$username = mysqli_fetch_assoc($username);
	?>
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
						<?php
							$dateParse = preg_split('/ /', $comments['date'], -1, PREG_SPLIT_OFFSET_CAPTURE);
							echo $dateParse[1][0];
							echo '<br>';
							echo $dateParse[0][0];
						?>
					</span>
				</div>
			</div>
		</li>
	<?php
	$i++;
	}
	?>
	</ul>
</div>


<!-- Отправка комментария -->
<div class="workspace__post">

	<div class="post__content">
		<div class="icon-50 person">
			<img src="assets/img/person_orange.svg" alt="">
		</div>
		<?php 
			if(isset($_GET["topic_id"]) && isset($_COOKIE["person_id"])) {
				$query = "SELECT * FROM users WHERE id =" . $_COOKIE["person_id"];
				$resultQuery = mysqli_query($connect, $query);
				$person = mysqli_fetch_assoc($resultQuery);
		?>
			<form id="form-comment" action="http://forum/actions/send.php" method="POST">
				<input type="hidden" name="topic_id" value="<?php echo $_GET["topic_id"]; ?>">
				<input type="hidden" name="person_id" value="<?php echo $_COOKIE["person_id"]; ?>">
				<input type="hidden" name="person_name" value="<?php echo $person["username"]; ?>">
				<textarea placeholder="Leave your comment" name="comment"></textarea>
				<button class="icon-50 send" type="submit" name="send"><a><img src="assets/img/send.svg" alt=""></a></button>
			</form>
		<?php
			}
		?>
	</div>

	<div class="post__line">
		<hr>
	</div>

</div>


<?php
}else{
?>

<div class="workspace__product workspace__product_none">

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


