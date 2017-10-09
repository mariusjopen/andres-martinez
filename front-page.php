<?php get_header(); ?>

<div class="wrapper">

  <div class="work">
    <?php
    query_posts(array(
        'post_type' => 'work',
    ) );

    while (have_posts()) : the_post();
    ?>
      <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
      <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
      <p><?php echo get_the_excerpt(); ?></p>
    <?php
    endwhile;
    ?>
  </div>

  <div class="news">

  </div>

</div>

<?php get_footer(); ?>
