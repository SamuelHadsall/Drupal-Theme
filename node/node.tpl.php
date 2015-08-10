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
<?php if( $title == "Contact Us"){ ?>

<div class="nine columns alpha"> <?php print render($content); ?>
  <div id="mobile_Rep_Map"></div>
  <div class="dktp-oly"> <img src="<?php print base_path() . path_to_theme() ?>/images/usa2.png" usemap="#rep_Map" alt="<?php print $title; ?>" />
    <map name="rep_Map" id="rep_Map">
      <area shape="rect" coords="356,27,391,53" href="456" alt="Territory 5 – MI" title="Territory 5 – MI" />
      <area shape="poly" coords="339,114,342,94,344,78,354,62,367,73,378,97,367,107,354,111" href="456" alt="Territory 5 – MI" title="Territory 5 – MI" />
      <area shape="poly" coords="195,106,223,110,255,114,261,126,262,135,271,143,273,152,274,176,277,199,277,214,251,210,230,204,225,182,209,180,209,155,209,130,193,128" href="462" alt="Territory 23 – ME/KS/OK" title="Territory 23 – ME/KS/OK" />
      <area shape="rect" coords="221,6,247,26" href="462" alt="Territory 23 – ME/KS/OK" title="Territory 23 – ME/KS/OK" />
      <area shape="poly" coords="260,104,275,103,296,101,305,105,312,113,307,121,301,127,300,136,304,142,309,147,319,142,329,137,336,135,337,145,333,155,330,165,326,173,318,175,306,175,293,176,278,177,276,164,276,153,273,142,266,134,261,115" href="458" alt="Territory 12 – IA/MO/S.IL" title="Territory 12 – IA/MO/S.IL" />
      <area shape="poly" coords="97,23,92,51,96,60,88,75,85,99,109,104,100,162,153,168,205,173,206,130,190,131,196,34" href="465" alt="Territory 18 – UT/CO/WY/ID/MT" title="Territory 18 – UT/CO/WY/ID/MT"/>
      <area shape="rect" coords="98,-1,127,23" href="465" alt="Territory 18 – UT/CO/WY/ID/MT" title="Territory 18 – UT/CO/WY/ID/MT" />
      <area shape="poly" coords="275,181,281,214,287,237,286,262,322,268,335,252,348,253,347,243,370,239,370,222,353,174" href="460" alt="Territory 9 – AR/LA/MS/E.TN/AL" title="Territory 9 – AR/LA/MS/E.TN/AL"/>
      <area shape="rect" coords="298,282,331,308" href="460" alt="Territory 9 – AR/LA/MS/E.TN/AL" title="Territory 9 – AR/LA/MS/E.TN/AL"/>
      <area shape="rect" coords="297,351,330,377" href="469" alt="Territory 14 – S.CA/HI" title="Territory 14 – S.CA/HI"/>
      <area shape="poly" coords="221,346,244,368,274,380,291,372,268,346,234,330,219,334" href="469" alt="Territory 14 – S.CA/HI" title="Territory 14 – S.CA/HI"/>
      <area shape="rect" coords="276,8,308,31" href="457" alt="Territory 8 – ND/SD/MN/WI" title="Territory 8 – ND/SD/MN/WI" />
      <area shape="rect" coords="484,188,514,212" href="453" alt="Territory 7 – W.TN/N.GA/SC/NC" title="Territory 7 – W.TN/N.GA/SC/NC"/>
      <area shape="poly" coords="16,87,81,100,85,70,91,58,90,46,92,24,52,13,35,18,1,25,3,47,28,49" href="466" alt="Territory 17 – WA/OR/AK" title="Territory 17 – WA/OR/AK" />
      <area shape="poly" coords="309,145,336,132,335,118,330,108,309,109,312,114,302,131,302,139" href="459" alt="Territory 6 – N.IL" title="Territory 6 – N.IL" />
      <area shape="rect" coords="312,11,343,30" href="458" alt="Territory 12 – IA/MO/S.IL" title="Territory 12 – IA/MO/S.IL" />
      <area shape="rect" coords="0,184,31,207" href="467" alt="Territory 16" title="Territory 16 – N.CA/N.NV" />
      <area shape="poly" coords="18,90,104,108,100,134,82,134,50,138,23,153,14,121" href="467" alt="Territory 16 – N.CA/N.NV" title="Territory 16 – N.CA/N.NV" />
      <area shape="rect" coords="378,59,410,82" href="454" alt="Territory 11 – IN/KY/OH/WV/VA/W.PA" title="Territory 11 – IN/KY/OH/WV/VA/W.PA" />
      <area shape="poly" coords="447,159,326,177,334,161,339,143,338,119,357,116,360,131,396,124,397,133,415,131,411,144,439,143" href="454" alt="Territory 11 – IN/KY/OH/WV/VA/W.PA" title="Territory 11 – IN/KY/OH/WV/VA/W.PA" />
      <area shape="rect" coords="427,231,462,258" href="452" alt="Territory 4 – S.GA/N.FL" title="Territory 4 – S.GA/N.FL"/>
      <area shape="poly" coords="408,238,426,263,399,264,386,249,373,258,357,251,347,252,347,245,370,238,370,223,412,227" href="452" alt="Territory 4 – S.GA/N.FL" title="Territory 4 – S.GA/N.FL" />
      <area shape="rect" coords="433,319,467,344" href="451" alt="Territory 2 – S.FL" title="Territory 2 – S.FL" />
      <area shape="poly" coords="425,265,399,266,399,276,421,311,435,299,430,276" href="451" alt="Territory 2 – S.FL" title="Territory 2 – S.FL" />
      <area shape="rect" coords="21,311,55,336" href="466" alt="Territory 17 – WA/OR/AK" title="Territory 17 – WA/OR/AK"/>
      <area shape="poly" coords="200,374,185,348,154,336,128,348,93,360,35,370,10,367,9,360,66,356,104,339,75,323,60,295,82,267,115,254,131,251,157,261,178,269,183,272,181,330,197,339,218,368,215,377" href="466" alt="Territory 17 – WA/OR/AK" title="Territory 17 – WA/OR/AK" />
      <area shape="rect" coords="258,313,292,338" href="461" alt="Territory 21 – TX" title="Territory 21 – TX"/>
      <area shape="rect" coords="19,221,51,244" href="469" alt="Territory 14 – S.CA/HI" title="Territory 14 – S.CA/HI" />
      <area shape="poly" coords="79,214,91,192,72,165,62,153,52,139,22,155,33,180,55,208" href="469" alt="Territory 14 – S.CA/HI" title="Territory 14 – S.CA/HI" />
      <area shape="poly" coords="359,112,393,105,394,120,361,126" href="455" alt="Territory 20 – N.OH/E.PA/NY/ME/NH/VT/MA/RI/CT/NJ/DE/MD/DC" title="Territory 20 – N.OH/E.PA/NY/ME/NH/VT/MA/RI/CT/NJ/DE/MD/DC" />
      <area shape="poly" coords="423,100,445,97,449,120,425,125" href="454" alt="Territory 11 – IN/KY/OH/WV/VA/W.PA" title="Territory 11 – IN/KY/OH/WV/VA/W.PA" />
      <area shape="poly" coords="197,35,193,104,253,111,259,103,300,100,299,90,287,84,287,76,287,72,291,68,291,63,294,59,297,54,300,48,308,44,267,33" href="457" alt="Territory 8 – ND/SD/MN/WI" title="Territory 8 – ND/SD/MN/WI" />
      <area shape="poly" coords="290,67,292,66,300,60,313,66,328,71,336,80,330,102,317,107,307,107,301,93,293,87,289,81,288,74" href="457" alt="Territory 8 – ND/SD/MN/WI" title="Territory 8 – ND/SD/MN/WI" />
      <area shape="rect" coords="417,19,451,43" href="455" alt="Territory 20 – N.OH/E.PA/NY/ME/NH/VT/MA/RI/CT/NJ/DE/MD/DC" title="Territory 20 – N.OH/E.PA/NY/ME/NH/VT/MA/RI/CT/NJ/DE/MD/DC"  />
      <area shape="poly" coords="397,104,401,130,420,127,414,142,450,143,455,121,425,127,423,98,447,96,452,114,457,111,482,93,474,78,499,46,485,22,475,21,466,45,434,63,424,73,422,85,407,88" href="455" alt="Territory 20 – N.OH/E.PA/NY/ME/NH/VT/MA/RI/CT/NJ/DE/MD/DC" title="Territory 20 – N.OH/E.PA/NY/ME/NH/VT/MA/RI/CT/NJ/DE/MD/DC"/>
      <area shape="rect" coords="491,56,513,179" href="455" alt="Territory 20 – N.OH/E.PA/NY/ME/NH/VT/MA/RI/CT/NJ/DE/MD/DC" title="Territory 20 – N.OH/E.PA/NY/ME/NH/VT/MA/RI/CT/NJ/DE/MD/DC"  />
      <area shape="poly" coords="354,172,447,160,454,172,446,183,434,195,426,198,425,208,414,214,409,224,370,222" href="453" alt="Territory 7 – W.TN/N.GA/SC/NC" title="Territory 7 – W.TN/N.GA/SC/NC" />
      <area shape="poly" coords="92,191,81,216,104,230,119,236,133,237,141,239,146,233,155,234,180,235,195,235,196,173,98,164,101,136,54,139" href="464" alt="Territory 28 – S.NV/AZ/NM" title="Territory 28 – S.NV/AZ/NM" />
      <area shape="poly" coords="166,242,176,251,179,260,190,269,201,264,211,265,221,277,233,297,252,308,262,281,283,265,286,244,283,225,279,216,260,215,226,205,224,181,199,181,197,235,164,235" href="461" alt="Territory 21 – TX" title="Territory 21 – TX" />
      <area shape="rect" coords="63,235,93,254" href="464" alt="Territory 28 – S.NV/AZ/NM" title="Territory 28 – S.NV/AZ/NM" />
      <area shape="rect" coords="168,5,196,25" href="459" alt="Territory 6 – N.IL" title="Territory 6 – N.IL" />
      <area shape="poly" coords="195,106,223,110,255,114,261,126,262,135,271,143,273,152,274,176,277,199,277,214,251,210,230,204,225,182,209,180,209,155,209,130,193,128" href="462" alt="Territory 23 – ME/KS/OK" title="Territory 23 – ME/KS/OK" />
      <area shape="poly" coords="260,105,275,104,296,102,305,106,312,114,307,122,301,128,300,137,304,143,309,148,319,143,329,138,336,136,337,146,333,156,330,166,326,174,318,176,306,176,293,177,278,178,276,165,276,154,273,143,266,135,261,116" href="458" alt="Territory 12 – IA/MO/S.IL" title="Territory 12 – IA/MO/S.IL" />
    </map>
  </div>
  <div class="internationl_maps"> <a href="468" title="Territory 03 – Mexico"> <img src="<?php print base_path() . path_to_theme() ?>/images/mexico.png" alt="<?php print $title; ?>" /> </a> <a href="470" title="canada"> <img src="<?php print base_path() . path_to_theme() ?>/images/canada.png" alt="<?php print $title; ?>" /> </a> </div>
</div>
<div class="three columns alpha omega">
  <p><strong>1108 Center Rd.</strong></p>
  <p><strong>Rogersville, MO 65742</strong></p>
  <p><strong>Phone: 877.258.1262</strong></p>
  <p><strong>Fax: 877.888.0150</strong></p>
  <br />
  <?php print views_embed_view('admin_list'); ?> </div>
<?php } else { ?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>> <?php print $user_picture; ?> <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
  <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
  <?php if ($display_submitted): ?>
  <div class="submitted"> <?php print $submitted; ?> </div>
  <?php endif; ?>
  <div class="row"<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
  </div>
  <?php //Holy cow there are a lot, but We are embeding the views here that was created in admin so we can target specific pages ?>
  <?php if( $title == "Products"){ ?>
  <?php print views_embed_view('products'); ?>
  <?php }; ?>
  <?php if( $title == "Hinges"){ ?>
  <?php print views_embed_view('hinges'); ?>
  <?php }; ?>
  <?php if( $title == "Locksets"){ ?>
  <?php print views_embed_view('locksets'); ?>
  <?php }; ?>
  <?php if( $title == "Door Closers"){ ?>
  <?php print views_embed_view('door_closers'); ?>
  <?php }; ?>
  <?php if( $title == "Exit Devices"){ ?>
  <?php print views_embed_view('exit_devices'); ?>
  <?php }; ?>
  <?php if( $title == "Flat Goods"){ ?>
  <?php print views_embed_view('flat_goods'); ?>
  <?php }; ?>
  <?php if( $title == "Design Electric"){ ?>
  <?php print views_embed_view('design_electric'); ?>
  <?php }; ?>
  <?php if( $title == "Thresholds and Weatherstripping"){ ?>
  <?php print views_embed_view('thresholds_weatherstripping'); ?>
  <?php }; ?>
  <?php if( $title == "Accessory Items and Misc"){ ?>
  <?php print views_embed_view('accessory_items'); ?>
  <?php }; ?>
  <?php if( $title == "Product Comparison"){ ?>
  <?php print views_embed_view('door_closers_pcc'); ?>
  <?php }; ?>
  <?php if( $title == "Canada"){ ?>
  <?php print views_embed_view('canada'); ?>
  <?php }; ?>
  <?php if( $title == "Territory 2 – S.FL"){ ?>
  <?php print views_embed_view('territory_02'); ?>
  <?php }; ?>
  <?php if( $title == "Territory 03 – Mexico"){ ?>
  <?php print views_embed_view('territory_03'); ?>
  <?php }; ?>
  <?php if( $title == "Territory 16 – N.CA/N.NV"){ ?>
  <?php print views_embed_view('territory_16'); ?>
  <?php }; ?>
  <?php if( $title == "Territory 14 – S.CA/HI"){ ?>
  <?php print views_embed_view('territory_14'); ?>
  <?php }; ?>
  <?php if( $title == "Territory 17 – WA/OR"){ ?>
  <?php print views_embed_view('territory_17'); ?>
  <?php }; ?>
  <?php if( $title == "Territory 18 – UT/CO/WY/ID/MT"){ ?>
  <?php print views_embed_view('territory_18'); ?>
  <?php }; ?>
  <?php if( $title == "Territory 28 – S.NV/AZ/NM"){ ?>
  <?php print views_embed_view('territory_28'); ?>
  <?php }; ?>
  <?php if( $title == "Territory 21 – TX"){ ?>
  <?php print views_embed_view('territory_21'); ?>
  <?php }; ?>
  <?php if( $title == "Territory 23 – ME/KS/OK"){ ?>
  <?php print views_embed_view('territory_23'); ?>
  <?php }; ?>
  <?php if( $title == "Territory 9 – AR/LA/MS/E.TN/AL"){ ?>
  <?php print views_embed_view('territory_09'); ?>
  <?php }; ?>
  <?php if( $title == "Territory 6 – N.IL"){ ?>
  <?php print views_embed_view('territory_06'); ?>
  <?php }; ?>
  <?php if( $title == "Territory 12 – IA/MO/S.IL"){ ?>
  <?php print views_embed_view('territory_12'); ?>
  <?php }; ?>
  <?php if( $title == "Territory 8 – ND/SD/MN/WI"){ ?>
  <?php print views_embed_view('territory_08'); ?>
  <?php }; ?>
  <?php if( $title == "Territory 5 – MI"){ ?>
  <?php print views_embed_view('territory_05'); ?>
  <?php }; ?>
  <?php if( $title == "Territory 20 – N.OH/E.PA/NY/ME/NH/VT/MA/RI/CT/NJ/DE/MD/DC"){ ?>
  <?php print views_embed_view('territory_20'); ?>
  <?php }; ?>
  <?php if( $title == "Territory 11 – IN/KY/OH/WV/VA/W.PA"){ ?>
  <?php print views_embed_view('territory_11'); ?>
  <?php }; ?>
  <?php if( $title == "Territory 7 – W.TN/N.GA/SC/NC"){ ?>
  <?php print views_embed_view('territory_07'); ?>
  <?php }; ?>
  <?php if( $title == "Territory 4 – S.GA/N.FL"){ ?>
  <?php print views_embed_view('territory_04'); ?>
  <?php }; ?>
  <?php if($title == "116 Drop Plates"){ ?>
  	<?php print views_embed_view('116_drop_plates'); ?>
  <?php } ?>
  <?php if($title == "316 Drop Plates"){ ?>
  	<?php print views_embed_view('316_drop_plates'); ?>
  <?php } ?>
  <?php if($title == "416 Drop Plates"){ ?>
  	<?php print views_embed_view('416_drop_plates'); ?>
  <?php } ?>
  <?php if($title == "Electrified Exit Devices"){ ?>
  	<?php print views_embed_view('electrified_exit_devices'); ?>
  <?php } ?>
  <?php if($title == "Electrified Locksets"){ ?>
  	<?php print views_embed_view('electrified_locksets'); ?>
  <?php } ?>
  <?php if($title == "Power Supplies"){ ?>
  	<?php print views_embed_view('power_supplies'); ?>
  <?php } ?>
  <?php print render($content['links']); ?> <?php print render($content['comments']); ?>
  <?php } ?>
</div>
