<?php 
/*
*The template for displaying
*/
?>
<footer class="container-fluid py-5">
  <div class="row">
    <div class="col-sm-4">
      <h5>Stay Connected:</h5>
      <form>
        <div class="form-row from-group"">
          <div class="col-md-8">
            <input type="email" class="form-control" placeholder="Email address" >
          </div>
          <div class="col-md-4">
            <button type="submit" class="btn btn-primary">Sign up
              <i class="fas fa-angle-double-right"></i>
            </button>
          </div>
        </div>
      </form>
      <!-- Social media icons -->
      <i class="fab fa-facebook-square fa-2x"></i>
      <i class="fab fa-twitter-square fa-2x"></i>
      <i class="fab fa-instagram fa-2x"></i>
      <i class="fab fa-pinterest-square fa-2x"></i>
    </div>
    <div class="col-sm-4">
      <h5>Out setting:</h5>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore iure ducimus eligendi consectetur deserunt enim debitis quisquam, sint doloribus veritatis. Vero nesciunt possimus molestias cupiditate ut quia natus 
        voluptates fugiat.</p>
    </div>
    <div class="col-sm-4">
      <h5>Navigation</h5>
      <?php 
            wp_nav_menu( array(
                'theme_location'  => 'footer',
                'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
                'container'       => 'ul',
                'container_class' => 'list-group',
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker(),
            ) ); 
            ?>
      <!-- <ul class="list-group">
        <li class="list-group-item"><a href="blog.html">Blog</a></li>
        <li class="list-group-item"><a href="contact.html">Contact Us</a></li>
        <li class="list-group-item"><a href="privacy.html">Privacy Policy</a></li>
      </ul> -->
    </div>
  </div>

</footer>

  <?php wp_footer(); ?>
</body>

</html>