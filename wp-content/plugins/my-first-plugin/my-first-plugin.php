<?php

/**
 * Plugin Name: My first plugin
 * Description: This is our playground ;P
 * Plugin Author: Stan Resh
 */

// hooks

// actions

function my_action( $action_name, $action_args = array() ) {
}
// filters

/** 
 * A function that modifies the title of the post
 * 
 * @param string $title
 * @return string
 */
function modify_the_title( $title ) {

	$title = $title . ' has been modified';

	return $title;
}

add_filter( 'the_title', 'modify_the_title' );

/**
 * A function that adds a class to the body classes
 * 
 * @param array $classes
 * @return array
 */
function modify_body_classes( $classes ) {

	$my_classes = array( 'the-body-class' );

	$classes = array_merge( $classes, $my_classes );

	return $classes;
}

add_filter( 'body_class', 'modify_body_classes' );


function insert_div_to_the_content( $content ) {

	$content = $content . '<div><p>Hello, there!</p></div';

	return $content;
}

add_filter( 'the_content', 'insert_div_to_the_content' );

function words_count( $content ) {

	if ( ! is_single() ) {
		return $content;
	}

	$words_count = str_word_count( $content );
	?>
	<div>
		This post has
		<?php echo $words_count; ?>
		words
	</div>


	<?php
	return $content;
}

add_action( 'the_content', 'words_count' );
// basic functions


// the loop