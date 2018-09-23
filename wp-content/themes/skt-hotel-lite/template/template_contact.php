<?php

/*
	Template Name: Contact
*/

get_header(); ?>
<style> 
@media screen and (max-width:1169px) and (min-width:981px){.bookbtn1{display:block;width:auto;}}
@media screen and (max-width: 980px) and (min-width:768px) {.bookbtn1{display:block;width:auto;}}
@media screen and (min-width: 480px) and (max-width: 767px) {.book-btn{text-align: right;}}
</style>
<div id="header-position"> 
	<div class="container-fluid" style="margin-left:-15px;margin-right:-15px;">
		
	</div>	
</div>
<div class="container">
	<div class="page_content">
		<div class="col-md-12 content_page">
			<?php
				$page = get_page_by_title( 'Contact' );
				$content = apply_filters('the_content', $page->post_content); 
				echo $content;
			?>
		</div>
		<div class="col-md-12"><hr style="background-color:black;"></div>
		<div class="col-md-6" style="padding-bottom: 25px;">
			<h3>Location</h3>
			<hr/>
			<?php 
				$image = get_field('back_image');
				if( !empty($image) ): ?>
				<img class="" src="<?php echo $image; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
		</div>
		<div class="col-md-6">
			<h3>Address</h3>
			<hr/>
			<div class="col-md-12"style="width:100%;height:350px;background-color:#E3E3E3">
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
						
	</div><!-- Page-Content -->
</div><!-- site-aligner -->

<?php get_footer(); ?>