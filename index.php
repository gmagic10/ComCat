<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>ComCat</title>
<link rel="shortcut icon" href="http://cdn.sstatic.net/stackoverflow/img/favicon.ico">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<link href="all.css" type="text/css" rel="stylesheet">
</head>
<body class="home-page">
    <!--<noscript><div id="noscript-padding"></div></noscript>
    <div id="notify-container"></div>
    <div id="overlay-header"></div>
    <div id="custom-header"></div>-->
    <div class="container">
        <?php
        include 'header.php';
        ?>
        <div id="content">
            
<div id="mainbar">
<div class="subheader">
    <h1 id="h-top-questions">
        Top Questions    
    </h1>
    <div id="tabs">

    <a class="youarehere" href="?tab=interesting" title="questions that may be of interest to you based on your history and tag preferences">interesting</a>
<!--<a href="?tab=featured" title="questions with an active bounty"><span class='bounty-indicator-tab'>222</span>featured</a>
<a href="?tab=hot" title="questions with the most views, answers, and votes over the last few days">hot</a>
<a href="?tab=week" title="questions with the most views, answers, and votes this week">week</a>
<a href="?tab=month" title="questions with the most views, answers, and votes this month">month</a>
-->            
    </div>
</div>
<div id="question-mini-list">


<?php
require_once('question.php');
$question = new Question();
if(isset($_REQUEST['tag']))
{
	$questions = $question->getQuestionByTagName($_REQUEST['tag']);
	require_once('tag.php');
	$tag = new Tag();
	$tagDetail = $tag->getTagDetail($_REQUEST['tag']);
	//$tag->outputTagDetail($tagDetail);	
}
else if(isset($_REQUEST['q']))
{
	$questions = $question->searchQuestions($_REQUEST['q']);
}
else if(isset($_REQUEST['unanswer']))
{
	$questions = $question->getUnanswer();
}
else if(isset($_REQUEST['tag']))
{
	$questions = $question->getTag($_REQUEST['tag']);
}
else
{
	$questions = $question->getQuestions();
}
$question->outputQuestion($questions);
?>
</div>
<h2 class="bottom-notice">Looking for more? Browse the <a href="/index.php">complete list of questions</a>, or <a href="/tags_page.php">popular tags</a>. Help us answer <a href="/index.php?action=unanswer">unanswered questions</a>.</h2>

</div>
<div id="sidebar">
<div class="module" id="interesting-tags">
        <h4 id="h-interesting-tags">Favorite Tags</h4>
        <div id="interestingTags"></div>
        <table>
            <tr>
            <td class="vt"><input id="interestingTag" type="text" name="interestingTag"></td>

            <td class="vt"><input id="interestingAdd" type="button" value="Add"></td>
            </tr>
        </table>
        <h4 id="h-ignored-tags">Ignored Tags</h4>
        <div id="ignoredTags"></div>
        <table>
            <tr>
            <td class="vt"><input id="ignoredTag" type="text" name="ignoredTag"></td>

            <td class="vt"><input id="ignoredAdd" type="button" value="Add"></td>
            </tr>
        </table>
        <div class="dno">
            <input type="checkbox" id="hideIgnored" title="hide ignored tags" ><label for="hideIgnored"> hide ignored tags</label>
        </div>

    <p class="ar" style="margin-top: 10px;"><a href="http://stackexchange.com/filters">network tag filters &raquo;</a></p>

</div>
<div class="module" id="recent-tags">
    <h4 id="h-recent-tags">Recent Tags</h4>
    <div id="recent-tags-list">
<?php
require_once('tag.php');
$tag = new Tag();
$tag->outputRecentTag();
?>
    </div>
    <p class="ar"><a href="tags_page.php">all tags &raquo;</a></p>
</div>  <div class="module" id="recent-badges">
    <h4 id="h-recent-badges">Recent Badges</h4>

    <table>
    <tr><td><a href="/badges/27/notable-question?userid=387300" title="silver badge: Asked a question with 2,500 views" class="badge"><span class="badge2"></span>&nbsp;Notable Question</a>
 <a href="/users/387300/chessdev">ChessDev</a></td></tr>
    <tr><td><a href="/badges/27/notable-question?userid=155799" title="silver badge: Asked a question with 2,500 views" class="badge"><span class="badge2"></span>&nbsp;Notable Question</a>
 <a href="/users/155799/db83">db83</a></td></tr>

    </table>
    <p class="ar"><a href="/badges">all badges &raquo;</a></p>
</div>           
</div>
        </div>
    </div>

   <?php
   include 'footer.php';
   ?>   
</body>
</html>