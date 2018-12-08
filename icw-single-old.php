<?php 
/*
 * Template Name: Cannabis Weekly Old
 * Template Post Type: post
 */

?>

<?php get_header();?>

<div class="icw-single-starter flex no-wrap items-start">
  <div class="icw-cover old-cover sticky pt6 w-30 pp-dark-blue-bg top-0 min-height-100vh">
   
      <div class="flex flex-column  justify-center margin-auto h-100 icw-issue-container">
        <h1 class="white">Issue <?php the_title(); ?></h1>
        <div class="flex flex-row">
          <h2 class="white icw-date"><?php echo date("d.m.Y"); ?></h2>
          <!-- <h2 class="white">Topic</h2> -->
        </div>

     <div class="icw-old-text self-end">
       <p class="white mt3">Our International Cannabis Weekly newsletter brings you the latest international cannabis developments across business, regulation and science. All past issues are now available here where you can read the stories that have helped shape the international cannabis industry over the past year. </p>

       <a href="international-cannabis-weekly " class="bg-white pp-corners mt4 db pa3 tc">View All</a>
     </div>
      </div>
    <div class="icw-left-bg absolute w-40"></div>
  </div>

  <div class="icw-content relative w-70 pa6 pr3">

    <!-- if we have some flexible content, let’s loop through it -->
    <?php if( have_rows('icw_post') ): while ( have_rows('icw_post') ) : the_row();
      // if it’s a header, go through the data
      if( get_row_layout() == 'icw_section' ): ?>

      <div class="icw-theme-container relative z-5">

        <div class="icw-theme mb5">
          <div class="icw-theme-title flex flex-row items-center no-wrap">
            <img class="icw-icon country-icon" src="<?php the_sub_field('icw_image'); ?>">
            <h2 class="ml3 pp-blue"><?php the_sub_field('icw_title'); ?></h2>
          </div>
          <div class="icw-theme-bullets flex flex-row wrap mt4">
            <div class="mt2"><?php the_sub_field('icw_bullets'); ?></div>
          </div>
        </div>
      </div>


        <?php endif; 
        endwhile; endif; ?>

  <div class="icw-right-bg absolute w-40"></div>

    
  </div>
</div>


<div class="previous-issues mv6 w-90 container center">
  <p class="tc pp-grey mb3">Read the stories that shape the cannabis industry</p>

  <div class="previous-issues-inner justify-between center mt5 flex flex-wrap">

 <?php
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'category_name' => 'International Cannabis Weekly',
        'orderby' => 'date',
        'post__not_in' => array( $post->ID ),
        'order'=> 'DESC'
        
    );

    $post_query = new WP_Query($args);
    if($post_query->have_posts() ) { while($post_query->have_posts() ) {
    $post_query->the_post(); ?>

      
          <a class="previous-issue issue-inner center pa4 mb4 flex flex-column justify-between center pp-light-blue-bg pp-shadow relative overflow-hidden icw-related" href="<?php the_permalink(); ?>">
           
          
            <div class="issue-inner">
              <h6 class="mb2 white"><?php echo date("d | m | Y"); ?></h6>
              <h2 class="white fw5">Issue</h2>
              <h1 class="h1-big white previous-issue-n"><?php the_title(); ?> </h1>
              <img class="mv4 icw-icon-big" src="<?php the_field('featured_icon'); ?>">
              <p class="pr2 white icw-card-t"><?php echo wp_trim_words( get_field('short_description'), 20, '...' ); ?></p>
            </div>
            <div class="pp-chemical-pattern absolute"></div>
        </a>  
      
 
    <?php  } } ?>
  </div>
</div>



    

<?php get_footer();?>
