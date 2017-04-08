<?php
/**
 * gh_exam functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package gh_exam
 */

if (!function_exists('gh_exam_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function gh_exam_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on gh_exam, use a find and replace
         * to change 'gh_exam' to the name of your theme in all the template files.
         */
        load_theme_textdomain('gh_exam', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'header' => esc_html__('Primary', 'gh_exam'),
            'footer' => esc_html__('Footer', 'gh_exam'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('gh_exam_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');
    }
endif;
add_action('after_setup_theme', 'gh_exam_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gh_exam_content_width()
{
    $GLOBALS['content_width'] = apply_filters('gh_exam_content_width', 640);
}

add_action('after_setup_theme', 'gh_exam_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function gh_exam_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'gh_exam'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'gh_exam'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => esc_html__('Newsletter', 'gh_exam'),
        'id' => 'sidebar-2',
        'description' => esc_html__('Add widgets here.', 'gh_exam'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => esc_html__('Search', 'gh_exam'),
        'id' => 'sidebar-3',
        'description' => esc_html__('Add widgets here.', 'gh_exam'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => esc_html__('Categories', 'gh_exam'),
        'id' => 'sidebar-4',
        'description' => esc_html__('Add widgets here.', 'gh_exam'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'gh_exam_widgets_init');


// post type offering
add_action('init', 'offering');
function offering()
{
    register_post_type('offering', array(
        'public' => true,
        'supports' => array(
            'title',
            'thumbnail',
            'editor',
            'custom-fields'
        ),
        'labels' => array(
            'name' => __('Offering', 'gh_exam'),
            'add_new' => __('Add new offering', 'gh_exam'),
            'all_items' => __('All offerings', 'gh_exam'),

        ),
        'menu_icon' => ('dashicons-admin-generic')
    ));
}


add_action('init', 'offering_tax');

function offering_tax()
{
    register_taxonomy(
        'offering_type',
        'offering',
        array(
            'label' => __('Offering type'),
            'rewrite' => array('slug' => 'offering_type'),
            'hierarchical' => true,
        )
    );
}

// post type clients
add_action('init', 'clients');
function clients()
{
    register_post_type('clients', array(
        'public' => true,
        'supports' => array(
            'title',
            'thumbnail',
            'editor',
            'custom-fields'
        ),
        'labels' => array(
            'name' => __('Clients', 'gh_exam'),
            'add_new' => __('Add new client', 'gh_exam'),
            'all_items' => __('All clients', 'gh_exam'),

        ),
        'menu_icon' => ('dashicons-groups')
    ));
}


add_action('init', 'clients_tax');

function clients_tax()
{
    register_taxonomy(
        'clients_type',
        'clients',
        array(
            'label' => __('Clients type'),
            'rewrite' => array('slug' => 'clients_type'),
            'hierarchical' => true,
        )
    );
}

// post type news
add_action('init', 'news');
function news()
{
    register_post_type('news', array(
        'public' => true,
        'supports' => array(
            'title',
            'thumbnail',
            'editor',
            'custom-fields'
        ),
        'labels' => array(
            'name' => __('News', 'gh_exam'),
            'add_new' => __('Add new new', 'gh_exam'),
            'all_items' => __('All news', 'gh_exam'),

        ),
        'menu_icon' => ('dashicons-format-gallery')
    ));
}


add_action('init', 'news_tax');

function news_tax()
{
    register_taxonomy(
        'news_type',
        'news',
        array(
            'label' => __('News type'),
            'rewrite' => array('slug' => 'news_type'),
            'hierarchical' => true,
        )
    );
}

add_action('wp_default_scripts', function ($scripts) {
    if (!empty($scripts->registered['jquery'])) {
        $scripts->registered['jquery']->deps = array_diff($scripts->registered['jquery']->deps, array('jquery-migrate'));
    }
});


/**
 * FontAwesome
 */
function font_awesome()
{
    if (!is_admin()) {
        wp_register_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css');
        wp_enqueue_style('font-awesome');
    }
}

add_action('wp_enqueue_scripts', 'font_awesome');
/**
 * Enqueue scripts and styles.
 */
function gh_exam_scripts()
{
    wp_enqueue_style('gh_exam-style', get_stylesheet_uri());
    wp_enqueue_style('google_fonts', 'https://fonts.googleapis.com/css?family=Roboto:300,400,700');
    wp_enqueue_style('gh_exam_main_styles', get_template_directory_uri() . '/css/main.css');
    wp_enqueue_script('gh_exam_main_isotope_js', get_template_directory_uri() . '/js/isotope.js');
    wp_enqueue_script('gh_exam_main_js', get_template_directory_uri() . '/js/main.js');
    wp_enqueue_script('jquery');

    wp_enqueue_script('gh_exam-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'gh_exam_scripts');

// logo
function gootheme_theme_customizer($wp_customize)
{

    $wp_customize->add_section('logo_section', array(
        'title' => __('Site logo', 'gh_exam'),
        'priority' => 30,
        'description' => 'Upload a logo for this theme',
    ));

    $wp_customize->add_setting('logo', array(
        'default' => get_bloginfo('template_directory') . '/img/logo.png',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'gootheme_logo', array(

        'label' => __('Current logo', 'gh_exam'),
        'section' => 'logo_section',
        'settings' => 'logo',
    )));

}

add_action('customize_register', 'gootheme_theme_customizer');


// social icons
//Add social icons
function my_customizer_social_media_array()
{
    $social_sites = array('twitter', 'facebook', 'rss', 'google-plus', 'youtube', 'linkedin', 'pinterest', 'dribbble', 'flickr', 'tumblr', 'instagram', 'email');
    return $social_sites;
}

add_action('customize_register', 'my_add_social_sites_customizer');

function my_add_social_sites_customizer($wp_customize)
{

    $wp_customize->add_section('my_social_settings', array(
        'title' => __('Social Media Icons', 'text-domain'),
        'priority' => 35,
    ));

    $social_sites = my_customizer_social_media_array();
    $priority = 5;

    foreach ($social_sites as $social_site) {

        $wp_customize->add_setting("$social_site", array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'esc_url_raw'
        ));

        $wp_customize->add_control($social_site, array(
            'label' => __("$social_site url:", 'text-domain'),
            'section' => 'my_social_settings',
            'type' => 'text',
            'priority' => $priority,
        ));

        $priority = $priority + 5;
    }
}

function my_social_media_icons()
{
    $social_sites = my_customizer_social_media_array();
    foreach ($social_sites as $social_site) {
        if (strlen(get_theme_mod($social_site)) > 0) {
            $active_sites[] = $social_site;
        }
    }
    if (!empty($active_sites)) {
        echo "<ul class='social-icons'>";
        foreach ($active_sites as $active_site) {
            $class = 'fa fa-' . $active_site;
            if ($active_site == 'email') {
                ?>
                <li>
                    <a class="email" target="_blank"
                       href="mailto:<?php echo antispambot(is_email(get_theme_mod($active_site))); ?>">
                        <span class="fa fa-envelope" title="<?php _e('email icon', 'text-domain'); ?>"></span>
                    </a>
                </li>
            <?php } else { ?>
                <li>
                    <a class="<?php echo $active_site; ?>" target="_blank"
                       href="<?php echo esc_url(get_theme_mod($active_site)); ?>">
                        <span class="<?php echo esc_attr($class); ?>"
                              title="<?php printf(__('%s icon', 'text-domain'), $active_site); ?>"></span>
                    </a>
                </li>
                <?php
            }
        }
        echo "</ul>";
    }
}

/**
 * Adds a section, the parameters and controls (control) on the theme settings page
 */
add_action('customize_register', function ($customizer) {
    $customizer->add_section(
        'edits-copyright',
        array(
            'title' => 'Copyright',
            'description' => 'Edit',
            'priority' => 35,
        )
    );
    $customizer->add_setting(
        'copyright_name',
        array('default' => 'GeekHub-Examen')
    );
    $customizer->add_control(
        'copyright_name',
        array(
            'label' => 'Site name',
            'section' => 'edits-copyright',
            'type' => 'text',
        )
    );

    $customizer->add_setting(
        'copyright_year',
        array('default' => '2017')
    );
    $customizer->add_control(
        'copyright_year',
        array(
            'label' => 'Year',
            'section' => 'edits-copyright',
            'type' => 'text',
        )
    );
    $customizer->add_control(
        'hide_copyright',
        array(
            'type' => 'checkbox',
            'label' => 'Hide text copyright',
            'section' => 'edit-copyright',
        )
    );

});


add_action('customize_register', function ($customizer) {
    $customizer->add_section(
        'address',
        array(
            'title' => 'Address',
            'description' => 'Edit',
            'priority' => 35,
        )
    );
    $customizer->add_setting(
        'address',
        array('default' => '123 Office, Street No 2, Parkview. Sednney, Australia.')
    );
    $customizer->add_control(
        'address',
        array(
            'label' => 'address',
            'section' => 'address',
            'type' => 'textarea',
        )
    );
});

add_action('customize_register', function ($customizer) {
    $customizer->add_section(
        'telephone_number',
        array(
            'title' => 'Telephone number',
            'description' => 'Edit',
            'priority' => 35,
        )
    );
    $customizer->add_setting(
        'telephone_number',
        array('default' => '+1 123 4567 891')
    );
    $customizer->add_control(
        'telephone_number',
        array(
            'label' => 'telephone_number',
            'section' => 'telephone_number',
            'type' => 'text',
        )
    );
});


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
