<?php get_header(); ?>

	<div id="Index">
		<div id="header">
			<div id="header-top"></div>
			<div id="header-middle">   
				<div id="header-left" style="height:300px;"> 
					<img id="logo" src="images/logo.jpg"/>
					<div id="contact">
						<p>Our goal is to seek and maintain long term client relationships by offering innovative, creative and successful strategies tailored to meet each of our client's goals and objectives.</p>
						<h2><span>(509)</span> 747-1051</h2>
						<h3>2829 South Grand Blvd, Suite 101<br />
						Spokane, WA 99223</h3>
					</div>  
				</div>  
				<div id="middle-home-right" style="z-index:800;">
					<div id="TopNav" style="margin:0 auto; position:relative; background-color:#003e7b;">
						<ul>
							<li><a href="home2.html">Home</a></li>
							<li><a href="agents.html">Our Agents</a></li>
							<li><a href="customSearch.html"  id="CustomSearch">Custom Search</a></li>
							<li><a href="aboutus.html">Our Company</a></li>
							<li><a href="contactus.html">Contact Us</a></li>
						</ul>
					</div>
					<div id="divOuterStyle" style="position:relative; width:952px; height:350px; line-height:0; overflow: hidden;">
						<div id="idPanel1" style="position: absolute; z-index: 5; opacity: 1; display: none;">
							<img src="images/retail.cb.jpg" id="idTitleSlideImage1" width="951" height="536" style="margin-top:-75px;  z-index:95;">
						</div>
						<div id="idPanel2" style="position: absolute; z-index: 5; opacity: 1; display: none;">
							<img src="images/business.cb.jpg" id="idTitleSlideImage2" style="border:0; width:952px; height:536px; margin-top:-75px; z-index:86;">
						</div>
						<div id="idPanel3" style="position: absolute; z-index: 10;">
							<img src="images/hospitality.cb.jpg" id="idTitleSlideImage3" style="border:0; width:952px; height:536px; z-index:76;  margin-top:-70px;">
						</div>
					</div>
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="post-header">
       <div class="date"><?php the_time( 'M j y' ); ?></div>
       <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
       <div class="author"><?php the_author(); ?></div>
    </div><!--end post header-->
    <div class="entry clear">
       <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
       <?php the_content(); ?>
       <?php edit_post_link(); ?>
       <?php wp_link_pages(); ?> </div>
    <!--end entry-->
    <div class="post-footer">
       <div class="comments"><?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
    </div><!--end post footer-->
    </div><!--end post-->
<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
    <div class="navigation index">
       <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
       <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
    </div><!--end navigation-->
<?php else : ?>
<?php endif; ?>


					<!--<table id="top-nav">
						<tr>
							<td><a href="Index.html"><div class="button">Home</div></a></td>
							<td><a href="agents.html"><div class="button">Our Agents</div></a></td>
							<td><a href="customSearch.html"><div class="button" id="search">Custom Search</div></a></td>
							<td><a href="aboutus.html"><div class="button" id="company">Our Company</div></a></td>
							<td><a href="contactus.html"><div class="button">Contact Us</div></a></td>
						</tr>
					</table>-->
				</div>  
			</div> <!-- /header -->
			<div id="header-bottom"></div>
			<div id="column-mask">
				<div id="column-container">
					<ul id="home-property-buttons">
					  <li style="background:#E6EAF1;"><span><a href="office.html"><img class="property-images" src="Images\office.cb.jpg" /><p class="title">Office</p><p class="text">View Listings >></p></a></span></li>
					  <li style="background:#F4F4F4;"><span><a href="industrial.html"><img class="property-images" src="Images\industrial.cb.jpg" /><p class="title">Industrial</p><p class="text">View Listings >></p></a></span></li>
					  <li style="background:#D9DCD7;"><span><a href="retail.html"><img class="property-images" src="Images\retail.cb.jpg" /><p class="title">Retail</p><p class="text">View Listings >></p></a></span></li>
					  <li style="background:#E6EAF1;"><span><a href="multi-family.html"><img class="property-images" src="Images\multifamily.cb.jpg" /><p class="title">Multi-Family</p><p class="text">View Listings >></p></a></span></li>
					  <li style="background:#F4F4F4;"><span><a href="land.html"><img class="property-images" src="Images\land.cb.jpg" /><p class="title">Land</p><p class="text">View Listings >></p></a></span></li>
					  <li style="background:#D9DCD7;"><span><a href="hospitality.html"><img class="property-images" src="Images\hospitality.cb.jpg" /><p class="title">Hospitality</p><p class="text">View Listings >></p></a></span></li>
					  <li style="background:#E6EAF1;"><span><a href="business.html"><img class="property-images" src="Images\business.cb.jpg" /><p class="title">Business</p><p class="text">View Listings >></p></a></span></li>
					</ul>
				</div> <!-- /column-container -->
			</div> <!-- /column-mask -->
		</div>
	</div>
</div>
<?php get_footer(); ?>
