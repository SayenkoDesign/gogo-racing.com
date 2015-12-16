<?php
// lower seo mta box priority
add_filter( 'wpseo_metabox_prio', function() { return 'low';});

// race post type
add_action('init', function () {
    register_post_type( 'Races',
        array(
            'labels' => array(
                'name' => __( 'Races' ),
                'singular_name' => __( 'Races' ),
                'add_new_item' => __('Add New Race'),
            ),
            'public' => true,
            'has_archive' => true,
            'capabilities' => array(
                'create_posts'              => 'create_races',
                'publish_posts'             => 'publish_races',
                'read'                      => 'read_race',
                'read_post'                 => 'read_race',
                'read_private_posts'        => 'read_private_races',
                'edit_post'                 => 'edit_race',
                'edit_posts'                => 'edit_races',
                'edit_private_posts'        => 'edit_private_races',
                'edit_others_posts'         => 'edit_others_races',
                'edit_published_posts'      => 'edit_published_races',
                'delete_post'               => 'delete_race',
                'delete_posts'              => 'delete_races',
                'delete_private_posts'      => 'delete_private_races',
                'delete_others_posts'       => 'delete_others_races',
                'delete_published_posts'    => 'delete_published_races',
            ),
        )
    );
});

// give admin access to new capabilities
add_action('admin_init', function() {
    $role = get_role('administrator');
    $role->add_cap('create_races');
    $role->add_cap('publish_races');
    $role->add_cap('read_race');
    $role->add_cap('read_race');
    $role->add_cap('read_private_races');
    $role->add_cap('edit_race');
    $role->add_cap('edit_races');
    $role->add_cap('edit_private_races');
    $role->add_cap('edit_others_races');
    $role->add_cap('edit_published_races');
    $role->add_cap('delete_race');
    $role->add_cap('delete_races');
    $role->add_cap('delete_private_races');
    $role->add_cap('delete_others_races');
    $role->add_cap('delete_published_races');

    $role = get_role('author');
    $role->add_cap('read');
    $role->add_cap('create_races');
    $role->add_cap('publish_races');
    $role->add_cap('read_race');
    $role->add_cap('read_race');
    $role->add_cap('read_private_races');
    $role->add_cap('edit_race');
    $role->add_cap('edit_races');
    $role->add_cap('edit_private_races');
    $role->add_cap('edit_others_races');
    $role->add_cap('edit_published_races');
    $role->add_cap('delete_race');
    $role->add_cap('delete_races');
    $role->add_cap('delete_private_races');
    $role->add_cap('delete_others_races');
    $role->add_cap('delete_published_races');
});

// Widgets
if(function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => __('Sidebar'),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
}

add_filter("gform_column_input_1_54_1", "set_column", 10, 5);
function set_column($input_info, $field, $column, $value, $form_id){
	return array("type" => "select", "choices" => "Men's,Women's,Kid's");
}



function remove_dashboard_meta() {
        remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_primary', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');//since 3.8
}
add_action( 'admin_init', 'remove_dashboard_meta' );



/**
 * Add a widget to the dashboard.
 *
 * This function is hooked into the 'wp_dashboard_setup' action below.
 */
function example_add_dashboard_widgets() {

	wp_add_dashboard_widget(
                 'example_dashboard_widget',         // Widget slug.
                 'RECEIVE $100 in CASH FOR A WEBSITE REFERRAL!!',         // Title.
                 'example_dashboard_widget_function' // Display function.
        );	
}
add_action( 'wp_dashboard_setup', 'example_add_dashboard_widgets' );

/**
 * Create the function to output the contents of our Dashboard Widget.
 */
function example_dashboard_widget_function() {

	// Display whatever it is you want to show.
	echo "<span style='width:100%'><a href='http://www.sayenkodesign.com'><img alt='Seattle Web Design' src='http://www.sayenkodesign.com/wp-content/uploads/2014/08/Sayenko-Design-WP-Referral-Bonus-460.jpg'></a></span>
</br>
</br>

Simply introduce us via email along with the prospects phone number. Email introductions can be sent to <a href='mailto:mike@sayenkodesign.com'>mike@sayenkodesign.com</a>

</br>
If the prospect signs up for a website package we will send you a $100 check or instantly to your paypal account.";
} 


?>