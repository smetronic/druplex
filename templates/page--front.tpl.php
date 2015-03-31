<?php

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
 * - $page['slider']: Items for the slider content region.
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

<div id="main-wrapper" class="container-fluid">

<!-- Main Navigation -->
<header>
<nav class="navbar container-fluid navbar-aqua header-nav" role="navigation">
  <div id="main-nav">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- Logo -->
      <div id="logo" class="col-md-3">
        <?php if ($logo) : ?>
          <a href="<?php print $front_page; ?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="logo" /></a>
        <?php elseif ($site_name) : ?>
          <a href="<?php print $front_page; ?>" id="site-name"><h1><?php print $site_name; ?></h1></a>
        <?php endif; ?>
      </div>
      <!--End of Logo-->
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <?php if ($primary_nav): print render($primary_nav); endif; ?>
    </div>
  </div>
</nav>
</header>
<!-- End of Main Navigation -->

  <!-- slider region -->
   
  <?php if ($page['slider']) : ?>
    <div id="slider-region">
      <div class="row wrapper slider-theme">
        <div class="col-md-12">
          <?php print render($page['slider']); ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
   
  <!-- End of slider region -->
  
  <!-- Featured region -->
  
  <?php if ($page['featured']) : ?>
    <div id="featured-region">
      <div class="row wrapper">
        <div class="col-md-12">
          <?php print render($page['featured']); ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
   
  <!-- End of Featured region -->
  
  <!-- Help region -->
  
  <?php if ($page['help']) : ?>
    <div id="help-region">
      <div class="row wrapper">
        <div class="col-md-12">
        
          <!-- Rendering of the help region -->
          <?php print render($page['help']); ?>
       
          <!-- Rendering of the action links -->
          <?php if ($action_links): ?>
            <ul class="nav nav-pills">
              <?php print render($action_links); ?>
            </ul>
          <?php endif; ?>

        </div>
      </div>
    </div>
  <?php endif; ?>
   
  <!-- End of Help region -->
  
  <!-- Content, Sidebar First and Sidebar Second regions -->
  
  <div id="main-content">
    
    <?php if ($messages) : ?>
      <div class="row wrapper">
        <div class="col-md-12">
        
          <!-- Output the messages -->
          <?php if ($messages) { print render($messages); } ?>
          
        </div>
      </div>
    <?php endif; ?>
    
    <div class="row wrapper">
    
      <!-- If the Sidebar First has content then it will be rendered -->
     
      <?php if ($page['sidebar_first']) : ?>
        <div id="sidebar-first-region" class="<?php print $sidebar_class; ?>">
          <?php print render($page['sidebar_first']); ?>
        </div>
      <?php endif; ?>

      <!-- End of Sidebar First region -->
     
      <!-- Rendering of the main content -->
      
      <div id="content-region" class="<?php print $content_class; ?>">
        
        <!-- Rendering the tabs to view and edit nodes -->
        <?php if ($tabs) : ?>
          <?php print render($tabs); ?>
        <?php endif; ?>
        
        <!-- Rendering the content -->
        <?php print render($page['content'])?>
          
        <!-- Printing the feed icons -->
        <?php print $feed_icons; ?>
       
      </div>

      <!-- End of the main content -->
    
      <!-- If the Sidebar Second has content then it will be rendered -->
      
      <?php if ($page['sidebar_second']) : ?>
        <div id="sidebar-second-region" class="<?php print $sidebar_class; ?>">
          <?php print render($page['sidebar_second']); ?>
        </div>
      <?php endif; ?>

      <!-- End of Sidebar Second region -->
    
    </div>
  </div>

  <!-- End of Content, Sidebar First and Sidebar Second regions -->
  
  <!-- Content wide 1 region -->
  
  <?php if ($page['content_wide1']) : ?>
  
  <div id="content-wide1-region">
    <div class="row wrapper">
      <div class="col-md-12">
        <?php print render($page['content_wide1']); ?>
      </div>
    </div>
  </div>
  
  <?php endif; ?>
  
  <!-- End of Content wide 1 region -->
  
  <!-- Content wide 2 region -->
  
  <?php if ($page['content_wide2']) : ?>
  
  <div id="content-wide2-region">
    <div class="row wrapper">
      <div class="col-md-12">
        <?php print render($page['content_wide2']); ?>
      </div>
    </div>
  </div>
  
  <?php endif; ?>
  
  <!-- End of Content wide 2 region -->
  
  <!-- Content wide 3 region -->
  
  <?php if ($page['content_wide3']) : ?>
  
  <div id="content-wide3-region">
    <div class="row wrapper">
      <div class="col-md-12">
        <?php print render($page['content_wide3']); ?>
      </div>
    </div>
  </div>
  
  <?php endif; ?>
  
  <!-- End of Content wide 3 region -->
  
  <!-- Content wide 4 region -->
  
  <?php if ($page['content_wide4']) : ?>
  
  <div id="content-wide4-region">
    <div class="row wrapper">
      <div class="col-md-12">
        <?php print render($page['content_wide4']); ?>
      </div>
    </div>
  </div>
  
  <?php endif; ?>
  
  <!-- End of Content wide 4 region -->
  
  <!-- Before Footer region -->
  
  <?php if ($page['before_footer']) : ?>
    <div id="before-footer-region">
      <div class="row wrapper">
        <div class="col-md-12">
          <?php print render($page['before_footer']); ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
  
  <!-- End of Before Footer region -->
  
  <!-- Footer Columns region -->
  
  <?php if ($footer_columns > 0) : ?>
    <div id="footer-four-columns">
  
      <div class="row wrapper">
  
        <?php if ($page['footer_firstcolumn']) : ?>
          <div id="footer-first-region" class="<?php print $footer_class; ?>">
            <?php print render($page['footer_firstcolumn']); ?>
          </div>
        <?php endif; ?>
  
        <?php if ($page['footer_secondcolumn']) : ?>
          <div id="footer-second-region" class="<?php print $footer_class; ?>">
            <?php print render($page['footer_secondcolumn']); ?>
          </div>
        <?php endif; ?>
  
        <?php if ($page['footer_thirdcolumn']) : ?>
          <div id="footer-third-region" class="<?php print $footer_class; ?>">
            <?php print render($page['footer_thirdcolumn']); ?>
          </div>
        <?php endif; ?>
  
        <?php if ($page['footer_fourthcolumn']) : ?>
          <div id="footer-fourth-region" class="<?php print $footer_class; ?>">
            <?php print render($page['footer_fourthcolumn']); ?>
          </div>
        <?php endif; ?>
  
      </div>
  
    </div>
  <?php endif; ?>
  
  <!-- End of Footer Columns region -->
  
  <!-- Footer region -->
  
  <footer>
  
    <div class="row wrapper">
  
      <?php if ($page['footer_left']) : ?>
        <div id="footer-left-region" class="<?php print $last_footer_class ?>">
          <?php print render($page['footer_left']); ?>
        </div>
      <?php endif; ?>
  
      <?php if ($page['footer_right']) : ?>
        <div id="footer-right-region" class="<?php print $last_footer_class ?>">
          <?php print render($page['footer_right']); ?>
        </div>
      <?php endif; ?>
  
    </div>
  
  </footer>
  
  <!-- End of Footer region -->

</div>