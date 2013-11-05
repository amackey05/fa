<?php

/**

 * @file views-view-fields.tpl.php

 * Default simple view template to all the fields as a row.

 *

 * - $view: The view in use.

 * - $fields: an array of $field objects. Each one contains:

 *   - $field->content: The output of the field.

 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.

 *   - $field->class: The safe class id to use.

 *   - $field->handler: The Views field handler object controlling this field. Do not use

 *     var_export to dump this object, as it can't handle the recursion.

 *   - $field->inline: Whether or not the field should be inline.

 *   - $field->inline_html: either div or span based on the above flag.

 *   - $field->separator: an optional separator that may appear before a field.

 * - $row: The raw result object from the query, with all data it fetched.

 *

 * @ingroup views_templates

 */

?>

<?php foreach ($fields as $id => $field): ?>
<?php
	switch($field->class) {
		case 'title':
			$title = str_replace('&lt;br /&gt;', '<br />', $field->content);
			$title = str_replace('&lt;br/&gt;', '<br />', $title);
			break;
		case 'field-sliderimg-fid':
			$image = $field->content;
			break;
		case 'field-youtube-url-value':
			//if we have a youtube url in the field, format it for lightbox
			if ( strpos($field->content, "youtube") !== FALSE || strpos($field->content, "youtu.be") !== FALSE )
			{
				$rawurl = $field->content;
				$url_parts = explode('?v=', $rawurl);
				$url_code = $url_parts[count($url_parts) -1];
				$more_parts = explode('&', $url_code);
				$url = 'http://www.youtube.com/embed/' . $more_parts[0] . '?wmode=transparent&rel=0';
				$rel_attr = 'lightframe[]';

			}
			else	//otherwise, just print a plain link
			{
				$url = $field->content;
				$rel_attr = '';
			}
			break;
	}
?>
<?php endforeach; ?>

<?php if($url) { ?>
	<li><h2><a href="<?php echo $url; ?>" rel="<?php echo $rel_attr; ?>"><?php echo $title; ?></h2><?php echo $image; ?></a></li>
   
<?php } else { ?>
	<li><h2><?php echo $title; ?></h2><?php echo $image; ?></li>
<?php } ?>