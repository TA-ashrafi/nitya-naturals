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

/**
 * Register Product Custom Post Type and Product Category Taxonomy
 */
function nitya_naturals_register_product_cpt() {
    $labels = array(
        'name'               => _x('Products', 'post type general name', 'nitya-naturals'),
        'singular_name'      => _x('Product', 'post type singular name', 'nitya-naturals'),
        'menu_name'          => _x('Products', 'admin menu', 'nitya-naturals'),
        'name_admin_bar'     => _x('Product', 'add new on admin bar', 'nitya-naturals'),
        'add_new'            => _x('Add New', 'product', 'nitya-naturals'),
        'add_new_item'       => __('Add New Product', 'nitya-naturals'),
        'new_item'           => __('New Product', 'nitya-naturals'),
        'edit_item'          => __('Edit Product', 'nitya-naturals'),
        'view_item'          => __('View Product', 'nitya-naturals'),
        'all_items'          => __('All Products', 'nitya-naturals'),
        'search_items'       => __('Search Products', 'nitya-naturals'),
        'not_found'          => __('No products found.', 'nitya-naturals'),
        'not_found_in_trash' => __('No products found in Trash.', 'nitya-naturals')
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'product', 'with_front' => false),
        'capability_type'    => 'post',
        'has_archive'        => 'products',
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-products',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
        'show_in_rest'       => true,
    );

    register_post_type('product', $args);

    // Register Product Category Taxonomy
    $cat_labels = array(
        'name'              => _x('Product Categories', 'taxonomy general name', 'nitya-naturals'),
        'singular_name'     => _x('Product Category', 'taxonomy singular name', 'nitya-naturals'),
        'search_items'      => __('Search Categories', 'nitya-naturals'),
        'all_items'         => __('All Categories', 'nitya-naturals'),
        'parent_item'       => __('Parent Category', 'nitya-naturals'),
        'parent_item_colon' => __('Parent Category:', 'nitya-naturals'),
        'edit_item'         => __('Edit Category', 'nitya-naturals'),
        'update_item'       => __('Update Category', 'nitya-naturals'),
        'add_new_item'      => __('Add New Category', 'nitya-naturals'),
        'new_item_name'     => __('New Category Name', 'nitya-naturals'),
        'menu_name'         => __('Categories', 'nitya-naturals'),
    );

    register_taxonomy('product_cat', array('product'), array(
        'hierarchical'      => true,
        'labels'            => $cat_labels,
        'show_ui'           => true,
        'show_in_rest'      => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'product-category', 'with_front' => false),
    ));
}
add_action('init', 'nitya_naturals_register_product_cpt');

/**
 * Product Gallery Meta Box in Admin
 */
function nitya_naturals_add_product_gallery_metabox() {
    add_meta_box(
        'nitya_product_gallery',
        __('Product Gallery Images (URLs or Attachment IDs)', 'nitya-naturals'),
        'nitya_naturals_product_gallery_metabox_callback',
        'product',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'nitya_naturals_add_product_gallery_metabox');

function nitya_naturals_product_gallery_metabox_callback($post) {
    wp_nonce_field('nitya_product_gallery_nonce', 'product_gallery_nonce');
    $gallery_images = get_post_meta($post->ID, '_product_gallery_images', true);
    if (!is_array($gallery_images)) {
        $gallery_images = array();
    }
    $gallery_text = implode("\n", $gallery_images);
    ?>
    <p><strong><?php esc_html_e('Enter Image URLs (one per line, up to 10+ photos):', 'nitya-naturals'); ?></strong></p>
    <textarea name="product_gallery_images" rows="5" style="width:100%;font-family:monospace;"><?php echo esc_textarea($gallery_text); ?></textarea>
    <p class="description"><?php esc_html_e('These images will be displayed on the product page as additional photos in the left gallery slider/thumbnails.', 'nitya-naturals'); ?></p>
    <?php
}

function nitya_naturals_save_product_gallery($post_id) {
    if (!isset($_POST['product_gallery_nonce']) || !wp_verify_nonce($_POST['product_gallery_nonce'], 'nitya_product_gallery_nonce')) {
        return;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    if (isset($_POST['product_gallery_images'])) {
        $lines = explode("\n", str_replace("\r", "", $_POST['product_gallery_images']));
        $cleaned = array();
        foreach ($lines as $line) {
            $line = trim($line);
            if (!empty($line)) {
                $cleaned[] = esc_url_raw($line);
            }
        }
        update_post_meta($post_id, '_product_gallery_images', $cleaned);
    }
}
add_action('save_post_product', 'nitya_naturals_save_product_gallery');

function nitya_naturals_scripts() {
    $ver = file_exists(get_template_directory() . '/style.css') ? filemtime(get_template_directory() . '/style.css') : '1.0.4';
    // Fonts - Cormorant Garamond & Karla
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..600&family=Karla:ital,wght@0,300..800;1,300..600&display=swap', array(), null);
    // Font Awesome / Icons
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0');
    // Main stylesheet
    wp_enqueue_style('nitya-style', get_stylesheet_uri(), array(), $ver);
    // Main JS
    $js_ver = file_exists(get_template_directory() . '/assets/js/main.js') ? filemtime(get_template_directory() . '/assets/js/main.js') : '1.0.4';
    wp_enqueue_script('nitya-main', get_template_directory_uri() . '/assets/js/main.js', array(), $js_ver, true);
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

    // Auto Create Product Categories and Sample Products
    $all_cats = array(
        'Allergy', 'Antacid', 'Anti-Viral', 'Blood Circulation', 'Blood Purifier',
        'Blood Thinner', 'Cardiac care', 'Cholesterol', 'Cyst', 'Diabetes',
        'Digestion', 'Eye Care', 'Fertility', 'Gout', 'Hair',
        'Health Supplement', 'Immunity', 'Inflammation', 'Joint/Ortho Care', 'Kidney Care',
        'Lactation', 'Laxative', 'Liver Care', 'Lung Care', 'Massage Oils',
        'Memory', 'Men’s Health', 'Menopause', 'Mental Health', 'Metabolism',
        'Mouthwash', 'Muscular Health', 'Nasal Care', 'Nasal Drop', 'Nervine Health',
        'Oral Care', 'Osteoarthritis', 'Oils', 'Pain Management', 'Skin Care',
        'Stress & Anxiety', 'Throat Care', 'Thyroid', 'Tumour & Fistula', 'Uncategorized',
        'Virility/Vigor', 'Vitality/Vigor', 'Water retention', 'Weight Metabolism', 'Womens Health'
    );

    $default_gallery_images = array(
        get_template_directory_uri() . '/assets/images/Free_Dropddper_Bottle_Mockup-copy-1024x768.jpg',
        get_template_directory_uri() . '/assets/images/8.png',
        get_template_directory_uri() . '/assets/images/9-3-1536x768.png',
        get_template_directory_uri() . '/assets/images/10-2-scaled.png',
        get_template_directory_uri() . '/assets/images/What-Makes-it-Special.png'
    );

    foreach ($all_cats as $cat_name) {
        $term = term_exists($cat_name, 'product_cat');
        if (!$term) {
            $term = wp_insert_term($cat_name, 'product_cat');
        }

        $term_id = is_array($term) ? $term['term_id'] : (is_object($term) ? $term->term_id : 0);

        if ($term_id && !is_wp_error($term_id)) {
            // Check if products exist for this category
            $existing = new WP_Query(array(
                'post_type'      => 'product',
                'posts_per_page' => 1,
                'tax_query'      => array(
                    array(
                        'taxonomy' => 'product_cat',
                        'field'    => 'term_id',
                        'terms'    => $term_id
                    )
                )
            ));

            if (!$existing->have_posts()) {
                for ($i = 1; $i <= 9; $i++) {
                    if (strripos($cat_name, 'care') !== false) {
                        $prod_title = sprintf('%s Product %d', $cat_name, $i);
                    } else {
                        $prod_title = sprintf('%s Care Product %d', $cat_name, $i);
                    }
                    $prod_slug  = sanitize_title($prod_title);

                    $prod_id = wp_insert_post(array(
                        'post_title'   => $prod_title,
                        'post_name'    => $prod_slug,
                        'post_content' => sprintf(
                            '<h3>About %s</h3><p>This premium Ayurvedic formulation is specially crafted for <strong>%s</strong> support. Manufactured in our US FDA compliant and GMP certified facility under strict quality standards. Ideal for contract manufacturing and private labeling in your own brand name.</p><h4>Key Features:</h4><ul><li>100%% Pure Organic Herbal Extracts</li><li>Formulated by Experienced Ayurvedic Experts</li><li>Free from Artificial Colors, Flavors and Preservatives</li><li>Customizable Packaging & Dosage Forms (Capsules, Tablets, Syrups, Oils)</li></ul>',
                            $prod_title,
                            $cat_name
                        ),
                        'post_excerpt' => sprintf('Premium Ayurvedic formulation for %s support. High quality GMP certified manufacturing.', $cat_name),
                        'post_status'  => 'publish',
                        'post_type'    => 'product'
                    ));

                    if ($prod_id && !is_wp_error($prod_id)) {
                        wp_set_object_terms($prod_id, (int)$term_id, 'product_cat');
                        update_post_meta($prod_id, '_product_gallery_images', $default_gallery_images);
                    }
                }
            } else {
                // Fix double "Care Care" titles in existing products if present
                $all_cat_prods = new WP_Query(array(
                    'post_type'      => 'product',
                    'posts_per_page' => -1,
                    'tax_query'      => array(
                        array(
                            'taxonomy' => 'product_cat',
                            'field'    => 'term_id',
                            'terms'    => $term_id
                        )
                    )
                ));
                if ($all_cat_prods->have_posts()) {
                    while ($all_cat_prods->have_posts()) {
                        $all_cat_prods->the_post();
                        $curr_title = get_the_title();
                        if (strpos($curr_title, 'Care Care') !== false) {
                            $fixed_title = str_replace('Care Care', 'Care', $curr_title);
                            wp_update_post(array(
                                'ID'         => get_the_ID(),
                                'post_title' => $fixed_title,
                                'post_name'  => sanitize_title($fixed_title)
                            ));
                        }
                    }
                    wp_reset_postdata();
                }
            }
        }
    }

    // Clean up invalid/dummy widget IDs in sidebars_widgets if they don't have actual option settings
    $sidebars_widgets = get_option('sidebars_widgets');
    if (is_array($sidebars_widgets)) {
        foreach (array('home-widgets', 'about-widgets', 'categories-widgets', 'product-range-widgets') as $sb_id) {
            if (!empty($sidebars_widgets[$sb_id]) && is_array($sidebars_widgets[$sb_id])) {
                $valid_widgets = array();
                foreach ($sidebars_widgets[$sb_id] as $w_id) {
                    // Extract widget base ID (e.g. nitya_home_banner_widget)
                    $parts = explode('-', $w_id);
                    array_pop($parts);
                    $base_id = implode('-', $parts);
                    $widget_opts = get_option('widget_' . $base_id);
                    if (!empty($widget_opts) && is_array($widget_opts)) {
                        $valid_widgets[] = $w_id;
                    }
                }
                $sidebars_widgets[$sb_id] = $valid_widgets;
            }
        }
        update_option('sidebars_widgets', $sidebars_widgets);
    }

    flush_rewrite_rules();
}
add_action('after_switch_theme', 'nitya_naturals_auto_setup_pages');

/**
 * Ensure auto setup runs automatically in WP Admin if not already done
 */
function nitya_naturals_ensure_data_seeded() {
    if (!get_option('nitya_data_seeded_v3')) {
        nitya_naturals_auto_setup_pages();
        update_option('nitya_data_seeded_v3', 1);
    }
}
add_action('admin_init', 'nitya_naturals_ensure_data_seeded');

/**
 * Register Widget Areas
 */
function nitya_naturals_widgets_init() {
    // Home Page Widgets Sidebar
    register_sidebar(array(
        'name'          => __('Home Page Widget Area', 'nitya-naturals'),
        'id'            => 'home-widgets',
        'description'   => __('Add widgets here for the Home page.', 'nitya-naturals'),
        'before_widget' => '<div id="%1$s" class="nitya-page-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));

    // About Us Page Widgets Sidebar
    register_sidebar(array(
        'name'          => __('About Us Page Widget Area', 'nitya-naturals'),
        'id'            => 'about-widgets',
        'description'   => __('Add widgets here for the About Us page.', 'nitya-naturals'),
        'before_widget' => '<div id="%1$s" class="nitya-page-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));

    // Product Categories Page Widgets Sidebar
    register_sidebar(array(
        'name'          => __('Product Categories Widget Area', 'nitya-naturals'),
        'id'            => 'categories-widgets',
        'description'   => __('Add widgets here for the Product Categories page.', 'nitya-naturals'),
        'before_widget' => '<div id="%1$s" class="nitya-page-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));

    // Product Range Page Widgets Sidebar
    register_sidebar(array(
        'name'          => __('Product Range Widget Area', 'nitya-naturals'),
        'id'            => 'product-range-widgets',
        'description'   => __('Add widgets here for the Product Range page.', 'nitya-naturals'),
        'before_widget' => '<div id="%1$s" class="nitya-page-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));

    // General Sidebar Area
    register_sidebar(array(
        'name'          => __('Main Sidebar', 'nitya-naturals'),
        'id'            => 'sidebar-1',
        'description'   => __('Main sidebar for pages and posts.', 'nitya-naturals'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

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

    $wp_customize->add_setting('nitya_phone', array('default' => '+91 75240 98888', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('nitya_phone', array('label' => __('Phone Number', 'nitya-naturals'), 'section' => 'nitya_contact_info', 'type' => 'text'));

    $wp_customize->add_setting('nitya_whatsapp', array('default' => '917524098888', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('nitya_whatsapp', array('label' => __('WhatsApp Number (With country code)', 'nitya-naturals'), 'section' => 'nitya_contact_info', 'type' => 'text'));

    $wp_customize->add_setting('nitya_email', array('default' => 'exports@nityanaturals.com', 'sanitize_callback' => 'sanitize_email'));
    $wp_customize->add_control('nitya_email', array('label' => __('Primary Email', 'nitya-naturals'), 'section' => 'nitya_contact_info', 'type' => 'email'));

    $wp_customize->add_setting('nitya_email_alt', array('default' => 'ald.nitya@gmail.com', 'sanitize_callback' => 'sanitize_email'));
    $wp_customize->add_control('nitya_email_alt', array('label' => __('Secondary Email', 'nitya-naturals'), 'section' => 'nitya_contact_info', 'type' => 'email'));

    $wp_customize->add_setting('nitya_address', array('default' => '1, Mirzapur Rd, Naini, Allahabad, Uttar Pradesh', 'sanitize_callback' => 'sanitize_textarea_field'));
    $wp_customize->add_control('nitya_address', array('label' => __('Company Address', 'nitya-naturals'), 'section' => 'nitya_contact_info', 'type' => 'textarea'));

    // Footer Copyright Text and Footer Logo
    $wp_customize->add_section('nitya_footer_section', array(
        'title'    => __('Footer Options', 'nitya-naturals'),
        'priority' => 35,
    ));

    $wp_customize->add_setting('nitya_footer_logo', array('default' => '', 'sanitize_callback' => 'esc_url_raw'));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'nitya_footer_logo', array(
        'label'    => __('Custom Footer Logo', 'nitya-naturals'),
        'section'  => 'nitya_footer_section',
        'settings' => 'nitya_footer_logo',
    )));

    $wp_customize->add_setting('nitya_copyright_text', array('default' => '© Copyright 2026 | All Rights Reserved | Nitya Naturals', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('nitya_copyright_text', array('label' => __('Copyright Text', 'nitya-naturals'), 'section' => 'nitya_footer_section', 'type' => 'text'));

    // Colors Section
    $wp_customize->add_section('nitya_colors_section', array(
        'title'    => __('Theme Colors & Design Variables', 'nitya-naturals'),
        'priority' => 22,
    ));

    $colors = array(
        'nitya_color_forest'      => array('label' => 'Forest Dark Green', 'default' => '#0F2A21'),
        'nitya_color_forest_800'  => array('label' => 'Forest Medium Green', 'default' => '#16382C'),
        'nitya_color_forest_600'  => array('label' => 'Forest Light Accent', 'default' => '#2A5747'),
        'nitya_color_sage'        => array('label' => 'Sage Green', 'default' => '#6B8F71'),
        'nitya_color_gold'        => array('label' => 'Brass Gold', 'default' => '#C9A227'),
        'nitya_color_gold_soft'   => array('label' => 'Soft Gold Hover', 'default' => '#EBD9A0'),
        'nitya_color_cream'       => array('label' => 'Cream Background', 'default' => '#F5F0E4'),
        'nitya_color_card'        => array('label' => 'Card Background', 'default' => '#FCFAF4'),
        'nitya_color_line'        => array('label' => 'Border Line Color', 'default' => '#D8CDB4'),
    );

    foreach ($colors as $id => $data) {
        $wp_customize->add_setting($id, array('default' => $data['default'], 'sanitize_callback' => 'sanitize_hex_color'));
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, $id, array('label' => __($data['label'], 'nitya-naturals'), 'section' => 'nitya_colors_section')));
    }

    // Home Page Content Section
    $wp_customize->add_section('nitya_homepage_content', array(
        'title'    => __('Home Page Content Customization', 'nitya-naturals'),
        'priority' => 20,
    ));

    // Hero Strings
    $wp_customize->add_setting('nitya_hero_kicker', array('default' => 'Private Label · Contract Manufacturing', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('nitya_hero_kicker', array('label' => __('Hero Kicker Text', 'nitya-naturals'), 'section' => 'nitya_homepage_content', 'type' => 'text'));

    $wp_customize->add_setting('nitya_hero_title', array('default' => 'We manufacture the Ayurvedic brand you are building.', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('nitya_hero_title', array('label' => __('Hero Main Title', 'nitya-naturals'), 'section' => 'nitya_homepage_content', 'type' => 'text'));

    $wp_customize->add_setting('nitya_hero_sub', array('default' => 'Nitya Naturals gives brand owners a one-stop solution for manufacturing — so you can concentrate on marketing. Your formulas, your label, our cGMP line. On time, within budget, faster than the competition.', 'sanitize_callback' => 'sanitize_textarea_field'));
    $wp_customize->add_control('nitya_hero_sub', array('label' => __('Hero Subtitle', 'nitya-naturals'), 'section' => 'nitya_homepage_content', 'type' => 'textarea'));

    // About Strings
    $wp_customize->add_setting('nitya_about_title', array('default' => 'The export division of Baidyanath Ayurveda Naini.', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('nitya_about_title', array('label' => __('Home About Section Title', 'nitya-naturals'), 'section' => 'nitya_homepage_content', 'type' => 'text'));

    $wp_customize->add_setting('nitya_about_quote', array('default' => '“Backed by the pioneers of Ayurveda since 1917.”', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('nitya_about_quote', array('label' => __('Home About Quote', 'nitya-naturals'), 'section' => 'nitya_homepage_content', 'type' => 'text'));

    $wp_customize->add_setting('nitya_about_lead', array('default' => 'Nitya Naturals Private Limited is a private labeling and contract manufacturing company, and the export division of Baidyanath Ayurveda Naini. For the last fifteen years we have manufactured herbal dietary supplements for brand owners across the world.', 'sanitize_callback' => 'sanitize_textarea_field'));
    $wp_customize->add_control('nitya_about_lead', array('label' => __('Home About Lead Paragraph', 'nitya-naturals'), 'section' => 'nitya_homepage_content', 'type' => 'textarea'));
}
add_action('customize_register', 'nitya_naturals_customize_register');

function nitya_naturals_customizer_css() {
    $forest     = get_theme_mod('nitya_color_forest', '#0F2A21');
    $forest_800 = get_theme_mod('nitya_color_forest_800', '#16382C');
    $forest_600 = get_theme_mod('nitya_color_forest_600', '#2A5747');
    $sage       = get_theme_mod('nitya_color_sage', '#6B8F71');
    $gold       = get_theme_mod('nitya_color_gold', '#C9A227');
    $gold_soft  = get_theme_mod('nitya_color_gold_soft', '#EBD9A0');
    $cream      = get_theme_mod('nitya_color_cream', '#F5F0E4');
    $card       = get_theme_mod('nitya_color_card', '#FCFAF4');
    $line       = get_theme_mod('nitya_color_line', '#D8CDB4');

    echo "<style type=\"text/css\">
        :root {
            --forest: {$forest};
            --forest-800: {$forest_800};
            --forest-600: {$forest_600};
            --sage: {$sage};
            --gold: {$gold};
            --gold-soft: {$gold_soft};
            --cream: {$cream};
            --card: {$card};
            --line: {$line};
        }
    </style>";
}
add_action('wp_head', 'nitya_naturals_customizer_css');


/**
 * Output dynamic CSS for typography controls
 */


/**
 * Load Custom Widgets
 */
require_once get_template_directory() . '/inc/widgets.php';