<?php
/**
 * Nitya Naturals Theme Functions
 */

if (!function_exists('nitya_naturals_setup')) :
function nitya_naturals_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height'      => 80,
        'width'       => 250,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('customize-selective-refresh-widgets');

    register_nav_menus(array(
        'primary' => __('Primary Header Menu', 'nitya-naturals'),
        'footer'  => __('Footer Menu', 'nitya-naturals'),
    ));
}
endif;
add_action('after_setup_theme', 'nitya_naturals_setup');

function nitya_naturals_scripts() {
    // Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Mulish:wght@300;400;600;700&display=swap', array(), null);
    // Font Awesome / Icons
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0');
    // Main stylesheet
    wp_enqueue_style('nitya-style', get_stylesheet_uri(), array(), '1.0.3');
    // Main JS
    wp_enqueue_script('nitya-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.3', true);
}
add_action('wp_enqueue_scripts', 'nitya_naturals_scripts');

/**
 * Auto-create Pages on Theme Activation
 * (Menu auto-create hata diya kyunki ab navigation hardcoded hai)
 */
function nitya_naturals_auto_setup_pages() {
    $pages = array(
        'Home' => array('slug' => 'home', 'template' => ''),
        'About Us' => array('slug' => 'about-us', 'template' => 'page-templates/page-about-us.php'),
        'Product Range' => array('slug' => 'ayurvedic-medicine-manufacturer', 'template' => 'page-templates/page-product-range.php'),
        'Product Categories' => array('slug' => 'best-manufacturer-of-ayurved-medicines', 'template' => 'page-templates/page-product-categories.php'),
        'Product Development Form' => array('slug' => 'how-to-register-ayurvedic-medicine-in-india', 'template' => 'page-templates/page-product-development.php'),
        'Planning & Selection' => array('slug' => 'herbal-manufacturer', 'template' => 'page-templates/page-planning-selection.php'),
        'Manufacturing' => array('slug' => 'third-party-manufacturing', 'template' => 'page-templates/page-manufacturing.php'),
        'Packaging & Labeling' => array('slug' => 'private-label', 'template' => 'page-templates/page-packaging-labeling.php'),
        'Fulfillment & Transportation' => array('slug' => 'export-medicine', 'template' => 'page-templates/page-export-medicine.php'),
        'Contact Us' => array('slug' => 'start-your-own-supplement-business', 'template' => 'page-templates/page-contact.php'),
    );

    $page_ids = array();

    foreach ($pages as $title => $data) {
        $existing_page = get_page_by_path($data['slug']);
        if (!$existing_page) {
            $page_id = wp_insert_post(array(
                'post_title'     => $title,
                'post_name'      => $data['slug'],
                'post_status'    => 'publish',
                'post_type'      => 'page',
                'comment_status' => 'closed'
            ));
        } else {
            $page_id = $existing_page->ID;
        }

        if ($data['template'] && !is_wp_error($page_id)) {
            update_post_meta($page_id, '_wp_page_template', $data['template']);
        }

        $page_ids[$data['slug']] = $page_id;
    }

    // Set static front page
    if (isset($page_ids['home'])) {
        update_option('show_on_front', 'page');
        update_option('page_on_front', $page_ids['home']);
    }
}
add_action('after_switch_theme', 'nitya_naturals_auto_setup_pages');

/**
 * Register Widget Areas
 */
function nitya_naturals_widgets_init() {
    register_sidebar(array(
        'name'          => __('Footer Column 1', 'nitya-naturals'),
        'id'            => 'footer-1',
        'description'   => __('Add widgets here for Footer Column 1.', 'nitya-naturals'),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    register_sidebar(array(
        'name'          => __('Footer Column 2', 'nitya-naturals'),
        'id'            => 'footer-2',
        'description'   => __('Add widgets here for Footer Column 2.', 'nitya-naturals'),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    register_sidebar(array(
        'name'          => __('Footer Column 3', 'nitya-naturals'),
        'id'            => 'footer-3',
        'description'   => __('Add widgets here for Footer Column 3.', 'nitya-naturals'),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'nitya_naturals_widgets_init');

/**
 * WordPress Customizer Settings
 */
function nitya_naturals_customize_register($wp_customize) {
    // Contact Info Section
    $wp_customize->add_section('nitya_contact_info', array(
        'title'    => __('Company Contact Details', 'nitya-naturals'),
        'priority' => 30,
    ));

    // Phone
    $wp_customize->add_setting('nitya_phone', array(
        'default'           => '+91 75240 98888',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('nitya_phone', array(
        'label'   => __('Phone Number', 'nitya-naturals'),
        'section' => 'nitya_contact_info',
        'type'    => 'text',
    ));

    // WhatsApp Number
    $wp_customize->add_setting('nitya_whatsapp', array(
        'default'           => '919935556123',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('nitya_whatsapp', array(
        'label'   => __('WhatsApp Number (With country code, no +)', 'nitya-naturals'),
        'section' => 'nitya_contact_info',
        'type'    => 'text',
    ));

    // Email
    $wp_customize->add_setting('nitya_email', array(
        'default'           => 'exports@nityanaturals.com',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('nitya_email', array(
        'label'   => __('Primary Email', 'nitya-naturals'),
        'section' => 'nitya_contact_info',
        'type'    => 'email',
    ));

    // Secondary Email
    $wp_customize->add_setting('nitya_email_alt', array(
        'default'           => 'ald.nitya@gmail.com',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('nitya_email_alt', array(
        'label'   => __('Secondary Email', 'nitya-naturals'),
        'section' => 'nitya_contact_info',
        'type'    => 'email',
    ));

    // Address
    $wp_customize->add_setting('nitya_address', array(
        'default'           => '1, Mirzapur Rd, Naini, Allahabad, Uttar Pradesh',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('nitya_address', array(
        'label'   => __('Company Address', 'nitya-naturals'),
        'section' => 'nitya_contact_info',
        'type'    => 'textarea',
    ));

    // Social Links
    $wp_customize->add_setting('nitya_linkedin', array(
        'default'           => 'https://www.linkedin.com/company/nitya-naturals',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('nitya_linkedin', array(
        'label'   => __('LinkedIn URL', 'nitya-naturals'),
        'section' => 'nitya_contact_info',
        'type'    => 'url',
    ));

    // Footer Copyright Text
    $wp_customize->add_section('nitya_footer_section', array(
        'title'    => __('Footer Options', 'nitya-naturals'),
        'priority' => 35,
    ));

    $wp_customize->add_setting('nitya_copyright_text', array(
        'default'           => '© Copyright ' . date('Y') . ' | All Rights Reserved | Nitya Naturals',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('nitya_copyright_text', array(
        'label'   => __('Copyright Text', 'nitya-naturals'),
        'section' => 'nitya_footer_section',
        'type'    => 'text',
    ));
}
add_action('customize_register', 'nitya_naturals_customize_register');