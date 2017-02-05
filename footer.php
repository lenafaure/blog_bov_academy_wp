<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
	
		</main><!-- #content -->

		<!-- Footer starts here -->
		  <footer class="jr-footer">
		    <!-- Footer menu bar -->
		    <ul class="jr-menu jr-menu--footer">
		      <li class="jr-menu__item jr-menu__item--footer">
		        <a href="https://bovacademy.com/index.html" target="_blank">Home</a>
		      </li>
		      <li class="jr-menu__item jr-menu__item--footer">
		        <a href="https://bovacademy.com/programs-and-career-paths.html" target="_blank">Programs and career paths</a>
		      </li>
		      <li class="jr-menu__item jr-menu__item--footer">
		        <a href="https://bovacademy.com/mission.html" target="_blank">Our mission</a>
		      </li>
		      <li class="jr-menu__item jr-menu__item--footer">
		        <a href="https://bovacademy.com/careers.html" target="_blank">Careers</a>
		      </li>
		      <li class="jr-menu__item jr-menu__item--footer">
		        <a href="https://bovacademy.com/contact.html" target="_blank">Contact</a>
		      </li>
		    </ul>
		
		    <!-- Footer social bar -->
		    <div class="jr-footer__social">
		      <ul class="jr-menu jr-menu--social">
		        <li class="jr-menu__item jr-menu__item--social">
		          <a href="https://twitter.com/bovacademy" target="_blank">
		            <i class="icon-twitter" aria-hidden="true"></i>
		          </a>
		        </li>
		        <li class="jr-menu__item jr-menu__item--social">
		          <a href="https://www.instagram.com/bovacademy/" target="_blank">
		            <i class="icon-instagram" aria-hidden="true"></i>
		          </a>
		        </li>
		        <li class="jr-menu__item jr-menu__item--social">
		          <a href="http://encyclopedia.moderndeveloper.com/" target="_blank">
		            <img src="<?php bloginfo('template_url'); ?>/assets/images/Enlightenment_temp_icon.png">
		          </a>
		        </li>
		      </ul>
		    </div>
		
		    <hr>
		
		    <!-- Footer developer section-->
		    <div class="jr-footer__developers">
		      <p>Site developed by Bov Academy Students</p>
		      <div class="jr-developers">
		        <div class="row">
		          <!-- Each developer -->
		          <div class="jr-developers__each">
		            <!-- Need to add url in the next update -->
		            <a href="#">
		              <div>
		                <img src="<?php bloginfo('template_url'); ?>/assets/images/jake.jpg" class="jr-developers__each__img"
		                     id="pic-jake">
		              </div>
		              <p class="jr-developers__each__name">Jake Tom</p>
		            </a>
		          </div>
		
		          <!-- Each developer -->
		          <div class="jr-developers__each">
		            <!-- Need to add url in the next update -->
		            <a href="#">
		              <div>
		                <img src="<?php bloginfo('template_url'); ?>/assets/images/brent.jpg" class="jr-developers__each__img"
		                     id="pic-brent">
		              </div>
		              <p class="jr-developers__each__name">Brent Guffens</p>
		            </a>
		          </div>
		        </div>
		
		        <div class="row">
		          <!-- Each developer -->
		          <div class="jr-developers__each">
		            <!-- Need to add url in the next update -->
		            <a href="#">
		              <div>
		                <img src="<?php bloginfo('template_url'); ?>/assets/images/lena.jpg" class="jr-developers__each__img"
		                     id="pic-lena">
		              </div>
		              <p class="jr-developers__each__name">Lena Faure</p>
		            </a>
		          </div>
		
		          <!-- Each developer -->
		          <div class="jr-developers__each">
		            <!-- Need to add url in the next update -->
		            <a href="#">
		              <div>
		                <img src="<?php bloginfo('template_url'); ?>/assets/images/jing.jpg" class="jr-developers__each__img"
		                     id="pic-jing">
		              </div>
		              <p class="jr-developers__each__name">Jing Ran</p>
		            </a>
		          </div>
		        </div>
		      </div>
		    </div>
		    <!-- End of footer developer section-->
		
		  </footer>
		  <!-- Footer ends here -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
