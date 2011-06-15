<?php
require_once('question.php');
require_once('user.php');
$question_id = $_POST['question_id'];
$user_id = $_POST['user_id'];
$question = new Question();
$question->vote($question_id);
$user = new User();
$user->vote($question_id, $user_id);

?>