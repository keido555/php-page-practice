<?php get_header(); ?>

    <main class="archive">
        <!-- HOME -->
        <div id="home" class="home">
            <h1 class="home_title"><?php single_cat_title(); ?></h1>
        </div>

<div class="page-under">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>

        <!-- Blog -->
        <div id="blog" class="blog cmn-section -black">
            <div class="inner wow animate__animated animate__fadeIn">
                <div class="blog-con">
                    <div class="blog-list">

<?php if (in_category(array('4'))) {?>

<div>

<?php if(have_posts()): while(have_posts()): the_post();?>
                        <div class="blog-item">
                            <dt>
                                <span class="tag_<?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->slug; } ?>">
                                <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?>
                                </span>
                            </dt>
                            <p style="color: white; padding-top:5px; padding-right:10px";><?php the_time('Y/m/d'); ?></p>
                            <dd>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </dd>
                        </div>
<?php endwhile; endif; ?>

</div>

<?php } elseif(in_category(array('5'))){ ?>

<div>

<?php if(have_posts()): while(have_posts()): the_post();?>
                        <div class="blog-item">
                            <dt>
                                <span class="tag_<?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->slug; } ?>">
                                <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?>
                                </span>
                            </dt>
                            <dd>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </dd>
                        </div>
<?php endwhile; endif; ?>

</div>

<?php }else{ ?>

<div>

    <?php if(have_posts()): while(have_posts()): the_post();?>
                        <div class="blog-item">
                            <dt>
                                <span class="tag_<?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->slug; } ?>">
                                <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?>
                                </span>
                            </dt>
                            <dd>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </dd>
                        </div>
<?php endwhile; endif; ?>

</div>

<?php } ?>

                    </div>
                </div>
                <div class="blog-link cmn-link" style="padding-bottom: 20px;"><a href="/service2">戻る</a></div>
            </div>
        </div>
        <?php wp_pagenavi(); ?>

            </div>
        </div>
    </main>

<?php get_footer(); ?>