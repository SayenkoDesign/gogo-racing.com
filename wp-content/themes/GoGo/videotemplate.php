<?php
/*
Template Name: video
http://gogorunning.com/video/ page
*/
?>

<?php get_header(); ?>


<div id="content">
	<div id="main">
		<div class="breadcrumb">
			<a href="<?php echo get_option('home'); ?>">Home</a> // <a href="<?php echo get_option('home'); ?>/video">Videos</a>
		</div>
	</div>
    
    <div style="float:left; padding-right:1px; padding-bottom: 20px; padding-top: 20px;">
      <div class="featured-videos" style="margin-top:14px;">
			<h1 style="font-size:22px;">Running Video Categories</h1>
                <div class="midlsldercnt">
					<div class="leftcatbox" style="height:auto;">
						<div class="leftcatimgcntmn">
							<?php echo get_cat_icon("echo=false&cat=9");  /////////begin core & drills //// ?>
						</div>
						<div class="leftcatnmcnt">
							<h2 style="font-size:20px;text-decoration:underline;"><a href="http://gogorunning.com/category/<?php echo get_cat_slug(9); ?>/"><?php echo get_cat_name(9); ?></a></h2>
						</div>
					</div>
					<div class="rightcatslider">
						 <ul id="mycarousel" class="jcarousel-skin-tango">
							<?php query_posts('cat=9');
							while (have_posts()) : the_post(); ?>
							   <li>
									<div style="float:left;width:100%;height:137px;">
										<a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID); ?></a>
									</div>
									<div style="float:left; width:100%; height:auto; margin:5px 0 0 0; text-align:left">
										<a style="font-size:14px;font-weight:bold;" href="<?php the_permalink();?>"><?php the_title(); ?></a><br />
										Posted <?php the_time('F j, Y'); ?> 
									</div>
								</li>
							<?php endwhile; ?>
						</ul>
					</div>
				</div>
                

   			<div class="midlsldercnt">
                <div class="leftcatbox" style="height:auto;">
					<div class="leftcatimgcntmn">
						<?php echo get_cat_icon("echo=false&cat=10"); ///////  Injury Prevention ///////  ?>
					</div>
                	<div class="leftcatnmcnt">
						<h2 style="font-size:20px;text-decoration:underline;"><a href="http://gogorunning.com/category/<?php echo get_cat_slug(10); ?>/"><?php echo get_cat_name(10); ?></a></h2>
					</div>
                </div>
                <div class="rightcatslider">
                    <ul id="mycarousel1" class="jcarousel-skin-tango">
						<?php query_posts('cat=10');
						while (have_posts()) : the_post(); ?>
                           <li>
								<div style="float:left;width:100%;height:137px;">
									<a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID); ?></a>
								</div>
								<div style="float:left; width:100%; height:auto; margin:5px 0 0 0; text-align:left">
									<a style="font-size:14px;font-weight:bold;" href="<?php the_permalink();?>"><?php the_title(); ?></a><br />
									Posted <?php the_time('F j, Y'); ?> 
								</div>
                            </li>
						<?php endwhile; ?>
                    </ul>
                </div>
			</div>
			
			<div class="midlsldercnt">
                <div class="leftcatbox" style="height:auto;">
					<div class="leftcatimgcntmn">
						<?php echo get_cat_icon("echo=false&cat=11"); ///////////// Nutrition /////////?>
					</div>
						<div class="leftcatnmcnt">
							<h2 style="font-size:20px;text-decoration:underline"><a href="http://gogorunning.com/category/<?php echo get_cat_slug(11); ?>/"><?php echo get_cat_name(11); ?></a></h2>
						</div>
				</div>
                <div class="rightcatslider">
	                <ul id="mycarousel4" class="jcarousel-skin-tango">
						<?php  query_posts('cat=11');
						while (have_posts()) : the_post(); ?>
                           <li>
								<div style="float:left;width:100%;height:137px;">
									<a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID); ?></a>
								</div>
								<div style="float:left; width:100%; height:auto; margin:5px 0 0 0; text-align:left">
									<a style="font-size:14px;font-weight:bold;" href="<?php the_permalink();?>"><?php the_title(); ?></a><br />
									Posted <?php the_time('F j, Y'); ?> 
								</div>
                            </li>
						<?php  endwhile; ?>
                    </ul>
                </div>
			</div>
			
            <div class="midlsldercnt">
                <div class="leftcatbox" style="height:auto;">
					<div class="leftcatimgcntmn">
						<?php echo get_cat_icon("echo=false&cat=12"); ///////////// Racing /////////?>
					</div>
						<div class="leftcatnmcnt">
							<h2 style="font-size:20px;text-decoration:underline"><a href="http://gogorunning.com/category/<?php echo get_cat_slug(12); ?>/"><?php echo get_cat_name(12); ?></a></h2>
						</div>
					</div>
                <div class="rightcatslider">
	                <ul id="mycarousel2" class="jcarousel-skin-tango">
						<?php  query_posts('cat=12');
						while (have_posts()) : the_post(); ?>
                           <li>
								<div style="float:left;width:100%;height:137px;">
									<a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID); ?></a>
								</div>
								<div style="float:left; width:100%; height:auto; margin:5px 0 0 0; text-align:left">
									<a style="font-size:14px;font-weight:bold;" href="<?php the_permalink();?>"><?php the_title(); ?></a><br />
									Posted <?php the_time('F j, Y'); ?> 
								</div>
                            </li>
						<?php  endwhile; ?>
                    </ul>
                </div>
			</div>
                
                <div class="midlsldercnt">
					<div class="leftcatbox" style="height:auto;">
						<div class="leftcatimgcntmn">
							<?php echo get_cat_icon("echo=false&cat=13");  ///////////// Training ////////////?>
						</div>
						<div class="leftcatnmcnt">
							<h2 style="font-size:20px;text-decoration:underline"><a href="http://gogorunning.com/category/<?php echo get_cat_slug(13); ?>/"><?php echo get_cat_name(13); ?></a></h2>
						</div>
					</div>
                <div class="rightcatslider">
                	<ul id="mycarousel3" class="jcarousel-skin-tango">
						<?php query_posts('cat=13');
						while (have_posts()) : the_post(); ?>
                           <li>
								<div style="float:left;width:100%;height:137px;">
									<a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID); ?></a>
								</div>
								<div style="float:left; width:100%; height:auto; margin:5px 0 0 0; text-align:left">
									<a style="font-size:14px;font-weight:bold;" href="<?php the_permalink();?>"><?php the_title(); ?></a><br />
									Posted <?php the_time('F j, Y'); ?> 
								</div>
                            </li>
						<?php endwhile; ?>
								<!--<li><img src="<?php bloginfo('template_directory'); ?>/images/phgal31.png" width="75" height="75" alt="" /></li>
									<li><img src="<?php bloginfo('template_directory'); ?>/images/phgal31.png" width="75" height="75" alt="" /></li>
									<li><img src="<?php bloginfo('template_directory'); ?>/images/phgal31.png" width="75" height="75" alt="" /></li>
									<li><img src="<?php bloginfo('template_directory'); ?>/images/phgal31.png" width="75" height="75" alt="" /></li>
									<li><img src="<?php bloginfo('template_directory'); ?>/images/phgal31.png" width="75" height="75" alt="" /></li>
									<li><img src="<?php bloginfo('template_directory'); ?>/images/phgal31.png" width="75" height="75" alt="" /></li>
									<li><img src="<?php bloginfo('template_directory'); ?>/images/phgal31.png" width="75" height="75" alt="" /></li>
									<li><img src="<?php bloginfo('template_directory'); ?>/images/phgal31.png" width="75" height="75" alt="" /></li>
									<li><img src="<?php bloginfo('template_directory'); ?>/images/phgal31.png" width="75" height="75" alt="" /></li>
									<li><img src="<?php bloginfo('template_directory'); ?>/images/phgal31.png" width="75" height="75" alt="" /></li>-->
                   	</ul>
                    </div>
                </div> 
				
                 
      </div>
    </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>