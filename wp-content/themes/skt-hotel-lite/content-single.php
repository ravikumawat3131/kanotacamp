<?php
/**
 * @package SKT Hotel
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('single-post'); ?> style="background-color:#F9F9F9">

    
    
    <?php /*
     <div class="postmeta">
            <div class="post-date"><?php echo get_the_date(); ?></div><!-- post-date -->
             <div class="post-comment"> &nbsp;|&nbsp; <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></div> 
            <div class="clear"></div>         
    </div><!-- postmeta -->*/  ?>
  <div class="col-md-5">
    <?php 
        if (has_post_thumbnail() ){
			echo '<div class="post-thumb col-md-12 padding_page">';
            the_post_thumbnail();
			echo '</div>';
		}
        ?>
	<header class="entry-header padding_page">
        <h3 class="single_title"><?php the_title(); ?></h3>
    </header><!-- .entry-header -->
    <div class="entry-content padding_page">
         
		
        <?php the_content(); ?>
        <?php
        wp_link_pages( array(
            'before' => '<div class="page-links">' . __( 'Pages:', 'hotel' ),
            'after'  => '</div>',
        ) );
        ?>
        <div class="postmeta">
            <div class="post-categories"><?php /* the_category( __( ', ', 'hotel' )); */ ?></div>
            <div class="post-tags"><?php the_tags( __( ', ', 'hotel' )); ?> </div>
            <div class="clear"></div>
        </div><!-- postmeta -->
    </div><!-- .entry-content -->
    <footer class="entry-meta">
      <?php /* edit_post_link( __( 'Edit', 'hotel' ), '<span class="edit-link">', '</span>' ); */ ?>
    </footer><!-- .entry-meta -->
	</div>
	<div class="col-md-5">
	</div>
	<?php get_sidebar();?> 
</article>