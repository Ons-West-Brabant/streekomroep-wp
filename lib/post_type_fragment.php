// Register Fragment Post Type
function post_type_fragment() {

	$labels = array(
		'name'                  => 'Fragmenten',
		'singular_name'         => 'Fragment',
		'menu_name'             => 'Fragmenten',
		'name_admin_bar'        => 'Fragment',
		'archives'              => '',
		'attributes'            => '',
		'parent_item_colon'     => '',
		'all_items'             => 'Alle fragmenten',
		'add_new_item'          => 'Nieuw fragment',
		'add_new'               => 'Voeg fragment toe',
		'new_item'              => 'Nieuw fragment',
		'edit_item'             => 'Bewerkt fragment',
		'update_item'           => 'Update fragment',
		'view_item'             => 'Bekijk fragment',
		'view_items'            => 'Bekijk fragmenten',
		'search_items'          => 'Zoek fragment',
		'not_found'             => '',
		'not_found_in_trash'    => '',
		'featured_image'        => '',
		'set_featured_image'    => '',
		'remove_featured_image' => '',
		'use_featured_image'    => '',
		'insert_into_item'      => '',
		'uploaded_to_this_item' => '',
		'items_list'            => '',
		'items_list_navigation' => '',
		'filter_items_list'     => '',
	);
	$args = array(
		'label'                 => 'Fragment',
		'description'           => 'Nieuwsfragmenten',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'revisions', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag', 'regio', 'dossier' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-embed-video',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
		'rest_base'             => 'fragmenten',
	);
	register_post_type( 'fragment', $args );

}
add_action( 'init', 'post_type_fragment', 0 );