<?php /*
Template Name: Pace Calc Template
*/
?>
<?php
// Data Arrays
$run_types = array(
		1 => 'Marathon',
		2 => '1/2 Marathon',
		3 => '20K',
		4 => '15K',
		5 => '10K/10000m',
		6 => '5K/5000m ',
		7 => '3200m',
		8 => '3000m',
		9 => '3K Steeple',
		10 => '1 mile',
		11 => '1500m',
		12 => '800m',
		13 => '400m',
		14 => '100m',
		15 => '10000m XC',
		16 => '8000m XC',
		17 => '6000m XC',
		18 => '5000m XC');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="verify-v1" content="iLezgM8at4loGhsAXvBk9wHfbHVcrBgJGVrDBY/o7ZI=" />

<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">
<style>
.center {
	text-align: center !important;
}
.middle {
	vertical-align: middle !important;
}
.right {
	text-align: right !important;
}
.bold {
	font-weight: bold;
}
.large-text {
	font-size: 24px;
}
.orange {
	background-color: Moccasin;
}
.grey {
	background-color: #CCC;
}
</style>
<script type="text/javascript">
	function update_pacing_cells(goal_race, goal_time_h, goal_time_m, goal_time_s) {

		if (typeof goal_race == 'undefined') {
			var goal_race = $('#goal_race').val();
		}

		if (typeof goal_time_h == 'undefined') {
			var goal_time_h = $('#goal_hh').val();
		}

		if (typeof goal_time_m == 'undefined') {
			var goal_time_m = $('#goal_mm').val();
		}

		if (typeof goal_time_s == 'undefined') {
			var goal_time_s = $('#goal_ss').val();
		}

		if (goal_time_h > 0 || goal_time_m > 0 || goal_time_s > 0) {

			$.ajax({
				url : "actions.php",
				dataType : "jsonp",
				data : {
					'goal_race' : goal_race,
					'goal_time_h' : goal_time_h,
					'goal_time_m' : goal_time_m,
					'goal_time_s' : goal_time_s,
				},
				cache: true,
				success : function(data) {

					$.map(data.goal_race_equivalents, function(item) {
						$('#time_' + item.i).val(item.total_time);
						$('#mile_pace_' + item.i).val(item.mile_pace);
					});

					$.map(data.recovery_runs, function(item) {
						$('#rr_' + item.i).val(item.time);
					});

					$.map(data.moderate_runs, function(item) {
						$('#mr_' + item.i).val(item.time);
					});

					$.map(data.long_runs, function(item) {
						$('#lr_' + item.i).val(item.time);
					});

					$.map(data.tempo_runs, function(item) {
						$('#tr_' + item.i).val(item.time);
					});

					$.map(data.training_goals, function(item) {
						$('#tg_' + item.i + '_1').val(item.time_1);
						$('#tg_' + item.i + '_2').val(item.time_2);
						$('#tg_' + item.i + '_3').val(item.time_3);
						$('#tg_' + item.i + '_4').val(item.time_4);
						$('#tg_' + item.i + '_5').val(item.time_5);
					});

				},
				fail : function(data) {
					alert("error!");
				}
			});

		}

	}
</script>

<title>
<?php wp_title(''); ?>
<?php //if(wp_title('', false)) { echo ' :'; } ?>
<?php //bloginfo('name'); ?>
</title>
    
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" type="text/css" media="screen" />

<link rel="SHORTCUT ICON" href="http://ironmike.sayenkodesign.com/wp-content/themes/GoGo/images/icon.jpg"/>
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <script language="javascript" type="text/javascript" src="<?php bloginfo('template_directory'); ?>/flash.js"></script>
    <style type="text/css" media="screen">
    
            
body{
        background: #fff url("<?php bloginfo('template_directory'); ?>/images/tile_03.jpg");
    
}    
    
.menu ul li.widget ul li{
            background: url("<?php bloginfo('template_directory'); ?>/images/listbullet.gif") no-repeat 0 3px;
                }    

.menu ul li.widget ul li ul li{                
        background: url("<?php bloginfo('template_directory'); ?>/images/listbullet.gif") no-repeat 0 1px;
                }   

/* .midlsldercnt{float:left; width:1075px; height:auto;} */
.leftcatbox{float:left; width:125px; height:220px}
.rightcatslider{float:left; width:850px; height:auto; margin:0 0 0 20px; }
.leftcatimgcntmn{float:left; width:130px; height:auto; border:3px solid #981212;}
.leftcatimgcntmn img{height:130px;}
.leftcatnmcnt{float:left; width:200px; height:auto; margin:8px 0 0 0; font-size:45px; color:#981212; text-align:left;}
.rightimg{float:left; width:194px; height:auto;}                 
              
</style>
    
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/utils.js"></script>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/helper.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/dropdown.linear.columnar.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/default.advanced.css" type="text/css" media="screen" />
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/jquery.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/jquery.dropdown.js"></script>

<!--[if IE ] >
.custom_banner{padding-top: 32px;}    
<![endif]--> 

<?php wp_head(); ?>
<script language="javascript" type="text/javascript" src="<?php bloginfo('template_directory'); ?>/jquery.jcarousel.min.js"></script>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/skin.css" type="text/css" media="screen" />
<script type="text/javascript">

jQuery(document).ready(function() {
    jQuery('#mycarousel').jcarousel();
});

jQuery(document).ready(function() {
    jQuery('#mycarousel1').jcarousel();
});

jQuery(document).ready(function() {
    jQuery('#mycarousel2').jcarousel();
});

jQuery(document).ready(function() {
    jQuery('#mycarousel3').jcarousel();
});

jQuery(document).ready(function() {
    jQuery('#mycarousel4').jcarousel();
});
</script>
</head>
<body onload='update_pacing_cells();';
}?>
<?php // adding wp splash image
if (is_front_page()) 
{ do_action('wsi_first_load_mode'); } ?>

<div id="wrapper">

	<div id="headerwrapper">

    	<div id="header">
			<table style="margin-left:0px; margin-right:0px; width:100%;">
            <tr>
                <td>
                    <a href="http://gogorunning.com/" title="GoGo Running"><img style="display:block" width="150px" alt="gogo running training videos" src="<?php bloginfo('template_directory'); ?>/images/logo_03.png" /></a>
                </td>
                <td>                
					<div class="homedesign">
						<div class="join">
							<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FGoGoRunning%2F216902598341241&amp;layout=button_count&amp;show_faces=true&amp;width=200&amp;action=like&amp;font=verdana&amp;colorscheme=light&amp;height=31" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:90px; height:24px;" allowTransparency="true"></iframe>
							<a href="https://www.facebook.com/pages/GoGoRunning/216902598341241"><img src="<?php bloginfo('template_directory'); ?>/images/fb-icon.png" /></a>	
							<a href="http://twitter.com/#!/gogorunningvids"><img src="<?php bloginfo('template_directory'); ?>/images/facetwit_03.jpg" /></a>
							<a href="http://gogorunning.com/feed/rss/"><img src="<?php bloginfo('template_directory'); ?>/images/rss.png" /></a>
						</div>
                	 	<form id="searchform2" action="http://gogorunning.com" method="get">
							<div class="search">  
                    			<table  border="0" cellpadding="2" cellspacing="0">
                        			<tr>
										<td id="searchtd">
											<input id="s" type="text" style="width: 130px;"  name="s" value="" onfocus="doClear(this)"/>                           
										</td>
										<td>
											<input type="image" style="height:20px; width:35px;" src="<?php bloginfo('template_directory'); ?>/images/gobtn_03.png" value="Go" onmouseover="this.src='<?php bloginfo('template_directory'); ?>/images/gobtn_03_rollover.png'" onmouseout="this.src='<?php bloginfo('template_directory'); ?>/images/gobtn_03.png'" onclick="this.form.submit();"/>
										</td>
                        			</tr>
                    			</table>
							</div>
               	 		</form>
                	</td>
            	</tr>
        	</table>
		</div>
<!--	<div id="socialheader">
		<form action="https://www.trainingpeaks.com/authuser.asp?cid2=5E4PLTL2WD3H2" method="post" name="formxx" id="formxx" style="margin-bottom: 0px; margin-left: 0px; margin-right: 0px; margin-top: 0px; padding-bottom: 0px; padding-left: 0px; padding-right: 0px; padding-top: 0px; position: 0px; border: 0px;">
			<table  border="0" cellpadding="2" cellspacing="0" style="background-color: #FFFFFF; ">
			<tr>
				<td width="64" bgcolor="#FFFFFF"><font color="black" face="rokkitt" size="2">Username</font></td>
				<td width="52" bgcolor="#FFFFFF"><input type="text" name="username" style="width: 50px; font-size: 10px;"></td> 
				<td width="62" bgcolor="#FFFFFF"><font color="black" face="rokkitt" size="2">Password</font></td>
				<td width="58" bgcolor="#FFFFFF"> <input type="password" name="password" style="width: 50px; font-size: 10px;"></td>
				<td width="28" bgcolor="#FFFFFF">
					<input type="image" style="height:20px; width:35px;" src="<?php bloginfo('template_directory'); ?>/images/gobtn_01.png" value="Go" onmouseover="this.src='<?php bloginfo('template_directory'); ?>/images/gobtn_01_rollover.png'" onmouseout="this.src='<?php bloginfo('template_directory'); ?>/images/gobtn_01.png'" onclick="this.form.submit();"/>
				</td>
			</tr>
			</table>
		</form>
	</div> -->
</div>

<?php 

function get_cat_slug($cat_id) {
	$cat_id = (int) $cat_id;
	$category = &get_category($cat_id);
	return $category->slug;
}

function list_sub_categories($current_post_id) {

    //$category = get_the_category($current_post_id);
    //$category_parent = $category[0]->category_parent;
    $category_parent= $current_post_id;

    $args = array(
                  'child_of' => $category_parent
              );

    $sub_categories = get_categories($args);

    foreach ($sub_categories as $sub_category) :

        $sub_args = array(
                  'showposts' => 5,
                  'category__in' => array($sub_category->term_id)
                  );

        $posts = get_posts($sub_args);

        if ($posts) : ?>

            <li class="dir"><?php echo $sub_category->name; ?>
				<ul>
					<?php foreach ($posts as $post) : setup_postdata($post); ?>
		
						<li><a href="<?php echo get_permalink($post->ID); ?>" rel="bookmark"><?php echo $post->post_title; ?></a></li>
		
					<?php endforeach; ?>
					<li><a href="http://gogorunning.com/category/<?php echo get_cat_slug($sub_category->cat_ID); ?>/">...more</a></li>
				</ul>
		</li>
        <?php endif;

    endforeach;

}
?>

<div class="menubar">
	<div class="menu">
		<div id="wrapper2">
				
		<?php // wp_nav_menu( array('menu' => 'top-menu','menu_id'=>'nav','menu_class' => 'dropdown dropdown-linear dropdown-columnar', 'link_before' => '', 'link_after' => '' )); ?>
		
			<ul id="nav" class="dropdown dropdown-linear dropdown-columnar">
				
				  <li><a href="<?php bloginfo('siteurl'); ?>/">Home</a></li>

  				  <li><a href="<?php bloginfo('siteurl'); ?>/store/">Store</a></li>
                  
				  <li><a href="<?php bloginfo('siteurl'); ?>/running-coaches/">RUNNING</a>           
						
<!-- 
<ul>
						  <a href="<?php bloginfo('siteurl'); ?>/pacing-chart/">Pacing Chart</a>
						  <a target="_blank" href="<?php bloginfo('siteurl'); ?>/gogo-basics-training-tutorial/">Training Tutorial</a>
						</ul>

//-->
				  </li>

				  <li><a href="<?php bloginfo('siteurl'); ?>/triathlon-coaches/">TRIATHLON</a></li>

  				  <li><a href="<?php bloginfo('siteurl');# ?>/nutrition-coaches/">Nutrition</a></li>

<!-- 
                  <li>
                  	<a href="<?php bloginfo('siteurl'); ?>/triathlon-coaching">TRI COACHING</a>   
				  </li>
				  
				  <li><a href="<?php bloginfo('siteurl'); ?>/trackclub">Track Club</a> 
					<ul>
						<a href="<?php bloginfo('siteurl'); ?>/race-calendar/">Race Calendar</a>
						<a href="<?php bloginfo('siteurl'); ?>/events/">Events</a>
						<a href="<?php bloginfo('siteurl'); ?>/harbincup/">2012 Harbin Cup Series</a>
                        <a href="<?php bloginfo('siteurl'); ?>/2013-harbin-cup-series/">2013 Foundation Cup Series</a>
						<a href="<?php bloginfo('siteurl'); ?>/contact/">Volunteer</a>
						<a href="<?php bloginfo('siteurl'); ?>/events/gogorunning-track-club-registration/">Join Now</a>
					</ul>
				 </li>
               
 <li><a href="<?php bloginfo('siteurl'); ?>/triathlon-club">Tri Club</a> 
					<ul>
                    	<a href="<?php bloginfo('siteurl'); ?>/tri-weekly-schedule">Weekly Schedule</a>
						<a href="<?php bloginfo('siteurl'); ?>/triathlon-race-calendar/">Triathlon Calendar</a>
						<a href="<?php bloginfo('siteurl'); ?>/events/">Events</a>
                        <a href="<?php bloginfo('siteurl'); ?>/tri-faq">FAQ</a>
						<a href="<?php bloginfo('siteurl'); ?>/events/gogorunning-triathlon-club-registration//">Join Now</a>
					</ul>
				 </li>

//-->

<li><a href="<?php bloginfo('siteurl'); ?>/join-club">Join Club</a> 
					<ul>
                    	<a href="<?php bloginfo('siteurl'); ?>/events/gogorunning-track-club-registration/">Running</a>
						<a href="<?php bloginfo('siteurl'); ?>/triathlon-coaching/">Triathlon </a>
						<a href="<?php bloginfo('siteurl'); ?>/about/robin-luke/">Nutrition</a>
                       
					</ul>
				 </li>

				 




				 
				<li><a href="<?php echo get_permalink('29'); ?>">VIDEO</a>
					<ul>
						<?php list_sub_categories('8');  ?>
					</ul>

				</li> 
				
				<li><a href="<?php bloginfo('siteurl'); ?>/gogoblog">Blog</a>
					<ul>
						<?php list_sub_categories('3');  ?>
					</ul>
				</li>
				
				<!-- <li><a href="<?php bloginfo('siteurl'); ?>/gogo-elite">Elite Team</a></li> //-->
				<!-- <li class="dir"><a href="<?php bloginfo('siteurl'); ?>/about">About</a></li> //-->
				<!-- <li><a href="<?php bloginfo('siteurl'); ?>/advertise">ADVERTISE</a></li> //-->
				<li><a href="<?php bloginfo('siteurl'); ?>/contact">Contact</a></li> 
			</ul>
		</div>
	</div>
</div>


<div id="wrapper2">


<div id="contentwrapper">

<table class="roundbox" align="center">
<tr><td class="roundboxtl"></td><td class="roundboxtm" align="left">
    <table style="margin-top:4px;"><tr>
    <td></td>
    <td></td>
    <td></td>
    
    </tr></table>
<!-- begin sidebar -->
<div id="sidebar">


<div class="menu">

	<ul>


<?php /* WordPress Widget Support */ if (function_exists('dynamic_sidebar') and dynamic_sidebar(1)) { } else { ?>

	<!-- <li class="widget" id="pages"> 
	<h3><?php _e('Pages'); ?></h3>
		<ul>
				<?php wp_list_pages('title_li='); ?>
		</ul>
	</li>
	

	
	<li class="widget" id="links">
		
		<?php wp_list_bookmarks('title_before=<h3>&title_after=</h3>&category_before=&category_after='); ?>
		
	</li>
	
	
 <li class="widget" id="categories"><h3><?php _e('Categories'); ?></h3>
	<ul>
	<?php wp_list_categories('title_li='); ?>
	</ul>
 </li> -->


	

 <li class="widget" id="search">
 		<h3><?php _e('Search'); ?></h3>
 		<ul>

  	 <form id="searchform" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	
		<input type="text" name="s" id="s" style="width:100px" /><input type="submit" value="<?php _e('Search'); ?>" />

	</form>
 		</ul>
 </li>
 
 <li class="widget" id="tags"><h3><?php _e('Tagcloud'); ?></h3>
 
	<div style="padding:10px;"><?php wp_tag_cloud(''); ?></div>

 </li>
 
	 <!-- <li class="widget" id="archives"><h3><?php _e('Archives'); ?></h3>
 	<ul>
	 <?php wp_get_archives('type=monthly'); ?>
 	</ul>
 </li>
 <li class="widget" id="meta"><h3><?php _e('Meta'); ?></h3>
 	<ul>
		<?php wp_register(); ?>
		<li><?php wp_loginout(); ?></li>
		
		<li><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"><?php _e('RSS'); ?></a></li>

		<li><a href="<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('The latest comments to all posts in RSS'); ?>"><?php _e('Comments RSS'); ?></a></li>
		<li><a href="http://validator.w3.org/check/referer" title="<?php _e('This page validates as XHTML 1.0 Transitional'); ?>"><?php _e('Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr>'); ?></a></li>
		<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
		<li><a href="http://wordpress.org/" title="<?php _e('Powered by WordPress, state-of-the-art semantic personal publishing platform.'); ?>"><abbr title="WordPress">WP</abbr></a></li>

		<?php wp_meta(); ?>
	</ul>
 </li>  -->
 
 <li class="widget" id="calendar"> 
	<h3><?php _e('Calendar'); ?></h3>
	 <?php get_calendar(); ?> 
	</li>
 
 
 
<?php } ?>

</ul>


</div>

</div><!-- end sidebar -->

	




<div id="content" style="float:left;width:650px;padding: 0;text-align: left;margin: 0;padding: 0 0 10px 10px;">
<div id="main" style="width:650px;"
	<div class="container">
		<div class="row-fluid">
			<div class="span12">
				<form>
					<legend>Training Pace Calculator</legend>
					<div class="row-fluid">
						<div class="span4">

							<label class="bold">Goal Race</label>
							<select name="goal_race" id="goal_race" onchange="update_pacing_cells();">
								<?
								foreach ($run_types as $i => $name){
								?>
									<option value="<?=$i?>" <?if($_GET["goal_race"]==$i){?> selected="selected"<?}?>><?=$name?></option>
								<?}?>
		  					</select> <br /> <br />

		  					<label class="bold">Goal Time</label>
							<div class="form-inline">
								<select class="input-mini" name="goal_hh" id="goal_hh" onchange="update_pacing_cells();">
									<option value="0" selected="selected">00</option>
									<?php
						    			for ($i=1; $i<=5; $i++) {
									?>
									<option value="<?=$i?>" <?if($_GET["goal_hh"]==$i){?> selected="selected"<?}?>><?=str_pad($i, 2, 0, STR_PAD_LEFT)?></option>
									<?
										}
						    		?>
				    			</select> :
				    			<select class="input-mini" name="goal_mm" id="goal_mm" onchange="update_pacing_cells();">
									<option value="0" selected="selected">00</option>
									<?php
						    			for ($i=1; $i<=59; $i++) {
									?>
									<option value="<?=$i?>" <?if($_GET["goal_mm"]==$i){?> selected="selected"<?}?>><?=str_pad($i, 2, 0, STR_PAD_LEFT)?></option>
									<?
										}
						    		?>
				    			</select> :
				    			<select class="input-mini" name="goal_ss" id="goal_ss" onchange="update_pacing_cells();">
									<option value="0" selected="selected">00</option>
									<?php
						    			for ($i=1; $i<=59; $i++) {
									?>
									<option value="<?=$i?>" <?if($_GET["goal_ss"]==$i){?> selected="selected"<?}?>><?=str_pad($i, 2, 0, STR_PAD_LEFT)?></option>
									<?
										}
						    		?>
					    		</select>
							</div> <br /> <br />

						</div>
						<div class="span4">
							<table class="table table-bordered table-condensed">
								<thead>
									<tr>
										<th colspan="2" class="grey">Goal Race Equivalents</th>
										<th class="grey center">Mile Pace</th>
									</tr>
								</thead>
								<tbody>
					    		<?php
					    			for ($i=1; $i<=9; $i++) {
										echo '<tr>';
										echo '<td class="span4 center middle">'.$run_types[$i].'</td>';
										echo '<td class="span3 center orange"><input class="input-mini" type="text" placeholder="00:00:00" name="time_'.$i.'" id="time_'.$i.'"></td>';
										echo '<td class="span3 center orange"><input class="input-mini" type="text" placeholder="00:00:00" name="mile_pace_'.$i.'" id="mile_pace_'.$i.'"></td>';
										echo '</tr>';
									}
					    		?>
						  	</tbody>
							</table>
						</div>
						<div class="span4">
							<table class="table table-bordered table-condensed">
								<thead>
									<tr>
										<th class="grey" colspan="2">Goal Race Equivalents</th>
										<th class="grey center">Mile Pace</th>
									</tr>
								</thead>
								<tbody>
					    		<?php
					    			for ($i=10; $i<=18; $i++) {
										echo '<tr>';
										echo '<td class="span4 center middle">'.$run_types[$i].'</td>';
										echo '<td class="span3 center orange"><input class="input-mini" type="text" placeholder="00:00:00" name="time_'.$i.'" id="time_'.$i.'"></td>';
										echo '<td class="span3 center orange"><input class="input-mini" type="text" placeholder="00:00:00" name="mile_pace_'.$i.'" id="mile_pace_'.$i.'"></td>';
										echo '</tr>';
									}
					    		?>
						  	</tbody>
							</table>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span12">
				<legend style="font-size:16px;">To achieve your goal you will need to train at the following paces:</legend>

				<div class="span8 pull-right">
					<table class="table table-bordered table-condensed">
						<thead>
							<tr>
								<th colspan="4"></th>
								<th colspan="2" class="center grey">Recovery Runs</th>
							</tr>
							<tr>
								<th colspan="4"></th>
								<th colspan="1" class="center">Zone 0</th>
								<th colspan="1" class="center">Zone 1</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td colspan="2" class="grey">Zone 0 (Very easy)<br />Zone 1 (Easy)</td>
								<td colspan="2" class="center middle">Mile Pace</td>
								<td colspan="1" class="center middle orange"><input class="input-mini" type="text" placeholder="00:00:00" name="rr_0" id="rr_0"></td>
								<td colspan="1" class="center middle orange"><input class="input-mini" type="text" placeholder="00:00:00" name="rr_1" id="rr_1"></td>
							</tr>
					  	</tbody>
					</table>
				</div>

				<div class="span8 pull-right">
					<table class="table table-bordered table-condensed">
						<thead>
							<tr>
								<th colspan="4"></th>
								<th colspan="2" class="center grey">Moderate Runs</th>
							</tr>
							<tr>
								<th colspan="4"></th>
								<th colspan="1" class="center">Zone 1</th>
								<th colspan="1" class="center">Zone 2</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td colspan="2" class="grey">Zone 1 (Easy)<br />Zone 2 (Moderate)</td>
								<td colspan="2" class="center middle">Mile Pace</td>
								<td colspan="1" class="center middle orange"><input class="input-mini" type="text" placeholder="00:00:00" name="mr_1" id="mr_1"></td>
								<td colspan="1" class="center middle orange"><input class="input-mini" type="text" placeholder="00:00:00" name="mr_2" id="mr_2"></td>
							</tr>
					  	</tbody>
					</table>
				</div>

				<div class="span8 pull-right">
					<table class="table table-bordered table-condensed">
						<thead>
							<tr>
								<th colspan="4"></th>
								<th colspan="3" class="center grey">Long Runs</th>
							</tr>
							<tr>
								<th colspan="4"></th>
								<th colspan="1" class="center">Zone 1</th>
								<th colspan="1" class="center">Zone 2</th>
								<th colspan="1" class="center">Zone 3</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td colspan="2" class="grey">Zone 1 (Easy)<br />Zone 2 (Moderate)<br />Zone 3 (Hard)</td>
								<td colspan="2" class="center middle">Mile Pace</td>
								<td colspan="1" class="center middle orange"><input class="input-mini" type="text" placeholder="00:00:00" name="lr_1" id="lr_1"></td>
								<td colspan="1" class="center middle orange"><input class="input-mini" type="text" placeholder="00:00:00" name="lr_2" id="lr_2"></td>
								<td colspan="1" class="center middle orange"><input class="input-mini" type="text" placeholder="00:00:00" name="lr_3" id="lr_3"></td>
							</tr>
					  	</tbody>
					</table>
				</div>

				<div class="span8 pull-right">
					<table class="table table-bordered table-condensed">
						<thead>
							<tr>
								<th colspan="4"></th>
								<th colspan="3" class="center grey">Tempo Runs</th>
							</tr>
							<tr>
								<th colspan="4"></th>
								<th colspan="1" class="center">Zone 2</th>
								<th colspan="1" class="center">Zone 3</th>
								<th colspan="1" class="center">Zone 4</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td colspan="2" class="grey">Zone 2 (Moderate)<br />Zone 3 (Hard)<br />Zone 4 (Very Hard)</td>
								<td colspan="2" class="center middle">Mile Pace</td>
								<td colspan="1" class="center middle orange"><input class="input-mini" type="text" placeholder="00:00:00" name="tr_2" id="tr_2"></td>
								<td colspan="1" class="center middle orange"><input class="input-mini" type="text" placeholder="00:00:00" name="tr_3" id="tr_3"></td>
								<td colspan="1" class="center middle orange"><input class="input-mini" type="text" placeholder="00:00:00" name="tr_4" id="tr_4"></td>
							</tr>
					  	</tbody>
					</table>
				</div>

				<div class="span8 pull-right">
					<table class="table table-bordered table-condensed">
						<thead>
							<tr>
								<th colspan="3"></th>
								<th colspan="5" class="center grey">Special/Specific Training Goals - % Race Pace</th>
							</tr>
							<tr>
								<th colspan="1"></th>
								<th colspan="1" class="center">Race Type</th>
								<th colspan="1" class="center">Pace Unit</th>
								<th colspan="1" class="center">95%</th>
								<th colspan="1" class="center">98%</th>
								<th colspan="1" class="center">100%</th>
								<th colspan="1" class="center">102%</th>
								<th colspan="1" class="center">105%</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($run_types as $i => $name) { ?>
								<tr>
									<?php
										if ($i == 1) {
											$terrain = 'Road';
										} elseif ($i == 5) {
											$terrain = 'Road /<br>Track';
										} elseif ($i == 7) {
											$terrain = 'Track';
										} elseif ($i == 15) {
											$terrain = 'Cross-<br>Country';
										}

										if (in_array($i, array(1,5,7,15))){
											switch ($i) {
												case 1:
													$rowspan = 4;
													break;
												case 5:
													$rowspan = 2;
													break;
												case 7:
													$rowspan = 8;
													break;
												case 15:
													$rowspan = 4;
													break;
											}
											echo '<td rowspan="'.$rowspan.'" colspan="1" class="center large-text middle">'.$terrain.'</td>';
										}

										echo '<td colspan="1" class="center middle">'.$name.'</td>';


									switch ($i) {
										case 8:
										case 9:
											$unit = '1000m';
											break;
										case 10:
										case 11:
										case 12:
										case 13:
											$unit = '400m';
											break;
										case 14:
											$unit = '100m';
											break;
										default:
											$unit = 'Mile';
									}

									echo '<td colspan="1" class="center middle">'.$unit.'</td>';
									?>
									<td colspan="1" class="center middle"><input class="input-mini" type="text" placeholder="00:00:00" id="tg_<?php echo $i; ?>_1"></td>
									<td colspan="1" class="center middle"><input class="input-mini" type="text" placeholder="00:00:00" id="tg_<?php echo $i; ?>_2"></td>
									<td colspan="1" class="center middle orange"><input class="input-mini" type="text" placeholder="00:00:00" id="tg_<?php echo $i; ?>_3"></td>
									<td colspan="1" class="center middle"><input class="input-mini" type="text" placeholder="00:00:00" id="tg_<?php echo $i; ?>_4"></td>
									<td colspan="1" class="center middle"><input class="input-mini" type="text" placeholder="00:00:00" id="tg_<?php echo $i; ?>_5"></td>
								</tr>
							<?php } ?>
					  	</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<script	src="//code.jquery.com/jquery.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js"></script>
</body>

	
	</div> <!-- eof main -->



</div>

</div> 

	<div id="footer">
    
  

 <h4 class="widget-title">Thanks to our Sponsors</h4>			
    <div class="textwidget">
      <div style="background-color:#fff">

<a href="https://www.rivercitybankonline.com/" target="_blank"> <img style="margin: 10px;" height="50" src="http://redmondroadmile.com/wp-content/uploads/2013/04/river-city-bank-300x88.png" alt="river-city-bank" title="River City Bank" class="alignnone  wp-image-582"></a>

<a href="http://floyd.org/" target="_blank"><img style="margin: 10px;" class="alignnone  wp-image-560" title="Floyd Medical Center" alt="Floyd Medical Center" src="http://redmondroadmile.com/wp-content/uploads/2013/04/floyd-300x89.jpg" height="50" /></a>

<a href="http://www.advancerehab.com/" target="_blank"><img style="margin: 10px;"class="alignnone  wp-image-564" title="Advance Rehab" alt="Advance Rehab" src="http://redmondroadmile.com/wp-content/uploads/2013/04/advance-rehab-300x151.jpg" height="50"></a>

<a href="http://garnerandglover.com/" target="_blank"><img style="margin: 10px;"class="alignnone  wp-image-565" title="Garner and Glover" alt="Garner and Glover" src="http://redmondroadmile.com/wp-content/uploads/2013/04/garner-and-glover-300x145.jpg" height="50" /></a>

<a href="http://infinitytherapyforkids.com/news/" target="_blank"><img style="margin: 10px;"class="alignnone  wp-image-565" title="Garner and Glover" alt="Infinity Therapy for Kids" src="http://gogorunning.com/wp-content/uploads/2013/08/infinity_images.jpg" height="50" /></a>

<a href="http://www.hitechsign.com/" target="_blank"><img style="margin: 10px;" class="alignnone  wp-image-566" title="Hi Tech Signs" alt="Hi Tech Signs" src="http://redmondroadmile.com/wp-content/uploads/2013/04/hi-tech-signs-300x127.png" height="50" /></a>


<a href="http://microplusrome.net/" target="_blank"><img style="margin: 10px;" class="alignnone  wp-image-561" title="Micro Plus" alt="Micro Plus" src="http://redmondroadmile.com/wp-content/uploads/2013/04/micro-plus-300x134.png" height="50" /></a>


<a href="http://www.harbinclinic.com/" target="_blank"><img class="alignnone  wp-image-490" style="margin: 10px;" title="Harbin Regional Medical Clinic - Rome, GA" alt="Harbin Regional Medical Clinic - Rome, GA" src="http://redmondroadmile.com/wp-content/uploads/2012/04/Harbin.jpg" height="50"></a>




</div>
</div>
		
		
        
	<div id="footer-inner">
&copy; <?php echo date('Y'); ?> GoGoRunning | <a href="http://gogorunning.com/about">About</a> | <a href="http://gogorunning.com/contact">Contact</a> | <?php /*<a href="http://gogorunning.com/terms-and-conditions">Terms & Conditions</a> |*/ ?><a href="http://gogorunning.com/private-policy">Privacy Policy</a> | <a href="http://gogorunning.com/feed/rss/">RSS Feed</a>

<div style="text-align: right; width: 25%; float: right;">
<a class="button" href="http://gogorunning.us2.list-manage.com/subscribe/post?u=1878a3e0f169d6b607388d9ee&id=0b5cff95f3">Newsletter Sign Up</a>
</div>

	
	</div>
	</div>

</div>
</div>

<?php wp_footer(); ?>
</body>
</html>
	
	