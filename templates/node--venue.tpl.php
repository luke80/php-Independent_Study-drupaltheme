<?php
  /* Node -- Venue */

  render($content);

/* 
  FIELDS:
  field_venue_image
  field_venue_seating
  field_venue_directions
  field_venue_parking_text
  field_venue_policies
  field_venue_guest_guides
  field_venue_concessions
*/

  $image = false;
  $seating = false;
  $directions = false;
  $parking = false;
  $policies = false;
  $guest = false;
  $concessions = false;

  if (!empty($node->field_venue_image) ) { 
    $image = render( $content['field_venue_image'] ); 
  }

  if (!empty($node->field_venue_seating) ) { 
    $seating = render( $content['field_venue_seating'] ); 
  }

  if (!empty($node->field_venue_directions) ) { 
    $directions = render( $content['field_venue_directions'] ); 
  }

  if (!empty($node->field_venue_parking_text) ) { 
    $parking = render( $content['field_venue_parking_text'] ); 
  }

  if (!empty($node->field_policy) ) { 
    $policies = render( $content['field_policy'] );
  }

  if (!empty($node->field_venue_concessions) ) { 
    $concessions = render( $content['field_venue_concessions'] ); 
  }


?>


<?php if($image) { ?><span class="headerimage"><?php print $image; ?></span><?php } ?>

<ul class="nav nav-tabs nav-stacked venue" id="sportTab">
  <?php if($seating) { ?> <li class="active"><a href="#seating" data-toggle="tab">Seating</a></li> <?php } ?>
  <?php if($directions) { ?> <li><a href="#directions" data-toggle="tab">Directions</a></li> <?php } ?>
  <?php if($parking) { ?> <li><a href="#parking" data-toggle="tab">Parking</a></li> <?php } ?>
  <?php if($policies) { ?> <li><a href="#policies" data-toggle="tab">Info &amp; Policies</a></li> <?php } ?>
  <?php if($concessions) { ?> <li><a href="#concessions" data-toggle="tab">Concessions</a></li> <?php } ?>
</ul>

<div class="tab-content venue">
  <div class="tab-pane" id="schedule"></div>
  
  <?php if($seating) { ?>
    <div class="tab-pane active" id="seating">
      <h2 class="sectionTitle">Seating</h2>
      <?php print $seating; ?>
    </div>
  <?php } ?>
  
  <?php if($directions) { ?>
    <div class="tab-pane" id="directions">
      <h2 class="sectionTitle">Directions</h2>
      <?php print $directions; ?>
    </div>
  <?php } ?>
  
  <?php if($parking) { ?>
    <div class="tab-pane" id="parking">
      <h2 class="sectionTitle">Parking</h2>
      <?php print $parking; ?>
    </div>
  <?php } ?>
  
  <?php if($policies) { ?>
    <div class="tab-pane" id="policies">
      <h2 class="sectionTitle">Information &amp; Policies</h2>
      <?php print $policies; ?>
    </div>
  <?php } ?>
  
  <?php if($concessions) { ?>
    <div class="tab-pane" id="concessions">
      <h2 class="sectionTitle">Concessions</h2>
      <?php print $concessions; ?>
    </div>
  <?php } ?>
</div>

<!-- <a href="/byutickets.com/field-collection/field-policy/add/node/4?destination=node/4" tabindex="-1">Add</a> -->
