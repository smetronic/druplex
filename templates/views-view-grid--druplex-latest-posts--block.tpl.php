<?php

/**
 * @file
 * Default simple view template to display a rows in a grid.
 *
 * - $rows contains a nested array of rows. Each row contains an array of
 *   columns.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)) : ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>

<div id="latest-posts">
  <div id="postsCarousel" class="carousel slide" data-interval="false">
    <?php if (count($rows) > 1) : ?>
      <div class="carousel-arrows">
        <a class="carousel-arrow-left" href="#newsCarousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
        <a class="carousel-arrow-right" href="#newsCarousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
      </div>
    <?php endif; ?>
    
    <div class="carousel-inner">
      <?php foreach ($rows as $row_number => $columns): ?>
        <?php $first_key = key(array_keys($rows)); $active = ""; ?>
        <?php if ($row_number == $first_key) { $active = "active"; }?>
        <div class="<?php print ($active); ?> item">
          <div class="row">
            <?php foreach ($columns as $column_number => $item): ?>
              <div class="col-md-3 posts-block-item">
                <?php print $item; ?>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
