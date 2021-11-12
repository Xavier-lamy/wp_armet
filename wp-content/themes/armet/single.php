<?php get_header(); ?>

<div class="wrapper">
    <main class="content">
        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
            <article class="post">
                <?php the_post_thumbnail(); ?>

                <h1><?php the_title(); ?></h1>

                <div class="post__meta">
                    <?php echo get_avatar( get_the_author_meta( 'ID' ), 40 ); ?>
                    <p>
                    Published on <?php the_date(); ?>
                    by <?php the_author(); ?>
                    In category: <?php the_category(); ?>
                    Tags: <?php the_tags(); ?>
                    </p>
                </div>
                
                <div class="post__content">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; endif; ?>
    </main>
    <?php get_template_part('template-parts/sidebar') ?>
</div>

<?php get_footer(); ?>