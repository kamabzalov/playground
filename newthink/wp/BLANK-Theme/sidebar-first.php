<div id="firstSidebar">

    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
    
        <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->

    	<h2>Recent Posts</h2>

        <div>
            <?php query_posts('posts_per_page=3'); ?>

            <?php while(have_posts()) : the_post();
                echo '<a href="';
                the_permalink();
                echo '">';
                the_title();
                echo '</a>';
                echo '<p>';
                the_excerpt();
                echo '</p>';
                endwhile; ?>

                <?php wp_reset_query(); ?>
        </div>

        <h2>Great articles</h2>

        <?php if(function_exists('fetch_feed')) { ?>
        
            <?php include_once(ABSPATH . WPIC. '/feed.php');
            $feed = fetch_feed('http://www.tutsplus.com/feed/');

            $limit = $feed->get_item_quantity(3);
            $items = $feed->get_items(0, $limit);

            if(!items) {
                echo "Feed not available";
            } else {
                foreach ($items as $item) {
                    echo '<div>';
                    echo '<a href="';
                    echo $item->get_permalink();
                    echo '">';
                    echo $item->get_title();
                    echo '</a>'; ?>
                    <p><?php echo $item->get_content(); ?></p>
                    </div>
                    <?php }


                }
            }?>
    	
    	<h2>Subscribe</h2>
    	<ul>
    		<li><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a></li>
    		<li><a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a></li>
    	</ul>
	
	<?php endif; ?>

</div>