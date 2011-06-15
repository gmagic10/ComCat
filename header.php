<div id="header" style="background-color:#efe2ac">
	<div id="headerContainer">
            <div id="topbar">
                <div id="hlinks">
                    <span id="hlinks-user">
                    	<?php
                    	require_once('user.php');
                    	$user = new User();
                    	if($user->getLoginStatus())
                    	{
                    		$id = $user->getLoginID();
                    		echo '<span style="padding-right:6px">Welcome</span>';
                    		echo '<span id="hlinks-nav"><span class="profile-triangle"></span><a class="profile-link" href="user_profile.php?id='.$id.'">Magic</a>&nbsp;<a href="/users/631852/magic?tab=reputation"><span title="your reputation; view reputation changes" class="reputation-score">11</span></a><span title="1 bronze badge"><span class="badge3"></span><span class="badgecount">1</span></span><span class="lsep">|</span></span>';
                    		echo '<a href="login.php?action=logout">logout</a>';
                    	}
                    	else
                    	{
                    		echo '<a href="login.php">login</a>';
                    	}
                    	?>                 

                  </span>
                </div>
                <div id="hsearch">
                    <form method="get" action="/index.php" id="search">
                    <div>
                        <input type="text" value="search" size="28" maxlength="140" onfocus="if (this.value=='search') this.value = ''" tabindex="1" class="textbox" name="q">
                    </div>
                    </form>
                </div>
            </div>

            <br class="cbt">
            <div style="float:left;margin-left:15px">
                <a href="/" title="ComCat"><img src="images/comcat.png"></img></a>
            </div>
            <div id="hmenus">
                <div class="nav mainnavs">
                    <ul>
                        <li><a href="/index.php" id="nav-questions">Questions</a></li>
                        <li><a href="/tags_page.php" id="nav-tags">Tags</a></li>
                        <li><a href="/users_page.php" id="nav-users">Users</a></li>
                        <li><a href="/badges" id="nav-badges">Badges</a></li>
                        <li><a href="/index.php?action=unanswer" id="nav-unanswered">Unanswered</a></li>
                    </ul>
                </div>
                <div class="nav askquestion">
                    <ul>
                        <li>
                            <a href="askQuestion.php" id="nav-askquestion">Ask Question</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
      </div>