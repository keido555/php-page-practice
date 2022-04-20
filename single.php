<?php get_header(); ?>

    <main class="archive">
        <!-- HOME -->
        <div id="home" class="home">
            <h1 class="home_title"><?php the_title(); ?></h1>
        </div>

<div class="page-under">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>

        <div class="single">
            <?php if(have_posts()): while(have_posts()): the_post();?>
            <h2><?php the_title(); ?></h2>
            <p style="padding-bottom: 20px;"><?php the_time('Y/m/d'); ?></p>

            <?php the_content(); ?>

            <?php endwhile; endif; ?>

                </div>
            </div>
        </div>
    </main>

<?php get_footer(); ?>