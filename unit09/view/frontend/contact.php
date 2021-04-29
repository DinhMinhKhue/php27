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



<div class="container clearfix">
	<div class="row">
		<div id="nav" class="col">
			<ul>
				<li>
					<a href="index.html">Home<i class="nav-icon icon-shop"></i></a>
				</li>
				<li>
					<a href="recipes.html">Recipes<i class="nav-icon icon-food"></i></a>
				</li>
				<li>
					<a href="blog.html">Blog<i class="nav-icon icon-doc"></i></a>
				</li>
				<li>
					<a href="archives.html">Archives<i class="nav-icon icon-calendar"></i></a>
				</li>
				<li>
					<a href="contact.html" class="active">Contact<i class="nav-icon icon-mail"></i></a>
				</li>
			</ul>
		</div>

		<div id="primary" class="col">
			<div class="primary-content">
				<h2>
					You can reach us using the contact form below
				</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec fermentum volutpat
					ultricies. Nam cursus condimentum massa in pellentesque. Etiam ultrices odio eu nulla
					semper viverra. Phasellus luctus vehicula ante. Ut tincidunt elementum sapien eu
					varius. In hac habitasse platea dictumst. Donec at pulvinar odio. Morbi ac mi est.
					Quisque pellentesque lectus id enim scelerisque consectetur non in augue. Quisque
					varius dui quis erat cursus bibendum.
				</p>
				<form action="/" method="post" class="contact-form">
					<p>
						<span class="name">
							<input type="text" name="name" value class="form" size="40">
						</span>
						<label>
							Name
							<span class="require">
								*
							</span>
						</label>
					</p>
					<p>
						<span class="email">
							<input type="text" name="email" value class="form" size="40">
						</span>
						<label>
							Email
							<span class="require">
								*
							</span>
						</label>
					</p>
					<p>
						<span class="website">
							<input type="text" name="website" value class="form" size="40">
						</span>
						<label>
							Website
						</label>
					</p>
					<p>
						<span class="message"><textarea name="message" class="textarea" cols="40" rows="10"></textarea>
						</span>
					</p>
					<p>
						<input type="submit" value="send email" class="submit">
					</p>
				</form>
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


		<div class="instagram-widget widget clearfix">

		</div>

		<?php 
		require_once('footer.php');
		?>