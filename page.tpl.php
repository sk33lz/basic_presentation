<?php
// $Id: page.tpl.php $
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head>
  <?php print $head ?>
  <title><?php print $head_title ?></title>
  <?php print $styles ?>
  <?php print $scripts ?>
</head>
<body>
<div id="wrap">
  <div id="header">
    <?php if ($logo) : ?>
    <a class='site-logo' href="<?php print $front_page ?>" title="<?php print t('Home') ?>"><img src="<?php print($logo) ?>" alt="<?php print t('Home') ?>" border="0" /></a>
    <?php endif; ?>
    <?php if ($site_name) : ?>
    <div class='site-name'><h1><a href="<?php print $front_page ?>" title="<?php print t('Home') ?>"><?php print($site_name) ?></a></h1></div>
    <?php endif;?>
    <?php if ($site_slogan) : ?>
    <div class='site-slogan'><h2 class='site-slogan'><?php print($site_slogan) ?></h2></div>
    <?php endif;?>
  </div>
  
  <div id="sidebar">
    <div class="navmenu">
	  <?php if ($primary_links): ?>
      <div id="primary-menu">
      <?php print $primary_links_tree; ?>
      </div><!-- /primary links menu -->
      <?php endif; ?>
	  <?php print $left ?>
    </div>
  </div>
  
  <div id="main">
    <div class="headerimage"></div>
	<?php if ($content_top): ?>
	<div class="content_top"><?php print $content_top ?></div>
	<?php endif; ?>
	<div class="content">
      <?php print $breadcrumb; ?>
      <?php if ($mission): print '<div id="mission">'. $mission .'</div>'; endif; ?>
      <?php if ($tabs): print '<div id="tabs-wrapper" class="clear-block">'; endif; ?>
      <?php if ($title): print '<h2'. ($tabs ? ' class="with-tabs"' : '') .'>'. $title .'</h2>'; endif; ?>
      <?php if ($tabs): print '<ul class="tabs primary">'. $tabs .'</ul></div>'; endif; ?>
      <?php if ($tabs2): print '<ul class="tabs secondary">'. $tabs2 .'</ul>'; endif; ?>
      <?php if ($show_messages && $messages): print $messages; endif; ?>
      <?php print $help; ?>
      <div class="clear-block">
        <?php print $content ?>
      </div>
    </div>
    <?php if ($content_bottom): ?>
	<div id="content_bottom">
    <?php print $content_bottom ?>
    </div>
	<?php endif; ?>
    <?php if ($q1 || $q2 || $q3 || $q4): ?>
	<div id="quarters">
	  <?php if ($q1): ?>
      <div class="q1">
        <?php print $q1 ?>
      <?php endif; ?>
	  </div>
	  <?php if ($q2): ?>
      <div class="q2">
        <?php print $q2 ?>
      </div>
	  <?php endif; ?>
	  <?php if ($q3): ?>
      <div class="q3">
        <?php print $q3 ?>
      </div>
	  <?php endif; ?>
	  <?php if ($q4): ?>
      <div class="q4">
        <?php print $q4 ?>
      </div>
	  <?php endif; ?>
    </div>
	<?php endif; ?>
  </div>
  <?php if ($footer): ?>
  <div id="footer">
	  <div id="footer_1">
	    <div id="copy1"><p class="copy1">&copy; 2011 <a href="#"><?php print $site_name ?></a> |</p></div>
	    <div id="secondary_links"><?php print $secondary_links_tree ?></div>
	  </div>
	  <div id="copy2">
	    <p class="copy2"><a href="http://andreasviklund.com/templates/learn/" title="Template design">Template design</a> by <a href="http://andreasviklund.com/" title="Andreas Viklund">Andreas Viklund</a> | <a href="http://arborwebdevelopment.com/drupal-theming" title="Drupal theming">Drupal Theming</a> by <a href="http://arborwebdevelopment.com" title="Arbor Web Development">Arbor Web Development</a></p>
	  </div>
	  <div id="footer_2">
	  <?php print $footer ?>
	  </div>
  </div>
  <?php endif; ?>
</div>
<?php print $closure ?>
</body>
</html>