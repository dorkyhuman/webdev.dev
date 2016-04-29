<?php
/*
Template Name: Jess2.o
*/
get_header(); ?>
               <div class="page-heading">
                  <h1 class="page-title"><?php the_title(); ?></h1>
            <div class="clear"></div>
         </div>
         <!--Start Page Content -->
         <div class="page-content-container">
                  <div class="page-content">
                     <div class="grid_16 alpha">
                        <div class="content-bar">
			<?php if (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
				<div class="clear"></div>
				<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'black-bird' ) . '</span>', 'after' => '</div>' ) ); ?>
            <?php endif; ?>

    <!--Start Comment box-->
		<?php comments_template(); ?>
            <!--End Comment box-->

          </div>
    </div>
	</div>
	 </div>
      </div>
   </div>
</div>
<?php get_footer(); ?>