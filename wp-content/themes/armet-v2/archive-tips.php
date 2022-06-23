<?php get_header(); ?>

<div class="wrapper">
    <main class="content">
        <?php
            if ( is_post_type_archive('tips') ) {
                $title = "Game Tips & Tricks";
            }
            else {
                $title = 'Archive';
            }
        ?>
        <h1><?php echo $title; ?></h1>

        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

            <div class="strip">
                <div class="strip__tags">
                    <?php 
                        $categories = get_the_category();
                        if ($categories & !is_category() ) : foreach ($categories as $category) : 
                    ?>
                            <a href="<?php echo get_site_url('/') . '/category\/' . $category->slug; ?>" class="tag"><?php echo $category->name; ?></a>
                    <?php endforeach; endif; ?>
                    <?php 
                        $tags = get_the_tags();
                        if ($tags & !is_tag() ) : foreach ($tags as $tag) : 
                    ?>
                            <a href="<?php echo get_site_url('/') . '/tag\/' . $tag->slug; ?>" class="tag"><?php echo $tag->name; ?></a>
                    <?php endforeach; endif; ?>
                </div>
                <div class="strip__body">
                    <div class="strip__img">
                        <?php the_post_thumbnail( 'medium' ); ?>
                    </div>
                    <div class="strip__text">
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="button">View guide</a>
                    </div>                
                </div>

            </div>

        <?php endwhile; endif; ?>        
    </main>
</div>


<?php get_footer(); ?>   