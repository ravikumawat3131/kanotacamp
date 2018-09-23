<?php

/*
	Template Name: Main Hotels
*/

get_header(); ?>
<style>
.attachment-post-thumbnail{max-height: 210px;}

#myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

/* Add Animation */
.modal-content, #caption {
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)}
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)}
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    position: absolute;
    top: 85px;
    right: 10px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
    z-index: 99999;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
}

.img-div{
	position:relative; text-align:center; overflow:hidden; height:230px; width:257px;
}
@media screen and (max-width: 768px) {
	.img-div{
			height: 160px; width: 100%;
		}
}
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
			<?php
				$page = get_page_by_title( 'Main Hotel' );
				$content = apply_filters('the_content', $page->post_content);
				echo $content;
			?>
		</div>
		<div class="col-md-12">
			<hr style="background-color:black;">
		</div>
		<div class="col-md-12" id="all_posts" style="padding:15px;">
			<?php

				global $post;
				$args = array( 'numberposts' => 10, 'category_name' => 'main-hotel' );
				$posts = get_posts( $args );
				foreach( $posts as $post ): setup_postdata($post);

			?>


				<div class="col-md-12 div-radius">
					<div class="col-md-4">
						<?= the_post_thumbnail(); ?>
						<?php
							$image = get_field('back_image');
							if( !empty($image) ): ?>
							<img class="img_class img_header" src="<?php echo $image; ?>" alt="<?php echo $image['alt']; ?>" />
						<?php endif; ?>
					</div>
					<div class="col-md-8">
						<h3><a href="javascript:;" class="post_show1" id="<?php the_ID();?>"><?php the_title(); ?></a></h3>
						<p><?php
							$excerpt = get_the_excerpt();
							echo string_limit_words($excerpt,50);
							?> ...</p>
						<p><a href="javascript:;" class="post_show1" id="<?php the_ID();?>">Read More</a></p>
						<!-- <a><button class="book_btn" align="right"><span style="font-size:24px;">Book</span><br>
						<span><?php /*echo get_field('cad');*/ ?></span></button></a> -->
					</div>
				</div>
				<div class="col-md-12"style="height:10px;"></div>


			<?php
				endforeach;
			?>
		</div>
		<!-- The Modal -->
		<div id="myModal" class="modal">
		  <span class="close">&times;</span>
		  <img class="modal-content" id="img01">
		</div>

		<script>
			jQuery(document).ready(function($){
				$(".post_show1").click(function(){

					var post_id = $(this).attr("id");
					$("#all_posts").hide("");
					$("#back"+post_id).show("");

				});

				$(".back_post").click(function(){

					var post_id = $(this).attr("id");
					$("#all_posts").show("");
					$("#back"+post_id).hide("");

				});

				$(".post_img").click(function(){
					// Get the modal
					var modal = document.getElementById('myModal');
					// Get the image and insert it inside the modal - use its "alt" text as a caption
					var img = $(this).attr('id');
					var modalImg = document.getElementById("img01");
				    modal.style.display = "block";
				    modalImg.src = this.src;

					// Get the <span> element that closes the modal
					var span = document.getElementsByClassName("close")[0];

					// When the user clicks on <span> (x), close the modal
					span.onclick = function() {
					    modal.style.display = "none";
					}
				});
			});

		</script>

		<?php
			$args1 = array( 'numberposts' => 10, 'category_name' => 'main-hotel' );
			$posts1 = get_posts( $args1 );
			$img_main=1;
			$model=1;
			$model_img=1;

			foreach( $posts1 as $post ): setup_postdata($post);

			?>

			<div class="col-md-12" id="back<?php the_ID();?>" style="display:none;background-color:#F5F5F5">
				<div class="col-md-12" align="left" style="padding:10px;">
					<a href="javascript:;" class="back_post" id="<?php the_ID();?>"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back </a>
				</div>

				<!--  Model -->
				<div class="col-md-9" style="margin-top:-15px;">
					<div class="col-md-12">
						<h3><a><?php the_title(); ?></a></h3>
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
								<div class="col-md-4  div-radius img-div">
									<img id="img1_<?= $img_main;?>_<?= the_ID();?>" class="post_img" src="<?= the_sub_field('image'); ?>" />
								</div>
							<?php
							}
							$img_main++;
						}
						?>
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
		<script>
			/*$(document).ready(function($){
				$(".post_show1").click(function(){
					var post_id = $(this).attr("id");
					 console.log(post_id);
					//alert(post_id);
					var data = "action=post_detail&";
					data += $("post_id");
					var ajaxurl = '<?php echo admin_url( 'admin-ajax.php'); ?>';

					$.ajax({
						type: 'POST',
						url: ajaxurl,
						data: {
				            'post_id': post_id,
				            'action': 'f711_get_post_content' //this is the name of the AJAX method called in WordPress
				        },
						success: function(data)
						{
							console.log(data);
							var obj = data.split("|");
							var obj1 = $.parseJSON(obj[1]);
							alert(obj1.side_post_1_side_field);
							$("#posts_title").val(obj1.post_title);
							$("#post_content").val(obj1.post_content);
							$("#div_show").show("");

						}
					});
				});
			});*/
	</script>
        <?php //get_sidebar();?>
        <div class="clear"></div>
    </div><!-- site-aligner -->
</div>


<?php get_footer(); ?>