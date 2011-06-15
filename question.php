<?php

class Question
{
	function askQuestion($question)
	{
		$mongo = new Mongo();
		$question_table = $mongo->site->questions;
		$question_table->insert($question);
		return $question['_id']->__toString();
	}
	
	function getQuestions()
	{
		$mongo = new Mongo();
		$cursor = $mongo->site->questions->find()->limit(10);
		foreach($cursor as $q)
		{
			$question[] = $q;
		}
		return $question;
	}
	
	function getUnanswer()
	{
		$mongo = new Mongo();
		$find['status'] = 'unanswer';
		$cursor = $mongo->site->questions->find($find)->limit(10);
		foreach($cursor as $q)
		{
			$question[] = $q;
		}
		return $question;
	}
	
	function getTag($tag)
	{
		$mongo = new Mongo();
		$find['tag'] = $tag;
		$cursor = $mongo->site->questions->find($find)->limit(10);
		foreach($cursor as $q)
		{
			$question[] = $q;
		}
		return $question;
	}
	
	function searchQuestions($search)
	{
		$mongo = new Mongo();
		$search_reg = new MongoRegex("/.*$search.*/im");
		$find['title'] = $search_reg;
		$cursor = $mongo->site->questions->find($find)->limit(10);
		foreach($cursor as $q)
		{
			$question[] = $q;
		}
		return $question;
	}
	
	function outputQuestion($questions)
	{
		//$questions = Question::getQuestions();
		foreach($questions as $q)
		{
			$id = $q['_id'];
			echo '<div class="question-summary narrow" id="question-summary-6084895">';
			echo '<div onclick="window.location.href=\'question_page.php?id=',$id,'\'" class="cp">';
			echo '<div class="votes">';
			echo '<div class="mini-counts">',$q['vote'],'</div>';
			echo '<div>votes</div>';
			
			echo '</div>';
			echo '<div class="status unanswered">';
			echo '<div class="mini-counts">',is_array($q['answer']) ? count($q['answer']) : 0,'</div>';
			echo '<div>answers</div>';
			echo '</div>';
			echo '<div class="views">';
			echo '<div class="mini-counts">',$q['view'],'</div>';
			
			echo '<div>views</div>';
			echo '</div>';
			echo '</div>';
			echo '<div class="summary">';
			echo '<h3><a href="question_page.php?id=',$id,'" class="question-hyperlink" title="',$q['post'],'">'.$q['title'].'</a></h3>';
			echo '<div class="tags t-java t-xml t-xml-serialization t-jaxb t-jaxb2">';
			foreach($q['tag'] as $t)
			{
				echo '<a href="/questions/tagged/java" class="post-tag" title="show questions tagged \'java\'" rel="tag">',$t,'</a>';
			}
			echo '</div>';
			
			echo '<div class="started">';
			$date = date('Y-m-d', $q['timestamp']);
			$exact = date('Y-m-d H:i:s', $q['timestamp']);
			require_once('user.php');
			$user = new User();
			$reputation = $user->getUserReputation($q['user_id']);
			echo '<span title="',$exact,'" class="relativetime">',$date,'</span><a href="user_profile.php?id='.$q['user_id'].'">',$q['user'],'</a> <span class="reputation-score" title="reputation score">'.$reputation.'</span>';
			echo '</div>';
			echo '</div>';
			echo '</div>';
		}
	}
	
	function getQuestionDetail($id)
	{
		$mongo = new Mongo();
		$question_table = $mongo->site->questions;
		$id = new MongoId($id);
		$find['_id'] = $id;
		$question = $question_table->findOne($find);
		return $question;
	}
	
	function outputQuestionDetail($question)
	{
		require_once('util.php');
		require_once('user.php');
		if(isset($question))
		{
			echo '<div id="question-header">';
			echo '<h1>',$question['title'],'</h1>';
			echo '</div>';			
			echo '<div id="mainbar">';			
			echo '<div id="question">';			
			echo '    <table>';
			echo '    <tbody><tr>';
			echo '    <td class="votecell">';	
			echo '<script type="text/javascript">';
			echo '$(\'.vote-up-off\').live(\'click\', function() {';
			echo '$.ajax({';
			echo 'type: "POST",';
			echo 'url: "ajax.php",';
			echo 'data: "name=John&location=Boston",';
			echo 'success: function(msg){';
			echo 'alert( "Data Saved: " + msg );';
			echo '}';
			echo '});';
			echo '});';
			echo '$(\'.vote-down-off\').live(\'click\', function() {';
			echo 'alert(321);';
			echo '});';
			echo '</script>';
			echo '<div class="vote">';
			echo '    <a title="This question shows research effort; it is useful and clear (click again to undo)" class="vote-up-off">up vote</a>';
			echo '    <span class="vote-count-post">0</span>';
			echo '    <a title="This question does not show any research effort; it is unclear or not useful (click again to undo)" class="vote-down-off">down vote</a>';			
			echo '    <a title="This is a favorite question (click again to undo)" href="#" class="star-off">favorite</a>';
			
			echo '    <div class="favoritecount"><b></b></div>';			
			echo '</div>';			
			echo '    </td>';
			echo '    <td class="postcell">';
			echo '        <div>          ';
			echo '            <div class="post-text">';
			echo $question['post'];			
			echo '            </div>';
			echo '            <div class="post-taglist">';
			foreach($question['tag'] as $tag)
			{
				echo '<a rel="tag" title="" class="post-tag" href="index.php?tag=',$tag,'">',$tag,'</a>';
			}
			echo '            </div>';
			
			echo '            <table class="fw">';
			echo '            <tbody><tr>';
			echo '            <td class="vt">';
			echo '                <div class="post-menu"><a title="edit this post" href="/posts/6162522/edit">edit</a><span class="lsep">|</span><a title="flag this post for serious problems or moderator attention" id="flag-post-6162522">flag</a></div>';
			echo '            </td>';
			
			echo '            <td class="post-signature owner">';
			
			//$avatar = '<img width="32" height="32" alt="" src="http://www.gravatar.com/avatar/fa9ebd17a2a7ceaf0f594671c58216fb?s=32&amp;d=identicon&amp;r=PG">';
			$user = new User();
			$user_detail = $user->getUserDetail($question['user_id']);
			$avatar = get_gravatar($user_detail['email'], 32, 'identicon', 'pg', true);
			echo '            <div class="user-info"><div class="user-action-time">asked <span class="relativetime" title="2011-05-28 15:19:48Z">40 mins ago</span></div><div class="user-gravatar32"><a href="/users/601909/zad0xsis">',$avatar,'</a></div><div class="user-details"><a href="user_profile.php?id='.$question['user_id'].'">',$user_detail['realname'],'</a><br><span title="reputation score" class="reputation-score">',$user_detail['reputation'],'</span><span title="6 bronze badges"><span class="badge3"></span><span class="badgecount">6</span></span></div></div>';
			echo '            </td>';
			echo '            </tr>';
			echo '            </tbody></table>';
			
			echo '        </div>';
			echo '    </td>';
			echo '    </tr>';			
			echo '</tbody></table>';
			echo '</div>';			
			echo '<div id="answers">';			
			echo '    <a name="tab-top"></a>';
			echo '    <div id="answers-header">';
			echo '        <div class="subheader answers-subheader">';
			$answer_no = count($question['answer']);
			echo '            <h2>'.$answer_no.' Answers</h2>';
			echo '            <div id="tabs">';
			echo '<a title="Answers with the highest score first" href="/questions/6162522/get-the-domain-part-of-an-url-string?answertab=votes#tab-top" class="youarehere">active</a>';			
			echo '            </div>';
			echo '        </div>';
			echo '    </div>';
			
			Question::outputAnswer($question['answer']);

			echo '    <a name="new-answer"></a>';
			echo '    <form method="post" action="" id="post-form">';
			echo '        <h2 class="space">Your Answer</h2>';
			
			echo '<script src="./js/nicEdit.js" type="text/javascript"></script>';
			echo '<script type="text/javascript">';
			echo 'bkLib.onDomLoaded(function() {new nicEditor({iconsPath : \'./images/nicEditorIcons.gif\'}).panelInstance(\'area2\');});</script>';
			echo '<textarea cols="100" rows="10" id="area2" name="post-text"></textarea>';

			echo '        <div class="form-submit cbt"><input type="submit" tabindex="110" value="Post Your Answer" id="submit-button"></div>';
			echo '    </form>';
			echo '    <h2 class="bottom-notice">';
			echo '        Not the answer you\'re looking for?';
			echo '        Browse other questions tagged ';
			foreach($question['tag'] as $tag)
			{
				echo '<a rel="tag" title="" class="post-tag" href="index.php?tag=',$tag,'">',$tag,'</a>';
			}
			echo '        or <a href="askQuestion.php">ask your own question</a>.';
			echo '    </h2>';
			
			echo '</div>';
			echo '</div>';
		}
	}
	
	function answer($question_id, $answer)
	{
		$mongo = new Mongo();
		$question_table = $mongo->site->questions;
		$id = new MongoId($question_id);
		$find['_id'] = $id;
		$question = $question_table->findOne($find);
		if($question)
		{
			if($question['answer'])
			{
				$question['answer'][] = $answer;
			}
			else
			{
				$a = &$question['answer'];
				$a[] = $answer;
			}
			$question_table->save($question);
		}
	}
	
	function getAnswer($question_id)
	{
		$mongo = new Mongo();
		$question_table = $mongo->site->questions;
		$id = new MongoId($question_id);
		$find['_id'] = $id;
		$question = $question_table->findOne($find);
		if($question)
		{
			return $question['answer'];
		}
		return null;
	}
	
	function outputAnswer($answers)
	{
		require_once('util.php');
		require_once('user.php');
		//$answers = getAnswer($question_id);
		//var_dump($answers);
		if($answers)
		{
			foreach($answers as $a)
			{
				echo '<a name="6162555"></a>';
				echo '<div id="answer-6162555" class="answer" >';
				echo '<table>';
				echo '<tr>';
				echo '<td class="votecell">';				
				echo '<div class="vote">';
				echo '<a class="vote-up-off" title="This answer is useful (click again to undo)">up vote</a>';				
				echo '<span class="vote-count-post">1</span>';
				echo '<a class="vote-down-off" title="This answer is not useful (click again to undo)">down vote</a>';				
				echo '</div>';				
				echo '</td>';
				echo '<td>';
				echo '<div class="post-text">',$a['text'];
				echo '</div>';
				
				echo '<table class="fw">';
				echo '<tr>';
				echo '<td class="vt">';
				echo '<div class="post-menu"><a href="/posts/6162555/edit" title="edit this post">edit</a><span class="lsep">|</span><a id="flag-post-6162555" title="flag this post for serious problems or moderator attention">flag</a></div>';
				echo '</td>';				
				echo '<td align="right" class="post-signature">';
				
				//$user = $a['user'];
				$date = date('Y-m-d', $a['timestamp']);
				$avatar = get_gravatar('gmagic10@gmail.com', 32, 'identicon', 'pg', true);
			  $exact = date('Y-m-d H:i:s', $a['timestamp']);
			  $user = new User();
			  $user_detail = $user->getUserDetail($a['user_id']);
				echo '<div class="user-info"><div class="user-action-time">answered <span title="',$exact,'" class="relativetime">',$date,'</span></div><div class="user-gravatar32"><a href="/users/2998/stephen-darlington">'.$avatar.'</a></div><div class="user-details"><a href="user_profile.php?id='.$a['user_id'].'">',$user_detail['realname'],'</a><br><span class="reputation-score" title="reputation score 12341">'.$user_detail['reputation'].'</span><span title="1 gold badge"><span class="badge1"></span><span class="badgecount">1</span></span><span title="15 silver badges"><span class="badge2"></span><span class="badgecount">15</span></span><span title="39 bronze badges"><span class="badge3"></span><span class="badgecount">39</span></span></div></div>';
				
				echo '</td>';
				echo '</tr>';
				echo '</table>';
				echo '</td></tr>';				
				echo '<tr>';
				echo '<td class="votecell"></td>';
				echo '<td>';
				echo '<div id="comments-6162555" class="comments dno">';
				echo '<table>';				
				echo '<tbody>';				
				echo '<tr><td></td><td></td></tr>';				
				echo '</tbody>';				
				echo '</table>';
				echo '</div>';				
				echo '</td>';
				echo '</tr>    </table>';
				echo '</div>';
			}
		}
	}
	
	/*function getTags($question_id)
	{
		$mongo = new Mongo();
		$question_table = $mongo->site->questions;
		$id = new MongoId($question_id);
		$find['_id'] = $id;
		var_dump($find);
		$result = $question_table->findOne($find);
		return $result;
	}*/
	
	function outputTags($question_id)
	{
		$question = Question::getQuestionDetail($question_id);
		foreach($question['tag'] as $t)
		{
			echo '<a href="/questions/tagged/cocoa-touch" class="post-tag" title="show questions tagged" rel="tag">',$t,'</a>&nbsp;<span class="item-multiplier">&times;&nbsp;11910</span><br>';
		}
	}
	
	function getQuestionByTagName($tag)
	{
		$mongo = new Mongo();
		$question_table = $mongo->site->questions;
		$find['tag'] = $tag;
		$cursor = $question_table->find($find)->limit(10);
		foreach($cursor as $tag)
		{
			$questions[] = $tag;
		}
		return $questions;
	}
	
	function vote($question_id)
	{		
		$mongo = new Mongo();
		$question_table = $mongo->site->questions;
		$id = new MongoId($question_id);
		$find['_id'] = $id;
		$question = $question_table->findOne($find);
		if($question)
		{
			$question['vote']++;
			$question_table->save($question);
		}
	}
}

?>