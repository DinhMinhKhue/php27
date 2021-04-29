    <?php 
    require 'header.php';
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
                    <a href="?admin=user&mod=user&act=home"><?=$value['title'] ?></a>
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

<div class="row">
 <div id="primary" class="col">
  <div class="primary-content">
   <h2>
    Blog
  </h2>
  <?php 
  foreach ($fivePostBlog as $key => $value) {


   ?>
   <div class="post clearfix">

    <div class="post-thumbnail">
     <a href="images/9587828677_0c952c7410_c.jpg" class="image-link">
      <img src="public/images/<?=$value['thumbnail'] ?>" title="Best Coffee Shops in Seattle" alt="Best Coffee Shops in Seattle">
    </a>
  </div>
  <div class="post-content">
   <h3 class="entry-title">
    <?=$value['title'] ?>
  </h3>
  <a href="?admin=user&mod=user&act=continuPost" title="Continue Reading" class="continue-reading">
    Continue Reading →
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
   <span>
    1563 Likes
  </span>
</div>
</div>
</div>
</div>


<?php } ?>
</div>
<div class="pagenav clearfix">
 <div class="previous">
  <a href="#" class="inactive">&larr; previous</a>
</div>
<div class="pagelist clearfix">
  <span class="current">
   1
 </span>
 <a href="#" class="page" title="2">2</a>
 <a href="#" class="page" title="3">3</a>
 <a href="#" class="page" title="4">4</a>
 <a href="#" class="page" title="5">5</a>
 <a href="#" class="page" title="6">6</a>
 <a href="#" class="page" title="7">7</a>
 <a href="#" class="page" title="8">8</a>
 <a href="#" class="page" title="9">9</a>
 <a href="#" class="page" title="10">10</a>
</div>
<div class="next">
  <a href="#">next &rarr;</a>
</div>
</div>
</div>
<div id="sidebar" class="aside col">
  <div class="cat-widget widget clearfix">
   <h3 class="widget-title">
    <span>
     Categories
   </span>
 </h3>
 <ul>
  <li>
   <a href="#">Coffe</a>
   <span>
    4
  </span>
</li>
<li>
 <a href="#">Healthy Eating</a>
 <span>
  2
</span>
</li>
<li>
 <a href="#">Locations</a>
 <span>
  5
</span>
</li>
<li>
 <a href="#">Products</a>
 <span>
 1</span>
</li>
<li>
 <a href="#">Top 20</a>
 <span>
  3
</span>
</li>
<li>
 <a href="#">Tips &#38; Tricks</a>
 <span>
  7
</span>
</li>
<div id="ad-widget" class="widget clearfix">
  <a href="#"> <img src="public/frontend/images/tf_300x250_v2.gif" title="ThemeForest" alt="ThemeForest Ad"></a>
</div>
</ul>

</div>

</div>

</div>

<div class="cat-widget widget clearfix">
</div>
</div>
</div>
<?php 
require 'footer.php';
?>