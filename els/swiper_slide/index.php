<?php
function el_ti_swiper_slide($icon_url = false, $name, $time, $starts, $desc)
{
  $rnd_color = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
  ?>
  <div class="ti-swiper-container">
    <div class="swiper-top">
      <div class="name-block">
        <?php if ($icon_url) { ?>
          <img class="ti-user-icon" alt="<?= $name ?>" src="<?= $icon_url ?>">
        <?php } else { ?>
          <div class="ti-circle-name" style="background-color: <?= $rnd_color ?>">
            <?= $name[0] ?>
          </div>
        <?php } ?>
        <ul>
          <li class="ti-name">
            <?= $name ?>
          </li>
          <li class="ti-time">
            <?= $time ?>
          </li>
        </ul>
      </div>
      <div class="icon-small-block">
        <img class="ti-icon-small" src="img/icon.svg" alt="google small icon">
      </div>
    </div>
    <div class="ti-starts">
      <?php for ($i = 0; $i < $starts; $i++) { ?>
        <img src="img/f.svg" alt="star icon" class="star">
      <?php } ?>
    </div>
    <div class="desc">
      <?= $desc ?>
    </div>
    <div class="ti-read-more">Read more</div>
  </div>

  <?php
}
?>