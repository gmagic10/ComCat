<?php

class Tag
{
	function getTagDetail($tag)
	{
		$mongo = new Mongo();
		$tag_table = $mongo->site->tag;
		$find['tag'] = $tag;
		$tagDetail = $tag_table->findOne($find);
		return $tagDetail;
	}
	
	function outputTag()
	{
		$mongo = new Mongo();
		$tag_table = $mongo->site->tag;
		$result = $tag_table->find()->limit(15);
		$start = 0;
		$next = 0;
		foreach($result as $tag)
		{
			if($start % 4 == 0)
			{
				echo '<tr>';
			}
			echo '<td class="tag-cell">';
			echo '<a rel="tag" title="show questions" class="post-tag" href="index.php?tag='.$tag['tag'].'">',$tag['tag'],'</a><span class="item-multiplier">×&nbsp;181220</span>';
			echo '<div class="excerpt">a multi-paradigm, managed, garbage-collected, object-oriented programming language created by Microsoft.';
			echo '</div>';
			echo '<div>';
			echo '<div class="stats-row fl"><a title="436 questions tagged c# in the last 24 hours" href="/questions/tagged/c%23?sort=newest&amp;days=1">436 asked today</a>, <a title="2287 questions tagged c# in the last 7 days" href="/questions/tagged/c%23?sort=newest&amp;days=7">2287 this week</a></div>';
			echo '<div class="cbt"></div>';
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
	
	function insertTag($tags)
	{
		$mongo = new Mongo();
		$tag_table = $mongo->site->tag;
		foreach($tags as $t)
		{
			$find['tag'] = $t;
			$result = $tag_table->findOne($find);
			if($result == null)
			{
				$tag['tag'] = $t;
				$tag['detail'] = '';
				$tag_table->insert($tag);
			}
		}
	}
	
	function outputRecentTag()
	{
		$mongo = new Mongo();
		$tag_table = $mongo->site->tag;
		$result = $tag_table->find()->limit(15);
		foreach($result as $tag)
		{
			echo '<a href="index.php?tag='.$tag['tag'].'" class="post-tag" title="show questions tagged" rel="tag">',$tag['tag'],'</a><span class="item-multiplier">&times;&nbsp;95</span><br>';
		}
	}
}

?>