<?php
session_start();
if(isset($_REQUEST['email']))
{
	require_once('user.php');
	$user = new User();
	$name = $_REQUEST['email'];
	$password = $_REQUEST['password'];
	if($user->login($name, $password))
	{
		header('Location:http://www.stack.test/index.php');
	}
}
else if($_REQUEST['action'] == 'logout')
{
	require_once('user.php');
	$user = new User();
	$user->logout();
	header('Location:http://www.stack.test/index.php');
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html debug="true"><div id="FirebugChannel" style="display: none; ">FB_contextMenuClick,//*[@id="simple-openid-selector"]</div><head>

<title>Log In - ComCat</title>
<link rel="shortcut icon" href="http://cdn.sstatic.net/stackoverflow/img/favicon.ico">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script type="text/javascript" src="stub.js"></script>
<link rel="stylesheet" type="text/css" href="all.css">
</head>
<body class="login-page" style="cursor: default; ">
    <!--<div id="notify-container"></div>
    <div id="overlay-header"></div>
    <div id="custom-header"></div>-->
    <div class="container">
 <?php
 include 'header.php';
 ?>
        <div id="content">
<div class="subheader">
    <h1>Log In</h1>
</div>

<div id="mainbar">

        <div class="page-description">
                        
        <div class="form-error">
            
        </div>           
        <form id="openid_form" action="login.php" method="post">       
            
            <!-- OAuth form elements -->
            <div>
                <input type="hidden" id="oauth_version" name="oauth_version">
                <input type="hidden" id="oauth_server" name="oauth_server">
            </div>
            
            <div>
            	<span class="form-help">Email</span>
            	<input type="text" class="framed-text-field" name="email" id="email" value="" />
              <span class="form-help">Password</span>
              <input type="password" class="framed-text-field" name="password" id="password" value="" />
              <input type="submit" value="Login"/>
            </div>                    
                <div id="forgot-password">
                    <p>If you’ve forgotten or lost your login information</p>
                    <p style="margin-left:30px; margin-bottom:30px;"><b style="font-size:130%"><a href="/users/account-recovery">click here to recover your account</a></b></p>
                </div>

                <div id="affiliate-signup">
	                <p>If you don’t already have an account on any of the above</p>
                    <p style="margin-left:30px; margin-bottom:30px;">
                        <b style="font-size:130%">
                            <a href="signup.php">click here to sign up</a>
                        </b>
                    </p>
                </div>
       
    </form>


    </div>        
</div> 

<div id="sidebar">
        <div class="module newuser">
            <h4>Why OpenID?</h4>
            <p>It’s a single username and password that allows you to log in to any OpenID-enabled site.</p>
            <p>It works on thousands of websites.</p>
            <p>It’s an open standard.</p>
            <p class="ar">
            <a href="http://openid.net/what/">learn more ?</a><br>
            </p>
        </div>
            <div class="module">
                <h4>Use your own URL</h4>
                <p>Want to add OpenID support to <i>your</i> website?</p>
                <p>It’s as easy as adding two HTML header tags!</p>
                <p class="ar">
                <a href="http://blog.stackoverflow.com/2009/01/using-your-own-url-as-your-openid/">see how ?</a>
                </p>
            </div>
</div>

<br class="cbt">
        </div>
    </div>
    <?php
    include 'footer.php';
    ?>
</body>
</html>