<?php get_header(); ?>

<div class="wrapper">
    <main class="content">
        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
            <article>
            <div class="article__title">
                <h1><?php the_title(); ?></h1>
                <div class="article__tags">
                    <?php 
                      $categories = get_the_category();
                      if ($categories) : foreach ($categories as $category) : 
                    ?>
                          <span class="tag"><?php echo $category->name; ?></span>
                    <?php endforeach; endif; ?>
                    <?php 
                      $tags = get_the_tags();
                      if ($tags) : foreach ($tags as $tag) : 
                    ?>
                          <span class="tag"><?php echo $tag->name; ?></span>
                    <?php endforeach; endif; ?>
                </div>
                <p class="article__meta"><small>Posted by <?php the_author(); ?><span class="mobile-hidden"> on</span></small><small> <?php the_date(); ?></small></p>
            </div>
            <div class="article__body">
                <?php the_content(); ?>
            </div>
            </article>
        <?php endwhile; endif; ?>
    </main>
    <?php get_template_part('template-parts/sidebar') ?>
</div>

<?php get_footer(); ?>