<?php
/**
 * Template Name: Contactpage
 * Template Post Type: page
 */
get_header();
?>
  <main>
    <section class="masthead" style="background-image: url('<?php echo esc_url( home_url( 'wp-content/uploads/2024/04/image2.jpg' ) ); ?>')">
      <div>
        <h1>Contact Us</h1>
        <h2></h2>
      </div>
    </section>
    <section class="home-row-one row">
    <form class="row g-3">
      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Name</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Name">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Message</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <div class="col-12 conbu">
        <button type="submit" class="btn btn-primary conbuu">Send</button>
      </div>
    </form>
    </section>

  </main>
<?php
get_footer();
?>