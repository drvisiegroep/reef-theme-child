<?php

$foreground_image = get_field('foreground_image');
$background_image = get_field('background_image');

?>
<div class="image-slider-container">
    <div class="img img-background" style="background-image: url('<?php echo $background_image; ?>')"></div>
    <div class="img img-foreground" style="background-image: url('<?php echo $foreground_image; ?>')"></div>
    <input type="range" min="1" max="100" value="50" class="slider" name='slider' id="slider">
    <div class='slider-button'></div>
</div>