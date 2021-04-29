<?php 
require_once('header.php');
?>

<div class="container">
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


  </div>
  <div class="row">
    <div id="primary" class="col">
      <div class="primary-content">
        <div class="post-open clearfix">
          <h2 class="entry-title">
            Best Coffee Shops in Seattle
          </h2>
          <div class="post-thumbnail">
            <?php 
            foreach ($onePost as $key => $value) {


             ?>
             <a href="images/9587828677_0c952c7410_c.jpg" class="image-link">
              <img src="public/images/<?=$value['thumbnail'] ?>" title="Best Coffee Shops in Seattle" alt="Post Image">
            </a>
          <?php } ?>
        </div>
        <div class="entry-content">
         <?php 
         foreach ($onePost as $key => $value) {


           ?>
           <p>
            <?=$value['content'] ?>
          </p>
        <?php } ?>
      </div>
      <div class="post-meta">
        <span class="author">
          Posted by
          <a href="#">Octavian Munteanu</a>
        </span>
        <span class="date">
          March 13th 2012
        </span>
        <span class="category">
          In
          <a href="#">Coffe</a>
        </span>
      </div>
    </div>
  </div>
</div>

</div>
<div class="cat-widget widget clearfix">

</div>
</div>
<?php 
require_once('footer.php');
?>