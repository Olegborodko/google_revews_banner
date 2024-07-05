<?php require_once "els/swiper_slide/index.php"; ?>

<!DOCTYPE html>
<html>

<head>
  <title>Title of the document</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="ob27-google_reviews_banner">
    <div class="top">
      <div class="left">
        <div class="google-logo-block">
          <img src="img/logo.svg" alt="google icon" class="google">
        </div>
        <span class="grade-text">Excellent</span>
        <span class="block-starts">
          <img src="img/f.svg" alt="star icon" class="star">
          <img src="img/f.svg" alt="star icon" class="star">
          <img src="img/f.svg" alt="star icon" class="star">
          <img src="img/f.svg" alt="star icon" class="star">
          <img src="img/f.svg" alt="star icon" class="star">
        </span>
        <span class="grade-number">5.0</span>
        <span class="reviews-number">5 reviews</span>
      </div>
      <div class="right">
        <a href="https://admin.trustindex.io/api/googleWriteReview?place-id=ChIJf7_VBy92AIwR2G5bOKUUyEA" class="btn-write-review">Write a review</a>
      </div>
    </div>

    <div class="parrent-ti-swiper">
      <div class="swiper custom-ti-swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
          <?php el_ti_swiper_slide("img/unnamed_3.png", "Arsen Vardanyan", "1 day ago", 5, "I needed to clean my room so that I could put it up for rent, Honestly never seen my room this clean😅. Thank you") ?>
          </div>
          <div class="swiper-slide">
            <?php el_ti_swiper_slide(false, "Sergey Utlik", "1 week ago", 5, "I love this company") ?>
          </div>
          <div class="swiper-slide">
            <?php el_ti_swiper_slide(false, "Arsen A.", "2 months ago", 5, "Very pleased with the service provided by the team, exactly what I was looking for. <br> Professional service, highly recommended! <br> Will use them again at my house and at my commercial property. <br> Thank you!") ?>
          </div>
          <div class="swiper-slide">
            <?php el_ti_swiper_slide("img/unnamed.png", "Levon Arustamyan", "2 months ago", 5, "Thank you girls. You are are very professional, I liked so much your work") ?>
          </div>
          <div class="swiper-slide">
            <?php el_ti_swiper_slide(false, "Dzhanneta Melkumian ", "3 months ago", 5, "Thank you for your work! The girls listened carefully to all my requests. It was my first time working with this company, I found them on yeld. A very nice family couple runs this business.") ?>
          </div>
          <div class="swiper-slide">
            <?php el_ti_swiper_slide("img/unnamed_2.png", "Luiza Nazarian", "3 months ago", 5, "100% recommendations. The girls are very friendly, punctual, courteous, and efficient. They are very professional, I liked so much their work and my clean house 💫") ?>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>

  </div>

  <script src="js/swiper-bundle.min.js"></script>
  <script src="js/index.js"></script>

</body>

</html>