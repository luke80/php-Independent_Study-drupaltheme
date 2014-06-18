<?php
  /* Node -- Event */

  render($content);

  if (!empty($node->field_info)) { 
    $info = render( $content['field_info'] );
  } else { 
    $info = ''; 
  }


?>

<?php print $info; ?>
