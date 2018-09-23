<?php

/*
	Template Name: Location
*/

get_header(); ?>
<script>
  function initMap() {
    var uluru = {lat: 26.9211562, lng: 75.9203963};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 16,
      center: uluru
    });
    var marker = new google.maps.Marker({
      position: uluru,
      map: map
    });
  }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDoODDUkz54ybuGh3sBzsYJOevmG9tmLy0&callback=initMap"></script>
<style>
.p0{
	padding:0px;
}
.custom-style {
  border: 0px solid #ccc;
  background-color: #eee;
  border-radius: 4px;
  padding: 5px;
  margin: 16px 0
}

.custom-style::after {
  content: "";
  clear: both;
  display: table;
}

.custom-style img {
  float: left;
  margin-right: 20px;
  border-radius: 5%;
  padding: 30px;
}

.custom-style span {
  font-size: 18px;
  margin-right: 15px;
}
@media screen and (max-width:1169px) and (min-width:981px){.bookbtn1{display:block;width:auto;}}
@media screen and (max-width: 980px) and (min-width:768px) {.bookbtn1{display:block;width:auto;}}
@media screen and (min-width: 480px) and (max-width: 767px) {.book-btn{text-align: right;}}
</style>
<div id="header-position">
	<div class="container-fluid" style="margin-left:-15px;margin-right:-15px;">
	</div>
</div>

<style type="text/css">
	@media screen and (max-width:981px) {
		#editByPrem{padding-top: 75px !important;}
	}
</style>

<div class="container">
     <div class="page_content">
		<div class="col-md-12 editByPrem" style="padding-top: 40px;" id="editByPrem">
			<?php
				$page = get_page_by_title( 'Location' );
				$content = apply_filters('the_content', $page->post_content);
				echo $content;
			?>
		</div>

		<div class="col-md-12"><hr style="background-color:black;"></div>

		<div>
			<div class="col-md-4 col-xs-12 custom-style" style="position: inherit !important;"float:inherit; !important;>
				<?php
					$image = get_field('image');
					if( !empty($image) ): ?>
					<img class="img_class img_header" src="<?php echo $image; ?>" alt="<?php echo $image['alt']; ?>" />
				<?php endif; ?>
			</div>

			<?php
			global $post;
			$args = array( 'numberposts' => 10, 'category_name' => 'location' );
			$posts = get_posts( $args );
			foreach( $posts as $post ): setup_postdata($post);
				?>
				<div class="col-md-8 col-xs-12 custom-style" style="padding-top: 10px;padding-left: 25px; min-height: 230px;">

					<h3><?php the_title(); ?></h3>
					<p>
						<?php
						$excerpt = get_the_excerpt();
						echo $excerpt;
						?>
					</p>
				</div>
				<?php
			endforeach;
			?>


			<div class="col-md-6 bc_gray">
				<div class="col-md-12" style="min-height:370px;">
					<div class="col-md-12 col-xs-12" style="margin-bottom:10px;margin-top:10px;">
						<h4><a>Address</a></h4>
						<h5>Kanota Camp, Agra-Delhi Byepass Road, Sumel, Beermalpura at Mukandpura, Rajasthan - 302027, India</h5>
					</div>
					<div class="col-md-6 col-xs-12" style="margin-bottom:10px;margin-top:10px;">
						<h4><a>Telephone</a></h4>
						<h5><a href="tel:9784006600"> (+91)9784006600</a></h5>
						<h5><a href="tel:9414459623"> (+91)9414459623</a></h5>
					</div>
					<div class="col-md-6 col-xs-12" style="margin-bottom:10px;margin-top:10px;">
						<h4><a>Fax</a></h4>
						<h5><a href="tel:9784006600">(+91)9784006600</a></h5>
					</div>
					<div class="col-md-12 col-xs-12" style="margin-bottom:10px;margin-top:10px;">
						<h4><a>E-mail</a></h4>
						<h5>kanotacamp@gmail.com</h5>
					</div>
				</div>
			</div>
			<div class="col-md-6 bc_gray">
				<div class="col-md-12 col-xs-12 pb10 pt10">
                    <iframe src="https://www.google.com/maps/d/embed?mid=1OrQKUchTVNXhp0G1XSTMB-EVn5aAGqek&hl=en" style="width: 100%; height: 345px;"></iframe>
				</div>
			</div>
	        <div class="clear"></div>
	</div><!-- content -->
</div><!-- content -->

<?php get_footer(); ?>