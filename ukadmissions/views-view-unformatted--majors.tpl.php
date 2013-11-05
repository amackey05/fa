<?php
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<div class="majorHowtoWrap">
	<div class="majorWrap">
		<?php if (!empty($title)): ?>
          <h3 class="accHeader"><?php print $title; ?></h3>
        <?php endif; ?>
        <?php foreach ($rows as $id => $row): ?>
          <!--<div class="<?php print $classes[$id]; ?>">-->
          <div class="accContent">
            <?php print $row; ?>
          </div>
        <?php endforeach; ?>
	</div>
</div>