<?php 
require_once('header.php');
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


</div>
  <div class="row">
    <div id="primary" class="col">
      <div class="primary-content">
        <div class="recipe clearfix">
          <h2 class="entry-title">
            Moldavian Sausage With Cabbage, Tomato and Onions
          </h2>
          <div class="reset-padding">
            <div class="slider-warp">
              <div id="slider" class="flexslider">
                <ul class="slides">
                  <?php 
                  foreach ($oneCate as $cate) {


                   ?>
                   <li>

                    <img src="public/images/<?=$cate['thumbnail'] ?>" alt>


                  </li>
                <?php } ?>
              </ul>
            </div>

          </div>
        </div>

        <h3 class="directions-title">
          Directions:
        </h3>
        <div class="directions">
          <dl>
            <dt>
              Praesent luctus lorem non mi tempus pretium. Praesent vehicula justo a erat ornare
              in pretium leo ornare. Nullam non sem sit amet libero auctor eleifend quis eget lectus.
            </dt>
            <dd></dd>
            <dt>
              Nullam fermentum est et nibh dignissim vitae tempor nisi posuere. Mauris risus dolor,
              porttitor a laoreet eu, varius et lorem. Donec urna velit, euismod at elementum eu,
              scelerisque at arcu.
            </dt>
            <dd></dd>
            <dt>
              Praesent luctus lorem non mi tempus pretium. Praesent vehicula justo a erat ornare
              in pretium leo ornare. Nullam non sem sit amet libero auctor eleifend quis eget lectus.
            </dt>
            <dd></dd>
            <dt>
              Nullam fermentum est et nibh dignissim vitae tempor nisi posuere. Mauris risus dolor,
              porttitor a laoreet eu, varius et lorem. Donec urna velit, euismod at elementum eu,
              scelerisque at arcu.
            </dt>
            <dd></dd>
          </dl>
        </div>
        <div class="entry-content">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec fermentum volutpat
            ultricies. Nam cursus condimentum massa in pellentesque. Etiam ultrices odio eu nulla
            semper viverra. Phasellus luctus vehicula ante. Ut tincidunt elementum sapien eu
            varius. In hac habitasse platea dictumst. Donec at pulvinar odio. Morbi ac mi est.
            Quisque pellentesque lectus id enim scelerisque consectetur non in augue. Quisque
            varius dui quis erat cursus bibendum. Nunc tortor ligula, adipiscing non feugiat
            vitae, dictum ac nulla. Proin urna turpis, luctus vitae bibendum sodales, malesuada
            non velit. Morbi tincidunt nisi ac lectus ultrices consectetur. Morbi aliquet lobortis
            porta. Mauris congue tempor urna in porta. Integer elit velit, cursus ac laoreet
            non, mattis ac ipsum.
          </p>
        </div>
      </div>
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

  </div>

</div>
</div>
<?php 
require_once('footer.php');
?>
