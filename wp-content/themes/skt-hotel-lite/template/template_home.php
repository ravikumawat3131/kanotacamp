<?php

/*
	Template Name: Home
*/

get_header(); 
?>
<style>.bookbtn1{display:none;}
@media screen and (max-width:767px) {.bookbtn1{display:block;width:auto;}}
@media screen and (max-width: 980px) and (min-width:768px) {.bookbtn1{display:block;width:auto;}}
@media screen and (min-width: 480px) and (max-width: 767px) {.bookbtn1{.col-xs-6.book-btn {text-align: right !important;}}}
</style>

<div class="clear"></div>
<div class="container">
	<div class="col-md-12" style="text-align: justify;">
		<?php
			$page = get_page_by_title( 'Home' );
			$content = apply_filters('the_content', $page->post_content); 
			echo $content;
			if( get_field('accomodation') )
			{
				$accomodation = the_field('accomodation');
			}
		?>
	</div>		
</div>
<style type="text/css">
	.attachment-post-thumbnail{height: 250px;}
</style>
<div class="container">
	<div class="col-md-12" id="all_posts" style="padding:15px;">
		<?php
			global $post;
			$args = array( 'numberposts' => 10, 'category_name' => 'home' );
			$posts = get_posts( $args );
			foreach( $posts as $post ): setup_postdata($post); 
			?>			
				<div class="col-md-4">
					<div class="col-md-12 div-radius text-center">
						<a href="<?php bloginfo('url'); ?>/main-hotel-en/">
							<?= the_post_thumbnail(); ?>
						</a>
						<a href="<?php bloginfo('url'); ?>/main-hotel-en/" style="font-size: 18px; padding-top: 10px; color: orange" id="<?php the_ID();?>">
							<?php the_title(); ?>
						</a>						
					</div>
					<div class="col-md-12 ">
						
					</div>
				</div>
			<?php
			endforeach;
		?>	
	</div>
	<div class="col-md-12">
		<?php  echo $accomodation; ?>
	</div>
</div>	
<?php get_footer(); ?>