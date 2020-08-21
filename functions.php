<?php add_theme_support('post-thumbnails'); ?>
<?php function add_page_columns_name($columns) {
    $columns['slug'] = "スラッグ";
    return $columns;
}
function add_page_column($column_name, $post_id) {
    if( $column_name == 'slug' ) {
        $post = get_post($post_id);
        $slug = $post->post_name;
        echo attribute_escape($slug);
    }
}
add_filter( 'manage_pages_columns', 'add_page_columns_name');
add_action( 'manage_pages_custom_column', 'add_page_column', 10, 2); ?>