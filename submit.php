<?php

require_once('question.php');
require_once('tag.php');
require_once('user.php');

session_start();

//echo $_REQUEST['title'];

//echo $_REQUEST['post-text'];

//echo $_REQUEST['tagnames'];

$ask['title'] = $_REQUEST['title'];
$ask['post'] = $_REQUEST['post-text'];
$ask['tag'] = explode(',', $_REQUEST['tagnames']);
$tag = new Tag();
$tag->insertTag($ask['tag']);
$ask['vote'] = 0;
//$ask['answer'] = 0;
$ask['view'] = 0;
$ask['timestamp'] = time();
$user = new User();
$ask['user'] = $user->getLoginName();
$ask['user_id'] = $user->getLoginID();
$ask['notify'] = $_REQUEST['notify-email-address'];
$ask['status'] = 'unanswer';

$question = new Question();
$id = $question->askQuestion($ask);

$user->askQuestion($user->getLoginID(), $id);

header('Location: http://www.stack.test/question_page.php?id='.$id);

?>