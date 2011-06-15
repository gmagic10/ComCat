<?php
/**
* Get either a Gravatar URL or complete image tag for a specified email address.
*
* @param string $email The email address
* @param string $s Size in pixels, defaults to 80px [ 1 - 512 ]
* @param string $d Default imageset to use [ 404 | mm | identicon | monsterid | wavatar ]
* @param string $r Maximum rating (inclusive) [ g | pg | r | x ]
* @param boole $img True to return a complete IMG tag False for just the URL
* @param array $atts Optional, additional key/value attributes to include in the IMG tag
* @return String containing either just a URL or a complete image tag
* @source http://gravatar.com/site/implement/images/php/
*/
function get_gravatar( $email, $s = 80, $d = 'mm', $r = 'g', $img = false, $atts = array() ) {
	$url = 'http://www.gravatar.com/avatar/';
	$url .= md5( strtolower( trim( $email ) ) );
	$url .= "?s=$s&d=$d&r=$r";
	if ( $img ) {
		$url = '<img src="' . $url . '"';
		foreach ( $atts as $key => $val )
		$url .= ' ' . $key . '="' . $val . '"';
		$url .= ' />';
	}
	return $url;
}

function pagination($count, $page_dest, $current_page)
{
	if($current_page == 1)
	{
		echo '<span class="page-numbers current">1</span>';
	}
	else
	{
		echo '<a rel="prev" title="go to page 4" href="/users?page=4&amp;tab=reputation&amp;filter=week"><span class="page-numbers prev">prev </span></a>';
		echo '<a title="go to page 1" href="/users?page=2&amp;tab=reputation&amp;filter=week"><span class="page-numbers">1</span></a>';
	}
	if($current_page >= 5)
	{
		echo '<span class="page-numbers dots">…</span>';		
	}
	for($i = $current_page - 2; $i < $current_page + 3; ++$i)
	{
		if($i == $current_page)
			echo '<span class="page-numbers current">',$i,'</span>';
		else if($i > 1 && $i < $count)
			echo '<a title="go to page 2" href="/users?page=2&amp;tab=reputation&amp;filter=week"><span class="page-numbers">',$i,'</span></a>';
	}
	if($count > $current_page + 3)
	{ 
		echo '<span class="page-numbers dots">…</span>';
		echo '<a title="go to page 2" href="/users?page=2&amp;tab=reputation&amp;filter=week"><span class="page-numbers">',$count,'</span></a>';		
		echo '<a rel="next" title="go to page 2" href="/users?page=2&amp;tab=reputation&amp;filter=week"><span class="page-numbers next"> next</span></a>';		
	}
}
?>