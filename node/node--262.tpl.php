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
  <div class="four columns alpha">
  <form action="" id="closer_<?php print $node->nid;?>">
  	<legend title="Door Closers">
      <label for="closers">Door Closers</label>
      <select id="closers">
      	<option value="" selected="selected">--Select--</option>
        <?php 
            $query = db_select('node', 'n');
            $query->join('field_data_field_categories', 'fc', 'fc.entity_id = n.nid');
            $query->join('taxonomy_term_data', 'td', 'td.tid = fc.field_categories_tid');
            
            $query
            ->fields('n', array('nid', 'title'))
            ->condition('n.type', 'product_comparison')
            ->condition('td.name', 'Product Comparison Door Closers');
            
            $result = $query->execute();
            foreach ($result as $field){
                echo '<option value="'. $field->nid .'">'.$field->title.'</option>';
            }
        ?>
      </select>
     </legend>
  </form>
  <form action="" id="exitdevices_<?php print $node->nid;?>">
  	<legend title="Exit Devices">
      <label for="exitdevices">Exit Devices</label>
      <select id="exitdevices">
      	<option value="" selected="selected">--Select--</option>
        <?php 
            $query = db_select('node', 'n');
            $query->join('field_data_field_categories', 'fc', 'fc.entity_id = n.nid');
            $query->join('taxonomy_term_data', 'td', 'td.tid = fc.field_categories_tid');
            
            $query
            ->fields('n', array('nid', 'title'))
            ->condition('n.type', 'product_comparison')
            ->condition('td.name', 'Product Comparison Exit Devices');
            
            $result = $query->execute();
            foreach ($result as $field){
                echo '<option value="'. $field->nid .'">'.$field->title.'</option>';
            }
        ?>
      </select>
     </legend>
  </form>
  </div>
  <div class="six columns omega">
    <!-- Show Results -->
  <?php 
		$query = db_select('node', 'n');
		$query->join('field_data_field_categories', 'fc', 'fc.entity_id = n.nid');
		$query->join('taxonomy_term_data', 'td', 'td.tid = fc.field_categories_tid'); 
		$query->join('field_data_field_featured_image', 'fi', 'fi.entity_id = n.nid');
		$query->join('file_managed', 'fm', 'fm.fid = fi.field_featured_image_fid');
		$query->join('field_data_body', 'fb', 'fb.entity_id = n.nid');
		
		$query
		->fields('n', array('nid', 'title'))
		->fields('fm', array('uri'))
		->fields('fb', array('body_value'))
		->condition('n.type', 'product_comparison');
		
		$result = $query->execute();
		foreach ($result as $field){
			echo '<div id="results'. $field->nid .'" class="results"><h3>'.$field->title.'</h3>';
			echo '<img src="'.file_create_url($field->uri).'" class="scale-with-grid" alt="'.$field->title.'" />';
			echo $field->body_value;
			echo '</div>';
		}
	?>
	</div>
</div>
