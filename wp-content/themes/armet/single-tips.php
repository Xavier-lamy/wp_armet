<?php get_header(); ?>

<div class="wrapper">
    <main class="content">
        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
            <article>
            <div class="article__title">
                <h1><?php the_title(); ?></h1>
                <div class="article__tags">
                    <?php 
                      $categories = get_category();
                      if ($categories) : foreach ($categories as $category) : 
                    ?>
                          <a href="<?php echo get_site_url('/') . '/category\/' . $category->slug; ?>" class="tag"><?php echo $category->name; ?></a>
                    <?php endforeach; endif; ?>
                    <?php 
                      $tags = get_tags();
                      if ($tags) : foreach ($tags as $tag) : 
                    ?>
                          <a href="<?php echo get_site_url('/') . '/tag\/' . $tag->slug; ?>" class="tag"><?php echo $tag->name; ?></a>
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