<?php

/*
	Template Name: Our Story
*/

get_header(); ?>
<style> 
@media screen and (max-width:1169px) and (min-width:981px){.bookbtn1{display:block;width:auto;}}
@media screen and (max-width: 980px) and (min-width:768px) {.bookbtn1{display:block;width:auto;}}
@media screen and (min-width: 480px) and (max-width: 767px) {.book-btn{text-align: right;}}
@media screen and (max-width:1169px) and (min-width:981px) {.book-btn{text-align: right;}}
</style>
<div id="header-position"> 	
	<div class="container-fluid" style="margin-left:-15px;margin-right:-15px;">
		<?php 
			$image = get_field('back_image');
			if( !empty($image) ): ?>
			<img class="img_class img_header" src="<?php echo $image; ?>" alt="<?php echo $image['alt']; ?>" />
		<?php endif; ?>
	</div>	
</div>
<div class="container">
     <div class="page_content">
		<div class="col-md-12 content_page">
			<?php
				$page = get_page_by_title( 'Our Story' );
				$content = apply_filters('the_content', $page->post_content); 
				echo $content;
			?>
		</div>
        <?php //get_sidebar();?>     
        <div class="clear"></div>
    </div><!-- site-aligner -->
</div><!-- content -->

<?php get_footer(); ?>