<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	
	<!-- Header starts here -->
	  <input type="checkbox" name="dropdown-checkbox" id="jr-dropdown-checkbox">
	  <header class="jr-header jr-header-home">
	    <!--  Header logo  -->
	    <div class="jr-header-wrapper">
	      <div class="jr-header__logo jr-header__item">
	        <a href="<?php echo get_home_url(); ?>">
	          <img class="jr-header__logo__img" src= "<?php bloginfo('template_url'); ?>/assets/images/BovAcademy_logo_head.png">
	          <div class="jr-header__logo__txt">
	            <p class="jr-header__logo__txt--top">
	              <strong>Bov</strong> Academy <strong>Blog</strong>
	            </p>
	            <p class="jr-header__logo__txt--btm">of Programming and Futuristic Engineering</p>
	          </div>
	        </a>
	      </div>
	
	      <!--  Header menu  -->
	      <nav class="jr-header__menu jr-header__item">
	        <ul class="jr-menu jr-menu--header">
	          <li class="jr-menu__item jr-menu__item--header">
	            <a href="<?php echo get_home_url(); ?>">Latest<span class="mobile-hidden"> Posts</span></a>
	          </li>
	          <li class="jr-menu__item jr-menu__item--header">
	            <a href="../upcoming-post/upcoming-post.html">Upcoming<span class="mobile-hidden"> Posts</span></a>
	          </li>
	          <li class="jr-menu__item jr-menu__item--header">
	            <a href="../archive/archive.html">Archive</a>
	          </li>
	        </ul>
	      </nav>
	
	      <!--  Header dropdown icon  -->
	      <div class="jr-header__dropdown jr-header__item">
	        <label for="jr-dropdown-checkbox" class="jr-dropdown-open">
	          <div class="jr-header__dropdown__img">
	            <!-- First row -->
	            <div class="dots-row dots-row-1">
	              <span class="dot" id="blue"></span>
	              <span class="dot" id="green"></span>
	              <span class="dot" id="red"></span>
	            </div>
	            <!-- Second row -->
	            <div class="dots-row dots-row-1">
	              <span class="dot" id="pink"></span>
	              <span class="dot" id="purple"></span>
	              <span class="dot" id="l-green"></span>
	            </div>
	            <!-- Third row -->
	            <div class="dots-row dots-row-1">
	              <span class="dot" id="yellow"></span>
	              <span class="dot" id="orange"></span>
	              <span class="dot" id="l-blue"></span>
	            </div>
	          </div>
	          <div class="jr-header__dropdown__arrow"></div>
	        </label>
	      </div>
	    </div>
	  </header>
	  <!-- Header ends here -->
	
	  <!-- dropdown menu starts here-->
	  <div class="jr-dropdown-menu-wrapper">
	    <div class="jr-dropdown-menu">
	      <ul>
	        <li id="jr-blog">
	          <a href="<?php echo get_home_url(); ?>">
	            <div class="jr-dropdown-menu__logo logo-students">
	              <div class="jr-dropdown-menu__logo__outer">
	                <div class="jr-dropdown-menu__logo__inner">
	                  <img src="<?php bloginfo('template_url'); ?>/assets/images/blog-white.png"
	                       class="jr-dropdown-menu__logo__img jr-dropdown-menu__logo__img-white">
	                  <img src="<?php bloginfo('template_url'); ?>/assets/images/blog-color.png"
	                       class="jr-dropdown-menu__logo__img jr-dropdown-menu__logo__img-color">
	                </div>
	              </div>
	            </div>
	            <p>Blog</p>
	          </a>
	        </li>
	
	        <li id="jr-enlightenment">
	          <a href="https://study.moderndeveloper.com/student-home-page/">
	            <div class="jr-dropdown-menu__logo logo-students">
	              <div class="jr-dropdown-menu__logo__outer">
	                <div class="jr-dropdown-menu__logo__inner">
	                  <img src="<?php bloginfo('template_url'); ?>/assets/images/enlightenment-white.png"
	                       class="jr-dropdown-menu__logo__img jr-dropdown-menu__logo__img-white">
	                  <img src="<?php bloginfo('template_url'); ?>/assets/images/enlightenment-color.png"
	                       class="jr-dropdown-menu__logo__img jr-dropdown-menu__logo__img-color">
	                </div>
	              </div>
	            </div>
	            <p>Study</p>
	          </a>
	        </li>
	
	        <li id="jr-learn">
	          <a href="https://bovacademy.com/">
	            <div class="jr-dropdown-menu__logo logo-students">
	              <div class="jr-dropdown-menu__logo__outer">
	                <div class="jr-dropdown-menu__logo__inner">
	                  <img src="<?php bloginfo('template_url'); ?>/assets/images/learn-white.png"
	                       class="jr-dropdown-menu__logo__img jr-dropdown-menu__logo__img-white">
	                  <img src="<?php bloginfo('template_url'); ?>/assets/images/learn-color.png"
	                       class="jr-dropdown-menu__logo__img jr-dropdown-menu__logo__img-color">
	                </div>
	              </div>
	            </div>
	            <p>Learn</p>
	          </a>
	        </li>
	
	        <!--<li id="jr-students">-->
	          <!--&lt;!&ndash; Team 4 needs an URL &ndash;&gt;-->
	          <!--<a href="#">-->
	            <!--<div class="jr-dropdown-menu__logo logo-students">-->
	              <!--<div class="jr-dropdown-menu__logo__outer">-->
	                <!--<div class="jr-dropdown-menu__logo__inner">-->
	                  <!--<img src="../images/students-white.png"-->
	                       <!--class="jr-dropdown-menu__logo__img jr-dropdown-menu__logo__img-white">-->
	                  <!--<img src="../images/students-color.png"-->
	                       <!--class="jr-dropdown-menu__logo__img jr-dropdown-menu__logo__img-color">-->
	                <!--</div>-->
	              <!--</div>-->
	            <!--</div>-->
	            <!--<p>Students</p>-->
	          <!--</a>-->
	        <!--</li>-->
	
	        <li id="jr-qa">
	          <a href="https://qa.moderndeveloper.com/">
	            <div class="jr-dropdown-menu__logo logo-students">
	              <div class="jr-dropdown-menu__logo__outer">
	                <div class="jr-dropdown-menu__logo__inner">
	                  <img src="<?php bloginfo('template_url'); ?>/assets/images/qa-white.png"
	                       class="jr-dropdown-menu__logo__img jr-dropdown-menu__logo__img-white">
	                  <img src="<?php bloginfo('template_url'); ?>/assets/images/qa-color.png"
	                       class="jr-dropdown-menu__logo__img jr-dropdown-menu__logo__img-color">
	                </div>
	              </div>
	            </div>
	            <p>QA</p>
	          </a>
	        </li>
	      </ul>
	    </div>
	  </div>
  	  <!-- dropdown menu ends here -->

	  <!-- Label starts here -->
	  <!--  click anywhere to close dropdown menu -->
	  <label for="jr-dropdown-checkbox" class="jr-filter"></label>
	  <!-- Label ends here -->
	  
	  <!-- Subscribe Button -->
	  <div class="lf-subscribe">
	    <div class="lf-subscribe__element lf-subscribe__item" id="lf-subscribe__element-title" >Blog's Newsletter <div id="lf-subscribe-close" onclick="closeSubscribe()"><i class="material-icons">close</i></div></div>
	    <div id="lf-subscribe__element-thanks">Thank you. <br/>Check your email to confirm.</div>
	      <form>
	        <div class="lf-subscribe__item" id="lf-subscribe__element-firstname"><input type="text" placeholder="First Name"></div>
	        <div class="lf-subscribe__item"id="lf-subscribe__element-email"><input type="text" placeholder="Email"></div>
	      </form>
	    <div class="lf-subscribe__item" id="lf-subscribe__element-teaser" onclick="openSubscribe()" >Subscribe</div>
	  </div>
	  <!-- End Subscribe Button -->

	  <main class="container">
