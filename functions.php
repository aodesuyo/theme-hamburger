<?php
    function custom_theme_support() {
        add_theme_support('html5',array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));//html5
        add_theme_support('post-thumbnails');//アイキャッチ画像
        add_theme_support('title-tag');//タイトルを投稿ページに合わせて出力する
        add_theme_support('menus');//メニュー機能を有効にする

        register_nav_menus(array(
            'sidebar'=>'サイドバー',
            'footerMenu'=>'フッターメニュー'
        ));//メニュー位置を呼び出す
        
    }
    add_action( 'after_setup_theme','custom_theme_support');
    /*関数はafter_setup_themeをフックにして実行される*/
    
    function readScript() {
        $theme_version = wp_get_theme()->get('Version');
        wp_enqueue_style('ress',get_template_directory_uri().'/css/ress.css',array(),$theme_version);//ress.css
        wp_enqueue_style('googlefonts','//fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&family=Roboto:wght@500&display=swap',array(),"");//googlefonts
        wp_enqueue_style('hamburger',get_template_directory_uri().'/css/style.css',array(),$theme_version);//css
        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
        wp_enqueue_style('fontawesome','//use.fontawesome.com/releases/v5.2.0/css/all.css',array(),"");//fontawesome
        wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js',"","",true);//jQuery
        wp_enqueue_script('script',get_template_directory_uri().'/script.js','jquery',$theme_version,true);//jQuery
    }
    add_action('wp_enqueue_scripts','readScript');
    /*関数はwp_enqueueをフックにして実行される*/

    add_theme_support( 'menus' );//メニュー機能を有効にする
    
    function footer_widgets_init() {
        register_sidebar (
            array(
                'name'          => 'フッターウィジェット',
                'id'            => 'footer_widget',
                'description'   => 'フッター用ウィジェットです',
                'before_widget' => '<div id="%1$s" class="p-footer-widget">',
                'after_widget'  => '</div>',
                'before_title'  => '<p class="p-footer__copy">',
                'after_title'   => '</p>',
            )
        );
    }
    add_action( 'widgets_init', 'footer_widgets_init' );//footerのcopyrightをウィジェットから設定

    function removeId( $id ){ 
    return $id = array(); 
    }
    add_filter('nav_menu_item_id', 'removeId', 10);//menuからidを削除

    function hamburger_archive_title($title) {
        if ( is_category() ) {
            $title = single_cat_title( '', false ); 
        } 
        $title = 'Menu: <span>'. $title; 
        return $title; 
    }; 
    add_filter( 'get_the_archive_title', 'hamburger_archive_title');//archiveのvisual部分 カテゴリ:からMenu:へ出力内容を変更
    
    remove_filter( 'pre_term_description', 'wp_filter_kses' );//カテゴリの説明文でhtmlを使用できるようにする

    function humburger_pagenavi($args=array()){
        if( !function_exists('wp_pagenavi') ) return;
     
        $classChange = array(
            'wrapper_tag' => 'ul',
            'wrapper_class' => 'p-pagenation'
        );
        $args = is_array($args) ? array_merge($classChange, $args) : $args;
        wp_pagenavi($args);
    }//ページネーションのクラス変更



    
  
