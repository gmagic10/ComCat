<?php

class User
{
	function signup($user)
	{
		$mongo = new Mongo();
		$user_table = $mongo->site->user;
		$user_table->insert($user);
	}
	
	function login($name, $password)
	{
		$mongo = new Mongo();
		$user_table = $mongo->site->user;
		$find['email'] = $name;
		$find['password'] = $password;
		$result = $user_table->findOne($find);
		if($result)
		{
			//session_start();
			$_SESSION['login_status'] = 'login';
			$_SESSION['realname'] = $result['realname'];
			$_SESSION['id'] = (string)$result['_id'];
			return true;
		}
		//session_start();
		//	$_SESSION['login_status'] = 'login';
		return false;
	}
	
	function logout()
	{
		//session_start();
		$_SESSION['login_status'] = 'logout';
	}
	
	function getLoginStatus()
	{
		//session_start();
		if($_SESSION['login_status'] == 'login')
		{
			return true;
		}
		return false;		
	}
	
	function getLoginName()
	{
		//session_start();
		if($_SESSION['login_status'] == 'login')
		{
			return $_SESSION['realname'];
		}
		return '';
	}
	
	function getLoginID()
	{
		//session_start();
		if($_SESSION['login_status'] == 'login')
		{
			return $_SESSION['id'];
		}
		return 0;
	}
	
	function getUserDetail($user_id)
	{
		$mongo = new Mongo();
		$user_table = $mongo->site->user;
		$id = new MongoId($user_id);
		$find['_id'] = $id;
		$result = $user_table->findOne($find);
		return $result;
	}
	
	function getUserReputation($user_id)
	{
		$mongo = new Mongo();
		$user_table = $mongo->site->user;
		$id = new MongoId($user_id);
		$find['_id'] = $id;
		$result = $user_table->findOne($find);
		return $result['reputation'];
	}
	
	function outputUser()
	{
		$mongo = new Mongo();
		$user_table = $mongo->site->user;
		$result = $user_table->find()->limit(15);
		$start = 0;
		$next = 0;
		foreach($result as $user)
		{
			if($start % 4 == 0)
			{
				echo '<tr>';
			}
			echo '<td>';
			echo '<div class="user-info">';
			echo '<div class="user-gravatar48">';
			echo '<a href="/users/29407/darin-dimitrov"><img width="48" height="48" alt="" src="http://www.gravatar.com/avatar/e3a181e9cdd4757a8b416d93878770c5?s=48&amp;d=identicon&amp;r=PG"></a>';
			echo '</div>';
			echo '<div class="user-details">';
			echo '<a href="/users/29407/darin-dimitrov">',$user['realname'],'</a><br>';
			echo '<span class="user-location">',$user['location'],'</span><br>';
			echo '<span title="reputation this week" class="reputation-score">1,566</span>';
			echo '</div>';
			echo '<div class="user-tags">';
			echo '<a href="questions/tagged/c%23">c#</a>, <a href="questions/tagged/asp.net-mvc-3">asp.net-mvc-3</a>, <a href="questions/tagged/asp.net-mvc">asp.net-mvc</a>';
			echo '</div>';
			echo '</div>';
			echo '</td>';
			if($next + 3 == $start)
			{
				echo '</tr>';
				$next = $start;
			}
			$start++;
		}
	}
	
	function askQuestion($user_id, $question_id)
	{
		$mongo = new Mongo();
		$user_table = $mongo->site->user;
		$id = new MongoId($user_id);
		$find['_id'] = $id;
		$result = $user_table->findOne($find);
		if($result)
		{
			if($result['question'])
			{
				$result['question'][] = $question_id;
			}
			else
			{
				$a = &$result['question'];
				$a[] = $question_id;
			}
			$user_table->save($result);
		}
	}
	
	function answer($user_id, $question_id)
	{
		$mongo = new Mongo();
		$user_table = $mongo->site->user;
		$id = new MongoId($user_id);
		$find['_id'] = $id;
		$result = $user_table->findOne($find);
		if($result)
		{
			if($result['answer'])
			{
				$result['answer'][] = $question_id;
			}
			else
			{
				$a = &$result['answer'];
				$a[] = $question_id;
			}
			$user_table->save($result);
		}
	}
}


?>