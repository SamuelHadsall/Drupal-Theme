<?php

 $Month = 2592000 + time(); 

 //this adds 30 days to the current time 

 setcookie("AboutVisit", date("F jS"), $Month);

/**

 * @file

 * Default theme implementation to display a single Drupal page.

 *

 * The doctype, html, head and body tags are not in this template. Instead they

 * can be found in the html.tpl.php template in this directory.

 *

 * Available variables:

 *

 * General utility variables:

 * - $base_path: The base URL path of the Drupal installation. At the very

 *   least, this will always default to /.

 * - $directory: The directory the template is located in, e.g. modules/system

 *   or themes/bartik.

 * - $is_front: TRUE if the current page is the front page.

 * - $logged_in: TRUE if the user is registered and signed in.

 * - $is_admin: TRUE if the user has permission to access administration pages.

 *

 * Site identity:

 * - $front_page: The URL of the front page. Use this instead of $base_path,

 *   when linking to the front page. This includes the language domain or

 *   prefix.

 * - $logo: The path to the logo image, as defined in theme configuration.

 * - $site_name: The name of the site, empty when display has been disabled

 *   in theme settings.

 * - $site_slogan: The slogan of the site, empty when display has been disabled

 *   in theme settings.

 *

 * Navigation:

 * - $main_menu (array): An array containing the Main menu links for the

 *   site, if they have been configured.

 * - $secondary_menu (array): An array containing the Secondary menu links for

 *   the site, if they have been configured.

 * - $breadcrumb: The breadcrumb trail for the current page.

 *

 * Page content (in order of occurrence in the default page.tpl.php):

 * - $title_prefix (array): An array containing additional output populated by

 *   modules, intended to be displayed in front of the main title tag that

 *   appears in the template.

 * - $title: The page title, for use in the actual HTML content.

 * - $title_suffix (array): An array containing additional output populated by

 *   modules, intended to be displayed after the main title tag that appears in

 *   the template.

 * - $messages: HTML for status and error messages. Should be displayed

 *   prominently.

 * - $tabs (array): Tabs linking to any sub-pages beneath the current page

 *   (e.g., the view and edit tabs when displaying a node).

 * - $action_links (array): Actions local to the page, such as 'Add menu' on the

 *   menu administration interface.

 * - $feed_icons: A string of all feed icons for the current page.

 * - $node: The node object, if there is an automatically-loaded node

 *   associated with the page, and the node ID is the second argument

 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not

 *   comment/reply/12345).

 *

 * Regions:

 * - $page['help']: Dynamic help text, mostly for admin pages.

 * - $page['highlighted']: Items for the highlighted content region.

 * - $page['content']: The main content of the current page.

 * - $page['sidebar_first']: Items for the first sidebar.

 * - $page['sidebar_second']: Items for the second sidebar.

 * - $page['header']: Items for the header region.

 * - $page['footer']: Items for the footer region.

 *

 * @see template_preprocess()

 * @see template_preprocess_page()

 * @see template_process()

 * @see html.tpl.php

 *

 * @ingroup themeable

 */

?>

  <div id="page-wrapper" class="wrapper"><div id="page">

  	<header>

        <div class="container" id="header">        

          <div class="four columns">

            <div class="tagline">

              <?php if ($site_slogan): ?>                 

                  <?php if ($site_slogan): ?>

                    <h2 title="<?php print t('Home'); ?>" rel="home"><em><?php print $site_slogan; ?></em></h2>

                  <?php endif; ?>

                </div> <!-- /.tagline -->

              <?php endif; ?>

            </div>

          <div class="twelve columns">

            <div class="five columns alpha">

              <div class="email">                  

                    <?php if ($page['contact_email']): ?>                  

                        <?php print render($page['contact_email']); ?>

                    <?php endif; ?>

              </div>

            </div>

            <div class="three columns">

              <div class="phone">

                   <?php if ($page['contact_phone']): ?>

                        <?php print render($page['contact_phone']); ?>

                    <?php endif; ?>

              </div>

            </div>

            <div class="three columns omega"><!-- Login Lightbox -->

                <div class="user-login">

                    <?php if ($page['user_login']): ?>                    

					<?php print render($page['user_login']); ?>

                    <?php endif; ?>

                    <?php if ($page['user_logout']): ?>

                    <i class="fa fa-user fa-2x"></i>

                    <a href="#inline" class="fancybox" title="User Login">Login</a>

                    <div style="display:none">

                        <div id="inline">

                            <?php print render($page['user_logout']); ?>

                        </div>

                    </div>

                    <?php endif; ?>

                </div>            

            </div>

          </div>

        </div><!-- container --> 

        <div class="container">

            <div id="mobil"><!-- Mobile header / Display only on mobile devices -->    

              <div class="six columns alpha">

              <div class="email">

                <?php if ($page['contact_email']): ?>                  

					<?php print render($page['contact_email']); ?>

                <?php endif; ?>

              </div>

            </div>

            <div class="six columns omega">

              <div class="phone">

                <?php if ($page['contact_phone']): ?>

					<?php print render($page['contact_phone']); ?>

                <?php endif; ?>

              </div>

            </div>

            <button class="nav-button">Toggle Navigation</button>

            <nav><!-- Mobile Navigation / Display only on mobile devices -->

                <?php print theme('links__system_main_menu', 

						array(

							'links' => $main_menu, 

							'attributes' => array(

								'id' => 'main-menu', 

								'class' => array(

									'sf-menu', 

									'sf-vertical',

									'primary-nav'

								)

							)

						)

					); ?>

           </nav>   

           </div>

        </div><!-- container --> 

      </header>

	  <section>

		<div class="container">

        	<div class="four columns">

            	<aside class="sidebar clearfix" id="sidebar_first">

				  <?php if ($logo): ?>

                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">

                      <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="scale-with-grid" />

                    </a>

                  <?php endif; ?>

                  <br class="clear" />

                  <div class="dktp-oly">

				<?php if ($main_menu || $secondary_menu): ?>

                  <nav class="clearfix">                   

                    <?php print theme('links__system_main_menu', 

						array(

							'links' => $main_menu, 

							'attributes' => array(

								'id' => 'main-menu', 

								'class' => array(

									'sf-menu', 

									'sf-vertical',

								)

							)

						)

					); ?>

                  </nav>

                  <div class="clear"></div>

                  <?php if ($page['sidebar_first']): ?>

                    <div id="sidebar-first"><div class="section">

                      <?php print render($page['sidebar_first']); ?>

                    </div></div> <!-- /.section, /#sidebar-first -->

                  <?php endif; ?>

            	  </div>

                  <?php if ($page['sidebar_second']): ?>

                    <div id="sidebar-second"><div class="section">

                      <?php print render($page['sidebar_second']); ?>

                    </div></div> <!-- /.section, /#sidebar-second -->

                  <?php endif; ?>

                <?php endif; ?>

				</aside>

           </div>

           <div class="twelve columns">

            <div id="main-wrapper">

            	<div id="main" class="main clearfix">

                  <div id="content">

                  	<div class="section">

                    <?php print render($page['header']); ?>

					<?php print $messages; ?>

                    <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>

                    <?php print render($title_prefix); ?>

                    <?php  if(isset($_COOKIE['AboutVisit']))

                         { 

                            $last = $_COOKIE['AboutVisit'];

                                echo '<h2 class="title" id="page-title">Welcome back to DesignHardware.net</h2>'; 

                        } 

                        else 

                        { 

                             echo '<h2 class="title" id="page-title">Welcome to DesignHardware.net</h2>'; 

                         } 

					 ?>

                    <?php print render($title_suffix); ?>

                    <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>

                    <?php print render($page['help']); ?>

                    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>

                    <div class="row">

                    	<article>

                        	<figure class="slider">

                            	<ul class="slider-product-banner">

									<?php print views_embed_view('banners'); ?>

                                </ul>

                            </figure>

                        </article>

                        <hr />

                        <?php 

                        if(isset($_COOKIE['AboutVisit']))

                            { 

                                $last = $_COOKIE['AboutVisit']; 

								echo "<h4>You last visited on ". $last . ". Did you find every thing you were looking for? Ask Bill to the left

								if you have any questions.</h4>"; 

                            } 					

                        ?>

                        <article>

                        	<figure>

                            	<ul class="slider-download-links">

									<?php print views_embed_view('download_links'); ?>

                                </ul>

                            </figure>

                        </article>

                     </div>

                        <?php print views_embed_view('model'); ?>

                    </div><!-- /.section -->

                  </div> <!-- /#content -->

                </div><!-- /#main -->

             </div> <!-- /#main-wrapper -->

           </div>

           </div>

       </section>

       <div class="push"></div>

        </div></div> <!-- /#page, /#page-wrapper -->

	   <footer class="footer">

          <div class="container">

            <div class="sixteen columns">

              <div class="site-footer">

                <div class="section">

                  <?php print render($page['footer']); ?>

                </div><!-- /.section, /#footer -->

                <div class="copyright"><?php echo date('Y'); ?> - <strong><?php print $site_name ?></strong></div>

                <div class="about" style="display:none"><?php //echo of_get_option('footer_about', 'no entry'); ?></div>

              </div>

            </div>

          </div>

      </footer>

    <!-- End Document

      ================================================== -->

   

