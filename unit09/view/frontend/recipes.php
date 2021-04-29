   <?php 
   require 'header.php';
   require_once('controllers/user/UserController.php');
   require_once('models/User.php');
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

   				<h2>
   					Category
   				</h2>
   				<?php 
   				foreach ($fiveCate as $cate) {
              # code...

   					?>
   					<div class="post clearfix">
   						<div class="post-thumbnail">
   							<a href="images/steak-with-potatoes.jpg" class="image-link">
   								<img src="public/images/<?=$cate['thumbnail'] ?>" alt="Steak with Potatoes">
   							</a>
   						</div>
   						<div class="post-content">
   							<h3 class="entry-title">
   								<?=$cate['name'] ?>
   							</h3>
   							<a href="?admin=user&mod=user&act=continuCate" title="Continue Reading" class="continue-reading">
   								Continue Reading →
   							</a>
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
   						<div class="post-meta">
   							<div class="post-meta-item">
   								<em>Serves</em>
   								<div>
   									<i class="icon-user">
   									</i>
   									<span>
   										For Five
   									</span>
   								</div>
   							</div>
   							<div class="post-meta-item">
   								<em>Level</em>
   								<div>
   									<i class="icon-beaker">
   									</i>
   									<span>
   										Expert
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

   		<div id="ad-widget" class="widget clearfix">
   		</div>
   	</div>

   </div>
</div>
<?php 
require 'footer.php';
?>