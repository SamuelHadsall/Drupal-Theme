<?php

/**
 * @file
 * Default theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct URL of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type; for example, "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type; for example, story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode; for example, "full", "teaser".
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined; for example, $node->body becomes $body. When needing to
 * access a field's raw values, developers/themers are strongly encouraged to
 * use these variables. Otherwise they will have to explicitly specify the
 * desired field language; for example, $node->body['en'], thus overriding any
 * language negotiation rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 *
 * @ingroup themeable
 */
 
/*$result = db_query("SELECT nid, title FROM {node} WHERE type = :type", array( ':type' => 'product_comparison',)); 
if ($result) {
	while ($row = $result->fetchAssoc()) {
	  // Do something with:
	  print $row['title'];
	  //    $row['quantity']
	}
}*/
 
?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <div class="row"<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
  </div>
	<?php 
        $query = db_select('users', 'u');
		$query->join('field_data_field_agency', 'fa', 'fa.entity_id = u.uid');
		$query->join('field_data_field_phone_number', 'pn', 'pn.entity_id = u.uid');
		$query->join('field_data_field_cell_number', 'cn', 'cn.entity_id = u.uid');
		$query->join('field_data_field_vcard', 'vc', 'vc.entity_id = u.uid');
		$query->join('file_managed', 'fm', 'fm.fid = vc.field_vcard_fid');
        $query->join('field_data_field_categories', 'fc', 'fc.entity_id = u.uid');
        $query->join('taxonomy_term_data', 'td', 'td.tid = fc.field_categories_tid');
        
        $query		
        ->fields('u', array('uid', 'name', 'picture'))
		->fields('fa', array('field_agency_value'))
		->fields('pn', array('field_phone_number_value'))
		->fields('cn', array('field_cell_number_value'))
		->fields('fm', array('fid', 'uri'))
			->condition('td.name', 'Territory 2');
        
        $result = $query->execute();
        foreach ($result as $field): ?>
			<div class="four columns alpha">
            	<div class="replist">
                	<h3><?php print $field->name ?></h3>
                    <a title="<?php print $field->name ?>" href="/www.designhardware.net/user/<?php print $field->uid ?>/contact">
                    	<?php if( $field->picture == 0 ){ ?>
                        	<img src="http://3.bp.blogspot.com/-DW7gkS4-g4A/Tm0XFwboniI/AAAAAAAAAb8/GZzjUFn5DWc/s1600/d_silhouette_Profile.jpg" alt="<?php print $field->name ?>" />
						<?php } else{ ?>
                        		<?php print $user_picture; ?>                            
                        <?php } ?>
                    </a>
                    <div>
                        <h4><?php print $field->field_agency_value ?></h4>
                        <p><i class="fa fa-phone fa-lg"></i>&nbsp;-&nbsp;<?php print $field->field_phone_number_value ?></p>
                        <p><i class="fa fa-mobile fa-2x"></i>&nbsp;-&nbsp;<?php print $field->field_cell_number_value ?></p>
                        <p><i class="fa fa-envelope"></i>&nbsp;-&nbsp;<a href="<?php print file_create_url($field->uri) ?>" title="VCard">VCARD</a></p>
                    </div>
                </div>
            </div>        	
     <?php endforeach ?>
</div>
