<?php

/*
	Template Name: Testimonials
*/

get_header(); 
$error = "";

//Get All Testimonials
global $wpdb;
$query = "SELECT * FROM ht_testimonials WHERE status = 1";    
$tests = $wpdb->get_results( $query );

if(isset($_POST['fullname']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['comment']))
{		
	$name = $_POST['fullname'];		
	$email = $_POST['email'];		
	$phone = $_POST['phone'];		
	$comment = $_POST['comment'];
	$date = date('Y-m-d H:i:s');
	$wpdb->query("INSERT INTO ht_testimonials (user_name, user_email, user_phone, user_comment, created_at, updated_at, status) VALUES ('$name', '$email', '$phone', '$comment', '$date', '$date', 0)" );	
}
else
{
	$error = "Please Fill all required fields.";
}
?>	
<style>
.testimonial {
  border: 2px solid #ccc;
  background-color: #eee;
  border-radius: 5px;
  padding: 16px;
  margin: 16px 0
}

.testimonial::after {
  content: "";
  clear: both;
  display: table;
}

.testimonial img {
  float: left;
  margin-right: 20px;
  border-radius: 50%;
}

.testimonial span {
  font-size: 18px;
  margin-right: 15px;
}

@media (max-width: 500px) {
  .testimonial {
      text-align: center;
  }
  .testimonial img {
      margin: auto;
      float: none;
      display: block;
  }
}

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
		<div class="col-md-12 content_page" style="padding-top: 20px;">
			<?php
				$page = get_page_by_title( 'Testimonials' );
				$content = apply_filters('the_content', $page->post_content); 
				echo $content;	
			?>
		</div>
		<div class="col-md-8">
			<a><h3 class="testimonial">Reviews of Kanota Camp, Jaipur</h3></a>
			<div class="col-md-12 testimonial">
				<?php
				foreach ($tests as $test) {
				?>
					
					<div class="col-md-12">
						<p class="fa fa-star">&nbsp;"<?= $test->user_comment; ?>." - <span><?= $test->user_name; ?></span></p>
					</div>
					
				<?php
				}
				?>
			</div>
		</div>
		<form method="post" action="<?php bloginfo('url'); ?>/testimonials/">
			<div class="col-md-4">
				<a><h3 class="testimonial">Leave Testimonial</h3></a>
				<div class="col-md-12">
					<span style="color: red"><?= $error; ?></span>
				</div>
				<div class="col-md-12">
					<h5>*Name:</h5>
					<input type="text" name="fullname" class="div_group1 form-control" style="width:100%; padding: 10px;">
				</div>
				<div class="col-md-12 form-group">
					<h5>*Email:</h5>
					<input type="email" name="email" class="div_group1" style="width:100%; padding: 10px;">
				</div>
				<div class="col-md-12 form-group">
					<h5>*Phone:</h5>
					<input type="number" name="phone" class="div_group1" style="width:100%; padding: 10px;">
				</div>
				<div class="col-md-12 form-group">
					<h5>*Comment:</h5>
					<textarea rows="4" name="comment" class="div_group1" style="border: none!important;  padding: 10px; width:100%; min-height: 100px;"></textarea> 
				</div>
				<div class="col-md-12">
					<center><p class="submit"><input name="submit" id="submit" class="button button-info" value="Submit" type="submit"></p></center>
				</div>
			</div>	
		</form>				
	</div><!-- Page-Content -->
</div><!-- site-aligner -->

<?php get_footer(); ?>