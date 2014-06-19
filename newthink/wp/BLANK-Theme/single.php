<?php get_header(); ?>

<?php get_sidebar('first'); ?>
<?php get_sidebar('second'); ?>

<div id="mainContent">
			<div id="introTitle">
				<h2>Welcome to my Website</h2>
			</div>

			<p id="introParagraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, provident, cum, beatae deserunt doloribus esse eaque obcaecati qui aut dicta reprehenderit incidunt illum aliquid excepturi non inventore optio ratione deleniti.</p>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div id="postLists">

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
			<h2 class="postTitle"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
			
			<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

			<div class="entry">
				
				<p class="postExcerpt">
				<?php the_content(); ?>
			</p>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
				
				<?php the_tags( 'Tags: ', ', ', ''); ?>

			</div>
			
			<?php edit_post_link('Edit this entry','','.'); ?>
			
		</div>

	<?php comments_template(); ?>

</div>

	<?php endwhile; endif; ?>

				</div>			
	

<?php get_footer(); ?>