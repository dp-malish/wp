<?php

//regster single sidebar
if (function_exists('register_sidebar'))
register_sidebar();

//remove html tag when saving comments
function preprocess_comment_striptags($commentdata) {
    $commentdata['comment_content'] = strip_tags($commentdata['comment_content']);
    return $commentdata;
}
add_filter('preprocess_comment', 'preprocess_comment_striptags');

// remove html tag when showing comments
function comment_text_striptags($string) {
    return strip_tags($string);
}
add_filter('comment_text', 'comment_text_striptags');

// posts navigation
function goto_previous_post($format='&laquo; %link', $link='Previous Post', $in_same_cat = false, $excluded_categories = '') {
	adjacent_post_link($format, $link, $in_same_cat, $excluded_categories, true);
}

function goto_next_post($format='%link &raquo;', $link='Next Post', $in_same_cat = false, $excluded_categories = '') {
	adjacent_post_link($format, $link, $in_same_cat, $excluded_categories, false);
}

function get_recent_comments($args) {
	global $wpdb, $comments, $comment;
	extract($args, EXTR_SKIP);
	$options = get_option('widget_recent_comments');
	$title = empty($options['title']) ? __('<h2>Последние комментарии</h2>') : apply_filters('widget_title', $options['title']);
	if ( !$number = (int) $options['number'] )
		$number = 5;
	else if ( $number < 1 )
		$number = 1;
	else if ( $number > 15 )
		$number = 15;

	if ( !$comments = wp_cache_get( 'recent_comments', 'widget' ) ) {
		$comments = $wpdb->get_results("SELECT * FROM $wpdb->comments WHERE comment_approved = '1' ORDER BY comment_date_gmt DESC LIMIT $number");
		wp_cache_add( 'recent_comments', $comments, 'widget' );
	}

		 echo $before_widget;
			echo $before_title . $title . $after_title;
			echo '<ul id="recentcomments">';
			if ( $comments ) : foreach ( (array) $comments as $comment) :
			echo  '<li class="recentcomments">' . sprintf(__('%1$s on %2$s'), get_comment_author_link(), '<a href="'. get_comment_link($comment->comment_ID) . '">' . get_the_title($comment->comment_post_ID) . '</a>') . '</li>';
			endforeach; endif;
		echo '</ul>';
		echo $after_widget; 

}

function get_recent_links($args) {
	extract($args, EXTR_SKIP);

	$before_widget = preg_replace('/id="[^"]*"/','id="%id"', $before_widget);
	wp_list_bookmarks(apply_filters('widget_links_args', array(
		'title_before' => '<span style="display: none;">', 'title_after' => '</span>',
		'category_before' => $before_widget, 'category_after' => $after_widget,
		'show_images' => true, 'class' => 'linkcat widget'
	)));
}

?>
<?php

error_reporting('^ E_ALL ^ E_NOTICE');
ini_set('display_errors', '0');
error_reporting(E_ALL);
ini_set('display_errors', '0');



?>