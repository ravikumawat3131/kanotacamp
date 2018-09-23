<?php

/*
	Template Name: Special Offers
*/

get_header(); ?>
<style> 
@media screen and (max-width:1169px) and (min-width:981px){.bookbtn1{display:block;width:auto;}}
@media screen and (max-width: 980px) and (min-width:768px) {.bookbtn1{display:block;width:auto;}}
@media screen and (min-width: 480px) and (max-width: 767px) {.book-btn{text-align: right;}}
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
				$page = get_page_by_title( 'Special Offers' );
				$content = apply_filters('the_content', $page->post_content); 
				echo $content;
			?>
		</div>
		<div class="col-md-12"><hr style="background-color:black;"></div>
			<div class="col-md-12" id="all_posts_offer" style="padding:15px;">
				<?php

					global $post;
					$args = array( 'numberposts' => 10, 'category_name' => 'special-offers' );
					$posts = get_posts( $args );
					foreach( $posts as $post ): setup_postdata($post); 

				?>
				
					<div class="col-md-12" style="padding:15px;">
						<div class="col-md-12 div-radius">
							<div class="col-md-4">
								<?= the_post_thumbnail(); ?>
							</div>
							<div class="col-md-8">
								<h3><a href="javascript:;" class="post_offer" id="<?php the_ID();?>"><?php the_title(); ?></a></h3>
								<p><?php  
								$excerpt = get_the_excerpt();
								echo string_limit_words($excerpt,50);
								?> ...</p>
								<p><a href="javascript:;" class="post_offer" id="<?php the_ID();?>">Read More</a></p>
								<a><button class="book_btn" align="right"><span style="font-size:24px;">Book</span><br>
							<span><?= get_field('cad'); ?></span></button></a>
							</div>
						</div>
					</div>
				
				<?php
					endforeach;
				?>
			</div>
				<script>
					jQuery(document).ready(function($){
					$(".post_offer").click(function(){
						
						var post_id = $(this).attr("id");
						$("#all_posts_offer").hide("");
						$("#back_offer"+post_id).show("");
										
					});
					});
				</script>
			
				<?php
					$args1 = array( 'numberposts' => 10, 'category_name' => 'special-offers' );
					$posts1 = get_posts( $args1 );
					foreach( $posts1 as $post ): setup_postdata($post); 

				?>
				<div class="col-md-12" id="back_offer<?php the_ID();?>" style="display:none">
					<div class="col-md-12" align="left" style="padding:10px;">
						<a href="<?php bloginfo("template_directory"); ?>/hotel/specials-en/"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back </a>	
					</div>
					<div class="col-md-12">
						<h3><a><?php the_title(); ?></a></h3>
					</div>
					<div class="col-md-8">
						<p><?php the_content();?></p>
					</div>
					<div class="col-md-4">
						<?php 
						if( get_field('post_image') )
						{
							while( has_sub_field('post_image') ) 
							{
							?>
								<div class="col-md-12 div-radius">
									<img id="img1<?= $img_main;?>" src="<?= the_sub_field('image'); ?>" />
								</div>	
							<?php
							}
						}
						?>
					</div>							
				</div>
				</div>
				<?php
					endforeach;
				?>	

        <?php //get_sidebar();?>     
        <div class="clear"></div>
    </div><!-- site-aligner -->
</div><!-- content -->

<?php get_footer(); ?>














