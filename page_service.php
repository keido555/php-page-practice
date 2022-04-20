<?php
/*
Template Name: Service2
*/
?>

<?php get_header(); ?>

    <main class="pages">
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

                <!-- Blog -->
                <div id="blog" class="blog cmn-section -black">
            <div class="inner wow animate__animated animate__fadeIn">

                <div class="blog-con">
                    <div class="blog-list">

<?php
    $infoPosts = get_posts('numberposts=10&category=4,5,6');
    foreach($infoPosts as $post):
?>
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
<?php endforeach; ?>

                        <div class="blog-list-btn">
                            <div class="blog-link cmn-link" style="padding: 20px;"><a href="/event">イベント</a></div>
                            <div class="blog-link cmn-link" style="padding: 20px;"><a href="/infomation">お知らせ</a></div>
                            <div class="blog-link cmn-link" style="padding: 20px;"><a href="/recruit">採用</a></div>
                        </div>
                    </div>
                </div>
                <?php wp_pagenavi(); ?>
            </div>
        </div>
            </div>
        </div>
    </main>

<?php get_footer(); ?>