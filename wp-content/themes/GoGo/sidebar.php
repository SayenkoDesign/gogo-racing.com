<!-- begin sidebar -->
<div id="sidebar">
    <div class="menu">
        <?php if(get_post_type() == 'races' && $side_bar = get_field('side_bar_content')) : ?>
            <?php $side_bar; ?>
        <?php else : ?>
            <ul>
                <?php if (!function_exists('dynamic_sidebar') or !dynamic_sidebar(1)) : ?>
                    <li class="widget" id="search">
                        <h3><?php _e('Search'); ?></h3>
                        <ul>
                            <form id="searchform" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                <input type="text" name="s" id="s" style="width:100px"/><input type="submit" value="<?php _e('Search'); ?>"/>
                            </form>
                        </ul>
                    </li>
                    <li class="widget" id="tags"><h3><?php _e('Tagcloud'); ?></h3>
                        <div style="padding:10px;"><?php wp_tag_cloud(''); ?></div>
                    </li>
                    <li class="widget" id="calendar">
                        <h3><?php _e('Calendar'); ?></h3>
                        <?php get_calendar(); ?>
                    </li>
                <?php endif; ?>
            </ul>
        <?php endif; ?>
    </div>
</div><!-- end sidebar -->

	



