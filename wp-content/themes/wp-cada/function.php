function cptui_register_my_cpts_member() {

	/**
	 * Post Type: 会員向け.
	 */

	$labels = array(
		"name" => __( "会員向け", "" ),
		"singular_name" => __( "会員向け", "" ),
	);

	$args = array(
		"label" => __( "会員向け", "" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => true,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "member", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "member", $args );
}

add_action( 'init', 'cptui_register_my_cpts_member' );

/パスワード入力画面カスタマイズ
function my_password_form() {
$output = <<< EOF
<form action="http://localhost/wp1/wp-pass.php" method="post">
<h2>パスワードをご入力ください。</h2>
<div>
<p id="pw">
<label for="pwbox-4">パスワード&nbsp;&nbsp;<br />
<input name="post_password" id="pwbox-4" type="password" size="20" /></label></p>
<p id="btn">
<input type="submit" name="Submit" value="次へ" /></p>
</form>
</div>
EOF;
return $output;
}
add_filter( 'the_password_form', 'my_password_form' );
