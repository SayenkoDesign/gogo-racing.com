<?php
/*
Template Name: Blog
*/
?>
<?php get_header(); ?>

<div id="content">

<div class="breadcrumb"><a href="/home.php">Home</a> // <a href="/blog">Articles</a></div>

<?php 

query_posts("cat=video-2");

if (have_posts()) :?>
		
	<?php while (have_posts()) : the_post(); ?>
			
	<div class="post" id="post-<?php the_ID(); ?>">
	
		<div class="entry">
			
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>

				<?php 		the_content_limit(200,'Read more &raquo;'); 
				
				echo "</strong></b></u>";
				 ?>
		</div>
		
	</div>
		
	<?php endwhile; ?>

	<?php else : ?>
	
	<div class="post">
	<div class="entry">
		<h2>Not Found</h2>
		<p>Sorry, you are looking for something that isn't here.</p>
	</div>
	</div>	
		
	<?php endif; ?>
	
	
<?php comments_template(); ?>
	
	</div> <!-- eof main -->

<?php get_footer(); ?>