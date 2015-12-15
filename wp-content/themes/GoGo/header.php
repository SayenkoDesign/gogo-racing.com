<?php if(is_home()) { ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>


<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="verify-v1" content="iLezgM8at4loGhsAXvBk9wHfbHVcrBgJGVrDBY/o7ZI=" />

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


<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function () {

      $(window).scroll(function () {
          if ($(this).scrollTop() > 100) {
              $('.scrollup').fadeIn();
          } else {
              $('.scrollup').fadeOut();
          }
      });

      $('.scrollup').click(function () {
          $("html, body").animate({
              scrollTop: 0
          }, 600);
          return false;
      });

  });
</script>



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



<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66784307-1', 'auto');
  ga('send', 'pageview');

</script>



</head>
<body>
<?php // adding wp splash image
if (is_front_page()) 
{ do_action('wsi_first_load_mode'); } ?>
<?php if ( function_exists( 'gtm4wp_the_gtm_tag' ) ) { gtm4wp_the_gtm_tag(); } ?>



<div id="wrapper">

<!--<a class="left" target="_blank" href="http://gogorunning.com/racing/rome-30k/" style="display: block; position: fixed; top: 0; width: 50%; height: 100%; left: 0; text-align: right; margin-left: -485px;">
<img src="http://gogorunning.com/wp-content/uploads/2014/07/skin-left22.jpg">
</a>


<a class="right" target="_blank" href="http://gogorunning.com/racing/rome-30k/" style="display: block; position: fixed; top: 0; width: 50%; height: 100%;left: 50%; right: 0; text-align: left; margin-left: 485px; ">
<img src="http://gogorunning.com/wp-content/uploads/2014/07/skin-right22.jpg">
</a>-->


</div>

	<div id="headerwrapper">

    	<div id="header">

<table style="margin-left:40px; margin-right:20px; width:100%;">

            <tr>
                <td>
                    <a href="http://gogo-racing.com/" title="GoGo Running"><img style="display:block" width="170px" style="margin-top:20px;" alt="Race Timing and Event Management" src="http://gogo-racing.com/wp-content/uploads/2015/07/Oficial-GoGo-Racing-logo.png" /></a>
                </td>


                <td>                


<div class="homedesign">

<div class="join">
							<h2>706-206-8545</h2>
							<a href="mailto:JoshuaDeaton@gogorunning.com">JoshuaDeaton@gogorunning.com</a>
						</div>



		


                	 	
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
					<li><a href="http://gogo-racing.com/category/<?php echo get_cat_slug($sub_category->cat_ID); ?>/">...more</a></li>
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

				  <li><a href="http://gogorunning.com/" target="_blank">GoGo Running & The Shoe Box</a></li>

				  <li><a href="<?php bloginfo('siteurl'); ?>/">GoGo Racing</a></li>

  				  <li><a href="<?php bloginfo('siteurl'); ?>/about-us/">About Us</a></li>
<li><a href="<?php bloginfo('siteurl'); ?>/services/">Services</a></li>
				
	  <li><a href="<?php bloginfo('siteurl'); ?>/race-schedule/">Race Schedule</a></li>
                  
				  <li><a href="<?php bloginfo('siteurl'); ?>/results/">Results</a>           
						

  <li>
						  <a href="<?php bloginfo('siteurl'); ?>/race-directors/">Race Directors</a>  </li>

  <li>
						  <a href="<?php bloginfo('siteurl'); ?>/contact-us/">Contact Us</a>
						


				  </li>

			</ul>
		</div>
	</div>
</div>


<div id="skin-wrapper" style="display: block; top: 0px; left: 0px; right: 0px; bottom: 0px; width: 100%; height: 100%; z-index: 1;">








<div id="wrapper2">


<div id="contentwrapper">

<table class="roundbox" align="center">
<tr><td class="roundboxtl"></td><td class="roundboxtm" align="left">
    <table style="margin-top:4px;"><tr>
    <td></td>
    <td></td>
    <td></td>
    
    </tr></table>


<!-- #header -->
<?php } else { ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>


<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="verify-v1" content="iLezgM8at4loGhsAXvBk9wHfbHVcrBgJGVrDBY/o7ZI=" />

<title>
<?php wp_title(''); ?>
<?php //if(wp_title('', false)) { echo ' :'; } ?>
<?php //bloginfo('name'); ?>
</title>
    
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" type="text/css" media="screen" />

<link rel="SHORTCUT ICON" href="http://gogo-racing.com/wp-content/uploads/2015/07/Oficial-GoGo-Racing-logo.png"/>
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


<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function () {

      $(window).scroll(function () {
          if ($(this).scrollTop() > 100) {
              $('.scrollup').fadeIn();
          } else {
              $('.scrollup').fadeOut();
          }
      });

      $('.scrollup').click(function () {
          $("html, body").animate({
              scrollTop: 0
          }, 600);
          return false;
      });

  });
</script>



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
<body>
<?php // adding wp splash image
if (is_front_page()) 
{ do_action('wsi_first_load_mode'); } ?>

<div id="wrapper">

	<div id="headerwrapper">

    	<div id="header">
			
<table style="margin-left:40px; margin-right:20px; width:100%;">

            <tr>
                <td>
                    <a href="http://racing.gogorunning.com/" title="GoGo Running"><img style="display:block" width="170px" style="margin:30px;" alt="Race Timing & Event Management" src="http://gogo-racing.com/wp-content/uploads/2015/07/Oficial-GoGo-Racing-logo.png" /></a>
                </td>
                <td>                
					<div class="homedesign">
						<div class="join">
							<h2>706-206-8545</h2>
							<a href="mailto:JoshuaDeaton@gogorunning.com">JoshuaDeaton@gogorunning.com</a>
						</div>
                	 	
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
								

				  <li><a href="http://gogorunning.com/" target="_blank">GoGo Running & The Shoe Box</a></li>

<li><a href="<?php bloginfo('siteurl'); ?>/">GoGo Racing</a></li>

  				  <li><a href="<?php bloginfo('siteurl'); ?>/about-us/">About Us</a></li>
<li><a href="<?php bloginfo('siteurl'); ?>/services/">Services</a></li>
				
	  <li><a href="<?php bloginfo('siteurl'); ?>/race-schedule/">Race Schedule</a></li>
                  
				  <li><a href="<?php bloginfo('siteurl'); ?>/results/">Results</a>           
						

  <li>
						  <a href="<?php bloginfo('siteurl'); ?>/race-directors/">Race Directors</a>  </li>

  <li>
						  <a href="<?php bloginfo('siteurl'); ?>/contact-us/">Contact Us</a>
						


				  </li>

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

<!-- #header -->
<?php } ?>