<?php

/*
	Template Name: Groups
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
 <div class="page_content" >
	<div class="container content_page">
		<?php
			$page = get_page_by_title( 'Groups' );
			$content = apply_filters('the_content', $page->post_content); 
			echo $content;
		?>
	</div>
	<div class="container" style="background-color:#D9D9D9">
		<div class="col-md-2" align="center" style="padding-top:15px;">	
				<button class="width_button active" onclick="openCity('Meet or Socialize')" style="width:200px;height:30px;">Meet or Socialize</button>
		</div>
		<div class="col-md-3" align="center" style="padding-top:15px;">	
				<button class="width_button" onclick="openCity('Request proposal')" style="width:200px;height:30px;"> Request proposal</button>	
		</div>		
		<div id="Meet or Socialize" class="col-md-12 city" style="padding-top:50px;">
			<div class="col-md-9">
				<?php

					global $post;
					$args = array( 'numberposts' => 10, 'category_name' => 'groups' );
					$posts = get_posts( $args );
					foreach( $posts as $post ): setup_postdata($post); 

				?>
				<div class="col-md-4" style="padding-bottom:20px;">
					<?= the_post_thumbnail(); ?>
				</div>
				<div class="col-md-8">
					<h3><a><?php the_title(); ?></a></h3>
					<p><?php the_content();?></p>	
				</div>
				<?php
					endforeach;
				?>
			</div>
			<div class="col-md-3 div-radius" style="margin-top:-25px;">
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
		<div class="city col-md-12 col-xs-12 " id="Request proposal"  style="display:none;">
			<div class="col-md-12 col-xs-12">
				<h3>Company Information</h3>
			</div>
			<hr style="background-color:#c0c0c0;">
			<div class="col-md-12 col-xs-12">
				<div class="col-md-3 col-xs-12">
					<div class=" col-md-12 col-xs-12">
						*First Name
					</div>
					<div class=" col-md-12 col-xs-12">
						<input class="group-form" type="text" id="firstname">
					</div>
				</div>
				<div class="col-md-3 col-xs-12">
					<div class=" col-md-12 ">
						*Last Name
					</div>
					<div class=" col-md-12 col-xs-12">
						<input class="group-form" type="text" id="lastname">
					</div>
				</div>
				<div class="col-md-3 col-xs-12">
					<div class=" col-md-12 col-xs-12 ">
						*Email
					</div>
					<div class=" col-md-12 col-xs-12 ">
						<input class="group-form" type="text" id="email">
					</div>
				</div>
				<div class="col-md-3 col-xs-12">
					<div class=" col-md-12 col-xs-12 ">
						*Phone
					</div>
					<div class=" col-md-12 col-xs-12 ">
						<input class="group-form" type="text" id="phone">
					</div>
				</div>
			</div>
			<div class="col-md-12" style="height:50px;"></div>
			<div class="col-md-12 col-xs-12">
				<h3>Event Information</h3>
			</div>
			<hr style="background-color:#c0c0c0;">
			<div class="col-md-6 col-xs-12">
				<div class="col-md-6 col-xs-12">
					<div class=" col-md-12 col-xs-12 ">
						* The nature of your inquiry
					</div>
					<div class=" col-md-12 col-xs-12 ">
						<select class="group-form">
							<option value="1"> Select An option	</option>
							<option value="2"> Yes	</option>
							<option value="3">No	</option>
						</select>
					</div>
				</div>
				<div class="col-md-6 col-xs-12">
					<div class=" col-md-12 ">
						* Number of Attendees
					</div>
					<div class=" col-md-12 col-xs-12 ">
						<input type="text" id="number_of_attendees" class="group-form">
					</div>
				</div>
				<div class="col-md-12" style="height:50px;"></div>
				<div class="col-md-6 col-xs-12">
					<div class=" col-md-12 col-xs-12 ">
						* Event start date:
					</div>
					<div class=" col-md-12 col-xs-12 ">
						<input type="text" id="start_date" class="group-form">
					</div>
				</div>
				<div class="col-md-6 col-xs-12">
					<div class=" col-md-12 ">
						* Event end date:
					</div>
					<div class=" col-md-12 col-xs-12 ">
						<input type="text" id="end_date" class="group-form">
					</div>
				</div>
			</div>
			<div class="col-md-6 col-xs-12">
				<div class="col-md-12 col-xs-12">
					<div class=" col-md-12 ">
						Message:
					</div>
					<div class="col-md-12 col-xs-12 ">
						<textarea class="group-msg"></textarea>
					</div>
				</div>
			</div>
			<div class="col-md-12 col-xs-12">
				<h3>Catering Required</h3>
			</div>
			<hr style="background-color:#c0c0c0;">
			<div class="col-md-12 col-xs-12">
				<div class="col-md-6 col-xs-12">
					<div class=" col-md-12 col-xs-12 ">
					* Choose an option:
					</div>
					<div class=" col-md-12 col-xs-12 ">
						<select class="group-form">
							<option value="1"> Select An option	</option>
							<option value="2"> Yes	</option>
							<option value="3">No	</option>
						</select>
					</div>
				</div>
			</div>
			<div class="col-md-12 col-xs-12" style="height:50px;"></div>
			<div class="col-md-12 col-xs-12">
				<h3>Accommodation Requirements</h3>
			</div>
			<div class="col-md-6 col-xs-12">
				<div class="col-md-6 col-xs-12">
					<div class=" col-md-12 col-xs-12 ">
						* Accommodation required?:
					</div>
					<div class=" col-md-12 col-xs-12 ">
						<select class="group-form">
							<option value="1"> Select An option	</option>
							<option value="2"> Yes	</option>
							<option value="3">No	</option>
						</select>
					</div>
				</div>
				<div class="col-md-6 col-xs-12">
					<div class=" col-md-12 ">
						Number of Rooms:
					</div>
					<div class=" col-md-12 col-xs-12 ">
						<input type="text" id="number_of_attendees" class="group-form">
					</div>
				</div>
				<div class="col-md-12" style="height:50px;"></div>
				<div class="col-md-6 col-xs-12">
					<div class=" col-md-12 col-xs-12 ">
						Arrival Date:
					</div>
					<div class=" col-md-12 col-xs-12 ">
						<input type="text" id="start_date" class="group-form">
					</div>
				</div>
				<div class="col-md-6 col-xs-12">
					<div class=" col-md-12 ">
						Departure Date:
					</div>
					<div class=" col-md-12 col-xs-12 ">
						<input type="text" id="end_date" class="group-form">
					</div>
				</div>
			</div>
			<div class="col-md-6 col-xs-12">
				<div class="col-md-12 col-xs-12">
					<div class=" col-md-12 ">
						Comments / Special Requests:
					</div>
					<div class="col-md-12 col-xs-12 ">
						<textarea class="group-msg"></textarea>
					</div>
				</div>
			</div>
			
			<div class="col-md-12 col-xs-12 " style="height:50px;"></div>
			<div class="col-md-12 col-xs-12">
				<center><button style="background-color:white;width:150px;height:40px;">SEND</button></center>
			</div>
		</div>
		<div class="col-md-12 col-xs-12 " style="height:50px;"></div>
	</div>
	<style>
	.group-form{width:180px; height:35px;}
	.group-msg{width:95%;height:140px;}
</style>
      <script>
function openCity(cityName) {
    var i;
    var x = document.getElementsByClassName("city");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    document.getElementById(cityName).style.display = "block";  
}
</script>


	<?php //get_sidebar();?>     
	<div class="clear"></div>
</div><!-- site-aligner -->
<?php get_footer(); ?>