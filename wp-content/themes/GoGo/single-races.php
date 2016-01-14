<?php the_post(); ?>
<?php get_header(); ?>
<?php get_sidebar(); ?>
    <div id="content" style="float:left;width:650px;padding: 0;text-align: left;margin: 0;padding: 0 0 10px 10px;">
                <div class="breadcrumb">
                    <a href="<?php echo get_option('home'); ?>">Home</a> //
                    <a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a>
                </div>
                <div class="post" id="post-<?php the_ID(); ?>">
                    <div class="entry">
                        <h1>
                            <a href="<?php the_permalink() ?>"
                               rel="bookmark"
                               title="Permanent Link to <?php the_title(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h1>
                        <?php
                        /** top buttons */
                        $columns = get_field('buttons_top');
                        $column_count = count($columns);
                        $column_width = floor(99 / $column_count);
                        echo "<div>";
                        while ( have_rows('buttons_top') ) : the_row();
                            $button_top_text = get_sub_field('text');
                            $button_top_link = get_sub_field('link');
                            echo <<<HTML
                            <div style="float: left; width: $column_width%; margin-right: 1px;">
                                <a
                                    href="$button_top_link"
                                    class="sidebarbutton"
                                    target="_blank"
                                />
                                $button_top_text
                                </a>
                            </div>
HTML;
                        endwhile;
                        echo "</div>";

                        /** logo */
                        if($logo = get_field('logo')) {
                            echo <<<HTML
                            <br style="clear:left;" />
                            <br />
                            <a href="$logo" rel="attachment wp-att-640" data-rel="lightbox-0" sizes="(max-width: 700px) 100vw, 700px">
                            <img src="$logo" />
                            </a>
HTML;
                        }

                        /** meta slider */
                        if($metaslider_id = get_field('meta_slider_id')) {
                            echo do_shortcode("[metaslider id=$metaslider_id]");
                        }

                        /** top content */
                        echo get_field('content_top');

                        /** listed content */
                        if(count(get_field('listed_content'))) {
                            echo '<ul class="arrow">';
                            while (have_rows('listed_content')) : the_row();
                                $title = get_sub_field('title');
                                $content = get_sub_field('content');
                                echo <<<HTML
                                <li>
                                    <strong>$title</strong>
                                    <p>$content</p>
                                </li>
HTML;

                            endwhile;
                            echo "</ul>";
                        }

                        /** bottom buttons */
                        $columns = get_field('buttons_bottom');
                        $column_count = count($columns);
                        $column_width = floor(99 / $column_count);
                        echo "<div>";
                        while ( have_rows('buttons_bottom') ) : the_row();
                            $button_top_text = get_sub_field('text');
                            $button_top_link = get_sub_field('link');
                            echo <<<HTML
                            <div style="float: left; width: $column_width%; margin-right: 1px;">
                                <a
                                    href="$button_top_link"
                                    class="sidebarbutton"
                                    target="_blank"
                                />
                                $button_top_text
                                </a>
                            </div>
HTML;
                        endwhile;
                        echo "</div>";

                        /** accordion */
                        $accordion = "[su_accordion]";
                        while ( have_rows('accordion') ) : the_row();
                            $title = get_sub_field('title');
                            $anchor = get_sub_field('anchor');
                            $content = get_sub_field('content');
                            $accordion .= '[su_spoiler title="' . $title . '" anchor="' . $anchor . '"]';
                            $accordion .= $content;
                            $accordion .= "[/su_spoiler]";
                        endwhile;
                        $accordion .= "[/su_accordion]";
                        echo "<br style='clear:left;' /><br />";
                        echo '<div class="su-accordion">';
                        echo do_shortcode($accordion);
                        echo "</div>";

                        /** bottom content */
                        echo get_field('content_bottom');
                        ?>
                    </div>
                </div>
        </div>
    </div>
<?php get_footer(); ?>