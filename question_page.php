<?php
session_start();
if(isset($_REQUEST['post-text']))
{
	require_once('question.php');
	require_once('user.php');
	$question = new Question();
	$user = new User();
	$id = $_REQUEST['id'];
	$answer['text'] = $_REQUEST['post-text'];
	$answer['user'] = $user->getLoginName();
	$answer['user_id'] = $user->getLoginID();
	$answer['timestamp'] = time();
	$answer['vote'] = 0;
	$question->answer($id, $answer);
	$user->answer($user->getLoginID(), $id);
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>
<?php 
require_once('question.php');
$question = new Question();
$q = $question->getQuestionDetail($_REQUEST['id']);
echo $q['title'];
?>
 - ComCat</title>
<link rel="shortcut icon" href="http://cdn.sstatic.net/stackoverflow/img/favicon.ico">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<link href="all.css" type="text/css" rel="stylesheet">
</head>
<body class="question-page">
    <!--<div id="notify-container"></div>
    <div id="overlay-header"></div>
    <div id="custom-header"></div>-->
    <div class="container">
        <?php
        include 'header.php';
        ?>
        <div id="content">
            
<?php
$question->outputQuestionDetail($q);
?>

<div id="sidebar">
    <div class="module">
        <p class="label-key">tagged</p>
        <div class="tagged">
        	<?php
        	$question->outputTags($_REQUEST['id']);
        	?>

</div>
        <table id="qinfo">
            <tr>
                <td><p class="label-key">asked</p></td>
                <td style="padding-left:10px"><p class="label-key" title="2011-05-28 15:19:48Z"><b>today</b></p></td>
            </tr>
            <tr>
                <td><p class="label-key">viewed</p></td>

                <td style="padding-left:10px"><p class="label-key"><b>12 times</b></p></td>
            </tr>
        </table>

    </div>

    <!--<div class="module">
    <h4 id="h-related">Related</h4>
    <div class="related">
    <div class="spacer">
<a href="/questions/5404249/iphone-passing-a-string-from-one-method-to-another-instance-variable" class="question-hyperlink">iPhone Passing A String From One Method To Another (Instance Variable?)</a>
</div>

    </div>
    </div>
</div>
<div style="display:none" id="prettify-lang">lang-c</div>-->
        </div>
    </div>
   <?php
   include 'footer.php';
   ?>
</body>
</html>