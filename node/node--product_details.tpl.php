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
 
?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>
  <?php print render($content['field_short_discription']); ?>
  <?php print render($title_suffix); ?>
  <?php if ($display_submitted): ?>
    <div class="submitted">
      <?php print $submitted; ?>
    </div>
  <?php endif; ?>
  <div class="content"<?php print $content_attributes; ?>>
  	<div class="four columns alpha">
    	<figure>
			<?php 
			//This would be the standard way of grabbing the image along with img object
			//print render($content['field_featured_image']);
			//However I want to grab just the url
			//field_featured_image is the name of the image field
  
			  // using field_get_items() you can get the field values (respecting multilingual setup)
			  $field_image_url = field_get_items('node', $node, 'field_featured_image');
			  
			  // after you have the values, you can get the image URL (you can use foreach here)
			  $image_url = file_create_url($field_image_url[0]['uri']);		  
			 ?>
             <a href="<?php print $image_url; ?>" class="fancybox" title="<?php print $title; ?>">
             	<img src="<?php print $image_url; ?>" class="scale-with-grid" alt="<?php print $title; ?>" />
             </a>
        </figure>
    </div>
    <div class="seven columns omega">
    	<div id="Tab">          
            <ul class="resp-tabs-list">
                <li><i class="fa fa-info"></i> Specs</li>
                <li><i class="fa fa-file"></i> Documents</li>
                <li><i class="fa fa-cog"></i>Templates</li>
            </ul>
            <div class="resp-tabs-container">  
                <div><?php print render($content['field_spec_body']); ?></div>
                <div><?php print render($content['field_documents']); ?></div>
                <div><?php print render($content['field_templates']); ?></div>
            </div>
        </div>
		<?php //print render($content); ?>
    </div>
  </div>
  <?php print render($content['links']); ?>
  <?php print render($content['comments']); ?>
</div>
<?php if( $title == "116 Series Door Closer"){ ?>
	  <h5>116-Series Accessories</h5>
        <hr>
	  <?php print views_embed_view('116_accessories'); ?>
<?php }; ?>
<?php if( $title == "316R Door Replacement Closer"){ ?>
	  <h5>316-Series Accessories</h5>
        <hr>
	  <?php print views_embed_view('316_accessories'); ?>
<?php }; ?>
<?php if( $title == "316 Series Door Closer"){ ?>
	  <h5>316-Series Accessories</h5>
        <hr>
	  <?php print views_embed_view('316_accessories'); ?>
<?php }; ?>
<?php if( $title == "416 Series Door Closer"){ ?>
	  <h5>416-Series Accessories</h5>
        <hr>
	  <?php print views_embed_view('416_accessories'); ?>
<?php }; ?>

