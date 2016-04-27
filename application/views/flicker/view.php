
<?php

foreach($flicker_pics as $pic){

    $size = 'm';
    $photo_url = 'http://farm'. $pic->farm . '.staticflickr.com/' . $pic->server . '/' . $pic->id . '_' . $pic->secret . '_' . $size . '.jpg';
    ?>

    <div style="display: inline-block; width: 25em; height: 12em">

        <div style="width: 100%; height: 10em">
        <img style="height:100%;" title="<?=$pic->title?>" src="<?= $photo_url?>" />
        </div>
        <div style="max-height: 1.2em; overflow: hidden;"><?=$pic->title?></div>

    </div>


<?php


}