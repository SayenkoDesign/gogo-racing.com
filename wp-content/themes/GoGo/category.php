<?php get_header(); ?>


<div id="content">

<div id="main">
	<div>
		<div class="breadcrumb">
			<a href="<?php echo get_option('home'); ?>">Home</a> // <a href="<?php echo get_option('home'); ?>/video">Videos</a> // <?php single_cat_title(); ?>
		</div>
	</div>

	<h1 id="sectiontitle"><?php single_cat_title('Category: '); ?></h1>

<?php if (have_posts()) :
		
	while (have_posts()) : the_post(); ?>
			
	<div class="post" id="post-<?php the_ID(); ?>" style="width:500; height:auto; float:left;">
	
		<div class="entry">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<?php the_content('Read more &raquo;'); ?>
		</div>
		
	
		<div class="postmetadata" >
		 <?php if (get_the_tags()){?>
		 		  	<p>Tags: <?php the_tags('') ?></p>
		<?php } ?>				
			<p><img style="vertical-align:-3px;" alt="categories" src="<?php bloginfo('template_directory'); ?>/images/category.gif" height="16" width="16" /> <?php the_category(', ') ?> |  <?php the_author_posts_link(); ?> | <img style="vertical-align:-5px;" alt="datetime" src="<?php bloginfo('template_directory'); ?>/images/clock.gif" height="16" width="16" /> <?php the_date('') ?> <?php //the_time('') ?> | <img style="vertical-align:-5px;" alt="comments" src="<?php bloginfo('template_directory'); ?>/images/comment.gif" height="16" width="16" /> <?php comments_popup_link(__('Comments (0)'), __('Comments (1)'), __('Comments (%)')); ?> <?php edit_post_link('Edit',' ',''); ?></p>
			
		</div> 

		
		<?php comments_template(); ?>
		
		
	</div>


	
	<?php $Length = get_post_meta($post->ID, "Length", true);
		if($Length!="") // only display right side if there is a lengthavailable
	{ ?>
		<div><?php ///start right side info ?>
		<div style="float:right;width:400px;font-size:20px; line-height:22px;"><img src="<?php bloginfo('template_directory'); ?>/images/butt_downloade.jpg" height="50" ><br /><br />
			<?php
				$pdf = get_post_meta($post->ID, "Pdf Url", true);
				if($pdf!="")
				{
			 ?>


<br/><br/>
			<?php } ?>
			




			 <a href="<?php echo $pdf; ?>" target="_blank">
			<img style="margin-left:55px;" src="<?php bloginfo('template_directory'); ?>/images/pdf.png"  >
			</a>
			
			<span class="ttl"><strong>Keywords</strong> :</span> <?php echo $keywords = get_post_meta($post->ID, "keywords", true); ?><br />
			<span class="ttl"><strong>Length</strong> :</span> <?php echo $Length = get_post_meta($post->ID, "Length", true); ?><br />
			<span class="ttl"><strong>Ratings</strong> : </span><?php echo $postRatingData->rating; ?><br />
			
			<?php /* //this updates the number of views...only by pageview!
			if(get_post_meta($post->ID, "count", true)==0)
			{
				$count=$count+1;
				 update_post_meta($post->ID, "count", $count);
			}
			else
			{
				$cnt=get_post_meta($post->ID, "count", true);
				$cnt=$cnt+1;
				update_post_meta($post->ID, "count", $cnt);
			}	*/ ?>
			
		<span class="ttl"><strong>Views</strong> :</span> <?php echo $Length = get_post_meta($post->ID, "count", true); ?><br />
		
		</div>
	</div>
    <?php } ?>
		
	<br/><br/>
	<?php endwhile; ?>

	<div id="navigation">
		<div class="fleft"><?php next_posts_link('&laquo; Older Videos') ?></div>
		<div class="fright"> <?php previous_posts_link('Newer Videos &raquo;') ?></div>
	</div>
			
	
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




