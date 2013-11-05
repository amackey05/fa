<?php
/**
 * @file views-view-list.tpl.php
 * Default simple view template to display a list of rows.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $options['type'] will either be ul or ol.
 * @ingroup views_templates
 */
?>

<div class="item-list">
  <?php if (!empty($title)) : ?>
  	<?php
		//this works because of how the college content type stores the college value as a key value
		//pair and the value is <href>~<title> format so we can pull it apart here
		//and get the URL we need
		//look for the key ($title) in each pair and get the URL when it matches
		foreach($variables['view']->result as $r) {
			if(strstr($r->node_data_field_mm_link_field_mm_college_value, $title)) {
				$parts = explode('~',$r->node_data_field_mm_link_field_mm_college_value);
				//print_r($parts);
				$link = $parts[1];
				continue;
			}
		}
	?>
    <h3 class="accHeader"><?php print $title; ?></h3>
  <?php endif; ?>

	<div class="accContent">
    <h4><a href="<?php echo $link; ?>"><?php echo $title; ?></a></h4>
    <ul>
		<?php foreach ($rows as $id => $row): ?>
          <li class="<?php print $classes[$id]; ?>"><?php print $row; ?></li>
        <?php endforeach; ?>
    </ul>
	</div>
</div>