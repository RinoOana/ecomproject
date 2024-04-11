<?php
/**
 * Template Name: Aboutpage
 * Template Post Type: page
 */
get_header();
?>
  <main>
    <!-- section1 -->
    <section class="masthead" style="background-image: url('<?php echo esc_url( home_url( 'wp-content/uploads/2024/04/image4.jpg' ) ); ?>')">
      <div>
        <h1>About Us</h1>
        <h2></h2>
      </div>
    </section>

    <!-- section2 -->
    <section class="home-row-one row">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <h3>About Us</h3>
        <p>At our café, we believe in the power of nature's bounty and strive to create dishes that honor the integrity of each ingredient. We prioritize locally sourced, organic produce whenever possible, supporting local farmers and reducing transportation emissions. Our menu is free from animal products, artificial additives, and preservatives, ensuring that every bite is not only delicious but also nourishing for both the body and the planet</p>
      </div>
    </section>
    
    <!-- section3 -->
    <section class="home-row-three row">
        <h3>Explore Our Packages</h3>
        <?php
        do_action('woocommerce_before_shop_loop');
        echo do_shortcode ('[products limit="4" columns="4"]');
        do_action('woocommerce_after_shop_loop');
        ?>
    </section>
    </section>
  </main>
<?php
get_footer();
?>