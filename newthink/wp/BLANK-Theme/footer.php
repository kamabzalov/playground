		<div id="footer">

			<?php
			$pages = get_pages();

			foreach ($pages as $page) {
				echo '<a href="';
				echo get_page_link($page->ID);
				echo '">';
				echo $page->post_title;
			} ?>
			&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?>
		</div>



	</div>

	<?php wp_footer(); ?>
	
	<!-- Don't forget analytics -->
	
</body>

</html>
