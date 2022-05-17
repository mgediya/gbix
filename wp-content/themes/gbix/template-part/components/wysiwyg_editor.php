<?php

$wysiwyg = get_sub_field( 'wysiwyg' );

echo '
<!-- wysiwyg -->
<section class="wysiwyg body-content py-30">
    <div class="container py-30">';
        if ( $wysiwyg ) echo $wysiwyg ;
    echo '</div>
</section>';
?>