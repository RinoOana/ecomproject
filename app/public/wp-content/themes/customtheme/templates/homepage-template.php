<?php
/**
 * Template Name: Homepage
 * Template Post Type: page
 */
get_header();
$featuredImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
?>
  <main>
    <section class="masthead" style="background-image: url('<?php echo esc_url( home_url( 'wp-content/uploads/2024/04/image3.jpg' ) ); ?>')">
      <div>
        <h1>Heart Yoga</h1>
        <h2>-Welcome-</h2>
      </div>
    </section>
    <!-- section1 start -->
    <section class="home-row-one row">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <h3>About Us</h3>
        <p>At our café, we believe in the power of nature's bounty and strive to create dishes that honor the integrity of each ingredient. We prioritize locally sourced, organic produce whenever possible, supporting local farmers and reducing transportation emissions. Our menu is free from animal products, artificial additives, and preservatives, ensuring that every bite is not only delicious but also nourishing for both the body and the planet</p>
      </div>
    </section>

    <!-- section2 start -->
    <div class="container text-center">
    <h3>Why choose Heart Yoga?</h3>
        <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
          <div class="col">
            <div class="p-3">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">Physical Well-being</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">welness</h6>
                <p class="card-text">Yoga retreats often offer intensive yoga sessions, helping participants improve flexibility, strength, and overall physical health.</p>
              </div>
            </div>
            </div>
          </div>
          <div class="col">
            <div class="p-3">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">Retreats provide</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">welness</h6>
                <p class="card-text">Retreats provide a break from the hustle and bustle of daily life, allowing individuals to clear their minds and gain mental clarity through meditation and mindfulness practices.</p>
              </div>
            </div>
            </div>
          </div>
          <div class="col">
            <div class="p-3">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">Connection and Community</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">community</h6>
                <p class="card-text">Retreats offer an opportunity to connect with like-minded individuals, fostering a sense of community and support that can be uplifting and empowering.</p>
              </div>
            </div>
            </div>
          </div>
          <div class="col">
            <div class="p-3">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">Healthy Lifestyle Reset</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">lifestyle</h6>
                <p class="card-text">Retreats typically offer nutritious meals, detoxifying practices, and opportunities for physical activity, allowing participants to reset their habits and adopt a healthier lifestyle.</p>
              </div>
            </div>
            </div>
          </div>
          <div class="col">
            <div class="p-3">
              <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">Location</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">retreat</h6>
                <p class="card-text">Retreats typically offer nutritious meals, detoxifying practices, and opportunities for physical activity, allowing participants to reset their habits and adopt a healthier lifestyle.</p>
              </div>
            </div></div>
          </div>
          <div class="col">
            <div class="p-3">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">Stress Reduction</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">welness</h6>
                <p class="card-text">Retreats typically offer nutritious meals, detoxifying practices, and opportunities for physical activity, allowing participants to reset their habits and adopt a healthier lifestyle.</p>
              </div>
            </div>
            </div>
          </div>
          <div class="col">
            <div class="p-3">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">Teaturre</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">welness</h6>
                <p class="card-text">Retreats typically offer nutritious meals, detoxifying practices, and opportunities for physical activity, allowing participants to reset their habits and adopt a healthier lifestyle.</p>
              </div>
            </div>
            </div>
          </div>
          <div class="col">
            <div class="p-3">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">Physical Well-being:</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">welness</h6>
                <p class="card-text">Retreats typically offer nutritious meals, detoxifying practices, and opportunities for physical activity, allowing participants to reset their habits and adopt a healthier lifestyle.</p>
              </div>
            </div>
            </div>
          </div>
        </div>
    </div>
    
    <!-- section4 start -->
    <section class="home-row-two row">
        <h3>Featured yoga Packges</h3>
        <?php
        do_action('woocommerce_before_shop_loop');
        echo do_shortcode ('[products limit="4" columns="4"]');
        do_action('woocommerce_after_shop_loop');
        ?>
    </section>

    <!-- section5 start -->
    <section class="home-row-three row">
        <h3>Explore Our yoga Vlog</h3>
          <?php
            do_action('woocommerce_before_post_loop');
            echo do_shortcode ('[yoga limit="3" columns="4"]');
            do_action('woocommerce_after_post_loop');
            ?>
          <?php
          $the_query = new WP_Query(array('post_type' => 'yoga', 'post_per_page' => 3, 'order' => 'desc'));
          while ($the_query -> have_posts()) : $the_query -> the_post();
          ?>
    <?php
    endwhile;
    wp_reset_postdata();
    ?>

</section>
  </main>
<?php
get_footer();
?>