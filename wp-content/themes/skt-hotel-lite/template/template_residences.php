<?php

/*
	Template Name: Residences
*/

get_header(); ?>
<div id="header-position"> 
	<div class="container-fluid" style="margin-left:-15px;margin-right:-15px;">
		<?php 
			$image = get_field('back_image');
			if( !empty($image) ): ?>
			<img class="img_class img_header" src="<?php echo $image; ?>" alt="<?php echo $image['alt']; ?>" />
		<?php endif; ?>
	</div>
</div>

<div class="container ">
     <div class="page_content">
		<div class="col-md-12 content_page">
			<?php
				$page = get_page_by_title( 'Residences' );
				$content = apply_filters('the_content', $page->post_content); 
				echo $content;
			?>
		</div>
		<div class="col-md-12"><hr style="background-color:black;"></div>
			<div class="col-md-12" id="all_posts_residences" style="padding:15px;">
				<?php

					global $post;
					$args = array( 'numberposts' => 10, 'category_name' => 'residences' );
					$posts = get_posts( $args );
					foreach( $posts as $post ): setup_postdata($post); 

				?>
				
					<div class="col-md-12" style="padding:15px;">
						<div class="col-md-12 div-radius">
							<div class="col-md-4">
								<?= the_post_thumbnail(); ?>
							</div>
							<div class="col-md-8">
								<h3><a href="javascript:;" class="post_residences" id="<?php the_ID();?>"><?php the_title(); ?></a></h3>
								<p><?php  
								$excerpt = get_the_excerpt();
								echo string_limit_words($excerpt,50);
								?> ...</p>
								<p><a href="javascript:;" class="post_residences" id="<?php the_ID();?>">Read More</a></p>
							</div>
						</div>
					</div>
				
				<?php
					endforeach;
				?>
			</div>
				
				<script>
					jQuery(document).ready(function($){
					$(".post_residences").click(function(){
						
						var post_id = $(this).attr("id");
						$("#all_posts_residences").hide("");
						$("#back_residences"+post_id).show("");
										
					});
					});
				</script>
				
				<?php
					$args1 = array( 'numberposts' => 10, 'category_name' => 'residences' );
					$posts1 = get_posts( $args1 );
					$img_main=1;
					foreach( $posts1 as $post ): setup_postdata($post); 

				?>
				
				<div class="col-md-12 div-radius" id="back_residences<?php the_ID();?>" style="display:none">
					<div class="col-md-12" align="left">
						<a href="<?php bloginfo("template_directory"); ?>/hotel/residences/"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back </a>	
					</div>
					<div class="col-md-9">	
						<div class="col-md-12">
							<h3><a><?php the_title(); ?></a></h3>
						</div>
						<div class="col-md-12">
							<p><?php the_content();?></p>
						</div>
						<div class="col-md-12">
							<div class="col-md-12">
								<?php 
								if( get_field('post_image') )
								{
									while( has_sub_field('post_image') ) 
									{ ?>
									<div class="col-md-4 div-radius">
										<img id="img1<?= $img_main;?>" src="<?= the_sub_field('image'); ?>" />
									</div>
								<?php
									$img_main++;
									}
								}
								?>
							</div>
						</div>
					</div>
					<div class="col-md-3 div-radius">
					<?php if( get_field('side_post') )
						{
							while( has_sub_field('side_post') ) 
							{
							?>
								<li class="li_check"><i class="fa fa-check" aria-hidden="true"></i> <?= the_sub_field('side_field'); ?></li>
							<?php
							}
						}
						?>
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














