<?php use_helper('I18N', 'Date', 'rtText', 'rtForm', 'rtDate', 'rtSite') ?>

<div class="rt-site-page rt-show rt-primary-container rt-admin-edit-tools-panel">
  <?php echo link_to(__('Edit'), 'rtSitePageAdmin/edit?id='.$rt_site_page->getId(), array('class' => 'rt-admin-edit-tools-trigger')) ?>
  <?php include_partial('site_page', array('rt_site_page' => $rt_site_page, 'sf_cache_key' => $rt_site_page->getId())) ?>
</div>