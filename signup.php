<?php
if(isset($_REQUEST['email']))
{
	require_once('user.php');
	$u['email']    = $_REQUEST['email'];
	$u['realname'] = $_REQUEST['realname'];
	$u['password'] = $_REQUEST['password'];
	$u['timestamp'] = time();
	$u['website'] = 'http://xxx';
	$u['location'] = 'china';
	$u['gender'] = 'male';
	$u['age'] = 18;
	$u['reputation'] = 0;
	$user = new User();
	$user->signup($u);
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html><head>

<title>Log In - ComCat</title>
<link rel="shortcut icon" href="http://cdn.sstatic.net/stackoverflow/img/favicon.ico">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="http://cdn.sstatic.net/js/stub.js?v=005820c36f6e" type="text/javascript"></script>
<link href="all.css" type="text/css" rel="stylesheet">  
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
    <h1>Create Account</h1>
</div>

<div id="mainbar" style="width: 625px; ">
<div class="registration-form">

    <form method="post" action="signup.php" autocomplete="off">

        <table class="position-table">

            <tr>

                <td class="input-td">

                    <input type="text" class="framed-text-field" name="email" id="email" value="" maxlength="100" />

                    <span class="form-help">name@example.com</span>

                </td>

            </tr>

            <tr>

                <td class="input-td">

                    <input type="text" class="framed-text-field" name="realname" id="realname" value="" maxlength="100" />

                    <span class="form-help">John Smith (optional)</span>

                </td>

            </tr>

            <tr>

                <td class="input-td">

                    <input type="password" class="framed-text-field" name="password" id="password" value="" />

                    <span class="form-help">Password</span>

                </td>

            </tr>

            <tr>

                <td class="input-td">

                    <input type="password" class="framed-text-field" name="password2" id="password2" value="" />

                    <span class="form-help">Password</span>

                </td>

            </tr>

            <tr>

                <td class="input-td">

</div>                </td>

            </tr>

            <tr>

                <td class="input-td">

                    <input type="submit" class="affiliate-button" value="Create An Account" />

                </td>

            </tr>

        </table>
    </form>

</div>

<!--<div id="sidebar" style="width: 330px; "><div class="module newuser"><h4>How to Log In</h4><p>Once you create your Stack Exchange account you can use it to log in to any <a href="http://stackexchange.com/sites">Stack Exchange site</a>.</p><p>To log in, click the 'Log in with Stack Exchange' button.</p><div style="height: 80px; "><a title="log in with Stack Exchange" href="#log-in" style="background: #fff url(http://sstatic.net/Img/openid/openid-logos.png?v=6); background-position: -1px -518px" class="stack exchange openid_large_btn"></a></div></div></div>-->

<br class="cbt">
        </div>
    </div>
  <?php
  include 'footer.php';
  ?>
</body></html>