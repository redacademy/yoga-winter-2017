<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>
</div><!-- #content -->

  <footer id="colophon" class="site-footer" role="contentinfo">
    <form class="e-news-signup">
        <label for="e-news">Sign Up for E-News</label>
        <label class="input-bar">
            <input type="email" id="e-news">
            <input type="submit" id="submit-button" value="join" onclick="sendMail()">
        </label>
    </form>
    <div class="site-info">
      <div class="siteinfo-text">
        <p><a href="yoga_outreach/contact-us">contact</a></p>
        <p>privacy policy</p>
      </div>
      <!--<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a>-->
      <section class ="socialmedia-icons">
        <ul>
          <li class="instagram-icon">
            <a class="instagram" href="https://www.instagram.com/yogaoutreach/">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </li>
          <li class="facebook-icon">
            <a class="facebook" href="https://www.facebook.com/YogaOutreach1">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
          </li>
          <li class="twitter-icon">
            <a class="twitter" href="https://twitter.com/yogaoutreach">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
          </li>
          <li class="youtube-icon">
            <a class="youtube" href="https://www.youtube.com/channel/UCO_O3tRBrsydpb1rEIxkG2g">
              <i class="fa fa-youtube" aria-hidden="true"></i>
            </a>
          </li>
        </ul>
      </section>
      <div class="copyright">
        <p>© 2017 Yoga Outreach</p>
      </div>
    </div><!-- .site-info -->
  </footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>

</div><!-- #content -->
  </div><!-- #page -->

	<?php wp_footer(); ?>
	</body>
</html>
