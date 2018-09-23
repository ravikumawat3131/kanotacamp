<?php

/*
	Template Name: Gallery
*/

get_header(); ?>
<style>
.img-div{
	position:relative; text-align:center; overflow:hidden; height:180px; width:277px;
}
@media screen and (max-width: 768px) {
	.img-div{
			height: 90px; width: 150px;
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
<section style="height:25px;">
</section>
<div class="container content_page">
	<div class="col-md-12">
		<?php
			$page = get_page_by_title( 'Gallery' );
			$content = apply_filters('the_content', $page->post_content);
			echo $content;
		?>
	</div>
</div>
<div class="container">
		<div class="row" style="padding:15px;">
			<h3>View Our Stunning Gallery</h3>
		</div>
		<div class="col-md-12 text-center" style="padding:15px;">
				<div class="col-md-4" align="center" style= "height:60px;">
					<button class="width_button" style="background-color:#CFCFCF;" onclick="open_gallery('rooms')">ROOMS</button>
				</div>
				<div class="col-md-4" align="center" style= "height:60px;" >
					<button class="width_button" style="background-color:#CFCFCF;" onclick="open_gallery('interior')">INTERIOR</button>
				</div>
				<div class="col-md-4" align="center" style= "height:60px;">
					<button class="width_button" style="background-color:#CFCFCF;" onclick="open_gallery('exterior')">EXTERIOR</button>
				</div>
		</div>
		<div id="myModal" class="modal">
		  <span class="close">&times;</span>
		  <img class="modal-content" id="img01">
		  <div id="caption"></div>
		</div>
		<div class="row" style="padding:15px;">
			<div class="col-md-12">
				<div id="rooms" class="room">
				<?php
				$i=1;
				if( get_field('rooms_images') )
				{
					while( has_sub_field('rooms_images') )
					{
					?>

							<div class="col-md-4 col-xs-6 img-div" style="padding:15px;">
								<img id="myImg<?= $i;?>" src="<?php echo the_sub_field('rooms_images'); ?>" class="img-resize">
							</div>
							<script>


								// Get the modal

								var modal = document.getElementById('myModal');

								// Get the image and insert it inside the modal - use its "alt" text as a caption
								var img = document.getElementById('myImg<?= $i;?>');
								var modalImg = document.getElementById("img01");
								var captionText = document.getElementById("caption");
								img.onclick = function(){
									modal.style.display = "block";
									modalImg.src = this.src;
									captionText.innerHTML = this.alt;
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
				<?php $i++;
					}
				}?>
				</div>
				<div id="interior" class="room" style="display:none">
				<?php
				if( get_field('interior_images') )
				{
					while( has_sub_field('interior_images') )
					{
					?>

							<div class="col-md-4 col-xs-6 img-div" style="padding:15px;">
								<img id="myImg<?= $i;?>" class="img-resize" src="<?php echo the_sub_field('interior_images'); ?>">
							</div>
							<script>


				// Get the modal

						var modal = document.getElementById('myModal');

						// Get the image and insert it inside the modal - use its "alt" text as a caption
						var img = document.getElementById('myImg<?= $i;?>');
						var modalImg = document.getElementById("img01");
						var captionText = document.getElementById("caption");
						img.onclick = function(){
							modal.style.display = "block";
							modalImg.src = this.src;
							captionText.innerHTML = this.alt;
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
				<?php $i++;
					}
				}?>
				</div>
				<div id="exterior" class="room" style="display:none">
				<?php
				if( get_field('exterior_images') )
				{
					while( has_sub_field('exterior_images') )
					{
					?>

							<div class="col-md-4 col-xs-6 img-div" style="padding:15px;">
								<img class="img-resize" id="myImg<?= $i;?>" src="<?php echo the_sub_field('exterior_images'); ?>">
							</div>
						<script>


				// Get the modal

						var modal = document.getElementById('myModal');

						// Get the image and insert it inside the modal - use its "alt" text as a caption
						var img = document.getElementById('myImg<?= $i;?>');
						var modalImg = document.getElementById("img01");
						var captionText = document.getElementById("caption");
						img.onclick = function(){
							modal.style.display = "block";
							modalImg.src = this.src;
							captionText.innerHTML = this.alt;
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
				<?php $i++;
					}
				}?>
				</div>
			</div>
		</div>

	<?php //get_sidebar();?>

	<div class="clear"></div>
    </div><!-- content -->
		<div class="container"style="height:15px"></div>
<script>
function open_gallery(hotel_gallery) {
    var i;
    var x = document.getElementsByClassName("room");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    document.getElementById(hotel_gallery).style.display = "block";
}
</script>

<?php get_footer(); ?>
