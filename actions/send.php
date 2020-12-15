<?php

include "../configs/db.php";

if (isset($_POST["send"])) {
	$text = $_POST["text"];
	$topic = $_POST["topic_id"];
	$person = $_POST["person_id"];
	$query = "INSERT INTO comments (topic_id, person_id, comment) VALUES ($topic, $person, '$text')";
	if (!mysqli_query($connect, $query)) {
		echo '<h5>Произошла ошибка</h5>' . mysqli_error($connect);
	}

}

?>

<?php

$sql_comments = "SELECT * FROM comments WHERE topic_id =" . $_POST["topic_id"];
$comments_result = mysqli_query($connect, $sql_comments);
$comments_number = mysqli_num_rows($comments_result);

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