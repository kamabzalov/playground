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
		
	</div>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<h2 class="postTitle"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

			<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

			<p class="postExcerpt">
				<?php the_content(); ?>
			</p>

			<div class="postmetadata">
				<?php the_tags('Tags: ', ', ', '<br />'); ?>
				Posted in <?php the_category(', ') ?> | 
				<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
			</div>

		</div>

	</div>

	<?php endwhile; ?>

</div>

	<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>

<?php get_footer(); ?>
