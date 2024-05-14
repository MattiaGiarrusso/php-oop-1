<?php
require_once __DIR__. '/../db.php';

?>

<div class="container d-flex">
    <?php foreach ($movie as $movie) { ?>
        <div class="card" style="width: 18rem;">
            <img :src="<?php echo $movie->image; ?>" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title"><?php echo $movie->title; ?></h5>
                <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $movie->genre; ?></h6>
                <div class="card-text"><?php echo $movie->monthProgramation; ?></div>
                <div class="d-flex justify-content-between">
                    <span><?php echo $movie->getStaticCountry(); ?></span>
                    <span><?php echo $movie->getStaticDistribution(); ?></span>
                </div>
            </div>
        </div>
    <?php } ?>
</div>