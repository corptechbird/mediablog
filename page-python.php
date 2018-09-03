<?php get_header(); ?>
<!-- Contents -->             
    <div id="contents">
        <div class="post">
        <?php $post_name = ""; 
            $slug_name = basename(get_permalink());
            if ($slug_name == 'python') {
                $post_name = "Python";
            } elseif ($slug_name == 'swift') {
                $post_name = "Swift";
            } elseif ($slug_name == 'javascript') {
                $post_name = "JavaScript";
            } elseif ($slug_name == 'ruby') {
                $post_name = "Ruby";
            }
        ?>
        <div class="newentry">『逆引き<?php echo $post_name; ?>』記事一覧</div>     
                <?php
            $wp_query = new WP_Query();
            $param = array(
                'posts_per_page' => '-1', //表示件数を''に入力。-1なら全件表示になります
                'post_type' => $slug_name, //カスタム投稿タイプのスラグ（名称）を入れる
                'post_status' => 'publish', //取得する記事の状態。publishなら一般公開のもののみ
                'orderby' => 'ID', //ID順に並び替えをする
                'order' => 'ASC' //IDの大きい順（新しい記事順）に上から表示する
            );
            $wp_query->query($param);
            if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post();
        ?>
        <?php endwhile; endif; ?>
            <?php if ( have_posts() ) :    // もし投稿があるなら ?>
                <div class="cards">
                    <div class="cards-inside">
                        <?php while ( have_posts() ) : the_post();    // 繰り返し処理（ループ）開始 ?>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">  
                                <div class="l-card">
                                    <div class="l-thumbnail">
                                        <figure class="thumbnail-wrapper">
                                            <img src="<?php echo get_bloginfo('template_directory'); ?>/images/<?php echo $slug_name; ?>.png" alt="アイキャッチ画像" width="360" height="220" />
                                        </figure>
                                        <span class="more-text">Read More</span>
                                    </div>
                                    <div class="text-content">
                                        <p class="caption"><?php the_title(); ?></p>
                                    </div>
                                </div>
                            </a>
                        <?php endwhile;    // 繰り返し処理終了 ?>
                    </div>
                </div>
                <p class="pagenation">
                    <?php
                        $big = 9999999999;
                        $arg = array(
                            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                            'current' => max( 1, get_query_var('paged') ),
                            'total'   => $wp_query->max_num_pages,
                            'prev_text' => '« Previous',
                            'next_text' => 'Next »'
                        );
                        echo paginate_links($arg);
                    ?>
                </p>
            <?php else :    // 投稿がない場合 ?>
            <div class="notfound">
                <h3>ページが見つかりません</h3>
                <p>申し訳ありません。お探しのページは見つかりませんでした。</p>
            </div>
            <?php endif;    // 条件分岐終了 ?>
            <div class="newentry"></div>
            <div class="ads" style="margin-bottom:20px;">
                        <div class="adleft">
                            <ins class="adsbygoogle"
                                style="display:inline-block;width:336px;height:280px"
                                data-ad-client="ca-pub-2330122305834701"
                                data-ad-slot="4283281946"></ins>
                            <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>
                        </div>
                        <div class="adright">
                            <ins class="adsbygoogle"
                                style="display:inline-block;width:336px;height:280px"
                                data-ad-client="ca-pub-2330122305834701"
                                data-ad-slot="5240483851"></ins>
                            <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>
                        </div>
                        <hr class="clear">
                    </div>
            <div class="afterpost">
                <div class="cards">
                    <div class="cards-inside">
                        <?php $array = array("swift", "python", "javascript", "ruby");
                        foreach($array as $value){ //fruitsの先頭から１つずつ$fruitに代入する
                            ?>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>/<?php echo $value; ?>" title="逆引き<?php echo $value; ?>">  
                                <div class="l-card">
                                    <div class="l-thumbnail">
                                        <figure class="thumbnail-wrapper">
                                            <img src="<?php echo get_bloginfo('template_directory'); ?>/images/<?php echo $value; ?>.png" alt="アイキャッチ画像" width="360" height="220" />
                                        </figure>
                                        <span class="more-text">Read More</span>
                                    </div>
                                    <div class="text-content">
                                    <p class="caption"><?php echo $value; ?>でやりたいことからプログラムを逆引きできるドキュメントです。対象者は初心者から上級者までです。使用用途に応じて幅広くお使いいただけます。</p>
                                    </div>
                                </div>
                            </a>
                            <?php
                        } ?>
                    </div>
                </div>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </div><!-- /#main -->
<?php get_footer(); ?>