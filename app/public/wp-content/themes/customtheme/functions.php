<?php
// Adding the menu function to my custom theme (part of assignment one)
function custom_theme_setup() {
  register_nav_menus( array(
    'header' => 'Header menu',
    'footer' => 'Footer menu'
  ) );
}
add_action( 'after_setup_theme', 'custom_theme_setup' );
// Add Featured image support to our posts (part of assignment one)
add_theme_support( 'post-thumbnails' );
// set up our custom footer widgets (part of assignment one)
function footer_widgets_init(){
  register_sidebar(array(
    'name'          => __( 'Footer Widget Area One', 'footerwidget' ),
    'id'            => 'footer-widget-area-one',
    'description'   => __( 'The first footer widget area', 'footerwidget' ),
    'before_widget' => '<div class="logo-widget">',
    'after_widget'  => '</div>',
  ));
  register_sidebar( array(
    'name'          => __( 'Footer Widget Area Two', 'footerwidget' ),
    'id'            => 'footer-widget-area-two',
    'description'   => __( 'The second footer widget area', 'footerwidget' ),
    'before_widget' => '<div class="footer-menu-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>',
  ));
  register_sidebar( array(
    'name'          => __( 'Footer Widget Area Three', 'footerwidget' ),
    'id'            => 'footer-widget-area-three',
    'description'   => __( 'The third footer widget area', 'footerwidget' ),
    'before_widget' => '<div class="contact-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>',
  ));
}
add_action( 'widgets_init', 'footer_widgets_init' );
// My custom post type
function yoga_init(){
  $args = array(
    'label' => 'Yoga',
    'public' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'taxonomies'  => array( 'category'),
    'hierarchical' => 'false',
    'query_var' => true,
    'menu_icon' => 'dashicons-smiley',
    'supports' => array(
      'title',
      'editor',
      'excerpts',
      'comments',
      'thumbnail',
      'author',
      'post-formats',
      'page-attributes',
    )
  );
  register_post_type('yoga', $args);
}
add_action('init', 'yoga_init');

add_action( 'init', 'gp_register_taxonomy_for_object_type' );
function gp_register_taxonomy_for_object_type() {
    register_taxonomy_for_object_type( 'post_tag', 'yoga' );
};

//create two taxonomies, genres and tags for the post type "tag"
function create_tag_taxonomies() 
{
  // Add new taxonomy, NOT hierarchical (like tags)
  $labels = array(
    'name' => _x( 'Tags', 'taxonomy general name' ),
    'singular_name' => _x( 'Tag', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Tags' ),
    'popular_items' => __( 'Popular Tags' ),
    'all_items' => __( 'All Tags' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Tag' ), 
    'update_item' => __( 'Update Tag' ),
    'add_new_item' => __( 'Add New Tag' ),
    'new_item_name' => __( 'New Tag Name' ),
    'separate_items_with_commas' => __( 'Separate tags with commas' ),
    'add_or_remove_items' => __( 'Add or remove tags' ),
    'choose_from_most_used' => __( 'Choose from the most used tags' ),
    'menu_name' => __( 'Tags' ),
  ); 

  register_taxonomy('tag','yoga',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'tag' ),
  ));
}
?>


<?php
// now create a shortcode for my custom post-type
function yoga_shortcode() {
  $query = new WP_Query(array('post_type' => 'yoga', 'posts_per_page' => 8, 'order' => 'asc'));
  $count = 0; // Counter to keep track of the number of posts

  // Start the loop
  if ($query->have_posts()) :
      echo '<div class="row">'; // Start the first row
      while ($query->have_posts()) : $query->the_post();
          // Check if it's time to start a new row
          if ($count % 3 == 0 && $count !== 0) {
              echo '</div><div class="row">'; // Close the previous row and start a new one
          }
          ?>
          <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="image-container">
                  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
              </div>
              <div class="yoga-content">
                  <h4><?php the_title(); ?></h4>
                  <?php the_excerpt(); ?>
                  <p><a href="<?php the_permalink(); ?>">Learn More</a></p>
              </div>
          </div>
          <?php
          $count++; // Increment the post counter
      endwhile;
      echo '</div>'; // Close the last row
      wp_reset_postdata(); // Reset post data
  endif;
}
// register shortcode
add_shortcode('yoga', 'yoga_shortcode');
// changing my excerpt length
add_filter( 'excerpt_length', function($length) {
  return 25;
}, PHP_INT_MAX );
// adding woocommerce support to our theme
function customtheme_add_woocommerce_support() {
  add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'customtheme_add_woocommerce_support' );
function enqueue_wc_cart_fragments() { wp_enqueue_script( 'wc-cart-fragments' ); }
add_action( 'wp_enqueue_scripts', 'enqueue_wc_cart_fragments' );
add_filter( 'woocommerce_apply_base_tax_for_local_pickup', '__return_false' );

?>