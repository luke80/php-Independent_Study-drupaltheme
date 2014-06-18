<?php
  /* Node -- Sport */

  render($content);



  if (!empty($node->field_football_marketplace_link)) { 
    $footballLink = render( $content['field_football_marketplace_link'] );
  } else { 
    $footballLink = ''; 
  }

  if (!empty($node->field_basketball_marketplace_lin)) { 
    $bballLink = render( $content['field_basketball_marketplace_lin'] );
  } else { 
    $bballLink = ''; 
  }

  if (!empty($node->field_info)) { 
    $info = render( $content['field_info'] );
  } else { 
    $info = '';
  }

  if (!empty($node->field_buying)) { 
    $buying = render( $content['field_buying'] );
  } else { 
    $buying = ''; 
  }

  if (!empty($node->field_selling)) { 
    $selling = render( $content['field_selling'] );
  } else { 
    $selling = ''; 
  }


?>


<?php print $footballLink; ?>

<?php print $bballLink; ?>


<ul class="nav nav-tabs" id="sportTab">
  <li class="active"><a href="#information" data-toggle="tab">Info</a></li>
  <li><a href="#buying" data-toggle="tab">Buying</a></li>
  <li><a href="#selling" data-toggle="tab">Selling</a></li>
</ul>

<div class="tab-content">
  <div class="tab-pane active" id="information">
    <?php print $info; ?>
  </div>
  <div class="tab-pane" id="buying">
    <?php print $buying; ?>
  </div>
  <div class="tab-pane" id="selling">
    <?php print $selling; ?>
  </div>
</div>

