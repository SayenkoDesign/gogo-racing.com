<?php /*
Template Name: DVD TEMPLATE
*/
?>


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
				<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h1>
                
                
                <h3>TRAINING PACE CALCULATOR</h3>
<div class="su-row"><div class="su-column su-column-size-1-2"><div class="su-column-inner">
<form action="http://gogorunning.com/pacecalc/" method="get" target="_blank">
<p class="sidebarlabel">Goal Race</p>
<div class="sidebarselectgoal">
<select name="goal_race" >
  <option selected="selected" value="1">Marathon</option>
<option value="2">1/2 Marathon</option>
<option value="3">20K</option>
<option value="4">15K</option>
<option value="5">10K/10000m</option>
<option value="6">5K/5000m </option>
<option value="7">3200m</option>
<option value="8">3000m</option>
<option value="9">3K Steeple</option>
<option value="10">1 mile</option>
<option value="11">1500m</option>
<option value="12">800m</option>
<option value="13">400m</option>
<option value="14">100m</option>
<option value="15">10000m XC</option>
<option value="16">8000m XC</option>
<option value="17">6000m XC</option>
<option value="18">5000m XC</option>
</select> 
</div>


</div>
</div>


<div class="su-column su-column-size-1-2">
<div class="su-column-inner">

<div class="sidebartime">
<p class="sidebarlabel">Goal Time</p>
<select name="goal_hh">
<option value="00">00</option>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
</select>
&nbsp;:&nbsp;
<select name="goal_mm">
<option value="00">00</option>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
<option value="32">32</option>
<option value="33">33</option>
<option value="34">34</option>
<option value="35">35</option>
<option value="36">36</option>
<option value="37">37</option>
<option value="38">38</option>
<option value="39">39</option>
<option value="40">40</option>
<option value="41">41</option>
<option value="42">42</option>
<option value="43">43</option>
<option value="44">44</option>
<option value="45">45</option>
<option value="46">46</option>
<option value="47">47</option>
<option value="48">48</option>
<option value="49">49</option>
<option value="50">50</option>
<option value="51">51</option>
<option value="52">52</option>
<option value="53">53</option>
<option value="54">54</option>
<option value="55">55</option>
<option value="56">56</option>
<option value="57">57</option>
<option value="58">58</option>
<option value="59">59</option>
</select>
&nbsp;:&nbsp;
<select name="goal_ss">
<option value="00">00</option>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
<option value="32">32</option>
<option value="33">33</option>
<option value="34">34</option>
<option value="35">35</option>
<option value="36">36</option>
<option value="37">37</option>
<option value="38">38</option>
<option value="39">39</option>
<option value="40">40</option>
<option value="41">41</option>
<option value="42">42</option>
<option value="43">43</option>
<option value="44">44</option>
<option value="45">45</option>
<option value="46">46</option>
<option value="47">47</option>
<option value="48">48</option>
<option value="49">49</option>
<option value="50">50</option>
<option value="51">51</option>
<option value="52">52</option>
<option value="53">53</option>
<option value="54">54</option>
<option value="55">55</option>
<option value="56">56</option>
<option value="57">57</option>
<option value="58">58</option>
<option value="59">59</option>
</select>
</div>
</div></div></div>
<input class="button" type="submit" value="CALCULATE">
</form>

      

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
