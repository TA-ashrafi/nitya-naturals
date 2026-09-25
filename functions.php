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

    // Typography Settings Section
    $wp_customize->add_section('nitya_typography_section', array(
        'title'    => __('Typography & Font Sizes', 'nitya-naturals'),
        'priority' => 25,
    ));

    $wp_customize->add_setting('nitya_body_font_size', array(
        'default'           => '15',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('nitya_body_font_size', array(
        'label'       => __('Body Text Font Size (px)', 'nitya-naturals'),
        'description' => __('Default is 15px. Adjust font size for body content.', 'nitya-naturals'),
        'section'     => 'nitya_typography_section',
        'type'        => 'number',
        'input_attrs' => array('min' => 12, 'max' => 28, 'step' => 1),
    ));

    $wp_customize->add_setting('nitya_heading_font_size', array(
        'default'           => '28',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('nitya_heading_font_size', array(
        'label'       => __('Section Titles / H2 Font Size (px)', 'nitya-naturals'),
        'description' => __('Default is 28px. Adjust font size for major section titles.', 'nitya-naturals'),
        'section'     => 'nitya_typography_section',
        'type'        => 'number',
        'input_attrs' => array('min' => 18, 'max' => 50, 'step' => 1),
    ));

    // Panel for Page Customization
    $wp_customize->add_panel('nitya_pages_panel', array(
        'title'       => __('Page Content Customization', 'nitya-naturals'),
        'description' => __('Manage content and images for Home Page and About Us Page.', 'nitya-naturals'),
        'priority'    => 20,
    ));

    // --- HOME PAGE SECTIONS ---
    // Section: Home Page - Hero & Intro
    $wp_customize->add_section('nitya_home_hero_section', array(
        'title'    => __('Home: Hero & About Summary', 'nitya-naturals'),
        'panel'    => 'nitya_pages_panel',
    ));

    $wp_customize->add_setting('nitya_home_hero_img', array(
        'default'           => get_template_directory_uri() . '/assets/images/Nitya-Naturals-Brand-Book01-1.jpg',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'nitya_home_hero_img', array(
        'label'    => __('Hero Banner Image', 'nitya-naturals'),
        'section'  => 'nitya_home_hero_section',
    )));

    $wp_customize->add_setting('nitya_home_about_title', array(
        'default'           => 'ABOUT US',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('nitya_home_about_title', array(
        'label'   => __('About Us Section Title', 'nitya-naturals'),
        'section' => 'nitya_home_hero_section',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('nitya_home_about_text', array(
        'default'           => 'Nitya Naturals Private Limited is a private labeling and contract manufacturing company as well as the export division of Baidyanath Ayurveda Naini. Nitya Naturals is backed by the pioneers of Ayurveda since 1917 and headed by the President of Baidyanath (Mr. Dhananjay Sharma). Our GMP certified facility is equipped with modern machinery and the staff is trained for compliance of CGMP enforced by US FDA covering 21CFR211, 21CFR 210, 21CFR 820, ICH Q7 & ISO 9001:2008. Nitya Naturals has been manufacturing Herbal Dietary Supplements for brand owners for the last 15 years. We have made it easier for brand owners by providing them one-stop-solution for the manufacturing needs so that they can concentrate on marketing, provide products on time, within budget and faster than the competition.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('nitya_home_about_text', array(
        'label'   => __('About Us Summary Text', 'nitya-naturals'),
        'section' => 'nitya_home_hero_section',
        'type'    => 'textarea',
    ));

    // Section: Home Page - Special / One Stop Shop
    $wp_customize->add_section('nitya_home_special_section', array(
        'title'    => __('Home: One Stop Shop Section', 'nitya-naturals'),
        'panel'    => 'nitya_pages_panel',
    ));

    $wp_customize->add_setting('nitya_home_special_img', array(
        'default'           => get_template_directory_uri() . '/assets/images/What-Makes-it-Special.png',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'nitya_home_special_img', array(
        'label'    => __('Special Banner Image', 'nitya-naturals'),
        'section'  => 'nitya_home_special_section',
    )));

    $wp_customize->add_setting('nitya_home_special_text', array(
        'default'           => 'In order to get started we first need to know your requirements and how we can fulfill them. You can choose from a list of our existing products and dosage forms or we can help you custom create a product of your need.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('nitya_home_special_text', array(
        'label'   => __('Special Description Text', 'nitya-naturals'),
        'section' => 'nitya_home_special_section',
        'type'    => 'textarea',
    ));

    // Section: Home Page - Capabilities (Dosage, Existing, NPD)
    $wp_customize->add_section('nitya_home_capabilities_section', array(
        'title'    => __('Home: Capabilities (Dosage, Products, NPD)', 'nitya-naturals'),
        'panel'    => 'nitya_pages_panel',
    ));

    // Dosage Form
    $wp_customize->add_setting('nitya_home_dosage_title', array('default' => 'DOSAGE FORM', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('nitya_home_dosage_title', array('label' => __('Dosage Form Title', 'nitya-naturals'), 'section' => 'nitya_home_capabilities_section', 'type' => 'text'));

    $wp_customize->add_setting('nitya_home_dosage_desc', array('default' => 'Nitya Naturals can produce a variety of nutraceutical product forms that meet the needs of your target market and end consumer:', 'sanitize_callback' => 'sanitize_textarea_field'));
    $wp_customize->add_control('nitya_home_dosage_desc', array('label' => __('Dosage Form Description', 'nitya-naturals'), 'section' => 'nitya_home_capabilities_section', 'type' => 'textarea'));

    $wp_customize->add_setting('nitya_home_dosage_items', array('default' => "Capsules\nTablets\nSyrups\nOils\nCreams\nPastes", 'sanitize_callback' => 'sanitize_textarea_field'));
    $wp_customize->add_control('nitya_home_dosage_items', array('label' => __('Dosage Form Items (One per line)', 'nitya-naturals'), 'section' => 'nitya_home_capabilities_section', 'type' => 'textarea'));

    // Existing Products
    $wp_customize->add_setting('nitya_home_existing_title', array('default' => 'EXISTING PRODUCTS', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('nitya_home_existing_title', array('label' => __('Existing Products Title', 'nitya-naturals'), 'section' => 'nitya_home_capabilities_section', 'type' => 'text'));

    $wp_customize->add_setting('nitya_home_existing_desc', array('default' => 'Choose from our pre-formulated stock product categories including:', 'sanitize_callback' => 'sanitize_textarea_field'));
    $wp_customize->add_control('nitya_home_existing_desc', array('label' => __('Existing Products Description', 'nitya-naturals'), 'section' => 'nitya_home_capabilities_section', 'type' => 'textarea'));

    $wp_customize->add_setting('nitya_home_existing_items', array('default' => "Allergy\nCholesterol\nDiabetes\nImmunity\nKidney Care\nWeight Management", 'sanitize_callback' => 'sanitize_textarea_field'));
    $wp_customize->add_control('nitya_home_existing_items', array('label' => __('Existing Products Items (One per line)', 'nitya-naturals'), 'section' => 'nitya_home_capabilities_section', 'type' => 'textarea'));

    // New Product Development
    $wp_customize->add_setting('nitya_home_npd_title', array('default' => 'NEW PRODUCT DEVELOPMENT', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('nitya_home_npd_title', array('label' => __('New Product Development Title', 'nitya-naturals'), 'section' => 'nitya_home_capabilities_section', 'type' => 'text'));

    $wp_customize->add_setting('nitya_home_npd_desc', array('default' => 'With the knowledge and expertise of our team, we help you custom create any product according to your requirements:', 'sanitize_callback' => 'sanitize_textarea_field'));
    $wp_customize->add_control('nitya_home_npd_desc', array('label' => __('NPD Description', 'nitya-naturals'), 'section' => 'nitya_home_capabilities_section', 'type' => 'textarea'));

    $wp_customize->add_setting('nitya_home_npd_items', array('default' => "New Product Name\nIntended Composition\nProduct Functions\nProduct Position\nDosage Form & MOQ", 'sanitize_callback' => 'sanitize_textarea_field'));
    $wp_customize->add_control('nitya_home_npd_items', array('label' => __('NPD Items (One per line)', 'nitya-naturals'), 'section' => 'nitya_home_capabilities_section', 'type' => 'textarea'));

    // Section: Home Page - Mockup Showcase & Chyawanprash
    $wp_customize->add_section('nitya_home_showcase_section', array(
        'title'    => __('Home: Showcase & Chyawanprash', 'nitya-naturals'),
        'panel'    => 'nitya_pages_panel',
    ));

    $wp_customize->add_setting('nitya_home_mockup_img', array(
        'default'           => get_template_directory_uri() . '/assets/images/Free_Dropddper_Bottle_Mockup-copy-1024x768.jpg',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'nitya_home_mockup_img', array(
        'label'    => __('Oils & Liquids Mockup Image', 'nitya-naturals'),
        'section'  => 'nitya_home_showcase_section',
    )));

    $wp_customize->add_setting('nitya_home_services_title', array('default' => 'OUR SERVICES', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('nitya_home_services_title', array('label' => __('Our Services Title', 'nitya-naturals'), 'section' => 'nitya_home_showcase_section', 'type' => 'text'));

    $wp_customize->add_setting('nitya_home_services_desc', array('default' => 'Our team assists you with a step-by-step process to give you and your brand a stress-free and reliable method for fulfilling all your manufacturing and private labeling requirements.', 'sanitize_callback' => 'sanitize_textarea_field'));
    $wp_customize->add_control('nitya_home_services_desc', array('label' => __('Our Services Subtitle', 'nitya-naturals'), 'section' => 'nitya_home_showcase_section', 'type' => 'textarea'));

    $wp_customize->add_setting('nitya_home_chyawanprash_title', array('default' => 'STATE OF THE ART CHYAWANPRASH FACILITY', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('nitya_home_chyawanprash_title', array('label' => __('Chyawanprash Facility Title', 'nitya-naturals'), 'section' => 'nitya_home_showcase_section', 'type' => 'text'));

    $wp_customize->add_setting('nitya_home_chyawanprash_text', array('default' => 'We here at Nitya Naturals have created a state of the art Chyawanprash facility with GMP certified machinery. Our facility is located in the heart of the Amla belt at Prayagraj, 2 km from the holy sangam and 5 km from the Ashram of sage Acharya Bharadwaj. The proximity to the Amla forest allows us to get fresh organic Amla straight from trees to the pan. This facility was created to manufacture Chyawanprash for various brands across the world with the highest level of quality.', 'sanitize_callback' => 'sanitize_textarea_field'));
    $wp_customize->add_control('nitya_home_chyawanprash_text', array('label' => __('Chyawanprash Description Text', 'nitya-naturals'), 'section' => 'nitya_home_showcase_section', 'type' => 'textarea'));

    $wp_customize->add_setting('nitya_home_chyawanprash_img', array(
        'default'           => get_template_directory_uri() . '/assets/images/Nitya-Naturals-Brand-Book01-1.pdf-1536x768.png',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'nitya_home_chyawanprash_img', array(
        'label'    => __('Chyawanprash Facility Image', 'nitya-naturals'),
        'section'  => 'nitya_home_showcase_section',
    )));

    $wp_customize->add_setting('nitya_home_visit_title', array('default' => 'BOOK A FACTORY VISIT NOW', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('nitya_home_visit_title', array('label' => __('Book Factory Visit Heading', 'nitya-naturals'), 'section' => 'nitya_home_showcase_section', 'type' => 'text'));

    $wp_customize->add_setting('nitya_home_visit_text', array('default' => 'Contact us on WhatsApp @ +91 75240 98888 or email us at ald.nitya@gmail.com', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('nitya_home_visit_text', array('label' => __('Book Factory Visit Text', 'nitya-naturals'), 'section' => 'nitya_home_showcase_section', 'type' => 'text'));

    // --- ABOUT US PAGE SECTIONS ---
    $wp_customize->add_section('nitya_about_page_section', array(
        'title'    => __('About Us Page Settings', 'nitya-naturals'),
        'panel'    => 'nitya_pages_panel',
    ));

    $wp_customize->add_setting('nitya_about_header_title', array('default' => 'ABOUT US', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('nitya_about_header_title', array('label' => __('Header Title', 'nitya-naturals'), 'section' => 'nitya_about_page_section', 'type' => 'text'));

    $wp_customize->add_setting('nitya_about_header_sub', array('default' => 'One Stop Solution for Herbal Preparations, Packaging & Delivery', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('nitya_about_header_sub', array('label' => __('Header Subtitle', 'nitya-naturals'), 'section' => 'nitya_about_page_section', 'type' => 'text'));

    // Main Content Paragraphs
    $wp_customize->add_setting('nitya_about_p1', array('default' => 'About Us – Nitya Naturals Private Limited is a One Stop Solution for Herbal Preparations, Packaging & Delivery. Nitya Naturals Private Limited is a private labeling / third-party / contract manufacturing company as well as the export division of Baidyanath Ayurveda Naini. Nitya Naturals is backed by the pioneers of Ayurveda, since 1917. It is a comprehensive and scientific system of natural health care unit headed by the President of Baidyanath (Mr. Dhananjay Sharma). Nitya Naturals focuses on the complete revival of ancient Ayurveda to preserve health.', 'sanitize_callback' => 'sanitize_textarea_field'));
    $wp_customize->add_control('nitya_about_p1', array('label' => __('Main Section Paragraph 1', 'nitya-naturals'), 'section' => 'nitya_about_page_section', 'type' => 'textarea'));

    $wp_customize->add_setting('nitya_about_p2', array('default' => 'We are a research based organization and many of our formulations have had extremely encouraging results. Our strong research allows us to fulfill contract manufacturing of ayurvedic medicines. Our GMP certified facility is equipped with modern machinery and the staff is trained for compliance of CGMP enforced by US FDA covering 21CFR211, 21CFR 210, 21CFR 820, ICH Q7 & ISO 9001:2008. The company is presently engaged in the manufacturing of Ayurvedic formulations in the form of capsules, tablets, syrups and oils.', 'sanitize_callback' => 'sanitize_textarea_field'));
    $wp_customize->add_control('nitya_about_p2', array('label' => __('Main Section Paragraph 2', 'nitya-naturals'), 'section' => 'nitya_about_page_section', 'type' => 'textarea'));

    $wp_customize->add_setting('nitya_about_p3', array('default' => 'The head office and the manufacturing unit of Nitya Naturals is at Allahabad. Nitya Naturals has been manufacturing Herbal Dietary Supplements for brand owners for the last 15 years. Our factory is equipped with the cutting-edge machinery in pharmaceutical production and employs state of art technology to ensure a high degree of quality production conforming to the highest international standards. We have made it easier for brand owners by providing them one-stop solution for the manufacturing needs so that they can concentrate on marketing while we provide products on time, within budget and faster than the competition.', 'sanitize_callback' => 'sanitize_textarea_field'));
    $wp_customize->add_control('nitya_about_p3', array('label' => __('Main Section Paragraph 3', 'nitya-naturals'), 'section' => 'nitya_about_page_section', 'type' => 'textarea'));

    $wp_customize->add_setting('nitya_about_p4', array('default' => 'Though we employ the most modern techniques, we still take care to see that the preparation adheres strictly to the norms and procedures laid out in the ancient books of Ayurveda. This discipline, experience of four generations and quality in our output makes us the most preferred brand for contact manufacturing of ayurvedic medicines.', 'sanitize_callback' => 'sanitize_textarea_field'));
    $wp_customize->add_control('nitya_about_p4', array('label' => __('Main Section Paragraph 4', 'nitya-naturals'), 'section' => 'nitya_about_page_section', 'type' => 'textarea'));

    // Our Legacy
    $wp_customize->add_setting('nitya_about_legacy_title', array('default' => 'Our Legacy', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('nitya_about_legacy_title', array('label' => __('Legacy Section Title', 'nitya-naturals'), 'section' => 'nitya_about_page_section', 'type' => 'text'));

    $wp_customize->add_setting('nitya_about_legacy_p1', array('default' => 'In the year 2013, Nitya became a manufacturing unit equipped with four dosage forms to cater to the export market. Nitya decided to start its export with USA first. By trying to achieve the most difficult quality parameters for ourselves has benefited us in many ways. We have trained and complied to the US FDA requirements; our documentation is CFR 210 211 compliant. Further our continuous drive to keep ourselves CGMP compliant has ensured that we select equipment of the same standards and follow documentation accordingly.', 'sanitize_callback' => 'sanitize_textarea_field'));
    $wp_customize->add_control('nitya_about_legacy_p1', array('label' => __('Legacy Paragraph 1', 'nitya-naturals'), 'section' => 'nitya_about_page_section', 'type' => 'textarea'));

    $wp_customize->add_setting('nitya_about_legacy_p2', array('default' => 'Our founder’s legacy of 100 plus years of Ayurvedic traditional knowledge and experience, has not been a deterrent to look at new developments and technologies in the field of Ayurveda. In fact, to the contrary it has helped us better understand which technologies are more suitable to adopt while maintaining the scientific requirements of Ayurveda. We take particular interest in identifying green technologies that are evolved across the world, which we feel are more adaptable. Currently we have adopted extracts from the SCFE CO2 method to standardise and increase the bio availability of some of our products.', 'sanitize_callback' => 'sanitize_textarea_field'));
    $wp_customize->add_control('nitya_about_legacy_p2', array('label' => __('Legacy Paragraph 2', 'nitya-naturals'), 'section' => 'nitya_about_page_section', 'type' => 'textarea'));

    $wp_customize->add_setting('nitya_about_legacy_p3', array('default' => 'With this legacy we work towards creating a disease free society. The formulations and the medicines we create are sustainably grown and harvested by local farmers. We are committed towards responsible and environment friendly practices.', 'sanitize_callback' => 'sanitize_textarea_field'));
    $wp_customize->add_control('nitya_about_legacy_p3', array('label' => __('Legacy Paragraph 3', 'nitya-naturals'), 'section' => 'nitya_about_page_section', 'type' => 'textarea'));

    // Our Founder
    $wp_customize->add_setting('nitya_about_founder_title', array('default' => 'Our Founder', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('nitya_about_founder_title', array('label' => __('Founder Section Title', 'nitya-naturals'), 'section' => 'nitya_about_page_section', 'type' => 'text'));

    $wp_customize->add_setting('nitya_about_founder_name', array('default' => 'Mr. Dhananjay Sharma', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('nitya_about_founder_name', array('label' => __('Founder Name', 'nitya-naturals'), 'section' => 'nitya_about_page_section', 'type' => 'text'));

    $wp_customize->add_setting('nitya_about_founder_desig', array('default' => 'President Shree Baidyanath Ayurved Pvt. Ltd. | Director Nitya Naturals Private Limited', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('nitya_about_founder_desig', array('label' => __('Founder Designation', 'nitya-naturals'), 'section' => 'nitya_about_page_section', 'type' => 'text'));

    $wp_customize->add_setting('nitya_about_founder_img', array('default' => '', 'sanitize_callback' => 'esc_url_raw'));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'nitya_about_founder_img', array('label' => __('Founder Photo (Optional)', 'nitya-naturals'), 'section' => 'nitya_about_page_section')));

    $wp_customize->add_setting('nitya_about_founder_desc', array('default' => 'Mr. Dhananjay (Founder) is a graduate from premiere institute of India and did his Masters from Bentley University USA. With an experience of more than 30 years, Mr. Dhananjay is a prolific entrepreneur and a business leader. He takes pride in Corporate Responsibilities that he holds in Baidyanath Ayurveda India’s oldest Ayurveda company. He has worked extensively to inspire the western world to adopt Ayurveda and thus, he has established a goodwill in Ayurveda and health care industry across the globe. Nitya Naturals was one of the initiatives by Mr. Dhananjay to spread Ayurveda outside India. He has vast global exposure and he has travelled extensively to more than 50 countries.', 'sanitize_callback' => 'sanitize_textarea_field'));
    $wp_customize->add_control('nitya_about_founder_desc', array('label' => __('Founder Description', 'nitya-naturals'), 'section' => 'nitya_about_page_section', 'type' => 'textarea'));

    // Management
    $wp_customize->add_setting('nitya_about_mgmt_title', array('default' => 'Additions to our Management', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('nitya_about_mgmt_title', array('label' => __('Management Section Title', 'nitya-naturals'), 'section' => 'nitya_about_page_section', 'type' => 'text'));

    $wp_customize->add_setting('nitya_about_m1_name', array('default' => 'Ram Jo Sharma', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('nitya_about_m1_name', array('label' => __('Member 1 Name', 'nitya-naturals'), 'section' => 'nitya_about_page_section', 'type' => 'text'));

    $wp_customize->add_setting('nitya_about_m1_desc', array('default' => 'Ram Jo is a graduate in Marketing & Management from the University of Texas. He is a self-driven and dynamic fourth generation entrepreneur in Baidyanath Ayurveda. He handles Business development, budgeting, decision making, and team building at Nitya Naturals.', 'sanitize_callback' => 'sanitize_textarea_field'));
    $wp_customize->add_control('nitya_about_m1_desc', array('label' => __('Member 1 Description', 'nitya-naturals'), 'section' => 'nitya_about_page_section', 'type' => 'textarea'));

    $wp_customize->add_setting('nitya_about_m2_name', array('default' => 'Jairaj Sharma', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('nitya_about_m2_name', array('label' => __('Member 2 Name', 'nitya-naturals'), 'section' => 'nitya_about_page_section', 'type' => 'text'));

    $wp_customize->add_setting('nitya_about_m2_desc', array('default' => 'Jairaj is also the fourth generation entrepreneur who focuses on resilience and innovation, bringing fresh ideas to research and development of new products. His prime responsibility is new business development, sales effectiveness, and new market entry.', 'sanitize_callback' => 'sanitize_textarea_field'));
    $wp_customize->add_control('nitya_about_m2_desc', array('label' => __('Member 2 Description', 'nitya-naturals'), 'section' => 'nitya_about_page_section', 'type' => 'textarea'));
}
add_action('customize_register', 'nitya_naturals_customize_register');

/**
 * Output dynamic CSS for typography controls
 */
function nitya_naturals_customizer_css() {
    $body_font_size = get_theme_mod('nitya_body_font_size', '15');
    $heading_font_size = get_theme_mod('nitya_heading_font_size', '28');

    ?>
    <style type="text/css">
        body { font-size: <?php echo esc_attr($body_font_size); ?>px; }
        .section-title, h2.section-title { font-size: <?php echo esc_attr($heading_font_size); ?>px; }
    </style>
    <?php
}
add_action('wp_head', 'nitya_naturals_customizer_css');

/**
 * Load Custom Widgets
 */
require_once get_template_directory() . '/inc/widgets.php';