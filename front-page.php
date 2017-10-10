<?php get_header(); ?>
<div class="content">
  <div class="work">
    <?php
    query_posts(array(
        'post_type' => 'work',
    ) );

    while (have_posts()) : the_post();
    ?>
    <div class="post">
      <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
      <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
      <p><?php echo get_the_excerpt(); ?></p>
    </div>
    <?php
    endwhile;
    ?>
  </div>

  <div class="news">
    <?php
    query_posts(array(

    ) );

    while (have_posts()) : the_post();
    ?>
    <div class="post">
      <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
      <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
      <p><?php echo get_the_excerpt(); ?></p>
    </div>
    <?php
    endwhile;
    ?>
  </div>
</div>

<?php get_footer(); ?>
