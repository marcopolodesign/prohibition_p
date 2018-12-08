<a class="previous-issue  issue-inner pa4 pp-blue-bg pp-shadow flex flex-column justify-between center mb4" href="<?php the_permalink(); ?>">
    <?php if (get_field('featured_icon')): ?>
  
    <div class="issue-inner">
      <h6 class="mb2 white"><?php echo date("d | m | Y"); ?></h6>
      <h2 class="white fw5">Issue</h2>
      <h1 class="h1-big white previous-issue-n"><?php the_title(); ?> </h1>
      <img class="mv4 icw-icon-big" src="<?php the_field('featured_icon'); ?>">
      <p width="69" class="pr2 white"><?php the_field('short_description'); ?></p>
    </div>
</a>  

<?php endif; ?>

