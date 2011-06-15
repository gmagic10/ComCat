<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>
<title>Users - ComCat</title>
<link href="http://cdn.sstatic.net/stackoverflow/img/favicon.ico" rel="shortcut icon">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js" type="text/javascript"></script>
<link href="all.css" type="text/css" rel="stylesheet">
    <style type="text/css">
        .user-info
        {
    	    clear:both;
    	    height: 85px;
            width: 230px;
            margin: 8px 5px;
        }
        .user-info .user-gravatar48
        {
            float: left;
            width: 48px;
            height: 48px;
        }
        .user-info .reputation-score {
            font-size: 110%;
            margin-right:0px;
        }
        .user-info .user-tags {
            clear: both;
        }
        .subtabs a { font-size: 100%; }
        .no-search-results { font-weight: bold; font-size: 120%; padding: 20px; }
        
        .user-info
        {
            overflow:hidden;
        }
        #user-browser
        {
            margin-left:5px !important;
            margin-top:-15px;
        }
        .user-tags, .user-tags a
        {
            color: #888;            
        }
        .user-tags
        {
            font-family: Arial,Liberation Sans,DejaVu Sans,sans-serif;  
            font-size: 13px;
            margin-left: 53px;
        }
        .user-details
        {
            width: 175px !important;
        }
        #user-browser table td { vertical-align:top; }
    </style>
</head>
<body class="users-page">
    <!--<noscript>&lt;div id="noscript-padding"&gt;&lt;/div&gt;</noscript>
    <div id="notify-container"></div>
    <div id="overlay-header"></div>
    <div id="custom-header"></div>-->
    <div class="container">
       <?php
       include 'header.php';
       ?>
        <div id="content">
<div id="mainbar-full">
    <div class="subheader">
        <h1 id="h-users">Users</h1>
        <div id="tabs">
            <a title="Users with the highest reputation scores" href="/users?tab=reputation" class="youarehere">All User</a>
        </div>
    </div>    
<div style="padding-bottom: 10px;" class="page-description">
    <table style="width: 100%;">
        <tbody><tr>
            <td>
                Type to find users:<input type="text" style="margin-left: 10px;" value="" class="userfilter" name="userfilter" id="userfilter">
            </td>
        </tr>
    </tbody></table>
</div>

<div id="user-browser">
    <table>
        <tbody>
        	<?php
        	require_once('user.php');
        	$user = new User();
        	$user->outputUser();
        	?>
    </tbody></table>
<div class="pager fr">
	<?php
	require_once('util.php');
	pagination(100, 0, 5);
	?>
</div>
</div>
             
</div>
        </div>
    </div>
  <?php
  include 'footer.php';
  ?>   
</body></html>