<?

// add_action( 'show_user_profile', 'my_show_extra_profile_fields' );
// add_action( 'edit_user_profile', 'my_show_extra_profile_fields' );

function short_bio($bio){
	$short = preg_split( '/\r\n|\r|\n/', $bio ); //explode('\r\n', $bio);

	return $short[0];
//	return nl2br($bio);
}



add_theme_support( 'post-thumbnails' ); 

set_post_thumbnail_size( 310, 9999 );

add_image_size( 'post-full', 960, 9999 );
add_image_size( 'loop-front', 310, 9999 );

add_action( 'init', 'create_workshop_type' );
add_action( 'init', 'create_project_type' );
add_action( 'init', 'create_usage_type' );
add_action( 'init', 'create_member_type' );




function create_usage_type() {
	register_post_type( 'usage',
		array(
			'labels' => array(
				'name' => __( 'Usages' ),
				'singular_name' => __( 'Usage' )
			),
		'public' => true,
		'has_archive' => true,
		)
	);
}

register_taxonomy( 'auteur', 'usage', array( 'hierarchical' => false, 'label' => 'auteur', 'query_var' => true, 'rewrite' => true ) );
register_taxonomy( 'année', 'usage', array( 'hierarchical' => false, 'label' => 'année', 'query_var' => true, 'rewrite' => true ) );


function create_member_type() {
	register_post_type( 'member',
		array(
			'labels' => array(
				'name' => __( 'Members' ),
				'singular_name' => __( 'Member' )
			),
		'public' => true,
		'has_archive' => true,
		)
	);
}






function create_workshop_type() {
	register_post_type( 'workshop',
		array(
			'labels' => array(
				'name' => __( 'Workshops' ),
				'singular_name' => __( 'Workshop' )
			),
		'public' => true,
		'has_archive' => true,
		'supports' => array(
			'title',
			'editor',
			'thumbnail',
			'author' ,
			'custom-fields'
			)
		)
	);
}

register_taxonomy( 'date', 'workshop', array( 'hierarchical' => false, 'label' => 'date', 'query_var' => true, 'rewrite' => true ) );
register_taxonomy( 'time', 'workshop', array( 'hierarchical' => false, 'label' => 'time', 'query_var' => true, 'rewrite' => true ) );
register_taxonomy( 'place', 'workshop', array( 'hierarchical' => false, 'label' => 'place', 'query_var' => true, 'rewrite' => true ) );
register_taxonomy( 'intervenant', 'workshop', array( 'hierarchical' => false, 'label' => 'Intervenant', 'query_var' => true, 'rewrite' => true ) );  


function create_project_type() {
	register_post_type( 'project',
		array(
			'labels' => array(
				'name' => __( 'Projects' ),
				'singular_name' => __( 'Project' )
			),
		'public' => true,
		'has_archive' => true,
		'supports' => array(
			'title',
			'editor',
			'thumbnail',
			'excerpt',
			'custom-fields'
			),
		'taxonomies' => array( 'category' ),
		)
	);
}



?>