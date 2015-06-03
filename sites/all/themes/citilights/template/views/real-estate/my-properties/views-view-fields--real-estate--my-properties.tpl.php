<article class="hentry">
  <div class="property-featured">
    <?php if($fields['field_real_properties_featured']->content) : ?><span class="featured"><i class="fa fa-star"></i></span><?php endif; ?>
    <a class="content-thumb" href="<?php print $fields['path']->content; ?>">
      <img src="<?php print image_style_url('grid_properties', $fields['field_real_thumbnail']->content); ?>" alt="">
    </a>
    <?php if(isset($fields['field_real_label']->content)) : ?><span class="property-label"><?php print $fields['field_real_label']->content; ?></span><?php endif; ?>
    <span class="property-category"><?php print $fields['field_real_type']->content; ?></span>
  </div>
  <div class="property-wrap">
    <h2 class="property-title">
      <a href="<?php print $fields['path']->content; ?>" title="<?php print $fields['title']->content; ?>"><?php print $fields['title']->content; ?></a>
    </h2>
    <div class="property-labels"></div>
    <div class="property-excerpt">
      <p><?php print strip_tags($fields['body']->content); ?></p>
      <p class="property-fullwidth-excerpt"><?php print strip_tags($fields['body']->content); ?></p>
    </div>
    <div class="property-summary">
      <div class="property-detail">
        <div class="size">
          <span><?php print $fields['field_real_area']->content; ?> <?php print t('sqft'); ?></span>
        </div>
        <div class="bathrooms">
          <span><?php print $fields['field_real_bathrooms']->content; ?></span>
        </div>
        <div class="bedrooms">
          <span><?php print $fields['field_real_bedrooms']->content; ?></span>
        </div>
      </div>
      <div class="property-info">
        <div class="property-price">
          <span class="amount">
			<?php if($fields['field_real_currency_display']->content == "before") print $fields['field_real_currency']->content; ?>
            <?php print $fields['field_real_price']->content; ?>
            <?php if($fields['field_real_currency_display']->content == "after") print $fields['field_real_currency']->content; ?>
          </span>
        </div>
        <div class="property-action">
          <div class="agent-action four-buttons">
            <a href="<?php print url("node/{$fields['nid']->content}/edit")?>" data-toggle="tooltip" data-placement="top" title="Edit this Property"><i class="fa fa-pencil"></i></a>
            <a class="status-property active" href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Sold/Rent"><i class="fa fa-check"></i></a>
            <a class="featured-property active" data-toggle="tooltip" data-placement="top" title="Featured Property" href="javascript:void(0)"><i class="fa fa-star"></i></a>
            <a class="delete-property" data-toggle="tooltip" data-placement="top" title="Delete this Property" href="<?php print url("node/{$fields['nid']->content}/delete")?>"><i class="fa fa-times"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</article>