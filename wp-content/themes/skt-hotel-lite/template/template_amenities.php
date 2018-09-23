<?php

/*
	Template Name: Amenities
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
				$page = get_page_by_title( 'Amenities' );
				$content = apply_filters('the_content', $page->post_content);
				echo $content;
			?>
		</div>

		<div id="myModal" class="modal">
		  <span class="close">&times;</span>
		  <img class="modal-content" id="img01">
		  <div id="caption"></div>
		</div>

		<div class="col-md-12"></div>

			<?php
				$args1 = array( 'numberposts' => 10, 'category_name' => 'amenities' );
				$posts1 = get_posts( $args1 );

				foreach( $posts1 as $post ): setup_postdata($post);

			?>
			<div class="col-md-12" id="back_am<?php the_ID();?>" style="background-color:#F5F5F5; padding-top: 30px;">

				<div class="col-md-8" style="margin-top:-15px;">
					<div class="col-md-12">
						<h3><a><?php the_title(); ?></a></h3>
					</div>
					<div class="col-md-12">
						<p><?php the_content();?></p>
					</div>
					<div class="col-md-12 col-xs-12 text-center">
						<?php
						if( get_field('post_image') )
						{
							$i=1;
							while( has_sub_field('post_image') )
							{
							?>
								<div class="col-md-6 col-xs-12 div-radius">
									<img id="myImg<?= $i;?>"  style="height: 230px; width: 320px;" src="<?= the_sub_field('image'); ?>" />
									<?php
										$desc = get_sub_field('img_desc');
										echo "<br><strong>".$desc."</strong>";
									?>
								</div>
								<script>

									// Get the modal

									var modal = document.getElementById('myModal');

									// Get the image and insert it inside the modal - use its "alt" text as a caption
									var img = document.getElementById('myImg<?= $i;?>');
									var modalImg = document.getElementById("img01");
									img.onclick = function(){
										modal.style.display = "block";
										modalImg.src = this.src;
									}

									// Get the <span> element that closes the modal
									var span = document.getElementsByClassName("close")[0];

									// When the user clicks on <span> (x), close the modal
									span.onclick = function() {
										modal.style.display = "none";
									}
									window.onclick = function(event) {
										if (event.target == modal) {
											modal.style.display = "none";
										}
									}
								</script>

							<?php
							$i++;
							}
						}
						?>
					</div>
				</div>
				<div class="col-md-4 col-xs-12 div-radius">
					<?php if( get_field('side_post') )
						{
							while( has_sub_field('side_post') )
							{
							?>
								<li class="li_check"><i class="fa fa-check" aria-hidden="true"></i> <?= the_sub_field('side_field'); ?></li><br>
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














