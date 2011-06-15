<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>
<title>User Magic - Stack Overflow</title>
<link href="http://cdn.sstatic.net/stackoverflow/img/favicon.ico" rel="shortcut icon">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js" type="text/javascript"></script>
<script src="http://cdn.sstatic.net/js/stub.js?v=005820c36f6e" type="text/javascript"></script>
<link href="all.css" type="text/css" rel="stylesheet">


    <style type="text/css">
        h1 { font-size: 200%; }
        .history-table td { padding: 5px; vertical-align:middle; }
        .user-stats-table { margin-left:50px; margin-bottom:15px; }
        #user-about-me pre, blockquote { width: 95%; }
        .no-overflow { width: 230px; color: #999; white-space: nowrap; overflow: hidden; }
        .summary-header { vertical-align:middle; padding-left:10px; }
        .summary-header h2 { font-size:200%; } 
        .summary-title { clear:both; }        
        .vcard { width:960px; margin-top:-10px; }
        .badge-col { width: 200px; }
        .user-stats-table .question-summary { width: 800px; }
        #user-avatar { padding:20px 20px 8px 20px; }
    </style>
</head>
<body class="user-page">
    <!--<div id="notify-container"></div>
    <div id="overlay-header"></div>
    <div id="custom-header"></div>-->
    <div class="container">
        <?php
        include 'header.php';
        ?>
        <div id="content">
            
    <div id="mainbar-full">
        <div class="subheader">
            <h1 id="user-displayname">Magic</h1>
            <div id="tabs">
            <a class="youarehere" href="/users/631852/magic?tab=stats" title="your profile/stats">info</a><a href="/users/631852/magic?tab=reputation" title="your reputation history">reputation</a><a href="/users/631852/magic?tab=activity" title="your recent activity">activity</a><a href="/users/631852/magic?tab=responses" title="your recent responses"> <span class="bounty-indicator-tab">2</span>responses</a><a href="/users/631852/magic?tab=favorites" title="your favorites">favorites</a>
            </div>
        </div>
        <table class="vcard">
            <tbody><tr>
                <td style="vertical-align:top; width:170px">
                    <table>
                        <tbody><tr>
                            <td id="user-avatar">
                                <img width="128" height="128" class="logo" alt="" src="http://www.gravatar.com/avatar/93b4cf155a454769eeed0972a89e52e2?s=128&amp;d=identicon&amp;r=PG">
                            </td>
                        </tr>
                        <tr>
                            <td class="summaryinfo">
                                <a title="view reputation privileges" href="/privileges"><span class="summarycount">11</span></a>
                                <div style="margin-top:5px; font-weight:bold">reputation</div>
                            </td>
                        </tr>
                        <tr style="height:30px">
                            <td style="vertical-align:bottom" class="summaryinfo">2 views</td>
                        </tr>
                    </tbody></table>
                </td>
                <td style="vertical-align: top; width:350px">
                    <div style="float: right; margin-top: 19px; margin-right: 4px">
 <a href="user_edit.php?id=
 	<?php 
 	require_once('user.php');
 	$user = new User();
 	echo $user->getLoginID();
 	?>">edit</a>
                    </div>
                    <h2 style="margin-top:20px">
Registered User                    </h2>
                    <table class="user-details">
                        <tbody><tr>
                            <td style="width:120px">name</td>
                            <td class="fn nickname" style="width:230px"><b>Magic</b></td>
                        </tr>
                        <tr>
                            <td>member for</td>
                            <td><span title="2011-02-24 07:15:56Z" class="cool">3 months</span></td>
                        </tr>
                        <tr>
                            <td>seen</td>
                            <td><span class="supernova"><span class="relativetime" title="2011-06-09 06:31:13Z">6 mins ago</span></span></td>
                        </tr>
                        <tr>
                            <td>visited</td>
                            <td>
                                <span style="cursor:pointer" class="no-overflow" id="days-visited">
                                    43 days, 3 consecutive
                                </span>
                                <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js"></script>                            
                            </td>
                        </tr>
                        <tr>
                            <td>website</td>
                            <td>
                                <div class="no-overflow"></div>                                
                            </td>
                        </tr>
                        
                            
                        <tr>
                            <td>email</td>
                            <td>                                        <a href="mailto:gmagic10@gmail.com" class="user-email">gmagic10@gmail.com</a>
                            </td>
                        </tr>
                        <tr>
                            <td>real name</td>
                            <td>
                                Magic
                            </td>
                        </tr>
                        <tr>
                            <td>location</td>
                            <td class="label adr">
                                China
                            </td>
                        </tr>
                        <tr>
                            <td>age</td>
                            <td>
                                
                            </td>
                        </tr>
                    </tbody></table>
                </td>
                <td style="width:390px">
                    <div class="note" id="user-about-me"></div>
                    <div class="summaryinfo">
                        last activity: <span class="relativetime" title="2011-06-09 04:07:15Z">2 hours ago</span>
                    </div>
                </td>
            </tr>
        </tbody></table>
        <div class="subheader">
            <div id="tabs">
<a title="your overall statistics" href="/users/631852/magic?tab=stats" class="youarehere">stats</a>
<a title="your site preferences" href="/users/631852/magic?tab=prefs">prefs</a>
            </div>
        </div>
        
    <div id="questions-table" class="user-stats-table">
        

<a name="questions"></a>
<table class="summary-title">
    <tbody><tr>
        <td>
            <span class="summarycount ar">2</span>
        </td>
        <td class="summary-header">
            <h2>Questions</h2>
        </td>
        <td style="width:100%">
        </td>
    </tr>
</tbody></table>

        <div class="favorite-cell">&nbsp;</div>

<div id="question-summary-5101615" class="question-summary narrow">
    <div class="cp" onclick="window.location.href='/questions/5101615/how-browser-load-web-page'">
        <div class="votes">
            <div class="mini-counts">0</div>
            <div>votes</div>
        </div>
        <div class="status answered">
            <div class="mini-counts">2</div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts">85</div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        <h3><a title="Does any body know how browser(IE, Firefox, Chrome) load web page? I think they first load the html and then the js, css, image. But I'm not sure. Any body know it for specific? Or can give me a  … " class="question-hyperlink" href="/questions/5101615/how-browser-load-web-page">How browser load web page?</a></h3>
        <div class="tags t-browser t-proxy">
            <a rel="tag" title="show questions tagged 'browser'" class="post-tag" href="/questions/tagged/browser">browser</a> <a rel="tag" title="show questions tagged 'proxy'" class="post-tag" href="/questions/tagged/proxy">proxy</a> 
        </div>
        <div class="started">
            <a class="started-link" href="/questions/5101615/how-browser-load-web-page/?lastactivity"><span class="relativetime" title="2011-02-24 07:45:57Z">feb 24 at 7:45</span></a>
            <a href="/users/624626/johusman">johusman</a> <span title="reputation score" class="reputation-score">877</span>
        </div>
    </div>
</div>
    <br class="cbt">
        <div class="favorite-cell">&nbsp;</div>

<div id="question-summary-6288931" class="question-summary narrow">
    <div class="cp" onclick="window.location.href='/questions/6288931/how-to-implement-the-vote-up-and-down-function-like-stackoverflow'">
        <div class="votes">
            <div class="mini-counts">0</div>
            <div>votes</div>
        </div>
        <div class="status answered">
            <div class="mini-counts">1</div>
            <div>answer</div>
        </div>
        <div class="views">
            <div class="mini-counts">17</div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        <h3><a title="If you have use stackoverflow for a while. You surely have use the function of vote up and down of the question and answer. I notice stackoverflow use  anchor. But I don't know how to post the data to  … " class="question-hyperlink" href="/questions/6288931/how-to-implement-the-vote-up-and-down-function-like-stackoverflow">How to implement the vote up and down function like stackoverflow</a></h3>
        <div class="tags t-php t-javascript t-post t-stackoverflow">
            <a rel="tag" title="show questions tagged 'php'" class="post-tag" href="/questions/tagged/php">php</a> <a rel="tag" title="show questions tagged 'javascript'" class="post-tag" href="/questions/tagged/javascript">javascript</a> <a rel="tag" title="show questions tagged 'post'" class="post-tag" href="/questions/tagged/post">post</a> <a rel="tag" title="show questions tagged 'stackoverflow'" class="post-tag" href="/questions/tagged/stackoverflow">stackoverflow</a> 
        </div>
        <div class="started">
            <a class="started-link" href="/questions/6288931/how-to-implement-the-vote-up-and-down-function-like-stackoverflow/?lastactivity"><span class="relativetime" title="2011-06-09 06:34:22Z">3m ago</span></a>
            <a href="/users/238978/emil-vikstrom">Emil Vikstr?m</a> <span title="reputation score 13122" class="reputation-score">13.1k</span>
        </div>
    </div>
</div>
    <br class="cbt">
    </div>
    <div id="answers-table" class="user-stats-table">
        <a name="answers"></a>
<table class="summary-title">
    <tbody><tr>
        <td>
            <div class="summarycount ar">2</div>
        </td>
        <td class="summary-header">
            <h2>Answers</h2>
        </td>
        <td style="width:100%">
        </td>
    </tr>
</tbody></table>
<div class="answer-summary"><div class="answer-votes default" title="total number of votes for this answer" onclick="window.location.href='/questions/6107339/parallel-processing-in-php-how-do-you-do-it/6108837#6108837'">1</div><div class="answer-link"><a class="answer-hyperlink " href="/questions/6107339/parallel-processing-in-php-how-do-you-do-it/6108837#6108837">Parallel processing in PHP - How do you do it?</a></div>
</div>
<div class="answer-summary"><div class="answer-votes default" title="total number of votes for this answer" onclick="window.location.href='/questions/6121589/authentication-using-json-and-php/6121716#6121716'">1</div><div class="answer-link"><a class="answer-hyperlink " href="/questions/6121589/authentication-using-json-and-php/6121716#6121716">Authentication using JSON and PHP</a></div>
</div>
    </div>
    <div class="user-stats-table">
        <table id="tags-title" class="summary-title">
            <tbody><tr>
                <td><div class="summarycount ar">11</div></td>
                <td class="summary-header"><h2>Tags</h2></td>
            </tr>
        </tbody></table>
    </div>
    <div id="tags-table" class="user-stats-table">
        <table>
        <tbody><tr>
                <td class="wide-tag-col">
                    <div onclick="window.location.href='/search?q=user:631852+[php]'" title="Asked 1 non-wiki questions with a total score of 0. Answered 1 non-wiki questions with a total score of 1." class="answer-votes">
                        1
                    </div>                
                    <a title="show all posts by this user in 'php'" class="post-tag" href="/search?q=user:631852+[php]">php</a>
                    <span class="item-multiplier">×&nbsp;3</span>
                    <br>
                </td>
                <td class="wide-tag-col">
                    <div onclick="window.location.href='/search?q=user:631852+[task-queue]'" title="Answered 1 non-wiki questions with a total score of 1." class="answer-votes">
                        1
                    </div>                
                    <a title="show all posts by this user in 'task-queue'" class="post-tag" href="/search?q=user:631852+[task-queue]">task-queue</a>
                    
                    <br>
                </td>
                <td class="wide-tag-col">
                    <div onclick="window.location.href='/search?q=user:631852+[proxy]'" title="Asked 1 non-wiki questions with a total score of 0. " class="answer-votes">
                        0
                    </div>                
                    <a title="show all posts by this user in 'proxy'" class="post-tag" href="/search?q=user:631852+[proxy]">proxy</a>
                    
                    <br>
                </td>
                <td class="wide-tag-col">
                    <div onclick="window.location.href='/search?q=user:631852+[json]'" title="" class="answer-votes">
                        0
                    </div>                
                    <a title="show all posts by this user in 'json'" class="post-tag" href="/search?q=user:631852+[json]">json</a>
                    
                    <br>
                </td>
        </tr>
        <tr>
                <td class="wide-tag-col">
                    <div onclick="window.location.href='/search?q=user:631852+[multithreading]'" title="Answered 1 non-wiki questions with a total score of 1." class="answer-votes">
                        1
                    </div>                
                    <a title="show all posts by this user in 'multithreading'" class="post-tag" href="/search?q=user:631852+[multithreading]">multithreading</a>
                    
                    <br>
                </td>
                <td class="wide-tag-col">
                    <div onclick="window.location.href='/search?q=user:631852+[javascript]'" title="Asked 1 non-wiki questions with a total score of 0. " class="answer-votes">
                        0
                    </div>                
                    <a title="show all posts by this user in 'javascript'" class="post-tag" href="/search?q=user:631852+[javascript]">javascript</a>
                    <span class="item-multiplier">×&nbsp;2</span>
                    <br>
                </td>
                <td class="wide-tag-col">
                    <div onclick="window.location.href='/search?q=user:631852+[post]'" title="Asked 1 non-wiki questions with a total score of 0. " class="answer-votes">
                        0
                    </div>                
                    <a title="show all posts by this user in 'post'" class="post-tag" href="/search?q=user:631852+[post]">post</a>
                    
                    <br>
                </td>
                <td class="wide-tag-col">
                    <div onclick="window.location.href='/search?q=user:631852+[authentication]'" title="" class="answer-votes">
                        0
                    </div>                
                    <a title="show all posts by this user in 'authentication'" class="post-tag" href="/search?q=user:631852+[authentication]">authentication</a>
                    
                    <br>
                </td>
        </tr>
        <tr>
                <td class="wide-tag-col">
                    <div onclick="window.location.href='/search?q=user:631852+[parallel-processing]'" title="Answered 1 non-wiki questions with a total score of 1." class="answer-votes">
                        1
                    </div>                
                    <a title="show all posts by this user in 'parallel-processing'" class="post-tag" href="/search?q=user:631852+[parallel-processing]">parallel-processing</a>
                    
                    <br>
                </td>
                <td class="wide-tag-col">
                    <div onclick="window.location.href='/search?q=user:631852+[browser]'" title="Asked 1 non-wiki questions with a total score of 0. " class="answer-votes">
                        0
                    </div>                
                    <a title="show all posts by this user in 'browser'" class="post-tag" href="/search?q=user:631852+[browser]">browser</a>
                    
                    <br>
                </td>
                <td class="wide-tag-col">
                    <div onclick="window.location.href='/search?q=user:631852+[stackoverflow]'" title="Asked 1 non-wiki questions with a total score of 0. " class="answer-votes">
                        0
                    </div>                
                    <a title="show all posts by this user in 'stackoverflow'" class="post-tag" href="/search?q=user:631852+[stackoverflow]">stackoverflow</a>
                    
                    <br>
                </td>
        </tr>
</tbody></table>


    </div>
    <div class="user-stats-table">
        <table class="summary-title">
            <tbody><tr>
                <td><div class="summarycount ar">1</div></td>
                <td class="summary-header"><h2>Badges</h2></td>
            </tr>
        </tbody></table>
    </div>
    <div class="user-stats-table">
        <table>
<tbody><tr>
<td class="badge-col">
<a class="badge" title="bronze badge: Answered first question with score of 1 or more" href="/badges/1/teacher?userid=631852"><span class="badge3"></span>&nbsp;Teacher</a>
<br>
</td></tr>
</tbody></table>

    </div>
    </div>
        </div>
    </div>
    <?php
    include 'footer.php';
    ?>
</body></html>