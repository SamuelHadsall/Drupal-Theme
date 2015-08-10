<?php print $fields['field_short_discription']->content; ?>
  	<div class="four columns alpha">
    	<figure>
             <a href="<?php print $fields['uri_2']->content; ?>" class="fancybox" title="<?php print $fields['field_description']->content; ?>">
             	<img src="<?php print $fields['uri_2']->content; ?>" class="scale-with-grid" alt="<?php print $fields['field_description']->content; ?>" title="<?php print $fields['field_description']->content; ?>" />
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
                <div><?php print $fields['field_spec_body']->content; ?></div>
                <div><a href="<?php print $fields['uri']->content; ?>" title="<?php print $fields['field_title']->content; ?>"><?php print $fields['field_title']->content; ?></a></div>
                <div><a href="<?php print $fields['uri_1']->content; ?>" title="<?php print $fields['field_title_1']->content; ?>"><?php print $fields['field_title_1']->content; ?></a></div>
            </div>
        </div>
    </div>
