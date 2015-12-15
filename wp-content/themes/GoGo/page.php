<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="content" style="float:left;width:650px;padding: 0;text-align: left;margin: 0;padding: 0 0 10px 10px;">
<div id="main" style="width:650px;"
<?php
$post_obj = $wp_query->get_queried_object();
$post_ID = $post_obj->ID;
?>>
<?

 if ($post_ID=="2"||$post_ID=="39"||$post_ID=="26"||$post_ID=="34"||$post_ID=="32"||$post_ID=="471") 
{
	
?>
<table class="imgroundbox" align="center">
<tr><td class="imgroundboxtl"></td><td class="imgroundboxtm">
</td><td class="imgroundboxtr"></td></tr>
<tr><td class="imgroundboxml"></td><td class="imgroundboxmm">
<?

		if($post_ID=="2") {$my_query = new WP_Query('p=44');} //about page
		if($post_ID=="39") {$my_query = new WP_Query('p=41');} //blog page
		if($post_ID=="32") {$my_query = new WP_Query('p=53');} //products page
		if($post_ID=="34") {$my_query = new WP_Query('p=61');} //contact us page
		
		//if($post_ID=="28") {$my_query = new WP_Query('p=4');} //nursery page
		
		if($post_ID=="471") {$my_query = new WP_Query('p=59');} //service area page
		if($post_ID=="26") {$my_query = new WP_Query('p=46');} //testimonials page
?>
</td><td class="imgroundboxmr"></td></tr>
<tr><td class="imgroundboxbl"></td><td class="imgroundboxbm"></td><td class="imgroundboxbr"></td></tr>
</table>

</div>
<?
} 
else 
{
}
?>
<?php 
if (have_posts()) :

 ?>
		
	<?php while (have_posts()) : the_post(); ?>
			
	<div class="post" id="post-<?php the_ID(); ?>">
	
		<div class="entry">
				<div class="breadcrumb"><a href="/">Home</a> » <?php
				if ($post->post_parent == "32"){
					echo "<a href='/products/'>Products</a> :: ";
				}


				?><a href="/?page_id=<?php the_ID(); ?>"><?php the_title();?></a></div>
				<h1><?php the_title(); ?></h1>
      

				<?php the_content('Read more &raquo;'); ?>
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
	
	

	
	</div> <!-- eof main -->



<?php get_footer(); ?>
