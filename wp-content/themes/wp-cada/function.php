function cptui_register_my_cpts() {

/**
 * Post Type: あ行の画廊.
 */

$labels = [
	"name" => esc_html__( "あ行の画廊", "custom-post-type-ui" ),
	"singular_name" => esc_html__( "あ行の画廊", "custom-post-type-ui" ),
	"menu_name" => esc_html__( "あ行の画廊", "custom-post-type-ui" ),
	"all_items" => esc_html__( "あ行の画廊", "custom-post-type-ui" ),
	"add_new" => esc_html__( "あ行の画廊を追加する", "custom-post-type-ui" ),
	"add_new_item" => esc_html__( "あ行の画廊を追加する", "custom-post-type-ui" ),
	"edit_item" => esc_html__( "あ行の画廊の編集", "custom-post-type-ui" ),
	"view_item" => esc_html__( "あ行の画廊を表示", "custom-post-type-ui" ),
];

$args = [
	"label" => esc_html__( "あ行の画廊", "custom-post-type-ui" ),
	"labels" => $labels,
	"description" => "",
	"public" => true,
	"publicly_queryable" => true,
	"show_ui" => true,
	"show_in_rest" => true,
	"rest_base" => "",
	"rest_controller_class" => "WP_REST_Posts_Controller",
	"rest_namespace" => "wp/v2",
	"has_archive" => true,
	"show_in_menu" => true,
	"show_in_nav_menus" => true,
	"delete_with_user" => false,
	"exclude_from_search" => false,
	"capability_type" => "post",
	"map_meta_cap" => true,
	"hierarchical" => false,
	"can_export" => false,
	"rewrite" => [ "slug" => "ja_a", "with_front" => true ],
	"query_var" => true,
	"supports" => [ "title", "editor", "thumbnail" ],
	"show_in_graphql" => false,
];

register_post_type( "ja_a", $args );

/**
 * Post Type: か行の画廊.
 */

$labels = [
	"name" => esc_html__( "か行の画廊", "custom-post-type-ui" ),
	"singular_name" => esc_html__( "か行の画廊", "custom-post-type-ui" ),
	"menu_name" => esc_html__( "か行の画廊", "custom-post-type-ui" ),
	"all_items" => esc_html__( "か行の画廊", "custom-post-type-ui" ),
	"add_new" => esc_html__( "か行の画廊の追加する", "custom-post-type-ui" ),
	"add_new_item" => esc_html__( "か行の画廊の追加する", "custom-post-type-ui" ),
	"edit_item" => esc_html__( "か行の画廊の編集", "custom-post-type-ui" ),
	"new_item" => esc_html__( "か行の画廊", "custom-post-type-ui" ),
	"view_item" => esc_html__( "か行の画廊", "custom-post-type-ui" ),
	"view_items" => esc_html__( "か行の画廊", "custom-post-type-ui" ),
	"search_items" => esc_html__( "か行の画廊の検索", "custom-post-type-ui" ),
	"item_published" => esc_html__( "か行の画廊を公開しました", "custom-post-type-ui" ),
];

$args = [
	"label" => esc_html__( "か行の画廊", "custom-post-type-ui" ),
	"labels" => $labels,
	"description" => "",
	"public" => true,
	"publicly_queryable" => true,
	"show_ui" => true,
	"show_in_rest" => true,
	"rest_base" => "",
	"rest_controller_class" => "WP_REST_Posts_Controller",
	"rest_namespace" => "wp/v2",
	"has_archive" => false,
	"show_in_menu" => true,
	"show_in_nav_menus" => true,
	"delete_with_user" => true,
	"exclude_from_search" => false,
	"capability_type" => "post",
	"map_meta_cap" => true,
	"hierarchical" => false,
	"can_export" => false,
	"rewrite" => [ "slug" => "ja_ka", "with_front" => true ],
	"query_var" => true,
	"supports" => [ "title", "editor", "thumbnail" ],
	"show_in_graphql" => false,
];

register_post_type( "ja_ka", $args );

/**
 * Post Type: さ行の画廊.
 */

$labels = [
	"name" => esc_html__( "さ行の画廊", "custom-post-type-ui" ),
	"singular_name" => esc_html__( "さ行の画廊", "custom-post-type-ui" ),
	"menu_name" => esc_html__( "さ行の画廊", "custom-post-type-ui" ),
	"all_items" => esc_html__( "さ行の画廊", "custom-post-type-ui" ),
	"add_new" => esc_html__( "さ行の画廊を追加する", "custom-post-type-ui" ),
	"add_new_item" => esc_html__( "さ行の画廊を追加する", "custom-post-type-ui" ),
	"edit_item" => esc_html__( "さ行の画廊を編集する", "custom-post-type-ui" ),
	"new_item" => esc_html__( "さ行の画廊", "custom-post-type-ui" ),
	"item_published" => esc_html__( "さ行の画廊を公開しました", "custom-post-type-ui" ),
];

$args = [
	"label" => esc_html__( "さ行の画廊", "custom-post-type-ui" ),
	"labels" => $labels,
	"description" => "",
	"public" => true,
	"publicly_queryable" => true,
	"show_ui" => true,
	"show_in_rest" => true,
	"rest_base" => "",
	"rest_controller_class" => "WP_REST_Posts_Controller",
	"rest_namespace" => "wp/v2",
	"has_archive" => false,
	"show_in_menu" => true,
	"show_in_nav_menus" => false,
	"delete_with_user" => true,
	"exclude_from_search" => false,
	"capability_type" => "post",
	"map_meta_cap" => true,
	"hierarchical" => false,
	"can_export" => false,
	"rewrite" => [ "slug" => "ja_sa", "with_front" => true ],
	"query_var" => true,
	"supports" => [ "title", "editor", "thumbnail" ],
	"show_in_graphql" => false,
];

register_post_type( "ja_sa", $args );

/**
 * Post Type: た行の画廊.
 */

$labels = [
	"name" => esc_html__( "た行の画廊", "custom-post-type-ui" ),
	"singular_name" => esc_html__( "た行の画廊", "custom-post-type-ui" ),
	"menu_name" => esc_html__( "た行の画廊", "custom-post-type-ui" ),
	"add_new" => esc_html__( "た行の画廊を追加する", "custom-post-type-ui" ),
	"add_new_item" => esc_html__( "た行の画廊を追加する", "custom-post-type-ui" ),
	"edit_item" => esc_html__( "た行の画廊の編集", "custom-post-type-ui" ),
	"new_item" => esc_html__( "た行の画廊", "custom-post-type-ui" ),
	"view_item" => esc_html__( "た行の画廊", "custom-post-type-ui" ),
	"view_items" => esc_html__( "た行の画廊", "custom-post-type-ui" ),
	"search_items" => esc_html__( "た行の画廊の検索", "custom-post-type-ui" ),
];

$args = [
	"label" => esc_html__( "た行の画廊", "custom-post-type-ui" ),
	"labels" => $labels,
	"description" => "",
	"public" => true,
	"publicly_queryable" => true,
	"show_ui" => true,
	"show_in_rest" => true,
	"rest_base" => "",
	"rest_controller_class" => "WP_REST_Posts_Controller",
	"rest_namespace" => "wp/v2",
	"has_archive" => false,
	"show_in_menu" => true,
	"show_in_nav_menus" => true,
	"delete_with_user" => true,
	"exclude_from_search" => true,
	"capability_type" => "post",
	"map_meta_cap" => true,
	"hierarchical" => false,
	"can_export" => false,
	"rewrite" => [ "slug" => "ja_ta", "with_front" => true ],
	"query_var" => true,
	"supports" => [ "title", "editor", "thumbnail" ],
	"show_in_graphql" => false,
];

register_post_type( "ja_ta", $args );

/**
 * Post Type: な行の画廊.
 */

$labels = [
	"name" => esc_html__( "な行の画廊", "custom-post-type-ui" ),
	"singular_name" => esc_html__( "な行の画廊", "custom-post-type-ui" ),
	"menu_name" => esc_html__( "な行の画廊", "custom-post-type-ui" ),
	"all_items" => esc_html__( "な行の画廊", "custom-post-type-ui" ),
	"add_new" => esc_html__( "な行の画廊を追加する", "custom-post-type-ui" ),
	"add_new_item" => esc_html__( "な行の画廊を追加する", "custom-post-type-ui" ),
	"edit_item" => esc_html__( "な行の画廊の編集", "custom-post-type-ui" ),
	"new_item" => esc_html__( "な行の画廊", "custom-post-type-ui" ),
	"view_item" => esc_html__( "な行の画廊の表示", "custom-post-type-ui" ),
	"view_items" => esc_html__( "な行の画廊", "custom-post-type-ui" ),
	"search_items" => esc_html__( "な行の画廊の検索", "custom-post-type-ui" ),
	"item_published" => esc_html__( "な行の画廊を公開しました", "custom-post-type-ui" ),
];

$args = [
	"label" => esc_html__( "な行の画廊", "custom-post-type-ui" ),
	"labels" => $labels,
	"description" => "",
	"public" => true,
	"publicly_queryable" => true,
	"show_ui" => true,
	"show_in_rest" => true,
	"rest_base" => "",
	"rest_controller_class" => "WP_REST_Posts_Controller",
	"rest_namespace" => "wp/v2",
	"has_archive" => false,
	"show_in_menu" => true,
	"show_in_nav_menus" => true,
	"delete_with_user" => true,
	"exclude_from_search" => false,
	"capability_type" => "post",
	"map_meta_cap" => true,
	"hierarchical" => false,
	"can_export" => false,
	"rewrite" => [ "slug" => "ja_na", "with_front" => true ],
	"query_var" => true,
	"supports" => [ "title", "editor", "thumbnail" ],
	"show_in_graphql" => false,
];

register_post_type( "ja_na", $args );

/**
 * Post Type: 英語版(A)の画廊.
 */

$labels = [
	"name" => esc_html__( "英語版(A)の画廊", "custom-post-type-ui" ),
	"singular_name" => esc_html__( "英語版(A)の画廊", "custom-post-type-ui" ),
	"menu_name" => esc_html__( "英語版(A)の画廊", "custom-post-type-ui" ),
	"all_items" => esc_html__( "英語版(A)の画廊", "custom-post-type-ui" ),
	"add_new" => esc_html__( "英語版(A)の画廊を追加する", "custom-post-type-ui" ),
	"add_new_item" => esc_html__( "英語版(A)の画廊を追加する", "custom-post-type-ui" ),
	"edit_item" => esc_html__( "英語版(A)の画廊の編集", "custom-post-type-ui" ),
	"new_item" => esc_html__( "英語版(A)の画廊", "custom-post-type-ui" ),
	"view_item" => esc_html__( "英語版(A)の画廊", "custom-post-type-ui" ),
	"view_items" => esc_html__( "英語版(A)の画廊", "custom-post-type-ui" ),
	"search_items" => esc_html__( "英語版(A)の画廊の検索", "custom-post-type-ui" ),
	"item_reverted_to_draft" => esc_html__( "英語版(A)の画廊が下書きに戻されました", "custom-post-type-ui" ),
	"item_updated" => esc_html__( "英語版(A)の画廊を更新しました", "custom-post-type-ui" ),
];

$args = [
	"label" => esc_html__( "英語版(A)の画廊", "custom-post-type-ui" ),
	"labels" => $labels,
	"description" => "",
	"public" => true,
	"publicly_queryable" => true,
	"show_ui" => true,
	"show_in_rest" => true,
	"rest_base" => "",
	"rest_controller_class" => "WP_REST_Posts_Controller",
	"rest_namespace" => "wp/v2",
	"has_archive" => false,
	"show_in_menu" => true,
	"show_in_nav_menus" => true,
	"delete_with_user" => false,
	"exclude_from_search" => false,
	"capability_type" => "post",
	"map_meta_cap" => true,
	"hierarchical" => false,
	"can_export" => false,
	"rewrite" => [ "slug" => "en_a", "with_front" => true ],
	"query_var" => true,
	"supports" => [ "title", "editor", "thumbnail" ],
	"show_in_graphql" => false,
];

register_post_type( "en_a", $args );

/**
 * Post Type: は行の画廊.
 */

$labels = [
	"name" => esc_html__( "は行の画廊", "custom-post-type-ui" ),
	"singular_name" => esc_html__( "は行の画廊", "custom-post-type-ui" ),
	"menu_name" => esc_html__( "は行の画廊", "custom-post-type-ui" ),
	"all_items" => esc_html__( "は行の画廊", "custom-post-type-ui" ),
	"add_new" => esc_html__( "は行の画廊を追加する", "custom-post-type-ui" ),
	"add_new_item" => esc_html__( "は行の画廊を追加する", "custom-post-type-ui" ),
	"edit_item" => esc_html__( "は行の画廊の編集", "custom-post-type-ui" ),
	"new_item" => esc_html__( "は行の画廊", "custom-post-type-ui" ),
	"view_item" => esc_html__( "は行の画廊を表示", "custom-post-type-ui" ),
	"view_items" => esc_html__( "は行の画廊", "custom-post-type-ui" ),
	"search_items" => esc_html__( "は行の画廊を検索", "custom-post-type-ui" ),
];

$args = [
	"label" => esc_html__( "は行の画廊", "custom-post-type-ui" ),
	"labels" => $labels,
	"description" => "",
	"public" => true,
	"publicly_queryable" => true,
	"show_ui" => true,
	"show_in_rest" => true,
	"rest_base" => "",
	"rest_controller_class" => "WP_REST_Posts_Controller",
	"rest_namespace" => "wp/v2",
	"has_archive" => false,
	"show_in_menu" => true,
	"show_in_nav_menus" => true,
	"delete_with_user" => false,
	"exclude_from_search" => false,
	"capability_type" => "post",
	"map_meta_cap" => true,
	"hierarchical" => false,
	"can_export" => false,
	"rewrite" => [ "slug" => "ja_ha", "with_front" => true ],
	"query_var" => true,
	"supports" => [ "title", "editor", "thumbnail" ],
	"show_in_graphql" => false,
];

register_post_type( "ja_ha", $args );

/**
 * Post Type: ま行の画廊.
 */

$labels = [
	"name" => esc_html__( "ま行の画廊", "custom-post-type-ui" ),
	"singular_name" => esc_html__( "ま行の画廊", "custom-post-type-ui" ),
	"menu_name" => esc_html__( "ま行の画廊", "custom-post-type-ui" ),
	"all_items" => esc_html__( "ま行の画廊", "custom-post-type-ui" ),
	"add_new" => esc_html__( "ま行の画廊を追加する", "custom-post-type-ui" ),
	"add_new_item" => esc_html__( "ま行の画廊を追加する", "custom-post-type-ui" ),
	"edit_item" => esc_html__( "ま行の画廊を編集する", "custom-post-type-ui" ),
	"view_item" => esc_html__( "ま行の画廊を表示する", "custom-post-type-ui" ),
	"view_items" => esc_html__( "ま行の画廊を表示する", "custom-post-type-ui" ),
	"search_items" => esc_html__( "ま行の画廊を検索する", "custom-post-type-ui" ),
	"insert_into_item" => esc_html__( "ま行の画廊に挿入する", "custom-post-type-ui" ),
	"uploaded_to_this_item" => esc_html__( "ま行の画廊にアップロードする", "custom-post-type-ui" ),
];

$args = [
	"label" => esc_html__( "ま行の画廊", "custom-post-type-ui" ),
	"labels" => $labels,
	"description" => "",
	"public" => true,
	"publicly_queryable" => true,
	"show_ui" => true,
	"show_in_rest" => true,
	"rest_base" => "",
	"rest_controller_class" => "WP_REST_Posts_Controller",
	"rest_namespace" => "wp/v2",
	"has_archive" => true,
	"show_in_menu" => true,
	"show_in_nav_menus" => true,
	"delete_with_user" => false,
	"exclude_from_search" => false,
	"capability_type" => "post",
	"map_meta_cap" => true,
	"hierarchical" => false,
	"can_export" => false,
	"rewrite" => [ "slug" => "ja_ma", "with_front" => true ],
	"query_var" => true,
	"supports" => [ "title", "editor", "thumbnail" ],
	"show_in_graphql" => false,
];

register_post_type( "ja_ma", $args );

/**
 * Post Type: や行の画廊.
 */

$labels = [
	"name" => esc_html__( "や行の画廊", "custom-post-type-ui" ),
	"singular_name" => esc_html__( "や行の画廊", "custom-post-type-ui" ),
	"menu_name" => esc_html__( "や行の画廊", "custom-post-type-ui" ),
	"all_items" => esc_html__( "や行の画廊", "custom-post-type-ui" ),
	"add_new" => esc_html__( "や行の画廊を追加する", "custom-post-type-ui" ),
	"add_new_item" => esc_html__( "や行の画廊を追加する", "custom-post-type-ui" ),
	"edit_item" => esc_html__( "や行の画廊を編集する", "custom-post-type-ui" ),
	"new_item" => esc_html__( "や行の画廊", "custom-post-type-ui" ),
	"search_items" => esc_html__( "や行の画廊を検索する", "custom-post-type-ui" ),
	"item_published" => esc_html__( "や行の画廊を公開", "custom-post-type-ui" ),
	"item_updated" => esc_html__( "や行の画廊を更新しました", "custom-post-type-ui" ),
];

$args = [
	"label" => esc_html__( "や行の画廊", "custom-post-type-ui" ),
	"labels" => $labels,
	"description" => "",
	"public" => true,
	"publicly_queryable" => true,
	"show_ui" => true,
	"show_in_rest" => true,
	"rest_base" => "",
	"rest_controller_class" => "WP_REST_Posts_Controller",
	"rest_namespace" => "wp/v2",
	"has_archive" => true,
	"show_in_menu" => true,
	"show_in_nav_menus" => true,
	"delete_with_user" => true,
	"exclude_from_search" => false,
	"capability_type" => "post",
	"map_meta_cap" => true,
	"hierarchical" => false,
	"can_export" => false,
	"rewrite" => [ "slug" => "ja_ya", "with_front" => true ],
	"query_var" => true,
	"supports" => [ "title", "editor", "thumbnail" ],
	"show_in_graphql" => false,
];

register_post_type( "ja_ya", $args );

/**
 * Post Type: ら行の画廊.
 */

$labels = [
	"name" => esc_html__( "ら行の画廊", "custom-post-type-ui" ),
	"singular_name" => esc_html__( "ら行の画廊", "custom-post-type-ui" ),
	"menu_name" => esc_html__( "ら行の画廊", "custom-post-type-ui" ),
	"all_items" => esc_html__( "ら行の画廊", "custom-post-type-ui" ),
	"add_new" => esc_html__( "ら行の画廊を追加する", "custom-post-type-ui" ),
	"add_new_item" => esc_html__( "ら行の画廊を追加する", "custom-post-type-ui" ),
	"edit_item" => esc_html__( "ら行の画廊の編集する", "custom-post-type-ui" ),
	"new_item" => esc_html__( "ら行の画廊", "custom-post-type-ui" ),
	"view_item" => esc_html__( "ら行の画廊を表示する", "custom-post-type-ui" ),
	"view_items" => esc_html__( "ら行の画廊", "custom-post-type-ui" ),
	"search_items" => esc_html__( "ら行の画廊を検索する", "custom-post-type-ui" ),
	"item_published" => esc_html__( "ら行の画廊を公開しました", "custom-post-type-ui" ),
];

$args = [
	"label" => esc_html__( "ら行の画廊", "custom-post-type-ui" ),
	"labels" => $labels,
	"description" => "",
	"public" => true,
	"publicly_queryable" => true,
	"show_ui" => true,
	"show_in_rest" => true,
	"rest_base" => "",
	"rest_controller_class" => "WP_REST_Posts_Controller",
	"rest_namespace" => "wp/v2",
	"has_archive" => false,
	"show_in_menu" => true,
	"show_in_nav_menus" => true,
	"delete_with_user" => true,
	"exclude_from_search" => false,
	"capability_type" => "post",
	"map_meta_cap" => true,
	"hierarchical" => false,
	"can_export" => false,
	"rewrite" => [ "slug" => "ja_ra", "with_front" => true ],
	"query_var" => true,
	"supports" => [ "title", "editor", "thumbnail" ],
	"show_in_graphql" => false,
];

register_post_type( "ja_ra", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );