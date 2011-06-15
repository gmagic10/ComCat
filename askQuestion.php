<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Ask a Question - ComCat</title>
<link rel="shortcut icon" href="http://cdn.sstatic.net/stackoverflow/img/favicon.ico">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<link href="all.css" type="text/css" rel="stylesheet">
</head>
<body class="ask-page">
    <!--<div id="notify-container"></div>
    <div id="overlay-header"></div>
    <div id="custom-header"></div>-->
    <div class="container">
        <?php
        include 'header.php';
        ?>
        <div id="content">
<div id="mainbar" class="ask-mainbar">
    <form id="post-form" action="submit.php" method="post">
        <div class="form-item ask-title">
            <table class="ask-title-table">
                <tr>
                    <td class="ask-title-cell-key">
                        <label for="title">Title</label>
                    </td>
                    <td class="ask-title-cell-value">
                        <input id="title" name="title" type="text" maxlength="300" tabindex="100" class="ask-title-field" value="">                        
                        <span class="edit-field-overlay">what&#39;s your programming question? be specific.</span>
                    </td>
                </tr>
            </table>
            <div id="question-suggestions">
            </div>
        </div>    
<div id="post-editor">   
    <div id="wmd-container">
			<script src="./js/nicEdit.js" type="text/javascript"></script>
			<script type="text/javascript">
				bkLib.onDomLoaded(function() {new nicEditor({iconsPath : './images/nicEditorIcons.gif'}).panelInstance('area');});
			</script>
		  <textarea cols="92" rows="10" id="area" name="post-text"></textarea>
    </div>
</div>
<div class="form-item">
    <label>Tags</label>
    <input id="tagnames" name="tagnames" type="text" size="60" value="" tabindex="103">
    <div id='tag-preview'></div>
<span class="edit-field-overlay">at least one tag such as (c++ android asp.net), max 5 tags</span>    
</div>
<div id="notify-options">
    <h2>
        <input type="checkbox" id="notify-email" name="notify-email" > Notify 
        <input id="notify-email-address" name="notify-email-address" disabled="disabled"  type="text" value="gmagic10@gmail.com"> daily of any new answers
    </h2>

</div>     
        <div class="form-submit cbt"><input id="submit-button" type="submit" value="Post Your Question" tabindex="120"></div>
                
    </form>
</div>   
<div id="sidebar" class="ask-sidebar">
    <div id="scroller-anchor"></div>
    <div id="scroller">

        <div class="module newuser sidebar-help" id="how-to-title">
            <h4>How to Ask</h4>
            <p><b>Is your question about programming?</b></p><p>We prefer questions that can be <i>answered</i>, not just discussed.</p><p>Provide details. Share your research.</p>
        </div>  
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