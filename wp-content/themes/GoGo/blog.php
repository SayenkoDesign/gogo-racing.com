<?php
/*
Template Name: Articles
*/
?>

<?php get_header() ?>


<div id="content">

	<div id="main" style="float:none;">	
	
		<div class="breadcrumb">
		
		<a href="<?php echo get_option('home'); ?>">Home</a> // <a href="<?php echo get_option('home'); ?>/gogoblog">GoGo Blog</a>
		
		</div>
	
	</div>


<div>
	<?php global $post;
	$myposts = get_posts('cat=3&numberposts=50&offset=0');
	foreach($myposts as $post) :
	?>
		<div class="entry">
			<h2 style="margin-bottom:0px;"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
                <p style="margin:0px">
					Posted <?php the_time('F j, Y'); ?> <?php echo 'by'; ?> <?php the_author_meta('first_name'); ?> <?php the_author_meta('last_name'); ?>  
				</p>
			
			<?php the_excerpt(); ?>
			
			<p><a href="<?php the_permalink(); ?>">Read More »</a></p>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
		</div>
	<?php endforeach; ?>

</div>

<?php get_footer() ?>
