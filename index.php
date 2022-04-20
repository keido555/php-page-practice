<?php get_header(); ?>
    <main>
        <!-- HOME -->
        <div id="home" class="home">
            <h1 class="home_title">祇園の中心に佇む<br />京の極楽浄土</h1>
        </div>

        <!-- Features -->
        <div id="features" class="features cmn-section -black">
            <div class="inner wow animate__animated animate__fadeIn">
                <div class="cmn-title">
                    <span class="main">本館の特徴</span>
                    <span class="sub">features</span>
                </div>

                <div class="features-cont">
                    <div class="features_item">
                        <div class="features-item-1 wow animate__animated animate__fadeIn" data-wow-offset="100">
                            <div class="image"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/image/feature-item01.png" alt="features1"></div>
                            <div class="text">
                                <div class="title">京都文化の粋と<br />英国文化の伝統が調和したホテル。</div>
                                <p class="sentence">
                                    イングランド北方のスコットランドのアーツ＆クラフトと古都エジン バラをテーマにデザインされています。
                                    京都とエジンバラは姉妹都市 であるばかりでなく古い街並や伝統的な生活、文化などヨーロッパと アジアの美しい古都として非常に似ています。
                                    デザインは共通の工芸 に関わる文化をテーマに構成しています。
                                </p>
                                <div class="foatures-link cmn-link"><a href="<?php echo home_url('/room') ?>">お部屋の詳細</a></div>
                            </div>
                        </div>
                    </div>

                    <div class="features_item">
                        <div class="features-item-2 wow animate__animated animate__fadeIn" data-wow-offset="100">
                            <div class="image"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/image/feature-item02.png" alt="features2"></div>
                            <div class="text">
                                <div class="title">京都ならではの季節の味覚をみなさまに。<br />丁寧に作りあげた逸品に舌鼓。</div>
                                <p class="sentence">
                                    京都の街並みを思わせるような日本料理「風風堂」、英国の伝統ある 邸宅の書斎がモチーフとしたカフェ「ライブラリー」。
                                    極楽亭で過ご す時間をもっとラグジュアリーなひとときに。京都ならではの食材を 使った料理は、今この時しか味わえない逸品。
                                    昼下がりにカフェでの んびりと読書してみるのもおすすめ。
                                </p>
                                <div class="foatures-link cmn-link"><a href="<?php echo home_url('/cooking') ?>">コース料理の詳細</a></div>
                            </div>
                        </div>
                    </div>

                    <div class="features_item">
                        <div class="features-item-1 wow animate__animated animate__fadeIn" data-wow-offset="100">
                            <div class="image"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/image/feature-item03.png" alt="features1"></div>
                            <div class="text">
                                <div class="title">五感を癒す。<br />天然温泉から美と活力を。</div>
                                <p class="sentence">
                                    京の極楽の最上階にある「スパ・ゴクラク」。湧き上がる天然温泉の恵みで細胞内のバランスを整え新陳代謝を向上させてくれます。
                                    大いなる自然を感じながらリラックスすれば、身体の奥から元気が蘇って くるでしょう。
                                    京都らしい和のテイストを取り入れた五感を癒すペン トハウススパ。心と体のリフレッシュに最適です。
                                </p>
                                <div class="foatures-link cmn-link"><a href="<?php echo home_url('/spring') ?>">温泉の詳細</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Recommend Plan -->
        <section class="plan cmn-section -black">
            <div class="inner wow animate__animated animate__fadeIn">
                <h2 class="cmn-title">
                    <span class="main">おすすめプラン</span>
                    <span class="sub">recommend plan</span>
                </h2>
                <div class="rec service">
                    <div class="rec-slick rec-list" id="rec-slick">
                        <div class="rec-item">
                            <div class="text">
                                <div class="title">温泉で湯ったりポカポカプラン＜朝食 選択可＞</div>
                                <div class="price">お値段：<span>6000円</span> / 人</div>
                            </div>
                            <div class="image">
                                <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/image/rec-plan01.png" alt="">
                            </div>
                        </div>

                        <div class="rec-item">
                            <div class="text">
                                <div class="title">【ケーキセット】選べるケーキお飲物 のセット！</div>
                                <div class="price">お値段：<span>2000円</span> / 人</div>
                            </div>
                            <div class="image">
                                <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/image/rec-plan02.png" alt="">
                            </div>
                        </div>

                        <div class="rec-item">
                            <div class="text">
                                <div class="title">バータイム「2DRINKSプラン」選べる ドリンク2杯におつまみが付いたプラン</div>
                                <div class="price">お値段：<span>8000円</span> / 人</div>
                            </div>
                            <div class="image">
                                <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/image/rec-plan03.png" alt="">
                            </div>
                        </div>

                        <div class="rec-item">
                            <div class="text">
                                <div class="title">【リモート宴会プラン】京の極楽から シェフ厳選メニューをご提供！</div>
                                <div class="price">お値段：<span>6000円</span> / 人</div>
                            </div>
                            <div class="image">
                                <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/image/rec-plan04.png" alt="">
                            </div>
                        </div>

                        <div class="rec-item">
                            <div class="text">
                                <div class="title">【数量限定】季節の会席とミニボトル のドリンク付きプラン</div>
                                <div class="price">お値段：<span>8000円</span> / 人</div>
                            </div>
                            <div class="image">
                                <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/image/rec-plan05.png" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="service-wrap">
                        <ul class="service-list">
                            <li class="service-item">
                                <div class="text">
                                    <div class="title">最低価格保証</div>
                                    <p class="desc">極楽亭の公式ホームページでのご宿泊料金 は、どの予約サイトよりも最低価格である ことをお約束いたします。</p>
                                </div>
                                <div class="image">
                                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/image/service-item01.png" alt="">
                                </div>
                            </li>

                            <li class="service-item">
                                <div class="text">
                                    <div class="title">全客室Wi-Fi無料</div>
                                    <p class="desc">ロビー・客室フロアに無線LANアクセスポ イントを設置し、各客室内でもWi-Fi接続 によるインターネットを利用できる環境を 構築しています。</p>
                                </div>
                                <div class="image">
                                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/image/service-item02.png" alt="">
                                </div>
                            </li>

                            <li class="service-item">
                                <div class="text">
                                    <div class="title">会員限定料金</div>
                                    <p class="desc">会員の方は、会員料金でご宿泊いただける ほか、オンラインクーポンなどの限定メニ ューもご利用いただけます。/p>
                                </div>
                                <div class="image">
                                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/image/service-item03.png" alt="">
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

<!-- Blog -->
<div id="blog" class="blog cmn-section -black">
            <div class="inner wow animate__animated animate__fadeIn">
                <div class="cmn-title">
                    <span class="main">ブログ</span>
                    <span class="sub">blog</span>
                </div>

                <div class="blog-con">
                    <div class="blog-list">
                    <?php
    $infoPosts = get_posts('numberposts=5&category=4,5,6');
    foreach($infoPosts as $post):
?>
                        <div class="blog-item">
                        <?php the_time('Y/m/d'); ?>
                            <dt>
                                <span class="tag_<?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->slug; } ?>">
                                <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?>
                                </span>
                            </dt>
                            <dd>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </dd>
                        </div>
<?php endforeach; ?>
                <div class="blog-link cmn-link"><a href="<?php echo home_url('/service2') ?>">もっと見る</a></div>
            </div>
        </div>

        <!-- FAQ -->
        <div id="faq" class="faq cmn-section -black">
            <div class="inner wow animate__animated animate__fadeIn">
                <div class="cmn-title">
                    <span class="main">よくある質問</span>
                    <span class="sub">faq</span>
                </div>

                <div class="faq_con">
                    <ul class="faq_list">
                        <li class="faq_item">
                            <a href="javascript:void(0)" class="title js-accordion">
                                <p>Q. チェックイン、チェクアウトの時間は何時ですか？</p>
                            </a>
                            <div class="detail">
                                <p>
                                    A. チェックインの時間は15:00～17:00です。もし17:00を過ぎるようでしたら、
                                    ご一報を入れていただくよう お願いしております。チェックアウトの時間は翌朝10:00でございます。
                                </p>
                            </div>
                        </li>
                        <li class="faq_item">
                            <a href="javascript:void(0)" class="title js-accordion">
                                <p>Q. 露天風呂がついたお部屋はありますか？</p>
                            </a>
                            <div class="detail">
                                <p>A. 露天風呂付のお部屋は全部で24室ございます。</p>
                            </div>
                        </li>
                        <li class="faq_item">
                            <a href="javascript:void(0)" class="title js-accordion">
                                <p>Q. ペットを連れて行きたいのですが可能ですか？</p>
                            </a>
                            <div class="detail">
                                <p>
                                    A. ペット同伴のご宿泊はお断りさせて頂いております。お車で5分ほどの場所に、
                                    一時預かりを行っているペットハウスがございますのでそちらのご利用をお願い致します。
                                </p>
                            </div>
                        </li>
                        <li class="faq_item">
                            <a href="javascript:void(0)" class="title js-accordion">
                                <p>Q. キャスター付きのバッグで行っても大丈夫ですか？</p>
                            </a>
                            <div class="detail">
                                <p>
                                    A. 全館畳敷きの為、キャスター付きバッグのご利用をご遠慮頂いております。
                                    お荷物は、係りの者がお部屋までお 持ち致しますのでご協力をお願い致します。
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
<?php get_footer(); ?>