<?php /* Template Name: AOB  */?>

<?php get_header();?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<?php if( get_field('aob_header') ): ?>
<div class="w-100 " style="background-color: <?php the_field('aob_header_bg_color'); ?>">
  <div class="starter-div flex flex-column wrap center justify-center measure-wide lh-copy" >

    <h1><?php the_title(); ?></h1>


    <?php the_field('aob_header'); ?>
  </div>
</div>

<div class="second-div flex flex-column wrap center justify-center measure-wide lh-copy" >
  <?php the_field('aob_text_content'); ?>
 
</div>


<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer();?>
