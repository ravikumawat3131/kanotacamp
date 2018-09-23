<?php

/*
	Template Name: Explore Jaipur
*/

get_header(); ?>
<style>
.wp-post-image{width: 320px !important}
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
		<div class="col-md-12 content_page" style="padding-top: 30px;">
			<span>
			<?php
				$page = get_page_by_title( 'Explore Jaipur' );
				$content = apply_filters('the_content', $page->post_content);
				echo $content;
			?>
		</span>
		</div>
		<div class="col-md-12"><hr style="background-color:black;"></div>
			<div class="col-md-12" id="all_posts" style="padding:15px;">
				<?php

					global $post;
					$args = array( 'numberposts' => 10, 'category_name' => 'explore-jaipur' );
					$posts = get_posts( $args );
					foreach( $posts as $post ): setup_postdata($post);

				?>


					<div class="col-md-12 div-radius">
						<div class="col-md-4">
							<?= the_post_thumbnail(); ?>
						</div>
						<div class="col-md-8">
							<h3><?php the_title(); ?></a></h3>
							<p><?php
								the_content();
								?> </p>

							<!-- <a><button class="book_btn" align="right"><span style="font-size:24px;">Book</span><br>
							<span><?php /*echo get_field('cad');*/ ?></span></button></a> -->
						</div>
					</div>


				<?php
					endforeach;
				?>
			</div>

			<script>
				jQuery(document).ready(function($){
				$(".post_show1").click(function(){

					var post_id = $(this).attr("id");
					$("#all_posts").hide("");
					$("#back"+post_id).show("");

				});
				});
			</script>

			<?php
				$args1 = array( 'numberposts' => 10, 'category_name' => 'explore-jaipur' );
				$posts1 = get_posts( $args1 );
				$img_main=1;
				$model=1;
				$model_img=1;

				foreach( $posts1 as $post ): setup_postdata($post);

			?>

			<div class="col-md-12" id="back<?php the_ID();?>" style="display:none;background-color:#F5F5F5">
				<div class="col-md-12" align="left" style="padding:10px;">
					<a href=""><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back </a>
				</div>

				<!--  Model -->
				<div class="col-md-12" style="margin-top:-15px;">
					<div class="col-md-12">
						<h3><span><?php the_title(); ?></span></h3>
					</div>
					<div class="col-md-12">
						<p><?php the_content();?></p>
					</div>
					<div class="col-md-12">
						<?php
						if( get_field('post_image') )
						{
							while( has_sub_field('post_image') )
							{
							?>
								<div id="myModal<?= $model;?>" class="modal">
								  <img class="modal-content" id="img01<?= $model_img;?>">
								</div>
								<div class="col-md-4 div-radius">
									<img id="img1<?= $img_main;?>" style="width:300px !important;" src="<?= the_sub_field('image'); ?>" />
								</div>
							<?php
							 $img_main++;
							 $model++;
							 $model_img++;
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
</div>


<?php get_footer(); ?>