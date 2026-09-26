<?php
/**
 * Custom WordPress Widgets for Nitya Naturals Theme Page Sections
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * 1. Home Banner Widget
 */
class Nitya_Home_Banner_Widget extends WP_Widget {
    public function __construct() {
        parent::__construct(
            'nitya_home_banner_widget',
            __('Nitya: Home Full Banner Image', 'nitya-naturals'),
            array('description' => __('Displays full-width banner image section.', 'nitya-naturals'))
        );
    }

    public function widget($args, $instance) {
        $hero_img = !empty($instance['hero_img']) ? $instance['hero_img'] : get_theme_mod('nitya_home_hero_img', get_template_directory_uri() . '/assets/images/Nitya-Naturals-Brand-Book01-1.jpg');
        get_template_part('template-parts/widgets/widget-home-banner', null, array('hero_img' => $hero_img));
    }

    public function form($instance) {
        $hero_img = !empty($instance['hero_img']) ? $instance['hero_img'] : get_theme_mod('nitya_home_hero_img', get_template_directory_uri() . '/assets/images/Nitya-Naturals-Brand-Book01-1.jpg');
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('hero_img')); ?>"><?php esc_html_e('Banner Image URL:', 'nitya-naturals'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('hero_img')); ?>" name="<?php echo esc_attr($this->get_field_name('hero_img')); ?>" type="text" value="<?php echo esc_attr($hero_img); ?>">
        </p>
        <?php
    }

    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['hero_img'] = (!empty($new_instance['hero_img'])) ? esc_url_raw($new_instance['hero_img']) : '';
        return $instance;
    }
}

/**
 * 2. Home About Summary Widget
 */
class Nitya_Home_About_Widget extends WP_Widget {
    public function __construct() {
        parent::__construct(
            'nitya_home_about_widget',
            __('Nitya: Home About Summary', 'nitya-naturals'),
            array('description' => __('Displays About Us summary text section.', 'nitya-naturals'))
        );
    }

    public function widget($args, $instance) {
        $title = !empty($instance['title']) ? $instance['title'] : get_theme_mod('nitya_home_about_title', 'ABOUT US');
        $text  = !empty($instance['text']) ? $instance['text'] : get_theme_mod('nitya_home_about_text');
        get_template_part('template-parts/widgets/widget-home-about', null, array('title' => $title, 'text' => $text));
    }

    public function form($instance) {
        $title = !empty($instance['title']) ? $instance['title'] : get_theme_mod('nitya_home_about_title', 'ABOUT US');
        $text  = !empty($instance['text']) ? $instance['text'] : get_theme_mod('nitya_home_about_text');
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:', 'nitya-naturals'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('text')); ?>"><?php esc_html_e('Text Content:', 'nitya-naturals'); ?></label>
            <textarea class="widefat" rows="5" id="<?php echo esc_attr($this->get_field_id('text')); ?>" name="<?php echo esc_attr($this->get_field_name('text')); ?>"><?php echo esc_textarea($text); ?></textarea>
        </p>
        <?php
    }

    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = sanitize_text_field($new_instance['title']);
        $instance['text']  = sanitize_textarea_field($new_instance['text']);
        return $instance;
    }
}

/**
 * 3. One Stop Shop Banner & Description Widget
 */
class Nitya_One_Stop_Widget extends WP_Widget {
    public function __construct() {
        parent::__construct(
            'nitya_one_stop_widget',
            __('Nitya: One Stop Shop Section', 'nitya-naturals'),
            array('description' => __('Displays image and text for One Stop Shop section.', 'nitya-naturals'))
        );
    }

    public function widget($args, $instance) {
        $img  = !empty($instance['img']) ? $instance['img'] : get_theme_mod('nitya_home_special_img', get_template_directory_uri() . '/assets/images/What-Makes-it-Special.png');
        $text = !empty($instance['text']) ? $instance['text'] : get_theme_mod('nitya_home_special_text');
        get_template_part('template-parts/widgets/widget-one-stop', null, array('img' => $img, 'text' => $text));
    }

    public function form($instance) {
        $img  = !empty($instance['img']) ? $instance['img'] : get_theme_mod('nitya_home_special_img', get_template_directory_uri() . '/assets/images/What-Makes-it-Special.png');
        $text = !empty($instance['text']) ? $instance['text'] : get_theme_mod('nitya_home_special_text');
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('img')); ?>"><?php esc_html_e('Image URL:', 'nitya-naturals'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('img')); ?>" name="<?php echo esc_attr($this->get_field_name('img')); ?>" type="text" value="<?php echo esc_attr($img); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('text')); ?>"><?php esc_html_e('Description Text:', 'nitya-naturals'); ?></label>
            <textarea class="widefat" rows="4" id="<?php echo esc_attr($this->get_field_id('text')); ?>" name="<?php echo esc_attr($this->get_field_name('text')); ?>"><?php echo esc_textarea($text); ?></textarea>
        </p>
        <?php
    }

    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['img']  = esc_url_raw($new_instance['img']);
        $instance['text'] = sanitize_textarea_field($new_instance['text']);
        return $instance;
    }
}

/**
 * 4. Capabilities Cards Widget (Dosage, Existing Products, NPD)
 */
class Nitya_Capabilities_Widget extends WP_Widget {
    public function __construct() {
        parent::__construct(
            'nitya_capabilities_widget',
            __('Nitya: 3 Capabilities Cards (Dosage, Products, NPD)', 'nitya-naturals'),
            array('description' => __('Displays 3 feature cards section.', 'nitya-naturals'))
        );
    }

    public function widget($args, $instance) {
        get_template_part('template-parts/widgets/widget-capabilities', null, $instance);
    }

    public function form($instance) {
        $dosage_title = !empty($instance['dosage_title']) ? $instance['dosage_title'] : 'DOSAGE FORM';
        $existing_title = !empty($instance['existing_title']) ? $instance['existing_title'] : 'EXISTING PRODUCTS';
        $npd_title = !empty($instance['npd_title']) ? $instance['npd_title'] : 'NEW PRODUCT DEVELOPMENT';
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('dosage_title')); ?>"><?php esc_html_e('Card 1 Title:', 'nitya-naturals'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('dosage_title')); ?>" name="<?php echo esc_attr($this->get_field_name('dosage_title')); ?>" type="text" value="<?php echo esc_attr($dosage_title); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('existing_title')); ?>"><?php esc_html_e('Card 2 Title:', 'nitya-naturals'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('existing_title')); ?>" name="<?php echo esc_attr($this->get_field_name('existing_title')); ?>" type="text" value="<?php echo esc_attr($existing_title); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('npd_title')); ?>"><?php esc_html_e('Card 3 Title:', 'nitya-naturals'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('npd_title')); ?>" name="<?php echo esc_attr($this->get_field_name('npd_title')); ?>" type="text" value="<?php echo esc_attr($npd_title); ?>">
        </p>
        <?php
    }

    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['dosage_title']   = sanitize_text_field($new_instance['dosage_title']);
        $instance['existing_title'] = sanitize_text_field($new_instance['existing_title']);
        $instance['npd_title']      = sanitize_text_field($new_instance['npd_title']);
        return $instance;
    }
}

/**
 * 5. Mockup Banner Widget
 */
class Nitya_Mockup_Banner_Widget extends WP_Widget {
    public function __construct() {
        parent::__construct(
            'nitya_mockup_banner_widget',
            __('Nitya: Mockup Image Banner', 'nitya-naturals'),
            array('description' => __('Displays product mockup image banner section.', 'nitya-naturals'))
        );
    }

    public function widget($args, $instance) {
        $mockup_img = !empty($instance['mockup_img']) ? $instance['mockup_img'] : get_theme_mod('nitya_home_mockup_img', get_template_directory_uri() . '/assets/images/Free_Dropddper_Bottle_Mockup-copy-1024x768.jpg');
        get_template_part('template-parts/widgets/widget-mockup-banner', null, array('mockup_img' => $mockup_img));
    }

    public function form($instance) {
        $mockup_img = !empty($instance['mockup_img']) ? $instance['mockup_img'] : get_theme_mod('nitya_home_mockup_img', get_template_directory_uri() . '/assets/images/Free_Dropddper_Bottle_Mockup-copy-1024x768.jpg');
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('mockup_img')); ?>"><?php esc_html_e('Mockup Image URL:', 'nitya-naturals'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('mockup_img')); ?>" name="<?php echo esc_attr($this->get_field_name('mockup_img')); ?>" type="text" value="<?php echo esc_attr($mockup_img); ?>">
        </p>
        <?php
    }

    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['mockup_img'] = esc_url_raw($new_instance['mockup_img']);
        return $instance;
    }
}

/**
 * 6. Our Services Process Widget
 */
class Nitya_Services_Widget extends WP_Widget {
    public function __construct() {
        parent::__construct(
            'nitya_services_widget',
            __('Nitya: Our Services Section', 'nitya-naturals'),
            array('description' => __('Displays 4 Services Process cards section.', 'nitya-naturals'))
        );
    }

    public function widget($args, $instance) {
        $title = !empty($instance['title']) ? $instance['title'] : get_theme_mod('nitya_home_services_title', 'OUR SERVICES');
        $desc  = !empty($instance['desc']) ? $instance['desc'] : get_theme_mod('nitya_home_services_desc');
        get_template_part('template-parts/widgets/widget-services', null, array('title' => $title, 'desc' => $desc));
    }

    public function form($instance) {
        $title = !empty($instance['title']) ? $instance['title'] : 'OUR SERVICES';
        $desc  = !empty($instance['desc']) ? $instance['desc'] : '';
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Section Title:', 'nitya-naturals'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('desc')); ?>"><?php esc_html_e('Description Text:', 'nitya-naturals'); ?></label>
            <textarea class="widefat" rows="3" id="<?php echo esc_attr($this->get_field_id('desc')); ?>" name="<?php echo esc_attr($this->get_field_name('desc')); ?>"><?php echo esc_textarea($desc); ?></textarea>
        </p>
        <?php
    }

    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = sanitize_text_field($new_instance['title']);
        $instance['desc']  = sanitize_textarea_field($new_instance['desc']);
        return $instance;
    }
}

/**
 * 7. Chyawanprash Facility Widget
 */
class Nitya_Chyawanprash_Widget extends WP_Widget {
    public function __construct() {
        parent::__construct(
            'nitya_chyawanprash_widget',
            __('Nitya: Chyawanprash Facility Section', 'nitya-naturals'),
            array('description' => __('Displays State of the Art Chyawanprash Facility with text & image.', 'nitya-naturals'))
        );
    }

    public function widget($args, $instance) {
        $title = !empty($instance['title']) ? $instance['title'] : get_theme_mod('nitya_home_chyawanprash_title', 'STATE OF THE ART CHYAWANPRASH FACILITY');
        $text  = !empty($instance['text']) ? $instance['text'] : get_theme_mod('nitya_home_chyawanprash_text');
        $img   = !empty($instance['img']) ? $instance['img'] : get_theme_mod('nitya_home_chyawanprash_img', get_template_directory_uri() . '/assets/images/Nitya-Naturals-Brand-Book01-1.pdf-1536x768.png');
        get_template_part('template-parts/widgets/widget-chyawanprash', null, array('title' => $title, 'text' => $text, 'img' => $img));
    }

    public function form($instance) {
        $title = !empty($instance['title']) ? $instance['title'] : 'STATE OF THE ART CHYAWANPRASH FACILITY';
        $text  = !empty($instance['text']) ? $instance['text'] : '';
        $img   = !empty($instance['img']) ? $instance['img'] : get_template_directory_uri() . '/assets/images/Nitya-Naturals-Brand-Book01-1.pdf-1536x768.png';
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:', 'nitya-naturals'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('text')); ?>"><?php esc_html_e('Description Text:', 'nitya-naturals'); ?></label>
            <textarea class="widefat" rows="4" id="<?php echo esc_attr($this->get_field_id('text')); ?>" name="<?php echo esc_attr($this->get_field_name('text')); ?>"><?php echo esc_textarea($text); ?></textarea>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('img')); ?>"><?php esc_html_e('Image URL:', 'nitya-naturals'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('img')); ?>" name="<?php echo esc_attr($this->get_field_name('img')); ?>" type="text" value="<?php echo esc_attr($img); ?>">
        </p>
        <?php
    }

    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = sanitize_text_field($new_instance['title']);
        $instance['text']  = sanitize_textarea_field($new_instance['text']);
        $instance['img']   = esc_url_raw($new_instance['img']);
        return $instance;
    }
}

/**
 * 8. About Us Main Widget
 */
class Nitya_About_Main_Widget extends WP_Widget {
    public function __construct() {
        parent::__construct(
            'nitya_about_main_widget',
            __('Nitya: About Us Main Section', 'nitya-naturals'),
            array('description' => __('Displays main About Us header banner and description paragraphs.', 'nitya-naturals'))
        );
    }

    public function widget($args, $instance) {
        get_template_part('template-parts/widgets/widget-about-main', null, $instance);
    }

    public function form($instance) {
        $header_title = !empty($instance['header_title']) ? $instance['header_title'] : 'ABOUT US';
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('header_title')); ?>"><?php esc_html_e('Header Title:', 'nitya-naturals'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('header_title')); ?>" name="<?php echo esc_attr($this->get_field_name('header_title')); ?>" type="text" value="<?php echo esc_attr($header_title); ?>">
        </p>
        <?php
    }

    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['header_title'] = sanitize_text_field($new_instance['header_title']);
        return $instance;
    }
}

/**
 * 9. Our Legacy Widget
 */
class Nitya_Our_Legacy_Widget extends WP_Widget {
    public function __construct() {
        parent::__construct(
            'nitya_our_legacy_widget',
            __('Nitya: Our Legacy Section', 'nitya-naturals'),
            array('description' => __('Displays Our Legacy section with 100+ years history text.', 'nitya-naturals'))
        );
    }

    public function widget($args, $instance) {
        $title = !empty($instance['title']) ? $instance['title'] : get_theme_mod('nitya_about_legacy_title', 'Our Legacy');
        get_template_part('template-parts/widgets/widget-our-legacy', null, array('title' => $title));
    }

    public function form($instance) {
        $title = !empty($instance['title']) ? $instance['title'] : 'Our Legacy';
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:', 'nitya-naturals'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
        <?php
    }

    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = sanitize_text_field($new_instance['title']);
        return $instance;
    }
}

/**
 * 10. Our Founder Widget
 */
class Nitya_Our_Founder_Widget extends WP_Widget {
    public function __construct() {
        parent::__construct(
            'nitya_our_founder_widget',
            __('Nitya: Our Founder Section', 'nitya-naturals'),
            array('description' => __('Displays Our Founder (Mr. Dhananjay Sharma) section.', 'nitya-naturals'))
        );
    }

    public function widget($args, $instance) {
        $title = !empty($instance['title']) ? $instance['title'] : get_theme_mod('nitya_about_founder_title', 'Our Founder');
        $name  = !empty($instance['name']) ? $instance['name'] : get_theme_mod('nitya_about_founder_name', 'Mr. Dhananjay Sharma');
        get_template_part('template-parts/widgets/widget-our-founder', null, array('title' => $title, 'name' => $name));
    }

    public function form($instance) {
        $title = !empty($instance['title']) ? $instance['title'] : 'Our Founder';
        $name  = !empty($instance['name']) ? $instance['name'] : 'Mr. Dhananjay Sharma';
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:', 'nitya-naturals'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('name')); ?>"><?php esc_html_e('Founder Name:', 'nitya-naturals'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('name')); ?>" name="<?php echo esc_attr($this->get_field_name('name')); ?>" type="text" value="<?php echo esc_attr($name); ?>">
        </p>
        <?php
    }

    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = sanitize_text_field($new_instance['title']);
        $instance['name']  = sanitize_text_field($new_instance['name']);
        return $instance;
    }
}

/**
 * 11. Additions to Management Widget
 */
class Nitya_Management_Widget extends WP_Widget {
    public function __construct() {
        parent::__construct(
            'nitya_management_widget',
            __('Nitya: Additions to Management Section', 'nitya-naturals'),
            array('description' => __('Displays Ram Jo Sharma & Jairaj Sharma management team cards.', 'nitya-naturals'))
        );
    }

    public function widget($args, $instance) {
        $title = !empty($instance['title']) ? $instance['title'] : get_theme_mod('nitya_about_mgmt_title', 'Additions to our Management');
        get_template_part('template-parts/widgets/widget-management', null, array('title' => $title));
    }

    public function form($instance) {
        $title = !empty($instance['title']) ? $instance['title'] : 'Additions to our Management';
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:', 'nitya-naturals'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
        <?php
    }

    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = sanitize_text_field($new_instance['title']);
        return $instance;
    }
}

/**
 * 12. Product Range Catalog Table Widget
 */
class Nitya_Product_Range_Widget extends WP_Widget {
    public function __construct() {
        parent::__construct(
            'nitya_product_range_widget',
            __('Nitya: Complete Product Range Table', 'nitya-naturals'),
            array('description' => __('Displays complete product list table with live search.', 'nitya-naturals'))
        );
    }

    public function widget($args, $instance) {
        get_template_part('template-parts/widgets/widget-product-range', null, $instance);
    }

    public function form($instance) {
        ?>
        <p><?php esc_html_e('No configuration required. Automatically renders complete product catalog with live search filter.', 'nitya-naturals'); ?></p>
        <?php
    }

    public function update($new_instance, $old_instance) {
        return $old_instance;
    }
}

/**
 * Register All Nitya Widgets
 */
function nitya_naturals_register_custom_widgets() {
    register_widget('Nitya_Home_Banner_Widget');
    register_widget('Nitya_Home_About_Widget');
    register_widget('Nitya_One_Stop_Widget');
    register_widget('Nitya_Capabilities_Widget');
    register_widget('Nitya_Mockup_Banner_Widget');
    register_widget('Nitya_Services_Widget');
    register_widget('Nitya_Chyawanprash_Widget');
    register_widget('Nitya_About_Main_Widget');
    register_widget('Nitya_Our_Legacy_Widget');
    register_widget('Nitya_Our_Founder_Widget');
    register_widget('Nitya_Management_Widget');
    register_widget('Nitya_Product_Range_Widget');
}
add_action('widgets_init', 'nitya_naturals_register_custom_widgets');
