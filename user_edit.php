<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>

<title>User - Magic Edit</title>
<link href="http://cdn.sstatic.net/stackoverflow/img/favicon.ico" rel="shortcut icon">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js" type="text/javascript"></script>
<script src="http://cdn.sstatic.net/js/stub.js?v=005820c36f6e" type="text/javascript"></script>
<link href="all.css" type="text/css" rel="stylesheet">


    <style type="text/css">
        #user-edit-table td { padding: 4px; }
        #loc-result, #loc-not-found { display: none; }
        h1 { font-size: 200%; }
        .grippie { margin-right: 0px !important; width:666px; /* AHHHHH!! */ }
    </style>
    <style type="text/css">
        body { margin-top: 5em; }
    </style>
</head>
<body class="user-page" style="margin-top: 0px;">
    <!--<div id="notify-container"></div>
    <div id="overlay-header"></div>
    <div id="custom-header"></div>-->
    <input type="text" id="dismissed-messages" style="display:none">
    <div class="container">
        <?php
        include 'header.php';
        ?>
        <div id="content">
<div id="mainbar-full">
    <div class="subheader">
        <h1 id="edit-title">Magic - Edit</h1>
    </div>
    <table width="100%" id="user-edit-table">
        <tbody><tr>
            <td style="vertical-align: top; text-align: center; padding: 20px; width:128px">
                <img width="128" height="128" alt="" src="http://www.gravatar.com/avatar/93b4cf155a454769eeed0972a89e52e2?s=128&amp;d=identicon&amp;r=PG">
                <div>&nbsp;</div>
                <p style="font-size:200%; font-weight:bold"><a onclick="$('#gravatar-info').html('picture changes may take up to 24 hours')" title="your gravatar is associated with your email address" target="_blank" href="http://www.gravatar.com/">change picture</a></p>
                <div style="color: #777" id="gravatar-info"></div>
            </td>
            <td style="vertical-align: top">
                <h2>Registered User</h2>
                <form method="post" action="/users/edit/631852" id="user-edit-form">
                <div id="edit-block">
                    <input type="text" name="author" id="author">
                    <input type="hidden" value="97bc288a6f5e62e508dc152991b532e1" name="fkey" id="fkey">
                <input type="hidden" value="EkO7rN" name="i1l"></div>
                <table style="width:100%">
                    <tbody><tr>
                        <td>Display Name</td>
                        <td><input type="text" tabindex="1" style="width: 260px; opacity: 1;" maxlength="30" value="Magic" id="display-name" name="DisplayName"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>
                            <input type="text" tabindex="6" style="width: 390px; opacity: 1;" maxlength="100" value="gmagic10@gmail.com" name="Email">
                            <span class="edit-field-overlay">never displayed, used for optional notifications and your gravatar</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Real Name</td>
                        <td><input type="text" tabindex="7" style="width: 260px; opacity: 1;" maxlength="100" value="Magic" name="RealName"></td>
                    </tr>
                    <tr>
                        <td>Website</td>
                        <td><input type="text" tabindex="8" style="width: 260px; opacity: 1; position: absolute; background-color: white; color: black; height: 18px;" maxlength="200" value="" class="actual-edit-overlay" disabled=""><input type="text" tabindex="8" style="width: 260px; opacity: 0.3; z-index: 1; position: relative;" maxlength="200" value="" name="WebsiteUrl" class="edit-field-overlayed"></td>
                    </tr>
                    <tr>
                        <td>Location</td>
                        <td><input type="text" tabindex="9" style="width: 260px; opacity: 1;" maxlength="100" value="China" name="Location">
                            <input type="hidden" value="" name="WoeId">
                            <span id="loc-not-found">We don't recognize that location -- try again?</span>
                            <span id="loc-result"> Did you mean <a href="#" id="use-loc-result">" + result + "</a>?</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Birthday</td>
                        <td>
                            <input type="text" style="width: 260px; opacity: 1; position: absolute; background-color: white; color: black; height: 18px;" maxlength="50" tabindex="10" value="" class="actual-edit-overlay" disabled=""><input type="text" style="width: 260px; opacity: 0.3; z-index: 1; position: relative;" maxlength="50" name="Birthday" tabindex="10" value="" id="Birthday" class="edit-field-overlayed">
                            <span class="edit-field-overlay">YYYY/MM/DD, only used for displaying age</span>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:top; padding-top:18px;">About Me</td>
                        <td>
                            <div id="wmd-container">
                             		<script src="./js/nicEdit.js" type="text/javascript"></script>
																<script type="text/javascript">
																	bkLib.onDomLoaded(function() {new nicEditor({iconsPath : './images/nicEditorIcons.gif'}).panelInstance('area');});
																</script>
															  <textarea cols="92" rows="10" id="area" name="post-text"></textarea>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>                                
                        </td>
                        <td class="space">
                            <div class="form-error"></div>
                            <div class="form-submit">
                                <input type="submit" tabindex="12" value="Save Profile" id="submit-button" style="opacity: 1;">
                                <input type="button" tabindex="13" onclick="location.href='/users/631852/magic'" value="Cancel" name="cancel" id="cancel" style="opacity: 1;">
                            </div>
                        </td>
                    </tr>
                </tbody></table>
                </form>
            </td>
        </tr>
    </tbody></table>
</div>
        </div>
    </div>
    <?php
    include 'footer.php';
    ?>
</body></html>