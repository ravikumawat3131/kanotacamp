<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package SKT Hotel
 */
?>
<style>
.testimonial {
  border: 2px solid #ccc;
  background-color: #eee;
  border-radius: 0px;
  padding: 16px;
  margin: 0px 0
}

.testimonial::after {
  content: "";
  clear: both;
  display: table;
}

.testimonial img {
  float: left;
  margin-right: 20px;
  border-radius: 0%;
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
</style>
<?php $page = get_page_by_title("Contact");?>
<div class="testimonial">
	<div class="container-fluid">
		<div class="col-md-6 col-xs-12" align="left">
			<p style="color:black;">Address: Kanota Camp, Agra-Delhi Byepass Road, Sumel<br> Beermalpura at Mukandpura, Rajasthan - 302027, India </p>
		</div>
		<div class="col-md-6 col-xs-12" align="right">
			<a style="color:black;" class="fa fa-phone"> (+91)9784006600 / 9414459623 </a><br>
			<a href="#" class="fa fa-envelope" style="color:black;"> kanotacamp@gmail.com</a>
		</div>
	</div>
	<div class="container-fluid" style="height: 1px; background: black;"></div>
	<div class="container-fluid" style="padding-top: 10px; padding-bottom: 10px;">
		<div class="col-md-6 col-xs-12 set_align" style="padding-top: 10px;" align="left">
			<a style="color:black;" href="<?php bloginfo('url'); ?>/location-en/"><span>Contact & Location </span>|</a>
			<a style="color:black;"><span> Sitemap</span></a>
		</div>
		<div class="col-md-6 col-xs-12 social-icons set_align pad" align="right">
			<a href="https://www.facebook.com/Kanota-Camp-1248582315156636/" target="_blank" class="fa fa-facebook fa-2x" title="facebook"></a>
			<a href="javascript:;" target="_blank" class="fa fa-google-plus fa-2x" title="google-plus"></a>
			<a href="https://www.youtube.com/watch?v=47WzVQAVuzg" target="_blank" class="fa fa-youtube fa-2x" title="youtube"></a>
		</div>
	</div>
	<div class="container-fluid" style="height: 1px; background: black;"></div>
	 <!-- <div class="container-fluid" style="padding-top: 10px;">
             <div class="col-md-12">
                 <div class="col-md-2"></div>
                 <div class="col-md-2 col-xs-3" align="center" style="padding-bottom: 13px;">
                     <img src="<?php /*echo get_template_directory_uri();*/ ?>/images/partnerLogo-0.png" >
                 </div>
                 <div class="col-md-2 col-xs-3" align="center" style="padding-bottom: 13px;">
                     <img src="<?php /*echo get_template_directory_uri();*/ ?>/images/partnerLogo-1.png" >
                 </div>
                 <div class="col-md-2 col-xs-3" align="center" style="padding-bottom: 13px;">
                     <img src="<?php /*echo get_template_directory_uri();*/ ?>/images/partnerLogo-2.png">
                 </div>
                 <div class="col-md-2 col-xs-3" align="center" style="padding-bottom: 13px;">
                     <img src="<?php /*echo get_template_directory_uri();*/ ?>/images/partnerLogo-4.png">
                 </div>
                 <div class="col-md-2"></div>
             </div>
         </div> -->
</div>
<div class="copyright-wrapper" align="center">
	<div class="container" align="center">
		<div class="copyright-txt" style="color: white;"><?php echo hotel_credit(); ?></div>
	</div>
	<div class="clear"></div>
</div>
  <!-- </div> -->
<?php wp_footer(); ?>
</body>
</html>