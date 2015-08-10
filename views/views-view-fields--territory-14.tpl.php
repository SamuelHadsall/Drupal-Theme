<?php

/**
 * @file
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
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
?>
<div class="four columns alpha">
    <div class="replist">
        <h3><?php print $fields['name']->content; ?></h3>
		<?php print $fields['picture']->content; ?>
        <div>
            <h4><?php print $fields['field_agency']->content; ?></h4>
            <p><i class="fa fa-phone fa-lg"></i>&nbsp;-&nbsp;<?php print $fields['field_phone_number']->content; ?></p>
            <p><i class="fa fa-mobile fa-2x"></i>&nbsp;-&nbsp;<?php print $fields['field_cell_number']->content; ?></p>
            <p><i class="fa fa-info-circle"></i>&nbsp;-&nbsp;<a href="<?php print $fields['field_vcard']->content; ?>" title="VCard">VCARD</a></p>
            <p><i class="fa fa-envelope"></i>&nbsp;-&nbsp;<?php print $fields['contact']->content; ?></p>
        </div>
    </div>
</div>        	
