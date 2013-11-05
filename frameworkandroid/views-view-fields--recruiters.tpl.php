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
			case 'nid':
				$nid = $field->content;
				break;
			case 'title':
				$title = $field->content;
				break;
			case 'field-email-value':
				$email = $field->content;
				break;
			case 'field-phone-value':
				$phone = $field->content;
				break;
			case 'body':
				$bodytext = $field->content;
				break;
			case 'field-rimage-fid':
				$image = $field->content;
				break;
		}
		global $base_url;
	?>
<?php endforeach; ?>

<div class="recruiter_contain">
    <table width="100%" cellpadding="5">
		<tr>
        <td valign="top">
            <?php print $image; ?>
        </td>
        <td class="recruiter_info">
            <span class="recruiter_blue"><?php print $title; ?></span> <span class="recruiter_black"><?php print $phone; ?></span>
            <p><?php print $bodytext; ?></p>
        </td>
        </tr>
        <tr>
        <td></td>
        <td class="rec_contact">
        	<h3 class="rec_contact_trigger" recdex="<?php echo $nid ?>">Contact <?php echo $title; ?></h3><br />
        	<div class="rec_hide" recdex="<?php echo $nid; ?>">
                <form action="<?php echo $base_url; ?>/recemail">
                    Your Name:<br /> <input type="text" id="name" name="name" /><br />
                    Your Email:<br /> <input type="text" id="email" name="email" /><br />
                    Your Message:<br />
                    <input type="hidden" name="remail" id="remail" value="<?php echo $email; ?>" />
                    <textarea name="msg" id="msg" rows="3" cols="50"></textarea>
                    <br />
                    <input type="submit" value="Send Message" />
                </form>
            </div>
        </td>
        </tr>
    </table>
</div>