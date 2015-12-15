<?php get_header();

$cat_related = '8';
$categories = get_the_category($post->ID);

$post_obj = $wp_query->get_queried_object();
$post_ID = $post_obj->ID;

// display go button if one of the basics

$basic_link = "<a href='http://gogorunning.com/gogo-basics-training-tutorial/'><img src='http://gogorunning.com/wp-content/uploads/2012/03/png' width='60px' title='This is a GoGo Basic.. Click here for more!' alt='GoGo Running Basics' align='left' /></a>";

//$basics = array(373=>1, 1772=>2, 1426=>3, 764=>4, 780=>5, 85=>6, 362=>7, 1898=>8, 1968=>9, 1972=>10);
$basics = array(373, 1772, 1426, 764, 780, 85, 362, 1898, 1968, 1972);
		
	/*if($categories[0]->term_id==9 || $categories[0]->term_id==10 || $categories[0]->term_id==11 || $categories[0]->term_id==12 || $categories[0]->term_id==13)*/
	if($categories[0]->category_parent==8)
	{ ?>
<div id="content">

<div id="main">

<?php if (have_posts()) : ?>
		
	<?php while (have_posts()) : the_post(); ?>
  
	<div class="post" id="post-<?php the_ID(); ?>">
		<div class="entry">
			<div class="breadcrumb">
				<?php  $category = get_the_category($post->ID); ?>
				<a href="<?php echo get_option('home'); ?>">Home</a> » <a href="<?php echo get_option('home'); ?>/video">Videos</a> » <?php echo $category[0]->cat_name; ?>															

			</div>
            
				<?php // display go button if one of the basics
                if (in_array($post_ID, $basics)) 
				{
					echo $basic_link;
				} ?> 
                        

				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
               
				<div class="postcntmn">
					<div class="proplayercnt">
						<?php the_content('Read more &raquo;'); ?>
					</div>
                
                <div class="postlinkcntmn">
					<div class="pstbtcnt">                    	
						<?php  $pdf = get_post_meta($post->ID, "Pdf Url", true);
						
							if($pdf!="")
							{
						 ?>
                         <a href="<?php echo $pdf; ?>" target="_blank">
                         <img src="<?php bloginfo('template_directory'); ?>/images/butt_downloade.jpg" title="Download PDF" height="35" ><br /><br />
						<img title="Download PDF" src="<?php bloginfo('template_directory'); ?>/images/pdf.png"  >
						</a>
						<?php } ?>
					</div>
                
                <div class="pstinfomn">
                 	<span class="tt1">
						



					</span>
        
		<h4>Category:</h4>
								<?php $category = get_the_category($post->ID);
									foreach($category as $catt){
										if($catt->term_id != 8){
											$cat_related = $catt->term_id. ',';
										}
									}
									echo $category[0]->cat_name;	?>
		
		<h4>Keywords:</h4> <?php echo $keywords = get_post_meta($post->ID, "keywords", true); ?></br>
		<h4>Length:</h4> <?php echo $Length = get_post_meta($post->ID, "Length", true); ?>
     
		
		<?php
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
			}	?>
			
		<h4>Views:</h4> <?php echo $Length = get_post_meta($post->ID, "count", true); ?></br></br>
        </div>
	</div>
					<div class="postaddcntmn">
						<div class="pstbtcnt"><a href="http://gogorunning.com/video/"><img alt="running videos" src="<?php bloginfo('template_directory'); ?>/images/ad-2.jpg" width="210" ></a></div>
							<div class="cochsblogcnt">
							<h1>GoGo Blog</h1>
							<div class="cochsbolgtxt">
								<h3>Definition of Key Running And Training Terms</h3>
								<p>	One of the hardest parts of sharing training information is terminology... </p>
								<p><a href="http://gogorunning.com/definitions-of-key-running-training-terms/">Read More &gt;&gt;</a></p>
							</div>
						</div>
					</div>
                </div>
		</div>
		
		<?php comments_template(); ?>
		
		</div>
		
	<?php endwhile; ?>
	
	<div id="navigation">
		<div class="fleft"><?php next_posts_link('&laquo; Older') ?></div>
		<div class="fright"> <?php previous_posts_link('Newer &raquo;') ?></div>
	</div>
			
	
	<?php else : ?>
	
	<div class="post">
		<div class="entry">
			<h2>Not Found</h2>
			<p>Sorry, you are looking for something that isn't here.</p>
		</div>
	</div>	
		
	<?php endif; ?>
	<!--<div style="float:left; padding-right:1px; padding-bottom: 20px; padding-top: 20px;">-->
<hr/>

</br></br>
      <h2 style="color:#900;">RELATED VIDEOS</h2>
         <div class="ftrdvdcnt" style="height:234px;">
		 	<?php $args = array(
				'cat'      =>  $cat_related,
				'showposts' => 3,
				'order'    => 'rand',
				'post__not_in' => array($post->ID)
			);
			
			query_posts($args);
			while (have_posts()) : the_post();?>
				<div style="float:left; width:190px; height:150px;">
					<div style="float:left; width:175px; height:101px;">
						<a href="<?php the_permalink()?>"><?php echo get_the_post_thumbnail($post->ID,array(150,150)); ?></a>
					</div>
					<div style="float:left; width:175px; height:auto; margin:65px 0 0 0; font-size:16px; text-align:left">
						<?php the_title(); ?><br /><?php the_time('M d'); ?>
					</div>
				</div>
			<?php endwhile; ?>
			<div style="clear:both;"></div>
         </div>
	</div> 
<?php } 
	else
	{
?>
<div id="content">
	<div id="main">
	
		<div class="breadcrumb">
		<a href="<?php echo get_option('home'); ?>">Home</a> // <a href="<?php echo get_option('home'); ?>/gogoblog">GoGo Blog </a>
		</div>
	
		<?php if (have_posts()) : ?>
				
			<?php while (have_posts()) : the_post(); ?>
				<div class="post" id="post-<?php the_ID(); ?>">
                
                <?php // display go button if one of the basics
						if (in_array($post_ID, $basics)) 
						{
							echo $basic_link;
						} ?> 
                        
                        
					<div class="entry">
						<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
                      
						<?php the_content('Read more &raquo;'); ?>
			
						
			</br>
						<?php comments_template(); ?>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
			
			<div id="navigation">
					<div class="fleft"><?php next_posts_link('&laquo; Older') ?></div>
					<div class="fright"><?php previous_posts_link('Newer &raquo;') ?></div>
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

<?php	} ?>

<?php get_footer(); ?>