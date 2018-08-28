<?php
    add_theme_support( 'post-thumbnails' );
    function arphabet_widgets_init() {
        register_sidebar(array(
            'name' => 'Right Side Bar',
            'id' => 'rightsidebar',
            'before_widget' => '<div>',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        ));
    }
    add_action( 'widgets_init', 'arphabet_widgets_init' );
    function getPostViews($postID){
        $count_key = 'post_views_count';
        $count = get_post_meta($postID, $count_key, true);
        if($count==''){
                delete_post_meta($postID, $count_key);
                add_post_meta($postID, $count_key, '0');
                return "0 View";
        }
        return $count.' Views';
    }
    function setPostViews($postID) {
        $count_key = 'post_views_count';
        $count = get_post_meta($postID, $count_key, true);
        if($count==''){
                $count = 0;
                delete_post_meta($postID, $count_key);
                add_post_meta($postID, $count_key, '0');
        }else{
                $count++;
                update_post_meta($postID, $count_key, $count);
        }
    }
    remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
    function the_breadcrumb(){
        global $post;
        $title = '';
        $str ='';
        if(!is_front_page()&&!is_home()&&!is_admin()){
            // ホーム（必ず表示）
            $str.= '<div id="breadcrumb" class="cf"><span">';
            $str.= '<a href="'. home_url() .'" itemprop="url"><span itemprop="title"><i class="fas fa-home" aria-hidden="true"></i> Home</span></a> &gt; </span>';
     
            // 以下条件分岐
            // カテゴリー
            if(is_category()) {
                $cat = get_queried_object();
                if($cat -> parent != 0){
                    $ancestors = array_reverse(get_ancestors( $cat -> cat_ID, 'category' ));
                    foreach($ancestors as $ancestor){
                        $str.='<span"><a href="'. get_category_link($ancestor) .'" itemprop="url"><span itemprop="title">'. get_cat_name($ancestor) .'</span></a> &gt; </span>';
                    }
                }
                $title = single_cat_title('',false);
            // タグ
            } elseif(is_tag()) {
                $title = single_tag_title('',false);
            } elseif(is_date()) {
                $title = get_the_time('Y.n');
            // 固定ページ
            } elseif(is_page()){
                if($post -> post_parent != 0 ){
                    $ancestors = array_reverse(get_post_ancestors( $post->ID ));
                    foreach($ancestors as $ancestor){
                        $str.='<span"><a href="'. get_permalink($ancestor).'" itemprop="url"><span itemprop="title">'. get_the_title($ancestor) .'</span></a> &gt; </span>';
                    }
                }
                $title = get_the_title();
            // ブログ投稿
            } elseif(is_singular('post')){
                $categories = get_the_category($post->ID);
                $cat = $categories[0];
                if($cat -> parent != 0){
                    $ancestors = array_reverse(get_ancestors( $cat -> cat_ID, 'category' ));
                    foreach($ancestors as $ancestor){
                        $str.='<span"><a href="'. get_category_link($ancestor).'" itemprop="url"><span itemprop="title">'. get_cat_name($ancestor). '</span></a> &gt; </span>';
                    }
                }
                $str.='<span"><a href="'. get_category_link($cat -> term_id). '" itemprop="url"><span itemprop="title">'. $cat-> cat_name . '</span></a> </span>';
                $title = get_the_title();
     
            // 以下カスタム投稿
            // タクソノミー
            } elseif(is_tax()){
                $query = get_queried_object();
                $taxonomy_slug = $query->taxonomy;
                $terms = array_reverse(get_the_terms($post->ID, $taxonomy_slug));
                $term = $terms[0];
                if($term -> parent != 0){
                    $ancestors = get_ancestors( $term -> term_id, $taxonomy_slug);
                    foreach($ancestors as $ancestor){
                        $term_name = get_term_by('term_taxonomy_id', $ancestor, $taxonomy_slug);
                        $str.='<span"><a href="'. get_term_link($ancestor, $taxonomy_slug).'" itemprop="url"><span itemprop="title">'. $term_name->name . '</span></a> &gt; </span>';
                    }
                }
                $title = esc_html($query->name);
            // カスタム投稿
            } elseif(is_singular()){
                $query = get_queried_object();
                $typelink = get_post_type_archive_link($query->post_type);
                $typename = get_post_type_object($query->post_type);
                $str.='<span"><a href="'. $typelink .'" itemprop="url"><span itemprop="title">'. $typename->labels->name . '</span></a> &gt; </span>';
                $title = get_the_title();
            // カスタム投稿アーカイブ
            } elseif (is_post_type_archive()) {
                $posttypeTitle = post_type_archive_title('', false );
                $title = esc_html($posttypeTitle);
     
            } elseif (is_404()) {
                $title = '404 ページが見つかりません';
            } else {
     
            }
            // $str.='<span>'. $title .'</span>';
            $str.='</div>';
        }
        echo $str;
    }
    
?>
