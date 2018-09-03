<?php get_header(); ?>
<!-- Contents -->             
    <div id="contents">
        <div class="post">        
            <?php if ( have_posts() ) :    // もし投稿があるなら ?>
                <div class="newentry"></div>
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
                                        <?php 
                                            if ($value == 'python') {
                                                $value = "Python";
                                            } elseif ($value == 'swift') {
                                                $value = "Swift";
                                            } elseif ($value == 'javascript') {
                                                $value = "JavaScript";
                                            } elseif ($value == 'ruby') {
                                                $value = "Ruby";
                                            }
                                        ?>
                                        <p class="caption"><?php echo $value; ?>で実現したいことからプログラムを逆引きできるドキュメントです。初心者から上級者まで、使用用途に応じて幅広くお使いいただけます。</p>
                                    </div>
                                </div>
                            </a>
                            <?php
                        } ?>
                    </div>
                </div>

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
        </div>
    </div>
<?php get_footer(); ?>