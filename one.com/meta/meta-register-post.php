<?php
//Registered About RUMS CPT

function register_about_rus_cpt() {
	register_post_type( 'about_rums',
		array(
			'labels' 			=> array(
				'name' 				=> __( 'About RUMS' ),
				'singular_name' 	=> __( 'About RUMS' ),
				'add_new' 			=> __( 'Add New About RUMS' ),
				'add_new_item' 		=> __( 'Add New About RUMS' ),
				'edit_item' 		=> __( 'Edit About RUMS' ),
				'new_item' 			=> __( 'Add New About RUMS' ),
				'view_item' 		=> __( 'View About RUMS' ),
				'search_items' 		=> __( 'Search About RUMS' ),
				'not_found' 		=> __( 'No About RUMS found' ),
				'not_found_in_trash'=> __( 'No About RUMS found in trash' )
			),
			'public' 			=> true,
			'has_archive' 		=> true,
			'supports' 			=> array( 'title', 'thumbnail'),
			'capability_type' => 'post',
			'menu_icon'  => 'dashicons-visibility',
			'map_meta_cap' => true,
				'rewrite' 			=> array("slug" => "about_rums"), // Permalinks format
				'menu_position' 	=> 5,
				'show_in_nav_menus' => false,
			)	
	);

	//Register News CPT

	register_post_type( 'news',
		array(
			'labels' 			=> array(
				'name' 				=> __( 'News' ),
				'singular_name' 	=> __( 'News' ),
				'add_new' 			=> __( 'Add New News' ),
				'add_new_item' 		=> __( 'Add New News' ),
				'edit_item' 		=> __( 'Edit News' ),
				'new_item' 			=> __( 'Add New News' ),
				'view_item' 		=> __( 'View News' ),
				'search_items' 		=> __( 'Search News' ),
				'not_found' 		=> __( 'No News found' ),
				'not_found_in_trash'=> __( 'No News found in trash' )
			),
			'public' 			=> true,
			'has_archive' 		=> true,
			'supports' 			=> array( 'title'),
			'capability_type' => 'post',
			'menu_icon'  => 'dashicons-welcome-widgets-menus',
			'map_meta_cap' => true,
				'rewrite' 			=> array("slug" => "news_reports"), // Permalinks format
				'menu_position' 	=> 5,
				'show_in_nav_menus' => false,
			)	
	);

	//Register Tender CPT

	register_post_type( 'tender',
		array(
			'labels' 			=> array(
				'name' 				=> __( 'Tenders' ),
				'singular_name' 	=> __( 'Tender' ),
				'add_new' 			=> __( 'Add New Tender' ),
				'add_new_item' 		=> __( 'Add New Tender' ),
				'edit_item' 		=> __( 'Edit Tender' ),
				'new_item' 			=> __( 'Add New Tender' ),
				'view_item' 		=> __( 'View Tender' ),
				'search_items' 		=> __( 'Search Tender' ),
				'not_found' 		=> __( 'No Tender found' ),
				'not_found_in_trash'=> __( 'No Tender found in trash' )
			),
			'public' 			=> true,
			'has_archive' 		=> true,
			'supports' 			=> array( 'title'),
			'capability_type' => 'post',
			'menu_icon'  => 'dashicons-megaphone',
			'map_meta_cap' => true,
				'rewrite' 			=> array("slug" => "tender_reports"), // Permalinks format
				'menu_position' 	=> 5,
				'show_in_nav_menus' => false,
			)	
	);

	//Register Important Link CPT

	register_post_type( 'important_link',
		array(
			'labels' 			=> array(
				'name' 				=> __( 'Important Links' ),
				'singular_name' 	=> __( 'Important Link' ),
				'add_new' 			=> __( 'Add New Important Link' ),
				'add_new_item' 		=> __( 'Add New Important Link' ),
				'edit_item' 		=> __( 'Edit Important Link' ),
				'new_item' 			=> __( 'Add New Important Link' ),
				'view_item' 		=> __( 'View Important Link' ),
				'search_items' 		=> __( 'Search Important Link' ),
				'not_found' 		=> __( 'No Important Link found' ),
				'not_found_in_trash'=> __( 'No Important Link found in trash' )
			),
			'public' 			=> true,
			'has_archive' 		=> true,
			'supports' 			=> array( 'title'),
			'capability_type' => 'post',
			'menu_icon'  => 'dashicons-admin-links',
			'map_meta_cap' => true,
				'rewrite' 			=> array("slug" => "imp_links"), // Permalinks format
				'menu_position' 	=> 5,
				'show_in_nav_menus' => false,
			)	
	);

	//Register Featured Banner CPT

	register_post_type( 'featur_banner',
		array(
			'labels' 			=> array(
				'name' 				=> __( 'Featured Banners' ),
				'singular_name' 	=> __( 'Featured Banner' ),
				'add_new' 			=> __( 'Add New Featured Banner' ),
				'add_new_item' 		=> __( 'Add New Featured Banner' ),
				'edit_item' 		=> __( 'Edit Featured Banner' ),
				'new_item' 			=> __( 'Add New Featured Banner' ),
				'view_item' 		=> __( 'View Featured Banner' ),
				'search_items' 		=> __( 'Search Featured Banner' ),
				'not_found' 		=> __( 'No Featured Banner found' ),
				'not_found_in_trash'=> __( 'No Featured Banner found in trash' )
			),
			'public' 			=> true,
			'has_archive' 		=> true,
			'supports' 			=> array( 'title', 'thumbnail'),
			'capability_type' => 'post',
			'menu_icon'  => 'dashicons-format-image',
			'map_meta_cap' => true,
				'rewrite' 			=> array("slug" => "featured_banner"), // Permalinks format
				'menu_position' 	=> 5,
				'show_in_nav_menus' => false,
			)	
	);

//Register Upcoming Banner CPT

	register_post_type( 'upcoming_banner',
		array(
			'labels' 			=> array(
				'name' 				=> __( 'Upcoming Banners' ),
				'singular_name' 	=> __( 'Upcoming Banner' ),
				'add_new' 			=> __( 'Add New Upcoming Banner' ),
				'add_new_item' 		=> __( 'Add New Upcoming Banner' ),
				'edit_item' 		=> __( 'Edit Upcoming Banner' ),
				'new_item' 			=> __( 'Add New Upcoming Banner' ),
				'view_item' 		=> __( 'View Upcoming Banner' ),
				'search_items' 		=> __( 'Search Upcoming Banner' ),
				'not_found' 		=> __( 'No Upcoming Banner found' ),
				'not_found_in_trash'=> __( 'No Upcoming Banner found in trash' )
			),
			'public' 			=> true,
			'has_archive' 		=> true,
			'supports' 			=> array( 'title', 'thumbnail'),
			'capability_type' => 'post',
			'menu_icon'  => 'dashicons-format-image',
			'map_meta_cap' => true,
				'rewrite' 			=> array("slug" => "upcoming_banner"), // Permalinks format
				'menu_position' 	=> 5,
				'show_in_nav_menus' => false,
			)	
	);


}
add_action( 'init', 'register_about_rus_cpt');

//Register MetaBoxes
add_action( 'cmb2_init', 'about_rums_metabox' );
function about_rums_metabox() {
	$prefix = 'about_rums_';
	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => __( 'Add Given Details:', 'cmb2' ),
		'object_types' => array( 'about_rums' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );


	$cmb->add_field( array(
		'name' => 'Title Image Icon SVG Code',
		'desc' => 'Please add Title Image Icon SVG Code here.',
		//'default' => 'standard value (optional)',
		'id' => $prefix . 'code',
		'type' => 'textarea_code'
	) );


	$cmb->add_field( array(
		'name'    => 'Short Description',
		'desc' => 'Add Short Description Here.',
		'id'      => $prefix . 'short_descr',
		'type' => 'textarea',
	) );

	$group_field_one = $cmb->add_field( array(
		'id'          => $prefix.'repeat_group_one',
		'type'        => 'group',
		'description' => __( 'Add Details List here:', 'cmb2' ),
	// 'repeatable'  => false, // use false if you want non-repeatable group
		'options'     => array(
		'group_title'       => __( 'Entry {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
		'add_button'        => __( 'Add Another Entry', 'cmb2' ),
		'remove_button'     => __( 'Remove Entry', 'cmb2' ),
		'sortable'          => true,
		'closed'         => true, // true to have the groups closed by default
		'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
	),
	) );

    // Id's for group's fields only need to be unique for the group. Prefix is not needed.

	$cmb->add_group_field( $group_field_one, array(
		'name' => 'Enter Text here',
		'id'   => $prefix . 'list',
		'type' => 'text',
	) );

}

//Add Metabox for News CPT

add_action( 'cmb2_init', 'news_section_metas' );
function news_section_metas() {
	$prefix = 'news_section_';
	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => __( 'Add Given Details:', 'cmb2' ),
		'object_types' => array( 'news','tender' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );

	$cmb->add_field( array(
		'name' => 'Upload File.',
		'desc' => 'Please upload file here.',
		//'default' => 'standard value (optional)',
		'id' => $prefix . 'file',
		'type' => 'file'
	) );

	$cmb->add_field( array(
		'name' => 'Add URL',
		'desc' => 'Please enter URL here if file not available.',
		//'default' => 'standard value (optional)',
		'id' => $prefix . 'url',
		'type' => 'text_url'
	) );

}


//Add Metabox for important Links CPT

add_action( 'cmb2_init', 'important_links_metas' );
function important_links_metas() {
	$prefix = 'important_links_';
	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => __( 'Add Given Details:', 'cmb2' ),
		'object_types' => array('important_link'),
		'context'      => 'normal',
		'priority'     => 'default',
	) );

	$cmb->add_field( array(
		'name' => 'Add URL',
		'desc' => 'Please enter URL here.',
		//'default' => 'standard value (optional)',
		'id' => $prefix . 'url',
		'type' => 'text_url'
	) );

	$cmb->add_field( array(
		'name' => 'Add Logo Image.',
		'desc' => 'Please enter Logo Image here.',
		//'default' => 'standard value (optional)',
		'id' => $prefix . 'file',
		'type' => 'file'
	) );

}




//Add Metabox for Featured Banner CPT

add_action( 'cmb2_init', 'featured_banner_metas' );
function featured_banner_metas() {
	$prefix = 'featured_banner_';
	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => __( 'Add Given Details:', 'cmb2' ),
		'object_types' => array( 'featur_banner' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );

	$cmb->add_field( array(
		'name' => 'Banner Description',
		'desc' => 'Please add description here.',
		//'default' => 'standard value (optional)',
		'id' => $prefix . 'description',
		'type' => 'textarea'
	) );

	$cmb->add_field( array(
		'name' => 'Button Text',
		'desc' => 'Please add button text here.',
		//'default' => 'standard value (optional)',
		'id' => $prefix . 'btn_text',
		'type' => 'text'
	) );

	$cmb->add_field( array(
		'name' => 'Button URL',
		'desc' => 'Please enter URL for Button.',
		//'default' => 'standard value (optional)',
		'id' => $prefix . 'url',
		'type' => 'text_url'
	) );

}


//Add Metabox for Upcoming Banner CPT

add_action( 'cmb2_init', 'upcoming_banner_metas' );
function upcoming_banner_metas() {
	$prefix = 'upcoming_banner_';
	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => __( 'Add Given Details:', 'cmb2' ),
		'object_types' => array( 'upcoming_banner' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );

	$cmb->add_field( array(
		'name' => 'Map Image',
		'desc' => 'Please upload Map image here.',
		//'default' => 'standard value (optional)',
		'id' => $prefix . 'map',
		'type' => 'file'
	) );

	$cmb->add_field( array(
		'name' => 'Capacity Value',
		'desc' => 'Please add Capacity Value here.',
		//'default' => 'standard value (optional)',
		'id' => $prefix . 'capacityval',
		'type' => 'text'
	) );

	// $cmb->add_field( array(
	// 	'name' => 'Button URL',
	// 	'desc' => 'Please enter URL for Button.',
	// 	//'default' => 'standard value (optional)',
	// 	'id' => $prefix . 'url',
	// 	'type' => 'text_url'
	// ) );

}
