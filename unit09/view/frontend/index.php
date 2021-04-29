<?php 
require 'header.php';
require_once('controllers/user/UserController.php');
require_once('models/User.php');
?>
<div class="container clearfix">
    <div class="row">

      <div id="nav" class="col">
        <ul>
          <li>
            <a href="?admin=user&mod=user&act=home">Home<i class="nav-icon icon-shop"></i></a>
          </li>
          <li>
            <a href="?admin=user&mod=user&act=category">Category<i class="nav-icon icon-food"></i></a>
          </li>
          <li>
            <a href="?admin=user&mod=user&act=blog">Blog<i class="nav-icon icon-doc"></i></a>
          </li>
          <li>
            <a href="?admin=user&mod=user&act=contact">Contact<i class="nav-icon icon-mail"></i></a>
          </li>
        </ul>
      </div>

      <div class="slider-warp col">
       
        <div id="slider" class="flexslider">
          <ul class="slides">
             <?php 
            foreach ($sixPost as $key => $value) {
              # code...
            
         ?>
            <li>
              <img src="public/images/<?=$value['thumbnail'] ?>" alt>
              <div class="flex-caption">
                <h3>
                  <a href="?admin=user&mod=user&act=continuPost"><?=$value['title'] ?></a>
                </h3>
              </div>
            </li>

      <?php } ?>

          </ul>
        </div>
        <div class="carousel-warp">
          <div id="carousel" class="flexslider">
            <ul class="slides">
              <?php 
            foreach ($sixPost as $key => $value) {
              # code...
            
         ?>
              <li>
                <img src="public/images/<?=$value['thumbnail'] ?>" alt>
              </li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

<hr>
<div class="recipe-carousel-warp">
  <div id="recipe-carousel" class="flexslider">
    <ul class="slides">
      <?php 
      foreach ($threePost as $key => $value) {
              # code...

       ?>
       <li>
        <div class="recipe-block">
          <a href="?admin=user&mod=user&act=continuPost" title="Lemon-Garlic Shrimp">
            <h3><?=$value['title'] ?></h3>
            <div class="img-warp">
              <img src="public/images/<?=$value['thumbnail'] ?>" alt>
              <div class="img-caption">
                <ul>
                  <li>
                    <h5><i class="info-icon icon-clock"></i><?=$value['cooking_time'] ?></h5>
                  </li>
                  <li>
                    <h5><i class="info-icon icon-user"></i><?=$value['people'] ?></h5>
                  </li>
                  <li>
                    <h5><i class="info-icon icon-beaker"></i><?=$value['level'] ?></h5>
                  </li>
                </ul>
              </div>
            </div>

          </a>
          <span class="recipe-date">
            July 30th, 2013
          </span>
          <div class="rating-warp">
            <ul class="rating">
              <li><a href="#" title="Rate this 1 star out of 5" class="one-star active">1</a></li>
              <li><a href="#" title="Rate this 2 stars out of 5" class="two-stars active">2</a></li>
              <li><a href="#" title="Rate this 3 stars out of 5" class="three-stars active">3</a></li>
              <li><a href="#" title="Rate this 4 stars out of 5" class="four-stars active">4</a></li>
              <li><a href="#" title="Rate this 5 stars out of 5" class="five-stars active">5</a></li>
            </ul>
          </div>
        </div>
      </li>
    <?php } ?>

  </ul>
</div>
</div>

<div class="container clearfix">
  <hr>
  <div class="row">
    <div id="primary" class="col">
      <div class="primary-content">
        <h2>
          Latests Posts
        </h2>
        <?php 
        foreach ($fivePost as $key => $value) {
              # code...

         ?>
         <div class="post clearfix">
          <div class="post-thumbnail">
            <a href="public/frontend/images/9587828677_0c952c7410_c.jpg" class="image-link">
              <img src="public/images/<?=$value['thumbnail'] ?>" title="Best Coffee Shops in Seattle" alt="Best Coffee Shops in Seattle">
            </a>
          </div>
          <div class="post-content">
            <h3 class="entry-title">
              <?=$value['title'] ?>
            </h3>
            <a href="?admin=user&mod=user&act=continuPost" title="Continue Reading" class="continue-reading">
              <?=$value['description'] ?>
            </a>
          </div>
          <div class="post-meta">
            <div class="post-meta-item">
              <em>Share</em>
              <div>
                <i class="icon-reply">
                </i>
                <span>
                  <a href="#"><i class="icon-twitter"></i></a>
                  <a href="#"><i class="icon-facebook"></i></a>
                  <a href="#"><i class="icon-email"></i></a>
                </span>
              </div>
            </div>
            <div class="post-meta-item">
              <em>Like it</em>
              <div>
                <a href="#"><i class="icon-heart"></i></a>
                <span>1563 Likes
                </span>
              </div>
            </div>
          </div>

        </div>

      <?php } ?>
    </div>
  </div>

  <div id="sidebar" class="aside col">
    <div class="instagram-widget widget clearfix">
      <h3 class="widget-title">
        <span>
          Instagram
        </span>
      </h3>
      <div id="instafeed">
      </div>
    </div>
    <div id="video-widget" class="widget clearfix">
      <h3 class="widget-title">
        <span>
          Video
        </span>
      </h3>
    </div>
    <div id="ad-widget" class="widget clearfix">
      <a href="#"> <img src="public/frontend/images/tf_300x250_v2.gif" title="ThemeForest" alt="ThemeForest Ad"></a>
    </div>
  </div>

</div>
</div>
<?php 
require 'footer.php';
?>