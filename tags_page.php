<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>
<title>Tags - ComCat</title>
<link href="http://cdn.sstatic.net/stackoverflow/img/favicon.ico" rel="shortcut icon">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js" type="text/javascript"></script>
<link href="all.css" type="text/css" rel="stylesheet">
    <style type="text/css">
        .excerpt, .stats-row
        {
            font-family: Arial,Liberation Sans,DejaVu Sans,sans-serif;  
            font-size: 12px;
            color: #888;     
        }
        .excerpt
        {
          font-size: 12px;
          height: 39px;
          line-height: 14px;
          overflow: hidden;
          margin-bottom: 4px;
        }
        .stats-row, .stats-row a, .stats-row a:visited
        {
            font-size: 11px;
            color: #444;
        }
        .stats-row .caption
        {
            color: #888;
        }
        .tags-browser
        {
            width: 25%;    
        }
        .tag-cell
        {
            width: 230px;
            border-bottom: 1px dotted #E0E0E0;
            padding-bottom: 12px;
            padding-right: 6px;
            padding-top: 6px;
            vertical-align: top;
        }
        #tags-browser tr:last-child td { border-bottom: none; }
        .edit-link
        {
            float: right;
            margin-right: 18px;
            display: none;
            font-size: 11px;
        }
    </style>
</head>
<body class="tags-page">
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
        <h1 id="h-tags">Tags</h1>
        <div id="tabs">
            <a title="most popular tags" href="/tags?tab=popular" class="youarehere">popular</a>
        </div>
    </div>
    <div class="page-description">
        <p>
            A tag is a keyword or label that categorizes your question with other, similar questions. Using the right tags makes it easier for others to find and answer your question.
        </p>
        <table>
            <tbody><tr>
                <td>Type to find tags:</td>
                <td style="padding-left:5px"><input type="text" name="tagfilter" id="tagfilter"></td>            
            </tr>
        </tbody></table>
    </div>
    <div id="tags_list">
        <table id="tags-browser">
    
            <tbody>
            	<?php    
            	require_once('tag.php');
            	$tag = new Tag();
            	$tag->outputTag();
            	?>
</tbody></table>
    <div class="pager fr">
<?php
require_once('util.php');
pagination(100, 0, 10);
?>
</div>
    </div>

</div>
    </div>
<?php
include 'footer.php';
?>
</body></html>