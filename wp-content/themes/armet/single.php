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
                          <a href="<?php echo get_site_url('/') . '/category\/' . $category->slug; ?>" class="tag"><?php echo $category->name; ?></a>
                    <?php endforeach; endif; ?>
                    <?php 
                      $tags = get_the_tags();
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
            <div class="lasts-news">
        <?php 
            //3 last articles from latest to oldest
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'order' => 'DESC',
                'orderby' => 'date',
            );

            $my_query = new WP_Query( $args );

            //Loop (similar to standard wp one)
            if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post(); ?>
                
            <div class="card">
                <span class="tag"><?php echo the_tags(); ?></span>
                <div class="card__img">
                    <?php echo the_post_thumbnail('medium'); ?>    
                </div>
                <div class="card__body">
                    <h3><?php echo the_title(); ?></h3>
                    <?php echo the_excerpt(); ?>
                    <a href="<?php echo the_permalink(); ?>" class="button button--lg">View article</a>
                </div>
            </div>

        <?php
            endwhile;
            endif;

            //Reset post data to main query one
            wp_reset_postdata();
        ?>
            </div>
    </main>
    <?php get_template_part('template-parts/sidebar') ?>
</div>

<?php get_footer(); ?>