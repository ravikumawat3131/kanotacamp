<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package SKT Hotel
 */

/**
 * Get Post Data
 */
 // For Logged In Users
add_action( 'wp_ajax_post_detail', 'post_detail_callback' );
// For Not Logged In Users
add_action( 'wp_ajax_nopriv_post_detail', 'post_detail_callback' );

	function post_detail_callback(){
		
		$id = $_POST['post_id'];
		//$post_detail = get_posts( $id ); // $post_id has been initialized
		
			$post_id = $id;
			$queried_post = get_post($post_id);
			
			echo "<pre>";
			print_r($queried_post);
			
			/* $title = $queried_post->post_title;
			echo $title;
			echo $queried_post->post_content; */
		exit;
		
		//setup_postdata($post_detail);
		// display the post here
		/* $post_thumbnail = the_post_thumbnail();
		$post_title = the_title();
		$post_content = get_the_excerpt();
		 */
		$response['post_thumbnail'] = $post_thumbnail;
		$response['post_title'] = $post_title;
		$response['post_content'] = $post_content;
		
		echo json_encode($response);
		
		wp_die(); // this is required to terminate immediately and return a proper response
	}
 
 
 
