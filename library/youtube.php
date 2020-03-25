<?php
/* Bones Custom Post Type Example
This page walks you through creating 
a custom post type and taxonomies. You
can edit this one or copy the following code 
to create another one. 

I put this in a separate file so as to 
keep it organized. I find it easier to edit
and change things if they are concentrated
in their own file.

Developed by: Eddie Machado
URL: http://themble.com/bones/
*/

// let's create the function for the custom type
function youtube() { 
	// creating (registering) the custom type 
	register_post_type( 'youtube', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		// let's now add all the options for this post type
		array( 'labels' => array(
			'name' => __( 'Youtube', 'bonestheme' ), /* This is the Title of the Group */
			'singular_name' => __( 'Youtube', 'bonestheme' ), /* This is the individual type */
			'all_items' => __( 'All Youtube Posts', 'bonestheme' ), /* the all items menu item */
			'add_new' => __( 'Add New', 'bonestheme' ), /* The add new menu item */
			'add_new_item' => __( 'Add New Youtube', 'bonestheme' ), /* Add New Display Title */
			'edit' => __( 'Edit', 'bonestheme' ), /* Edit Dialog */
			'edit_item' => __( 'Edit Youtube', 'bonestheme' ), /* Edit Display Title */
			'new_item' => __( 'New Youtube', 'bonestheme' ), /* New Display Title */
			'view_item' => __( 'View Youtube', 'bonestheme' ), /* View Display Title */
			'search_items' => __( 'Search Youtube', 'bonestheme' ), /* Search Custom Type Title */ 
			'not_found' =>  __( 'Nothing found in the Database.', 'bonestheme' ), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __( 'Nothing found in Trash', 'bonestheme' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is the Youtube', 'bonestheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 5, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => get_stylesheet_directory_uri() . '/library/images/custom-post-icon.png', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'youtube' ), /* you can specify its url slug */
			'has_archive' => 'youtube', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
		) /* end of options */
	); /* end of register post type */
	register_taxonomy_for_object_type('post_tag', 'youtube');
	
}

	// adding the function to the Wordpress init
	add_action( 'init', 'youtube');
	flush_rewrite_rules();
	
	// now let's add Category(Youtube) (these act like categories)
	register_taxonomy( 'youtube_category', 
		array('youtube'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
		array('hierarchical' => true,     /* if this is true, it acts like categories */
			'labels' => array(
				'name' => __( 'Category(Youtube)', 'bonestheme' ), /* name of the custom taxonomy */
				'singular_name' => __( 'Youtube Category', 'bonestheme' ), /* single taxonomy name */
				'search_items' =>  __( 'Search Category(Youtube)', 'bonestheme' ), /* search title for taxomony */
				'all_items' => __( 'All Category(Youtube)', 'bonestheme' ), /* all title for taxonomies */
				'parent_item' => null, /* parent title for taxonomy */
				'parent_item_colon' => null, /* parent taxonomy title */
				'edit_item' => __( 'Edit Custom Category', 'bonestheme' ), /* edit custom taxonomy title */
				'update_item' => __( 'Update Custom Category', 'bonestheme' ), /* update title for taxonomy */
				'add_new_item' => __( 'Add New Custom Category', 'bonestheme' ), /* add new title for taxonomy */
				'new_item_name' => __( 'New Custom Category Name', 'bonestheme' ) /* name title for taxonomy */
			),
			'rewrite' => array( 'slug' => 'youtube/category' ),
			'show_admin_column' => true, 
			'show_ui' => true,
			'query_var' => true
		)
	);
	

	if ( ! function_exists( 'ldestylesheet_entry_tag' ) ) :
	function ldestylesheet_entry_tag($post_id) {
		$tag_list = get_the_tag_list( $post_id );
		if ( $tag_list ) {
			echo '<p class="tag-text">Tags:</p>'. get_the_tag_list( '<ul class="tag-list"><li>', '</li><li>', '</li></ul>' );
		}
	}
	endif;


?>
